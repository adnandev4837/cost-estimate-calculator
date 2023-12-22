jQuery(document).ready(function($) {
	 $('.field-settings').focus(function() {
			if($(this).val()==0){
$(this).val(''); }
  });
  $('.field-settings').blur(function() {
		if($(this).val()==''){
 $(this).val(0); }
  });
	//add datatable
	 $('#emailListTable').DataTable();
    $(".main-content").on("click", function () {
	 if ( $(this).find(".marked").prop('checked') ) {
		 $(this).find(".sub-content").show();
	  }else{ $(this).find(".sub-content").hide();}
  });

  $(".sub-content").on("click", function () {
    if ( $(this).find(".sub-marked").prop('checked') ) {
        $(this).find(".sub-sub-content").show();
     }else{ $(this).find(".sub-sub-content").hide();}
  });

  $(".sub-sub-sub-content").on("click", function () {
    if ( $(this).find(".sub-sub-marked").prop('checked') ) {
    $(this).find(".sub-sub-sub-sub-content").show();}
    else{  $(this).find(".sub-sub-sub-sub-content").hide();}
  });
  $(".sub-sub-sub-sub-content").on("click", function () {
    if ( $(this).find(".sub-sub-sub-marked").prop('checked') ) {
    $(this).find(".sub-sub-sub-sub-sub-content").show();}
    else{  $(this).find(".sub-sub-sub-sub-sub-content").hide();}
  });
});
