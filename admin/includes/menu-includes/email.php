<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
 
    $emailFrom = sanitize_text_field($_POST["emailFrom"]);
//     $copyTo = sanitize_text_field($_POST["copyTo"]);
//     $bccTo = sanitize_text_field($_POST["bccTo"]);
    update_option( 'email_from', $emailFrom ); 
//     update_option( 'copy_to', $copyTo ); 
//     update_option( 'bcc_to', $bccTo ); 

    add_action( 'admin_notices', 'admin_notice__success' );  
  }
  function admin_notice__success() {
    ?>
    <div class="notice notice-success is-dismissible">
        <p><?php _e( 'Success! Email setting saved', TEXT_DOMAIN ); ?></p>
    </div>
    <?php
  }
  do_action( 'admin_notices' );
?>

<form action="" id="form-admin-email" class="form-sett"  method="POST" >
<h2>Email Settings<hr></h2>   
  
      <label class="input-field-label"><b>Email From</b>
      <input type="email" id="emailFrom" name="emailFrom" class="style-font-size" placeholder="Email From" value="<?php if(!empty(get_option( 'email_from' ))){ echo get_option( 'email_from' );}else {echo 'example@gmail.com';} ?>" required></label>
<!--       <label class="input-field-label"><b>Copy to (CC)</b>
      <input type="email" id="copyTo" name="copyTo" class="style-font-size" placeholder="CC" value="<?php if(!empty(get_option( 'copy_to' ))){ echo get_option( 'copy_to' );}else {echo 'example@gmail.com';} ?>" required></label>
      <label class="input-field-label"><b>Bcc to</b>
      <input type="email" id="bccTo" name="bccTo" class="style-font-size" placeholder="BCC" value="<?php if(!empty(get_option( 'bcc_to' ))){ echo get_option( 'bcc_to' );}else {echo 'example@gmail.com';} ?>" required></label> -->
    
      <input type="submit" class="button btn-sett" name="submit" value="Save Settings" >

</form>



