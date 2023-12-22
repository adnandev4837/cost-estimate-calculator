<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	//Development>Wesite>CMS>Wordpress
    $minHoursWebsiteCmsWordpress = sanitize_text_field($_POST["minHoursWebsiteCmsWordpress"]);
    $perPageHoursWebsiteCmsWordpress = sanitize_text_field($_POST["perPageHoursWebsiteCmsWordpress"]);
    $perProductHoursWebsiteCmsWordpress = sanitize_text_field($_POST["perProductHoursWebsiteCmsWordpress"]);
    $perHourRateWebsiteCmsWordpress = sanitize_text_field($_POST["perHourRateWebsiteCmsWordpress"]);
    update_option( 'min_hours_website_cms_wordpress', $minHoursWebsiteCmsWordpress ); 
    update_option( 'per_page_hours_website_cms_wordpress', $perPageHoursWebsiteCmsWordpress ); 
    update_option( 'per_product_hours_website_cms_wordpress', $perProductHoursWebsiteCmsWordpress ); 
    update_option( 'per_hour_rate_website_cms_wordpress', $perHourRateWebsiteCmsWordpress ); 
	
	//Development>Wesite>CMS>Shopify
    $minHoursWebsiteCmsShopify = sanitize_text_field($_POST["minHoursWebsiteCmsShopify"]);
    $perPageHoursWebsiteCmsShopify = sanitize_text_field($_POST["perPageHoursWebsiteCmsShopify"]);
    $perProductHoursWebsiteCmsShopify= sanitize_text_field($_POST["perProductHoursWebsiteCmsShopify"]);
    $perHourRateWebsiteCmsShopify= sanitize_text_field($_POST["perHourRateWebsiteCmsShopify"]);
    update_option( 'min_hours_website_cms_shopify', $minHoursWebsiteCmsShopify ); 
    update_option( 'per_page_hours_website_cms_shopify', $perPageHoursWebsiteCmsShopify ); 
    update_option( 'per_product_hours_website_cms_shopify', $perProductHoursWebsiteCmsShopify); 
    update_option( 'per_hour_rate_website_cms_shopify', $perHourRateWebsiteCmsShopify ); 
	
	//Development>Wesite>CMS>Wix
    $minHoursWebsiteCmsWix = sanitize_text_field($_POST["minHoursWebsiteCmsWix"]);
    $perPageHoursWebsiteCmsWix = sanitize_text_field($_POST["perPageHoursWebsiteCmsWix"]);
    $perProductHoursWebsiteCmsWix= sanitize_text_field($_POST["perProductHoursWebsiteCmsWix"]);
    $perHourRateWebsiteCmsWix= sanitize_text_field($_POST["perHourRateWebsiteCmsWix"]);
    update_option( 'min_hours_website_cms_wix', $minHoursWebsiteCmsWix ); 
    update_option( 'per_page_hours_website_cms_wix', $perPageHoursWebsiteCmsWix ); 
    update_option( 'per_product_hours_website_cms_wix', $perProductHoursWebsiteCmsWix ); 
    update_option( 'per_hour_rate_website_cms_wix', $perHourRateWebsiteCmsWix ); 
	
	//Development>Wesite>CMS>Joomla
    $minHoursWebsiteCmsJoomla = sanitize_text_field($_POST["minHoursWebsiteCmsJoomla"]);
    $perPageHoursWebsiteCmsJoomla = sanitize_text_field($_POST["perPageHoursWebsiteCmsJoomla"]);
    $perProductHoursWebsiteCmsJoomla = sanitize_text_field($_POST["perProductHoursWebsiteCmsJoomla"]);
    $perHourRateWebsiteCmsJoomla = sanitize_text_field($_POST["perHourRateWebsiteCmsJoomla"]);
    update_option( 'min_hours_website_cms_joomla', $minHoursWebsiteCmsJoomla); 
    update_option( 'per_page_hours_website_cms_joomla', $perPageHoursWebsiteCmsJoomla ); 
    update_option( 'per_product_hours_website_cms_joomla', $perProductHoursWebsiteCmsJoomla ); 
    update_option( 'per_hour_rate_website_cms_joomla', $perHourRateWebsiteCmsJoomla ); 
	
	//Development>Wesite>CMS>Magento
    $minHoursWebsiteCmsMagento= sanitize_text_field($_POST["minHoursWebsiteCmsMagento"]);
    $perPageHoursWebsiteCmsMagento = sanitize_text_field($_POST["perPageHoursWebsiteCmsMagento"]);
    $perProductHoursWebsiteCmsMagento= sanitize_text_field($_POST["perProductHoursWebsiteCmsMagento"]);
    $perHourRateWebsiteCmsMagento = sanitize_text_field($_POST["perHourRateWebsiteCmsMagento"]);
    update_option( 'min_hours_website_cms_magento', $minHoursWebsiteCmsMagento ); 
    update_option( 'per_page_hours_website_cms_magento', $perPageHoursWebsiteCmsMagento ); 
    update_option( 'per_product_hours_website_cms_magento', $perProductHoursWebsiteCmsMagento); 
    update_option( 'per_hour_rate_website_cms_magento', $perHourRateWebsiteCmsMagento ); 
	
	//Development>Wesite>CMS>Drupal
    $minHoursWebsiteCmsDrupal = sanitize_text_field($_POST["minHoursWebsiteCmsDrupal"]);
    $perPageHoursWebsiteCmsDrupal = sanitize_text_field($_POST["perPageHoursWebsiteCmsDrupal"]);
    $perProductHoursWebsiteCmsDrupal = sanitize_text_field($_POST["perProductHoursWebsiteCmsDrupal"]);
    $perHourRateWebsiteCmsDrupal = sanitize_text_field($_POST["perHourRateWebsiteCmsDrupal"]);
    update_option( 'min_hours_website_cms_drupal', $minHoursWebsiteCmsDrupal ); 
    update_option( 'per_page_hours_website_cms_drupal', $perPageHoursWebsiteCmsDrupal ); 
    update_option( 'per_product_hours_website_cms_drupal', $perProductHoursWebsiteCmsDrupal ); 
    update_option( 'per_hour_rate_website_cms_drupal', $perHourRateWebsiteCmsDrupal); 
	
	//Development>Wesite>Custom Development>Front-end Development>HTML / CSS / Bootstrap
    $minHoursWebsiteCustomHTMLCSSBootstrap = sanitize_text_field($_POST["minHoursWebsiteCustomHTMLCSSBootstrap"]);
    $perPageHoursWebsiteCustomHTMLCSSBootstrap = sanitize_text_field($_POST["perPageHoursWebsiteCustomHTMLCSSBootstrap"]);
    $perProductHoursWebsiteCustomHTMLCSSBootstrap = sanitize_text_field($_POST["perProductHoursWebsiteCustomHTMLCSSBootstrap"]);
    $perHourRateWebsiteCustomHTMLCSSBootstrap= sanitize_text_field($_POST["perHourRateWebsiteCustomHTMLCSSBootstrap"]);
    update_option( 'min_hours_website_custom_htmlCssBootstrap', $minHoursWebsiteCustomHTMLCSSBootstrap ); 
    update_option( 'per_page_hours_website_custom_htmlCssBootstrap', $perPageHoursWebsiteCustomHTMLCSSBootstrap ); 
    update_option( 'per_product_hours_website_custom_htmlCssBootstrap', $perProductHoursWebsiteCustomHTMLCSSBootstrap ); 
    update_option( 'per_hour_rate_website_custom_htmlCssBootstrap', $perHourRateWebsiteCustomHTMLCSSBootstrap); 
	
	//Development>Wesite>Custom Development>Front-end Development>React Js
    $minHoursWebsiteCustomReactJs = sanitize_text_field($_POST["minHoursWebsiteCustomReactJs"]);
    $perPageHoursWebsiteCustomReactJs= sanitize_text_field($_POST["perPageHoursWebsiteCustomReactJs"]);
    $perProductHoursWebsiteCustomReactJs = sanitize_text_field($_POST["perProductHoursWebsiteCustomReactJs"]);
    $perHourRateWebsiteCustomReactJs= sanitize_text_field($_POST["perHourRateWebsiteCustomReactJs"]);
    update_option( 'min_hours_website_custom_reactjs', $minHoursWebsiteCustomReactJs ); 
    update_option( 'per_page_hours_website_custom_reactjs', $perPageHoursWebsiteCustomReactJs ); 
    update_option( 'per_product_hours_website_custom_reactjs', $perProductHoursWebsiteCustomReactJs ); 
    update_option( 'per_hour_rate_website_custom_reactjs', $perHourRateWebsiteCustomReactJs); 

	//Development>Wesite>Custom Development>Front-end Development>Angular Js
    $minHoursWebsiteCustomAngularJs = sanitize_text_field($_POST["minHoursWebsiteCustomAngularJs"]);
    $perPageHoursWebsiteCustomAngularJs  = sanitize_text_field($_POST["perPageHoursWebsiteCustomAngularJs"]);
    $perProductHoursWebsiteCustomAngularJs  = sanitize_text_field($_POST["perProductHoursWebsiteCustomAngularJs"]);
    $perHourRateWebsiteCustomAngularJs = sanitize_text_field($_POST["perHourRateWebsiteCustomAngularJs"]);
    update_option( 'min_hours_website_custom_angularjs', $minHoursWebsiteCustomAngularJs  ); 
    update_option( 'per_page_hours_website_custom_angularjs', $perPageHoursWebsiteCustomAngularJs ); 
    update_option( 'per_product_hours_website_custom_angularjs', $perProductHoursWebsiteCustomAngularJs  ); 
    update_option( 'per_hour_rate_website_custom_angularjs', $perHourRateWebsiteCustomAngularJs ); 
	
	//Development>Wesite>Custom Development>Front-end Development>Vue Js
    $minHoursWebsiteCustomVueJs = sanitize_text_field($_POST["minHoursWebsiteCustomVueJs"]);
    $perPageHoursWebsiteCustomVueJs = sanitize_text_field($_POST["perPageHoursWebsiteCustomVueJs"]);
    $perProductHoursWebsiteCustomVueJs  = sanitize_text_field($_POST["perProductHoursWebsiteCustomVueJs"]);
    $perHourRateWebsiteCustomVueJs  = sanitize_text_field($_POST["perHourRateWebsiteCustomVueJs"]);
    update_option( 'min_hours_website_custom_vuejs', $minHoursWebsiteCustomVueJs  ); 
    update_option( 'per_page_hours_website_custom_vuejs', $perPageHoursWebsiteCustomVueJs  ); 
    update_option( 'per_product_hours_website_custom_vuejs', $perProductHoursWebsiteCustomVueJs  ); 
    update_option( 'per_hour_rate_website_custom_vuejs', $perHourRateWebsiteCustomVueJs); 
	
	//Development>Wesite>Custom Development>Back-end Development>Python
    $minHoursWebsiteCustomPython = sanitize_text_field($_POST["minHoursWebsiteCustomPython"]);
    $perApiHoursWebsiteCustomPython  = sanitize_text_field($_POST["perApiHoursWebsiteCustomPython"]);
    $perHourRateWebsiteCustomPython  = sanitize_text_field($_POST["perHourRateWebsiteCustomPython"]);
    update_option( 'min_hours_website_custom_python', $minHoursWebsiteCustomPython  ); 
    update_option( 'per_api_hours_website_custom_python', $perApiHoursWebsiteCustomPython  ); 
    update_option( 'per_hour_rate_website_custom_python', $perHourRateWebsiteCustomPython ); 
	
	//Development>Wesite>Custom Development>Back-end Development>Node JS
    $minHoursWebsiteCustomNodeJs = sanitize_text_field($_POST["minHoursWebsiteCustomNodeJs"]);
    $perApiHoursWebsiteCustomNodeJs = sanitize_text_field($_POST["perApiHoursWebsiteCustomNodeJs"]);
    $perHourRateWebsiteCustomNodeJs = sanitize_text_field($_POST["perHourRateWebsiteCustomNodeJs"]);
    update_option( 'min_hours_website_custom_nodejs', $minHoursWebsiteCustomNodeJs ); 
    update_option( 'per_api_hours_website_custom_nodejs', $perApiHoursWebsiteCustomNodeJs); 
    update_option( 'per_hour_rate_website_custom_nodejs', $perHourRateWebsiteCustomNodeJs); 
	
	//Development>Wesite>Custom Development>Back-end Development>php
    $minHoursWebsiteCustomPhp = sanitize_text_field($_POST["minHoursWebsiteCustomPhp"]);
    $perApiHoursWebsiteCustomPhp  = sanitize_text_field($_POST["perApiHoursWebsiteCustomPhp"]);
    $perHourRateWebsiteCustomPhp  = sanitize_text_field($_POST["perHourRateWebsiteCustomPhp"]);
    update_option( 'min_hours_website_custom_php', $minHoursWebsiteCustomPhp ); 
    update_option( 'per_api_hours_website_custom_php', $perApiHoursWebsiteCustomPhp  ); 
    update_option( 'per_hour_rate_website_custom_php', $perHourRateWebsiteCustomPhp ); 
	
	//Development>Wesite>Custom Development>Back-end Development>Ruby
    $minHoursWebsiteCustomRuby = sanitize_text_field($_POST["minHoursWebsiteCustomRuby"]);
    $perApiHoursWebsiteCustomRuby = sanitize_text_field($_POST["perApiHoursWebsiteCustomRuby"]);
    $perHourRateWebsiteCustomRuby= sanitize_text_field($_POST["perHourRateWebsiteCustomRuby"]);
    update_option( 'min_hours_website_custom_ruby', $minHoursWebsiteCustomRuby ); 
    update_option( 'per_api_hours_website_custom_ruby', $perApiHoursWebsiteCustomRuby); 
    update_option( 'per_hour_rate_website_custom_ruby', $perHourRateWebsiteCustomRuby); 
	
	//Development>Wesite>Custom Development>Back-end Development>C# Sharp
    $minHoursWebsiteCustomCSharp = sanitize_text_field($_POST["minHoursWebsiteCustomCSharp"]);
    $perApiHoursWebsiteCustomCSharp= sanitize_text_field($_POST["perApiHoursWebsiteCustomCSharp"]);
    $perHourRateWebsiteCustomCSharp = sanitize_text_field($_POST["perHourRateWebsiteCustomCSharp"]);
    update_option( 'min_hours_website_custom_csharp', $minHoursWebsiteCustomCSharp ); 
    update_option( 'per_api_hours_website_custom_csharp', $perApiHoursWebsiteCustomCSharp ); 
    update_option( 'per_hour_rate_website_custom_csharp', $perHourRateWebsiteCustomCSharp); 
	
	//Development>Wesite>Custom Development>Back-end Development>Java
    $minHoursWebsiteCustomJava = sanitize_text_field($_POST["minHoursWebsiteCustomJava"]);
    $perApiHoursWebsiteCustomJava= sanitize_text_field($_POST["perApiHoursWebsiteCustomJava"]);
    $perHourRateWebsiteCustomJava = sanitize_text_field($_POST["perHourRateWebsiteCustomJava"]);
    update_option( 'min_hours_website_custom_java', $minHoursWebsiteCustomJava ); 
    update_option( 'per_api_hours_website_custom_java', $perApiHoursWebsiteCustomJava ); 
    update_option( 'per_hour_rate_website_custom_java', $perHourRateWebsiteCustomJava); 
	
	//Development>Wesite>Maintenance>Bug Fixing and Security Updates
    $minHoursWebsiteMaintenanceBugFix = sanitize_text_field($_POST["minHoursWebsiteMaintenanceBugFix"]);
    $perFixHoursWebsiteMaintenanceBugFix = sanitize_text_field($_POST["perFixHoursWebsiteMaintenanceBugFix"]);
    $perHourRateWebsiteMaintenanceBugFix = sanitize_text_field($_POST["perHourRateWebsiteMaintenanceBugFix"]);
    update_option( 'min_hours_website_maintenance_bugfix', $minHoursWebsiteMaintenanceBugFix ); 
    update_option( 'per_fix_hours_website_maintenance_bugfix', $perFixHoursWebsiteMaintenanceBugFix ); 
    update_option( 'per_hour_rate_website_maintenance_bugfix', $perHourRateWebsiteMaintenanceBugFix); 
	
	//Development>Wesite>Maintenance> Migration / Backup
    $minHoursWebsiteMaintenanceBackup = sanitize_text_field($_POST["minHoursWebsiteMaintenanceBackup"]);
    $perSiteHoursWebsiteMaintenanceBackup = sanitize_text_field($_POST["perSiteHoursWebsiteMaintenanceBackup"]);
    $perHourRateWebsiteMaintenanceBackup = sanitize_text_field($_POST["perHourRateWebsiteMaintenanceBackup"]);
    update_option( 'min_hours_website_maintenance_backup', $minHoursWebsiteMaintenanceBackup ); 
    update_option( 'per_site_hours_website_maintenance_backup', $perSiteHoursWebsiteMaintenanceBackup ); 
    update_option( 'per_hour_rate_website_maintenance_backup', $perHourRateWebsiteMaintenanceBackup); 
	
	//Development>Wesite>Maintenance> Additional Feature
    $minHoursWebsiteMaintenanceFeature = sanitize_text_field($_POST["minHoursWebsiteMaintenanceFeature"]);
    $perFeatureHoursWebsiteMaintenanceFeature = sanitize_text_field($_POST["perFeatureHoursWebsiteMaintenanceFeature"]);
    $perHourRateWebsiteMaintenanceFeature = sanitize_text_field($_POST["perHourRateWebsiteMaintenanceFeature"]);
    update_option( 'min_hours_website_maintenance_feature', $minHoursWebsiteMaintenanceFeature ); 
    update_option( 'per_feature_hours_website_maintenance_feature', $perFeatureHoursWebsiteMaintenanceFeature ); 
    update_option( 'per_hour_rate_website_maintenance_feature', $perHourRateWebsiteMaintenanceFeature); 
	

	
	//Development>Mobile>Android Apps>Java
    $minHoursMobileAndroidJava = sanitize_text_field($_POST["minHoursMobileAndroidJava"]);
    $perScreenHoursMobileAndroidJava = sanitize_text_field($_POST["perScreenHoursMobileAndroidJava"]);
    $adsIntegrationHoursMobileAndroidJava = sanitize_text_field($_POST["adsIntegrationHoursMobileAndroidJava"]);
    $inAppPurchaseHoursMobileAndroidJava = sanitize_text_field($_POST["inAppPurchaseHoursMobileAndroidJava"]);
    $perHourRateMobileAndroidJava = sanitize_text_field($_POST["perHourRateMobileAndroidJava"]);
    update_option( 'min_hours_mobile_android_java', $minHoursMobileAndroidJava ); 
    update_option( 'per_screen_hours_mobile_android_java', $perScreenHoursMobileAndroidJava ); 
    update_option( 'ads_integration_hours_mobile_android_java', $adsIntegrationHoursMobileAndroidJava ); 
	update_option( 'in_app_purchase_hours_mobile_android_java', $inAppPurchaseHoursMobileAndroidJava ); 
    update_option( 'per_hour_rate_mobile_android_java', $perHourRateMobileAndroidJava); 
	//Development>Mobile>Android Apps>Kotlin
    $minHoursMobileAndroidKotlin = sanitize_text_field($_POST["minHoursMobileAndroidKotlin"]);
    $perScreenHoursMobileAndroidKotlin = sanitize_text_field($_POST["perScreenHoursMobileAndroidKotlin"]);
	$adsIntegrationHoursMobileAndroidKotlin = sanitize_text_field($_POST["adsIntegrationHoursMobileAndroidKotlin"]);
    $inAppPurchaseHoursMobileAndroidKotlin = sanitize_text_field($_POST["inAppPurchaseHoursMobileAndroidKotlin"]);
    $perHourRateMobileAndroidKotlin = sanitize_text_field($_POST["perHourRateMobileAndroidKotlin"]);
    update_option( 'min_hours_mobile_android_kotlin', $minHoursMobileAndroidKotlin); 
    update_option( 'per_screen_hours_mobile_android_kotlin', $perScreenHoursMobileAndroidKotlin ); 
    update_option( 'ads_integration_hours_mobile_android_kotlin', $adsIntegrationHoursMobileAndroidKotlin); 
	update_option( 'in_app_purchase_hours_mobile_android_kotlin', $inAppPurchaseHoursMobileAndroidKotlin); 
    update_option( 'per_hour_rate_mobile_android_kotlin', $perHourRateMobileAndroidKotlin); 
	//Development>Mobile> IOS Apps>Swift
    $minHoursMobileIosSwift = sanitize_text_field($_POST["minHoursMobileIosSwift"]);
    $perScreenHoursMobileIosSwift  = sanitize_text_field($_POST["perScreenHoursMobileIosSwift"]);
    $adsIntegrationHoursMobileIosSwift  = sanitize_text_field($_POST["adsIntegrationHoursMobileIosSwift"]);
    $inAppPurchaseHoursMobileIosSwift  = sanitize_text_field($_POST["inAppPurchaseHoursMobileIosSwift"]);
    $perHourRateMobileIosSwift  = sanitize_text_field($_POST["perHourRateMobileIosSwift"]);
    update_option( 'min_hours_mobile_ios_swift', $minHoursMobileIosSwift ); 
    update_option( 'per_screen_hours_mobile_ios_swift', $perScreenHoursMobileIosSwift); 
    update_option( 'ads_integration_hours_mobile_ios_swift', $adsIntegrationHoursMobileIosSwift); 
	update_option( 'in_app_purchase_hours_mobile_ios_swift', $inAppPurchaseHoursMobileIosSwift ); 
    update_option( 'per_hour_rate_mobile_ios_swift', $perHourRateMobileIosSwift); 
	//Development>Mobile> IOS Apps>Objective C
    $minHoursMobileIosObjectiveC = sanitize_text_field($_POST["minHoursMobileIosObjectiveC"]);
    $perScreenHoursMobileIosObjectiveC= sanitize_text_field($_POST["perScreenHoursMobileIosObjectiveC"]);
    $adsIntegrationHoursMobileIosObjectiveC= sanitize_text_field($_POST["adsIntegrationHoursMobileIosObjectiveC"]);
    $inAppPurchaseHoursMobileIosObjectiveC = sanitize_text_field($_POST["inAppPurchaseHoursMobileIosObjectiveC"]);
    $perHourRateMobileIosObjectiveC = sanitize_text_field($_POST["perHourRateMobileIosObjectiveC"]);
    update_option( 'min_hours_mobile_ios_objective_c', $minHoursMobileIosObjectiveC ); 
    update_option( 'per_screen_hours_mobile_ios_objective_c', $perScreenHoursMobileIosObjectiveC); 
    update_option( 'ads_integration_hours_mobile_ios_objective_c', $adsIntegrationHoursMobileIosObjectiveC ); 
	update_option( 'in_app_purchase_hours_mobile_ios_objective_c', $inAppPurchaseHoursMobileIosObjectiveC); 
    update_option( 'per_hour_rate_mobile_ios_objective_c', $perHourRateMobileIosObjectiveC); 
	
	
	//Development>Mobile>Hybrid Apps>React Native>IOS
    $minHoursMobileHybridReactNativeIOS = sanitize_text_field($_POST["minHoursMobileHybridReactNativeIOS"]);
    $perScreenHoursMobileHybridReactNativeIOS = sanitize_text_field($_POST["perScreenHoursMobileHybridReactNativeIOS"]);
    $adsIntegrationHoursMobileHybridReactNativeIOS = sanitize_text_field($_POST["adsIntegrationHoursMobileHybridReactNativeIOS"]);
    $inAppPurchaseHoursMobileHybridReactNativeIOS= sanitize_text_field($_POST["inAppPurchaseHoursMobileHybridReactNativeIOS"]);
    $perHourRateMobileHybridReactNativeIOS= sanitize_text_field($_POST["perHourRateMobileHybridReactNativeIOS"]);
    update_option( 'min_hours_mobile_hybrid_react_native_ios', $minHoursMobileHybridReactNativeIOS ); 
    update_option( 'per_screen_hours_hybrid_react_native_ios', $perScreenHoursMobileHybridReactNativeIOS ); 
    update_option( 'ads_integration_hours_mobile_hybrid_react_native_ios', $adsIntegrationHoursMobileHybridReactNativeIOS); 
	update_option( 'in_app_purchase_hours_mobile_hybrid_react_native_ios', $inAppPurchaseHoursMobileHybridReactNativeIOS ); 
    update_option( 'per_hour_rate_mobile_hybrid_react_native_ios', $perHourRateMobileHybridReactNativeIOS); 
	
	//Development>Mobile>Hybrid Apps>React Native>Android
    $minHoursMobileHybridReactNativeAndroid = sanitize_text_field($_POST["minHoursMobileHybridReactNativeAndroid"]);
    $perScreenHoursMobileHybridReactNativeAndroid = sanitize_text_field($_POST["perScreenHoursMobileHybridReactNativeAndroid"]);
    $adsIntegrationHoursMobileHybridReactNativeAndroid = sanitize_text_field($_POST["adsIntegrationHoursMobileHybridReactNativeAndroid"]);
    $inAppPurchaseHoursMobileHybridReactNativeAndroid= sanitize_text_field($_POST["inAppPurchaseHoursMobileHybridReactNativeAndroid"]);
    $perHourRateMobileHybridReactNativeAndroid= sanitize_text_field($_POST["perHourRateMobileHybridReactNativeAndroid"]);
    update_option( 'min_hours_mobile_hybrid_react_native_android', $minHoursMobileHybridReactNativeAndroid ); 
    update_option( 'per_screen_hours_hybrid_react_native_android', $perScreenHoursMobileHybridReactNativeAndroid ); 
    update_option( 'ads_integration_hours_mobile_hybrid_react_native_android', $adsIntegrationHoursMobileHybridReactNativeAndroid); 
	update_option( 'in_app_purchase_hours_mobile_hybrid_react_native_android', $inAppPurchaseHoursMobileHybridReactNativeAndroid ); 
    update_option( 'per_hour_rate_mobile_hybrid_react_native_android', $perHourRateMobileHybridReactNativeAndroid); 
	
	//Development>Mobile>Hybrid Apps>Flutter
    $minHoursMobileHybridFlutterIOS = sanitize_text_field($_POST["minHoursMobileHybridFlutterIOS"]);
    $perScreenHoursMobileHybridFlutterIOS= sanitize_text_field($_POST["perScreenHoursMobileHybridFlutterIOS"]);
    $adsIntegrationHoursMobileHybridFlutterIOS = sanitize_text_field($_POST["adsIntegrationHoursMobileHybridFlutterIOS"]);
    $inAppPurchaseHoursMobileHybridFlutterIOS= sanitize_text_field($_POST["inAppPurchaseHoursMobileHybridFlutterIOS"]);
    $perHourRateMobileHybridFlutterIOS = sanitize_text_field($_POST["perHourRateMobileHybridFlutterIOS"]);
    update_option( 'min_hours_mobile_hybrid_flutter_ios', $minHoursMobileHybridFlutterIOS ); 
    update_option( 'per_screen_hours_mobile_hybrid_flutter_ios', $perScreenHoursMobileHybridFlutterIOS ); 
    update_option( 'ads_integration_hours_mobile_hybrid_flutter_ios', $adsIntegrationHoursMobileHybridFlutterIOS ); 
	update_option( 'in_app_purchase_hours_mobile_hybrid_flutter_ios', $inAppPurchaseHoursMobileHybridFlutterIOS ); 
    update_option( 'per_hour_rate_mobile_hybrid_flutter_ios', $perHourRateMobileHybridFlutterIOS); 
	
	//Development>Mobile>Hybrid Apps>Android
    $minHoursMobileHybridFlutterAndroid = sanitize_text_field($_POST["minHoursMobileHybridFlutterAndroid"]);
    $perScreenHoursMobileHybridFlutterAndroid= sanitize_text_field($_POST["perScreenHoursMobileHybridFlutterAndroid"]);
    $adsIntegrationHoursMobileHybridFlutterAndroid = sanitize_text_field($_POST["adsIntegrationHoursMobileHybridFlutterAndroid"]);
    $inAppPurchaseHoursMobileHybridFlutterAndroid= sanitize_text_field($_POST["inAppPurchaseHoursMobileHybridFlutterAndroid"]);
    $perHourRateMobileHybridFlutterAndroid = sanitize_text_field($_POST["perHourRateMobileHybridFlutterAndroid"]);
    update_option( 'min_hours_mobile_hybrid_flutter_android', $minHoursMobileHybridFlutterAndroid ); 
    update_option( 'per_screen_hours_mobile_hybrid_flutter_android', $perScreenHoursMobileHybridFlutterAndroid ); 
    update_option( 'ads_integration_hours_mobile_hybrid_flutter_android', $adsIntegrationHoursMobileHybridFlutterAndroid ); 
	update_option( 'in_app_purchase_hours_mobile_hybrid_flutter_android', $inAppPurchaseHoursMobileHybridFlutterAndroid ); 
    update_option( 'per_hour_rate_mobile_hybrid_flutter_android', $perHourRateMobileHybridFlutterAndroid); 
	
	
	
	//Development>Mobile>Games / Unity
    $minHoursMobileGamesUnity = sanitize_text_field($_POST["minHoursMobileGamesUnity"]);
    $perScreenHoursMobileGamesUnity= sanitize_text_field($_POST["perScreenHoursMobileGamesUnity"]);
    $adsIntegrationHoursMobileGamesUnity = sanitize_text_field($_POST["adsIntegrationHoursMobileGamesUnity"]);
    $inAppPurchaseHoursMobileGamesUnity= sanitize_text_field($_POST["inAppPurchaseHoursMobileGamesUnity"]);
    $perHourRateMobileGamesUnity = sanitize_text_field($_POST["perHourRateMobileGamesUnity"]);
    update_option( 'min_hours_mobile_games_unity', $minHoursMobileGamesUnity ); 
    update_option( 'per_screen_hours_mobile_games_unity', $perScreenHoursMobileGamesUnity); 
    update_option( 'ads_integration_hours_mobile_games_unity', $adsIntegrationHoursMobileGamesUnity); 
	update_option( 'in_app_purchase_hours_mobile_games_unity', $inAppPurchaseHoursMobileGamesUnity); 
    update_option( 'per_hour_rate_mobile_games_unity', $perHourRateMobileGamesUnity); 
	//Development>Desktop> Java
    $minHoursDesktopJava = sanitize_text_field($_POST["minHoursDesktopJava"]);
    $perScreenHoursDesktopJava= sanitize_text_field($_POST["perScreenHoursDesktopJava"]);
    $perHourRateDesktopJava = sanitize_text_field($_POST["perHourRateDesktopJava"]);
    update_option( 'min_hours_desktop_java', $minHoursDesktopJava ); 
    update_option( 'per_screen_hours_desktop_java', $perScreenHoursDesktopJava ); 
    update_option( 'per_hour_rate_desktop_java', $perHourRateDesktopJava); 
	//Development>Desktop>JavaScript
    $minHoursDesktopJavaScript = sanitize_text_field($_POST["minHoursDesktopJavaScript"]);
    $perScreenHoursDesktopJavaScript= sanitize_text_field($_POST["perScreenHoursDesktopJavaScript"]);
    $perHourRateDesktopJavaScript = sanitize_text_field($_POST["perHourRateDesktopJavaScript"]);
    update_option( 'min_hours_desktop_javascript', $minHoursDesktopJavaScript ); 
    update_option( 'per_screen_hours_desktop_javascript', $perScreenHoursDesktopJavaScript ); 
    update_option( 'per_hour_rate_desktop_javascript', $perHourRateDesktopJavaScript); 
	//Development>Desktop>C# Sharp
    $minHoursDesktopCSharp = sanitize_text_field($_POST["minHoursDesktopCSharp"]);
    $perScreenHoursDesktopCSharp = sanitize_text_field($_POST["perScreenHoursDesktopCSharp"]);
    $perHourRateDesktopCSharp = sanitize_text_field($_POST["perHourRateDesktopCSharp"]);
    update_option( 'min_hours_desktop_csharp', $minHoursDesktopCSharp ); 
    update_option( 'per_screen_hours_desktop_csharp', $perScreenHoursDesktopCSharp ); 
    update_option( 'per_hour_rate_desktop_csharp', $perHourRateDesktopCSharp); 
	//Development>Desktop>Kotlin
    $minHoursDesktopKotlin = sanitize_text_field($_POST["minHoursDesktopKotlin"]);
    $perScreenHoursDesktopKotlin = sanitize_text_field($_POST["perScreenHoursDesktopKotlin"]);
    $perHourRateDesktopKotlin=sanitize_text_field($_POST["perHourRateDesktopKotlin"]);
    update_option( 'min_hours_desktop_kotlin', $minHoursDesktopKotlin ); 
    update_option( 'per_screen_hours_desktop_kotlin', $perScreenHoursDesktopKotlin ); 
    update_option( 'per_hour_rate_desktop_kotlin', $perHourRateDesktopKotlin); 
	//Development>Desktop>Python
    $minHoursDesktopPython = sanitize_text_field($_POST["minHoursDesktopPython"]);
    $perScreenHoursDesktopPython  = sanitize_text_field($_POST["perScreenHoursDesktopPython"]);
    $perHourRateDesktopPython = sanitize_text_field($_POST["perHourRateDesktopPython"]);
    update_option( 'min_hours_desktop_python', $minHoursDesktopPython ); 
    update_option( 'per_screen_hours_desktop_python', $perScreenHoursDesktopPython ); 
    update_option( 'per_hour_rate_desktop_python', $perHourRateDesktopPython ); 
	
	
	
    add_action( 'admin_notices', 'admin_notice__success' );
  }
function admin_notice__success() {
    ?>
    <div class="notice notice-success is-dismissible">
        <p><?php _e( 'Success! setting saved successfully', TEXT_DOMAIN ); ?></p>
    </div>
    <?php
  }
  do_action( 'admin_notices' );
?>

<form action="" id="form-admin" class="form-sett" method="POST" >
<h2>Development Settings<hr></h2>
<div class="website-development main-content">
 <input type="checkbox" id="website-development" name="website-development" class="marked" value="website-development">
 <label for="website-development-label" class="check-label-settings">Website Development</label>

    <div class="sub-content" style="display:none;">
        <input type="checkbox" id="cms-website-development" name="cms-website-development"  class="sub-marked" value="cms-website-development">
        <label for="cms-website-development-label" class="check-label-settings">CMS</label>

        <div class="sub-sub-content" style="display:none;">

            <div class="sub-sub-sub-content" >
            <input type="checkbox" class="sub-sub-marked" >
            <label class="check-label-settings">Wordpress</label>
            <div class="sub-sub-sub-sub-content" style="display:none;">
            <label class="input-field-label"><b>Minimuim Hours</b>
            <input type="number" id="minHoursWebsiteCmsWordpress" name="minHoursWebsiteCmsWordpress" placeholder="Minimuim Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'min_hours_website_cms_wordpress' ))){ echo get_option( 'min_hours_website_cms_wordpress' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Page Hours</b>
            <input type="number" id="perPageHoursWebsiteCmsWordpress" name="perPageHoursWebsiteCmsWordpress" Placeholder="Per Page Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_page_hours_website_cms_wordpress' ))){ echo get_option( 'per_page_hours_website_cms_wordpress' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Product Hours</b>
            <input type="number" id="perProductHoursWebsiteCmsWordpress" name="perProductHoursWebsiteCmsWordpress" placeholder="Per Product Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_product_hours_website_cms_wordpress' ))){ echo get_option( 'per_product_hours_website_cms_wordpress' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Hour Rate</b>
            <input type="number" id="perHourRateWebsiteCmsWordpress" name="perHourRateWebsiteCmsWordpress" Placeholder="Per Hour Rate" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_hour_rate_website_cms_wordpress' ))){ echo get_option( 'per_hour_rate_website_cms_wordpress' );}else {echo '0';} ?>"></label>
            </div>
            </div>

            <div class="sub-sub-sub-content" >
            <input type="checkbox" class="sub-sub-marked" >
            <label class="check-label-settings">Shopify</label>
            <div class="sub-sub-sub-sub-content" style="display:none;">
          <label class="input-field-label"><b>Minimuim Hours</b>
            <input type="number" id="minHoursWebsiteCmsShopify" name="minHoursWebsiteCmsShopify" placeholder="Minimuim Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'min_hours_website_cms_shopify' ))){ echo get_option( 'min_hours_website_cms_shopify' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Page Hours</b>
            <input type="number" id="perPageHoursWebsiteCmsShopify" name="perPageHoursWebsiteCmsShopify" Placeholder="Per Page Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_page_hours_website_cms_shopify' ))){ echo get_option( 'per_page_hours_website_cms_shopify' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Product Hours</b>
            <input type="number" id="perProductHoursWebsiteCmsShopify" name="perProductHoursWebsiteCmsShopify" placeholder="Per Product Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_product_hours_website_cms_shopify' ))){ echo get_option( 'per_product_hours_website_cms_shopify' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Hour Rate</b>
            <input type="number" id="perHourRateWebsiteCmsShopify" name="perHourRateWebsiteCmsShopify" Placeholder="Per Hour Rate" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_hour_rate_website_cms_shopify' ))){ echo get_option( 'per_hour_rate_website_cms_shopify' );}else {echo '0';} ?>"></label>
            </div>
            </div>
			
			<div class="sub-sub-sub-content" >
            <input type="checkbox" class="sub-sub-marked" >
            <label class="check-label-settings">Wix</label>
            <div class="sub-sub-sub-sub-content" style="display:none;">
          <label class="input-field-label"><b>Minimuim Hours</b>
            <input type="number" id="minHoursWebsiteCmsWix" name="minHoursWebsiteCmsWix" placeholder="Minimuim Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'min_hours_website_cms_wix' ))){ echo get_option( 'min_hours_website_cms_wix' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Page Hours</b>
            <input type="number" id="perPageHoursWebsiteCmsWix" name="perPageHoursWebsiteCmsWix" Placeholder="Per Page Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_page_hours_website_cms_wix' ))){ echo get_option( 'per_page_hours_website_cms_wix' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Product Hours</b>
            <input type="number" id="perProductHoursWebsiteCmsWix" name="perProductHoursWebsiteCmsWix" placeholder="Per Product Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_product_hours_website_cms_wix' ))){ echo get_option( 'per_product_hours_website_cms_wix' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Hour Rate</b>
            <input type="number" id="perHourRateWebsiteCmsWix" name="perHourRateWebsiteCmsWix" Placeholder="Per Hour Rate" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_hour_rate_website_cms_wix' ))){ echo get_option( 'per_hour_rate_website_cms_wix' );}else {echo '0';} ?>"></label>
            </div>
            </div>
			
			<div class="sub-sub-sub-content" >
            <input type="checkbox"  class="sub-sub-marked" >
            <label class="check-label-settings">Joomla</label>
            <div class="sub-sub-sub-sub-content" style="display:none;">
          <label class="input-field-label"><b>Minimuim Hours</b>
            <input type="number" id="minHoursWebsiteCmsJoomla" name="minHoursWebsiteCmsJoomla" placeholder="Minimuim Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'min_hours_website_cms_joomla' ))){ echo get_option( 'min_hours_website_cms_joomla' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Page Hours</b>
            <input type="number" id="perPageHoursWebsiteCmsJoomla" name="perPageHoursWebsiteCmsJoomla" Placeholder="Per Page Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_page_hours_website_cms_joomla' ))){ echo get_option( 'per_page_hours_website_cms_joomla' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Product Hours</b>
            <input type="number" id="perProductHoursWebsiteCmsJoomla" name="perProductHoursWebsiteCmsJoomla" placeholder="Per Product Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_product_hours_website_cms_joomla' ))){ echo get_option( 'per_product_hours_website_cms_joomla' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Hour Rate</b>
            <input type="number" id="perHourRateWebsiteCmsJoomla" name="perHourRateWebsiteCmsJoomla" Placeholder="Per Hour Rate" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_hour_rate_website_cms_joomla' ))){ echo get_option( 'per_hour_rate_website_cms_joomla' );}else {echo '0';} ?>"></label>
            </div>
            </div>
			
			<div class="sub-sub-sub-content" >
            <input type="checkbox" class="sub-sub-marked" >
            <label class="check-label-settings">Magento</label>
            <div class="sub-sub-sub-sub-content" style="display:none;">
          <label class="input-field-label"><b>Minimuim Hours</b>
            <input type="number" id="minHoursWebsiteCmsMagento" name="minHoursWebsiteCmsMagento" placeholder="Minimuim Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'min_hours_website_cms_magento' ))){ echo get_option( 'min_hours_website_cms_magento' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Page Hours</b>
            <input type="number" id="perPageHoursWebsiteCmsMagento" name="perPageHoursWebsiteCmsMagento" Placeholder="Per Page Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_page_hours_website_cms_magento' ))){ echo get_option( 'per_page_hours_website_cms_magento' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Product Hours</b>
            <input type="number" id="perProductHoursWebsiteCmsMagento" name="perProductHoursWebsiteCmsMagento" placeholder="Per Product Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_product_hours_website_cms_magento' ))){ echo get_option( 'per_product_hours_website_cms_magento' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Hour Rate</b>
            <input type="number" id="perHourRateWebsiteCmsMagento" name="perHourRateWebsiteCmsMagento" Placeholder="Per Hour Rate" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_hour_rate_website_cms_magento' ))){ echo get_option( 'per_hour_rate_website_cms_magento' );}else {echo '0';} ?>"></label>
            </div>
            </div>
			
			<div class="sub-sub-sub-content" >
            <input type="checkbox" class="sub-sub-marked" >
            <label class="check-label-settings">Drupal</label>
            <div class="sub-sub-sub-sub-content" style="display:none;">
          <label class="input-field-label"><b>Minimuim Hours</b>
            <input type="number" id="minHoursWebsiteCmsDrupal" name="minHoursWebsiteCmsDrupal" placeholder="Minimuim Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'min_hours_website_cms_drupal' ))){ echo get_option( 'min_hours_website_cms_drupal' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Page Hours</b>
            <input type="number" id="perPageHoursWebsiteCmsDrupal" name="perPageHoursWebsiteCmsDrupal" Placeholder="Per Page Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_page_hours_website_cms_drupal' ))){ echo get_option( 'per_page_hours_website_cms_drupal' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Product Hours</b>
            <input type="number" id="perProductHoursWebsiteCmsDrupal" name="perProductHoursWebsiteCmsDrupal" placeholder="Per Product Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_product_hours_website_cms_drupal' ))){ echo get_option( 'per_product_hours_website_cms_drupal' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Hour Rate</b>
            <input type="number" id="perHourRateWebsiteCmsDrupal" name="perHourRateWebsiteCmsDrupal" Placeholder="Per Hour Rate" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_hour_rate_website_cms_drupal' ))){ echo get_option( 'per_hour_rate_website_cms_drupal' );}else {echo '0';} ?>"></label>
            </div>
            </div>

        </div>      
 </div>
 <div class="sub-content" style="display:none;">
     <input type="checkbox" id="cms-website-development" name="cms-website-development"  class="sub-marked" value="cms-website-development">
     <label for="cms-website-development-label" class="check-label-settings">Custom Development</label>
    
        <div class="sub-sub-content" style="display:none;">

            <div class="sub-sub-sub-content" >
            <input type="checkbox" class="sub-sub-marked" >
            <label  class="check-label-settings">Front-end Development</label>
            <div class="sub-sub-sub-sub-content" style="display:none;">
             <input type="checkbox" class="sub-sub-sub-marked" >
            <label class="check-label-settings">HTML / CSS / Bootstrap</label>
				 <div class="sub-sub-sub-sub-sub-content" style="display:none;">
          <label class="input-field-label"><b>Minimuim Hours</b>
            <input type="number" id="minHoursWebsiteCustomHTMLCSSBootstrap" name="minHoursWebsiteCustomHTMLCSSBootstrap" placeholder="Minimuim Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_page_hours_website_custom_htmlCssBootstrap' ))){ echo get_option( 'min_hours_website_custom_htmlCssBootstrap' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Page Hours</b>
            <input type="number" id="perPageHoursWebsiteCustomHTMLCSSBootstrap" name="perPageHoursWebsiteCustomHTMLCSSBootstrap" Placeholder="Per Page Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_page_hours_website_custom_htmlCssBootstrap' ))){ echo get_option( 'per_page_hours_website_custom_htmlCssBootstrap' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Product Hours</b>
            <input type="number" id="perProductHoursWebsiteCustomHTMLCSSBootstrap" name="perProductHoursWebsiteCustomHTMLCSSBootstrap" placeholder="Per Product Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_product_hours_website_custom_htmlCssBootstrap' ))){ echo get_option( 'per_product_hours_website_custom_htmlCssBootstrap' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Hour Rate</b>
            <input type="number" id="perHourRateWebsiteCustomHTMLCSSBootstrap" name="perHourRateWebsiteCustomHTMLCSSBootstrap" Placeholder="Per Hour Rate" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_hour_rate_website_custom_htmlCssBootstrap' ))){ echo get_option( 'per_hour_rate_website_custom_htmlCssBootstrap' );}else {echo '0';} ?>"></label>
            </div>
            </div>
			   <div class="sub-sub-sub-sub-content" style="display:none;">
             <input type="checkbox" class="sub-sub-sub-marked" >
            <label class="check-label-settings">React Js</label>
				 <div class="sub-sub-sub-sub-sub-content" style="display:none;">
          <label class="input-field-label"><b>Minimuim Hours</b>
            <input type="number" id="minHoursWebsiteCustomReactJs" name="minHoursWebsiteCustomReactJs" placeholder="Minimuim Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'min_hours_website_custom_reactjs' ))){ echo get_option( 'min_hours_website_custom_reactjs' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Page Hours</b>
            <input type="number" id="perPageHoursWebsiteCustomReactJs" name="perPageHoursWebsiteCustomReactJs" Placeholder="Per Page Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_page_hours_website_custom_reactjs' ))){ echo get_option( 'per_page_hours_website_custom_reactjs' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Product Hours</b>
            <input type="number" id="perProductHoursWebsiteCustomReactJs" name="perProductHoursWebsiteCustomReactJs" placeholder="Per Product Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_product_hours_website_custom_reactjs' ))){ echo get_option( 'per_product_hours_website_custom_reactjs' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Hour Rate</b>
            <input type="number" id="perHourRateWebsiteCustomReactJs" name="perHourRateWebsiteCustomReactJs" Placeholder="Per Hour Rate" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_hour_rate_website_custom_reactjs' ))){ echo get_option( 'per_hour_rate_website_custom_reactjs' );}else {echo '0';} ?>"></label>
            </div>
            </div>
				   <div class="sub-sub-sub-sub-content" style="display:none;">
             <input type="checkbox" class="sub-sub-sub-marked" >
            <label class="check-label-settings">Angular Js</label>
				 <div class="sub-sub-sub-sub-sub-content" style="display:none;">
          <label class="input-field-label"><b>Minimuim Hours</b>
            <input type="number" id="minHoursWebsiteCustomAngularJs" name="minHoursWebsiteCustomAngularJs" placeholder="Minimuim Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'min_hours_website_custom_angularjs' ))){ echo get_option( 'min_hours_website_custom_angularjs' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Page Hours</b>
            <input type="number" id="perPageHoursWebsiteCustomAngularJs" name="perPageHoursWebsiteCustomAngularJs" Placeholder="Per Page Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_page_hours_website_custom_angularjs' ))){ echo get_option( 'per_page_hours_website_custom_angularjs' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Product Hours</b>
            <input type="number" id="perProductHoursWebsiteCustomAngularJs" name="perProductHoursWebsiteCustomAngularJs" placeholder="Per Product Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_product_hours_website_custom_angularjs' ))){ echo get_option( 'per_product_hours_website_custom_angularjs' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Hour Rate</b>
            <input type="number" id="perHourRateWebsiteCustomAngularJs" name="perHourRateWebsiteCustomAngularJs" Placeholder="Per Hour Rate" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_hour_rate_website_custom_angularjs' ))){ echo get_option( 'per_hour_rate_website_custom_angularjs' );}else {echo '0';} ?>"></label>
            </div>
            </div>
				   <div class="sub-sub-sub-sub-content" style="display:none;">
             <input type="checkbox" class="sub-sub-sub-marked" >
            <label class="check-label-settings">Vue Js</label>
				 <div class="sub-sub-sub-sub-sub-content" style="display:none;">
          <label class="input-field-label"><b>Minimuim Hours</b>
            <input type="number" id="minHoursWebsiteCustomVueJs" name="minHoursWebsiteCustomVueJs" placeholder="Minimuim Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'min_hours_website_custom_vuejs' ))){ echo get_option( 'min_hours_website_custom_vuejs' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Page Hours</b>
            <input type="number" id="perPageHoursWebsiteCustomVueJs" name="perPageHoursWebsiteCustomVueJs" Placeholder="Per Page Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_page_hours_website_custom_vuejs' ))){ echo get_option( 'per_page_hours_website_custom_vuejs' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Product Hours</b>
            <input type="number" id="perProductHoursWebsiteCustomVueJs" name="perProductHoursWebsiteCustomVueJs" placeholder="Per Product Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_product_hours_website_custom_vuejs' ))){ echo get_option( 'per_product_hours_website_custom_vuejs' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Hour Rate</b>
            <input type="number" id="perHourRateWebsiteCustomVueJs" name="perHourRateWebsiteCustomVueJs" Placeholder="Per Hour Rate" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_hour_rate_website_custom_vuejs' ))){ echo get_option( 'per_hour_rate_website_custom_vuejs' );}else {echo '0';} ?>"></label>
            </div>
            </div>
				
            </div>

            <div class="sub-sub-sub-content" >
            <input type="checkbox"  class="sub-sub-marked" >
            <label for="wordpress-cms-website-development-label" class="check-label-settings">Back-end Development</label>
          	   <div class="sub-sub-sub-sub-content" style="display:none;">
             <input type="checkbox" class="sub-sub-sub-marked" >
            <label class="check-label-settings">Python</label>
				 <div class="sub-sub-sub-sub-sub-content" style="display:none;">
          <label class="input-field-label"><b>Minimuim Hours</b>
            <input type="number" id="minHoursWebsiteCustomPython" name="minHoursWebsiteCustomPython" placeholder="Minimuim Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'min_hours_website_custom_python' ))){ echo get_option( 'min_hours_website_custom_python' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per API Hours</b>
            <input type="number" id="perApiHoursWebsiteCustomPython" name="perApiHoursWebsiteCustomPython" Placeholder="Per Api Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_api_hours_website_custom_python' ))){ echo get_option( 'per_api_hours_website_custom_python' );}else {echo '0';} ?>"></label>
          
            <label class="input-field-label"><b>Per Hour Rate</b>
            <input type="number" id="perHourRateWebsiteCustomPython" name="perHourRateWebsiteCustomPython" Placeholder="Per Hour Rate" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_hour_rate_website_custom_python' ))){ echo get_option( 'per_hour_rate_website_custom_python' );}else {echo '0';} ?>"></label>
            </div>
            </div>
					   <div class="sub-sub-sub-sub-content" style="display:none;">
             <input type="checkbox" class="sub-sub-sub-marked" >
            <label class="check-label-settings">Node Js</label>
				 <div class="sub-sub-sub-sub-sub-content" style="display:none;">
          <label class="input-field-label"><b>Minimuim Hours</b>
            <input type="number" id="minHoursWebsiteCustomNodeJs" name="minHoursWebsiteCustomNodeJs" placeholder="Minimuim Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'min_hours_website_custom_nodejs' ))){ echo get_option( 'min_hours_website_custom_nodejs' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per API Hours</b>
            <input type="number" id="perApiHoursWebsiteCustomNodeJs" name="perApiHoursWebsiteCustomNodeJs" Placeholder="Per Page Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_api_hours_website_custom_nodejs' ))){ echo get_option( 'per_api_hours_website_custom_nodejs' );}else {echo '0';} ?>"></label>
           
            <label class="input-field-label"><b>Per Hour Rate</b>
            <input type="number" id="perHourRateWebsiteCustomNodeJs" name="perHourRateWebsiteCustomNodeJs" Placeholder="Per Hour Rate" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_hour_rate_website_custom_nodejs' ))){ echo get_option( 'per_hour_rate_website_custom_nodejs' );}else {echo '0';} ?>"></label>
            </div>
            </div>
					   <div class="sub-sub-sub-sub-content" style="display:none;">
             <input type="checkbox" class="sub-sub-sub-marked" >
            <label class="check-label-settings">PHP</label>
				 <div class="sub-sub-sub-sub-sub-content" style="display:none;">
          <label class="input-field-label"><b>Minimuim Hours</b>
            <input type="number" id="minHoursWebsiteCustomPhp" name="minHoursWebsiteCustomPhp" placeholder="Minimuim Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'min_hours_website_custom_php' ))){ echo get_option( 'min_hours_website_custom_php' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per API Hours</b>
            <input type="number" id="perApiHoursWebsiteCustomPhp" name="perApiHoursWebsiteCustomPhp" Placeholder="Per Page Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_api_hours_website_custom_php' ))){ echo get_option( 'per_api_hours_website_custom_php' );}else {echo '0';} ?>"></label>
           
            <label class="input-field-label"><b>Per Hour Rate</b>
            <input type="number" id="perHourRateWebsiteCustomPhp" name="perHourRateWebsiteCustomPhp" Placeholder="Per Hour Rate" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_hour_rate_website_custom_php' ))){ echo get_option( 'per_hour_rate_website_custom_php' );}else {echo '0';} ?>"></label>
            </div>
            </div>
					   <div class="sub-sub-sub-sub-content" style="display:none;">
             <input type="checkbox" class="sub-sub-sub-marked" >
            <label class="check-label-settings">Ruby</label>
				 <div class="sub-sub-sub-sub-sub-content" style="display:none;">
          <label class="input-field-label"><b>Minimuim Hours</b>
            <input type="number" id="minHoursWebsiteCustomRuby" name="minHoursWebsiteCustomRuby" placeholder="Minimuim Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'min_hours_website_custom_ruby' ))){ echo get_option( 'min_hours_website_custom_ruby' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per API Hours</b>
            <input type="number" id="perApiHoursWebsiteCustomRuby" name="perApiHoursWebsiteCustomRuby" Placeholder="Per Page Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_api_hours_website_custom_ruby' ))){ echo get_option( 'per_api_hours_website_custom_ruby' );}else {echo '0';} ?>"></label>
          
            <label class="input-field-label"><b>Per Hour Rate</b>
            <input type="number" id="perHourRateWebsiteCustomRuby" name="perHourRateWebsiteCustomRuby" Placeholder="Per Hour Rate" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_hour_rate_website_custom_ruby' ))){ echo get_option( 'per_hour_rate_website_custom_ruby' );}else {echo '0';} ?>"></label>
            </div>
            </div>
					   <div class="sub-sub-sub-sub-content" style="display:none;">
             <input type="checkbox" class="sub-sub-sub-marked" >
            <label class="check-label-settings">C Sharp</label>
				 <div class="sub-sub-sub-sub-sub-content" style="display:none;">
          <label class="input-field-label"><b>Minimuim Hours</b>
            <input type="number" id="minHoursWebsiteCustomCSharp" name="minHoursWebsiteCustomCSharp" placeholder="Minimuim Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'min_hours_website_custom_csharp' ))){ echo get_option( 'min_hours_website_custom_csharp' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per API Hours</b>
            <input type="number" id="perApiHoursWebsiteCustomCSharp" name="perApiHoursWebsiteCustomCSharp" Placeholder="Per Page Hours" min="0" class="field-settings" value="<?php if(!empty(get_option('per_api_hours_website_custom_csharp' ))){ echo get_option( 'per_api_hours_website_custom_csharp' );}else {echo '0';} ?>"></label>
        
            <label class="input-field-label"><b>Per Hour Rate</b>
            <input type="number" id="perHourRateWebsiteCustomCSharp" name="perHourRateWebsiteCustomCSharp" Placeholder="Per Hour Rate" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_hour_rate_website_custom_csharp' ))){ echo get_option( 'per_hour_rate_website_custom_csharp' );}else {echo '0';} ?>"></label>
            </div>
            </div>
					   <div class="sub-sub-sub-sub-content" style="display:none;">
             <input type="checkbox" class="sub-sub-sub-marked" >
            <label class="check-label-settings">Java</label>
				 <div class="sub-sub-sub-sub-sub-content" style="display:none;">
          <label class="input-field-label"><b>Minimuim Hours</b>
            <input type="number" id="minHoursWebsiteCustomJava" name="minHoursWebsiteCustomJava" placeholder="Minimuim Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'min_hours_website_custom_java' ))){ echo get_option( 'min_hours_website_custom_java' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per API Hours</b>
            <input type="number" id="perApiHoursWebsiteCustomJava" name="perApiHoursWebsiteCustomJava" Placeholder="Per Page Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_api_hours_website_custom_java' ))){ echo get_option( 'per_api_hours_website_custom_java' );}else {echo '0';} ?>"></label>
       
            <label class="input-field-label"><b>Per Hour Rate</b>
            <input type="number" id="perHourRateWebsiteCustomJava" name="perHourRateWebsiteCustomJava" Placeholder="Per Hour Rate" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_hour_rate_website_custom_java' ))){ echo get_option( 'per_hour_rate_website_custom_java' );}else {echo '0';} ?>"></label>
            </div>
            </div>
				
            </div>

        </div>      
 </div>
	  <div class="sub-content" style="display:none;">
        <input type="checkbox" id="cms-website-development" name="cms-website-development"  class="sub-marked" value="cms-website-development">
        <label for="cms-website-development-label" class="check-label-settings">Maintenance</label>

        <div class="sub-sub-content" style="display:none;">

            <div class="sub-sub-sub-content" >
            <input type="checkbox" class="sub-sub-marked" >
            <label class="check-label-settings">Bug Fixing and Security Updates</label>
            <div class="sub-sub-sub-sub-content" style="display:none;">
            <label class="input-field-label"><b>Minimuim Hours</b>
            <input type="number" id="minHoursWebsiteMaintenanceBugFix" name="minHoursWebsiteMaintenanceBugFix" placeholder="Minimuim Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'min_hours_website_maintenance_bugfix' ))){ echo get_option( 'min_hours_website_maintenance_bugfix' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Fix Hours</b>
            <input type="number" id="perFixHoursWebsiteMaintenanceBugFix" name="perFixHoursWebsiteMaintenanceBugFix" Placeholder="Per Fix Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_fix_hours_website_maintenance_bugfix' ))){ echo get_option( 'per_fix_hours_website_maintenance_bugfix' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Hour Rate</b>
            <input type="number" id="perHourRateWebsiteMaintenanceBugFix" name="perHourRateWebsiteMaintenanceBugFix" Placeholder="Per Hour Rate" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_hour_rate_website_maintenance_bugfix' ))){ echo get_option( 'per_hour_rate_website_maintenance_bugfix' );}else {echo '0';} ?>"></label>
            </div>
            </div>

            <div class="sub-sub-sub-content" >
            <input type="checkbox" class="sub-sub-marked" >
            <label class="check-label-settings">Migration / Backup</label>
            <div class="sub-sub-sub-sub-content" style="display:none;">
          <label class="input-field-label"><b>Minimuim Hours</b>
            <input type="number" id="minHoursWebsiteMaintenanceBackup" name="minHoursWebsiteMaintenanceBackup" placeholder="Minimuim Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'min_hours_website_maintenance_backup' ))){ echo get_option( 'min_hours_website_maintenance_backup' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Site Hours</b>
            <input type="number" id="perSiteHoursWebsiteMaintenanceBackup" name="perSiteHoursWebsiteMaintenanceBackup" Placeholder="Per Site Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_site_hours_website_maintenance_backup' ))){ echo get_option( 'per_site_hours_website_maintenance_backup' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Hour Rate</b>
            <input type="number" id="perHourRateWebsiteMaintenanceBackup" name="perHourRateWebsiteMaintenanceBackup" Placeholder="Per Hour Rate" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_hour_rate_website_maintenance_backup' ))){ echo get_option( 'per_hour_rate_website_maintenance_backup' );}else {echo '0';} ?>"></label>
            </div>
            </div>
			
			<div class="sub-sub-sub-content" >
            <input type="checkbox" class="sub-sub-marked" >
            <label class="check-label-settings">Additional Feature</label>
            <div class="sub-sub-sub-sub-content" style="display:none;">
          <label class="input-field-label"><b>Minimuim Hours</b>
            <input type="number" id="minHoursWebsiteMaintenanceFeature" name="minHoursWebsiteMaintenanceFeature" placeholder="Minimuim Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'min_hours_website_maintenance_feature' ))){ echo get_option( 'min_hours_website_maintenance_feature' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Feature Hours</b>
            <input type="number" id="perFeatureHoursWebsiteMaintenanceFeature" name="perFeatureHoursWebsiteMaintenanceFeature" Placeholder="Per Feature Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_feature_hours_website_maintenance_feature' ))){ echo get_option( 'per_feature_hours_website_maintenance_feature' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Hour Rate</b>
            <input type="number" id="perHourRateWebsiteMaintenanceFeature" name="perHourRateWebsiteMaintenanceFeature" Placeholder="Per Hour Rate" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_hour_rate_website_maintenance_feature' ))){ echo get_option( 'per_hour_rate_website_maintenance_feature' );}else {echo '0';} ?>"></label>
            </div>
            </div>
			

        </div>      
 </div>
</div>


<div class="mobile-development main-content">
 <input type="checkbox" id="mobile-development" name="mobile-development" class="marked" value="website-development">
 <label for="mobile-development-label" class="check-label-settings">Mobile App Development</label>

    <div class="sub-content" style="display:none;">
        <input type="checkbox" name="cms-website-development"  class="sub-marked" >
        <label for="cms-website-development-label" class="check-label-settings">Android Apps</label>

        <div class="sub-sub-content" style="display:none;">

            <div class="sub-sub-sub-content" >
            <input type="checkbox" id="wordpress-cms-website-development" name="wordpress-cms-website-development" class="sub-sub-marked" value="wordpress-cms-website-development">
            <label for="wordpress-cms-website-development-label" class="check-label-settings">Java</label>
              <div class="sub-sub-sub-sub-content" style="display:none;">
          <label class="input-field-label"><b>Minimuim Hours</b>
            <input type="number" id="minHoursMobileAndroidJava" name="minHoursMobileAndroidJava" placeholder="Minimuim Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'min_hours_mobile_android_java' ))){ echo get_option( 'min_hours_mobile_android_java' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Screen Hours</b>
            <input type="number" id="perScreenHoursMobileAndroidJava" name="perScreenHoursMobileAndroidJava" Placeholder="Per Screen Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_screen_hours_mobile_android_java' ))){ echo get_option( 'per_screen_hours_mobile_android_java' );}else {echo '0';} ?>"></label>
				       <label class="input-field-label"><b>Ads Integration Hours</b>
            <input type="number" id="adsIntegrationHoursMobileAndroidJava" name="adsIntegrationHoursMobileAndroidJava" Placeholder="Ads Integration Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'ads_integration_hours_mobile_android_java' ))){ echo get_option( 'ads_integration_hours_mobile_android_java' );}else {echo '0';} ?>"></label>
				       <label class="input-field-label"><b>In-App Purchase Hours</b>
            <input type="number" id="inAppPurchaseHoursMobileAndroidJava" name="inAppPurchaseHoursMobileAndroidJava" Placeholder="In-App Purchase Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'in_app_purchase_hours_mobile_android_java' ))){ echo get_option( 'in_app_purchase_hours_mobile_android_java' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Hour Rate</b>
            <input type="number" id="perHourRateMobileAndroidJava" name="perHourRateMobileAndroidJava" Placeholder="Per Hour Rate" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_hour_rate_mobile_android_java' ))){ echo get_option( 'per_hour_rate_mobile_android_java' );}else {echo '0';} ?>"></label>
            </div>
            </div>
          <div class="sub-sub-sub-content" >
            <input type="checkbox" id="wordpress-cms-website-development" name="wordpress-cms-website-development" class="sub-sub-marked" value="wordpress-cms-website-development">
            <label for="wordpress-cms-website-development-label" class="check-label-settings">Kotlin</label>
               <div class="sub-sub-sub-sub-content" style="display:none;">
             <label class="input-field-label"><b>Minimuim Hours</b>
            <input type="number" id="minHoursMobileAndroidKotlin" name="minHoursMobileAndroidKotlin" placeholder="Minimuim Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'min_hours_mobile_android_kotlin' ))){ echo get_option( 'min_hours_mobile_android_kotlin' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Screen Hours</b>
            <input type="number" id="perScreenHoursMobileAndroidKotlin" name="perScreenHoursMobileAndroidKotlin" Placeholder="Per Screen Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_screen_hours_mobile_android_kotlin' ))){ echo get_option( 'per_screen_hours_mobile_android_kotlin' );}else {echo '0';} ?>"></label>
				       <label class="input-field-label"><b>Ads Integration Hours</b>
            <input type="number" id="adsIntegrationHoursMobileAndroidKotlin" name="adsIntegrationHoursMobileAndroidKotlin" Placeholder="Ads Integration Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'ads_integration_hours_mobile_android_kotlin' ))){ echo get_option( 'ads_integration_hours_mobile_android_kotlin' );}else {echo '0';} ?>"></label>
				       <label class="input-field-label"><b>In-App Purchase Hours</b>
            <input type="number" id="inAppPurchaseHoursMobileAndroidKotlin" name="inAppPurchaseHoursMobileAndroidKotlin" Placeholder="In-App Purchase Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'in_app_purchase_hours_mobile_android_kotlin' ))){ echo get_option( 'in_app_purchase_hours_mobile_android_kotlin' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Hour Rate</b>
            <input type="number" id="perHourRateMobileAndroidKotlin" name="perHourRateMobileAndroidKotlin" Placeholder="Per Hour Rate" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_hour_rate_mobile_android_kotlin' ))){ echo get_option('per_hour_rate_mobile_android_kotlin' );}else {echo '0';} ?>"></label>
            </div>
            </div>

        </div>      
 </div>
	
 <div class="sub-content" style="display:none;">
        <input type="checkbox" name="cms-website-development"  class="sub-marked" >
        <label for="cms-website-development-label" class="check-label-settings">IOS Apps</label>

        <div class="sub-sub-content" style="display:none;">

            <div class="sub-sub-sub-content" >
            <input type="checkbox" id="wordpress-cms-website-development" name="wordpress-cms-website-development" class="sub-sub-marked" value="wordpress-cms-website-development">
            <label for="wordpress-cms-website-development-label" class="check-label-settings">Swift</label>
                <div class="sub-sub-sub-sub-content" style="display:none;">
             <label class="input-field-label"><b>Minimuim Hours</b>
            <input type="number" id="minHoursMobileIosSwift" name="minHoursMobileIosSwift" placeholder="Minimuim Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'min_hours_mobile_ios_swift' ))){ echo get_option( 'min_hours_mobile_ios_swift' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Screen Hours</b>
            <input type="number" id="perScreenHoursMobileIosSwift" name="perScreenHoursMobileIosSwift" Placeholder="Per Screen Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_screen_hours_mobile_ios_swift' ))){ echo get_option( 'per_screen_hours_mobile_ios_swift' );}else {echo '0';} ?>"></label>
				       <label class="input-field-label"><b>Ads Integration Hours</b>
            <input type="number" id="adsIntegrationHoursMobileIosSwift" name="adsIntegrationHoursMobileIosSwift" Placeholder="Ads Integration Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'ads_integration_hours_mobile_ios_swift' ))){ echo get_option( 'ads_integration_hours_mobile_ios_swift' );}else {echo '0';} ?>"></label>
				       <label class="input-field-label"><b>In-App Purchase Hours</b>
            <input type="number" id="inAppPurchaseHoursMobileIosSwift" name="inAppPurchaseHoursMobileIosSwift" Placeholder="In-App Purchase Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'in_app_purchase_hours_mobile_ios_swift' ))){ echo get_option( 'in_app_purchase_hours_mobile_ios_swift' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Hour Rate</b>
            <input type="number" id="perHourRateMobileIosSwift" name="perHourRateMobileIosSwift" Placeholder="Per Hour Rate" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_hour_rate_mobile_ios_swift' ))){ echo get_option( 'per_hour_rate_mobile_ios_swift' );}else {echo '0';} ?>"></label>
            </div>
            </div>
          <div class="sub-sub-sub-content" >
            <input type="checkbox" id="wordpress-cms-website-development" name="wordpress-cms-website-development" class="sub-sub-marked" value="wordpress-cms-website-development">
            <label for="wordpress-cms-website-development-label" class="check-label-settings">Objective C</label>
              <div class="sub-sub-sub-sub-content" style="display:none;">
           <label class="input-field-label"><b>Minimuim Hours</b>
            <input type="number" id="minHoursMobileIosObjectiveC" name="minHoursMobileIosObjectiveC" placeholder="Minimuim Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'min_hours_mobile_ios_objective_c' ))){ echo get_option( 'min_hours_mobile_ios_objective_c' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Screen Hours</b>
            <input type="number" id="perScreenHoursMobileIosObjectiveC" name="perScreenHoursMobileIosObjectiveC" Placeholder="Per Screen Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_screen_hours_mobile_ios_objective_c' ))){ echo get_option('per_screen_hours_mobile_ios_objective_c' );}else {echo '0';} ?>"></label>
				       <label class="input-field-label"><b>Ads Integration Hours</b>
            <input type="number" id="adsIntegrationHoursMobileIosObjectiveC" name="adsIntegrationHoursMobileIosObjectiveC" Placeholder="Ads Integration Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'ads_integration_hours_mobile_ios_objective_c' ))){ echo get_option( 'ads_integration_hours_mobile_ios_objective_c' );}else {echo '0';} ?>"></label>
				       <label class="input-field-label"><b>In-App Purchase Hours</b>
            <input type="number" id="inAppPurchaseHoursMobileIosObjectiveC" name="inAppPurchaseHoursMobileIosObjectiveC" Placeholder="In-App Purchase Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'in_app_purchase_hours_mobile_ios_objective_c' ))){ echo get_option( 'in_app_purchase_hours_mobile_ios_objective_c' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Hour Rate</b>
            <input type="number" id="perHourRateMobileIosObjectiveC" name="perHourRateMobileIosObjectiveC" Placeholder="Per Hour Rate" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_hour_rate_mobile_ios_objective_c' ))){ echo get_option( 'per_hour_rate_mobile_ios_objective_c' );}else {echo '0';} ?>"></label>
            </div>
            </div>

        </div>      
 </div>
	
 <div class="sub-content" style="display:none;">
        <input type="checkbox" name="cms-website-development"  class="sub-marked" >
        <label for="cms-website-development-label" class="check-label-settings">Hybrid Apps</label>

        <div class="sub-sub-content" style="display:none;">
 <div class="sub-sub-sub-content" >
            <input type="checkbox"  class="sub-sub-marked" >
            <label for="wordpress-cms-website-development-label" class="check-label-settings">React Native</label>
          	 
				
			<div class="sub-sub-sub-sub-content" style="display:none;">
             <input type="checkbox" class="sub-sub-sub-marked" >
            <label class="check-label-settings">IOS</label>
				 <div class="sub-sub-sub-sub-sub-content" style="display:none;">
             <label class="input-field-label"><b>Minimuim Hours</b>
            <input type="number" id="minHoursMobileHybridReactNativeIOS" name="minHoursMobileHybridReactNativeIOS" placeholder="Minimuim Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'min_hours_mobile_hybrid_react_native_ios' ))){ echo get_option( 'min_hours_mobile_hybrid_react_native_ios' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Screen Hours</b>
            <input type="number" id="perScreenHoursMobileHybridReactNativeIOS" name="perScreenHoursMobileHybridReactNativeIOS" Placeholder="Per Screen Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_screen_hours_hybrid_react_native_ios' ))){ echo get_option( 'per_screen_hours_hybrid_react_native_ios' );}else {echo '0';} ?>"></label>
				       <label class="input-field-label"><b>Ads Integration Hours</b>
            <input type="number" id="adsIntegrationHoursMobileHybridReactNativeIOS" name="adsIntegrationHoursMobileHybridReactNativeIOS" Placeholder="Ads Integration Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'ads_integration_hours_mobile_hybrid_react_native_ios' ))){ echo get_option( 'ads_integration_hours_mobile_hybrid_react_native_ios' );}else {echo '0';} ?>"></label>
				       <label class="input-field-label"><b>In-App Purchase Hours</b>
            <input type="number" id="inAppPurchaseHoursMobileHybridReactNativeIOS" name="inAppPurchaseHoursMobileHybridReactNativeIOS" Placeholder="In-App Purchase Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'in_app_purchase_hours_mobile_hybrid_react_native_ios' ))){ echo get_option( 'in_app_purchase_hours_mobile_hybrid_react_native_ios' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Hour Rate</b>
            <input type="number" id="perHourRateMobileHybridReactNativeIOS" name="perHourRateMobileHybridReactNativeIOS" Placeholder="Per Hour Rate" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_hour_rate_mobile_hybrid_react_native_ios' ))){ echo get_option( 'per_hour_rate_mobile_hybrid_react_native_ios' );}else {echo '0';} ?>"></label>
            </div>
            </div>
					   <div class="sub-sub-sub-sub-content" style="display:none;">
             <input type="checkbox" class="sub-sub-sub-marked" >
            <label class="check-label-settings">Android</label>
				 <div class="sub-sub-sub-sub-sub-content" style="display:none;">
                <label class="input-field-label"><b>Minimuim Hours</b>
            <input type="number" id="minHoursMobileHybridReactNativeAndroid" name="minHoursMobileHybridReactNativeAndroid" placeholder="Minimuim Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'min_hours_mobile_hybrid_react_native_android' ))){ echo get_option( 'min_hours_mobile_hybrid_react_native_android' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Screen Hours</b>
            <input type="number" id="perScreenHoursMobileHybridReactNativeAndroid" name="perScreenHoursMobileHybridReactNativeAndroid" Placeholder="Per Screen Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_screen_hours_hybrid_react_native_android' ))){ echo get_option( 'per_screen_hours_hybrid_react_native_android' );}else {echo '0';} ?>"></label>
				       <label class="input-field-label"><b>Ads Integration Hours</b>
            <input type="number" id="adsIntegrationHoursMobileHybridReactNativeAndroid" name="adsIntegrationHoursMobileHybridReactNativeAndroid" Placeholder="Ads Integration Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'ads_integration_hours_mobile_hybrid_react_native_android' ))){ echo get_option( 'ads_integration_hours_mobile_hybrid_react_native_android' );}else {echo '0';} ?>"></label>
				       <label class="input-field-label"><b>In-App Purchase Hours</b>
            <input type="number" id="inAppPurchaseHoursMobileHybridReactNativeAndroid" name="inAppPurchaseHoursMobileHybridReactNativeAndroid" Placeholder="In-App Purchase Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'in_app_purchase_hours_mobile_hybrid_react_native_android' ))){ echo get_option( 'in_app_purchase_hours_mobile_hybrid_react_native_android' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Hour Rate</b>
            <input type="number" id="perHourRateMobileHybridReactNativeAndroid" name="perHourRateMobileHybridReactNativeAndroid" Placeholder="Per Hour Rate" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_hour_rate_mobile_hybrid_react_native_android' ))){ echo get_option( 'per_hour_rate_mobile_hybrid_react_native_android' );}else {echo '0';} ?>"></label>
            </div>
            </div>
            </div>
			 <div class="sub-sub-sub-content" >
            <input type="checkbox"  class="sub-sub-marked" >
            <label for="wordpress-cms-website-development-label" class="check-label-settings">Flutter</label>
          	 
				
			<div class="sub-sub-sub-sub-content" style="display:none;">
             <input type="checkbox" class="sub-sub-sub-marked" >
            <label class="check-label-settings">IOS</label>
				 <div class="sub-sub-sub-sub-sub-content" style="display:none;">
         <label class="input-field-label"><b>Minimuim Hours</b>
            <input type="number" id="minHoursMobileHybridFlutterIOS" name="minHoursMobileHybridFlutterIOS" placeholder="Minimuim Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'min_hours_mobile_hybrid_flutter_ios' ))){ echo get_option( 'min_hours_mobile_hybrid_flutter_ios' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Screen Hours</b>
            <input type="number" id="perScreenHoursMobileHybridFlutterIOS" name="perScreenHoursMobileHybridFlutterIOS" Placeholder="Per Screen Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_screen_hours_mobile_hybrid_flutter_ios' ))){ echo get_option( 'per_screen_hours_mobile_hybrid_flutter_ios' );}else {echo '0';} ?>"></label>
				       <label class="input-field-label"><b>Ads Integration Hours</b>
            <input type="number" id="adsIntegrationHoursMobileHybridFlutterIOS" name="adsIntegrationHoursMobileHybridFlutterIOS" Placeholder="Ads Integration Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'ads_integration_hours_mobile_hybrid_flutter_ios' ))){ echo get_option( 'ads_integration_hours_mobile_hybrid_flutter_ios' );}else {echo '0';} ?>"></label>
				       <label class="input-field-label"><b>In-App Purchase Hours</b>
            <input type="number" id="inAppPurchaseHoursMobileHybridFlutterIOS" name="inAppPurchaseHoursMobileHybridFlutterIOS" Placeholder="In-App Purchase Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'in_app_purchase_hours_mobile_hybrid_flutter_ios' ))){ echo get_option( 'in_app_purchase_hours_mobile_hybrid_flutter_ios' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Hour Rate</b>
            <input type="number" id="perHourRateMobileHybridFlutterIOS" name="perHourRateMobileHybridFlutterIOS" Placeholder="Per Hour Rate" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_hour_rate_mobile_hybrid_flutter_ios' ))){ echo get_option( 'per_hour_rate_mobile_hybrid_flutter_ios' );}else {echo '0';} ?>"></label>
            </div>
            </div>
					   <div class="sub-sub-sub-sub-content" style="display:none;">
             <input type="checkbox" class="sub-sub-sub-marked" >
            <label class="check-label-settings">Android</label>
				 <div class="sub-sub-sub-sub-sub-content" style="display:none;">
               <label class="input-field-label"><b>Minimuim Hours</b>
            <input type="number" id="minHoursMobileHybridFlutterAndroid" name="minHoursMobileHybridFlutterAndroid" placeholder="Minimuim Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'min_hours_mobile_hybrid_flutter_android' ))){ echo get_option( 'min_hours_mobile_hybrid_flutter_android' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Screen Hours</b>
            <input type="number" id="perScreenHoursMobileHybridFlutterAndroid" name="perScreenHoursMobileHybridFlutterAndroid" Placeholder="Per Screen Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_screen_hours_mobile_hybrid_flutter_android' ))){ echo get_option( 'per_screen_hours_mobile_hybrid_flutter_android' );}else {echo '0';} ?>"></label>
				       <label class="input-field-label"><b>Ads Integration Hours</b>
            <input type="number" id="adsIntegrationHoursMobileHybridFlutterAndroid" name="adsIntegrationHoursMobileHybridFlutterAndroid" Placeholder="Ads Integration Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'ads_integration_hours_mobile_hybrid_flutter_android' ))){ echo get_option( 'ads_integration_hours_mobile_hybrid_flutter_android' );}else {echo '0';} ?>"></label>
				       <label class="input-field-label"><b>In-App Purchase Hours</b>
            <input type="number" id="inAppPurchaseHoursMobileHybridFlutterAndroid" name="inAppPurchaseHoursMobileHybridFlutterAndroid" Placeholder="In-App Purchase Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'in_app_purchase_hours_mobile_hybrid_flutter_android' ))){ echo get_option( 'in_app_purchase_hours_mobile_hybrid_flutter_android' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Hour Rate</b>
            <input type="number" id="perHourRateMobileHybridFlutterAndroid" name="perHourRateMobileHybridFlutterAndroid" Placeholder="Per Hour Rate" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_hour_rate_mobile_hybrid_flutter_android' ))){ echo get_option( 'per_hour_rate_mobile_hybrid_flutter_android' );}else {echo '0';} ?>"></label>
            </div>
            </div>
            </div>
        

        </div>      
 </div>
 <div class="sub-content" style="display:none;">
         <input type="checkbox" name="cms-website-development"  class="sub-marked" >
        <label for="cms-website-development-label" class="check-label-settings">Games / Unity</label>

            <div class="sub-sub-content" style="display:none;">
         <label class="input-field-label"><b>Minimuim Hours</b>
            <input type="number" id="minHoursMobileGamesUnity" name="minHoursMobileGamesUnity" placeholder="Minimuim Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'min_hours_mobile_games_unity' ))){ echo get_option( 'min_hours_mobile_games_unity' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Screen Hours</b>
            <input type="number" id="perScreenHoursMobileGamesUnity" name="perScreenHoursMobileGamesUnity" Placeholder="Per Screen Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_screen_hours_mobile_games_unity' ))){ echo get_option( 'per_screen_hours_mobile_games_unity' );}else {echo '0';} ?>"></label>
				       <label class="input-field-label"><b>Ads Integration Hours</b>
            <input type="number" id="adsIntegrationHoursMobileGamesUnity" name="adsIntegrationHoursMobileGamesUnity" Placeholder="Ads Integration Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'ads_integration_hours_mobile_games_unity' ))){ echo get_option( 'ads_integration_hours_mobile_games_unity' );}else {echo '0';} ?>"></label>
				       <label class="input-field-label"><b>In-App Purchase Hours</b>
            <input type="number" id="inAppPurchaseHoursMobileGamesUnity" name="inAppPurchaseHoursMobileGamesUnity" Placeholder="In-App Purchase Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'in_app_purchase_hours_mobile_games_unity' ))){ echo get_option( 'in_app_purchase_hours_mobile_games_unity' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Hour Rate</b>
            <input type="number" id="perHourRateMobileGamesUnity" name="perHourRateMobileGamesUnity" Placeholder="Per Hour Rate" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_hour_rate_mobile_games_unity' ))){ echo get_option( 'per_hour_rate_mobile_games_unity' );}else {echo '0';} ?>"></label>
            </div>
            </div>
</div>
	
	<div class="website-development main-content">
 <input type="checkbox" id="website-development" name="website-development" class="marked" value="website-development">
 <label for="website-development-label" class="check-label-settings">Desktop App Development</label>


      <div class="sub-content" style="display:none;">
         <input type="checkbox" name="cms-website-development"  class="sub-marked" >
        <label for="cms-website-development-label" class="check-label-settings">Java</label>

            <div class="sub-sub-content" style="display:none;">
            <label class="input-field-label"><b>Minimuim Hours</b>
            <input type="number" id="minHoursDesktopJava" name="minHoursDesktopJava" placeholder="Minimuim Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'min_hours_desktop_java' ))){ echo get_option( 'min_hours_desktop_java' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Component Hours</b>
            <input type="number" id="perScreenHoursDesktopJava" name="perScreenHoursDesktopJava" Placeholder="Per Component Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_screen_hours_desktop_java' ))){ echo get_option( 'per_screen_hours_desktop_java' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Hour Rate</b>
            <input type="number" id="perHourRateDesktopJava" name="perHourRateDesktopJava" Placeholder="Per Hour Rate" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_hour_rate_desktop_java' ))){ echo get_option( 'per_hour_rate_desktop_java' );}else {echo '0';} ?>"></label>
            </div>
            </div>  
  <div class="sub-content" style="display:none;">
         <input type="checkbox" name="cms-website-development"  class="sub-marked" >
        <label for="cms-website-development-label" class="check-label-settings">JavaScript</label>

            <div class="sub-sub-content" style="display:none;">
           <label class="input-field-label"><b>Minimuim Hours</b>
            <input type="number" id="minHoursDesktopJavaScript" name="minHoursDesktopJavaScript" placeholder="Minimuim Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'min_hours_desktop_javascript' ))){ echo get_option( 'min_hours_desktop_javascript' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Component Hours</b>
            <input type="number" id="perScreenHoursDesktopJavaScript" name="perScreenHoursDesktopJavaScript" Placeholder="Per Component Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_screen_hours_desktop_javascript' ))){ echo get_option( 'per_screen_hours_desktop_javascript' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Hour Rate</b>
            <input type="number" id="perHourRateDesktopJavaScript" name="perHourRateDesktopJavaScript" Placeholder="Per Hour Rate" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_hour_rate_desktop_javascript' ))){ echo get_option( 'per_hour_rate_desktop_javascript' );}else {echo '0';} ?>"></label>
            </div>
            </div>  
		  <div class="sub-content" style="display:none;">
         <input type="checkbox" name="cms-website-development"  class="sub-marked" >
        <label for="cms-website-development-label" class="check-label-settings">C Sharp</label>

            <div class="sub-sub-content" style="display:none;">
         <label class="input-field-label"><b>Minimuim Hours</b>
            <input type="number" id="minHoursDesktopCSharp" name="minHoursDesktopCSharp" placeholder="Minimuim Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'min_hours_desktop_csharp' ))){ echo get_option( 'min_hours_desktop_csharp' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Component Hours</b>
            <input type="number" id="perScreenHoursDesktopCSharp" name="perScreenHoursDesktopCSharp" Placeholder="Per Component Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_screen_hours_desktop_csharp' ))){ echo get_option( 'per_screen_hours_desktop_csharp' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Hour Rate</b>
            <input type="number" id="perHourRateDesktopCSharp" name="perHourRateDesktopCSharp" Placeholder="Per Hour Rate" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_hour_rate_desktop_csharp' ))){ echo get_option( 'per_hour_rate_desktop_csharp' );}else {echo '0';} ?>"></label>
            </div>
            </div>  
		  <div class="sub-content" style="display:none;">
         <input type="checkbox" name="cms-website-development"  class="sub-marked" >
        <label for="cms-website-development-label" class="check-label-settings">Kotlin</label>

            <div class="sub-sub-content" style="display:none;">
 <label class="input-field-label"><b>Minimuim Hours</b>
            <input type="number" id="minHoursDesktopKotlin" name="minHoursDesktopKotlin" placeholder="Minimuim Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'min_hours_desktop_kotlin' ))){ echo get_option( 'min_hours_desktop_kotlin' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Component Hours</b>
            <input type="number" id="perScreenHoursDesktopKotlin" name="perScreenHoursDesktopKotlin" Placeholder="Per Component Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_screen_hours_desktop_kotlin' ))){ echo get_option( 'per_screen_hours_desktop_kotlin' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Hour Rate</b>
            <input type="number" id="perHourRateDesktopKotlin" name="perHourRateDesktopKotlin" Placeholder="Per Hour Rate" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_hour_rate_desktop_kotlin' ))){ echo get_option( 'per_hour_rate_desktop_kotlin' );}else {echo '0';} ?>"></label>
            </div>
            </div>  
		  <div class="sub-content" style="display:none;">
         <input type="checkbox" name="cms-website-development"  class="sub-marked" >
        <label for="cms-website-development-label" class="check-label-settings">Python</label>

            <div class="sub-sub-content" style="display:none;">
       <label class="input-field-label"><b>Minimuim Hours</b>
            <input type="number" id="minHoursDesktopPython" name="minHoursDesktopPython" placeholder="Minimuim Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'min_hours_desktop_python' ))){ echo get_option( 'min_hours_desktop_python' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Component Hours</b>
            <input type="number" id="perScreenHoursDesktopPython" name="perScreenHoursDesktopPython" Placeholder="Per Component Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_screen_hours_desktop_python' ))){ echo get_option( 'per_screen_hours_desktop_python' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Hour Rate</b>
            <input type="number" id="perHourRateDesktopPython" name="perHourRateDesktopPython" Placeholder="Per Hour Rate" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_hour_rate_desktop_python' ))){ echo get_option( 'per_hour_rate_desktop_python' );}else {echo '0';} ?>"></label>
            </div>
            </div>  
		


</div>

<input type="submit" class="button btn-sett" name="submit" value="Save Settings" >
</form>