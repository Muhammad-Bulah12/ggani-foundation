<?php
/**
 * Astra functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Define Constants
 */
define( 'ASTRA_THEME_VERSION', '4.14.1' );
define( 'ASTRA_THEME_SETTINGS', 'astra-settings' );
define( 'ASTRA_THEME_DIR', trailingslashit( get_template_directory() ) );
define( 'ASTRA_THEME_URI', trailingslashit( esc_url( get_template_directory_uri() ) ) );
define( 'ASTRA_THEME_ORG_VERSION', file_exists( ASTRA_THEME_DIR . 'inc/w-org-version.php' ) );

/**
 * Minimum Version requirement of the Astra Pro addon.
 * This constant will be used to display the notice asking user to update the Astra addon to the version defined below.
 */
define( 'ASTRA_EXT_MIN_VER', '4.12.0' );

/**
 * Load in-house compatibility.
 */
if ( ASTRA_THEME_ORG_VERSION ) {
	require_once ASTRA_THEME_DIR . 'inc/w-org-version.php';
}

/**
 * Setup helper functions of Astra.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-theme-options.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-theme-strings.php';
require_once ASTRA_THEME_DIR . 'inc/core/common-functions.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-icons.php';

define( 'ASTRA_WEBSITE_BASE_URL', 'https://wpastra.com' );

/**
 * Update theme
 */
require_once ASTRA_THEME_DIR . 'inc/theme-update/astra-update-functions.php';
require_once ASTRA_THEME_DIR . 'inc/theme-update/class-astra-theme-background-updater.php';

/**
 * Fonts Files
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-font-families.php';
if ( is_admin() ) {
	require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts-data.php';
}

require_once ASTRA_THEME_DIR . 'inc/lib/webfont/class-astra-webfont-loader.php';
require_once ASTRA_THEME_DIR . 'inc/lib/docs/class-astra-docs-loader.php';
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts.php';

require_once ASTRA_THEME_DIR . 'inc/dynamic-css/custom-menu-old-header.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/container-layouts.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/astra-icons.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-walker-page.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-enqueue-scripts.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-gutenberg-editor-css.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-wp-editor-css.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-command-palette.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/block-editor-compatibility.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/inline-on-mobile.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/content-background.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/dark-mode.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-dynamic-css.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-global-palette.php';

// Enable NPS Survey only if the starter templates version is < 4.3.7 or > 4.4.4 to prevent fatal error.
if ( ! defined( 'ASTRA_SITES_VER' ) || version_compare( ASTRA_SITES_VER, '4.3.7', '<' ) || version_compare( ASTRA_SITES_VER, '4.4.4', '>' ) ) {
	// NPS Survey Integration
	require_once ASTRA_THEME_DIR . 'inc/lib/class-astra-nps-notice.php';
	require_once ASTRA_THEME_DIR . 'inc/lib/class-astra-nps-survey.php';
}

/**
 * Custom template tags for this theme.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-attr.php';
require_once ASTRA_THEME_DIR . 'inc/template-tags.php';

require_once ASTRA_THEME_DIR . 'inc/widgets.php';
require_once ASTRA_THEME_DIR . 'inc/core/theme-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/admin-functions.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-memory-limit-notice.php';
require_once ASTRA_THEME_DIR . 'inc/core/sidebar-manager.php';

/**
 * Markup Functions
 */
require_once ASTRA_THEME_DIR . 'inc/markup-extras.php';
require_once ASTRA_THEME_DIR . 'inc/extras.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog-config.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog.php';
require_once ASTRA_THEME_DIR . 'inc/blog/single-blog.php';

/**
 * Markup Files
 */
require_once ASTRA_THEME_DIR . 'inc/template-parts.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-loop.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-mobile-header.php';

/**
 * Functions and definitions.
 */
require_once ASTRA_THEME_DIR . 'inc/class-astra-after-setup-theme.php';

// Required files.
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-helper.php';

require_once ASTRA_THEME_DIR . 'inc/schema/class-astra-schema.php';

/* Setup API */
require_once ASTRA_THEME_DIR . 'admin/includes/class-astra-learn.php';
require_once ASTRA_THEME_DIR . 'admin/includes/class-astra-api-init.php';

if ( is_admin() ) {
	/**
	 * Admin Menu Settings
	 */
	require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-settings.php';
	require_once ASTRA_THEME_DIR . 'admin/class-astra-admin-loader.php';
	require_once ASTRA_THEME_DIR . 'inc/lib/astra-notices/class-bsf-admin-notices.php';
}

/**
 * BSF Analytics.
 */
require_once ASTRA_THEME_DIR . 'admin/class-astra-bsf-analytics.php';

/**
 * Metabox additions.
 */
require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-boxes.php';
require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-box-operations.php';
require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-elementor-editor-settings.php';

/**
 * Customizer additions.
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-customizer.php';

/**
 * Astra Modules.
 */
require_once ASTRA_THEME_DIR . 'inc/modules/posts-structures/class-astra-post-structures.php';
require_once ASTRA_THEME_DIR . 'inc/modules/related-posts/class-astra-related-posts.php';

/**
 * Compatibility
 */
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-gutenberg.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-jetpack.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/woocommerce/class-astra-woocommerce.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/edd/class-astra-edd.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/lifterlms/class-astra-lifterlms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/learndash/class-astra-learndash.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bb-ultimate-addon.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-contact-form-7.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-visual-composer.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-site-origin.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-gravity-forms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bne-flyout.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-ubermeu.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-divi-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-amp.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-yoast-seo.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/surecart/class-astra-surecart.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-starter-content.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-buddypress.php';
require_once ASTRA_THEME_DIR . 'inc/addons/transparent-header/class-astra-ext-transparent-header.php';
require_once ASTRA_THEME_DIR . 'inc/addons/breadcrumbs/class-astra-breadcrumbs.php';
require_once ASTRA_THEME_DIR . 'inc/addons/scroll-to-top/class-astra-scroll-to-top.php';
require_once ASTRA_THEME_DIR . 'inc/addons/heading-colors/class-astra-heading-colors.php';
require_once ASTRA_THEME_DIR . 'inc/builder/class-astra-builder-loader.php';

// Elementor Compatibility requires PHP 5.4 for namespaces.
if ( version_compare( PHP_VERSION, '5.4', '>=' ) ) {
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor.php';
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor-pro.php';
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-web-stories.php';
}

// Beaver Themer compatibility requires PHP 5.3 for anonymous functions.
if ( version_compare( PHP_VERSION, '5.3', '>=' ) ) {
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-themer.php';
}

require_once ASTRA_THEME_DIR . 'inc/core/markup/class-astra-markup.php';

/**
 * Abilities API integration.
 */
require_once ASTRA_THEME_DIR . 'inc/abilities/bootstrap.php';

/**
 * Load deprecated functions
 */
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-filters.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-functions.php';

/**
 * Ganiyu Adelekan Foundation - Dynamic Announcement Alert Bar
 */
add_action('astra_header_before', function() {
    $settingsFile = WP_CONTENT_DIR . '/uploads/settings/site_settings.json';
    if (!file_exists($settingsFile)) return;
    $settings = json_decode(file_get_contents($settingsFile), true);
    if (!empty($settings['announcement']['enabled']) && $settings['announcement']['enabled'] == '1') {
        $text = htmlspecialchars($settings['announcement']['text'] ?? '');
        $btnText = htmlspecialchars($settings['announcement']['btn_text'] ?? 'Learn More');
        $btnUrl = htmlspecialchars($settings['announcement']['btn_url'] ?? '#');
        echo '<div id="ggani-announcement-bar" style="background: linear-gradient(90deg, #012104 0%, #377A00 100%); color: #ffffff; padding: 11px 20px; text-align: center; font-size: 14px; font-weight: 600; display: flex; align-items: center; justify-content: center; gap: 14px; flex-wrap: wrap; z-index: 999999; box-shadow: 0 3px 10px rgba(0,0,0,0.2); font-family: inherit;">';
        echo '<span style="display: inline-flex; align-items: center; gap: 8px;"><span>📢</span> <span>' . $text . '</span></span>';
        if ($btnText && $btnUrl) {
            echo '<a href="' . $btnUrl . '" style="background: #ffffff; color: #377A00; padding: 4px 15px; border-radius: 20px; font-size: 13px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 4px; box-shadow: 0 2px 6px rgba(0,0,0,0.15); transition: transform 0.2s;" onmouseover="this.style.transform=\'scale(1.05)\'" onmouseout="this.style.transform=\'scale(1)\'">' . $btnText . ' &rarr;</a>';
        }
        echo '</div>';
    }
});

/**
 * Ganiyu Adelekan Foundation - Global Zeffy Donation Buttons & Production URL Rewriting
 */
add_action('template_redirect', function() {
    ob_start(function($buffer) {
        $donateUrl = 'https://www.zeffy.com/en-US/donation-form/donate-to-make-a-difference-21491';
        $homeBase = rtrim(home_url(), '/');
        $logoWhiteUrl = $homeBase . '/wp-content/uploads/ggani-logo-white.png';
        $faviconUrl = $homeBase . '/wp-content/uploads/ggani-favicon.png';

        // Inject favicon & polished Header/Logo/Hero layout styles before </head>
        $headerStyles = '<link rel="icon" type="image/png" href="' . $faviconUrl . '" />
        <link rel="apple-touch-icon" href="' . $faviconUrl . '" />
        <style id="ggani-header-enhancement-css">
            .site-branding .site-title a {
                display: inline-flex !important;
                align-items: center !important;
                gap: 12px !important;
                text-decoration: none !important;
            }
            .ggani-logo-badge {
                width: 44px;
                height: 44px;
                background: #151716;
                border-radius: 10px;
                display: inline-flex;
                align-items: center;
                justify-content: center;
                padding: 4px;
                box-shadow: 0 3px 10px rgba(0, 0, 0, 0.14);
                flex-shrink: 0;
            }
            .ggani-logo-badge img {
                height: 36px !important;
                width: auto !important;
                object-fit: contain !important;
                display: block !important;
            }
            @media (max-width: 921px) {
                .ggani-logo-badge {
                    width: 38px;
                    height: 38px;
                    border-radius: 8px;
                }
                .ggani-logo-badge img {
                    height: 30px !important;
                }
            }
            @media (min-width: 922px) {
                #ast-desktop-header .ast-primary-header-bar {
                    min-height: 78px !important;
                    padding-top: 8px !important;
                    padding-bottom: 8px !important;
                    border-bottom: 1px solid rgba(0, 0, 0, 0.06) !important;
                    box-shadow: 0 2px 14px rgba(0, 0, 0, 0.04) !important;
                }
                #ast-desktop-header .site-primary-header-wrap.ast-container {
                    max-width: 1280px !important;
                    padding-left: 28px !important;
                    padding-right: 28px !important;
                }
                #ast-desktop-header .ast-builder-grid-row {
                    display: flex !important;
                    align-items: center !important;
                    justify-content: space-between !important;
                    flex-wrap: nowrap !important;
                    gap: 24px !important;
                }
                #ast-desktop-header .site-header-primary-section-left {
                    flex: 0 0 auto !important;
                }
                #ast-desktop-header .site-title {
                    font-size: 1.45rem !important;
                    white-space: nowrap !important;
                    line-height: 1.2 !important;
                    margin: 0 !important;
                }
                #ast-desktop-header .site-header-primary-section-right {
                    flex: 1 1 auto !important;
                    display: flex !important;
                    align-items: center !important;
                    justify-content: flex-end !important;
                    flex-wrap: nowrap !important;
                    gap: 12px !important;
                }
                #ast-desktop-header .ast-builder-menu-1 {
                    margin-right: 6px !important;
                }
                #ast-desktop-header #ast-hf-menu-1 {
                    display: flex !important;
                    flex-wrap: nowrap !important;
                    align-items: center !important;
                    gap: 2px !important;
                }
                #ast-desktop-header #ast-hf-menu-1 > .menu-item > .menu-link {
                    white-space: nowrap !important;
                    padding: 8px 14px !important;
                    line-height: 1.4 !important;
                    font-size: 15.5px !important;
                    font-weight: 600 !important;
                }
                #ast-desktop-header .ast-header-button-1,
                #ast-desktop-header .ast-header-button-donate {
                    margin: 0 !important;
                    padding: 0 !important;
                    flex-shrink: 0 !important;
                }
                #ast-desktop-header .ast-builder-button-wrap .ast-custom-button {
                    white-space: nowrap !important;
                    padding: 10px 20px !important;
                    font-size: 13.5px !important;
                    font-weight: 700 !important;
                    letter-spacing: 0.4px !important;
                    border-radius: 8px !important;
                    display: inline-flex !important;
                    align-items: center !important;
                    justify-content: center !important;
                    gap: 6px !important;
                    line-height: 1.2 !important;
                    transition: transform 0.2s ease, box-shadow 0.2s ease !important;
                }
                #ast-desktop-header .ast-builder-button-wrap .ast-custom-button:hover {
                    transform: translateY(-1px) !important;
                }
            }
            .uagb-block-2a03356b .uagb-ifb-button-wrapper {
                display: flex !important;
                justify-content: center !important;
                align-items: center !important;
                gap: 14px !important;
                flex-wrap: wrap !important;
                margin-top: 12px !important;
                margin-bottom: 24px !important;
            }
            .uagb-block-2a03356b .uagb-ifb-button-wrapper a.wp-block-button__link {
                margin: 0 !important;
                white-space: nowrap !important;
                border-radius: 8px !important;
            }
            .uagb-tm__image img.uagb-tm-img-src {
                width: 56px !important;
                height: 56px !important;
                object-fit: cover !important;
                border-radius: 50% !important;
            }
        </style>';
        $buffer = str_replace('</head>', $headerStyles . "\n</head>", $buffer);

        // Add Foundation Logo to Header Site Title (Desktop & Mobile) and Footer
        $logoBadgeHtml = '<span class="ggani-logo-badge"><img src="' . $logoWhiteUrl . '" alt="Ganiyu Adelekan Foundation Logo" /></span><span>Ganiyu Adelekan Foundation</span>';
        $buffer = preg_replace(
            '/(<span class="site-title"[^>]*>\s*<a[^>]*>)\s*Ganiyu Adelekan Foundation\s*(<\/a>\s*<\/span>)/s',
            '${1}' . $logoBadgeHtml . '${2}',
            $buffer
        );
        $footerLogoHtml = '<div style="margin-bottom: 14px;"><img src="' . $logoWhiteUrl . '" alt="Ganiyu Adelekan Foundation Logo" style="height: 54px; width: auto; display: block;" /></div><h3 class="uagb-heading-text">About Us</h3>';
        $buffer = str_replace(
            '<div class="wp-block-uagb-advanced-heading uagb-block-ddf47555"><h3 class="uagb-heading-text">About Us</h3>',
            '<div class="wp-block-uagb-advanced-heading uagb-block-ddf47555">' . $footerLogoHtml,
            $buffer
        );

        // Replace duplicate testimonial avatar image for Tom Carter with an Unsplash portrait
        $tomUnsplashImg = 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=150&h=150&q=80';
        $buffer = preg_replace(
            '/(<img[^>]*src=")[^"]*black-girl-150x150\.jpg("[^>]*>\s*<\/div>\s*<\/div>\s*<div class="uagb-testimonial-details">\s*<span class="uagb-tm__author-name">Tom Carter<\/span>)/',
            '${1}' . $tomUnsplashImg . '${2}',
            $buffer
        );

        // 1. Desktop Header: Add "Donate" button alongside "Get Involved"
        $headerDonateBtn = '<div class="ast-builder-layout-element ast-flex site-header-focus-item ast-header-button-donate"><div class="ast-builder-button-wrap"><a class="ast-custom-button-link" href="' . $donateUrl . '" target="_blank" rel="noopener noreferrer" role="button" aria-label="Donate"><div class="ast-custom-button" style="background-color: #377A00; border-color: #377A00; color: #ffffff; box-shadow: 0 4px 12px rgba(55, 122, 0, 0.25);">❤ Donate</div></a></div></div>';
        $buffer = preg_replace(
            '/(<div class="ast-builder-layout-element[^>]*ast-header-button-1"[^>]*>.*?<\/div>\s*<\/div>)/s',
            '$1' . $headerDonateBtn,
            $buffer,
            1
        );

        // 2. Mobile Menu & Footer Menu: Append "Donate" link
        $mobileDonateItem = '<li class="menu-item"><a href="' . $donateUrl . '" target="_blank" rel="noopener noreferrer" class="menu-link" style="color: #377A00; font-weight: 700;">❤ Donate</a></li></ul>';
        $buffer = preg_replace('/(<ul id="ast-hf-mobile-menu"[^>]*>.*?)<\/ul>/s', '$1' . $mobileDonateItem, $buffer, 1);
        $buffer = preg_replace('/(<ul id="astra-footer-menu"[^>]*>.*?)<\/ul>/s', '$1' . $mobileDonateItem, $buffer, 1);

        // 3. Homepage Hero Section: Add "Donate Now" button beside "Get Involved"
        $heroDonateBtn = '</a> <a href="' . $donateUrl . '" class="uagb-infobox-cta-link wp-block-button__link" target="_blank" rel="noopener noreferrer" style="background-color: #ffffff; color: #012104; border-color: #ffffff;"><span class="uagb-inline-editing">❤ Donate Now</span></a>';
        $buffer = str_replace(
            '<span class="uagb-inline-editing">Get Involved</span></a>',
            '<span class="uagb-inline-editing">Get Involved</span>' . $heroDonateBtn,
            $buffer
        );

        // 4. Global Above-Footer Call-To-Action: Add "Donate Now" button beside "Get Involved"
        $footerCtaDonateBtn = 'Get Involved</a> <a href="' . $donateUrl . '" class="uagb-cta__button-link-wrapper wp-block-button__link" target="_blank" rel="noopener noreferrer" style="margin-left: 12px; background-color: #ffffff; color: #012104; border-color: #ffffff;">❤ Donate Now</a>';
        $buffer = preg_replace(
            '/Get Involved<\/a>(<\/div><\/div>\s*<\/div><\/div>\s*<\/section>)/',
            $footerCtaDonateBtn . '$1',
            $buffer
        );

        // 5. Programs Page ("Support & Donate") & Contact Page ("Get Involved & Donate Today")
        $buffer = preg_replace(
            '/<a href="[^"]*"([^>]*)>\s*<span>Support &amp; Donate<\/span>\s*<\/a>/',
            '<a href="' . $donateUrl . '" target="_blank" rel="noopener noreferrer"$1><span>❤ Support &amp; Donate</span></a>',
            $buffer
        );
        $buffer = preg_replace(
            '/<a href="[^"]*"([^>]*)>\s*<span>Get Involved &amp; Donate Today<\/span>/',
            '<a href="' . $donateUrl . '" target="_blank" rel="noopener noreferrer"$1><span>Get Involved &amp; Donate Today</span>',
            $buffer
        );

        // 6. Gallery Page CTA Banner: Add "Donate Now" button alongside "Explore Programs"
        $galleryDonateBtn = '<span>Explore Programs</span></a><a href="' . $donateUrl . '" target="_blank" rel="noopener noreferrer" style="display: inline-flex; align-items: center; gap: 8px; padding: 15px 34px; background: #ffffff; color: #012104; text-decoration: none; border-radius: 10px; font-weight: 700; font-size: 15px; box-shadow: 0 4px 14px rgba(0,0,0,0.2);"><span>❤ Donate Now</span></a>';
        $buffer = preg_replace(
            '/<span>Explore Programs<\/span>\s*<\/a>/',
            $galleryDonateBtn,
            $buffer
        );

        // 7. Rewrite hardcoded local paths (/Ggani_Foundation) when running in production (e.g. Render)
        if ( defined('DB_HOST') && DB_HOST !== 'localhost' && DB_HOST !== '127.0.0.1' ) {
            $home = rtrim(home_url(), '/');
            $buffer = str_replace('http://localhost/Ggani_Foundation', $home, $buffer);
            $buffer = str_replace('https://localhost/Ggani_Foundation', $home, $buffer);
            $buffer = str_replace('/Ggani_Foundation/', '/', $buffer);
        }

        return $buffer;
    });
});


