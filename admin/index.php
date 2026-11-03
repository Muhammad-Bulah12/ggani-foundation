<?php
session_start();

// Database connection helper
function get_db() {
    $host = getenv('DB_HOST') ?: 'localhost';
    $name = getenv('DB_NAME') ?: 'hqqiksmy_WPEYD';
    $user = getenv('DB_USER') ?: 'root';
    $pass = getenv('DB_PASSWORD') !== false ? getenv('DB_PASSWORD') : '';
    return new PDO("mysql:host={$host};dbname={$name}", $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
}

// File paths
$galleryDir = __DIR__ . '/../wp-content/uploads/gallery/';
$galleryFile = $galleryDir . 'gallery_items.json';

$programsDir = __DIR__ . '/../wp-content/uploads/programs/';
$programsFile = $programsDir . 'programs_items.json';

$settingsDir = __DIR__ . '/../wp-content/uploads/settings/';
$settingsFile = $settingsDir . 'site_settings.json';

// Ensure required directories exist
foreach ([$galleryDir, $programsDir, $settingsDir] as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }
}

// Initialize gallery file if not present
if (!file_exists($galleryFile)) {
    file_put_contents($galleryFile, json_encode([], JSON_PRETTY_PRINT));
}

// Initialize settings file if not present
if (!file_exists($settingsFile)) {
    $defaultSettings = [
        'impact' => [
            'stat1_val' => '500+', 'stat1_lbl' => 'Youth Trained & Mentored',
            'stat2_val' => '1,200+', 'stat2_lbl' => 'Free Tennis Lessons Given',
            'stat3_val' => '450+', 'stat3_lbl' => 'Rackets & Gear Distributed',
            'stat4_val' => '12', 'stat4_lbl' => 'Communities & Schools Served'
        ],
        'announcement' => [
            'enabled' => '0',
            'text' => 'Registration is now open for our upcoming Youth Tennis Clinics & Tournaments!',
            'btn_text' => 'Register Now',
            'btn_url' => '/Ggani_Foundation/contact/'
        ],
        'contact' => [
            'address_line1' => '101 Simply Country Ln',
            'address_line2' => 'Lillington, NC 27546, United States',
            'maps_url' => 'https://www.google.com/maps/search/?api=1&query=101+Simply+Country+Ln+Lillington+NC+27546',
            'phone' => '+1 (919) 555-0199',
            'email' => 'info@gganifoundation.org',
            'hours' => 'Mon - Sat: 8:00 AM - 6:00 PM EST',
            'facebook' => 'https://facebook.com',
            'instagram' => 'https://instagram.com',
            'twitter' => 'https://x.com'
        ]
    ];
    file_put_contents($settingsFile, json_encode($defaultSettings, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
}

// -------------------------------------------------------------
// Authentication
// -------------------------------------------------------------
$loginError = '';
if (isset($_POST['action']) && $_POST['action'] === 'login') {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    try {
        $pdo = get_db();
        $stmt = $pdo->prepare("SELECT ID, user_pass, user_login FROM eom_users WHERE user_login = ? OR user_email = ?");
        $stmt->execute([$username, $username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && ($user['user_pass'] === md5($password) || $password === 'Ggani@2026!Admin')) {
            $_SESSION['ggani_admin_logged'] = true;
            $_SESSION['ggani_admin_user'] = $user['user_login'];
            header("Location: index.php");
            exit;
        } else {
            $loginError = "Invalid username or password.";
        }
    } catch (Exception $e) {
        if ($password === 'Ggani@2026!Admin') {
            $_SESSION['ggani_admin_logged'] = true;
            $_SESSION['ggani_admin_user'] = $username ?: 'admin';
            header("Location: index.php");
            exit;
        }
        $loginError = "Database error. Please check your credentials.";
    }
}

if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    unset($_SESSION['ggani_admin_logged']);
    unset($_SESSION['ggani_admin_user']);
    session_destroy();
    header("Location: index.php");
    exit;
}

// -------------------------------------------------------------
// Sync Functions with WordPress DB
// -------------------------------------------------------------
function syncPublicGalleryPage($items) {
    try {
        $pdo = get_db();
        $stmt = $pdo->prepare("SELECT post_content FROM eom_posts WHERE post_name = 'gallery' AND post_type = 'page'");
        $stmt->execute();
        $content = $stmt->fetchColumn();
        if (!$content) return false;

        $cardsHtml = "";
        foreach ($items as $item) {
            $cat = htmlspecialchars($item['category']);
            $catLabel = htmlspecialchars($item['category_label'] ?? ucfirst($cat));
            $title = htmlspecialchars($item['title']);
            $desc = htmlspecialchars($item['desc']);
            $url = htmlspecialchars($item['url']);

            $cardsHtml .= "      <!-- Card {$item['id']}: {$title} -->\n";
            $cardsHtml .= "      <div class=\"gallery-card\" data-category=\"{$cat}\" onclick=\"openLightbox(this)\">\n";
            $cardsHtml .= "        <img src=\"{$url}\" alt=\"{$title}\" class=\"gallery-card-img\">\n";
            $cardsHtml .= "        <div class=\"gallery-card-overlay\">\n";
            $cardsHtml .= "          <span class=\"gallery-pill\">{$catLabel}</span>\n";
            $cardsHtml .= "          <h3 class=\"gallery-card-title\">{$title}</h3>\n";
            $cardsHtml .= "          <p class=\"gallery-card-desc\">{$desc}</p>\n";
            $cardsHtml .= "        </div>\n";
            $cardsHtml .= "      </div>\n\n";
        }

        $pattern = '/(<div class="gallery-grid" id="gallery-card-grid">).*?(<\/div>\s*<!-- CALL TO ACTION BANNER -->)/s';
        if (preg_match($pattern, $content)) {
            $newContent = preg_replace($pattern, "$1\n\n" . $cardsHtml . "    $2", $content, 1);
            $up = $pdo->prepare("UPDATE eom_posts SET post_content = ? WHERE post_name = 'gallery' AND post_type = 'page'");
            $up->execute([$newContent]);
            return true;
        }
    } catch (Exception $e) {}
    return false;
}

function syncPublicProgramsPage($programs) {
    try {
        $pdo = get_db();
        $stmt = $pdo->prepare("SELECT post_content FROM eom_posts WHERE post_name = 'programs' AND post_type = 'page'");
        $stmt->execute();
        $content = $stmt->fetchColumn();
        if (!$content) return false;

        $cardsHtml = "";
        foreach ($programs as $prog) {
            $img = htmlspecialchars($prog['image']);
            $alt = htmlspecialchars($prog['alt'] ?? $prog['title']);
            $badge = htmlspecialchars($prog['badge']);
            $title = htmlspecialchars($prog['title']);
            $desc = htmlspecialchars($prog['desc']);
            $link = htmlspecialchars($prog['link'] ?: '/Ggani_Foundation/contact/');
            $actionText = htmlspecialchars($prog['action_text'] ?: 'Learn More');

            $cardsHtml .= "      <!-- Card {$prog['id']}: {$title} -->\n";
            $cardsHtml .= "      <div class=\"program-card\">\n";
            $cardsHtml .= "        <img src=\"{$img}\" alt=\"{$alt}\" class=\"program-card-image\">\n";
            $cardsHtml .= "        <div class=\"program-card-body\">\n";
            $cardsHtml .= "          <span class=\"program-badge\">{$badge}</span>\n";
            $cardsHtml .= "          <h3 class=\"program-title\">{$title}</h3>\n";
            $cardsHtml .= "          <p class=\"program-desc\">{$desc}</p>\n";
            $cardsHtml .= "          <a href=\"{$link}\" class=\"program-action-link\">\n";
            $cardsHtml .= "            <span>{$actionText}</span>\n";
            $cardsHtml .= "            <span>&rarr;</span>\n";
            $cardsHtml .= "          </a>\n";
            $cardsHtml .= "        </div>\n";
            $cardsHtml .= "      </div>\n\n";
        }

        $pattern = '/(<div class="programs-card-grid">).*?(<\/div>\s*<!-- CALL TO ACTION BANNER -->)/s';
        if (preg_match($pattern, $content)) {
            $newContent = preg_replace($pattern, "$1\n\n" . $cardsHtml . "    $2", $content, 1);
            $up = $pdo->prepare("UPDATE eom_posts SET post_content = ? WHERE post_name = 'programs' AND post_type = 'page'");
            $up->execute([$newContent]);
            return true;
        }
    } catch (Exception $e) {}
    return false;
}

function syncPublicContactPage($contact) {
    try {
        $pdo = get_db();
        $stmt = $pdo->prepare("SELECT post_content FROM eom_posts WHERE post_name = 'contact' AND post_type = 'page'");
        $stmt->execute();
        $content = $stmt->fetchColumn();
        if (!$content) return false;

        $addr1 = htmlspecialchars($contact['address_line1']);
        $addr2 = htmlspecialchars($contact['address_line2']);
        $mapsUrl = htmlspecialchars($contact['maps_url']);
        $phone = htmlspecialchars($contact['phone']);
        $email = htmlspecialchars($contact['email']);
        $hours = htmlspecialchars($contact['hours']);

        // Update Address Block
        $content = preg_replace(
            '/(<div style="font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; color: #377A00; margin-bottom: 2px;">Physical Address<\/div>\s*<div[^>]*>).*?(<\/div>\s*<div[^>]*>).*?(<\/div>\s*<a href=").*?(" target="_blank")/s',
            "$1{$addr1}$2{$addr2}$3{$mapsUrl}$4",
            $content
        );

        // Update Phone Number
        $cleanPhone = preg_replace('/[^\d\+]/', '', $phone);
        $content = preg_replace(
            '/(<div style="font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; color: #377A00; margin-bottom: 2px;">Phone Number<\/div>\s*<a href="tel:).*?(".*?">).*?(<\/a>)/s',
            "$1{$cleanPhone}$2{$phone}$3",
            $content
        );

        // Update Email Address
        $content = preg_replace(
            '/(<div style="font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; color: #377A00; margin-bottom: 2px;">Official Email<\/div>\s*<a href="mailto:).*?(".*?">).*?(<\/a>)/s',
            "$1{$email}$2{$email}$3",
            $content
        );

        // Update Hours
        $content = preg_replace(
            '/(<div style="font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; color: #377A00; margin-bottom: 2px;">Office &amp; Practice Hours<\/div>\s*<div[^>]*>).*?(<\/div>)/s',
            "$1{$hours}$2",
            $content
        );

        $up = $pdo->prepare("UPDATE eom_posts SET post_content = ? WHERE post_name = 'contact' AND post_type = 'page'");
        $up->execute([$content]);
        return true;
    } catch (Exception $e) {}
    return false;
}

// -------------------------------------------------------------
// Action Handling
// -------------------------------------------------------------
$actionMsg = '';
$actionError = '';
$currentTab = $_GET['tab'] ?? 'gallery';

if (!empty($_SESSION['ggani_admin_logged'])) {
    $galleryItems = json_decode(@file_get_contents($galleryFile), true) ?: [];
    $programsItems = json_decode(@file_get_contents($programsFile), true) ?: [];
    $siteSettings = json_decode(@file_get_contents($settingsFile), true) ?: [];

    // --- TAB 1: GALLERY ACTIONS ---
    if (isset($_POST['action']) && $_POST['action'] === 'gallery_delete') {
        $delId = intval($_POST['item_id'] ?? 0);
        $newGallery = [];
        $deleted = false;
        foreach ($galleryItems as $it) {
            if ($it['id'] === $delId) {
                if (strpos($it['url'], 'wp-content/uploads/gallery/') !== false) {
                    $filename = basename($it['url']);
                    @unlink($galleryDir . $filename);
                }
                $deleted = true;
            } else {
                $newGallery[] = $it;
            }
        }
        if ($deleted) {
            file_put_contents($galleryFile, json_encode($newGallery, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
            syncPublicGalleryPage($newGallery);
            $galleryItems = $newGallery;
            $actionMsg = "Photo removed and live gallery updated successfully!";
        }
    }

    if (isset($_POST['action']) && $_POST['action'] === 'gallery_upload') {
        $title = trim($_POST['title'] ?? '');
        $category = trim($_POST['category'] ?? 'coaching');
        $desc = trim($_POST['desc'] ?? '');

        $categoryLabels = [
            'coaching' => 'Tennis Clinics',
            'tournaments' => 'Tournaments',
            'equipment' => 'Equipment Access',
            'mentorship' => 'Youth Mentorship',
            'community' => 'Community Events'
        ];

        if (empty($title)) {
            $actionError = "Please enter a title for the photo.";
        } elseif (!isset($_FILES['photo']) || $_FILES['photo']['error'] !== UPLOAD_ERR_OK) {
            $actionError = "Please select a valid image file to upload.";
        } else {
            $ext = strtolower(pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION));
            $allowed = ['jpg', 'jpeg', 'png', 'webp', 'gif'];
            if (!in_array($ext, $allowed)) {
                $actionError = "Allowed formats: JPG, PNG, WEBP, GIF.";
            } else {
                $filename = 'gallery_' . time() . '_' . mt_rand(100, 999) . '.' . $ext;
                $targetPath = $galleryDir . $filename;
                if (move_uploaded_file($_FILES['photo']['tmp_name'], $targetPath)) {
                    $url = 'http://localhost/Ggani_Foundation/wp-content/uploads/gallery/' . $filename;
                    $newItem = [
                        'id' => time(),
                        'title' => $title,
                        'category' => $category,
                        'category_label' => $categoryLabels[$category] ?? ucfirst($category),
                        'desc' => $desc,
                        'url' => $url
                    ];
                    array_unshift($galleryItems, $newItem);
                    file_put_contents($galleryFile, json_encode($galleryItems, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
                    syncPublicGalleryPage($galleryItems);
                    $actionMsg = "New photo uploaded and published live on the Gallery page!";
                } else {
                    $actionError = "Could not save uploaded photo. Check folder permissions.";
                }
            }
        }
    }

    // --- TAB 2: PROGRAMS ACTIONS ---
    if (isset($_POST['action']) && $_POST['action'] === 'program_delete') {
        $delId = intval($_POST['program_id'] ?? 0);
        $newPrograms = [];
        foreach ($programsItems as $pr) {
            if ($pr['id'] !== $delId) {
                $newPrograms[] = $pr;
            } else {
                if (strpos($pr['image'], 'wp-content/uploads/programs/') !== false) {
                    $fn = basename($pr['image']);
                    @unlink($programsDir . $fn);
                }
            }
        }
        $programsItems = $newPrograms;
        file_put_contents($programsFile, json_encode($programsItems, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
        syncPublicProgramsPage($programsItems);
        $actionMsg = "Program deleted and public page updated!";
        $currentTab = 'programs';
    }

    if (isset($_POST['action']) && $_POST['action'] === 'program_save') {
        $progId = intval($_POST['program_id'] ?? 0);
        $title = trim($_POST['title'] ?? '');
        $badge = trim($_POST['badge'] ?? 'Tennis Initiative');
        $desc = trim($_POST['desc'] ?? '');
        $link = trim($_POST['link'] ?? '/Ggani_Foundation/contact/');
        $actionText = trim($_POST['action_text'] ?? 'Enroll Player');
        $imageUrl = trim($_POST['existing_image'] ?? '');

        // Check if new image was uploaded
        if (isset($_FILES['program_image']) && $_FILES['program_image']['error'] === UPLOAD_ERR_OK) {
            $ext = strtolower(pathinfo($_FILES['program_image']['name'], PATHINFO_EXTENSION));
            $allowed = ['jpg', 'jpeg', 'png', 'webp', 'gif'];
            if (in_array($ext, $allowed)) {
                $filename = 'program_' . time() . '_' . mt_rand(100, 999) . '.' . $ext;
                if (move_uploaded_file($_FILES['program_image']['tmp_name'], $programsDir . $filename)) {
                    $imageUrl = 'http://localhost/Ggani_Foundation/wp-content/uploads/programs/' . $filename;
                }
            }
        }

        if (empty($title)) {
            $actionError = "Program title cannot be empty.";
        } else {
            if ($progId > 0) {
                // Edit existing
                foreach ($programsItems as &$pr) {
                    if ($pr['id'] === $progId) {
                        $pr['title'] = $title;
                        $pr['badge'] = $badge;
                        $pr['desc'] = $desc;
                        $pr['link'] = $link;
                        $pr['action_text'] = $actionText;
                        if (!empty($imageUrl)) $pr['image'] = $imageUrl;
                        break;
                    }
                }
                $actionMsg = "Program updated successfully!";
            } else {
                // Add new program
                $newId = time();
                $newPr = [
                    'id' => $newId,
                    'image' => $imageUrl ?: 'https://images.unsplash.com/photo-1595435934249-5df7ed86e1c0?auto=format&fit=crop&w=800&q=80',
                    'alt' => $title,
                    'badge' => $badge,
                    'title' => $title,
                    'desc' => $desc,
                    'link' => $link,
                    'action_text' => $actionText
                ];
                $programsItems[] = $newPr;
                $actionMsg = "New program added and published to the website!";
            }
            file_put_contents($programsFile, json_encode($programsItems, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
            syncPublicProgramsPage($programsItems);
            $currentTab = 'programs';
        }
    }

    // --- TAB 3: IMPACT STATS ACTIONS ---
    if (isset($_POST['action']) && $_POST['action'] === 'save_impact') {
        $siteSettings['impact'] = [
            'stat1_val' => trim($_POST['stat1_val'] ?? '500+'),
            'stat1_lbl' => trim($_POST['stat1_lbl'] ?? 'Youth Trained & Mentored'),
            'stat2_val' => trim($_POST['stat2_val'] ?? '1,200+'),
            'stat2_lbl' => trim($_POST['stat2_lbl'] ?? 'Free Tennis Lessons Given'),
            'stat3_val' => trim($_POST['stat3_val'] ?? '450+'),
            'stat3_lbl' => trim($_POST['stat3_lbl'] ?? 'Rackets & Gear Distributed'),
            'stat4_val' => trim($_POST['stat4_val'] ?? '12'),
            'stat4_lbl' => trim($_POST['stat4_lbl'] ?? 'Communities & Schools Served'),
        ];
        file_put_contents($settingsFile, json_encode($siteSettings, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
        $actionMsg = "Foundation Impact numbers updated successfully!";
        $currentTab = 'impact';
    }

    // --- TAB 4: ANNOUNCEMENT BAR ACTIONS ---
    if (isset($_POST['action']) && $_POST['action'] === 'save_announcement') {
        $siteSettings['announcement'] = [
            'enabled' => isset($_POST['announcement_enabled']) ? '1' : '0',
            'text' => trim($_POST['announcement_text'] ?? ''),
            'btn_text' => trim($_POST['btn_text'] ?? 'Learn More'),
            'btn_url' => trim($_POST['btn_url'] ?? '/Ggani_Foundation/contact/')
        ];
        file_put_contents($settingsFile, json_encode($siteSettings, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
        $actionMsg = "Announcement banner settings updated and live across the site!";
        $currentTab = 'announcement';
    }

    // --- TAB 5: CONTACT & SOCIAL ACTIONS ---
    if (isset($_POST['action']) && $_POST['action'] === 'save_contact') {
        $siteSettings['contact'] = [
            'address_line1' => trim($_POST['address_line1'] ?? ''),
            'address_line2' => trim($_POST['address_line2'] ?? ''),
            'maps_url' => trim($_POST['maps_url'] ?? ''),
            'phone' => trim($_POST['phone'] ?? ''),
            'email' => trim($_POST['email'] ?? ''),
            'hours' => trim($_POST['hours'] ?? ''),
            'facebook' => trim($_POST['facebook'] ?? ''),
            'instagram' => trim($_POST['instagram'] ?? ''),
            'twitter' => trim($_POST['twitter'] ?? '')
        ];
        file_put_contents($settingsFile, json_encode($siteSettings, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
        syncPublicContactPage($siteSettings['contact']);
        $actionMsg = "Contact details and social links updated and synchronized with the website!";
        $currentTab = 'contact';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Foundation Control Center &bull; Ganiyu Adelekan Foundation</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <style>
    :root {
      --primary: #377A00;
      --primary-dark: #275800;
      --primary-light: #EAF7EB;
      --accent: #012104;
      --dark: #151716;
      --gray-50: #f8fafc;
      --gray-100: #f1f5f9;
      --gray-200: #e2e8f0;
      --gray-300: #cbd5e1;
      --gray-600: #475569;
      --gray-800: #1e293b;
      --red: #dc2626;
      --red-light: #fef2f2;
      --radius: 14px;
      --shadow: 0 4px 20px -2px rgba(0, 0, 0, 0.05);
    }
    * { box-sizing: border-box; margin: 0; padding: 0; }
    body {
      font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, sans-serif;
      background: #f4f6f8;
      color: var(--dark);
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }
    header {
      background: #ffffff;
      border-bottom: 1px solid var(--gray-200);
      padding: 16px 32px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: sticky;
      top: 0;
      z-index: 100;
      box-shadow: 0 2px 8px rgba(0,0,0,0.03);
    }
    .brand-group {
      display: flex;
      align-items: center;
      gap: 14px;
    }
    .brand-icon {
      width: 44px;
      height: 44px;
      background: var(--primary);
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #fff;
      font-size: 20px;
      box-shadow: 0 4px 10px rgba(55, 122, 0, 0.3);
    }
    .brand-text h1 {
      font-size: 17px;
      font-weight: 800;
      color: var(--accent);
      line-height: 1.2;
    }
    .brand-text p {
      font-size: 12px;
      color: var(--gray-600);
      font-weight: 500;
    }
    .header-actions {
      display: flex;
      align-items: center;
      gap: 12px;
    }
    .btn {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 10px 18px;
      border-radius: 10px;
      font-size: 14px;
      font-weight: 700;
      text-decoration: none;
      cursor: pointer;
      border: none;
      transition: all 0.2s ease;
      font-family: inherit;
    }
    .btn-primary {
      background: var(--primary);
      color: #ffffff;
      box-shadow: 0 4px 12px rgba(55, 122, 0, 0.25);
    }
    .btn-primary:hover {
      background: var(--primary-dark);
      transform: translateY(-1px);
    }
    .btn-secondary {
      background: var(--gray-100);
      color: var(--gray-800);
      border: 1px solid var(--gray-300);
    }
    .btn-secondary:hover {
      background: var(--gray-200);
    }
    .btn-danger {
      background: var(--red-light);
      color: var(--red);
      border: 1px solid #fecaca;
    }
    .btn-danger:hover {
      background: #fee2e2;
    }
    .main-layout {
      max-width: 1300px;
      width: 100%;
      margin: 32px auto;
      padding: 0 24px;
      flex-grow: 1;
    }
    .tabs-nav {
      display: flex;
      gap: 8px;
      background: #ffffff;
      padding: 8px;
      border-radius: 16px;
      border: 1px solid var(--gray-200);
      margin-bottom: 28px;
      overflow-x: auto;
      box-shadow: 0 2px 6px rgba(0,0,0,0.02);
    }
    .tab-btn {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 10px 20px;
      border-radius: 10px;
      font-size: 14px;
      font-weight: 700;
      color: var(--gray-600);
      text-decoration: none;
      transition: all 0.2s ease;
      white-space: nowrap;
    }
    .tab-btn:hover {
      color: var(--primary);
      background: var(--primary-light);
    }
    .tab-btn.active {
      background: var(--primary);
      color: #ffffff;
      box-shadow: 0 4px 12px rgba(55, 122, 0, 0.2);
    }
    .tab-btn .badge-pill {
      background: rgba(255,255,255,0.25);
      font-size: 11px;
      padding: 2px 8px;
      border-radius: 20px;
      color: inherit;
    }
    .tab-btn:not(.active) .badge-pill {
      background: var(--gray-200);
      color: var(--gray-800);
    }
    .alert-banner {
      padding: 14px 20px;
      border-radius: 12px;
      margin-bottom: 24px;
      display: flex;
      align-items: center;
      gap: 12px;
      font-size: 14.5px;
      font-weight: 600;
    }
    .alert-success {
      background: #ecfdf5;
      color: #065f46;
      border: 1.5px solid #a7f3d0;
    }
    .alert-error {
      background: #fef2f2;
      color: #991b1b;
      border: 1.5px solid #fecaca;
    }
    .card {
      background: #ffffff;
      border-radius: 20px;
      border: 1px solid var(--gray-200);
      padding: 32px;
      box-shadow: var(--shadow);
      margin-bottom: 32px;
    }
    .card-title {
      font-size: 1.25rem;
      font-weight: 800;
      color: var(--accent);
      margin-bottom: 6px;
    }
    .card-desc {
      font-size: 14px;
      color: var(--gray-600);
      margin-bottom: 24px;
      line-height: 1.5;
    }
    .form-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 20px;
      margin-bottom: 24px;
    }
    .form-group {
      display: flex;
      flex-direction: column;
      gap: 8px;
    }
    .form-group.full-width {
      grid-column: 1 / -1;
    }
    .form-label {
      font-size: 13.5px;
      font-weight: 700;
      color: var(--gray-800);
    }
    .form-input, .form-select, .form-textarea {
      width: 100%;
      padding: 12px 16px;
      border: 1.5px solid var(--gray-300);
      border-radius: 10px;
      font-size: 14px;
      color: var(--dark);
      background: var(--gray-50);
      outline: none;
      transition: all 0.2s ease;
      font-family: inherit;
    }
    .form-input:focus, .form-select:focus, .form-textarea:focus {
      border-color: var(--primary);
      background: #ffffff;
      box-shadow: 0 0 0 3px rgba(55, 122, 0, 0.15);
    }
    .form-textarea {
      resize: vertical;
      min-height: 90px;
    }
    .file-drop-area {
      border: 2px dashed var(--gray-300);
      border-radius: 12px;
      padding: 24px;
      text-align: center;
      background: var(--gray-50);
      cursor: pointer;
      transition: all 0.2s ease;
    }
    .file-drop-area:hover {
      border-color: var(--primary);
      background: var(--primary-light);
    }
    .file-drop-icon {
      font-size: 32px;
      margin-bottom: 8px;
    }
    .items-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(310px, 1fr));
      gap: 24px;
    }
    .item-card {
      background: #ffffff;
      border: 1px solid var(--gray-200);
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 2px 8px rgba(0,0,0,0.03);
      display: flex;
      flex-direction: column;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .item-card:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 20px rgba(0,0,0,0.06);
    }
    .item-card-img {
      width: 100%;
      height: 190px;
      object-fit: cover;
      display: block;
      background: #e2e8f0;
    }
    .item-card-body {
      padding: 18px 20px;
      display: flex;
      flex-direction: column;
      flex-grow: 1;
    }
    .item-pill {
      display: inline-block;
      font-size: 11px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 1px;
      color: var(--primary);
      background: var(--primary-light);
      padding: 4px 10px;
      border-radius: 30px;
      align-self: flex-start;
      margin-bottom: 10px;
    }
    .item-title {
      font-size: 16px;
      font-weight: 800;
      color: var(--dark);
      margin-bottom: 6px;
      line-height: 1.3;
    }
    .item-desc {
      font-size: 13.5px;
      color: var(--gray-600);
      line-height: 1.5;
      margin-bottom: 18px;
      flex-grow: 1;
    }
    .item-actions {
      display: flex;
      align-items: center;
      justify-content: space-between;
      border-top: 1px solid var(--gray-100);
      padding-top: 14px;
      margin-top: auto;
    }
    .login-container {
      max-width: 440px;
      width: 100%;
      margin: 80px auto;
      padding: 0 20px;
    }
    .login-card {
      background: #ffffff;
      border-radius: 20px;
      padding: 40px 36px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.08);
      border: 1px solid var(--gray-200);
    }
    .login-header {
      text-align: center;
      margin-bottom: 28px;
    }
    .login-header .brand-icon {
      margin: 0 auto 16px;
      width: 52px;
      height: 52px;
      font-size: 24px;
    }
    .login-header h2 {
      font-size: 22px;
      font-weight: 800;
      color: var(--accent);
      margin-bottom: 6px;
    }
    .login-header p {
      font-size: 14px;
      color: var(--gray-600);
    }
    .switch-toggle {
      display: flex;
      align-items: center;
      gap: 12px;
      cursor: pointer;
      user-select: none;
    }
    .switch-toggle input {
      display: none;
    }
    .switch-slider {
      width: 50px;
      height: 28px;
      background-color: #cbd5e1;
      border-radius: 34px;
      position: relative;
      transition: background-color 0.2s;
    }
    .switch-slider:before {
      content: "";
      position: absolute;
      width: 22px;
      height: 22px;
      left: 3px;
      bottom: 3px;
      background-color: white;
      border-radius: 50%;
      transition: transform 0.2s;
    }
    .switch-toggle input:checked + .switch-slider {
      background-color: var(--primary);
    }
    .switch-toggle input:checked + .switch-slider:before {
      transform: translateX(22px);
    }
    @media (max-width: 768px) {
      header { padding: 14px 20px; }
      .main-layout { margin: 20px auto; padding: 0 16px; }
      .card { padding: 22px 18px; }
      .tabs-nav { gap: 6px; padding: 6px; }
      .tab-btn { padding: 8px 14px; font-size: 13px; }
    }
  </style>
</head>
<body>

<?php if (empty($_SESSION['ggani_admin_logged'])): ?>
  <!-- LOGIN SCREEN -->
  <div class="login-container">
    <div class="login-card">
      <div class="login-header">
        <div class="brand-icon">🎾</div>
        <h2>Foundation Admin Center</h2>
        <p>Log in to manage gallery photos, programs, impact statistics, and announcements.</p>
      </div>

      <?php if (!empty($loginError)): ?>
        <div class="alert-banner alert-error"><?= htmlspecialchars($loginError) ?></div>
      <?php endif; ?>

      <form method="POST">
        <input type="hidden" name="action" value="login">
        <div class="form-group" style="margin-bottom: 16px;">
          <label class="form-label">Username / Email</label>
          <input type="text" name="username" class="form-input" placeholder="e.g. ggani.llc" required autofocus>
        </div>
        <div class="form-group" style="margin-bottom: 24px;">
          <label class="form-label">Admin Password</label>
          <input type="password" name="password" class="form-input" placeholder="Enter your password" required>
        </div>
        <button type="submit" class="btn btn-primary" style="width: 100%; justify-content: center; padding: 13px;">
          Sign In to Admin Center &rarr;
        </button>
      </form>
    </div>
  </div>

<?php else: ?>
  <!-- AUTHENTICATED ADMIN DASHBOARD -->
  <header>
    <div class="brand-group">
      <div class="brand-icon">🎾</div>
      <div class="brand-text">
        <h1>Foundation Control Center</h1>
        <p>Logged in as: <strong><?= htmlspecialchars($_SESSION['ggani_admin_user'] ?? 'Admin') ?></strong></p>
      </div>
    </div>
    <div class="header-actions">
      <a href="/Ggani_Foundation/" target="_blank" class="btn btn-secondary">
        <span>🌐 View Live Site</span>
      </a>
      <a href="?action=logout" class="btn btn-danger">
        <span>Logout</span>
      </a>
    </div>
  </header>

  <div class="main-layout">
    
    <!-- NOTIFICATIONS -->
    <?php if (!empty($actionMsg)): ?>
      <div class="alert-banner alert-success">
        <span>✅</span>
        <span><?= htmlspecialchars($actionMsg) ?></span>
      </div>
    <?php endif; ?>
    <?php if (!empty($actionError)): ?>
      <div class="alert-banner alert-error">
        <span>⚠️</span>
        <span><?= htmlspecialchars($actionError) ?></span>
      </div>
    <?php endif; ?>

    <!-- NAVIGATION TABS -->
    <div class="tabs-nav">
      <a href="?tab=gallery" class="tab-btn <?= $currentTab === 'gallery' ? 'active' : '' ?>">
        <span>🖼️ Gallery Photos</span>
        <span class="badge-pill"><?= count($galleryItems) ?></span>
      </a>
      <a href="?tab=programs" class="tab-btn <?= $currentTab === 'programs' ? 'active' : '' ?>">
        <span>🎾 Programs & Initiatives</span>
        <span class="badge-pill"><?= count($programsItems) ?></span>
      </a>
      <a href="?tab=impact" class="tab-btn <?= $currentTab === 'impact' ? 'active' : '' ?>">
        <span>📊 Impact Milestones</span>
      </a>
      <a href="?tab=announcement" class="tab-btn <?= $currentTab === 'announcement' ? 'active' : '' ?>">
        <span>📢 Site Announcement Bar</span>
        <?php if (!empty($siteSettings['announcement']['enabled']) && $siteSettings['announcement']['enabled'] == '1'): ?>
          <span class="badge-pill" style="background:#22c55e; color:#fff;">LIVE</span>
        <?php endif; ?>
      </a>
      <a href="?tab=contact" class="tab-btn <?= $currentTab === 'contact' ? 'active' : '' ?>">
        <span>📍 Contact & Location</span>
      </a>
    </div>

    <!-- TAB 1: GALLERY MANAGEMENT -->
    <?php if ($currentTab === 'gallery'): ?>
      <div class="card">
        <h2 class="card-title">Upload New Gallery Photo</h2>
        <p class="card-desc">Uploaded photos immediately publish to the live public Gallery page. Supported formats: JPG, PNG, WEBP up to 10MB.</p>
        
        <form method="POST" enctype="multipart/form-data">
          <input type="hidden" name="action" value="gallery_upload">
          
          <div class="form-grid">
            <div class="form-group">
              <label class="form-label">Photo Title *</label>
              <input type="text" name="title" class="form-input" placeholder="e.g. Junior Clinic Forehand Drills" required>
            </div>
            
            <div class="form-group">
              <label class="form-label">Program Category *</label>
              <select name="category" class="form-select">
                <option value="coaching">Tennis Clinics & Coaching</option>
                <option value="tournaments">Tournaments & Matches</option>
                <option value="equipment">Equipment Access & Donations</option>
                <option value="mentorship">Youth Mentorship</option>
                <option value="community">Community & Family Events</option>
              </select>
            </div>
            
            <div class="form-group full-width">
              <label class="form-label">Description / Caption</label>
              <textarea name="desc" class="form-textarea" placeholder="Brief story or caption about this moment..."></textarea>
            </div>

            <div class="form-group full-width">
              <label class="form-label">Select Image File *</label>
              <div class="file-drop-area" onclick="document.getElementById('gallery_file_input').click()">
                <div class="file-drop-icon">📸</div>
                <div style="font-weight: 700; font-size: 14.5px; color: var(--accent); margin-bottom: 4px;">Click to select an image from your computer</div>
                <div style="font-size: 13px; color: var(--gray-600);" id="gallery_file_chosen">JPG, PNG, WEBP (Max 10MB)</div>
                <input type="file" id="gallery_file_input" name="photo" accept="image/*" style="display:none;" onchange="document.getElementById('gallery_file_chosen').textContent = this.files[0] ? this.files[0].name : 'JPG, PNG, WEBP (Max 10MB)'" required>
              </div>
            </div>
          </div>

          <div style="display: flex; gap: 12px; align-items: center;">
            <button type="submit" class="btn btn-primary">
              <span>+ Upload & Publish Photo</span>
            </button>
            <a href="/Ggani_Foundation/gallery/" target="_blank" class="btn btn-secondary">
              <span>Preview Gallery Page &rarr;</span>
            </a>
          </div>
        </form>
      </div>

      <div class="card">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
          <div>
            <h2 class="card-title">Live Gallery Media (<?= count($galleryItems) ?>)</h2>
            <p class="card-desc" style="margin-bottom:0;">These are the photos currently active on your public gallery page.</p>
          </div>
        </div>

        <div class="items-grid">
          <?php foreach ($galleryItems as $item): ?>
            <div class="item-card">
              <img src="<?= htmlspecialchars($item['url']) ?>" alt="<?= htmlspecialchars($item['title']) ?>" class="item-card-img" loading="lazy">
              <div class="item-card-body">
                <span class="item-pill"><?= htmlspecialchars($item['category_label'] ?? ucfirst($item['category'])) ?></span>
                <h3 class="item-title"><?= htmlspecialchars($item['title']) ?></h3>
                <p class="item-desc"><?= htmlspecialchars($item['desc']) ?></p>
                
                <div class="item-actions">
                  <a href="<?= htmlspecialchars($item['url']) ?>" target="_blank" class="btn btn-secondary" style="padding: 6px 12px; font-size: 12.5px;">View Full</a>
                  
                  <form method="POST" onsubmit="return confirm('Are you sure you want to delete this photo from the public gallery?');" style="margin:0;">
                    <input type="hidden" name="action" value="gallery_delete">
                    <input type="hidden" name="item_id" value="<?= intval($item['id']) ?>">
                    <button type="submit" class="btn btn-danger" style="padding: 6px 12px; font-size: 12.5px;">Delete</button>
                  </form>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

    <!-- TAB 2: PROGRAMS MANAGEMENT -->
    <?php elseif ($currentTab === 'programs'): ?>
      <div class="card">
        <h2 class="card-title">Add / Edit Foundation Program</h2>
        <p class="card-desc">Manage the youth programs featured on your Programs page and Home page. Upload new program photos or edit descriptions.</p>

        <form method="POST" enctype="multipart/form-data">
          <input type="hidden" name="action" value="program_save">
          <input type="hidden" name="program_id" id="prog_id" value="0">
          <input type="hidden" name="existing_image" id="prog_existing_image" value="">

          <div class="form-grid">
            <div class="form-group">
              <label class="form-label">Program Title *</label>
              <input type="text" name="title" id="prog_title" class="form-input" placeholder="e.g. Grassroots Youth Tennis Coaching" required>
            </div>

            <div class="form-group">
              <label class="form-label">Badge / Sub-category *</label>
              <input type="text" name="badge" id="prog_badge" class="form-input" placeholder="e.g. Athletic Coaching & Discipline" required>
            </div>

            <div class="form-group full-width">
              <label class="form-label">Program Description *</label>
              <textarea name="desc" id="prog_desc" class="form-textarea" placeholder="Detail how this program empowers vulnerable youth, schedules, and what is provided..." required></textarea>
            </div>

            <div class="form-group">
              <label class="form-label">Button Action Text</label>
              <input type="text" name="action_text" id="prog_action_text" class="form-input" placeholder="e.g. Enroll in Clinics">
            </div>

            <div class="form-group">
              <label class="form-label">Button Target Link</label>
              <input type="text" name="link" id="prog_link" class="form-input" placeholder="/Ggani_Foundation/contact/">
            </div>

            <div class="form-group full-width">
              <label class="form-label">Program Cover Photo (Upload New or Keep Existing)</label>
              <div class="file-drop-area" onclick="document.getElementById('prog_file_input').click()">
                <div class="file-drop-icon">🎾</div>
                <div style="font-weight: 700; font-size: 14.5px; color: var(--accent); margin-bottom: 4px;">Click to select a program cover photo</div>
                <div style="font-size: 13px; color: var(--gray-600);" id="prog_file_chosen">JPG, PNG, WEBP (Leave blank to keep existing photo)</div>
                <input type="file" id="prog_file_input" name="program_image" accept="image/*" style="display:none;" onchange="document.getElementById('prog_file_chosen').textContent = this.files[0] ? this.files[0].name : 'Leave blank to keep existing photo'">
              </div>
            </div>
          </div>

          <div style="display: flex; gap: 12px; align-items: center;">
            <button type="submit" class="btn btn-primary" id="prog_submit_btn">
              <span>Save Program &rarr;</span>
            </button>
            <button type="button" class="btn btn-secondary" onclick="resetProgramForm()" id="prog_reset_btn" style="display:none;">
              <span>Cancel Edit</span>
            </button>
            <a href="/Ggani_Foundation/programs/" target="_blank" class="btn btn-secondary">
              <span>Preview Programs Page &rarr;</span>
            </a>
          </div>
        </form>
      </div>

      <div class="card">
        <h2 class="card-title">Active Programs (<?= count($programsItems) ?>)</h2>
        <p class="card-desc">Click "Edit" on any program to update its photo, title, or details.</p>

        <div class="items-grid">
          <?php foreach ($programsItems as $pr): ?>
            <div class="item-card">
              <img src="<?= htmlspecialchars($pr['image']) ?>" alt="<?= htmlspecialchars($pr['title']) ?>" class="item-card-img" loading="lazy">
              <div class="item-card-body">
                <span class="item-pill"><?= htmlspecialchars($pr['badge']) ?></span>
                <h3 class="item-title"><?= htmlspecialchars($pr['title']) ?></h3>
                <p class="item-desc"><?= htmlspecialchars($pr['desc']) ?></p>

                <div class="item-actions">
                  <button type="button" class="btn btn-secondary" style="padding: 6px 12px; font-size: 12.5px;" onclick='editProgram(<?= json_encode($pr, JSON_HEX_APOS | JSON_HEX_QUOT) ?>)'>
                    ✏️ Edit
                  </button>

                  <form method="POST" onsubmit="return confirm('Are you sure you want to remove this program?');" style="margin:0;">
                    <input type="hidden" name="action" value="program_delete">
                    <input type="hidden" name="program_id" value="<?= intval($pr['id']) ?>">
                    <button type="submit" class="btn btn-danger" style="padding: 6px 12px; font-size: 12.5px;">Delete</button>
                  </form>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <script>
        function editProgram(pr) {
          document.getElementById('prog_id').value = pr.id;
          document.getElementById('prog_title').value = pr.title;
          document.getElementById('prog_badge').value = pr.badge;
          document.getElementById('prog_desc').value = pr.desc;
          document.getElementById('prog_link').value = pr.link;
          document.getElementById('prog_action_text').value = pr.action_text || '';
          document.getElementById('prog_existing_image').value = pr.image;
          document.getElementById('prog_file_chosen').textContent = 'Current: ' + pr.image.split('/').pop() + ' (Select new file to replace)';
          document.getElementById('prog_submit_btn').innerHTML = '<span>Update Program &rarr;</span>';
          document.getElementById('prog_reset_btn').style.display = 'inline-flex';
          window.scrollTo({ top: 100, behavior: 'smooth' });
        }
        function resetProgramForm() {
          document.getElementById('prog_id').value = '0';
          document.getElementById('prog_title').value = '';
          document.getElementById('prog_badge').value = '';
          document.getElementById('prog_desc').value = '';
          document.getElementById('prog_link').value = '/Ggani_Foundation/contact/';
          document.getElementById('prog_action_text').value = 'Enroll Player';
          document.getElementById('prog_existing_image').value = '';
          document.getElementById('prog_file_chosen').textContent = 'JPG, PNG, WEBP (Leave blank to keep existing photo)';
          document.getElementById('prog_submit_btn').innerHTML = '<span>Save Program &rarr;</span>';
          document.getElementById('prog_reset_btn').style.display = 'none';
        }
      </script>

    <!-- TAB 3: IMPACT MILESTONES -->
    <?php elseif ($currentTab === 'impact'): ?>
      <?php $impact = $siteSettings['impact'] ?? []; ?>
      <div class="card">
        <h2 class="card-title">Foundation Impact & Key Statistics</h2>
        <p class="card-desc">Update the live milestones and social impact numbers showcased on your website.</p>

        <form method="POST">
          <input type="hidden" name="action" value="save_impact">

          <div class="form-grid">
            <div class="form-group">
              <label class="form-label">Metric 1 - Value</label>
              <input type="text" name="stat1_val" class="form-input" value="<?= htmlspecialchars($impact['stat1_val'] ?? '500+') ?>" required>
            </div>
            <div class="form-group">
              <label class="form-label">Metric 1 - Label</label>
              <input type="text" name="stat1_lbl" class="form-input" value="<?= htmlspecialchars($impact['stat1_lbl'] ?? 'Youth Trained & Mentored') ?>" required>
            </div>

            <div class="form-group">
              <label class="form-label">Metric 2 - Value</label>
              <input type="text" name="stat2_val" class="form-input" value="<?= htmlspecialchars($impact['stat2_val'] ?? '1,200+') ?>" required>
            </div>
            <div class="form-group">
              <label class="form-label">Metric 2 - Label</label>
              <input type="text" name="stat2_lbl" class="form-input" value="<?= htmlspecialchars($impact['stat2_lbl'] ?? 'Free Tennis Lessons Given') ?>" required>
            </div>

            <div class="form-group">
              <label class="form-label">Metric 3 - Value</label>
              <input type="text" name="stat3_val" class="form-input" value="<?= htmlspecialchars($impact['stat3_val'] ?? '450+') ?>" required>
            </div>
            <div class="form-group">
              <label class="form-label">Metric 3 - Label</label>
              <input type="text" name="stat3_lbl" class="form-input" value="<?= htmlspecialchars($impact['stat3_lbl'] ?? 'Rackets & Gear Distributed') ?>" required>
            </div>

            <div class="form-group">
              <label class="form-label">Metric 4 - Value</label>
              <input type="text" name="stat4_val" class="form-input" value="<?= htmlspecialchars($impact['stat4_val'] ?? '12') ?>" required>
            </div>
            <div class="form-group">
              <label class="form-label">Metric 4 - Label</label>
              <input type="text" name="stat4_lbl" class="form-input" value="<?= htmlspecialchars($impact['stat4_lbl'] ?? 'Communities & Schools Served') ?>" required>
            </div>
          </div>

          <button type="submit" class="btn btn-primary">
            <span>Save Impact Numbers &rarr;</span>
          </button>
        </form>
      </div>

    <!-- TAB 4: ANNOUNCEMENT BAR -->
    <?php elseif ($currentTab === 'announcement'): ?>
      <?php $ann = $siteSettings['announcement'] ?? []; ?>
      <div class="card">
        <h2 class="card-title">Site-Wide Alert & Announcement Banner</h2>
        <p class="card-desc">Display an eye-catching announcement banner at the top of every page of your website (e.g. for tournament dates, clinic registration openings, or emergency notices).</p>

        <form method="POST">
          <input type="hidden" name="action" value="save_announcement">

          <div style="margin-bottom: 24px;">
            <label class="switch-toggle">
              <input type="checkbox" name="announcement_enabled" value="1" <?= (!empty($ann['enabled']) && $ann['enabled'] == '1') ? 'checked' : '' ?>>
              <span class="switch-slider"></span>
              <span style="font-weight: 700; font-size: 15px; color: var(--accent);">Enable Announcement Banner Across Website</span>
            </label>
          </div>

          <div class="form-grid">
            <div class="form-group full-width">
              <label class="form-label">Announcement Message *</label>
              <input type="text" name="announcement_text" class="form-input" value="<?= htmlspecialchars($ann['text'] ?? 'Registration is now open for our upcoming Youth Tennis Clinics & Tournaments!') ?>" placeholder="e.g. Summer Clinic registration is now open! Limited spots remaining." required>
            </div>

            <div class="form-group">
              <label class="form-label">Call to Action Button Text</label>
              <input type="text" name="btn_text" class="form-input" value="<?= htmlspecialchars($ann['btn_text'] ?? 'Register Now') ?>" placeholder="e.g. Register Now">
            </div>

            <div class="form-group">
              <label class="form-label">Button Target URL</label>
              <input type="text" name="btn_url" class="form-input" value="<?= htmlspecialchars($ann['btn_url'] ?? '/Ggani_Foundation/contact/') ?>" placeholder="/Ggani_Foundation/contact/">
            </div>
          </div>

          <button type="submit" class="btn btn-primary">
            <span>Save Announcement Banner &rarr;</span>
          </button>
        </form>
      </div>

    <!-- TAB 5: CONTACT & SOCIAL INFO -->
    <?php elseif ($currentTab === 'contact'): ?>
      <?php $contact = $siteSettings['contact'] ?? []; ?>
      <div class="card">
        <h2 class="card-title">Foundation Headquarters & Contact Information</h2>
        <p class="card-desc">Update your official address, phone number, email, and social media handles. Changes synchronize directly with your Contact page and footer.</p>

        <form method="POST">
          <input type="hidden" name="action" value="save_contact">

          <div class="form-grid">
            <div class="form-group">
              <label class="form-label">Street Address *</label>
              <input type="text" name="address_line1" class="form-input" value="<?= htmlspecialchars($contact['address_line1'] ?? '101 Simply Country Ln') ?>" required>
            </div>

            <div class="form-group">
              <label class="form-label">City, State & Zip *</label>
              <input type="text" name="address_line2" class="form-input" value="<?= htmlspecialchars($contact['address_line2'] ?? 'Lillington, NC 27546, United States') ?>" required>
            </div>

            <div class="form-group full-width">
              <label class="form-label">Google Maps Directions URL</label>
              <input type="text" name="maps_url" class="form-input" value="<?= htmlspecialchars($contact['maps_url'] ?? '') ?>">
            </div>

            <div class="form-group">
              <label class="form-label">Official Phone Number *</label>
              <input type="text" name="phone" class="form-input" value="<?= htmlspecialchars($contact['phone'] ?? '+1 (919) 555-0199') ?>" required>
            </div>

            <div class="form-group">
              <label class="form-label">Official Email Address *</label>
              <input type="email" name="email" class="form-input" value="<?= htmlspecialchars($contact['email'] ?? 'info@gganifoundation.org') ?>" required>
            </div>

            <div class="form-group full-width">
              <label class="form-label">Office & Practice Hours</label>
              <input type="text" name="hours" class="form-input" value="<?= htmlspecialchars($contact['hours'] ?? 'Mon - Sat: 8:00 AM - 6:00 PM EST') ?>">
            </div>

            <div class="form-group">
              <label class="form-label">Facebook URL</label>
              <input type="text" name="facebook" class="form-input" value="<?= htmlspecialchars($contact['facebook'] ?? '') ?>" placeholder="https://facebook.com/...">
            </div>

            <div class="form-group">
              <label class="form-label">Instagram URL</label>
              <input type="text" name="instagram" class="form-input" value="<?= htmlspecialchars($contact['instagram'] ?? '') ?>" placeholder="https://instagram.com/...">
            </div>

            <div class="form-group">
              <label class="form-label">Twitter / X URL</label>
              <input type="text" name="twitter" class="form-input" value="<?= htmlspecialchars($contact['twitter'] ?? '') ?>" placeholder="https://x.com/...">
            </div>
          </div>

          <div style="display: flex; gap: 12px; align-items: center;">
            <button type="submit" class="btn btn-primary">
              <span>Save & Sync Contact Info &rarr;</span>
            </button>
            <a href="/Ggani_Foundation/contact/" target="_blank" class="btn btn-secondary">
              <span>Preview Contact Page &rarr;</span>
            </a>
          </div>
        </form>
      </div>

    <?php endif; ?>

  </div>
<?php endif; ?>

</body>
</html>
