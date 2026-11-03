<?php

// Functions and constants

namespace {

}


namespace Give\Vendors {

    use BrianHenryIE\Strauss\Types\AutoloadAliasInterface;

    /**
     * @see AutoloadAliasInterface
     *
     * @phpstan-type ClassAliasArray array{'type':'class',isabstract:bool,classname:string,namespace?:string,extends:string,implements:array<string>}
     * @phpstan-type InterfaceAliasArray array{'type':'interface',interfacename:string,namespace?:string,extends:array<string>}
     * @phpstan-type TraitAliasArray array{'type':'trait',traitname:string,namespace?:string,use:array<string>}
     * @phpstan-type EnumAliasArray array{'type':'enum',enumname:string,namespace?:string,concrete:string}
     * @phpstan-type AutoloadAliasArray array<string,ClassAliasArray|InterfaceAliasArray|TraitAliasArray|EnumAliasArray>
     */
    class AliasAutoloader
    {
        private string $includeFilePath;

        /**
         * @var AutoloadAliasArray
         */
        private array $autoloadAliases = array (
  'Nyholm\\Psr7\\Factory\\HttplugFactory' => 
  array (
    'type' => 'class',
    'classname' => 'HttplugFactory',
    'isabstract' => false,
    'namespace' => 'Nyholm\\Psr7\\Factory',
    'extends' => 'Give\\Vendors\\Nyholm\\Psr7\\Factory\\HttplugFactory',
    'implements' => 
    array (
      0 => 'Http\\Message\\MessageFactory',
      1 => 'Http\\Message\\StreamFactory',
      2 => 'Http\\Message\\UriFactory',
    ),
  ),
  'Nyholm\\Psr7\\Factory\\Psr17Factory' => 
  array (
    'type' => 'class',
    'classname' => 'Psr17Factory',
    'isabstract' => false,
    'namespace' => 'Nyholm\\Psr7\\Factory',
    'extends' => 'Give\\Vendors\\Nyholm\\Psr7\\Factory\\Psr17Factory',
    'implements' => 
    array (
      0 => 'Psr\\Http\\Message\\RequestFactoryInterface',
      1 => 'Psr\\Http\\Message\\ResponseFactoryInterface',
      2 => 'Psr\\Http\\Message\\ServerRequestFactoryInterface',
      3 => 'Psr\\Http\\Message\\StreamFactoryInterface',
      4 => 'Psr\\Http\\Message\\UploadedFileFactoryInterface',
      5 => 'Psr\\Http\\Message\\UriFactoryInterface',
    ),
  ),
  'Nyholm\\Psr7\\Request' => 
  array (
    'type' => 'class',
    'classname' => 'Request',
    'isabstract' => false,
    'namespace' => 'Nyholm\\Psr7',
    'extends' => 'Give\\Vendors\\Nyholm\\Psr7\\Request',
    'implements' => 
    array (
      0 => 'Psr\\Http\\Message\\RequestInterface',
    ),
  ),
  'Nyholm\\Psr7\\Response' => 
  array (
    'type' => 'class',
    'classname' => 'Response',
    'isabstract' => false,
    'namespace' => 'Nyholm\\Psr7',
    'extends' => 'Give\\Vendors\\Nyholm\\Psr7\\Response',
    'implements' => 
    array (
      0 => 'Psr\\Http\\Message\\ResponseInterface',
    ),
  ),
  'Nyholm\\Psr7\\ServerRequest' => 
  array (
    'type' => 'class',
    'classname' => 'ServerRequest',
    'isabstract' => false,
    'namespace' => 'Nyholm\\Psr7',
    'extends' => 'Give\\Vendors\\Nyholm\\Psr7\\ServerRequest',
    'implements' => 
    array (
      0 => 'Psr\\Http\\Message\\ServerRequestInterface',
    ),
  ),
  'Nyholm\\Psr7\\Stream' => 
  array (
    'type' => 'class',
    'classname' => 'Stream',
    'isabstract' => false,
    'namespace' => 'Nyholm\\Psr7',
    'extends' => 'Give\\Vendors\\Nyholm\\Psr7\\Stream',
    'implements' => 
    array (
      0 => 'Psr\\Http\\Message\\StreamInterface',
    ),
  ),
  'Nyholm\\Psr7\\1605bd1b8444a728807825e54b6044cd' => 
  array (
    'type' => 'class',
    'classname' => '1605bd1b8444a728807825e54b6044cd',
    'isabstract' => false,
    'namespace' => 'Nyholm\\Psr7',
    'extends' => 'Give\\Vendors\\Nyholm\\Psr7\\1605bd1b8444a728807825e54b6044cd',
    'implements' => 
    array (
    ),
  ),
  'Nyholm\\Psr7\\UploadedFile' => 
  array (
    'type' => 'class',
    'classname' => 'UploadedFile',
    'isabstract' => false,
    'namespace' => 'Nyholm\\Psr7',
    'extends' => 'Give\\Vendors\\Nyholm\\Psr7\\UploadedFile',
    'implements' => 
    array (
      0 => 'Psr\\Http\\Message\\UploadedFileInterface',
    ),
  ),
  'Nyholm\\Psr7\\Uri' => 
  array (
    'type' => 'class',
    'classname' => 'Uri',
    'isabstract' => false,
    'namespace' => 'Nyholm\\Psr7',
    'extends' => 'Give\\Vendors\\Nyholm\\Psr7\\Uri',
    'implements' => 
    array (
      0 => 'Psr\\Http\\Message\\UriInterface',
    ),
  ),
  'StellarWP\\AdminNotices\\Actions\\DisplayNoticesInAdmin' => 
  array (
    'type' => 'class',
    'classname' => 'DisplayNoticesInAdmin',
    'isabstract' => false,
    'namespace' => 'StellarWP\\AdminNotices\\Actions',
    'extends' => 'Give\\Vendors\\StellarWP\\AdminNotices\\Actions\\DisplayNoticesInAdmin',
    'implements' => 
    array (
    ),
  ),
  'StellarWP\\AdminNotices\\Actions\\EnqueueNoticesScriptsAndStyles' => 
  array (
    'type' => 'class',
    'classname' => 'EnqueueNoticesScriptsAndStyles',
    'isabstract' => false,
    'namespace' => 'StellarWP\\AdminNotices\\Actions',
    'extends' => 'Give\\Vendors\\StellarWP\\AdminNotices\\Actions\\EnqueueNoticesScriptsAndStyles',
    'implements' => 
    array (
    ),
  ),
  'StellarWP\\AdminNotices\\Actions\\NoticeShouldRender' => 
  array (
    'type' => 'class',
    'classname' => 'NoticeShouldRender',
    'isabstract' => false,
    'namespace' => 'StellarWP\\AdminNotices\\Actions',
    'extends' => 'Give\\Vendors\\StellarWP\\AdminNotices\\Actions\\NoticeShouldRender',
    'implements' => 
    array (
    ),
  ),
  'StellarWP\\AdminNotices\\Actions\\RenderAdminNotice' => 
  array (
    'type' => 'class',
    'classname' => 'RenderAdminNotice',
    'isabstract' => false,
    'namespace' => 'StellarWP\\AdminNotices\\Actions',
    'extends' => 'Give\\Vendors\\StellarWP\\AdminNotices\\Actions\\RenderAdminNotice',
    'implements' => 
    array (
    ),
  ),
  'StellarWP\\AdminNotices\\AdminNotice' => 
  array (
    'type' => 'class',
    'classname' => 'AdminNotice',
    'isabstract' => false,
    'namespace' => 'StellarWP\\AdminNotices',
    'extends' => 'Give\\Vendors\\StellarWP\\AdminNotices\\AdminNotice',
    'implements' => 
    array (
    ),
  ),
  'StellarWP\\AdminNotices\\AdminNotices' => 
  array (
    'type' => 'class',
    'classname' => 'AdminNotices',
    'isabstract' => false,
    'namespace' => 'StellarWP\\AdminNotices',
    'extends' => 'Give\\Vendors\\StellarWP\\AdminNotices\\AdminNotices',
    'implements' => 
    array (
    ),
  ),
  'StellarWP\\AdminNotices\\DataTransferObjects\\NoticeElementProperties' => 
  array (
    'type' => 'class',
    'classname' => 'NoticeElementProperties',
    'isabstract' => false,
    'namespace' => 'StellarWP\\AdminNotices\\DataTransferObjects',
    'extends' => 'Give\\Vendors\\StellarWP\\AdminNotices\\DataTransferObjects\\NoticeElementProperties',
    'implements' => 
    array (
    ),
  ),
  'StellarWP\\AdminNotices\\Exceptions\\NotificationCollisionException' => 
  array (
    'type' => 'class',
    'classname' => 'NotificationCollisionException',
    'isabstract' => false,
    'namespace' => 'StellarWP\\AdminNotices\\Exceptions',
    'extends' => 'Give\\Vendors\\StellarWP\\AdminNotices\\Exceptions\\NotificationCollisionException',
    'implements' => 
    array (
    ),
  ),
  'StellarWP\\AdminNotices\\NotificationsRegistrar' => 
  array (
    'type' => 'class',
    'classname' => 'NotificationsRegistrar',
    'isabstract' => false,
    'namespace' => 'StellarWP\\AdminNotices',
    'extends' => 'Give\\Vendors\\StellarWP\\AdminNotices\\NotificationsRegistrar',
    'implements' => 
    array (
      0 => 'StellarWP\\AdminNotices\\Contracts\\NotificationsRegistrarInterface',
    ),
  ),
  'StellarWP\\AdminNotices\\ValueObjects\\NoticeLocation' => 
  array (
    'type' => 'class',
    'classname' => 'NoticeLocation',
    'isabstract' => false,
    'namespace' => 'StellarWP\\AdminNotices\\ValueObjects',
    'extends' => 'Give\\Vendors\\StellarWP\\AdminNotices\\ValueObjects\\NoticeLocation',
    'implements' => 
    array (
    ),
  ),
  'StellarWP\\AdminNotices\\ValueObjects\\NoticeUrgency' => 
  array (
    'type' => 'class',
    'classname' => 'NoticeUrgency',
    'isabstract' => false,
    'namespace' => 'StellarWP\\AdminNotices\\ValueObjects',
    'extends' => 'Give\\Vendors\\StellarWP\\AdminNotices\\ValueObjects\\NoticeUrgency',
    'implements' => 
    array (
    ),
  ),
  'StellarWP\\AdminNotices\\ValueObjects\\ScreenCondition' => 
  array (
    'type' => 'class',
    'classname' => 'ScreenCondition',
    'isabstract' => false,
    'namespace' => 'StellarWP\\AdminNotices\\ValueObjects',
    'extends' => 'Give\\Vendors\\StellarWP\\AdminNotices\\ValueObjects\\ScreenCondition',
    'implements' => 
    array (
    ),
  ),
  'StellarWP\\AdminNotices\\ValueObjects\\Script' => 
  array (
    'type' => 'class',
    'classname' => 'Script',
    'isabstract' => false,
    'namespace' => 'StellarWP\\AdminNotices\\ValueObjects',
    'extends' => 'Give\\Vendors\\StellarWP\\AdminNotices\\ValueObjects\\Script',
    'implements' => 
    array (
    ),
  ),
  'StellarWP\\AdminNotices\\ValueObjects\\Style' => 
  array (
    'type' => 'class',
    'classname' => 'Style',
    'isabstract' => false,
    'namespace' => 'StellarWP\\AdminNotices\\ValueObjects',
    'extends' => 'Give\\Vendors\\StellarWP\\AdminNotices\\ValueObjects\\Style',
    'implements' => 
    array (
    ),
  ),
  'StellarWP\\AdminNotices\\ValueObjects\\UserCapability' => 
  array (
    'type' => 'class',
    'classname' => 'UserCapability',
    'isabstract' => false,
    'namespace' => 'StellarWP\\AdminNotices\\ValueObjects',
    'extends' => 'Give\\Vendors\\StellarWP\\AdminNotices\\ValueObjects\\UserCapability',
    'implements' => 
    array (
    ),
  ),
  'StellarWP\\Arrays\\Arr' => 
  array (
    'type' => 'class',
    'classname' => 'Arr',
    'isabstract' => false,
    'namespace' => 'StellarWP\\Arrays',
    'extends' => 'Give\\Vendors\\StellarWP\\Arrays\\Arr',
    'implements' => 
    array (
    ),
  ),
  'Nexcess\\Banners\\Banner' => 
  array (
    'type' => 'class',
    'classname' => 'Banner',
    'isabstract' => false,
    'namespace' => 'Nexcess\\Banners',
    'extends' => 'Give\\Vendors\\Nexcess\\Banners\\Banner',
    'implements' => 
    array (
    ),
  ),
  'Nexcess\\Banners\\BannerFields' => 
  array (
    'type' => 'class',
    'classname' => 'BannerFields',
    'isabstract' => false,
    'namespace' => 'Nexcess\\Banners',
    'extends' => 'Give\\Vendors\\Nexcess\\Banners\\BannerFields',
    'implements' => 
    array (
    ),
  ),
  'Nexcess\\Banners\\Dismissals' => 
  array (
    'type' => 'class',
    'classname' => 'Dismissals',
    'isabstract' => false,
    'namespace' => 'Nexcess\\Banners',
    'extends' => 'Give\\Vendors\\Nexcess\\Banners\\Dismissals',
    'implements' => 
    array (
    ),
  ),
  'Nexcess\\Banners\\Package' => 
  array (
    'type' => 'class',
    'classname' => 'Package',
    'isabstract' => false,
    'namespace' => 'Nexcess\\Banners',
    'extends' => 'Give\\Vendors\\Nexcess\\Banners\\Package',
    'implements' => 
    array (
    ),
  ),
  'Nexcess\\Banners\\Registry' => 
  array (
    'type' => 'class',
    'classname' => 'Registry',
    'isabstract' => false,
    'namespace' => 'Nexcess\\Banners',
    'extends' => 'Give\\Vendors\\Nexcess\\Banners\\Registry',
    'implements' => 
    array (
    ),
  ),
  'StellarWP\\FieldConditions\\ComplexConditionSet' => 
  array (
    'type' => 'class',
    'classname' => 'ComplexConditionSet',
    'isabstract' => false,
    'namespace' => 'StellarWP\\FieldConditions',
    'extends' => 'Give\\Vendors\\StellarWP\\FieldConditions\\ComplexConditionSet',
    'implements' => 
    array (
      0 => 'StellarWP\\FieldConditions\\Contracts\\ConditionSet',
    ),
  ),
  'StellarWP\\FieldConditions\\Config' => 
  array (
    'type' => 'class',
    'classname' => 'Config',
    'isabstract' => false,
    'namespace' => 'StellarWP\\FieldConditions',
    'extends' => 'Give\\Vendors\\StellarWP\\FieldConditions\\Config',
    'implements' => 
    array (
    ),
  ),
  'StellarWP\\FieldConditions\\FieldCondition' => 
  array (
    'type' => 'class',
    'classname' => 'FieldCondition',
    'isabstract' => false,
    'namespace' => 'StellarWP\\FieldConditions',
    'extends' => 'Give\\Vendors\\StellarWP\\FieldConditions\\FieldCondition',
    'implements' => 
    array (
      0 => 'StellarWP\\FieldConditions\\Contracts\\Condition',
    ),
  ),
  'StellarWP\\FieldConditions\\NestedCondition' => 
  array (
    'type' => 'class',
    'classname' => 'NestedCondition',
    'isabstract' => false,
    'namespace' => 'StellarWP\\FieldConditions',
    'extends' => 'Give\\Vendors\\StellarWP\\FieldConditions\\NestedCondition',
    'implements' => 
    array (
      0 => 'StellarWP\\FieldConditions\\Contracts\\Condition',
      1 => 'StellarWP\\FieldConditions\\Contracts\\ConditionSet',
    ),
  ),
  'StellarWP\\FieldConditions\\SimpleConditionSet' => 
  array (
    'type' => 'class',
    'classname' => 'SimpleConditionSet',
    'isabstract' => false,
    'namespace' => 'StellarWP\\FieldConditions',
    'extends' => 'Give\\Vendors\\StellarWP\\FieldConditions\\SimpleConditionSet',
    'implements' => 
    array (
      0 => 'StellarWP\\FieldConditions\\Contracts\\ConditionSet',
    ),
  ),
  'StellarWP\\FieldConditions\\Tests\\TestCase' => 
  array (
    'type' => 'class',
    'classname' => 'TestCase',
    'isabstract' => false,
    'namespace' => 'StellarWP\\FieldConditions\\Tests',
    'extends' => 'Give\\Vendors\\StellarWP\\FieldConditions\\Tests\\TestCase',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\API\\Functions\\Actions\\Display_Legacy_License_Page_Notice' => 
  array (
    'type' => 'class',
    'classname' => 'Display_Legacy_License_Page_Notice',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\API\\Functions\\Actions',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\API\\Functions\\Actions\\Display_Legacy_License_Page_Notice',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\API\\Functions\\Actions\\Register_Submenu' => 
  array (
    'type' => 'class',
    'classname' => 'Register_Submenu',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\API\\Functions\\Actions',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\API\\Functions\\Actions\\Register_Submenu',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\API\\Functions\\Global_Function_Registry' => 
  array (
    'type' => 'class',
    'classname' => 'Global_Function_Registry',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\API\\Functions',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\API\\Functions\\Global_Function_Registry',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\API\\Functions\\Provider' => 
  array (
    'type' => 'class',
    'classname' => 'Provider',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\API\\Functions',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\API\\Functions\\Provider',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\API\\REST\\V1\\Catalog_Controller' => 
  array (
    'type' => 'class',
    'classname' => 'Catalog_Controller',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\API\\REST\\V1',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\API\\REST\\V1\\Catalog_Controller',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\API\\REST\\V1\\Feature_Controller' => 
  array (
    'type' => 'class',
    'classname' => 'Feature_Controller',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\API\\REST\\V1',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\API\\REST\\V1\\Feature_Controller',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\API\\REST\\V1\\Harbor_Hosts_Controller' => 
  array (
    'type' => 'class',
    'classname' => 'Harbor_Hosts_Controller',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\API\\REST\\V1',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\API\\REST\\V1\\Harbor_Hosts_Controller',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\API\\REST\\V1\\Legacy_License_Controller' => 
  array (
    'type' => 'class',
    'classname' => 'Legacy_License_Controller',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\API\\REST\\V1',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\API\\REST\\V1\\Legacy_License_Controller',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\API\\REST\\V1\\License_Controller' => 
  array (
    'type' => 'class',
    'classname' => 'License_Controller',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\API\\REST\\V1',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\API\\REST\\V1\\License_Controller',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\API\\REST\\V1\\License_Response' => 
  array (
    'type' => 'class',
    'classname' => 'License_Response',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\API\\REST\\V1',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\API\\REST\\V1\\License_Response',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\API\\REST\\V1\\Provider' => 
  array (
    'type' => 'class',
    'classname' => 'Provider',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\API\\REST\\V1',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\API\\REST\\V1\\Provider',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\Admin\\Feature_Manager_Page' => 
  array (
    'type' => 'class',
    'classname' => 'Feature_Manager_Page',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\Admin',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Admin\\Feature_Manager_Page',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\Admin\\Provider' => 
  array (
    'type' => 'class',
    'classname' => 'Provider',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\Admin',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Admin\\Provider',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\CLI\\Commands\\Catalog' => 
  array (
    'type' => 'class',
    'classname' => 'Catalog',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\CLI\\Commands',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\CLI\\Commands\\Catalog',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\CLI\\Commands\\Feature' => 
  array (
    'type' => 'class',
    'classname' => 'Feature',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\CLI\\Commands',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\CLI\\Commands\\Feature',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\CLI\\Commands\\License' => 
  array (
    'type' => 'class',
    'classname' => 'License',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\CLI\\Commands',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\CLI\\Commands\\License',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\CLI\\Display' => 
  array (
    'type' => 'class',
    'classname' => 'Display',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\CLI',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\CLI\\Display',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\CLI\\Provider' => 
  array (
    'type' => 'class',
    'classname' => 'Provider',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\CLI',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\CLI\\Provider',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\Components\\Controller' => 
  array (
    'type' => 'class',
    'classname' => 'Controller',
    'isabstract' => true,
    'namespace' => 'LiquidWeb\\Harbor\\Components',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Components\\Controller',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\Config' => 
  array (
    'type' => 'class',
    'classname' => 'Config',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Config',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\Contracts\\Abstract_Provider' => 
  array (
    'type' => 'class',
    'classname' => 'Abstract_Provider',
    'isabstract' => true,
    'namespace' => 'LiquidWeb\\Harbor\\Contracts',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Contracts\\Abstract_Provider',
    'implements' => 
    array (
      0 => 'LiquidWeb\\Harbor\\Contracts\\Provider_Interface',
    ),
  ),
  'LiquidWeb\\Harbor\\Cron\\Actions\\Handle_Unschedule_Cron_Data_Refresh' => 
  array (
    'type' => 'class',
    'classname' => 'Handle_Unschedule_Cron_Data_Refresh',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\Cron\\Actions',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Cron\\Actions\\Handle_Unschedule_Cron_Data_Refresh',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\Cron\\Jobs\\Refresh_Catalog_Job' => 
  array (
    'type' => 'class',
    'classname' => 'Refresh_Catalog_Job',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\Cron\\Jobs',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Cron\\Jobs\\Refresh_Catalog_Job',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\Cron\\Jobs\\Refresh_License_Job' => 
  array (
    'type' => 'class',
    'classname' => 'Refresh_License_Job',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\Cron\\Jobs',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Cron\\Jobs\\Refresh_License_Job',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\Cron\\Provider' => 
  array (
    'type' => 'class',
    'classname' => 'Provider',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\Cron',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Cron\\Provider',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\Cron\\ValueObjects\\CronHook' => 
  array (
    'type' => 'class',
    'classname' => 'CronHook',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\Cron\\ValueObjects',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Cron\\ValueObjects\\CronHook',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\Features\\Error_Code' => 
  array (
    'type' => 'class',
    'classname' => 'Error_Code',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\Features',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Features\\Error_Code',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\Features\\Feature_Collection' => 
  array (
    'type' => 'class',
    'classname' => 'Feature_Collection',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\Features',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Features\\Feature_Collection',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\Features\\Feature_Repository' => 
  array (
    'type' => 'class',
    'classname' => 'Feature_Repository',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\Features',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Features\\Feature_Repository',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\Features\\Feature_Resource' => 
  array (
    'type' => 'class',
    'classname' => 'Feature_Resource',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\Features',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Features\\Feature_Resource',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\Features\\Manager' => 
  array (
    'type' => 'class',
    'classname' => 'Manager',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\Features',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Features\\Manager',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\Features\\Provider' => 
  array (
    'type' => 'class',
    'classname' => 'Provider',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\Features',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Features\\Provider',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\Features\\Resolve_Feature_Collection' => 
  array (
    'type' => 'class',
    'classname' => 'Resolve_Feature_Collection',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\Features',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Features\\Resolve_Feature_Collection',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\Features\\Strategy\\Abstract_Strategy' => 
  array (
    'type' => 'class',
    'classname' => 'Abstract_Strategy',
    'isabstract' => true,
    'namespace' => 'LiquidWeb\\Harbor\\Features\\Strategy',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Features\\Strategy\\Abstract_Strategy',
    'implements' => 
    array (
      0 => 'LiquidWeb\\Harbor\\Features\\Contracts\\Strategy',
    ),
  ),
  'LiquidWeb\\Harbor\\Features\\Strategy\\Installable_Strategy' => 
  array (
    'type' => 'class',
    'classname' => 'Installable_Strategy',
    'isabstract' => true,
    'namespace' => 'LiquidWeb\\Harbor\\Features\\Strategy',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Features\\Strategy\\Installable_Strategy',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\Features\\Strategy\\Plugin_Strategy' => 
  array (
    'type' => 'class',
    'classname' => 'Plugin_Strategy',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\Features\\Strategy',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Features\\Strategy\\Plugin_Strategy',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\Features\\Strategy\\Service_Strategy' => 
  array (
    'type' => 'class',
    'classname' => 'Service_Strategy',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\Features\\Strategy',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Features\\Strategy\\Service_Strategy',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\Features\\Strategy\\Strategy_Factory' => 
  array (
    'type' => 'class',
    'classname' => 'Strategy_Factory',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\Features\\Strategy',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Features\\Strategy\\Strategy_Factory',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\Features\\Strategy\\Theme_Strategy' => 
  array (
    'type' => 'class',
    'classname' => 'Theme_Strategy',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\Features\\Strategy',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Features\\Strategy\\Theme_Strategy',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\Features\\Types\\Feature' => 
  array (
    'type' => 'class',
    'classname' => 'Feature',
    'isabstract' => true,
    'namespace' => 'LiquidWeb\\Harbor\\Features\\Types',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Features\\Types\\Feature',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\Features\\Types\\Plugin' => 
  array (
    'type' => 'class',
    'classname' => 'Plugin',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\Features\\Types',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Features\\Types\\Plugin',
    'implements' => 
    array (
      0 => 'LiquidWeb\\Harbor\\Features\\Contracts\\Installable',
    ),
  ),
  'LiquidWeb\\Harbor\\Features\\Types\\Service' => 
  array (
    'type' => 'class',
    'classname' => 'Service',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\Features\\Types',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Features\\Types\\Service',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\Features\\Types\\Theme' => 
  array (
    'type' => 'class',
    'classname' => 'Theme',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\Features\\Types',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Features\\Types\\Theme',
    'implements' => 
    array (
      0 => 'LiquidWeb\\Harbor\\Features\\Contracts\\Installable',
    ),
  ),
  'LiquidWeb\\Harbor\\Features\\Update\\Plugin_Handler' => 
  array (
    'type' => 'class',
    'classname' => 'Plugin_Handler',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\Features\\Update',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Features\\Update\\Plugin_Handler',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\Features\\Update\\Provider' => 
  array (
    'type' => 'class',
    'classname' => 'Provider',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\Features\\Update',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Features\\Update\\Provider',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\Features\\Update\\Resolve_Update_Data' => 
  array (
    'type' => 'class',
    'classname' => 'Resolve_Update_Data',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\Features\\Update',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Features\\Update\\Resolve_Update_Data',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\Features\\Update\\Theme_Handler' => 
  array (
    'type' => 'class',
    'classname' => 'Theme_Handler',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\Features\\Update',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Features\\Update\\Theme_Handler',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\Harbor' => 
  array (
    'type' => 'class',
    'classname' => 'Harbor',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Harbor',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\Http\\Provider' => 
  array (
    'type' => 'class',
    'classname' => 'Provider',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\Http',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Http\\Provider',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\Legacy\\Legacy_License' => 
  array (
    'type' => 'class',
    'classname' => 'Legacy_License',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\Legacy',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Legacy\\Legacy_License',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\Legacy\\License_Repository' => 
  array (
    'type' => 'class',
    'classname' => 'License_Repository',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\Legacy',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Legacy\\License_Repository',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\Legacy\\Notices\\License_Notice_Handler' => 
  array (
    'type' => 'class',
    'classname' => 'License_Notice_Handler',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\Legacy\\Notices',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Legacy\\Notices\\License_Notice_Handler',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\Legacy\\Provider' => 
  array (
    'type' => 'class',
    'classname' => 'Provider',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\Legacy',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Legacy\\Provider',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\Licensing\\Enums\\Validation_Status' => 
  array (
    'type' => 'class',
    'classname' => 'Validation_Status',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\Licensing\\Enums',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Licensing\\Enums\\Validation_Status',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\Licensing\\Error_Code' => 
  array (
    'type' => 'class',
    'classname' => 'Error_Code',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\Licensing',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Licensing\\Error_Code',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\Licensing\\License_Manager' => 
  array (
    'type' => 'class',
    'classname' => 'License_Manager',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\Licensing',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Licensing\\License_Manager',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\Licensing\\Product_Collection' => 
  array (
    'type' => 'class',
    'classname' => 'Product_Collection',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\Licensing',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Licensing\\Product_Collection',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\Licensing\\Provider' => 
  array (
    'type' => 'class',
    'classname' => 'Provider',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\Licensing',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Licensing\\Provider',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\Licensing\\Registry\\Product_Registry' => 
  array (
    'type' => 'class',
    'classname' => 'Product_Registry',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\Licensing\\Registry',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Licensing\\Registry\\Product_Registry',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\Licensing\\Repositories\\License_Repository' => 
  array (
    'type' => 'class',
    'classname' => 'License_Repository',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\Licensing\\Repositories',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Licensing\\Repositories\\License_Repository',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\Licensing\\Results\\Product_Entry' => 
  array (
    'type' => 'class',
    'classname' => 'Product_Entry',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\Licensing\\Results',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Licensing\\Results\\Product_Entry',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\Licensing\\Validation_State' => 
  array (
    'type' => 'class',
    'classname' => 'Validation_State',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\Licensing',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Licensing\\Validation_State',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\Notice\\Notice' => 
  array (
    'type' => 'class',
    'classname' => 'Notice',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\Notice',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Notice\\Notice',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\Notice\\Notice_Controller' => 
  array (
    'type' => 'class',
    'classname' => 'Notice_Controller',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\Notice',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Notice\\Notice_Controller',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\Portal\\Catalog_Collection' => 
  array (
    'type' => 'class',
    'classname' => 'Catalog_Collection',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\Portal',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Portal\\Catalog_Collection',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\Portal\\Catalog_Repository' => 
  array (
    'type' => 'class',
    'classname' => 'Catalog_Repository',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\Portal',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Portal\\Catalog_Repository',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\Portal\\Clients\\Fixture_Client' => 
  array (
    'type' => 'class',
    'classname' => 'Fixture_Client',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\Portal\\Clients',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Portal\\Clients\\Fixture_Client',
    'implements' => 
    array (
      0 => 'LiquidWeb\\Harbor\\Portal\\Clients\\Portal_Client',
    ),
  ),
  'LiquidWeb\\Harbor\\Portal\\Clients\\Http_Client' => 
  array (
    'type' => 'class',
    'classname' => 'Http_Client',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\Portal\\Clients',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Portal\\Clients\\Http_Client',
    'implements' => 
    array (
      0 => 'LiquidWeb\\Harbor\\Portal\\Clients\\Portal_Client',
    ),
  ),
  'LiquidWeb\\Harbor\\Portal\\Error_Code' => 
  array (
    'type' => 'class',
    'classname' => 'Error_Code',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\Portal',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Portal\\Error_Code',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\Portal\\Herald_Legacy_Url_Builder' => 
  array (
    'type' => 'class',
    'classname' => 'Herald_Legacy_Url_Builder',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\Portal',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Portal\\Herald_Legacy_Url_Builder',
    'implements' => 
    array (
      0 => 'LiquidWeb\\Harbor\\Portal\\Contracts\\Download_Url_Builder',
    ),
  ),
  'LiquidWeb\\Harbor\\Portal\\Herald_Routing_Url_Builder' => 
  array (
    'type' => 'class',
    'classname' => 'Herald_Routing_Url_Builder',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\Portal',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Portal\\Herald_Routing_Url_Builder',
    'implements' => 
    array (
      0 => 'LiquidWeb\\Harbor\\Portal\\Contracts\\Download_Url_Builder',
    ),
  ),
  'LiquidWeb\\Harbor\\Portal\\Herald_Url_Builder' => 
  array (
    'type' => 'class',
    'classname' => 'Herald_Url_Builder',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\Portal',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Portal\\Herald_Url_Builder',
    'implements' => 
    array (
      0 => 'LiquidWeb\\Harbor\\Portal\\Contracts\\Download_Url_Builder',
    ),
  ),
  'LiquidWeb\\Harbor\\Portal\\Provider' => 
  array (
    'type' => 'class',
    'classname' => 'Provider',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\Portal',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Portal\\Provider',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\Portal\\Results\\Catalog_Feature' => 
  array (
    'type' => 'class',
    'classname' => 'Catalog_Feature',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\Portal\\Results',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Portal\\Results\\Catalog_Feature',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\Portal\\Results\\Catalog_Tier' => 
  array (
    'type' => 'class',
    'classname' => 'Catalog_Tier',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\Portal\\Results',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Portal\\Results\\Catalog_Tier',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\Portal\\Results\\Product_Catalog' => 
  array (
    'type' => 'class',
    'classname' => 'Product_Catalog',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\Portal\\Results',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Portal\\Results\\Product_Catalog',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\Portal\\Results\\Tier_Collection' => 
  array (
    'type' => 'class',
    'classname' => 'Tier_Collection',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\Portal\\Results',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Portal\\Results\\Tier_Collection',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\Premium_Plugin_Registry' => 
  array (
    'type' => 'class',
    'classname' => 'Premium_Plugin_Registry',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Premium_Plugin_Registry',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\Site\\Data' => 
  array (
    'type' => 'class',
    'classname' => 'Data',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\Site',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Site\\Data',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\Utils\\Cast' => 
  array (
    'type' => 'class',
    'classname' => 'Cast',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\Utils',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Utils\\Cast',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\Utils\\Checks' => 
  array (
    'type' => 'class',
    'classname' => 'Checks',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\Utils',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Utils\\Checks',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\Utils\\Collection' => 
  array (
    'type' => 'class',
    'classname' => 'Collection',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\Utils',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Utils\\Collection',
    'implements' => 
    array (
      0 => 'ArrayAccess',
      1 => 'IteratorAggregate',
      2 => 'Countable',
    ),
  ),
  'LiquidWeb\\Harbor\\Utils\\License_Key' => 
  array (
    'type' => 'class',
    'classname' => 'License_Key',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\Utils',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Utils\\License_Key',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\Utils\\Sanitize' => 
  array (
    'type' => 'class',
    'classname' => 'Sanitize',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\Utils',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Utils\\Sanitize',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\Utils\\Version' => 
  array (
    'type' => 'class',
    'classname' => 'Version',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\Utils',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\Utils\\Version',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\View\\Exceptions\\FileNotFoundException' => 
  array (
    'type' => 'class',
    'classname' => 'FileNotFoundException',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\View\\Exceptions',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\View\\Exceptions\\FileNotFoundException',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\View\\Provider' => 
  array (
    'type' => 'class',
    'classname' => 'Provider',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\View',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\View\\Provider',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\Harbor\\View\\WordPress_View' => 
  array (
    'type' => 'class',
    'classname' => 'WordPress_View',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\Harbor\\View',
    'extends' => 'Give\\Vendors\\LiquidWeb\\Harbor\\View\\WordPress_View',
    'implements' => 
    array (
      0 => 'LiquidWeb\\Harbor\\View\\Contracts\\View',
    ),
  ),
  'LiquidWeb\\LicensingApiClientWordPress\\Exceptions\\WordPressHttpClientException' => 
  array (
    'type' => 'class',
    'classname' => 'WordPressHttpClientException',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClientWordPress\\Exceptions',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClientWordPress\\Exceptions\\WordPressHttpClientException',
    'implements' => 
    array (
      0 => 'Psr\\Http\\Client\\ClientExceptionInterface',
    ),
  ),
  'LiquidWeb\\LicensingApiClientWordPress\\Http\\WordPressHttpClient' => 
  array (
    'type' => 'class',
    'classname' => 'WordPressHttpClient',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClientWordPress\\Http',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClientWordPress\\Http\\WordPressHttpClient',
    'implements' => 
    array (
      0 => 'Psr\\Http\\Client\\ClientInterface',
    ),
  ),
  'LiquidWeb\\LicensingApiClientWordPress\\WordPressApiFactory' => 
  array (
    'type' => 'class',
    'classname' => 'WordPressApiFactory',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClientWordPress',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClientWordPress\\WordPressApiFactory',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Api' => 
  array (
    'type' => 'class',
    'classname' => 'Api',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Api',
    'implements' => 
    array (
      0 => 'LiquidWeb\\LicensingApiClient\\Contracts\\LicensingClientInterface',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\ApiBuilder' => 
  array (
    'type' => 'class',
    'classname' => 'ApiBuilder',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\ApiBuilder',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Config' => 
  array (
    'type' => 'class',
    'classname' => 'Config',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Config',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Exceptions\\ApiResponseException' => 
  array (
    'type' => 'class',
    'classname' => 'ApiResponseException',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Exceptions',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Exceptions\\ApiResponseException',
    'implements' => 
    array (
      0 => 'LiquidWeb\\LicensingApiClient\\Exceptions\\Contracts\\ApiErrorExceptionInterface',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Exceptions\\AuthenticationException' => 
  array (
    'type' => 'class',
    'classname' => 'AuthenticationException',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Exceptions',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Exceptions\\AuthenticationException',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Exceptions\\AuthorizationException' => 
  array (
    'type' => 'class',
    'classname' => 'AuthorizationException',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Exceptions',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Exceptions\\AuthorizationException',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Exceptions\\ClientErrorException' => 
  array (
    'type' => 'class',
    'classname' => 'ClientErrorException',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Exceptions',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Exceptions\\ClientErrorException',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Exceptions\\ConflictException' => 
  array (
    'type' => 'class',
    'classname' => 'ConflictException',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Exceptions',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Exceptions\\ConflictException',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Exceptions\\DecodingException' => 
  array (
    'type' => 'class',
    'classname' => 'DecodingException',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Exceptions',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Exceptions\\DecodingException',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Exceptions\\MissingAuthenticationException' => 
  array (
    'type' => 'class',
    'classname' => 'MissingAuthenticationException',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Exceptions',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Exceptions\\MissingAuthenticationException',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Exceptions\\NotFoundException' => 
  array (
    'type' => 'class',
    'classname' => 'NotFoundException',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Exceptions',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Exceptions\\NotFoundException',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Exceptions\\ServerErrorException' => 
  array (
    'type' => 'class',
    'classname' => 'ServerErrorException',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Exceptions',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Exceptions\\ServerErrorException',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Exceptions\\UnexpectedResponseException' => 
  array (
    'type' => 'class',
    'classname' => 'UnexpectedResponseException',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Exceptions',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Exceptions\\UnexpectedResponseException',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Exceptions\\ValidationException' => 
  array (
    'type' => 'class',
    'classname' => 'ValidationException',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Exceptions',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Exceptions\\ValidationException',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Http\\ApiUri' => 
  array (
    'type' => 'class',
    'classname' => 'ApiUri',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Http',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Http\\ApiUri',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Http\\ApiVersion' => 
  array (
    'type' => 'class',
    'classname' => 'ApiVersion',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Http',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Http\\ApiVersion',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Http\\AuthContext' => 
  array (
    'type' => 'class',
    'classname' => 'AuthContext',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Http',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Http\\AuthContext',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Http\\AuthState' => 
  array (
    'type' => 'class',
    'classname' => 'AuthState',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Http',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Http\\AuthState',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Http\\Factories\\ApiUriFactory' => 
  array (
    'type' => 'class',
    'classname' => 'ApiUriFactory',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Http\\Factories',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Http\\Factories\\ApiUriFactory',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Http\\Factories\\ResponseExceptionFactory' => 
  array (
    'type' => 'class',
    'classname' => 'ResponseExceptionFactory',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Http\\Factories',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Http\\Factories\\ResponseExceptionFactory',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Http\\JsonDecoder' => 
  array (
    'type' => 'class',
    'classname' => 'JsonDecoder',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Http',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Http\\JsonDecoder',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Http\\RequestBuilder' => 
  array (
    'type' => 'class',
    'classname' => 'RequestBuilder',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Http',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Http\\RequestBuilder',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Http\\RequestExecutor' => 
  array (
    'type' => 'class',
    'classname' => 'RequestExecutor',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Http',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Http\\RequestExecutor',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Http\\RequestHeaderCollection' => 
  array (
    'type' => 'class',
    'classname' => 'RequestHeaderCollection',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Http',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Http\\RequestHeaderCollection',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Http\\RetryPolicy' => 
  array (
    'type' => 'class',
    'classname' => 'RetryPolicy',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Http',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Http\\RetryPolicy',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Requests\\Credit\\CreatePool' => 
  array (
    'type' => 'class',
    'classname' => 'CreatePool',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Requests\\Credit',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Requests\\Credit\\CreatePool',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Requests\\Credit\\DeletePool' => 
  array (
    'type' => 'class',
    'classname' => 'DeletePool',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Requests\\Credit',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Requests\\Credit\\DeletePool',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Requests\\Credit\\ListLedgerEntries' => 
  array (
    'type' => 'class',
    'classname' => 'ListLedgerEntries',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Requests\\Credit',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Requests\\Credit\\ListLedgerEntries',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Requests\\Credit\\RecordUsage' => 
  array (
    'type' => 'class',
    'classname' => 'RecordUsage',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Requests\\Credit',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Requests\\Credit\\RecordUsage',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Requests\\Credit\\Refund' => 
  array (
    'type' => 'class',
    'classname' => 'Refund',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Requests\\Credit',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Requests\\Credit\\Refund',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Requests\\Credit\\SetQuota' => 
  array (
    'type' => 'class',
    'classname' => 'SetQuota',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Requests\\Credit',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Requests\\Credit\\SetQuota',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Requests\\Credit\\UpdatePool' => 
  array (
    'type' => 'class',
    'classname' => 'UpdatePool',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Requests\\Credit',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Requests\\Credit\\UpdatePool',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Requests\\Entitlement\\SwitchTier' => 
  array (
    'type' => 'class',
    'classname' => 'SwitchTier',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Requests\\Entitlement',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Requests\\Entitlement\\SwitchTier',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Requests\\Entitlement\\Upsert' => 
  array (
    'type' => 'class',
    'classname' => 'Upsert',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Requests\\Entitlement',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Requests\\Entitlement\\Upsert',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Requests\\Entitlement\\ValueObjects\\UpsertProduct' => 
  array (
    'type' => 'class',
    'classname' => 'UpsertProduct',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Requests\\Entitlement\\ValueObjects',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Requests\\Entitlement\\ValueObjects\\UpsertProduct',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Requests\\License\\Activate' => 
  array (
    'type' => 'class',
    'classname' => 'Activate',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Requests\\License',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Requests\\License\\Activate',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Requests\\License\\Alias\\ImportAliases' => 
  array (
    'type' => 'class',
    'classname' => 'ImportAliases',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Requests\\License\\Alias',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Requests\\License\\Alias\\ImportAliases',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Requests\\License\\Alias\\RemoveAliases' => 
  array (
    'type' => 'class',
    'classname' => 'RemoveAliases',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Requests\\License\\Alias',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Requests\\License\\Alias\\RemoveAliases',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Requests\\License\\Alias\\ValueObjects\\ImportAlias' => 
  array (
    'type' => 'class',
    'classname' => 'ImportAlias',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Requests\\License\\Alias\\ValueObjects',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Requests\\License\\Alias\\ValueObjects\\ImportAlias',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Requests\\License\\Deactivate' => 
  array (
    'type' => 'class',
    'classname' => 'Deactivate',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Requests\\License',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Requests\\License\\Deactivate',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Requests\\License\\DeleteActivation' => 
  array (
    'type' => 'class',
    'classname' => 'DeleteActivation',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Requests\\License',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Requests\\License\\DeleteActivation',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Requests\\License\\LicenseReference' => 
  array (
    'type' => 'class',
    'classname' => 'LicenseReference',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Requests\\License',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Requests\\License\\LicenseReference',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Requests\\License\\Listing\\ListRequest' => 
  array (
    'type' => 'class',
    'classname' => 'ListRequest',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Requests\\License\\Listing',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Requests\\License\\Listing\\ListRequest',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Requests\\License\\RegenerateKey' => 
  array (
    'type' => 'class',
    'classname' => 'RegenerateKey',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Requests\\License',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Requests\\License\\RegenerateKey',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Requests\\Token\\Create' => 
  array (
    'type' => 'class',
    'classname' => 'Create',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Requests\\Token',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Requests\\Token\\Create',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Requests\\Token\\Revoke' => 
  array (
    'type' => 'class',
    'classname' => 'Revoke',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Requests\\Token',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Requests\\Token\\Revoke',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Resources\\Credit\\CreditsLedgerResource' => 
  array (
    'type' => 'class',
    'classname' => 'CreditsLedgerResource',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Resources\\Credit',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Resources\\Credit\\CreditsLedgerResource',
    'implements' => 
    array (
      0 => 'LiquidWeb\\LicensingApiClient\\Resources\\Contracts\\CreditsLedgerResourceInterface',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Resources\\Credit\\CreditsPoolsResource' => 
  array (
    'type' => 'class',
    'classname' => 'CreditsPoolsResource',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Resources\\Credit',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Resources\\Credit\\CreditsPoolsResource',
    'implements' => 
    array (
      0 => 'LiquidWeb\\LicensingApiClient\\Resources\\Contracts\\CreditsPoolsResourceInterface',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Resources\\Credit\\CreditsQuotasResource' => 
  array (
    'type' => 'class',
    'classname' => 'CreditsQuotasResource',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Resources\\Credit',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Resources\\Credit\\CreditsQuotasResource',
    'implements' => 
    array (
      0 => 'LiquidWeb\\LicensingApiClient\\Resources\\Contracts\\CreditsQuotasResourceInterface',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Resources\\Credit\\CreditsResource' => 
  array (
    'type' => 'class',
    'classname' => 'CreditsResource',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Resources\\Credit',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Resources\\Credit\\CreditsResource',
    'implements' => 
    array (
      0 => 'LiquidWeb\\LicensingApiClient\\Resources\\Contracts\\CreditsResourceInterface',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Resources\\EntitlementsResource' => 
  array (
    'type' => 'class',
    'classname' => 'EntitlementsResource',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Resources',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Resources\\EntitlementsResource',
    'implements' => 
    array (
      0 => 'LiquidWeb\\LicensingApiClient\\Resources\\Contracts\\EntitlementsResourceInterface',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Resources\\LicensesResource' => 
  array (
    'type' => 'class',
    'classname' => 'LicensesResource',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Resources',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Resources\\LicensesResource',
    'implements' => 
    array (
      0 => 'LiquidWeb\\LicensingApiClient\\Resources\\Contracts\\LicensesResourceInterface',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Resources\\ProductsResource' => 
  array (
    'type' => 'class',
    'classname' => 'ProductsResource',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Resources',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Resources\\ProductsResource',
    'implements' => 
    array (
      0 => 'LiquidWeb\\LicensingApiClient\\Resources\\Contracts\\ProductsResourceInterface',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Resources\\TokensResource' => 
  array (
    'type' => 'class',
    'classname' => 'TokensResource',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Resources',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Resources\\TokensResource',
    'implements' => 
    array (
      0 => 'LiquidWeb\\LicensingApiClient\\Resources\\Contracts\\TokensResourceInterface',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Responses\\Credit\\BalanceCollection' => 
  array (
    'type' => 'class',
    'classname' => 'BalanceCollection',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Responses\\Credit',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Responses\\Credit\\BalanceCollection',
    'implements' => 
    array (
      0 => 'LiquidWeb\\LicensingApiClient\\Responses\\Contracts\\Response',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Responses\\Credit\\DeletePool' => 
  array (
    'type' => 'class',
    'classname' => 'DeletePool',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Responses\\Credit',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Responses\\Credit\\DeletePool',
    'implements' => 
    array (
      0 => 'LiquidWeb\\LicensingApiClient\\Responses\\Contracts\\Response',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Responses\\Credit\\DeleteQuota' => 
  array (
    'type' => 'class',
    'classname' => 'DeleteQuota',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Responses\\Credit',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Responses\\Credit\\DeleteQuota',
    'implements' => 
    array (
      0 => 'LiquidWeb\\LicensingApiClient\\Responses\\Contracts\\Response',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Responses\\Credit\\LedgerPage' => 
  array (
    'type' => 'class',
    'classname' => 'LedgerPage',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Responses\\Credit',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Responses\\Credit\\LedgerPage',
    'implements' => 
    array (
      0 => 'LiquidWeb\\LicensingApiClient\\Responses\\Contracts\\Response',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Responses\\Credit\\PoolCollection' => 
  array (
    'type' => 'class',
    'classname' => 'PoolCollection',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Responses\\Credit',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Responses\\Credit\\PoolCollection',
    'implements' => 
    array (
      0 => 'LiquidWeb\\LicensingApiClient\\Responses\\Contracts\\Response',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Responses\\Credit\\QuotaCollection' => 
  array (
    'type' => 'class',
    'classname' => 'QuotaCollection',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Responses\\Credit',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Responses\\Credit\\QuotaCollection',
    'implements' => 
    array (
      0 => 'LiquidWeb\\LicensingApiClient\\Responses\\Contracts\\Response',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Responses\\Credit\\RecordUsage' => 
  array (
    'type' => 'class',
    'classname' => 'RecordUsage',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Responses\\Credit',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Responses\\Credit\\RecordUsage',
    'implements' => 
    array (
      0 => 'LiquidWeb\\LicensingApiClient\\Responses\\Contracts\\Response',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Responses\\Credit\\Refund' => 
  array (
    'type' => 'class',
    'classname' => 'Refund',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Responses\\Credit',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Responses\\Credit\\Refund',
    'implements' => 
    array (
      0 => 'LiquidWeb\\LicensingApiClient\\Responses\\Contracts\\Response',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Responses\\Credit\\ValueObjects\\BalanceEntry' => 
  array (
    'type' => 'class',
    'classname' => 'BalanceEntry',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Responses\\Credit\\ValueObjects',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Responses\\Credit\\ValueObjects\\BalanceEntry',
    'implements' => 
    array (
      0 => 'LiquidWeb\\LicensingApiClient\\Responses\\Contracts\\Response',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Responses\\Credit\\ValueObjects\\CreditPool' => 
  array (
    'type' => 'class',
    'classname' => 'CreditPool',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Responses\\Credit\\ValueObjects',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Responses\\Credit\\ValueObjects\\CreditPool',
    'implements' => 
    array (
      0 => 'LiquidWeb\\LicensingApiClient\\Responses\\Contracts\\Response',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Responses\\Credit\\ValueObjects\\LedgerEntry' => 
  array (
    'type' => 'class',
    'classname' => 'LedgerEntry',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Responses\\Credit\\ValueObjects',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Responses\\Credit\\ValueObjects\\LedgerEntry',
    'implements' => 
    array (
      0 => 'LiquidWeb\\LicensingApiClient\\Responses\\Contracts\\Response',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Responses\\Credit\\ValueObjects\\PoolBalance' => 
  array (
    'type' => 'class',
    'classname' => 'PoolBalance',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Responses\\Credit\\ValueObjects',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Responses\\Credit\\ValueObjects\\PoolBalance',
    'implements' => 
    array (
      0 => 'LiquidWeb\\LicensingApiClient\\Responses\\Contracts\\Response',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Responses\\Credit\\ValueObjects\\SiteQuota' => 
  array (
    'type' => 'class',
    'classname' => 'SiteQuota',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Responses\\Credit\\ValueObjects',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Responses\\Credit\\ValueObjects\\SiteQuota',
    'implements' => 
    array (
      0 => 'LiquidWeb\\LicensingApiClient\\Responses\\Contracts\\Response',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Responses\\Entitlement\\Cancel' => 
  array (
    'type' => 'class',
    'classname' => 'Cancel',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Responses\\Entitlement',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Responses\\Entitlement\\Cancel',
    'implements' => 
    array (
      0 => 'LiquidWeb\\LicensingApiClient\\Responses\\Contracts\\Response',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Responses\\Entitlement\\Delete' => 
  array (
    'type' => 'class',
    'classname' => 'Delete',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Responses\\Entitlement',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Responses\\Entitlement\\Delete',
    'implements' => 
    array (
      0 => 'LiquidWeb\\LicensingApiClient\\Responses\\Contracts\\Response',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Responses\\Entitlement\\Suspend' => 
  array (
    'type' => 'class',
    'classname' => 'Suspend',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Responses\\Entitlement',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Responses\\Entitlement\\Suspend',
    'implements' => 
    array (
      0 => 'LiquidWeb\\LicensingApiClient\\Responses\\Contracts\\Response',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Responses\\Entitlement\\SwitchTier' => 
  array (
    'type' => 'class',
    'classname' => 'SwitchTier',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Responses\\Entitlement',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Responses\\Entitlement\\SwitchTier',
    'implements' => 
    array (
      0 => 'LiquidWeb\\LicensingApiClient\\Responses\\Contracts\\Response',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Responses\\Entitlement\\Unsuspend' => 
  array (
    'type' => 'class',
    'classname' => 'Unsuspend',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Responses\\Entitlement',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Responses\\Entitlement\\Unsuspend',
    'implements' => 
    array (
      0 => 'LiquidWeb\\LicensingApiClient\\Responses\\Contracts\\Response',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Responses\\Entitlement\\Upsert' => 
  array (
    'type' => 'class',
    'classname' => 'Upsert',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Responses\\Entitlement',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Responses\\Entitlement\\Upsert',
    'implements' => 
    array (
      0 => 'LiquidWeb\\LicensingApiClient\\Responses\\Contracts\\Response',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Responses\\Entitlement\\ValueObjects\\UpsertProduct' => 
  array (
    'type' => 'class',
    'classname' => 'UpsertProduct',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Responses\\Entitlement\\ValueObjects',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Responses\\Entitlement\\ValueObjects\\UpsertProduct',
    'implements' => 
    array (
      0 => 'LiquidWeb\\LicensingApiClient\\Responses\\Contracts\\Response',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Responses\\ErrorResponse' => 
  array (
    'type' => 'class',
    'classname' => 'ErrorResponse',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Responses',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Responses\\ErrorResponse',
    'implements' => 
    array (
      0 => 'LiquidWeb\\LicensingApiClient\\Responses\\Contracts\\Response',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Responses\\License\\Activate' => 
  array (
    'type' => 'class',
    'classname' => 'Activate',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Responses\\License',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Responses\\License\\Activate',
    'implements' => 
    array (
      0 => 'LiquidWeb\\LicensingApiClient\\Responses\\Contracts\\Response',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Responses\\License\\Alias\\ImportAliases' => 
  array (
    'type' => 'class',
    'classname' => 'ImportAliases',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Responses\\License\\Alias',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Responses\\License\\Alias\\ImportAliases',
    'implements' => 
    array (
      0 => 'LiquidWeb\\LicensingApiClient\\Responses\\Contracts\\Response',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Responses\\License\\Alias\\RemoveAliases' => 
  array (
    'type' => 'class',
    'classname' => 'RemoveAliases',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Responses\\License\\Alias',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Responses\\License\\Alias\\RemoveAliases',
    'implements' => 
    array (
      0 => 'LiquidWeb\\LicensingApiClient\\Responses\\Contracts\\Response',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Responses\\License\\Alias\\ValueObjects\\ImportedAlias' => 
  array (
    'type' => 'class',
    'classname' => 'ImportedAlias',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Responses\\License\\Alias\\ValueObjects',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Responses\\License\\Alias\\ValueObjects\\ImportedAlias',
    'implements' => 
    array (
      0 => 'LiquidWeb\\LicensingApiClient\\Responses\\Contracts\\Response',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Responses\\License\\Deactivate' => 
  array (
    'type' => 'class',
    'classname' => 'Deactivate',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Responses\\License',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Responses\\License\\Deactivate',
    'implements' => 
    array (
      0 => 'LiquidWeb\\LicensingApiClient\\Responses\\Contracts\\Response',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Responses\\License\\DeleteActivation' => 
  array (
    'type' => 'class',
    'classname' => 'DeleteActivation',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Responses\\License',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Responses\\License\\DeleteActivation',
    'implements' => 
    array (
      0 => 'LiquidWeb\\LicensingApiClient\\Responses\\Contracts\\Response',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Responses\\License\\Listing\\Listing' => 
  array (
    'type' => 'class',
    'classname' => 'Listing',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Responses\\License\\Listing',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Responses\\License\\Listing\\Listing',
    'implements' => 
    array (
      0 => 'LiquidWeb\\LicensingApiClient\\Responses\\Contracts\\Response',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Responses\\License\\Listing\\ValueObjects\\LicenseListItem' => 
  array (
    'type' => 'class',
    'classname' => 'LicenseListItem',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Responses\\License\\Listing\\ValueObjects',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Responses\\License\\Listing\\ValueObjects\\LicenseListItem',
    'implements' => 
    array (
      0 => 'LiquidWeb\\LicensingApiClient\\Responses\\Contracts\\Response',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Responses\\License\\Listing\\ValueObjects\\ListedProduct' => 
  array (
    'type' => 'class',
    'classname' => 'ListedProduct',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Responses\\License\\Listing\\ValueObjects',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Responses\\License\\Listing\\ValueObjects\\ListedProduct',
    'implements' => 
    array (
      0 => 'LiquidWeb\\LicensingApiClient\\Responses\\Contracts\\Response',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Responses\\License\\Listing\\ValueObjects\\ListedProductCollection' => 
  array (
    'type' => 'class',
    'classname' => 'ListedProductCollection',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Responses\\License\\Listing\\ValueObjects',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Responses\\License\\Listing\\ValueObjects\\ListedProductCollection',
    'implements' => 
    array (
      0 => 'ArrayAccess',
      1 => 'Countable',
      2 => 'IteratorAggregate',
      3 => 'LiquidWeb\\LicensingApiClient\\Responses\\Contracts\\Response',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Responses\\License\\RegenerateKey' => 
  array (
    'type' => 'class',
    'classname' => 'RegenerateKey',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Responses\\License',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Responses\\License\\RegenerateKey',
    'implements' => 
    array (
      0 => 'LiquidWeb\\LicensingApiClient\\Responses\\Contracts\\Response',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Responses\\License\\StatusChange' => 
  array (
    'type' => 'class',
    'classname' => 'StatusChange',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Responses\\License',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Responses\\License\\StatusChange',
    'implements' => 
    array (
      0 => 'LiquidWeb\\LicensingApiClient\\Responses\\Contracts\\Response',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Responses\\License\\Validate' => 
  array (
    'type' => 'class',
    'classname' => 'Validate',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Responses\\License',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Responses\\License\\Validate',
    'implements' => 
    array (
      0 => 'LiquidWeb\\LicensingApiClient\\Responses\\Contracts\\Response',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Responses\\License\\ValidatedProductCollection' => 
  array (
    'type' => 'class',
    'classname' => 'ValidatedProductCollection',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Responses\\License',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Responses\\License\\ValidatedProductCollection',
    'implements' => 
    array (
      0 => 'ArrayAccess',
      1 => 'Countable',
      2 => 'IteratorAggregate',
      3 => 'LiquidWeb\\LicensingApiClient\\Responses\\Contracts\\Response',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Responses\\License\\ValueObjects\\Activation' => 
  array (
    'type' => 'class',
    'classname' => 'Activation',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Responses\\License\\ValueObjects',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Responses\\License\\ValueObjects\\Activation',
    'implements' => 
    array (
      0 => 'LiquidWeb\\LicensingApiClient\\Responses\\Contracts\\Response',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Responses\\License\\ValueObjects\\ActivationEntitlement' => 
  array (
    'type' => 'class',
    'classname' => 'ActivationEntitlement',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Responses\\License\\ValueObjects',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Responses\\License\\ValueObjects\\ActivationEntitlement',
    'implements' => 
    array (
      0 => 'LiquidWeb\\LicensingApiClient\\Responses\\Contracts\\Response',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Responses\\License\\ValueObjects\\AvailableEntitlement' => 
  array (
    'type' => 'class',
    'classname' => 'AvailableEntitlement',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Responses\\License\\ValueObjects',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Responses\\License\\ValueObjects\\AvailableEntitlement',
    'implements' => 
    array (
      0 => 'LiquidWeb\\LicensingApiClient\\Responses\\Contracts\\Response',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Responses\\License\\ValueObjects\\Entitlement' => 
  array (
    'type' => 'class',
    'classname' => 'Entitlement',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Responses\\License\\ValueObjects',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Responses\\License\\ValueObjects\\Entitlement',
    'implements' => 
    array (
      0 => 'LiquidWeb\\LicensingApiClient\\Responses\\Contracts\\Response',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Responses\\License\\ValueObjects\\LicenseSummary' => 
  array (
    'type' => 'class',
    'classname' => 'LicenseSummary',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Responses\\License\\ValueObjects',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Responses\\License\\ValueObjects\\LicenseSummary',
    'implements' => 
    array (
      0 => 'LiquidWeb\\LicensingApiClient\\Responses\\Contracts\\Response',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Responses\\License\\ValueObjects\\ProductValidation' => 
  array (
    'type' => 'class',
    'classname' => 'ProductValidation',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Responses\\License\\ValueObjects',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Responses\\License\\ValueObjects\\ProductValidation',
    'implements' => 
    array (
      0 => 'LiquidWeb\\LicensingApiClient\\Responses\\Contracts\\Response',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Responses\\Product\\Catalog' => 
  array (
    'type' => 'class',
    'classname' => 'Catalog',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Responses\\Product',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Responses\\Product\\Catalog',
    'implements' => 
    array (
      0 => 'LiquidWeb\\LicensingApiClient\\Responses\\Contracts\\Response',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Responses\\Product\\CatalogProductCollection' => 
  array (
    'type' => 'class',
    'classname' => 'CatalogProductCollection',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Responses\\Product',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Responses\\Product\\CatalogProductCollection',
    'implements' => 
    array (
      0 => 'ArrayAccess',
      1 => 'Countable',
      2 => 'IteratorAggregate',
      3 => 'LiquidWeb\\LicensingApiClient\\Responses\\Contracts\\Response',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Responses\\Product\\ValueObjects\\ActivationDomain' => 
  array (
    'type' => 'class',
    'classname' => 'ActivationDomain',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Responses\\Product\\ValueObjects',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Responses\\Product\\ValueObjects\\ActivationDomain',
    'implements' => 
    array (
      0 => 'LiquidWeb\\LicensingApiClient\\Responses\\Contracts\\Response',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Responses\\Product\\ValueObjects\\Activations' => 
  array (
    'type' => 'class',
    'classname' => 'Activations',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Responses\\Product\\ValueObjects',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Responses\\Product\\ValueObjects\\Activations',
    'implements' => 
    array (
      0 => 'LiquidWeb\\LicensingApiClient\\Responses\\Contracts\\Response',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Responses\\Product\\ValueObjects\\CatalogEntry' => 
  array (
    'type' => 'class',
    'classname' => 'CatalogEntry',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Responses\\Product\\ValueObjects',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Responses\\Product\\ValueObjects\\CatalogEntry',
    'implements' => 
    array (
      0 => 'LiquidWeb\\LicensingApiClient\\Responses\\Contracts\\Response',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Responses\\Token\\Auth' => 
  array (
    'type' => 'class',
    'classname' => 'Auth',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Responses\\Token',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Responses\\Token\\Auth',
    'implements' => 
    array (
      0 => 'LiquidWeb\\LicensingApiClient\\Responses\\Contracts\\Response',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Responses\\Token\\TokenList' => 
  array (
    'type' => 'class',
    'classname' => 'TokenList',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Responses\\Token',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Responses\\Token\\TokenList',
    'implements' => 
    array (
      0 => 'LiquidWeb\\LicensingApiClient\\Responses\\Contracts\\Response',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Responses\\Token\\ValueObjects\\TokenItem' => 
  array (
    'type' => 'class',
    'classname' => 'TokenItem',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Responses\\Token\\ValueObjects',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Responses\\Token\\ValueObjects\\TokenItem',
    'implements' => 
    array (
      0 => 'LiquidWeb\\LicensingApiClient\\Responses\\Contracts\\Response',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Responses\\ValueObjects\\CapabilityCollection' => 
  array (
    'type' => 'class',
    'classname' => 'CapabilityCollection',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Responses\\ValueObjects',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Responses\\ValueObjects\\CapabilityCollection',
    'implements' => 
    array (
      0 => 'ArrayAccess',
      1 => 'Countable',
      2 => 'IteratorAggregate',
      3 => 'LiquidWeb\\LicensingApiClient\\Responses\\Contracts\\Response',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Responses\\ValueObjects\\PageMeta' => 
  array (
    'type' => 'class',
    'classname' => 'PageMeta',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Responses\\ValueObjects',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Responses\\ValueObjects\\PageMeta',
    'implements' => 
    array (
      0 => 'LiquidWeb\\LicensingApiClient\\Responses\\Contracts\\Response',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Responses\\ValueObjects\\PaginationLinks' => 
  array (
    'type' => 'class',
    'classname' => 'PaginationLinks',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Responses\\ValueObjects',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Responses\\ValueObjects\\PaginationLinks',
    'implements' => 
    array (
      0 => 'LiquidWeb\\LicensingApiClient\\Responses\\Contracts\\Response',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Tracing\\TraceContext' => 
  array (
    'type' => 'class',
    'classname' => 'TraceContext',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Tracing',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Tracing\\TraceContext',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Tracing\\TraceParent' => 
  array (
    'type' => 'class',
    'classname' => 'TraceParent',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Tracing',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Tracing\\TraceParent',
    'implements' => 
    array (
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Value\\AuthToken' => 
  array (
    'type' => 'class',
    'classname' => 'AuthToken',
    'isabstract' => false,
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Value',
    'extends' => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Value\\AuthToken',
    'implements' => 
    array (
    ),
  ),
  'StellarWP\\Validation\\Commands\\ExcludeValue' => 
  array (
    'type' => 'class',
    'classname' => 'ExcludeValue',
    'isabstract' => false,
    'namespace' => 'StellarWP\\Validation\\Commands',
    'extends' => 'Give\\Vendors\\StellarWP\\Validation\\Commands\\ExcludeValue',
    'implements' => 
    array (
    ),
  ),
  'StellarWP\\Validation\\Commands\\SkipValidationRules' => 
  array (
    'type' => 'class',
    'classname' => 'SkipValidationRules',
    'isabstract' => false,
    'namespace' => 'StellarWP\\Validation\\Commands',
    'extends' => 'Give\\Vendors\\StellarWP\\Validation\\Commands\\SkipValidationRules',
    'implements' => 
    array (
    ),
  ),
  'StellarWP\\Validation\\Config' => 
  array (
    'type' => 'class',
    'classname' => 'Config',
    'isabstract' => false,
    'namespace' => 'StellarWP\\Validation',
    'extends' => 'Give\\Vendors\\StellarWP\\Validation\\Config',
    'implements' => 
    array (
    ),
  ),
  'StellarWP\\Validation\\Exceptions\\ValidationException' => 
  array (
    'type' => 'class',
    'classname' => 'ValidationException',
    'isabstract' => false,
    'namespace' => 'StellarWP\\Validation\\Exceptions',
    'extends' => 'Give\\Vendors\\StellarWP\\Validation\\Exceptions\\ValidationException',
    'implements' => 
    array (
      0 => 'StellarWP\\Validation\\Exceptions\\Contracts\\ValidationExceptionInterface',
    ),
  ),
  'StellarWP\\Validation\\Rules\\Abstracts\\ConditionalRule' => 
  array (
    'type' => 'class',
    'classname' => 'ConditionalRule',
    'isabstract' => true,
    'namespace' => 'StellarWP\\Validation\\Rules\\Abstracts',
    'extends' => 'Give\\Vendors\\StellarWP\\Validation\\Rules\\Abstracts\\ConditionalRule',
    'implements' => 
    array (
      0 => 'StellarWP\\Validation\\Contracts\\ValidationRule',
      1 => 'StellarWP\\Validation\\Contracts\\ValidatesOnFrontEnd',
    ),
  ),
  'StellarWP\\Validation\\Rules\\Boolean' => 
  array (
    'type' => 'class',
    'classname' => 'Boolean',
    'isabstract' => false,
    'namespace' => 'StellarWP\\Validation\\Rules',
    'extends' => 'Give\\Vendors\\StellarWP\\Validation\\Rules\\Boolean',
    'implements' => 
    array (
      0 => 'StellarWP\\Validation\\Contracts\\ValidationRule',
      1 => 'StellarWP\\Validation\\Contracts\\ValidatesOnFrontEnd',
      2 => 'StellarWP\\Validation\\Contracts\\Sanitizer',
    ),
  ),
  'StellarWP\\Validation\\Rules\\Currency' => 
  array (
    'type' => 'class',
    'classname' => 'Currency',
    'isabstract' => false,
    'namespace' => 'StellarWP\\Validation\\Rules',
    'extends' => 'Give\\Vendors\\StellarWP\\Validation\\Rules\\Currency',
    'implements' => 
    array (
      0 => 'StellarWP\\Validation\\Contracts\\ValidationRule',
      1 => 'StellarWP\\Validation\\Contracts\\ValidatesOnFrontEnd',
    ),
  ),
  'StellarWP\\Validation\\Rules\\DateTime' => 
  array (
    'type' => 'class',
    'classname' => 'DateTime',
    'isabstract' => false,
    'namespace' => 'StellarWP\\Validation\\Rules',
    'extends' => 'Give\\Vendors\\StellarWP\\Validation\\Rules\\DateTime',
    'implements' => 
    array (
      0 => 'StellarWP\\Validation\\Contracts\\ValidationRule',
      1 => 'StellarWP\\Validation\\Contracts\\ValidatesOnFrontEnd',
      2 => 'StellarWP\\Validation\\Contracts\\Sanitizer',
    ),
  ),
  'StellarWP\\Validation\\Rules\\Email' => 
  array (
    'type' => 'class',
    'classname' => 'Email',
    'isabstract' => false,
    'namespace' => 'StellarWP\\Validation\\Rules',
    'extends' => 'Give\\Vendors\\StellarWP\\Validation\\Rules\\Email',
    'implements' => 
    array (
      0 => 'StellarWP\\Validation\\Contracts\\ValidationRule',
      1 => 'StellarWP\\Validation\\Contracts\\ValidatesOnFrontEnd',
    ),
  ),
  'StellarWP\\Validation\\Rules\\Exclude' => 
  array (
    'type' => 'class',
    'classname' => 'Exclude',
    'isabstract' => false,
    'namespace' => 'StellarWP\\Validation\\Rules',
    'extends' => 'Give\\Vendors\\StellarWP\\Validation\\Rules\\Exclude',
    'implements' => 
    array (
      0 => 'StellarWP\\Validation\\Contracts\\ValidationRule',
    ),
  ),
  'StellarWP\\Validation\\Rules\\ExcludeIf' => 
  array (
    'type' => 'class',
    'classname' => 'ExcludeIf',
    'isabstract' => false,
    'namespace' => 'StellarWP\\Validation\\Rules',
    'extends' => 'Give\\Vendors\\StellarWP\\Validation\\Rules\\ExcludeIf',
    'implements' => 
    array (
    ),
  ),
  'StellarWP\\Validation\\Rules\\ExcludeUnless' => 
  array (
    'type' => 'class',
    'classname' => 'ExcludeUnless',
    'isabstract' => false,
    'namespace' => 'StellarWP\\Validation\\Rules',
    'extends' => 'Give\\Vendors\\StellarWP\\Validation\\Rules\\ExcludeUnless',
    'implements' => 
    array (
    ),
  ),
  'StellarWP\\Validation\\Rules\\In' => 
  array (
    'type' => 'class',
    'classname' => 'In',
    'isabstract' => false,
    'namespace' => 'StellarWP\\Validation\\Rules',
    'extends' => 'Give\\Vendors\\StellarWP\\Validation\\Rules\\In',
    'implements' => 
    array (
      0 => 'StellarWP\\Validation\\Contracts\\ValidationRule',
      1 => 'StellarWP\\Validation\\Contracts\\ValidatesOnFrontEnd',
    ),
  ),
  'StellarWP\\Validation\\Rules\\InStrict' => 
  array (
    'type' => 'class',
    'classname' => 'InStrict',
    'isabstract' => false,
    'namespace' => 'StellarWP\\Validation\\Rules',
    'extends' => 'Give\\Vendors\\StellarWP\\Validation\\Rules\\InStrict',
    'implements' => 
    array (
    ),
  ),
  'StellarWP\\Validation\\Rules\\Integer' => 
  array (
    'type' => 'class',
    'classname' => 'Integer',
    'isabstract' => false,
    'namespace' => 'StellarWP\\Validation\\Rules',
    'extends' => 'Give\\Vendors\\StellarWP\\Validation\\Rules\\Integer',
    'implements' => 
    array (
      0 => 'StellarWP\\Validation\\Contracts\\ValidationRule',
      1 => 'StellarWP\\Validation\\Contracts\\ValidatesOnFrontEnd',
      2 => 'StellarWP\\Validation\\Contracts\\Sanitizer',
    ),
  ),
  'StellarWP\\Validation\\Rules\\Max' => 
  array (
    'type' => 'class',
    'classname' => 'Max',
    'isabstract' => false,
    'namespace' => 'StellarWP\\Validation\\Rules',
    'extends' => 'Give\\Vendors\\StellarWP\\Validation\\Rules\\Max',
    'implements' => 
    array (
      0 => 'StellarWP\\Validation\\Contracts\\ValidationRule',
      1 => 'StellarWP\\Validation\\Contracts\\ValidatesOnFrontEnd',
    ),
  ),
  'StellarWP\\Validation\\Rules\\Min' => 
  array (
    'type' => 'class',
    'classname' => 'Min',
    'isabstract' => false,
    'namespace' => 'StellarWP\\Validation\\Rules',
    'extends' => 'Give\\Vendors\\StellarWP\\Validation\\Rules\\Min',
    'implements' => 
    array (
      0 => 'StellarWP\\Validation\\Contracts\\ValidationRule',
      1 => 'StellarWP\\Validation\\Contracts\\ValidatesOnFrontEnd',
    ),
  ),
  'StellarWP\\Validation\\Rules\\Nullable' => 
  array (
    'type' => 'class',
    'classname' => 'Nullable',
    'isabstract' => false,
    'namespace' => 'StellarWP\\Validation\\Rules',
    'extends' => 'Give\\Vendors\\StellarWP\\Validation\\Rules\\Nullable',
    'implements' => 
    array (
      0 => 'StellarWP\\Validation\\Contracts\\ValidationRule',
      1 => 'StellarWP\\Validation\\Contracts\\ValidatesOnFrontEnd',
    ),
  ),
  'StellarWP\\Validation\\Rules\\NullableIf' => 
  array (
    'type' => 'class',
    'classname' => 'NullableIf',
    'isabstract' => false,
    'namespace' => 'StellarWP\\Validation\\Rules',
    'extends' => 'Give\\Vendors\\StellarWP\\Validation\\Rules\\NullableIf',
    'implements' => 
    array (
    ),
  ),
  'StellarWP\\Validation\\Rules\\NullableUnless' => 
  array (
    'type' => 'class',
    'classname' => 'NullableUnless',
    'isabstract' => false,
    'namespace' => 'StellarWP\\Validation\\Rules',
    'extends' => 'Give\\Vendors\\StellarWP\\Validation\\Rules\\NullableUnless',
    'implements' => 
    array (
    ),
  ),
  'StellarWP\\Validation\\Rules\\Numeric' => 
  array (
    'type' => 'class',
    'classname' => 'Numeric',
    'isabstract' => false,
    'namespace' => 'StellarWP\\Validation\\Rules',
    'extends' => 'Give\\Vendors\\StellarWP\\Validation\\Rules\\Numeric',
    'implements' => 
    array (
      0 => 'StellarWP\\Validation\\Contracts\\ValidationRule',
      1 => 'StellarWP\\Validation\\Contracts\\ValidatesOnFrontEnd',
    ),
  ),
  'StellarWP\\Validation\\Rules\\Optional' => 
  array (
    'type' => 'class',
    'classname' => 'Optional',
    'isabstract' => false,
    'namespace' => 'StellarWP\\Validation\\Rules',
    'extends' => 'Give\\Vendors\\StellarWP\\Validation\\Rules\\Optional',
    'implements' => 
    array (
      0 => 'StellarWP\\Validation\\Contracts\\ValidationRule',
      1 => 'StellarWP\\Validation\\Contracts\\ValidatesOnFrontEnd',
    ),
  ),
  'StellarWP\\Validation\\Rules\\OptionalIf' => 
  array (
    'type' => 'class',
    'classname' => 'OptionalIf',
    'isabstract' => false,
    'namespace' => 'StellarWP\\Validation\\Rules',
    'extends' => 'Give\\Vendors\\StellarWP\\Validation\\Rules\\OptionalIf',
    'implements' => 
    array (
    ),
  ),
  'StellarWP\\Validation\\Rules\\OptionalUnless' => 
  array (
    'type' => 'class',
    'classname' => 'OptionalUnless',
    'isabstract' => false,
    'namespace' => 'StellarWP\\Validation\\Rules',
    'extends' => 'Give\\Vendors\\StellarWP\\Validation\\Rules\\OptionalUnless',
    'implements' => 
    array (
    ),
  ),
  'StellarWP\\Validation\\Rules\\Required' => 
  array (
    'type' => 'class',
    'classname' => 'Required',
    'isabstract' => false,
    'namespace' => 'StellarWP\\Validation\\Rules',
    'extends' => 'Give\\Vendors\\StellarWP\\Validation\\Rules\\Required',
    'implements' => 
    array (
      0 => 'StellarWP\\Validation\\Contracts\\ValidationRule',
      1 => 'StellarWP\\Validation\\Contracts\\ValidatesOnFrontEnd',
    ),
  ),
  'StellarWP\\Validation\\Rules\\Size' => 
  array (
    'type' => 'class',
    'classname' => 'Size',
    'isabstract' => false,
    'namespace' => 'StellarWP\\Validation\\Rules',
    'extends' => 'Give\\Vendors\\StellarWP\\Validation\\Rules\\Size',
    'implements' => 
    array (
      0 => 'StellarWP\\Validation\\Contracts\\ValidationRule',
      1 => 'StellarWP\\Validation\\Contracts\\ValidatesOnFrontEnd',
    ),
  ),
  'StellarWP\\Validation\\ServiceProvider' => 
  array (
    'type' => 'class',
    'classname' => 'ServiceProvider',
    'isabstract' => false,
    'namespace' => 'StellarWP\\Validation',
    'extends' => 'Give\\Vendors\\StellarWP\\Validation\\ServiceProvider',
    'implements' => 
    array (
    ),
  ),
  'StellarWP\\Validation\\ValidationRuleSet' => 
  array (
    'type' => 'class',
    'classname' => 'ValidationRuleSet',
    'isabstract' => false,
    'namespace' => 'StellarWP\\Validation',
    'extends' => 'Give\\Vendors\\StellarWP\\Validation\\ValidationRuleSet',
    'implements' => 
    array (
      0 => 'IteratorAggregate',
      1 => 'JsonSerializable',
    ),
  ),
  'StellarWP\\Validation\\ValidationRulesRegistrar' => 
  array (
    'type' => 'class',
    'classname' => 'ValidationRulesRegistrar',
    'isabstract' => false,
    'namespace' => 'StellarWP\\Validation',
    'extends' => 'Give\\Vendors\\StellarWP\\Validation\\ValidationRulesRegistrar',
    'implements' => 
    array (
    ),
  ),
  'StellarWP\\Validation\\Validator' => 
  array (
    'type' => 'class',
    'classname' => 'Validator',
    'isabstract' => false,
    'namespace' => 'StellarWP\\Validation',
    'extends' => 'Give\\Vendors\\StellarWP\\Validation\\Validator',
    'implements' => 
    array (
    ),
  ),
  'StellarWP\\Validation\\Tests\\TestCase' => 
  array (
    'type' => 'class',
    'classname' => 'TestCase',
    'isabstract' => false,
    'namespace' => 'StellarWP\\Validation\\Tests',
    'extends' => 'Give\\Vendors\\StellarWP\\Validation\\Tests\\TestCase',
    'implements' => 
    array (
    ),
  ),
  'StellarWP\\Validation\\Tests\\Unit\\Rules\\CurrencyTest' => 
  array (
    'type' => 'class',
    'classname' => 'CurrencyTest',
    'isabstract' => false,
    'namespace' => 'StellarWP\\Validation\\Tests\\Unit\\Rules',
    'extends' => 'Give\\Vendors\\StellarWP\\Validation\\Tests\\Unit\\Rules\\CurrencyTest',
    'implements' => 
    array (
    ),
  ),
  'StellarWP\\Validation\\Tests\\Unit\\Rules\\DateTimeTest' => 
  array (
    'type' => 'class',
    'classname' => 'DateTimeTest',
    'isabstract' => false,
    'namespace' => 'StellarWP\\Validation\\Tests\\Unit\\Rules',
    'extends' => 'Give\\Vendors\\StellarWP\\Validation\\Tests\\Unit\\Rules\\DateTimeTest',
    'implements' => 
    array (
    ),
  ),
  'StellarWP\\Validation\\Tests\\Unit\\Rules\\EmailTest' => 
  array (
    'type' => 'class',
    'classname' => 'EmailTest',
    'isabstract' => false,
    'namespace' => 'StellarWP\\Validation\\Tests\\Unit\\Rules',
    'extends' => 'Give\\Vendors\\StellarWP\\Validation\\Tests\\Unit\\Rules\\EmailTest',
    'implements' => 
    array (
    ),
  ),
  'StellarWP\\Validation\\Tests\\Unit\\Rules\\ExcludeIfTest' => 
  array (
    'type' => 'class',
    'classname' => 'ExcludeIfTest',
    'isabstract' => false,
    'namespace' => 'StellarWP\\Validation\\Tests\\Unit\\Rules',
    'extends' => 'Give\\Vendors\\StellarWP\\Validation\\Tests\\Unit\\Rules\\ExcludeIfTest',
    'implements' => 
    array (
    ),
  ),
  'StellarWP\\Validation\\Tests\\Unit\\Rules\\ExcludeTest' => 
  array (
    'type' => 'class',
    'classname' => 'ExcludeTest',
    'isabstract' => false,
    'namespace' => 'StellarWP\\Validation\\Tests\\Unit\\Rules',
    'extends' => 'Give\\Vendors\\StellarWP\\Validation\\Tests\\Unit\\Rules\\ExcludeTest',
    'implements' => 
    array (
    ),
  ),
  'StellarWP\\Validation\\Tests\\Unit\\Rules\\InStrictTest' => 
  array (
    'type' => 'class',
    'classname' => 'InStrictTest',
    'isabstract' => false,
    'namespace' => 'StellarWP\\Validation\\Tests\\Unit\\Rules',
    'extends' => 'Give\\Vendors\\StellarWP\\Validation\\Tests\\Unit\\Rules\\InStrictTest',
    'implements' => 
    array (
    ),
  ),
  'StellarWP\\Validation\\Tests\\Unit\\Rules\\IntegerTest' => 
  array (
    'type' => 'class',
    'classname' => 'IntegerTest',
    'isabstract' => false,
    'namespace' => 'StellarWP\\Validation\\Tests\\Unit\\Rules',
    'extends' => 'Give\\Vendors\\StellarWP\\Validation\\Tests\\Unit\\Rules\\IntegerTest',
    'implements' => 
    array (
    ),
  ),
  'StellarWP\\Validation\\Tests\\Unit\\Rules\\MaxTest' => 
  array (
    'type' => 'class',
    'classname' => 'MaxTest',
    'isabstract' => false,
    'namespace' => 'StellarWP\\Validation\\Tests\\Unit\\Rules',
    'extends' => 'Give\\Vendors\\StellarWP\\Validation\\Tests\\Unit\\Rules\\MaxTest',
    'implements' => 
    array (
    ),
  ),
  'StellarWP\\Validation\\Tests\\Unit\\Rules\\MinTest' => 
  array (
    'type' => 'class',
    'classname' => 'MinTest',
    'isabstract' => false,
    'namespace' => 'StellarWP\\Validation\\Tests\\Unit\\Rules',
    'extends' => 'Give\\Vendors\\StellarWP\\Validation\\Tests\\Unit\\Rules\\MinTest',
    'implements' => 
    array (
    ),
  ),
  'StellarWP\\Validation\\Tests\\Unit\\Rules\\NullableTest' => 
  array (
    'type' => 'class',
    'classname' => 'NullableTest',
    'isabstract' => false,
    'namespace' => 'StellarWP\\Validation\\Tests\\Unit\\Rules',
    'extends' => 'Give\\Vendors\\StellarWP\\Validation\\Tests\\Unit\\Rules\\NullableTest',
    'implements' => 
    array (
    ),
  ),
  'StellarWP\\Validation\\Tests\\Unit\\Rules\\NumericTest' => 
  array (
    'type' => 'class',
    'classname' => 'NumericTest',
    'isabstract' => false,
    'namespace' => 'StellarWP\\Validation\\Tests\\Unit\\Rules',
    'extends' => 'Give\\Vendors\\StellarWP\\Validation\\Tests\\Unit\\Rules\\NumericTest',
    'implements' => 
    array (
    ),
  ),
  'StellarWP\\Validation\\Tests\\Unit\\Rules\\OptionalTest' => 
  array (
    'type' => 'class',
    'classname' => 'OptionalTest',
    'isabstract' => false,
    'namespace' => 'StellarWP\\Validation\\Tests\\Unit\\Rules',
    'extends' => 'Give\\Vendors\\StellarWP\\Validation\\Tests\\Unit\\Rules\\OptionalTest',
    'implements' => 
    array (
    ),
  ),
  'StellarWP\\Validation\\Tests\\Unit\\Rules\\RequiredTest' => 
  array (
    'type' => 'class',
    'classname' => 'RequiredTest',
    'isabstract' => false,
    'namespace' => 'StellarWP\\Validation\\Tests\\Unit\\Rules',
    'extends' => 'Give\\Vendors\\StellarWP\\Validation\\Tests\\Unit\\Rules\\RequiredTest',
    'implements' => 
    array (
    ),
  ),
  'StellarWP\\Validation\\Tests\\Unit\\Rules\\SizeTest' => 
  array (
    'type' => 'class',
    'classname' => 'SizeTest',
    'isabstract' => false,
    'namespace' => 'StellarWP\\Validation\\Tests\\Unit\\Rules',
    'extends' => 'Give\\Vendors\\StellarWP\\Validation\\Tests\\Unit\\Rules\\SizeTest',
    'implements' => 
    array (
    ),
  ),
  'StellarWP\\Validation\\Tests\\Unit\\Framework\\Validation\\ValidationRuleSetTest' => 
  array (
    'type' => 'class',
    'classname' => 'ValidationRuleSetTest',
    'isabstract' => false,
    'namespace' => 'StellarWP\\Validation\\Tests\\Unit\\Framework\\Validation',
    'extends' => 'Give\\Vendors\\StellarWP\\Validation\\Tests\\Unit\\Framework\\Validation\\ValidationRuleSetTest',
    'implements' => 
    array (
    ),
  ),
  'StellarWP\\Validation\\Tests\\Unit\\ValidatorTest' => 
  array (
    'type' => 'class',
    'classname' => 'ValidatorTest',
    'isabstract' => false,
    'namespace' => 'StellarWP\\Validation\\Tests\\Unit',
    'extends' => 'Give\\Vendors\\StellarWP\\Validation\\Tests\\Unit\\ValidatorTest',
    'implements' => 
    array (
    ),
  ),
  'StellarWP\\Validation\\Tests\\Unit\\MockSkipRule' => 
  array (
    'type' => 'class',
    'classname' => 'MockSkipRule',
    'isabstract' => false,
    'namespace' => 'StellarWP\\Validation\\Tests\\Unit',
    'extends' => 'Give\\Vendors\\StellarWP\\Validation\\Tests\\Unit\\MockSkipRule',
    'implements' => 
    array (
      0 => 'StellarWP\\Validation\\Contracts\\ValidationRule',
    ),
  ),
  'StellarWP\\Validation\\Tests\\Unit\\MockRequiredRule' => 
  array (
    'type' => 'class',
    'classname' => 'MockRequiredRule',
    'isabstract' => false,
    'namespace' => 'StellarWP\\Validation\\Tests\\Unit',
    'extends' => 'Give\\Vendors\\StellarWP\\Validation\\Tests\\Unit\\MockRequiredRule',
    'implements' => 
    array (
      0 => 'StellarWP\\Validation\\Contracts\\ValidationRule',
    ),
  ),
  'StellarWP\\Validation\\Tests\\Unit\\MockIntegerRule' => 
  array (
    'type' => 'class',
    'classname' => 'MockIntegerRule',
    'isabstract' => false,
    'namespace' => 'StellarWP\\Validation\\Tests\\Unit',
    'extends' => 'Give\\Vendors\\StellarWP\\Validation\\Tests\\Unit\\MockIntegerRule',
    'implements' => 
    array (
      0 => 'StellarWP\\Validation\\Contracts\\ValidationRule',
      1 => 'StellarWP\\Validation\\Contracts\\Sanitizer',
    ),
  ),
  'StellarWP\\Validation\\Tests\\Unit\\MockExcludeRule' => 
  array (
    'type' => 'class',
    'classname' => 'MockExcludeRule',
    'isabstract' => false,
    'namespace' => 'StellarWP\\Validation\\Tests\\Unit',
    'extends' => 'Give\\Vendors\\StellarWP\\Validation\\Tests\\Unit\\MockExcludeRule',
    'implements' => 
    array (
      0 => 'StellarWP\\Validation\\Contracts\\ValidationRule',
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\AcceptHeader' => 
  array (
    'type' => 'class',
    'classname' => 'AcceptHeader',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\AcceptHeader',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\AcceptHeaderItem' => 
  array (
    'type' => 'class',
    'classname' => 'AcceptHeaderItem',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\AcceptHeaderItem',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\BinaryFileResponse' => 
  array (
    'type' => 'class',
    'classname' => 'BinaryFileResponse',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\BinaryFileResponse',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\Cookie' => 
  array (
    'type' => 'class',
    'classname' => 'Cookie',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\Cookie',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\Exception\\BadRequestException' => 
  array (
    'type' => 'class',
    'classname' => 'BadRequestException',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation\\Exception',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\Exception\\BadRequestException',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\HttpFoundation\\Exception\\RequestExceptionInterface',
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException' => 
  array (
    'type' => 'class',
    'classname' => 'ConflictingHeadersException',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation\\Exception',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\HttpFoundation\\Exception\\RequestExceptionInterface',
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\Exception\\JsonException' => 
  array (
    'type' => 'class',
    'classname' => 'JsonException',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation\\Exception',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\HttpFoundation\\Exception\\RequestExceptionInterface',
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\Exception\\SessionNotFoundException' => 
  array (
    'type' => 'class',
    'classname' => 'SessionNotFoundException',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation\\Exception',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\Exception\\SessionNotFoundException',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\HttpFoundation\\Exception\\RequestExceptionInterface',
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException' => 
  array (
    'type' => 'class',
    'classname' => 'SuspiciousOperationException',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation\\Exception',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\HttpFoundation\\Exception\\RequestExceptionInterface',
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\ExpressionRequestMatcher' => 
  array (
    'type' => 'class',
    'classname' => 'ExpressionRequestMatcher',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\ExpressionRequestMatcher',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\File\\Exception\\AccessDeniedException' => 
  array (
    'type' => 'class',
    'classname' => 'AccessDeniedException',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation\\File\\Exception',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\File\\Exception\\AccessDeniedException',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\File\\Exception\\CannotWriteFileException' => 
  array (
    'type' => 'class',
    'classname' => 'CannotWriteFileException',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation\\File\\Exception',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\File\\Exception\\CannotWriteFileException',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\File\\Exception\\ExtensionFileException' => 
  array (
    'type' => 'class',
    'classname' => 'ExtensionFileException',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation\\File\\Exception',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\File\\Exception\\ExtensionFileException',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileException' => 
  array (
    'type' => 'class',
    'classname' => 'FileException',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation\\File\\Exception',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\File\\Exception\\FileException',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileNotFoundException' => 
  array (
    'type' => 'class',
    'classname' => 'FileNotFoundException',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation\\File\\Exception',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\File\\Exception\\FileNotFoundException',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\File\\Exception\\FormSizeFileException' => 
  array (
    'type' => 'class',
    'classname' => 'FormSizeFileException',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation\\File\\Exception',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\File\\Exception\\FormSizeFileException',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\File\\Exception\\IniSizeFileException' => 
  array (
    'type' => 'class',
    'classname' => 'IniSizeFileException',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation\\File\\Exception',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\File\\Exception\\IniSizeFileException',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\File\\Exception\\NoFileException' => 
  array (
    'type' => 'class',
    'classname' => 'NoFileException',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation\\File\\Exception',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\File\\Exception\\NoFileException',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\File\\Exception\\NoTmpDirFileException' => 
  array (
    'type' => 'class',
    'classname' => 'NoTmpDirFileException',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation\\File\\Exception',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\File\\Exception\\NoTmpDirFileException',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\File\\Exception\\PartialFileException' => 
  array (
    'type' => 'class',
    'classname' => 'PartialFileException',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation\\File\\Exception',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\File\\Exception\\PartialFileException',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\File\\Exception\\UnexpectedTypeException' => 
  array (
    'type' => 'class',
    'classname' => 'UnexpectedTypeException',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation\\File\\Exception',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\File\\Exception\\UnexpectedTypeException',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\File\\Exception\\UploadException' => 
  array (
    'type' => 'class',
    'classname' => 'UploadException',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation\\File\\Exception',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\File\\Exception\\UploadException',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\File\\File' => 
  array (
    'type' => 'class',
    'classname' => 'File',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation\\File',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\File\\File',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\File\\Stream' => 
  array (
    'type' => 'class',
    'classname' => 'Stream',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation\\File',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\File\\Stream',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\File\\UploadedFile' => 
  array (
    'type' => 'class',
    'classname' => 'UploadedFile',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation\\File',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\FileBag' => 
  array (
    'type' => 'class',
    'classname' => 'FileBag',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\FileBag',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\HeaderBag' => 
  array (
    'type' => 'class',
    'classname' => 'HeaderBag',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\HeaderBag',
    'implements' => 
    array (
      0 => 'IteratorAggregate',
      1 => 'Countable',
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\HeaderUtils' => 
  array (
    'type' => 'class',
    'classname' => 'HeaderUtils',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\HeaderUtils',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\InputBag' => 
  array (
    'type' => 'class',
    'classname' => 'InputBag',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\InputBag',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\IpUtils' => 
  array (
    'type' => 'class',
    'classname' => 'IpUtils',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\IpUtils',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\JsonResponse' => 
  array (
    'type' => 'class',
    'classname' => 'JsonResponse',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\JsonResponse',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\ParameterBag' => 
  array (
    'type' => 'class',
    'classname' => 'ParameterBag',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\ParameterBag',
    'implements' => 
    array (
      0 => 'IteratorAggregate',
      1 => 'Countable',
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\RateLimiter\\AbstractRequestRateLimiter' => 
  array (
    'type' => 'class',
    'classname' => 'AbstractRequestRateLimiter',
    'isabstract' => true,
    'namespace' => 'Symfony\\Component\\HttpFoundation\\RateLimiter',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\RateLimiter\\AbstractRequestRateLimiter',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\HttpFoundation\\RateLimiter\\RequestRateLimiterInterface',
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\RedirectResponse' => 
  array (
    'type' => 'class',
    'classname' => 'RedirectResponse',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\RedirectResponse',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\Request' => 
  array (
    'type' => 'class',
    'classname' => 'Request',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\Request',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\RequestMatcher' => 
  array (
    'type' => 'class',
    'classname' => 'RequestMatcher',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\RequestMatcher',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\HttpFoundation\\RequestMatcherInterface',
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\RequestStack' => 
  array (
    'type' => 'class',
    'classname' => 'RequestStack',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\RequestStack',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\Response' => 
  array (
    'type' => 'class',
    'classname' => 'Response',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\Response',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\ResponseHeaderBag' => 
  array (
    'type' => 'class',
    'classname' => 'ResponseHeaderBag',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\ResponseHeaderBag',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\ServerBag' => 
  array (
    'type' => 'class',
    'classname' => 'ServerBag',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\ServerBag',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\Session\\Attribute\\AttributeBag' => 
  array (
    'type' => 'class',
    'classname' => 'AttributeBag',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation\\Session\\Attribute',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\Session\\Attribute\\AttributeBag',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\HttpFoundation\\Session\\Attribute\\AttributeBagInterface',
      1 => 'IteratorAggregate',
      2 => 'Countable',
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\Session\\Attribute\\NamespacedAttributeBag' => 
  array (
    'type' => 'class',
    'classname' => 'NamespacedAttributeBag',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation\\Session\\Attribute',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\Session\\Attribute\\NamespacedAttributeBag',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\Session\\Flash\\AutoExpireFlashBag' => 
  array (
    'type' => 'class',
    'classname' => 'AutoExpireFlashBag',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation\\Session\\Flash',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\Session\\Flash\\AutoExpireFlashBag',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBagInterface',
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBag' => 
  array (
    'type' => 'class',
    'classname' => 'FlashBag',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation\\Session\\Flash',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBag',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBagInterface',
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\Session\\Session' => 
  array (
    'type' => 'class',
    'classname' => 'Session',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation\\Session',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\Session\\Session',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
      1 => 'IteratorAggregate',
      2 => 'Countable',
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\Session\\SessionBagProxy' => 
  array (
    'type' => 'class',
    'classname' => 'SessionBagProxy',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation\\Session',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\Session\\SessionBagProxy',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\HttpFoundation\\Session\\SessionBagInterface',
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\Session\\SessionFactory' => 
  array (
    'type' => 'class',
    'classname' => 'SessionFactory',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation\\Session',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\Session\\SessionFactory',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\HttpFoundation\\Session\\SessionFactoryInterface',
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\Session\\SessionUtils' => 
  array (
    'type' => 'class',
    'classname' => 'SessionUtils',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation\\Session',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\Session\\SessionUtils',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\AbstractSessionHandler' => 
  array (
    'type' => 'class',
    'classname' => 'AbstractSessionHandler',
    'isabstract' => true,
    'namespace' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\AbstractSessionHandler',
    'implements' => 
    array (
      0 => 'SessionHandlerInterface',
      1 => 'SessionUpdateTimestampHandlerInterface',
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\IdentityMarshaller' => 
  array (
    'type' => 'class',
    'classname' => 'IdentityMarshaller',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\IdentityMarshaller',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\Cache\\Marshaller\\MarshallerInterface',
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\MarshallingSessionHandler' => 
  array (
    'type' => 'class',
    'classname' => 'MarshallingSessionHandler',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\MarshallingSessionHandler',
    'implements' => 
    array (
      0 => 'SessionHandlerInterface',
      1 => 'SessionUpdateTimestampHandlerInterface',
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\MemcachedSessionHandler' => 
  array (
    'type' => 'class',
    'classname' => 'MemcachedSessionHandler',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\MemcachedSessionHandler',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\MigratingSessionHandler' => 
  array (
    'type' => 'class',
    'classname' => 'MigratingSessionHandler',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\MigratingSessionHandler',
    'implements' => 
    array (
      0 => 'SessionHandlerInterface',
      1 => 'SessionUpdateTimestampHandlerInterface',
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\MongoDbSessionHandler' => 
  array (
    'type' => 'class',
    'classname' => 'MongoDbSessionHandler',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\MongoDbSessionHandler',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\NativeFileSessionHandler' => 
  array (
    'type' => 'class',
    'classname' => 'NativeFileSessionHandler',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\NativeFileSessionHandler',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\NullSessionHandler' => 
  array (
    'type' => 'class',
    'classname' => 'NullSessionHandler',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\NullSessionHandler',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\PdoSessionHandler' => 
  array (
    'type' => 'class',
    'classname' => 'PdoSessionHandler',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\PdoSessionHandler',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\RedisSessionHandler' => 
  array (
    'type' => 'class',
    'classname' => 'RedisSessionHandler',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\RedisSessionHandler',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\SessionHandlerFactory' => 
  array (
    'type' => 'class',
    'classname' => 'SessionHandlerFactory',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\SessionHandlerFactory',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\StrictSessionHandler' => 
  array (
    'type' => 'class',
    'classname' => 'StrictSessionHandler',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\StrictSessionHandler',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MetadataBag' => 
  array (
    'type' => 'class',
    'classname' => 'MetadataBag',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\Session\\Storage\\MetadataBag',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\HttpFoundation\\Session\\SessionBagInterface',
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MockArraySessionStorage' => 
  array (
    'type' => 'class',
    'classname' => 'MockArraySessionStorage',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\Session\\Storage\\MockArraySessionStorage',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\SessionStorageInterface',
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MockFileSessionStorage' => 
  array (
    'type' => 'class',
    'classname' => 'MockFileSessionStorage',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\Session\\Storage\\MockFileSessionStorage',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MockFileSessionStorageFactory' => 
  array (
    'type' => 'class',
    'classname' => 'MockFileSessionStorageFactory',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\Session\\Storage\\MockFileSessionStorageFactory',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\SessionStorageFactoryInterface',
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\Session\\Storage\\NativeSessionStorage' => 
  array (
    'type' => 'class',
    'classname' => 'NativeSessionStorage',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\Session\\Storage\\NativeSessionStorage',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\SessionStorageInterface',
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\Session\\Storage\\NativeSessionStorageFactory' => 
  array (
    'type' => 'class',
    'classname' => 'NativeSessionStorageFactory',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\Session\\Storage\\NativeSessionStorageFactory',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\SessionStorageFactoryInterface',
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\Session\\Storage\\PhpBridgeSessionStorage' => 
  array (
    'type' => 'class',
    'classname' => 'PhpBridgeSessionStorage',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\Session\\Storage\\PhpBridgeSessionStorage',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\Session\\Storage\\PhpBridgeSessionStorageFactory' => 
  array (
    'type' => 'class',
    'classname' => 'PhpBridgeSessionStorageFactory',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\Session\\Storage\\PhpBridgeSessionStorageFactory',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\SessionStorageFactoryInterface',
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Proxy\\AbstractProxy' => 
  array (
    'type' => 'class',
    'classname' => 'AbstractProxy',
    'isabstract' => true,
    'namespace' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Proxy',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\Session\\Storage\\Proxy\\AbstractProxy',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Proxy\\SessionHandlerProxy' => 
  array (
    'type' => 'class',
    'classname' => 'SessionHandlerProxy',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Proxy',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\Session\\Storage\\Proxy\\SessionHandlerProxy',
    'implements' => 
    array (
      0 => 'SessionHandlerInterface',
      1 => 'SessionUpdateTimestampHandlerInterface',
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\Session\\Storage\\ServiceSessionFactory' => 
  array (
    'type' => 'class',
    'classname' => 'ServiceSessionFactory',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\Session\\Storage\\ServiceSessionFactory',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\SessionStorageFactoryInterface',
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\StreamedResponse' => 
  array (
    'type' => 'class',
    'classname' => 'StreamedResponse',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\StreamedResponse',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\Test\\Constraint\\RequestAttributeValueSame' => 
  array (
    'type' => 'class',
    'classname' => 'RequestAttributeValueSame',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation\\Test\\Constraint',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\Test\\Constraint\\RequestAttributeValueSame',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\Test\\Constraint\\ResponseCookieValueSame' => 
  array (
    'type' => 'class',
    'classname' => 'ResponseCookieValueSame',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation\\Test\\Constraint',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\Test\\Constraint\\ResponseCookieValueSame',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\Test\\Constraint\\ResponseFormatSame' => 
  array (
    'type' => 'class',
    'classname' => 'ResponseFormatSame',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation\\Test\\Constraint',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\Test\\Constraint\\ResponseFormatSame',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\Test\\Constraint\\ResponseHasCookie' => 
  array (
    'type' => 'class',
    'classname' => 'ResponseHasCookie',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation\\Test\\Constraint',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\Test\\Constraint\\ResponseHasCookie',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\Test\\Constraint\\ResponseHasHeader' => 
  array (
    'type' => 'class',
    'classname' => 'ResponseHasHeader',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation\\Test\\Constraint',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\Test\\Constraint\\ResponseHasHeader',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\Test\\Constraint\\ResponseHeaderSame' => 
  array (
    'type' => 'class',
    'classname' => 'ResponseHeaderSame',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation\\Test\\Constraint',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\Test\\Constraint\\ResponseHeaderSame',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\Test\\Constraint\\ResponseIsRedirected' => 
  array (
    'type' => 'class',
    'classname' => 'ResponseIsRedirected',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation\\Test\\Constraint',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\Test\\Constraint\\ResponseIsRedirected',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\Test\\Constraint\\ResponseIsSuccessful' => 
  array (
    'type' => 'class',
    'classname' => 'ResponseIsSuccessful',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation\\Test\\Constraint',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\Test\\Constraint\\ResponseIsSuccessful',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\Test\\Constraint\\ResponseIsUnprocessable' => 
  array (
    'type' => 'class',
    'classname' => 'ResponseIsUnprocessable',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation\\Test\\Constraint',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\Test\\Constraint\\ResponseIsUnprocessable',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\Test\\Constraint\\ResponseStatusCodeSame' => 
  array (
    'type' => 'class',
    'classname' => 'ResponseStatusCodeSame',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation\\Test\\Constraint',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\Test\\Constraint\\ResponseStatusCodeSame',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\UrlHelper' => 
  array (
    'type' => 'class',
    'classname' => 'UrlHelper',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\HttpFoundation',
    'extends' => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\UrlHelper',
    'implements' => 
    array (
    ),
  ),
  'Nyholm\\Psr7\\MessageTrait' => 
  array (
    'type' => 'trait',
    'traitname' => 'MessageTrait',
    'namespace' => 'Nyholm\\Psr7',
    'use' => 
    array (
      0 => 'Give\\Vendors\\Nyholm\\Psr7\\MessageTrait',
    ),
  ),
  'Nyholm\\Psr7\\RequestTrait' => 
  array (
    'type' => 'trait',
    'traitname' => 'RequestTrait',
    'namespace' => 'Nyholm\\Psr7',
    'use' => 
    array (
      0 => 'Give\\Vendors\\Nyholm\\Psr7\\RequestTrait',
    ),
  ),
  'Nyholm\\Psr7\\StreamTrait' => 
  array (
    'type' => 'trait',
    'traitname' => 'StreamTrait',
    'namespace' => 'Nyholm\\Psr7',
    'use' => 
    array (
      0 => 'Give\\Vendors\\Nyholm\\Psr7\\StreamTrait',
    ),
  ),
  'StellarWP\\AdminNotices\\Traits\\HasNamespace' => 
  array (
    'type' => 'trait',
    'traitname' => 'HasNamespace',
    'namespace' => 'StellarWP\\AdminNotices\\Traits',
    'use' => 
    array (
      0 => 'Give\\Vendors\\StellarWP\\AdminNotices\\Traits\\HasNamespace',
    ),
  ),
  'StellarWP\\FieldConditions\\Concerns\\HasConditions' => 
  array (
    'type' => 'trait',
    'traitname' => 'HasConditions',
    'namespace' => 'StellarWP\\FieldConditions\\Concerns',
    'use' => 
    array (
      0 => 'Give\\Vendors\\StellarWP\\FieldConditions\\Concerns\\HasConditions',
    ),
  ),
  'StellarWP\\FieldConditions\\Concerns\\HasLogicalOperator' => 
  array (
    'type' => 'trait',
    'traitname' => 'HasLogicalOperator',
    'namespace' => 'StellarWP\\FieldConditions\\Concerns',
    'use' => 
    array (
      0 => 'Give\\Vendors\\StellarWP\\FieldConditions\\Concerns\\HasLogicalOperator',
    ),
  ),
  'LiquidWeb\\Harbor\\Traits\\With_Debugging' => 
  array (
    'type' => 'trait',
    'traitname' => 'With_Debugging',
    'namespace' => 'LiquidWeb\\Harbor\\Traits',
    'use' => 
    array (
      0 => 'Give\\Vendors\\LiquidWeb\\Harbor\\Traits\\With_Debugging',
    ),
  ),
  'LiquidWeb\\Harbor\\Traits\\With_Error_Throttle' => 
  array (
    'type' => 'trait',
    'traitname' => 'With_Error_Throttle',
    'namespace' => 'LiquidWeb\\Harbor\\Traits',
    'use' => 
    array (
      0 => 'Give\\Vendors\\LiquidWeb\\Harbor\\Traits\\With_Error_Throttle',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Concerns\\InteractsWithDateTime' => 
  array (
    'type' => 'trait',
    'traitname' => 'InteractsWithDateTime',
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Concerns',
    'use' => 
    array (
      0 => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Concerns\\InteractsWithDateTime',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Resources\\Concerns\\RebindsAuthState' => 
  array (
    'type' => 'trait',
    'traitname' => 'RebindsAuthState',
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Resources\\Concerns',
    'use' => 
    array (
      0 => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Resources\\Concerns\\RebindsAuthState',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Resources\\Concerns\\RebindsRequestHeaderCollection' => 
  array (
    'type' => 'trait',
    'traitname' => 'RebindsRequestHeaderCollection',
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Resources\\Concerns',
    'use' => 
    array (
      0 => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Resources\\Concerns\\RebindsRequestHeaderCollection',
    ),
  ),
  'StellarWP\\Validation\\Concerns\\HasValidationRules' => 
  array (
    'type' => 'trait',
    'traitname' => 'HasValidationRules',
    'namespace' => 'StellarWP\\Validation\\Concerns',
    'use' => 
    array (
      0 => 'Give\\Vendors\\StellarWP\\Validation\\Concerns\\HasValidationRules',
    ),
  ),
  'Psr\\Http\\Client\\ClientExceptionInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ClientExceptionInterface',
    'namespace' => 'Psr\\Http\\Client',
    'extends' => 
    array (
      0 => 'Give\\Vendors\\Psr\\Http\\Client\\ClientExceptionInterface',
    ),
  ),
  'Psr\\Http\\Client\\ClientInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ClientInterface',
    'namespace' => 'Psr\\Http\\Client',
    'extends' => 
    array (
      0 => 'Give\\Vendors\\Psr\\Http\\Client\\ClientInterface',
    ),
  ),
  'Psr\\Http\\Client\\NetworkExceptionInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'NetworkExceptionInterface',
    'namespace' => 'Psr\\Http\\Client',
    'extends' => 
    array (
      0 => 'Give\\Vendors\\Psr\\Http\\Client\\NetworkExceptionInterface',
    ),
  ),
  'Psr\\Http\\Client\\RequestExceptionInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'RequestExceptionInterface',
    'namespace' => 'Psr\\Http\\Client',
    'extends' => 
    array (
      0 => 'Give\\Vendors\\Psr\\Http\\Client\\RequestExceptionInterface',
    ),
  ),
  'Psr\\Http\\Message\\RequestFactoryInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'RequestFactoryInterface',
    'namespace' => 'Psr\\Http\\Message',
    'extends' => 
    array (
      0 => 'Give\\Vendors\\Psr\\Http\\Message\\RequestFactoryInterface',
    ),
  ),
  'Psr\\Http\\Message\\ResponseFactoryInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ResponseFactoryInterface',
    'namespace' => 'Psr\\Http\\Message',
    'extends' => 
    array (
      0 => 'Give\\Vendors\\Psr\\Http\\Message\\ResponseFactoryInterface',
    ),
  ),
  'Psr\\Http\\Message\\ServerRequestFactoryInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ServerRequestFactoryInterface',
    'namespace' => 'Psr\\Http\\Message',
    'extends' => 
    array (
      0 => 'Give\\Vendors\\Psr\\Http\\Message\\ServerRequestFactoryInterface',
    ),
  ),
  'Psr\\Http\\Message\\StreamFactoryInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'StreamFactoryInterface',
    'namespace' => 'Psr\\Http\\Message',
    'extends' => 
    array (
      0 => 'Give\\Vendors\\Psr\\Http\\Message\\StreamFactoryInterface',
    ),
  ),
  'Psr\\Http\\Message\\UploadedFileFactoryInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'UploadedFileFactoryInterface',
    'namespace' => 'Psr\\Http\\Message',
    'extends' => 
    array (
      0 => 'Give\\Vendors\\Psr\\Http\\Message\\UploadedFileFactoryInterface',
    ),
  ),
  'Psr\\Http\\Message\\UriFactoryInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'UriFactoryInterface',
    'namespace' => 'Psr\\Http\\Message',
    'extends' => 
    array (
      0 => 'Give\\Vendors\\Psr\\Http\\Message\\UriFactoryInterface',
    ),
  ),
  'Psr\\Http\\Message\\MessageInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MessageInterface',
    'namespace' => 'Psr\\Http\\Message',
    'extends' => 
    array (
      0 => 'Give\\Vendors\\Psr\\Http\\Message\\MessageInterface',
    ),
  ),
  'Psr\\Http\\Message\\RequestInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'RequestInterface',
    'namespace' => 'Psr\\Http\\Message',
    'extends' => 
    array (
      0 => 'Give\\Vendors\\Psr\\Http\\Message\\RequestInterface',
    ),
  ),
  'Psr\\Http\\Message\\ResponseInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ResponseInterface',
    'namespace' => 'Psr\\Http\\Message',
    'extends' => 
    array (
      0 => 'Give\\Vendors\\Psr\\Http\\Message\\ResponseInterface',
    ),
  ),
  'Psr\\Http\\Message\\ServerRequestInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ServerRequestInterface',
    'namespace' => 'Psr\\Http\\Message',
    'extends' => 
    array (
      0 => 'Give\\Vendors\\Psr\\Http\\Message\\ServerRequestInterface',
    ),
  ),
  'Psr\\Http\\Message\\StreamInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'StreamInterface',
    'namespace' => 'Psr\\Http\\Message',
    'extends' => 
    array (
      0 => 'Give\\Vendors\\Psr\\Http\\Message\\StreamInterface',
    ),
  ),
  'Psr\\Http\\Message\\UploadedFileInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'UploadedFileInterface',
    'namespace' => 'Psr\\Http\\Message',
    'extends' => 
    array (
      0 => 'Give\\Vendors\\Psr\\Http\\Message\\UploadedFileInterface',
    ),
  ),
  'Psr\\Http\\Message\\UriInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'UriInterface',
    'namespace' => 'Psr\\Http\\Message',
    'extends' => 
    array (
      0 => 'Give\\Vendors\\Psr\\Http\\Message\\UriInterface',
    ),
  ),
  'StellarWP\\AdminNotices\\Contracts\\NotificationsRegistrarInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'NotificationsRegistrarInterface',
    'namespace' => 'StellarWP\\AdminNotices\\Contracts',
    'extends' => 
    array (
      0 => 'Give\\Vendors\\StellarWP\\AdminNotices\\Contracts\\NotificationsRegistrarInterface',
    ),
  ),
  'StellarWP\\ContainerContract\\ContainerInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ContainerInterface',
    'namespace' => 'StellarWP\\ContainerContract',
    'extends' => 
    array (
      0 => 'Give\\Vendors\\StellarWP\\ContainerContract\\ContainerInterface',
    ),
  ),
  'StellarWP\\FieldConditions\\Contracts\\Condition' => 
  array (
    'type' => 'interface',
    'interfacename' => 'Condition',
    'namespace' => 'StellarWP\\FieldConditions\\Contracts',
    'extends' => 
    array (
      0 => 'Give\\Vendors\\StellarWP\\FieldConditions\\Contracts\\Condition',
    ),
  ),
  'StellarWP\\FieldConditions\\Contracts\\ConditionSet' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ConditionSet',
    'namespace' => 'StellarWP\\FieldConditions\\Contracts',
    'extends' => 
    array (
      0 => 'Give\\Vendors\\StellarWP\\FieldConditions\\Contracts\\ConditionSet',
    ),
  ),
  'LiquidWeb\\Harbor\\Contracts\\Provider_Interface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'Provider_Interface',
    'namespace' => 'LiquidWeb\\Harbor\\Contracts',
    'extends' => 
    array (
      0 => 'Give\\Vendors\\LiquidWeb\\Harbor\\Contracts\\Provider_Interface',
    ),
  ),
  'LiquidWeb\\Harbor\\Features\\Contracts\\Installable' => 
  array (
    'type' => 'interface',
    'interfacename' => 'Installable',
    'namespace' => 'LiquidWeb\\Harbor\\Features\\Contracts',
    'extends' => 
    array (
      0 => 'Give\\Vendors\\LiquidWeb\\Harbor\\Features\\Contracts\\Installable',
    ),
  ),
  'LiquidWeb\\Harbor\\Features\\Contracts\\Strategy' => 
  array (
    'type' => 'interface',
    'interfacename' => 'Strategy',
    'namespace' => 'LiquidWeb\\Harbor\\Features\\Contracts',
    'extends' => 
    array (
      0 => 'Give\\Vendors\\LiquidWeb\\Harbor\\Features\\Contracts\\Strategy',
    ),
  ),
  'LiquidWeb\\Harbor\\Portal\\Clients\\Portal_Client' => 
  array (
    'type' => 'interface',
    'interfacename' => 'Portal_Client',
    'namespace' => 'LiquidWeb\\Harbor\\Portal\\Clients',
    'extends' => 
    array (
      0 => 'Give\\Vendors\\LiquidWeb\\Harbor\\Portal\\Clients\\Portal_Client',
    ),
  ),
  'LiquidWeb\\Harbor\\Portal\\Contracts\\Download_Url_Builder' => 
  array (
    'type' => 'interface',
    'interfacename' => 'Download_Url_Builder',
    'namespace' => 'LiquidWeb\\Harbor\\Portal\\Contracts',
    'extends' => 
    array (
      0 => 'Give\\Vendors\\LiquidWeb\\Harbor\\Portal\\Contracts\\Download_Url_Builder',
    ),
  ),
  'LiquidWeb\\Harbor\\View\\Contracts\\View' => 
  array (
    'type' => 'interface',
    'interfacename' => 'View',
    'namespace' => 'LiquidWeb\\Harbor\\View\\Contracts',
    'extends' => 
    array (
      0 => 'Give\\Vendors\\LiquidWeb\\Harbor\\View\\Contracts\\View',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Contracts\\LicensingClientInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'LicensingClientInterface',
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Contracts',
    'extends' => 
    array (
      0 => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Contracts\\LicensingClientInterface',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Exceptions\\Contracts\\ApiErrorExceptionInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ApiErrorExceptionInterface',
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Exceptions\\Contracts',
    'extends' => 
    array (
      0 => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Exceptions\\Contracts\\ApiErrorExceptionInterface',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Exceptions\\Contracts\\ResponseExceptionInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ResponseExceptionInterface',
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Exceptions\\Contracts',
    'extends' => 
    array (
      0 => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Exceptions\\Contracts\\ResponseExceptionInterface',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Resources\\Contracts\\CreditsLedgerResourceInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'CreditsLedgerResourceInterface',
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Resources\\Contracts',
    'extends' => 
    array (
      0 => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Resources\\Contracts\\CreditsLedgerResourceInterface',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Resources\\Contracts\\CreditsPoolsResourceInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'CreditsPoolsResourceInterface',
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Resources\\Contracts',
    'extends' => 
    array (
      0 => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Resources\\Contracts\\CreditsPoolsResourceInterface',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Resources\\Contracts\\CreditsQuotasResourceInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'CreditsQuotasResourceInterface',
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Resources\\Contracts',
    'extends' => 
    array (
      0 => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Resources\\Contracts\\CreditsQuotasResourceInterface',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Resources\\Contracts\\CreditsResourceInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'CreditsResourceInterface',
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Resources\\Contracts',
    'extends' => 
    array (
      0 => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Resources\\Contracts\\CreditsResourceInterface',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Resources\\Contracts\\EntitlementsResourceInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'EntitlementsResourceInterface',
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Resources\\Contracts',
    'extends' => 
    array (
      0 => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Resources\\Contracts\\EntitlementsResourceInterface',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Resources\\Contracts\\LicensesResourceInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'LicensesResourceInterface',
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Resources\\Contracts',
    'extends' => 
    array (
      0 => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Resources\\Contracts\\LicensesResourceInterface',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Resources\\Contracts\\ProductsResourceInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ProductsResourceInterface',
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Resources\\Contracts',
    'extends' => 
    array (
      0 => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Resources\\Contracts\\ProductsResourceInterface',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Resources\\Contracts\\TokensResourceInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'TokensResourceInterface',
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Resources\\Contracts',
    'extends' => 
    array (
      0 => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Resources\\Contracts\\TokensResourceInterface',
    ),
  ),
  'LiquidWeb\\LicensingApiClient\\Responses\\Contracts\\Response' => 
  array (
    'type' => 'interface',
    'interfacename' => 'Response',
    'namespace' => 'LiquidWeb\\LicensingApiClient\\Responses\\Contracts',
    'extends' => 
    array (
      0 => 'Give\\Vendors\\LiquidWeb\\LicensingApiClient\\Responses\\Contracts\\Response',
    ),
  ),
  'StellarWP\\Validation\\Contracts\\Sanitizer' => 
  array (
    'type' => 'interface',
    'interfacename' => 'Sanitizer',
    'namespace' => 'StellarWP\\Validation\\Contracts',
    'extends' => 
    array (
      0 => 'Give\\Vendors\\StellarWP\\Validation\\Contracts\\Sanitizer',
    ),
  ),
  'StellarWP\\Validation\\Contracts\\ValidatesOnFrontEnd' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ValidatesOnFrontEnd',
    'namespace' => 'StellarWP\\Validation\\Contracts',
    'extends' => 
    array (
      0 => 'Give\\Vendors\\StellarWP\\Validation\\Contracts\\ValidatesOnFrontEnd',
    ),
  ),
  'StellarWP\\Validation\\Contracts\\ValidationRule' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ValidationRule',
    'namespace' => 'StellarWP\\Validation\\Contracts',
    'extends' => 
    array (
      0 => 'Give\\Vendors\\StellarWP\\Validation\\Contracts\\ValidationRule',
    ),
  ),
  'StellarWP\\Validation\\Exceptions\\Contracts\\ValidationExceptionInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ValidationExceptionInterface',
    'namespace' => 'StellarWP\\Validation\\Exceptions\\Contracts',
    'extends' => 
    array (
      0 => 'Give\\Vendors\\StellarWP\\Validation\\Exceptions\\Contracts\\ValidationExceptionInterface',
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\Exception\\RequestExceptionInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'RequestExceptionInterface',
    'namespace' => 'Symfony\\Component\\HttpFoundation\\Exception',
    'extends' => 
    array (
      0 => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\Exception\\RequestExceptionInterface',
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\RateLimiter\\RequestRateLimiterInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'RequestRateLimiterInterface',
    'namespace' => 'Symfony\\Component\\HttpFoundation\\RateLimiter',
    'extends' => 
    array (
      0 => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\RateLimiter\\RequestRateLimiterInterface',
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\RequestMatcherInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'RequestMatcherInterface',
    'namespace' => 'Symfony\\Component\\HttpFoundation',
    'extends' => 
    array (
      0 => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\RequestMatcherInterface',
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\Session\\Attribute\\AttributeBagInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'AttributeBagInterface',
    'namespace' => 'Symfony\\Component\\HttpFoundation\\Session\\Attribute',
    'extends' => 
    array (
      0 => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\Session\\Attribute\\AttributeBagInterface',
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBagInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'FlashBagInterface',
    'namespace' => 'Symfony\\Component\\HttpFoundation\\Session\\Flash',
    'extends' => 
    array (
      0 => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBagInterface',
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\Session\\SessionBagInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'SessionBagInterface',
    'namespace' => 'Symfony\\Component\\HttpFoundation\\Session',
    'extends' => 
    array (
      0 => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\Session\\SessionBagInterface',
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\Session\\SessionFactoryInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'SessionFactoryInterface',
    'namespace' => 'Symfony\\Component\\HttpFoundation\\Session',
    'extends' => 
    array (
      0 => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\Session\\SessionFactoryInterface',
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'SessionInterface',
    'namespace' => 'Symfony\\Component\\HttpFoundation\\Session',
    'extends' => 
    array (
      0 => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\Session\\Storage\\SessionStorageFactoryInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'SessionStorageFactoryInterface',
    'namespace' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage',
    'extends' => 
    array (
      0 => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\Session\\Storage\\SessionStorageFactoryInterface',
    ),
  ),
  'Symfony\\Component\\HttpFoundation\\Session\\Storage\\SessionStorageInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'SessionStorageInterface',
    'namespace' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage',
    'extends' => 
    array (
      0 => 'Give\\Vendors\\Symfony\\Component\\HttpFoundation\\Session\\Storage\\SessionStorageInterface',
    ),
  ),
);

        public function __construct()
        {
            $this->includeFilePath = __DIR__ . '/autoload_alias.php';
        }

        /**
         * @param string $class
         */
        public function autoload($class): void
        {
            if (!isset($this->autoloadAliases[$class])) {
                return;
            }
            switch ($this->autoloadAliases[$class]['type']) {
                case 'class':
                        $this->load(
                            $this->classTemplate(
                                $this->autoloadAliases[$class]
                            )
                        );
                    break;
                case 'interface':
                    $this->load(
                        $this->interfaceTemplate(
                            $this->autoloadAliases[$class]
                        )
                    );
                    break;
                case 'trait':
                    $this->load(
                        $this->traitTemplate(
                            $this->autoloadAliases[$class]
                        )
                    );
                    break;
                case 'enum':
                    // Enums are final so cannot be aliased with an `extends` shim like classes are; `class_alias()`
                    // makes the original name a true alias of the renamed enum, preserving case identity (`===`),
                    // `match` arms, `::cases()`, `::from()` and `instanceof` the enum itself. Unlike the class shim,
                    // the alias does not implement the enum's original interface names, so `instanceof` against an
                    // original interface name is false. Enums require PHP 8.1, but this only executes when an enum
                    // is autoloaded by its original name, i.e. on a runtime already using enums.
                    \class_alias(
                        $this->autoloadAliases[$class]['concrete'],
                        $class
                    );
                    break;
                default:
                    // Never.
                    break;
            }
        }

        private function load(string $includeFile): void
        {
            file_put_contents($this->includeFilePath, $includeFile);
            include $this->includeFilePath;
            file_exists($this->includeFilePath) && unlink($this->includeFilePath);
        }

        /**
         * @param ClassAliasArray $class
         */
        private function classTemplate(array $class): string
        {
            $abstract = $class['isabstract'] ? 'abstract ' : '';
            $classname = $class['classname'];
            if (isset($class['namespace'])) {
                $namespace = "namespace {$class['namespace']};";
                $extends = '\\' . $class['extends'];
                $implements = empty($class['implements']) ? ''
                : ' implements \\' . implode(', \\', $class['implements']);
            } else {
                $namespace = '';
                $extends = $class['extends'];
                $implements = !empty($class['implements']) ? ''
                : ' implements ' . implode(', ', $class['implements']);
            }
            return <<<EOD
                <?php
                $namespace
                $abstract class $classname extends $extends $implements {}
                EOD;
        }

        /**
         * @param InterfaceAliasArray $interface
         */
        private function interfaceTemplate(array $interface): string
        {
            $interfacename = $interface['interfacename'];
            $namespace = isset($interface['namespace'])
            ? "namespace {$interface['namespace']};" : '';
            $extends = isset($interface['namespace'])
            ? '\\' . implode('\\ ,', $interface['extends'])
            : implode(', ', $interface['extends']);
            return <<<EOD
                <?php
                $namespace
                interface $interfacename extends $extends {}
                EOD;
        }

        /**
         * @param TraitAliasArray $trait
         */
        private function traitTemplate(array $trait): string
        {
            $traitname = $trait['traitname'];
            $namespace = isset($trait['namespace'])
            ? "namespace {$trait['namespace']};" : '';
            $uses = isset($trait['namespace'])
            ? '\\' . implode(';' . PHP_EOL . '    use \\', $trait['use'])
            : implode(';' . PHP_EOL . '    use ', $trait['use']);
            return <<<EOD
                <?php
                $namespace
                trait $traitname { 
                    use $uses; 
                }
                EOD;
        }
    }

    spl_autoload_register([ new AliasAutoloader(), 'autoload' ]);
}
