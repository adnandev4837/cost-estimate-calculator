<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST') {

	//Marketing>SEO Marketing
    $minHourSEOMarketing = sanitize_text_field($_POST["minHourSEOMarketing"]);
    $onPageSEOHoursSEOMarketing = sanitize_text_field($_POST["onPageSEOHoursSEOMarketing"]);
    $offPageSEOHoursSEOMarketing= sanitize_text_field($_POST["offPageSEOHoursSEOMarketing"]);
    $technicalSEOHoursSEOMarketing = sanitize_text_field($_POST["technicalSEOHoursSEOMarketing"]);
	$localSEOHoursSEOMarketing= sanitize_text_field($_POST["localSEOHoursSEOMarketing"]);
	$perHourRateSEOMarketing= sanitize_text_field($_POST["perHourRateSEOMarketing"]);
    update_option( 'min_hours_seo_marketing', $minHourSEOMarketing ); 
    update_option( 'on_page_seo_hours_seomarketing', $onPageSEOHoursSEOMarketing); 
    update_option( 'off_page_seo_hours_seomarketing', $offPageSEOHoursSEOMarketing ); 
    update_option( 'technical_seo_hours_seomarketing', $technicalSEOHoursSEOMarketing ); 
	update_option( 'local_seo_hours_seomarketing', $localSEOHoursSEOMarketing ); 
	update_option( 'per_hour_rate_seomarketing', $perHourRateSEOMarketing ); 
	
	//Marketing> SEM Marketing
    $perHourRateSEMMarketing = sanitize_text_field($_POST["perHourRateSEMMarketing"]);
    update_option( 'per_hour_rate_semmarketing', $perHourRateSEMMarketing ); 
	
	//Marketing> SMM Marketing>Organic Marketing
    $minHoursOrganicSMMMarketing = sanitize_text_field($_POST["minHoursOrganicSMMMarketing"]);
    $organicMarketingHoursOrganicSMMMarketing = sanitize_text_field($_POST["organicMarketingHoursOrganicSMMMarketing"]);
    $perHourRateOrganicSMMMarketing = sanitize_text_field($_POST["perHourRateOrganicSMMMarketing"]);
    update_option( 'min_hours_organic_smmmarketing', $minHoursOrganicSMMMarketing ); 
    update_option( 'organic_marketing_hours_organic_smmmarketing', $organicMarketingHoursOrganicSMMMarketing ); 
    update_option( 'per_hour_rate_organic_smmmarketing', $perHourRateOrganicSMMMarketing ); 
	
	//Marketing> SMM Marketing>Paid Marketing
    $perHourRatePaidSMMMarketing = sanitize_text_field($_POST["perHourRatePaidSMMMarketing"]);
    update_option( 'per_hour_rate_paid_smmmarketing', $perHourRatePaidSMMMarketing ); 
		
	//Marketing> ASO Marketing > App Optimization
    $minHoursASOMarketing = sanitize_text_field($_POST["minHoursASOMarketing"]);
    $appOptimizationHoursASOMarketing = sanitize_text_field($_POST["appOptimizationHoursASOMarketing"]);
    $perHourRateASOMarketing = sanitize_text_field($_POST["perHourRateASOMarketing"]);
    update_option( 'min_hours_asomarketing', $minHoursASOMarketing ); 
    update_option( 'app_optimization_hours_asomarketing', $appOptimizationHoursASOMarketing ); 
    update_option( 'per_hour_rate_asomarketing', $perHourRateASOMarketing ); 
	
	//Marketing> ASO Marketing>Paid Marketing
    $perHourRatePaidASOMarketing = sanitize_text_field($_POST["perHourRatePaidASOMarketing"]);
    update_option( 'per_hour_rate_paid_asomarketing', $perHourRatePaidASOMarketing ); 
	
	
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
<h2>Marketing Settings<hr></h2>


<div class="marketing main-content">
 <input type="checkbox" id="marketing" name="marketing" class="marked" >
 <label class="check-label-settings">SEO Marketing</label>
           <div class="sub-content" style="display:none;">
         <label class="input-field-label"><b>Minimuim Hours</b>
            <input type="number" id="minHourSEOMarketing" name="minHourSEOMarketing" placeholder="Minimuim Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'min_hours_seo_marketing' ))){ echo get_option( 'min_hours_seo_marketing' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>On-Page SEO Hours</b>
            <input type="number" id="onPageSEOHoursSEOMarketing" name="onPageSEOHoursSEOMarketing" Placeholder="On-Page SEO Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'on_page_seo_hours_seomarketing' ))){ echo get_option( 'on_page_seo_hours_seomarketing' );}else {echo '0';} ?>"></label>
				       <label class="input-field-label"><b>Off-Page SEO Hours</b>
            <input type="number" id="offPageSEOHoursSEOMarketing" name="offPageSEOHoursSEOMarketing" Placeholder="Off-Page SEO Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'off_page_seo_hours_seomarketing' ))){ echo get_option( 'off_page_seo_hours_seomarketing' );}else {echo '0';} ?>"></label>
				       <label class="input-field-label"><b>Technical SEO Hours</b>
            <input type="number" id="technicalSEOHoursSEOMarketing" name="technicalSEOHoursSEOMarketing" Placeholder="Technical SEO Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'technical_seo_hours_seomarketing' ))){ echo get_option( 'technical_seo_hours_seomarketing' );}else {echo '0';} ?>"></label>
			     <label class="input-field-label"><b>Local SEO Hours</b>
            <input type="number" id="localSEOHoursSEOMarketing" name="localSEOHoursSEOMarketing" Placeholder="Local SEO Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'local_seo_hours_seomarketing' ))){ echo get_option( 'local_seo_hours_seomarketing' );}else {echo '0';} ?>"></label>
			   
            <label class="input-field-label"><b>Per Hour Rate</b>
            <input type="number" id="perHourRateSEOMarketing" name="perHourRateSEOMarketing" Placeholder="Per Hour Rate" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_hour_rate_seomarketing' ))){ echo get_option( 'per_hour_rate_seomarketing' );}else {echo '0';} ?>"></label>
            </div>

</div>
<div class="marketing main-content">
 <input type="checkbox" id="designing" name="designing" class="marked" >
 <label class="check-label-settings">SEM Marketing</label>
           <div class="sub-content" style="display:none;">
   <label class="input-field-label"><b>Per Hour Rate</b>
            <input type="number" id="perHourRateSEMMarketing" name="perHourRateSEMMarketing" Placeholder="Per Hour Rate" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_hour_rate_semmarketing' ))){ echo get_option( 'per_hour_rate_semmarketing' );}else {echo '0';} ?>"></label>
            </div>

</div>

	
	<div class="main-content">
 <input type="checkbox" id="website-development" name="website-development" class="marked" >
 <label  class="check-label-settings">SMM Marketing</label>


      <div class="sub-content" style="display:none;">
         <input type="checkbox" name="cms-website-development"  class="sub-marked" >
        <label for="cms-website-development-label" class="check-label-settings">Organic Marketing</label>

            <div class="sub-sub-content" style="display:none;">
         
             <label class="input-field-label"><b>Minimuim Hours</b>
            <input type="number" id="minHoursOrganicSMMMarketing" name="minHoursOrganicSMMMarketing" placeholder="Minimuim Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'min_hours_organic_smmmarketing' ))){ echo get_option( 'min_hours_organic_smmmarketing' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Organic Marketing Hours</b>
            <input type="number" id="organicMarketingHoursOrganicSMMMarketing" name="organicMarketingHoursOrganicSMMMarketing" Placeholder="Organic Marketing Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'organic_marketing_hours_organic_smmmarketing' ))){ echo get_option( 'organic_marketing_hours_organic_smmmarketing' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Hour Rate</b>
            <input type="number" id="perHourRateOrganicSMMMarketing" name="perHourRateOrganicSMMMarketing" Placeholder="Per Hour Rate" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_hour_rate_organic_smmmarketing' ))){ echo get_option( 'per_hour_rate_organic_smmmarketing' );}else {echo '0';} ?>"></label>
            </div>
            </div>  
  <div class="sub-content" style="display:none;">
         <input type="checkbox" name="cms-website-development"  class="sub-marked" >
        <label for="cms-website-development-label" class="check-label-settings">Paid Marketing</label>

            <div class="sub-sub-content" style="display:none;">
             <label class="input-field-label"><b>Per Hour Rate</b>
            <input type="number" id="perHourRatePaidSMMMarketing" name="perHourRatePaidSMMMarketing" Placeholder="Per Hour Rate" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_hour_rate_paid_smmmarketing' ))){ echo get_option( 'per_hour_rate_paid_smmmarketing' );}else {echo '0';} ?>"></label>
            </div>
            </div>  

</div>
<div class="marketing main-content">
 <input type="checkbox" class="marked" >
 <label for="website-development-label" class="check-label-settings">ASO Marketing</label>


    <div class="sub-content" style="display:none;">
         <input type="checkbox" name="cms-website-development"  class="sub-marked" >
        <label for="cms-website-development-label" class="check-label-settings">App Optimization</label>

            <div class="sub-sub-content" style="display:none;">
         
             <label class="input-field-label"><b>Minimuim Hours</b>
            <input type="number" id="minHoursASOMarketing" name="minHoursASOMarketing" placeholder="Minimuim Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'min_hours_asomarketing' ))){ echo get_option( 'min_hours_asomarketing' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>App Optimization Hours</b>
            <input type="number" id="appOptimizationHoursASOMarketing" name="appOptimizationHoursASOMarketing" Placeholder="App Optimization Hours" min="0" class="field-settings" value="<?php if(!empty(get_option( 'app_optimization_hours_asomarketing' ))){ echo get_option( 'app_optimization_hours_asomarketing' );}else {echo '0';} ?>"></label>
            <label class="input-field-label"><b>Per Hour Rate</b>
            <input type="number" id="perHourRateASOMarketing" name="perHourRateASOMarketing" Placeholder="Per Hour Rate" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_hour_rate_asomarketing' ))){ echo get_option( 'per_hour_rate_asomarketing' );}else {echo '0';} ?>"></label>
            </div>
            </div>  
  <div class="sub-content" style="display:none;">
         <input type="checkbox" name="cms-website-development"  class="sub-marked" >
        <label for="cms-website-development-label" class="check-label-settings">Paid Marketing</label>

            <div class="sub-sub-content" style="display:none;">
             <label class="input-field-label"><b>Per Hour Rate</b>
            <input type="number" id="perHourRatePaidASOMarketing" name="perHourRatePaidASOMarketing" Placeholder="Per Hour Rate" min="0" class="field-settings" value="<?php if(!empty(get_option( 'per_hour_rate_paid_asomarketing' ))){ echo get_option( 'per_hour_rate_paid_asomarketing' );}else {echo '0';} ?>"></label>
            </div>
            </div>  


</div>
<input type="submit" class="button btn-sett" name="submit" value="Save Settings" >
</form>