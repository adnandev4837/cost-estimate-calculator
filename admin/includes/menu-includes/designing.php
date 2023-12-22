<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	//Designing>Website Designing
    $minHourWebsiteDesigning = sanitize_text_field($_POST["minHourWebsiteDesigning"]);
    $perWebPageDesignHoursWebsiteDesigning = sanitize_text_field($_POST["perWebPageDesignHoursWebsiteDesigning"]);
    $perDesignConceptWireframeHoursWebsiteDesigning = sanitize_text_field($_POST["perDesignConceptWireframeHoursWebsiteDesigning"]);
    $perBannerSliderImageHoursWebsiteDesigning = sanitize_text_field($_POST["perBannerSliderImageHoursWebsiteDesigning"]);
	$perVideohoursWebsiteDesigning = sanitize_text_field($_POST["perVideohoursWebsiteDesigning"]);
    $perHourRateWebsiteDesigning = sanitize_text_field($_POST["perHourRateWebsiteDesigning"]);
    update_option( 'min_hours_website_designing', $minHourWebsiteDesigning ); 
    update_option( 'per_web_page_design_hours_website_designing', $perWebPageDesignHoursWebsiteDesigning ); 
    update_option( 'per_design_concept_wireframe_hours_website_designing', $perDesignConceptWireframeHoursWebsiteDesigning ); 
    update_option( 'per_banner_slider_image_hours_website_designing', $perBannerSliderImageHoursWebsiteDesigning ); 
	update_option( 'per_video_hours_website_designing', $perVideohoursWebsiteDesigning ); 
    update_option( 'per_hour_rate_website_designing', $perHourRateWebsiteDesigning ); 
	
	//Designing>Mobile App Designing
    $minHourMobileDesigning = sanitize_text_field($_POST["minHourMobileDesigning"]);
    $perMobilePageDesignHoursMobileDesigning = sanitize_text_field($_POST["perMobilePageDesignHoursMobileDesigning"]);
    $perDesignConceptWireframeHoursMobileDesigning = sanitize_text_field($_POST["perDesignConceptWireframeHoursMobileDesigning"]);
    $perBannerSliderImageHoursMobileDesigning = sanitize_text_field($_POST["perBannerSliderImageHoursMobileDesigning"]);
	$perVideohoursMobileDesigning= sanitize_text_field($_POST["perVideohoursMobileDesigning"]);
    $perHourRateMobileDesigning= sanitize_text_field($_POST["perHourRateMobileDesigning"]);
    update_option( 'min_hours_mobile_designing', $minHourMobileDesigning ); 
    update_option( 'per_mobile_page_design_hours_mobile_designing', $perMobilePageDesignHoursMobileDesigning); 
    update_option( 'per_design_concept_wireframe_hours_mobile_designing', $perDesignConceptWireframeHoursMobileDesigning ); 
    update_option( 'per_banner_slider_image_hours_mobile_designing', $perBannerSliderImageHoursMobileDesigning ); 
	update_option( 'per_video_hours_mobile_designing', $perVideohoursMobileDesigning ); 
    update_option( 'per_hour_rate_mobile_designing', $perHourRateMobileDesigning); 
	
	//Designing> Desktop App Designing
    $minHourDesktopDesigning = sanitize_text_field($_POST["minHourDesktopDesigning"]);
    $perPageDesignHoursDesktopDesigning = sanitize_text_field($_POST["perPageDesignHoursDesktopDesigning"]);
    $perDesignConceptWireframeHoursDesktopDesigning= sanitize_text_field($_POST["perDesignConceptWireframeHoursDesktopDesigning"]);
    $perBannerSliderImageHoursDesktopDesigning = sanitize_text_field($_POST["perBannerSliderImageHoursDesktopDesigning"]);
	$perVideohoursDesktopDesigning= sanitize_text_field($_POST["perVideohoursDesktopDesigning"]);
    $perHourRateDesktopDesigning = sanitize_text_field($_POST["perHourRateDesktopDesigning"]);
    update_option( 'min_hours_desktop_designing', $minHourDesktopDesigning ); 
    update_option( 'per_page_design_hours_desktop_designing', $perPageDesignHoursDesktopDesigning); 
    update_option( 'per_design_concept_wireframe_hours_desktop_designing', $perDesignConceptWireframeHoursDesktopDesigning ); 
    update_option( 'per_banner_slider_image_hours_desktop_designing', $perBannerSliderImageHoursDesktopDesigning ); 
	update_option( 'per_video_hours_desktop_designing', $perVideohoursDesktopDesigning ); 
    update_option( 'per_hour_rate_desktop_designing', $perHourRateDesktopDesigning ); 
	
	//Designing> Games Designing
    $minHourGamesDesigning = sanitize_text_field($_POST["minHourGamesDesigning"]);
    $per3DModelHoursGamesDesigning = sanitize_text_field($_POST["per3DModelHoursGamesDesigning"]);
    $perBannerStoryBoardScreenHoursGamesDesigning= sanitize_text_field($_POST["perBannerStoryBoardScreenHoursGamesDesigning"]);
    $perDesignConceptWireframeHoursGamesDesigning = sanitize_text_field($_POST["perDesignConceptWireframeHoursGamesDesigning"]);
	$perGameAssetHoursGamesDesigning= sanitize_text_field($_POST["perGameAssetHoursGamesDesigning"]);
	$perGameUIDesignHoursGamesDesigning= sanitize_text_field($_POST["perGameUIDesignHoursGamesDesigning"]);
    $perHourRateGamesDesigning = sanitize_text_field($_POST["perHourRateGamesDesigning"]);
    update_option( 'min_hours_games_designing', $minHourGamesDesigning ); 
    update_option( 'per_3d_model_hours_games_designing', $per3DModelHoursGamesDesigning); 
    update_option( 'per_banner_story_board_screen_hours_games_designing', $perBannerStoryBoardScreenHoursGamesDesigning ); 
    update_option( 'per_design_concept_wireframe_hour_games_designing', $perDesignConceptWireframeHoursGamesDesigning ); 
	update_option( 'per_game_asset_hours_games_designing', $perGameAssetHoursGamesDesigning ); 
	update_option( 'per_game_uidesign_hours_games_designing', $perGameUIDesignHoursGamesDesigning ); 
    update_option( 'per_hour_rate_games_designing', $perHourRateGamesDesigning ); 
	
	//Designing>Social Media Design
    $minHourSocialMediaDesigning = sanitize_text_field($_POST["minHourSocialMediaDesigning"]);
    $perBannerHoursSocialMediaDesigning = sanitize_text_field($_POST["perBannerHoursSocialMediaDesigning"]);
    $perImageHoursSocialMediaDesigning= sanitize_text_field($_POST["perImageHoursSocialMediaDesigning"]);
    $perBusinessCardHoursSocialMediaDesigning = sanitize_text_field($_POST["perBusinessCardHoursSocialMediaDesigning"]);
	$perFlyerHoursSocialMediaDesigning= sanitize_text_field($_POST["perFlyerHoursSocialMediaDesigning"]);
	$perGraphicalPostHoursSocialMediaDesigning= sanitize_text_field($_POST["perGraphicalPostHoursSocialMediaDesigning"]);
    $perHourRateSocialMediaDesigning = sanitize_text_field($_POST["perHourRateSocialMediaDesigning"]);
    update_option( 'min_hours_socialmedia_designing', $minHourSocialMediaDesigning ); 
    update_option( 'per_banner_hours_social_media_designing', $perBannerHoursSocialMediaDesigning); 
    update_option( 'per_image_hours_social_media_designing', $perImageHoursSocialMediaDesigning ); 
    update_option( 'per_business_card_hours_social_media_designing', $perBusinessCardHoursSocialMediaDesigning ); 
	update_option( 'per_flyer_hours_social_media_designing', $perFlyerHoursSocialMediaDesigning ); 
	update_option( 'per_graphical_post_hours_social_media_designing', $perGraphicalPostHoursSocialMediaDesigning ); 
    update_option( 'per_hour_rate_social_media_designing', $perHourRateSocialMediaDesigning ); 
	
	//Designing>Brand Identity>Animated Logo
    $minHoursBrandIdentityAnimatedLogo = sanitize_text_field($_POST["minHoursBrandIdentityAnimatedLogo"]);
    $perLogoHoursBrandIdentityAnimatedLogo = sanitize_text_field($_POST["perLogoHoursBrandIdentityAnimatedLogo"]);
    $perHourRateBrandIdentityAnimatedLogo = sanitize_text_field($_POST["perHourRateBrandIdentityAnimatedLogo"]);
    update_option( 'min_hours_brand_identity_animated_logo', $minHoursBrandIdentityAnimatedLogo ); 
    update_option( 'per_logo_hours_brand_identity_animated_logo', $perLogoHoursBrandIdentityAnimatedLogo ); 
    update_option( 'per_hour_rate_brand_identity_animated_logo', $perHourRateBrandIdentityAnimatedLogo ); 
	
	//Designing>Brand Identity> Static Logo
    $minHoursBrandIdentityStaticLogo = sanitize_text_field($_POST["minHoursBrandIdentityStaticLogo"]);
    $perLogoHoursBrandIdentityStaticLogo = sanitize_text_field($_POST["perLogoHoursBrandIdentityStaticLogo"]);
    $perHourRateBrandIdentityStaticLogo = sanitize_text_field($_POST["perHourRateBrandIdentityStaticLogo"]);
    update_option( 'min_hours_brand_identity_static_logo', $minHoursBrandIdentityStaticLogo ); 
    update_option( 'per_logo_hours_brand_identity_static_logo', $perLogoHoursBrandIdentityStaticLogo ); 
    update_option( 'per_hour_rate_brand_identity_static_logo', $perHourRateBrandIdentityStaticLogo ); 
	
	
	
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
<h2>Designing Settings<hr></h2>


<div class="designing main-content">
 <input type="checkbox" id="designing" name="designing" class="marked" >
 <label class="check-label-settings">Website Designing</label>
           <div class="sub-content" style="display:none;">
         <label class="input-field-label"><b>Minimuim Hours</b>
            <input type="number" id="minHourWebsiteDesigning" name="minHourWebsiteDesigning" placeholder="Minimuim Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'min_hours_website_designing' ))){ echo get_option( 'min_hours_website_designing' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Web Page Design Hours</b>
            <input type="number" id="perWebPageDesignHoursWebsiteDesigning" name="perWebPageDesignHoursWebsiteDesigning" Placeholder="Per  Web Page Design Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_web_page_design_hours_website_designing' ))){ echo get_option( 'per_web_page_design_hours_website_designing' );}else {echo '0';} ?>"></label>
				       <label class="input-field-label"><b>Per Design Concept/Wireframe Hours</b>
            <input type="number" id="perDesignConceptWireframeHoursWebsiteDesigning" name="perDesignConceptWireframeHoursWebsiteDesigning" Placeholder="Per Design Concept/Wireframe Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_design_concept_wireframe_hours_website_designing' ))){ echo get_option( 'per_design_concept_wireframe_hours_website_designing' );}else {echo '0';} ?>"></label>
				       <label class="input-field-label"><b>Per Banner Slider/Image Hours</b>
            <input type="number" id="perBannerSliderImageHoursWebsiteDesigning" name="perBannerSliderImageHoursWebsiteDesigning" Placeholder="In-App Purchase Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_banner_slider_image_hours_website_designing' ))){ echo get_option( 'per_banner_slider_image_hours_website_designing' );}else {echo '0';} ?>"></label>
			   		       <label class="input-field-label"><b>Per Video hours</b>
            <input type="number" id="perVideohoursWebsiteDesigning" name="perVideohoursWebsiteDesigning" Placeholder="Per Banner Slider/Image Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_video_hours_website_designing' ))){ echo get_option( 'per_video_hours_website_designing' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Hour Rate</b>
            <input type="number" id="perHourRateWebsiteDesigning" name="perHourRateWebsiteDesigning" Placeholder="Per Hour Rate" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_hour_rate_website_designing' ))){ echo get_option( 'per_hour_rate_website_designing' );}else {echo '0';} ?>"></label>
            </div>

</div>
<div class="designing main-content">
 <input type="checkbox" id="designing" name="designing" class="marked" >
 <label class="check-label-settings">Mobile App Designing</label>
           <div class="sub-content" style="display:none;">
          <label class="input-field-label"><b>Minimuim Hours</b>
            <input type="number" id="minHourMobileDesigning" name="minHourMobileDesigning" placeholder="Minimuim Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'min_hours_mobile_designing' ))){ echo get_option( 'min_hours_mobile_designing' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Mobile Page Design Hours</b>
            <input type="number" id="perMobilePageDesignHoursMobileDesigning" name="perMobilePageDesignHoursMobileDesigning" Placeholder="Per Mobile Page Design Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_mobile_page_design_hours_mobile_designing' ))){ echo get_option( 'per_mobile_page_design_hours_mobile_designing' );}else {echo '0';} ?>"></label>
				       <label class="input-field-label"><b>Per Design Concept/Wireframe Hours</b>
            <input type="number" id="perDesignConceptWireframeHoursMobileDesigning" name="perDesignConceptWireframeHoursMobileDesigning" Placeholder="Per Design Concept/Wireframe Hours" min="0" class="field-settings" value="<?php if(!empty(get_option('per_design_concept_wireframe_hours_mobile_designing' ))){ echo get_option( 'per_design_concept_wireframe_hours_mobile_designing' );}else {echo '0';} ?>"></label>
				       <label class="input-field-label"><b>Per Banner Slider/Image Hours</b>
            <input type="number" id="perBannerSliderImageHoursMobileDesigning" name="perBannerSliderImageHoursMobileDesigning" Placeholder="Per Banner Slider/Image Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_banner_slider_image_hours_mobile_designing' ))){ echo get_option( 'per_banner_slider_image_hours_mobile_designing' );}else {echo '0';} ?>"></label>
			   		       <label class="input-field-label"><b>Per Video hours</b>
            <input type="number" id="perVideohoursMobileDesigning" name="perVideohoursMobileDesigning" Placeholder="Per Video Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_video_hours_mobile_designing' ))){ echo get_option( 'per_video_hours_mobile_designing' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Hour Rate</b>
            <input type="number" id="perHourRateMobileDesigning" name="perHourRateMobileDesigning" Placeholder="Per Hour Rate" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_hour_rate_mobile_designing' ))){ echo get_option( 'per_hour_rate_mobile_designing' );}else {echo '0';} ?>"></label>
            </div>

</div>
	<div class="designing main-content">
 <input type="checkbox" id="designing" name="designing" class="marked" >
 <label class="check-label-settings">Desktop App Designing</label>
           <div class="sub-content" style="display:none;">
         <label class="input-field-label"><b>Minimuim Hours</b>
            <input type="number" id="minHourDesktopDesigning" name="minHourDesktopDesigning" placeholder="Minimuim Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'min_hours_desktop_designing' ))){ echo get_option( 'min_hours_desktop_designing' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Page Design Hours</b>
            <input type="number" id="perPageDesignHoursDesktopDesigning" name="perPageDesignHoursDesktopDesigning" Placeholder="Per Page Design Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_page_design_hours_desktop_designing' ))){ echo get_option( 'per_page_design_hours_desktop_designing' );}else {echo '0';} ?>"></label>
				       <label class="input-field-label"><b>Per Design Concept/Wireframe Hours</b>
            <input type="number" id="perDesignConceptWireframeHoursDesktopDesigning" name="perDesignConceptWireframeHoursDesktopDesigning" Placeholder="Per Design Concept/Wireframe Hours" min="0" class="field-settings" value="<?php if(!empty(get_option('per_design_concept_wireframe_hours_desktop_designing' ))){ echo get_option( 'per_design_concept_wireframe_hours_desktop_designing' );}else {echo '0';} ?>"></label>
				       <label class="input-field-label"><b>Per Banner Slider/Image Hours</b>
            <input type="number" id="perBannerSliderImageHoursDesktopDesigning" name="perBannerSliderImageHoursDesktopDesigning" Placeholder="Per Banner Slider/Image Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_banner_slider_image_hours_desktop_designing' ))){ echo get_option( 'per_banner_slider_image_hours_desktop_designing' );}else {echo '0';} ?>"></label>
			   		       <label class="input-field-label"><b>Per Video hours</b>
            <input type="number" id="perVideohoursDesktopDesigning" name="perVideohoursDesktopDesigning" Placeholder="Per VideoHours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_video_hours_desktop_designing' ))){ echo get_option('per_video_hours_desktop_designing' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Hour Rate</b>
            <input type="number" id="perHourRateDesktopDesigning" name="perHourRateDesktopDesigning" Placeholder="Per Hour Rate" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_hour_rate_desktop_designing' ))){ echo get_option( 'per_hour_rate_desktop_designing' );}else {echo '0';} ?>"></label>
            </div>

</div>
	<div class="designing main-content">
 <input type="checkbox" id="designing" name="designing" class="marked" >
 <label class="check-label-settings">Games Designing</label>
           <div class="sub-content" style="display:none;">
          <label class="input-field-label"><b>Minimuim Hours</b>
            <input type="number" id="minHourGamesDesigning" name="minHourGamesDesigning" placeholder="Minimuim Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'min_hours_games_designing' ))){ echo get_option( 'min_hours_games_designing' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per 3D Model Hours</b>
            <input type="number" id="per3DModelHoursGamesDesigning" name="per3DModelHoursGamesDesigning" Placeholder="Per 3D Model Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_3d_model_hours_games_designing' ))){ echo get_option( 'per_3d_model_hours_games_designing' );}else {echo '0';} ?>"></label>
				       <label class="input-field-label"><b>Per Banner Story Board/Concept Screen Hours</b>
            <input type="number" id="perBannerStoryBoardScreenHoursGamesDesigning" name="perBannerStoryBoardScreenHoursGamesDesigning" Placeholder="Per Banner Story Board/Concept Screen Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_banner_story_board_screen_hours_games_designing' ))){ echo get_option( 'per_banner_story_board_screen_hours_games_designing' );}else {echo '0';} ?>"></label>
			   		       <label class="input-field-label"><b>Per Design Concept/Wireframe Hours</b>
            <input type="number" id="perDesignConceptWireframeHoursGamesDesigning" name="perDesignConceptWireframeHoursGamesDesigning" Placeholder="Per Design Concept/Wireframe Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_design_concept_wireframe_hour_games_designing' ))){ echo get_option( 'per_design_concept_wireframe_hour_games_designing' );}else {echo '0';} ?>"></label>
			   		       <label class="input-field-label"><b>Per Game Asset Hours</b>
            <input type="number" id="perGameAssetHoursGamesDesigning" name="perGameAssetHoursGamesDesigning" Placeholder="Per Game Asset Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_game_asset_hours_games_designing' ))){ echo get_option( 'per_game_asset_hours_games_designing' );}else {echo '0';} ?>"></label>
			       <label class="input-field-label"><b>Per Game UI Design Hours</b>
            <input type="number" id="perGameUIDesignHoursGamesDesigning" name="perGameUIDesignHoursGamesDesigning" Placeholder="Per Game UI Design Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_game_uidesign_hours_games_designing' ))){ echo get_option( 'per_game_uidesign_hours_games_designing' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Hour Rate</b>
            <input type="number" id="perHourRateGamesDesigning" name="perHourRateGamesDesigning" Placeholder="Per Hour Rate" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_hour_rate_games_designing' ))){ echo get_option( 'per_hour_rate_games_designing' );}else {echo '0';} ?>"></label>
            </div>

</div>
	<div class="designing main-content">
 <input type="checkbox" id="designing" name="designing" class="marked" >
 <label class="check-label-settings">Social Media Design</label>
           <div class="sub-content" style="display:none;">
        <label class="input-field-label"><b>Minimuim Hours</b>
            <input type="number" id="minHourSocialMediaDesigning" name="minHourSocialMediaDesigning" placeholder="Minimuim Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'min_hours_socialmedia_designing' ))){ echo get_option( 'min_hours_socialmedia_designing' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Banner Hours</b>
            <input type="number" id="perBannerHoursSocialMediaDesigning" name="perBannerHoursSocialMediaDesigning" Placeholder="Per Banner Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_banner_hours_social_media_designing' ))){ echo get_option( 'per_banner_hours_social_media_designing' );}else {echo '0';} ?>"></label>
				       <label class="input-field-label"><b>Per Image Hours</b>
            <input type="number" id="perImageHoursSocialMediaDesigning" name="perImageHoursSocialMediaDesigning" Placeholder="Per Image Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_image_hours_social_media_designing' ))){ echo get_option( 'per_image_hours_social_media_designing' );}else {echo '0';} ?>"></label>
			   		       <label class="input-field-label"><b>Per Business Card Hours</b>
            <input type="number" id="perBusinessCardHoursSocialMediaDesigning" name="perBusinessCardHoursSocialMediaDesigning" Placeholder="Per Business Card Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_business_card_hours_social_media_designing' ))){ echo get_option( 'per_business_card_hours_social_media_designing' );}else {echo '0';} ?>"></label>
			   		       <label class="input-field-label"><b>Per Flyers/Broachers Hours</b>
            <input type="number" id="perFlyerHoursSocialMediaDesigning" name="perFlyerHoursSocialMediaDesigning" Placeholder="Per Flyers/Broachers Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_flyer_hours_social_media_designing' ))){ echo get_option( 'per_flyer_hours_social_media_designing' );}else {echo '0';} ?>"></label>
			       <label class="input-field-label"><b>Per Graphical Post Hours</b>
            <input type="number" id="perGraphicalPostHoursSocialMediaDesigning" name="perGraphicalPostHoursSocialMediaDesigning" Placeholder="Per Graphical Post Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_graphical_post_hours_social_media_designing' ))){ echo get_option( 'per_graphical_post_hours_social_media_designing' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Hour Rate</b>
            <input type="number" id="perHourRateSocialMediaDesigning" name="perHourRateSocialMediaDesigning" Placeholder="Per Hour Rate" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_hour_rate_social_media_designing' ))){ echo get_option( 'per_hour_rate_social_media_designing' );}else {echo '0';} ?>"></label>
            </div>

</div>
	
	<div class="website-development main-content">
 <input type="checkbox" id="website-development" name="website-development" class="marked" value="website-development">
 <label for="website-development-label" class="check-label-settings">Brand Identity</label>


      <div class="sub-content" style="display:none;">
         <input type="checkbox" name="cms-website-development"  class="sub-marked" >
        <label for="cms-website-development-label" class="check-label-settings">Animated Logo</label>

            <div class="sub-sub-content" style="display:none;">
            <label class="input-field-label"><b>Minimuim Hours</b>
            <input type="number" id="minHoursBrandIdentityAnimatedLogo" name="minHoursBrandIdentityAnimatedLogo" placeholder="Minimuim Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'min_hours_brand_identity_animated_logo' ))){ echo get_option( 'min_hours_brand_identity_animated_logo' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Logo Hours</b>
            <input type="number" id="perLogoHoursBrandIdentityAnimatedLogo" name="perLogoHoursBrandIdentityAnimatedLogo" Placeholder="Per Screen Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_logo_hours_brand_identity_animated_logo' ))){ echo get_option( 'per_logo_hours_brand_identity_animated_logo' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Hour Rate</b>
            <input type="number" id="perHourRateBrandIdentityAnimatedLogo" name="perHourRateBrandIdentityAnimatedLogo" Placeholder="Per Hour Rate" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_hour_rate_brand_identity_animated_logo' ))){ echo get_option( 'per_hour_rate_brand_identity_animated_logo' );}else {echo '0';} ?>"></label>
            </div>
            </div>  
  <div class="sub-content" style="display:none;">
         <input type="checkbox" name="cms-website-development"  class="sub-marked" >
        <label for="cms-website-development-label" class="check-label-settings">Static Logo</label>

            <div class="sub-sub-content" style="display:none;">
           <label class="input-field-label"><b>Minimuim Hours</b>
            <input type="number" id="minHoursBrandIdentityStaticLogo" name="minHoursBrandIdentityStaticLogo" placeholder="Minimuim Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'min_hours_brand_identity_static_logo' ))){ echo get_option( 'min_hours_brand_identity_static_logo' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Logo Hours</b>
            <input type="number" id="perLogoHoursBrandIdentityStaticLogo" name="perLogoHoursBrandIdentityStaticLogo" Placeholder="Per Logo Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_logo_hours_brand_identity_static_logo' ))){ echo get_option( 'per_logo_hours_brand_identity_static_logo' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Hour Rate</b>
            <input type="number" id="perHourRateBrandIdentityStaticLogo" name="perHourRateBrandIdentityStaticLogo" Placeholder="Per Hour Rate" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_hour_rate_brand_identity_static_logo' ))){ echo get_option( 'per_hour_rate_brand_identity_static_logo' );}else {echo '0';} ?>"></label>
            </div>
            </div>  


	
		


</div>

<input type="submit" class="button btn-sett" name="submit" value="Save Settings" >
</form>