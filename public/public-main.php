<?php

// Block direct access to file
defined( 'ABSPATH' ) or die( 'Not Authorized!' );

class public_main {

    public function __construct() {
     add_shortcode( 'cost_estimate', array($this,'shortcode') );
    }

/**
     * Enqueue the main Plugin admin scripts and styles
     * @method frontend shortcode
     */
function shortcode( $atts ){
   	
    wp_enqueue_style('styles', plugin_dir_url(__FILE__) . '/assets/css/styles.css', array(), '1.0.10');
  wp_enqueue_script('scripts',  plugin_dir_url(__FILE__) .'/assets/js/scripts.js', array('jquery'), '1.0.31', false);
	  wp_localize_script('scripts', 'en_public_data', array(
	  //Development>Wesite>CMS>Wordpress  
      'minHoursWebsiteCmsWordpress' => get_option('min_hours_website_cms_wordpress'),
      'perPageHoursWebsiteCmsWordpress' => get_option('per_page_hours_website_cms_wordpress'),
      'perProductHoursWebsiteCmsWordpress'=> get_option( 'per_product_hours_website_cms_wordpress'),
      'perHourRateWebsiteCmsWordpress'=> get_option( 'per_hour_rate_website_cms_wordpress'),
       //Development>Wesite>CMS>Shopify	
      'minHoursWebsiteCmsShopify' => get_option('min_hours_website_cms_shopify'),
      'perPageHoursWebsiteCmsShopify' => get_option('per_page_hours_website_cms_shopify'),
      'perProductHoursWebsiteCmsShopify'=> get_option( 'per_product_hours_website_cms_shopify'),
      'perHourRateWebsiteCmsShopify'=> get_option( 'per_hour_rate_website_cms_shopify'),
       //Development>Wesite>CMS>Wix
      'minHoursWebsiteCmsWix' => get_option('min_hours_website_cms_wix'),
      'perPageHoursWebsiteCmsWix' => get_option('per_page_hours_website_cms_wix'),
      'perProductHoursWebsiteCmsWix'=> get_option( 'per_product_hours_website_cms_wix'),
      'perHourRateWebsiteCmsWix'=> get_option( 'per_hour_rate_website_cms_wix'),
	   //Development>Wesite>CMS>Joomla
	   'minHoursWebsiteCmsJoomla' => get_option('min_hours_website_cms_joomla'),
      'perPageHoursWebsiteCmsJoomla' => get_option('per_page_hours_website_cms_joomla'),
      'perProductHoursWebsiteCmsJoomla'=> get_option( 'per_product_hours_website_cms_joomla'),
      'perHourRateWebsiteCmsJoomla'=> get_option( 'per_hour_rate_website_cms_joomla'),
	   //Development>Wesite>CMS>Magento
	  'minHoursWebsiteCmsMagento' => get_option('min_hours_website_cms_magento'),
      'perPageHoursWebsiteCmsMagento' => get_option('per_page_hours_website_cms_magento'),
      'perProductHoursWebsiteCmsMagento'=> get_option( 'per_product_hours_website_cms_magento'),
      'perHourRateWebsiteCmsMagento'=> get_option( 'per_hour_rate_website_cms_magento'),
       //Development>Wesite>CMS>Drupal
      'minHoursWebsiteCmsDrupal' => get_option('min_hours_website_cms_drupal'),
      'perPageHoursWebsiteCmsDrupal' => get_option('per_page_hours_website_cms_drupal'),
      'perProductHoursWebsiteCmsDrupal'=> get_option( 'per_product_hours_website_cms_drupal'),
      'perHourRateWebsiteCmsDrupal'=> get_option( 'per_hour_rate_website_cms_drupal'), 
	  //Development>Wesite>Custom Development>Front-end Development>HTML / CSS / Bootstrap
	  'minHoursWebsiteCustomHTMLCSSBootstrap' => get_option('min_hours_website_custom_htmlCssBootstrap'),
      'perPageHoursWebsiteCustomHTMLCSSBootstrap' => get_option('per_page_hours_website_custom_htmlCssBootstrap'),
      'perProductHoursWebsiteCustomHTMLCSSBootstrap'=> get_option( 'per_product_hours_website_custom_htmlCssBootstrap'),
      'perHourRateWebsiteCustomHTMLCSSBootstrap'=> get_option( 'per_hour_rate_website_custom_htmlCssBootstrap'),	  
	  //Development>Wesite>Custom Development>Front-end Development>React Js
	  'minHoursWebsiteCustomReactJs' => get_option('min_hours_website_custom_reactjs'),
      'perPageHoursWebsiteCustomReactJs' => get_option('per_page_hours_website_custom_reactjs'),
      'perProductHoursWebsiteCustomReactJs'=> get_option( 'per_product_hours_website_custom_reactjs'),
      'perHourRateWebsiteCustomReactJs'=> get_option( 'per_hour_rate_website_custom_reactjs'),
	   //Development>Wesite>Custom Development>Front-end Development>Angular Js
	  'minHoursWebsiteCustomAngularJs' => get_option('min_hours_website_custom_angularjs'),
      'perPageHoursWebsiteCustomAngularJs' => get_option('per_page_hours_website_custom_angularjs'),
      'perProductHoursWebsiteCustomAngularJs'=> get_option( 'per_product_hours_website_custom_angularjs'),
      'perHourRateWebsiteCustomAngularJs'=> get_option( 'per_hour_rate_website_custom_angularjs'),
	  //Development>Wesite>Custom Development>Front-end Development>Vue Js
	  'minHoursWebsiteCustomVueJs' => get_option('min_hours_website_custom_vuejs'),
      'perPageHoursWebsiteCustomVueJs' => get_option('per_page_hours_website_custom_vuejs'),
      'perProductHoursWebsiteCustomVueJs'=> get_option( 'per_product_hours_website_custom_vuejs'),
      'perHourRateWebsiteCustomVueJs'=> get_option( 'per_hour_rate_website_custom_vuejs'),
	  //Development>Wesite>Custom Development>Back-end Development>Python
	  'minHoursWebsiteCustomPython' => get_option('min_hours_website_custom_python'),
      'perApisHoursWebsiteCustomPython' => get_option('per_api_hours_website_custom_python'),
      'perHourRateWebsiteCustomPython'=> get_option( 'per_hour_rate_website_custom_python'),
       //Development>Wesite>Custom Development>Back-end Development>Node JS
      'minHoursWebsiteCustomNodeJs' => get_option('min_hours_website_custom_nodejs'),
      'perApiHoursWebsiteCustomNodeJs' => get_option('per_api_hours_website_custom_nodejs'),
      'perHourRateWebsiteCustomNodeJs'=> get_option( 'per_hour_rate_website_custom_nodejs'),
	  //Development>Wesite>Custom Development>Back-end Development>php
	  'minHoursWebsiteCustomPhp' => get_option('min_hours_website_custom_php'),
      'perApiHoursWebsiteCustomPhp' => get_option('per_api_hours_website_custom_php'),
      'perHourRateWebsiteCustomPhp'=> get_option( 'per_hour_rate_website_custom_php'),
	  //Development>Wesite>Custom Development>Back-end Development>Ruby
	  'minHoursWebsiteCustomRuby' => get_option('min_hours_website_custom_ruby'),
      'perApiHoursWebsiteCustomRuby' => get_option('per_api_hours_website_custom_ruby'),
      'perHourRateWebsiteCustomRuby'=> get_option( 'per_hour_rate_website_custom_ruby'),
	  //Development>Wesite>Custom Development>Back-end Development>C# Sharp
	  'minHoursWebsiteCustomCSharp' => get_option('min_hours_website_custom_csharp'),
      'perApiHoursWebsiteCustomCSharp' => get_option('per_api_hours_website_custom_csharp'),
      'perHourRateWebsiteCustomCSharp'=> get_option( 'per_hour_rate_website_custom_csharp'),
	   //Development>Wesite>Custom Development>Back-end Development>Java
	  'minHoursWebsiteCustomJava' => get_option('min_hours_website_custom_java'),
      'perApiHoursWebsiteCustomJava' => get_option('per_api_hours_website_custom_java'),
      'perHourRateWebsiteCustomJava'=> get_option( 'per_hour_rate_website_custom_java'),
	  //Development>Wesite>Maintenance>Bug Fixing and Security Updates
	  'minHoursWebsiteMaintenanceBugFix' => get_option('min_hours_website_maintenance_bugfix'),
      'perFixHoursWebsiteMaintenanceBugFix' => get_option('per_fix_hours_website_maintenance_bugfix'),
      'perHourRateWebsiteMaintenanceBugFix'=> get_option( 'per_hour_rate_website_maintenance_bugfix'),	
	  //Development>Wesite>Maintenance> Migration / Backup
	  'minHoursWebsiteMaintenanceBackup' => get_option('min_hours_website_maintenance_backup'),
      'perSiteHoursWebsiteMaintenanceBackup' => get_option('per_site_hours_website_maintenance_backup'),
      'perHourRateWebsiteMaintenanceBackup'=> get_option( 'per_hour_rate_website_maintenance_backup'),
	  //Development>Wesite>Maintenance> Additional Feature
	  'minHoursWebsiteMaintenanceFeature' => get_option('min_hours_website_maintenance_feature'),
      'perFeatureHoursWebsiteMaintenanceFeature' => get_option('per_feature_hours_website_maintenance_feature'),
      'perHourRateWebsiteMaintenanceFeature'=> get_option( 'per_hour_rate_website_maintenance_feature'),
	   //Development>Mobile>Android Apps>Java
	  'minHoursMobileAndroidJava' => get_option('min_hours_mobile_android_java'),
      'perScreenHoursMobileAndroidJava' => get_option('per_screen_hours_mobile_android_java'),
      'adsIntegrationHoursMobileAndroidJava'=> get_option( 'ads_integration_hours_mobile_android_java'),
	  'inAppPurchaseHoursMobileAndroidJava' => get_option('in_app_purchase_hours_mobile_android_java'),
      'perHourRateMobileAndroidJava' => get_option('per_hour_rate_mobile_android_java'),
	   //Development>Mobile>Android Apps>Kotlin
	  'minHoursMobileAndroidKotlin' => get_option('min_hours_mobile_android_kotlin'),
      'perScreenHoursMobileAndroidKotlin' => get_option('per_screen_hours_mobile_android_kotlin'),
      'adsIntegrationHoursMobileAndroidKotlin'=> get_option( 'ads_integration_hours_mobile_android_kotlin'),
	  'inAppPurchaseHoursMobileAndroidKotlin' => get_option('in_app_purchase_hours_mobile_android_kotlin'),
      'perHourRateMobileAndroidKotlin' => get_option('per_hour_rate_mobile_android_kotlin'),
      //Development>Mobile> IOS Apps>Swift
      'minHoursMobileIosSwift' => get_option('min_hours_mobile_ios_swift'),
      'perScreenHoursMobileIosSwift' => get_option('per_screen_hours_mobile_ios_swift'),
      'adsIntegrationHoursMobileIosSwift'=> get_option( 'ads_integration_hours_mobile_ios_swift'),
	  'inAppPurchaseHoursMobileIosSwift' => get_option('in_app_purchase_hours_mobile_ios_swift'),
      'perHourRateMobileIosSwift' => get_option('per_hour_rate_mobile_ios_swift'),
	  //Development>Mobile> IOS Apps>Objective C
	   'minHoursMobileIosObjectiveC' => get_option('min_hours_mobile_ios_objective_c'),
      'perScreenHoursMobileIosObjectiveC' => get_option('per_screen_hours_mobile_ios_objective_c'),
      'adsIntegrationHoursMobileIosObjectiveC'=> get_option( 'ads_integration_hours_mobile_ios_objective_c'),
	  'inAppPurchaseHoursMobileIosObjectiveC' => get_option('in_app_purchase_hours_mobile_ios_objective_c'),
      'perHourRateMobileIosObjectiveC' => get_option('per_hour_rate_mobile_ios_objective_c'),
	  //Development>Mobile>Hybrid Apps>React Native>IOS
	   'minHoursMobileHybridReactNativeIOS' => get_option('min_hours_mobile_hybrid_react_native_ios'),
      'perScreenHoursMobileHybridReactNativeIOS' => get_option('per_screen_hours_hybrid_react_native_ios'),
      'adsIntegrationHoursMobileHybridReactNativeIOS'=> get_option( 'ads_integration_hours_mobile_hybrid_react_native_ios'),
	  'inAppPurchaseHoursMobileHybridReactNativeIOS' => get_option('in_app_purchase_hours_mobile_hybrid_react_native_ios'),
      'perHourRateMobileHybridReactNativeIOS' => get_option('per_hour_rate_mobile_hybrid_react_native_ios'),
	   //Development>Mobile>Hybrid Apps>React Native>Android
	  'minHoursMobileHybridReactNativeAndroid' => get_option('min_hours_mobile_hybrid_react_native_android'),
      'perScreenHoursMobileHybridReactNativeAndroid' => get_option('per_screen_hours_hybrid_react_native_android'),
      'adsIntegrationHoursMobileHybridReactNativeAndroid'=> get_option( 'ads_integration_hours_mobile_hybrid_react_native_android'),
	  'inAppPurchaseHoursMobileHybridReactNativeAndroid' => get_option('in_app_purchase_hours_mobile_hybrid_react_native_android'),
      'perHourRateMobileHybridReactNativeAndroid' => get_option('per_hour_rate_mobile_hybrid_react_native_android'),
       //Development>Mobile>Hybrid Apps>Flutter
      'minHoursMobileHybridFlutterIOS' => get_option('min_hours_mobile_hybrid_flutter_ios'),
      'perScreenHoursMobileHybridFlutterIOS' => get_option('per_screen_hours_mobile_hybrid_flutter_ios'),
      'adsIntegrationHoursMobileHybridFlutterIOS'=> get_option( 'ads_integration_hours_mobile_hybrid_flutter_ios'),
	  'inAppPurchaseHoursMobileHybridFlutterIOS' => get_option('in_app_purchase_hours_mobile_hybrid_flutter_ios'),
      'perHourRateMobileHybridFlutterIOS' => get_option('per_hour_rate_mobile_hybrid_flutter_ios'),
       //Development>Mobile>Hybrid Apps>Android
      'minHoursMobileHybridFlutterAndroid' => get_option('min_hours_mobile_hybrid_flutter_android'),
      'perScreenHoursMobileHybridFlutterAndroid' => get_option('per_screen_hours_mobile_hybrid_flutter_android'),
      'adsIntegrationHoursMobileHybridFlutterAndroid'=> get_option( 'ads_integration_hours_mobile_hybrid_flutter_android'),
	  'inAppPurchaseHoursMobileHybridFlutterAndroid' => get_option('in_app_purchase_hours_mobile_hybrid_flutter_android'),
      'perHourRateMobileHybridFlutterAndroid' => get_option('per_hour_rate_mobile_hybrid_flutter_android'),
       //Development>Mobile>Games / Unity
      'minHoursMobileGamesUnity' => get_option('min_hours_mobile_games_unity'),
      'perScreenHoursMobileGamesUnity' => get_option('per_screen_hours_mobile_games_unity'),
      'adsIntegrationHoursMobileGamesUnity'=> get_option( 'ads_integration_hours_mobile_games_unity'),
	  'inAppPurchaseHoursMobileGamesUnity' => get_option('in_app_purchase_hours_mobile_games_unity'),
      'perHourRateMobileGamesUnity' => get_option('per_hour_rate_mobile_games_unity'),
	  //Development>Desktop> Java
	  'minHoursDesktopJava' => get_option('min_hours_desktop_java'),
      'perScreenHoursDesktopJava' => get_option('per_screen_hours_desktop_java'),
      'perHourRateDesktopJava'=> get_option( 'per_hour_rate_desktop_java'),
       //Development>Desktop>JavaScript
      'minHoursDesktopJavaScript' => get_option('min_hours_desktop_javascript'),
      'perScreenHoursDesktopJavaScript' => get_option('per_screen_hours_desktop_javascript'),
      'perHourRateDesktopJavaScript'=> get_option( 'per_hour_rate_desktop_javascript'),
       //Development>Desktop>C# Sharp
      'minHoursDesktopCSharp' => get_option('min_hours_desktop_csharp'),
      'perScreenHoursDesktopCSharp' => get_option('per_screen_hours_desktop_csharp'),
      'perHourRateDesktopCSharp'=> get_option( 'per_hour_rate_desktop_csharp'),
	  //Development>Desktop>Kotlin
	  'minHoursDesktopKotlin' => get_option('min_hours_desktop_kotlin'),
      'perScreenHoursDesktopKotlin' => get_option('per_screen_hours_desktop_kotlin'),
      'perHourRateDesktopKotlin'=> get_option( 'per_hour_rate_desktop_kotlin'),	  
	  //Development>Desktop>Python
	  'minHoursDesktopPython' => get_option('min_hours_desktop_python'),
      'perScreenHoursDesktopPython' => get_option('per_screen_hours_desktop_python'),
      'perHourRateDesktopPython'=> get_option( 'per_hour_rate_desktop_python'),	
      //Designing>Website Designing
  	  'minHourWebsiteDesigning' => get_option('min_hours_website_designing'),
      'perWebPageDesignHoursWebsiteDesigning' => get_option('per_web_page_design_hours_website_designing'),
      'perDesignConceptWireframeHoursWebsiteDesigning'=> get_option( 'per_design_concept_wireframe_hours_website_designing'),	
	  'perBannerSliderImageHoursWebsiteDesigning' => get_option('per_banner_slider_image_hours_website_designing'),
      'perVideohoursWebsiteDesigning' => get_option('per_video_hours_website_designing'),
      'perHourRateWebsiteDesigning'=> get_option( 'per_hour_rate_website_designing'),	
      //Designing>Mobile App Designing
      'minHourMobileDesigning' => get_option('min_hours_mobile_designing'),
      'perMobilePageDesignHoursMobileDesigning' => get_option('per_mobile_page_design_hours_mobile_designing'),
      'perDesignConceptWireframeHoursMobileDesigning'=> get_option( 'per_design_concept_wireframe_hours_mobile_designing'),	
	  'perBannerSliderImageHoursMobileDesigning' => get_option('per_banner_slider_image_hours_mobile_designing'),
      'perVideohoursMobileDesigning' => get_option('per_video_hours_mobile_designing'),
      'perHourRateMobileDesigning'=> get_option( 'per_hour_rate_mobile_designing'),	
	  //Designing> Desktop App Designing
	  'minHourDesktopDesigning' => get_option('min_hours_desktop_designing'),
      'perPageDesignHoursDesktopDesigning' => get_option('per_page_design_hours_desktop_designing'),
      'perDesignConceptWireframeHoursDesktopDesigning'=> get_option( 'per_design_concept_wireframe_hours_desktop_designing'),	
	  'perBannerSliderImageHoursDesktopDesigning' => get_option('per_banner_slider_image_hours_desktop_designing'),
      'perVideohoursDesktopDesigning' => get_option('per_video_hours_desktop_designing'),
      'perHourRateDesktopDesigning'=> get_option( 'per_hour_rate_desktop_designing'),	
	  //Designing> Games Designing
      'minHourGamesDesigning' => get_option('min_hours_games_designing'),
      'per3DModelHoursGamesDesigning' => get_option('per_3d_model_hours_games_designing'),
      'perBannerStoryBoardScreenHoursGamesDesigning'=> get_option( 'per_banner_story_board_screen_hours_games_designing'),	
	  'perDesignConceptWireframeHoursGamesDesigning' => get_option('per_design_concept_wireframe_hour_games_designing'),
      'perGameAssetHoursGamesDesigning' => get_option('per_game_asset_hours_games_designing'),
      'perGameUIDesignHoursGamesDesigning'=> get_option( 'per_game_uidesign_hours_games_designing'),	
	  'perHourRateGamesDesigning'=> get_option( 'per_hour_rate_games_designing'),	
	   //Designing>Social Media Design
	  'minHourSocialMediaDesigning' => get_option('min_hours_socialmedia_designing'),
      'perBannerHoursSocialMediaDesigning' => get_option('per_banner_hours_social_media_designing'),
      'perImageHoursSocialMediaDesigning'=> get_option( 'per_image_hours_social_media_designing'),	
	  'perBusinessCardHoursSocialMediaDesigning' => get_option('per_business_card_hours_social_media_designing'),
      'perFlyerHoursSocialMediaDesigning' => get_option('per_flyer_hours_social_media_designing'),
      'perGraphicalPostHoursSocialMediaDesigning'=> get_option( 'per_graphical_post_hours_social_media_designing'),	
	  'perHourRateSocialMediaDesigning'=> get_option( 'per_hour_rate_social_media_designing'),	
	   //Designing>Brand Identity>Animated Logo
	  'minHoursBrandIdentityAnimatedLogo' => get_option('min_hours_brand_identity_animated_logo'),
      'perLogoHoursBrandIdentityAnimatedLogo' => get_option('per_logo_hours_brand_identity_animated_logo'),
      'perHourRateBrandIdentityAnimatedLogo'=> get_option( 'per_hour_rate_brand_identity_animated_logo'),	
       //Designing>Brand Identity> Static Logo
      'minHoursBrandIdentityStaticLogo' => get_option('min_hours_brand_identity_static_logo'),
      'perLogoHoursBrandIdentityStaticLogo' => get_option('per_logo_hours_brand_identity_static_logo'),
      'perHourRateBrandIdentityStaticLogo'=> get_option( 'per_hour_rate_brand_identity_static_logo'),	
      //Marketing>SEO Marketing
      'minHourSEOMarketing' => get_option('min_hours_seo_marketing'),
      'onPageSEOHoursSEOMarketing' => get_option('on_page_seo_hours_seomarketing'),
      'offPageSEOHoursSEOMarketing'=> get_option( 'off_page_seo_hours_seomarketing'),	
	  'technicalSEOHoursSEOMarketing' => get_option('technical_seo_hours_seomarketing'),
      'localSEOHoursSEOMarketing' => get_option('local_seo_hours_seomarketing'),
      'perHourRateSEOMarketing'=> get_option( 'per_hour_rate_seomarketing'),	
	  //Marketing> SEM Marketing
	  'perHourRateSEMMarketing' => get_option('per_hour_rate_semmarketing'),
	  //Marketing> SMM Marketing>Organic Marketing
	  'minHoursOrganicSMMMarketing' => get_option('min_hours_organic_smmmarketing'),
      'organicMarketingHoursOrganicSMMMarketing' => get_option('organic_marketing_hours_organic_smmmarketing'),
      'perHourRateOrganicSMMMarketing'=> get_option( 'per_hour_rate_organic_smmmarketing'),
      //Marketing> SMM Marketing>Paid Marketing
      'perHourRatePaidSMMMarketing' => get_option('per_hour_rate_paid_smmmarketing'),
      //Marketing> ASO Marketing > App Optimization
   	  'minHoursASOMarketing' => get_option('min_hours_asomarketing'),
      'appOptimizationHoursASOMarketing' => get_option('app_optimization_hours_asomarketing'),
      'perHourRateASOMarketing'=> get_option( 'per_hour_rate_asomarketing'),	
	  //Marketing> ASO Marketing>Paid Marketing
	  'perHourRatePaidASOMarketing'=> get_option( 'per_hour_rate_paid_asomarketing'),	
      //Content>Informational
      'perWordRateContentInformational'=> get_option( 'per_word_rate_content_informational'),	
	  //Content>Navigational
	  'perWordRateContentNavigational'=> get_option( 'per_word_rate_content_navigational'),	
      //Marketing> Commercial
      'perWordRateContentCommercial'=> get_option( 'per_word_rate_content_commercial'),	
	  //Content>Translational
	  'perWordRateContentTranslational'=> get_option( 'per_word_rate_content_translational'),	

    ));
  require_once( DIRECTORY_PATH . '/public/includes/shortcode.php' );
    }
}
new public_main;