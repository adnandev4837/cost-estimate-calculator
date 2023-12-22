<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST') {

	//Content>Informational
    $perWordRateContentInformational = sanitize_text_field($_POST["perWordRateContentInformational"]);
    update_option( 'per_word_rate_content_informational', $perWordRateContentInformational ); 
	
	//Content>Navigational
    $perWordRateContentNavigational = sanitize_text_field($_POST["perWordRateContentNavigational"]);
    update_option( 'per_word_rate_content_navigational', $perWordRateContentNavigational ); 
	
	//Marketing> Commercial
    $perWordRateContentCommercial = sanitize_text_field($_POST["perWordRateContentCommercial"]);
    update_option( 'per_word_rate_content_commercial', $perWordRateContentCommercial ); 
	
	//Content>Translational
    $perWordRateContentTranslational = sanitize_text_field($_POST["perWordRateContentTranslational"]);
    update_option( 'per_word_rate_content_translational', $perWordRateContentTranslational ); 
	
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
<h2>Content Settings<hr></h2>

<div class="content main-content">
 <input type="checkbox" id="content" name="content" class="marked" >
 <label class="check-label-settings">Informational</label>
           <div class="sub-content" style="display:none;">
   <label class="input-field-label"><b>Per Word Rate</b>
            <input type="number" id="perWordRateContentInformational" name="perWordRateContentInformational" Placeholder="Per Word Rate" min="0" class="field-settings" step="any" value="<?php if(!empty(get_option( 'per_word_rate_content_informational' ))){ echo get_option('per_word_rate_content_informational' );}else {echo '0';} ?>"></label>
            </div>

</div>
<div class="content main-content">
 <input type="checkbox" id="content" name="content" class="marked" >
 <label class="check-label-settings">Navigational</label>
           <div class="sub-content" style="display:none;">
   <label class="input-field-label"><b>Per Word Rate</b>
            <input type="number" id="perWordRateContentNavigational" name="perWordRateContentNavigational" Placeholder="Per Word Rate" min="0" class="field-settings" step="any"  value="<?php if(!empty(get_option( 'per_word_rate_content_navigational' ))){ echo get_option('per_word_rate_content_navigational' );}else {echo '0';} ?>"></label>
            </div>

</div>

	
<div class="content main-content">
 <input type="checkbox" id="content" name="content" class="marked" >
 <label class="check-label-settings">Commercial</label>
           <div class="sub-content" style="display:none;">
   <label class="input-field-label"><b>Per Word Rate</b>
            <input type="number" id="perWordRateContentCommercial" name="perWordRateContentCommercial" Placeholder="Per Word Rate" min="0" class="field-settings" step="any"  value="<?php if(!empty(get_option( 'per_word_rate_content_commercial' ))){ echo get_option('per_word_rate_content_commercial' );}else {echo '0';} ?>"></label>
            </div>

</div>
<div class="content main-content">
 <input type="checkbox" id="content" name="content" class="marked" >
 <label class="check-label-settings">Translational</label>
           <div class="sub-content" style="display:none;">
   <label class="input-field-label"><b>Per Word Rate</b>
            <input type="number" id="perWordRateContentTranslational" name="perWordRateContentTranslational" Placeholder="Per Word Rate" min="0" step="any"  class="field-settings" value="<?php if(!empty(get_option( 'per_word_rate_content_translational' ))){ echo get_option( 'per_word_rate_content_translational' );}else {echo '0';} ?>"></label>
            </div>

</div>
<input type="submit" class="button btn-sett" name="submit" value="Save Settings" >
</form>