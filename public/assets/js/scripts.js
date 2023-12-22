jQuery(document).ready(function($) {
	 if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
			 $(".btn-thank-you").on("click", function () {
				 $(".step1").show();
				  $(".success").hide();
				 
			 });
	setTimeout(function() {
//       $(".success").hide();
		 $(".error").hide();

    }, 3000);

    $(".container").each(function () {
		               
 			var whitespaceLength = $(this).text().replace(/[a-zA-Z]/g, "").length;
                var labelWidth = $(this).text().length * 10-whitespaceLength; // Adjust the factor as needed
                $(this).css("width", labelWidth + "px");
            });
	
	 $(".check-checked").on("click", function () {
	 if ( $(this).find(".marked").prop('checked') ) {
		 $(this).find(".inner-content").show();
	  }else{ $(this).find(".inner-content").hide();
		   $(this).find(".field-input").val(0);
			 $(this).find(".field-input").prop("checked", false);
		   }

  });
		 $(".inner-content").on("click", function () {
	 if ( $(this).find(".sub-marked").prop('checked') ) {
		 $(this).find(".inner-inner-content").show();
	  }else{ $(this).find(".inner-inner-content").hide();
		      $(this).find(".inner-inner-content").find(".field-input").val(0);
			 $(this).find(".inner-inner-content").find(".field-input").prop("checked", false);
		   }

  });
	 $(".check-development").on( "change", function() { 
			 if (!($(".check-development").prop('checked'))){
			 $(".development-check").find(".field-input").val(0); 
			 $(".development-check").find(".field-input").prop("checked", false);
			 }
	 });
	$(".check-desiging").on( "change", function() { 
			 if (!($(".check-desiging").prop('checked'))){
			 $(".designing-check").find(".field-input").val(0); 
			 }
	 });
	 $(".check-marketing").on( "change", function() { 
			 if (!($(".check-marketing").prop('checked'))){
			 $(".marketing-check").find(".field-input").val(0); 
			 $(".marketing-check").find(".field-input").prop("checked", false);
			 }
	 });
	  $(".check-content").on( "change", function() { 
			 if (!($(".check-content").prop('checked'))){
			 $(".content-check").find(".field-input").val(0); 
			 $(".content-check").find(".field-input").prop("checked", false);
			 }
	 });
	
     $("#btn-next").click(function(event){
		
		 
		if ($(".check-development").prop('checked')) {$(".development-check").show(); $(".development-summery").show();}else{$(".development-check").hide(); $(".development-summery").hide(); }
 		if ($(".check-desiging").prop('checked')) {$(".designing-check").show(); $(".designing-summery").show();}else{$(".designing-check").hide(); $(".designing-summery").hide();}
		if ($(".check-marketing").prop('checked')) {$(".marketing-check").show(); $(".marketing-summery").show();}else{$(".marketing-check").hide(); $(".marketing-summery").hide();}
		if ($(".check-content").prop('checked')) {$(".content-check").show(); $(".content-summery").show();}else{$(".content-check").hide(); $(".content-summery").hide();}
		
     if ($(".check-development").prop('checked') || $(".check-desiging").prop('checked') || $(".check-marketing").prop('checked') || $(".check-content").prop('checked') ) {
      $("#step1-error").hide();
      $(".step1").hide();
      $(".step2").show();
     } else{  $("#step1-error").show(); }
    });
    $("#btn-back").click(function(event){
        $(".step1").show();
        $(".step2").hide();
       });
	$("#btn-how-it-works-step1").click(function(event){
        $(".main-how-it-works").show();
		$(".step1").hide();
		 $("#btn-back-how-it-works-step1").show();
		$("#btn-back-how-it-works-step2").hide();
       });
	$("#btn-how-it-works-step2").click(function(event){
		$(".main-how-it-works").show();
		$(".step2").hide();
		$("#btn-back-how-it-works-step2").show();
		$("#btn-back-how-it-works-step1").hide();
	});
	$("#btn-back-how-it-works-step2").click(function(event){
        $(".main-how-it-works").hide();
		$(".step2").show();
       });
	$("#btn-back-how-it-works-step1").click(function(event){
        $(".main-how-it-works").hide();
		$(".step1").show();
       });
    $(".accordion-header,.sub-accordion-header").click(function(event){
      $(this).find(".arrow").toggleClass('open');
		      $(".arrow").not($(this).find(".arrow")).removeClass('open');

    });
	// Prevent entering minus sign or negative values
            $(".field-input").on("keydown", function (e) {
                if (e.key === "-" || e.key === "e") {
                    e.preventDefault();
                }
            });


	  // Disable copy and paste for inputs with the specified class
            $(".field-input").on("paste", function (e) {
                e.preventDefault();
            });
            
            $(".field-input").on("contextmenu", function (e) {
                e.preventDefault();
            });
		 $('.field-input').focus(function() {
			if($(this).val()==0){
$(this).val(''); }
  });
  $('.field-input').blur(function() {
		if($(this).val()==''){
 $(this).val(0); }
  });

$( ".field-input,.check-checked,.check-development,.check-desiging,.check-marketing,.check-content" ).on( "input change", function() {
    let maxlength = jQuery('input[type=number][max]:not([max=""])').attr('max').length;
    var value = jQuery(this).val();
    if (value && value.length > maxlength) {
     jQuery(this).val(value.substr(0, maxlength));	
    }

    var sanitizedValue = $(this).val().replace(/\./g, '');
        $(this).val(sanitizedValue);
	
  //website development cost
  let totalWebsiteCMSCost=getWebsiteCMSCost();
  let totalWebsiteCustomDevelopmentCost=getWebsiteCustomDevelopmentCost();
  let totalWebsiteMaintenanceCost=getWebsiteCMaintenanceCost();
  let totalWebsiteCostDevelopment=totalWebsiteCMSCost+totalWebsiteCustomDevelopmentCost+totalWebsiteMaintenanceCost;
  $(".cms-total,.custom-development-total,.maintenance-total,.website-total,.website-cost-summery-line").show();$(".cms-total").text("( $"+totalWebsiteCMSCost+")");
 $(".custom-development-total").text("( $"+totalWebsiteCustomDevelopmentCost+")");	
$(".maintenance-total").text("( $"+totalWebsiteMaintenanceCost+")");	
 $(".website-total").text("( $"+totalWebsiteCostDevelopment+")");
  $(".website-cost-summery").text("$"+totalWebsiteCostDevelopment);	
  if($(".website-cost-summery").text()=='$0'){
		$(".cms-total,.custom-development-total,.maintenance-total,.website-total,.website-cost-summery-line").hide();
	}
  //Mobile development cost	
  let totalCostAndroidApps=getMobileAndroidAppsCost();
  let totalCostIOSApps=getMobileIOSAppsCost();
  let totalCostHybridApps=getMobileHybridAppsCost();
  let totalCostGames=getMobileGamesCost();	
  let totalMobileCostDevelopment=totalCostAndroidApps+totalCostIOSApps+totalCostHybridApps+totalCostGames;	
  $(".android-apps-total,.ios-apps-total,.hybrid-apps-total,.games-total,.mobile-app-development-total,.mobile-cost-summery-line").show();$(".android-apps-total").text("( $"+totalCostAndroidApps+")");
  $(".ios-apps-total").text("( $"+totalCostIOSApps+")");
  $(".hybrid-apps-total").text("( $"+totalCostHybridApps+")");
  $(".games-total").text("( $"+totalCostGames+")");
   $(".mobile-app-development-total").text("( $"+totalMobileCostDevelopment+")");
  $(".mobile-cost-summery").text("$"+totalMobileCostDevelopment);
  if($(".mobile-cost-summery").text()=='$0'){
		$(".android-apps-total,.ios-apps-total,.hybrid-apps-total,.games-total,.mobile-app-development-total,.mobile-cost-summery-line").hide();
	}
  //Desktop development cost
  let totalDesktopDevelopmentCost= getDesktopDevelopmentCost();
  $(".desktop-app-development-total,.desktop-development-cost-summery-line").show(); $(".desktop-app-development-total").text("( $"+totalDesktopDevelopmentCost+")");
  $(".desktop-development-cost-summery").text("$"+totalDesktopDevelopmentCost); 
  if($(".desktop-development-cost-summery").text()=='$0'){
		$(".desktop-app-development-total,.desktop-development-cost-summery-line").hide();
	}
  let totalDevelopmentCost=totalWebsiteCostDevelopment+totalMobileCostDevelopment+totalDesktopDevelopmentCost;
	 	if($(".website-cost-summery").text()=='$0' && $(".mobile-cost-summery").text()=='$0' && $(".desktop-development-cost-summery").text()=='$0'){
				$(".development-summery-line").hide();
		}else{
			$(".development-summery-line").show();
		}
	//Designing>Website Designing
	let totalWebsiteDesigningCost=getWebsiteDesigningCost();
	$(".website-designing-total,.website-designing-cost-summery-line").show();$(".website-designing-total").text("( $"+totalWebsiteDesigningCost+")");
	$(".website-designing-cost-summery").text("$"+totalWebsiteDesigningCost); 
	if($(".website-designing-cost-summery").text()=='$0'){
		$(".website-designing-total,.website-designing-cost-summery-line").hide();
	}
	//Designing>Mobile App Designing
	let totalMobileAppDesigningCost=getMobileAppDesigningCost();
	$(".mobile-app-designing-total,.mobile-app-designing-cost-summery-line").show();$(".mobile-app-designing-total").text("( $"+totalMobileAppDesigningCost+")");
	$(".mobile-app-designing-cost-summery").text("$"+totalMobileAppDesigningCost); 
	if($(".mobile-app-designing-cost-summery").text()=='$0'){
		$(".mobile-app-designing-total,.mobile-app-designing-cost-summery-line").hide();
	}
	//Designing> Desktop App Designing
	let totalDesktopAppDesigningCost=getDesktopAppDesigningCost();
	$(".desktop-app-designing-total,.desktop-app-designing-cost-summery-line").show();$(".desktop-app-designing-total").text("( $"+totalDesktopAppDesigningCost+")");
	$(".desktop-app-designing-cost-summery").text("$"+totalDesktopAppDesigningCost); 
	if($(".desktop-app-designing-cost-summery").text()=='$0'){
		$(".desktop-app-designing-total,.desktop-app-designing-cost-summery-line").hide();
	}
	//Designing> Games Designing
	let totalGamesDesigningCost=getGamesDesigningCost();
	$(".games-designing-total,.games-designing-cost-summery-line").show();$(".games-designing-total").text("( $"+totalGamesDesigningCost+")");
	$(".games-designing-cost-summery").text("$"+totalGamesDesigningCost); 
	if($(".games-designing-cost-summery").text()=='$0'){
		$(".games-designing-total,.games-designing-cost-summery-line").hide();
	}
	//Designing>Social Media Design
	let totalSocialMediaDesigningCost=getSocialMediaDesigningCost();
	$(".social-media-total,.social-media-design-cost-summery-line").show();$(".social-media-total").text("( $"+totalSocialMediaDesigningCost+")");
	$(".social-media-design-cost-summery").text("$"+totalSocialMediaDesigningCost); 
	if($(".social-media-design-cost-summery").text()=='$0'){
		$(".social-media-total,.social-media-design-cost-summery-line").hide();
	}
	//Designing>Brand Identity
	let totalBrandIdentityDesigningCost=getBrandIdentityDesigningCost();
	$(".brand-identity-total,.brand-identity-cost-summery-line").show();$(".brand-identity-total").text("( $"+totalBrandIdentityDesigningCost+")");
	$(".brand-identity-cost-summery").text("$"+totalBrandIdentityDesigningCost); 
    	if($(".brand-identity-cost-summery").text()=='$0'){
		$(".brand-identity-total,.brand-identity-cost-summery-line").hide();
	}
	let totalDesigningCost=totalWebsiteDesigningCost+totalMobileAppDesigningCost+totalDesktopAppDesigningCost+totalGamesDesigningCost+totalSocialMediaDesigningCost+totalBrandIdentityDesigningCost;
 	if($(".website-designing-cost-summery").text()=='$0' && $(".mobile-app-designing-cost-summery").text()=='$0' && $(".desktop-app-designing-cost-summery").text()=='$0' && $(".games-designing-cost-summery").text()=='$0'  && $(".social-media-design-cost-summery").text()=='$0'  && $(".brand-identity-cost-summery").text()=='$0'){
				$(".designing-summery-line").hide();
		}else{
			$(".designing-summery-line").show();
		}
	//Marketing>SEO Marketing
	let totalSEOMarketingCost=getSEOMarketingCost();
	$(".seo-total,.seo-cost-summery-line").show();$(".seo-total").text("( $"+totalSEOMarketingCost+")");
	$(".seo-cost-summery").text("$"+totalSEOMarketingCost); 
	if($(".seo-cost-summery").text()=='$0'){
		$(".seo-total,.seo-cost-summery-line").hide();
	}
   //Marketing> SEM Marketing
   	let totalSEMMarketingCost=getSEMMarketingCost();
	$(".sem-total,.sem-cost-summery-line").show();$(".sem-total").text("( $"+totalSEMMarketingCost+")");
	$(".sem-cost-summery").text("$"+totalSEMMarketingCost); 
	if($(".sem-cost-summery").text()=='$0'){
		$(".sem-total,.sem-cost-summery-line").hide();
	}
   //Marketing> SMM Marketing
   	let totalSMMMarketingCost=getSMMMarketingCost();
	$(".smm-total,.smm-cost-summery-line").show();$(".smm-total").text("( $"+totalSMMMarketingCost+")");
	$(".smm-cost-summery").text("$"+totalSMMMarketingCost); 
	if($(".smm-cost-summery").text()=='$0'){
		$(".smm-total,.smm-cost-summery-line").hide();
	}
   //Marketing> ASO Marketing
   	let totalASOMarketingCost=getASOMarketingCost();
	$(".aso-total,.aso-cost-summery-line").show();$(".aso-total").text("( $"+totalASOMarketingCost+")");
	$(".aso-cost-summery").text("$"+totalASOMarketingCost); 
	if($(".aso-cost-summery").text()=='$0'){
		$(".aso-total,.aso-cost-summery-line").hide();
	}
	let totalMarketingCost=totalSEOMarketingCost+totalSEMMarketingCost+totalSMMMarketingCost+totalASOMarketingCost;
	if($(".seo-cost-summery").text()=='$0' && $(".sem-cost-summery").text()=='$0' && $(".smm-cost-summery").text()=='$0' && $(".aso-cost-summery").text()=='$0'){
				$(".marketing-summery-line").hide();
		}else{
			$(".marketing-summery-line").show();
		}
	//Content>Informational
	let totalInformationalContentCost=getInformationalContentCost();
	$(".informational-total,.informational-cost-summery-line").show();
	$(".informational-total").text("( $"+parseFloat(totalInformationalContentCost.toFixed(2))+")");
	$(".informational-cost-summery").text("$"+parseFloat(totalInformationalContentCost.toFixed(2))); 

	if($(".informational-cost-summery").text()=='$0'){
				$(".informational-total,.informational-cost-summery-line").hide();
		}
	//Content>Navigational
	let totalNavigationalContentCost=getNavigationalContentCost();
	$(".navigational-total,.navigational-cost-summery-line").show();$(".navigational-total").text("( $"+parseFloat(totalNavigationalContentCost.toFixed(2))+")");
	$(".navigational-cost-summery").text("$"+parseFloat(totalNavigationalContentCost.toFixed(2))); 
	if($(".navigational-cost-summery").text()=='$0'){
		$(".navigational-total,.navigational-cost-summery-line").hide();
	}
	//Marketing> Commercial
	let totalCommercialMarketingCost=getCommercialMarketingCost();
	$(".commercial-total,.commercial-cost-summery-line").show();$(".commercial-total").text("( $"+parseFloat(totalCommercialMarketingCost.toFixed(2))+")");
	$(".commercial-cost-summery").text("$"+parseFloat(totalCommercialMarketingCost.toFixed(2))); 
	if($(".commercial-cost-summery").text()=='$0'){
		$(".commercial-total,.commercial-cost-summery-line").hide();
	}
	//Content>Translational'
	 let totalTranslationalContentCost=getTranslationalContentCost();
	$(".translational-total,.translational-cost-summery-line").show();$(".translational-total").text("( $"+parseFloat(totalTranslationalContentCost.toFixed(2))+")");
	$(".translational-cost-summery").text("$"+parseFloat(totalTranslationalContentCost.toFixed(2))); 
	if($(".translational-cost-summery").text()=='$0'){
		$(".translational-total,.translational-cost-summery-line").hide();
	}
	let totalContentCost=totalInformationalContentCost+totalNavigationalContentCost+totalCommercialMarketingCost+totalTranslationalContentCost;
	let totalContentCostAfterRound=parseFloat(totalContentCost.toFixed(2));
if($(".informational-cost-summery").text()=='$0' && $(".navigational-cost-summery").text()=='$0' && $(".commercial-cost-summery").text()=='$0' && $(".translational-cost-summery").text()=='$0'){
				$(".content-summery-line").hide();
		}else{
			$(".content-summery-line").show();
		}
  let totalCost=totalDevelopmentCost+totalDesigningCost+totalMarketingCost+totalContentCostAfterRound;	
  $("#total-cost").text("$"+totalCost);
// if( $("#total-cost").text()=='$0'){
// 	$(".summery-part").hide();
// }else{
// 	$(".summery-part").show();
// }
});

});


const accordionItems = document.querySelectorAll('.accordion-item');

accordionItems.forEach(item => {
  const header = item.querySelector('.accordion-header');

  header.addEventListener('click', () => {
    // Close all accordion items
    accordionItems.forEach(otherItem => {
      if (otherItem !== item) {
        otherItem.classList.remove('active');
      }
    });

    // Toggle the clicked item
    item.classList.toggle('active');
  });
});



const subAccordionItems = document.querySelectorAll('.sub-accordion .sub-accordion-item');

subAccordionItems.forEach(item => {
    const header = item.querySelector('.sub-accordion-header');

    header.addEventListener('click', () => {
        // Toggle the clicked item
        item.classList.toggle('active');
    });
});

function getWebsiteCMSCost() {
//Development>Wesite>CMS>Wordpress  
  let noOfPagesWebsiteCmsWordpress=(!(jQuery("#noOfPagesWebsiteCmsWordpress").val())) ? 0 : jQuery("#noOfPagesWebsiteCmsWordpress").val();
  let noOfProductsWebsiteCmsWordpress=(!(jQuery("#noOfProductsWebsiteCmsWordpress").val())) ? 0 : jQuery("#noOfProductsWebsiteCmsWordpress").val();
  let minHoursWebsiteCmsWordpress=en_public_data.minHoursWebsiteCmsWordpress;
  let perPageHoursWebsiteCmsWordpress=en_public_data.perPageHoursWebsiteCmsWordpress;
  let perProductHoursWebsiteCmsWordpress=en_public_data.perProductHoursWebsiteCmsWordpress;
  let perHourRateWebsiteCmsWordpress=en_public_data.perHourRateWebsiteCmsWordpress;
let totalCostWebsiteCmsWordpress=0;
	if(noOfPagesWebsiteCmsWordpress!=0 || noOfProductsWebsiteCmsWordpress!=0){totalCostWebsiteCmsWordpress=(parseFloat(minHoursWebsiteCmsWordpress)+(parseFloat(perPageHoursWebsiteCmsWordpress)*parseFloat(noOfPagesWebsiteCmsWordpress))+(parseFloat(perProductHoursWebsiteCmsWordpress)*parseFloat(noOfProductsWebsiteCmsWordpress)))*parseFloat(perHourRateWebsiteCmsWordpress);}	
//Development>Wesite>CMS>Shopify	
  let noOfPagesWebsiteCmsShopify=(!(jQuery("#noOfPagesWebsiteCmsShopify").val())) ? 0 : jQuery("#noOfPagesWebsiteCmsShopify").val();
  let noOfProductsWebsiteCmsShopify=(!(jQuery("#noOfProductsWebsiteCmsShopify").val())) ? 0 : jQuery("#noOfProductsWebsiteCmsShopify").val();	
  let minHoursWebsiteCmsShopify=en_public_data.minHoursWebsiteCmsShopify;
  let perPageHoursWebsiteCmsShopify=en_public_data.perPageHoursWebsiteCmsShopify;
  let perProductHoursWebsiteCmsShopify=en_public_data.perProductHoursWebsiteCmsShopify;
  let perHourRateWebsiteCmsShopify=en_public_data.perHourRateWebsiteCmsShopify;
let totalCostWebsiteCmsShopify=0;if(noOfPagesWebsiteCmsShopify!=0 || noOfProductsWebsiteCmsShopify!=0){totalCostWebsiteCmsShopify=(parseFloat(minHoursWebsiteCmsShopify)+(parseFloat(perPageHoursWebsiteCmsShopify)*parseFloat(noOfPagesWebsiteCmsShopify))+(parseFloat(perProductHoursWebsiteCmsShopify)*parseFloat(noOfProductsWebsiteCmsShopify)))*parseFloat(perHourRateWebsiteCmsShopify);}
  //Development>Wesite>CMS>Wix
  let noOfPagesWebsiteCmsWix=(!(jQuery("#noOfPagesWebsiteCmsWix").val())) ? 0 : jQuery("#noOfPagesWebsiteCmsWix").val();
  let noOfProductsWebsiteCmsWix=(!(jQuery("#noOfProductsWebsiteCmsWix").val())) ? 0 : jQuery("#noOfProductsWebsiteCmsWix").val();
  let minHoursWebsiteCmsWix=en_public_data.minHoursWebsiteCmsWix;
  let perPageHoursWebsiteCmsWix=en_public_data.perPageHoursWebsiteCmsWix;
  let perProductHoursWebsiteCmsWix=en_public_data.perProductHoursWebsiteCmsWix;
  let perHourRateWebsiteCmsWix=en_public_data.perHourRateWebsiteCmsWix;
	let totalCostWebsiteCmsWix=0;if(noOfPagesWebsiteCmsWix!=0 || noOfProductsWebsiteCmsWix!=0){totalCostWebsiteCmsWix=(parseFloat(minHoursWebsiteCmsWix)+(parseFloat(perPageHoursWebsiteCmsWix)*parseFloat(noOfPagesWebsiteCmsWix))+(parseFloat(perProductHoursWebsiteCmsWix)*parseFloat(noOfProductsWebsiteCmsWix)))*parseFloat(perHourRateWebsiteCmsWix);}
 //Development>Wesite>CMS>Joomla
  let noOfPagesWebsiteCmsJoomla=(!(jQuery("#noOfPagesWebsiteCmsJoomla").val())) ? 0 : jQuery("#noOfPagesWebsiteCmsJoomla").val();
  let noOfProductsWebsiteCmsJoomla=(!(jQuery("#noOfProductsWebsiteCmsJoomla").val())) ? 0 : jQuery("#noOfProductsWebsiteCmsJoomla").val();	
  let minHoursWebsiteCmsJoomla=en_public_data.minHoursWebsiteCmsJoomla;
  let perPageHoursWebsiteCmsJoomla=en_public_data.perPageHoursWebsiteCmsJoomla;
  let perProductHoursWebsiteCmsJoomla=en_public_data.perProductHoursWebsiteCmsJoomla;
  let perHourRateWebsiteCmsJoomla=en_public_data.perHourRateWebsiteCmsJoomla;
  let totalCostWebsiteCmsJoomla=0;if(noOfPagesWebsiteCmsJoomla!=0 || noOfProductsWebsiteCmsJoomla!=0){totalCostWebsiteCmsJoomla =(parseFloat(minHoursWebsiteCmsJoomla)+(parseFloat(perPageHoursWebsiteCmsJoomla)*parseFloat(noOfPagesWebsiteCmsJoomla))+(parseFloat(perProductHoursWebsiteCmsJoomla)*parseFloat(noOfProductsWebsiteCmsJoomla)))*parseFloat(perHourRateWebsiteCmsJoomla);}
 //Development>Wesite>CMS>Magento
  let noOfPagesWebsiteCmsMagento=(!(jQuery("#noOfPagesWebsiteCmsMagento").val())) ? 0 : jQuery("#noOfPagesWebsiteCmsMagento").val();
  let noOfProductsWebsiteCmsMagento=(!(jQuery("#noOfProductsWebsiteCmsMagento").val())) ? 0 : jQuery("#noOfProductsWebsiteCmsMagento").val();
  let minHoursWebsiteCmsMagento=en_public_data.minHoursWebsiteCmsMagento;
  let perPageHoursWebsiteCmsMagento=en_public_data.perPageHoursWebsiteCmsMagento;
  let perProductHoursWebsiteCmsMagento=en_public_data.perProductHoursWebsiteCmsMagento;
  let perHourRateWebsiteCmsMagento=en_public_data.perHourRateWebsiteCmsMagento;
	  let totalCostWebsiteCmsMagento=0;if(noOfPagesWebsiteCmsMagento!=0 || noOfProductsWebsiteCmsMagento!=0){totalCostWebsiteCmsMagento=(parseFloat(minHoursWebsiteCmsMagento)+(parseFloat(perPageHoursWebsiteCmsMagento)*parseFloat(noOfPagesWebsiteCmsMagento))+(parseFloat(perProductHoursWebsiteCmsMagento)*parseFloat(noOfProductsWebsiteCmsMagento)))*parseFloat(perHourRateWebsiteCmsMagento);}
 //Development>Wesite>CMS>Drupal
 let noOfPagesWebsiteCmsDrupal=(!(jQuery("#noOfPagesWebsiteCmsDrupal").val())) ? 0 : jQuery("#noOfPagesWebsiteCmsDrupal").val();
  let noOfProductsWebsiteCmsDrupal=(!(jQuery("#noOfProductsWebsiteCmsDrupal").val())) ? 0 : jQuery("#noOfProductsWebsiteCmsDrupal").val();
  let minHoursWebsiteCmsDrupal=en_public_data.minHoursWebsiteCmsDrupal;
  let perPageHoursWebsiteCmsDrupal=en_public_data.perPageHoursWebsiteCmsDrupal;
  let perProductHoursWebsiteCmsDrupal=en_public_data.perProductHoursWebsiteCmsDrupal;
  let perHourRateWebsiteCmsDrupal=en_public_data.perHourRateWebsiteCmsDrupal; 
 let totalCostWebsiteCmsDrupal=0;if(noOfPagesWebsiteCmsDrupal!=0 || noOfProductsWebsiteCmsDrupal!=0){totalCostWebsiteCmsDrupal=(parseFloat(minHoursWebsiteCmsDrupal)+(parseFloat(perPageHoursWebsiteCmsDrupal)*parseFloat(noOfPagesWebsiteCmsDrupal))+(parseFloat(perProductHoursWebsiteCmsDrupal)*parseFloat(noOfProductsWebsiteCmsDrupal)))*parseFloat(perHourRateWebsiteCmsDrupal);}
	
let totalCostWebsiteCms=totalCostWebsiteCmsWordpress+totalCostWebsiteCmsShopify+totalCostWebsiteCmsWix+totalCostWebsiteCmsJoomla+totalCostWebsiteCmsMagento+totalCostWebsiteCmsDrupal;
	
			
	return totalCostWebsiteCms;
}
function getWebsiteCustomDevelopmentCost() {
//Development>Wesite>Custom Development>Front-end Development>HTML / CSS / Bootstrap
  let noOfPagesWebsiteCustomHTMLCSSBootstrap=(!(jQuery("#noOfPagesWebsiteCustomHtmlCssBootstrap").val())) ? 0 : jQuery("#noOfPagesWebsiteCustomHtmlCssBootstrap").val();
  let noOfProductsWebsiteCustomHTMLCSSBootstrap=(!(jQuery("#noOfProductsWebsiteCustomHtmlCssBootstrap").val())) ? 0 : jQuery("#noOfProductsWebsiteCustomHtmlCssBootstrap").val();	
  let minHoursWebsiteCustomHTMLCSSBootstrap=en_public_data.minHoursWebsiteCustomHTMLCSSBootstrap;
  let perPageHoursWebsiteCustomHTMLCSSBootstrap=en_public_data.perPageHoursWebsiteCustomHTMLCSSBootstrap;
  let perProductHoursWebsiteCustomHTMLCSSBootstrap=en_public_data.perProductHoursWebsiteCustomHTMLCSSBootstrap;
  let perHourRateWebsiteCustomHTMLCSSBootstrap=en_public_data.perHourRateWebsiteCustomHTMLCSSBootstrap;
  let totalCostWebsiteCustomHTMLCSSBootstrap=0;if(noOfPagesWebsiteCustomHTMLCSSBootstrap!=0 || noOfProductsWebsiteCustomHTMLCSSBootstrap!=0){totalCostWebsiteCustomHTMLCSSBootstrap=(parseFloat(minHoursWebsiteCustomHTMLCSSBootstrap)+(parseFloat(perPageHoursWebsiteCustomHTMLCSSBootstrap)*parseFloat(noOfPagesWebsiteCustomHTMLCSSBootstrap))+(parseFloat(perProductHoursWebsiteCustomHTMLCSSBootstrap)*parseFloat(noOfProductsWebsiteCustomHTMLCSSBootstrap)))*parseFloat(perHourRateWebsiteCustomHTMLCSSBootstrap);  }
//Development>Wesite>Custom Development>Front-end Development>React Js
  let noOfPagesWebsiteCustomReactJs=(!(jQuery("#noOfPagesWebsiteCustomReactJs").val())) ? 0 : jQuery("#noOfPagesWebsiteCustomReactJs").val();
  let noOfProductsWebsiteCustomReactJs=(!(jQuery("#noOfProductsWebsiteCustomReactJs").val())) ? 0 : jQuery("#noOfProductsWebsiteCustomReactJs").val();
  let minHoursWebsiteCustomReactJs=en_public_data.minHoursWebsiteCustomReactJs;
  let perPageHoursWebsiteCustomReactJs=en_public_data.perPageHoursWebsiteCustomReactJs;
  let perProductHoursWebsiteCustomReactJs=en_public_data.perProductHoursWebsiteCustomReactJs;
  let perHourRateWebsiteCustomReactJs=en_public_data.perHourRateWebsiteCustomReactJs;
  let totalCostWebsiteCustomReactJs=0;if(noOfPagesWebsiteCustomReactJs!=0 || noOfProductsWebsiteCustomReactJs!=0){ totalCostWebsiteCustomReactJs=(parseFloat(minHoursWebsiteCustomReactJs)+(parseFloat(perPageHoursWebsiteCustomReactJs)*parseFloat(noOfPagesWebsiteCustomReactJs))+(parseFloat(perProductHoursWebsiteCustomReactJs)*parseFloat(noOfProductsWebsiteCustomReactJs)))*parseFloat(perHourRateWebsiteCustomReactJs);}
//Development>Wesite>Custom Development>Front-end Development>Angular Js
  let noOfPagesWebsiteCustomAngularJs=(!(jQuery("#noOfPagesWebsiteCustomAngularJs").val())) ? 0 : jQuery("#noOfPagesWebsiteCustomAngularJs").val();
  let noOfProductsWebsiteCustomAngularJs=(!(jQuery("#noOfProductsWebsiteCustomAngularJs").val())) ? 0 : jQuery("#noOfProductsWebsiteCustomAngularJs").val();
  let minHoursWebsiteCustomAngularJs=en_public_data.minHoursWebsiteCustomAngularJs;
  let perPageHoursWebsiteCustomAngularJs=en_public_data.perPageHoursWebsiteCustomAngularJs;
  let perProductHoursWebsiteCustomAngularJs=en_public_data.perProductHoursWebsiteCustomAngularJs;
  let perHourRateWebsiteCustomAngularJs=en_public_data.perHourRateWebsiteCustomAngularJs;
  let totalCostWebsiteCustomAngularJs=0;if(noOfPagesWebsiteCustomAngularJs!=0 || noOfProductsWebsiteCustomAngularJs!=0){ totalCostWebsiteCustomAngularJs=(parseFloat(minHoursWebsiteCustomAngularJs)+(parseFloat(perPageHoursWebsiteCustomAngularJs)*parseFloat(noOfPagesWebsiteCustomAngularJs))+(parseFloat(perProductHoursWebsiteCustomAngularJs)*parseFloat(noOfProductsWebsiteCustomAngularJs)))*parseFloat(perHourRateWebsiteCustomAngularJs);}
//Development>Wesite>Custom Development>Front-end Development>Vue Js
  let noOfPagesWebsiteCustomVueJs=(!(jQuery("#noOfPagesWebsiteCustomVueJs").val())) ? 0 : jQuery("#noOfPagesWebsiteCustomVueJs").val();
  let noOfProductsWebsiteCustomVueJs=(!(jQuery("#noOfProductsWebsiteCustomVueJs").val())) ? 0 : jQuery("#noOfProductsWebsiteCustomVueJs").val();
  let minHoursWebsiteCustomVueJs=en_public_data.minHoursWebsiteCustomVueJs;
  let perPageHoursWebsiteCustomVueJs=en_public_data.perPageHoursWebsiteCustomVueJs;
  let perProductHoursWebsiteCustomVueJs=en_public_data.perProductHoursWebsiteCustomVueJs;
  let perHourRateWebsiteCustomVueJs=en_public_data.perHourRateWebsiteCustomVueJs;
  let totalCostWebsiteCustomVueJs=0;if(noOfPagesWebsiteCustomVueJs!=0 || noOfProductsWebsiteCustomVueJs!=0){totalCostWebsiteCustomVueJs=(parseFloat(minHoursWebsiteCustomVueJs)+(parseFloat(perPageHoursWebsiteCustomVueJs)*parseFloat(noOfPagesWebsiteCustomVueJs))+(parseFloat(perProductHoursWebsiteCustomVueJs)*parseFloat(noOfProductsWebsiteCustomVueJs)))*parseFloat(perHourRateWebsiteCustomVueJs);}
//Development>Wesite>Custom Development>Back-end Development>Python
  let noOfApisWebsiteCustomPython=(!(jQuery("#noOfApisWebsiteCustomPython").val())) ? 0 : jQuery("#noOfApisWebsiteCustomPython").val();
  let minHoursWebsiteCustomPython=en_public_data.minHoursWebsiteCustomPython;
  let perApisHoursWebsiteCustomPython=en_public_data.perApisHoursWebsiteCustomPython;
  let perHourRateWebsiteCustomPython=en_public_data.perHourRateWebsiteCustomPython;
  let totalCostWebsiteCustomPython=0;if(noOfApisWebsiteCustomPython!=0){totalCostWebsiteCustomPython=(parseFloat(minHoursWebsiteCustomPython)+(parseFloat(perApisHoursWebsiteCustomPython)*parseFloat(noOfApisWebsiteCustomPython)))*parseFloat(perHourRateWebsiteCustomPython);}
 //Development>Wesite>Custom Development>Back-end Development>Node JS
  let noOfApisWebsiteCustomNodejs=(!(jQuery("#noOfApisWebsiteCustomNodejs").val())) ? 0 : jQuery("#noOfApisWebsiteCustomNodejs").val();
  let minHoursWebsiteCustomNodeJs=en_public_data.minHoursWebsiteCustomNodeJs;
  let perApiHoursWebsiteCustomNodeJs=en_public_data.perApiHoursWebsiteCustomNodeJs;
  let perHourRateWebsiteCustomNodeJs=en_public_data.perHourRateWebsiteCustomNodeJs;
  let totalCostWebsiteCustomNodeJs=0;if(noOfApisWebsiteCustomNodejs!=0 ){totalCostWebsiteCustomNodeJs=(parseFloat(minHoursWebsiteCustomNodeJs)+(parseFloat(perApiHoursWebsiteCustomNodeJs)*parseFloat(noOfApisWebsiteCustomNodejs)))*parseFloat(perHourRateWebsiteCustomNodeJs);}
//Development>Wesite>Custom Development>Back-end Development>php
  let noOfApisWebsiteCustomPhp=(!(jQuery("#noOfApisWebsiteCustomPhp").val())) ? 0 : jQuery("#noOfApisWebsiteCustomPhp").val();
  let minHoursWebsiteCustomPhp=en_public_data.minHoursWebsiteCustomPhp;
  let perApiHoursWebsiteCustomPhp=en_public_data.perApiHoursWebsiteCustomPhp;
  let perHourRateWebsiteCustomPhp=en_public_data.perHourRateWebsiteCustomPhp;
  let totalCostWebsiteCustomPhp=0;if(noOfApisWebsiteCustomPhp!=0 ){totalCostWebsiteCustomPhp=(parseFloat(minHoursWebsiteCustomPhp)+(parseFloat(perApiHoursWebsiteCustomPhp)*parseFloat(noOfApisWebsiteCustomPhp)))*parseFloat(perHourRateWebsiteCustomPhp);}
//Development>Wesite>Custom Development>Back-end Development>Ruby
  let noOfApisWebsiteCustomRuby=(!(jQuery("#noOfApisWebsiteCustomRuby").val())) ? 0 : jQuery("#noOfApisWebsiteCustomRuby").val();
  let minHoursWebsiteCustomRuby=en_public_data.minHoursWebsiteCustomRuby;
  let perApiHoursWebsiteCustomRuby=en_public_data.perApiHoursWebsiteCustomRuby;
  let perHourRateWebsiteCustomRuby=en_public_data.perHourRateWebsiteCustomRuby;
  let totalCostWebsiteCustomRuby=0;if(noOfApisWebsiteCustomRuby!=0 ){totalCostWebsiteCustomRuby=(parseFloat(minHoursWebsiteCustomRuby)+(parseFloat(perApiHoursWebsiteCustomRuby)*parseFloat(noOfApisWebsiteCustomRuby)))*parseFloat(perHourRateWebsiteCustomRuby);}
//Development>Wesite>Custom Development>Back-end Development>C# Sharp
  let noOfApisWebsiteCustomCSharp=(!(jQuery("#noOfApisWebsiteCustomCSharp").val())) ? 0 : jQuery("#noOfApisWebsiteCustomCSharp").val();
  let minHoursWebsiteCustomCSharp=en_public_data.minHoursWebsiteCustomCSharp;
  let perApiHoursWebsiteCustomCSharp=en_public_data.perApiHoursWebsiteCustomCSharp;
  let perHourRateWebsiteCustomCSharp=en_public_data.perHourRateWebsiteCustomCSharp;
  let totalCostWebsiteCustomCSharp=0;if(noOfApisWebsiteCustomCSharp!=0){totalCostWebsiteCustomCSharp=(parseFloat(minHoursWebsiteCustomCSharp)+(parseFloat(perApiHoursWebsiteCustomCSharp)*parseFloat(noOfApisWebsiteCustomCSharp)))*parseFloat(perHourRateWebsiteCustomCSharp);}
//Development>Wesite>Custom Development>Back-end Development>Java
  let noOfApisWebsiteCustomJava=(!(jQuery("#noOfApisWebsiteCustomJava").val())) ? 0 : jQuery("#noOfApisWebsiteCustomJava").val();
  let minHoursWebsiteCustomJava=en_public_data.minHoursWebsiteCustomJava;
  let perApiHoursWebsiteCustomJava=en_public_data.perApiHoursWebsiteCustomJava;
  let perHourRateWebsiteCustomJava=en_public_data.perHourRateWebsiteCustomJava;
  let totalCostWebsiteCustomJava=0;if(noOfApisWebsiteCustomJava!=0 ){ totalCostWebsiteCustomJava=(parseFloat(minHoursWebsiteCustomJava)+(parseFloat(perApiHoursWebsiteCustomJava)*parseFloat(noOfApisWebsiteCustomJava)))*parseFloat(perHourRateWebsiteCustomJava);}
	
	let totalCostWebsiteCustomDevelopment=totalCostWebsiteCustomHTMLCSSBootstrap+totalCostWebsiteCustomReactJs+totalCostWebsiteCustomAngularJs+totalCostWebsiteCustomVueJs+totalCostWebsiteCustomPython+totalCostWebsiteCustomNodeJs+totalCostWebsiteCustomPhp+totalCostWebsiteCustomRuby+totalCostWebsiteCustomCSharp+totalCostWebsiteCustomJava;

	return totalCostWebsiteCustomDevelopment;
}
function getWebsiteCMaintenanceCost() {
	//Development>Wesite>Maintenance>Bug Fixing and Security Updates
  let noOfFixesWebsiteMaintenanceBugFix=(!(jQuery("#noOfFixesWebsiteMaintenanceBugFix").val())) ? 0 : jQuery("#noOfFixesWebsiteMaintenanceBugFix").val();
  let minHoursWebsiteMaintenanceBugFix=en_public_data.minHoursWebsiteMaintenanceBugFix;
  let perFixHoursWebsiteMaintenanceBugFix=en_public_data.perFixHoursWebsiteMaintenanceBugFix;
  let perHourRateWebsiteMaintenanceBugFix=en_public_data.perHourRateWebsiteMaintenanceBugFix;
  let totalCostWebsiteMaintenanceBugFix=0;if(noOfFixesWebsiteMaintenanceBugFix!=0){ totalCostWebsiteMaintenanceBugFix=(parseFloat(minHoursWebsiteMaintenanceBugFix)+(parseFloat(perFixHoursWebsiteMaintenanceBugFix)*parseFloat(noOfFixesWebsiteMaintenanceBugFix)))*parseFloat(perHourRateWebsiteMaintenanceBugFix);}
//Development>Wesite>Maintenance> Migration / Backup
  let noOfSitesWebsiteMaintenance=(!(jQuery("#noOfSitesWebsiteMaintenance").val())) ? 0 : jQuery("#noOfSitesWebsiteMaintenance").val();
  let minHoursWebsiteMaintenanceBackup=en_public_data.minHoursWebsiteMaintenanceBackup;
  let perSiteHoursWebsiteMaintenanceBackup=en_public_data.perSiteHoursWebsiteMaintenanceBackup;
  let perHourRateWebsiteMaintenanceBackup=en_public_data.perHourRateWebsiteMaintenanceBackup;
  let totalCostWebsiteMaintenanceBackup=0;if(noOfSitesWebsiteMaintenance!=0){ totalCostWebsiteMaintenanceBackup=(parseFloat(minHoursWebsiteMaintenanceBackup)+(parseFloat(perSiteHoursWebsiteMaintenanceBackup)*parseFloat(noOfSitesWebsiteMaintenance)))*parseFloat(perHourRateWebsiteMaintenanceBackup);}
//Development>Wesite>Maintenance> Additional Feature
  let noOfFeaturesWebsiteMaintenance=(!(jQuery("#noOfFeaturesWebsiteMaintenance").val())) ? 0 : jQuery("#noOfFeaturesWebsiteMaintenance").val();
  let minHoursWebsiteMaintenanceFeature=en_public_data.minHoursWebsiteMaintenanceFeature;
  let perFeatureHoursWebsiteMaintenanceFeature=en_public_data.perFeatureHoursWebsiteMaintenanceFeature;
  let perHourRateWebsiteMaintenanceFeature=en_public_data.perHourRateWebsiteMaintenanceFeature;
	let totalCostWebsiteMaintenanceFeature=0;if(noOfFeaturesWebsiteMaintenance!=0){totalCostWebsiteMaintenanceFeature=(parseFloat(minHoursWebsiteMaintenanceFeature)+(parseFloat(perFeatureHoursWebsiteMaintenanceFeature)*parseFloat(noOfFeaturesWebsiteMaintenance)))*parseFloat(perHourRateWebsiteMaintenanceFeature);}
	
	let totalCostWebsiteCMaintenance=totalCostWebsiteMaintenanceBugFix+totalCostWebsiteMaintenanceBackup+totalCostWebsiteMaintenanceFeature;
	return totalCostWebsiteCMaintenance;
}
function getMobileAndroidAppsCost() {
//Development>Mobile>Android Apps>Java
  let noOfScreensMobileAndroidJava=(!(jQuery("#noOfScreensMobileAndroidJava").val())) ? 0 : jQuery("#noOfScreensMobileAndroidJava").val();
  let minHoursMobileAndroidJava=en_public_data.minHoursMobileAndroidJava;
  let perScreenHoursMobileAndroidJava=en_public_data.perScreenHoursMobileAndroidJava;
  let adsIntegrationHoursMobileAndroidJava=en_public_data.adsIntegrationHoursMobileAndroidJava;
  let inAppPurchaseHoursMobileAndroidJava=en_public_data.inAppPurchaseHoursMobileAndroidJava;
  let perHourRateMobileAndroidJava=en_public_data.perHourRateMobileAndroidJava;
  let adsIntegrationMobileAndroidJavaToggle=0;
  if ( jQuery("#adsIntegrationMobileAndroidJava").prop('checked') ) {adsIntegrationMobileAndroidJavaToggle=1;}else{adsIntegrationMobileAndroidJavaToggle=0;}
  let inAppPurchaseMobileAndroidJavaToggle=0;
  if ( jQuery("#inAppPurchaseMobileAndroidJava").prop('checked') ) {inAppPurchaseMobileAndroidJavaToggle=1;}else{inAppPurchaseMobileAndroidJavaToggle=0;}
	let totalCostMobileAndroidJava=0;if(noOfScreensMobileAndroidJava!=0 || adsIntegrationMobileAndroidJavaToggle==1 || inAppPurchaseMobileAndroidJavaToggle==1){totalCostMobileAndroidJava=(parseFloat(minHoursMobileAndroidJava)+(parseFloat(perScreenHoursMobileAndroidJava)*parseFloat(noOfScreensMobileAndroidJava))+(parseFloat(adsIntegrationHoursMobileAndroidJava)*adsIntegrationMobileAndroidJavaToggle)+(parseFloat(inAppPurchaseHoursMobileAndroidJava)*inAppPurchaseMobileAndroidJavaToggle))*parseFloat(perHourRateMobileAndroidJava);}
//Development>Mobile>Android Apps>Kotlin
  let noOfScreensMobileAndroidKotlin=(!(jQuery("#noOfScreensMobileAndroidKotlin").val())) ? 0 : jQuery("#noOfScreensMobileAndroidKotlin").val();
  let minHoursMobileAndroidKotlin=en_public_data.minHoursMobileAndroidKotlin;
  let perScreenHoursMobileAndroidKotlin=en_public_data.perScreenHoursMobileAndroidKotlin;
  let adsIntegrationHoursMobileAndroidKotlin=en_public_data.adsIntegrationHoursMobileAndroidKotlin;
  let inAppPurchaseHoursMobileAndroidKotlin=en_public_data.inAppPurchaseHoursMobileAndroidKotlin;
  let perHourRateMobileAndroidKotlin=en_public_data.perHourRateMobileAndroidKotlin;
  let adsIntegrationMobileAndroidKotlinToggle=0;
  if ( jQuery("#adsIntegrationMobileAndroidKotlin").prop('checked') ) {adsIntegrationMobileAndroidKotlinToggle=1;}else{adsIntegrationMobileAndroidKotlinToggle=0;}
  let inAppPurchaseMobileAndroidKotlinToggle=0;
  if ( jQuery("#inAppPurchaseMobileAndroidKotlin").prop('checked') ) {inAppPurchaseMobileAndroidKotlinToggle=1;}else{inAppPurchaseMobileAndroidKotlinToggle=0;}
	let totalCostMobileAndroidKotlin=0;if(noOfScreensMobileAndroidKotlin!=0 || adsIntegrationMobileAndroidKotlinToggle==1 || inAppPurchaseMobileAndroidKotlinToggle==1){totalCostMobileAndroidKotlin=(parseFloat(minHoursMobileAndroidKotlin)+(parseFloat(perScreenHoursMobileAndroidKotlin)*parseFloat(noOfScreensMobileAndroidKotlin))+(parseFloat(adsIntegrationHoursMobileAndroidKotlin)*adsIntegrationMobileAndroidKotlinToggle)+(parseFloat(inAppPurchaseHoursMobileAndroidKotlin)*inAppPurchaseMobileAndroidKotlinToggle))*parseFloat(perHourRateMobileAndroidKotlin);}
  let totalCostAndroidApps=totalCostMobileAndroidJava+totalCostMobileAndroidKotlin;
	return totalCostAndroidApps;
}
function getMobileIOSAppsCost() {
//Development>Mobile> IOS Apps>Swift
  let noOfScreensMobileIosSwift=(!(jQuery("#noOfScreensMobileIOSSwift").val())) ? 0 : jQuery("#noOfScreensMobileIOSSwift").val();
  let minHoursMobileIosSwift=en_public_data.minHoursMobileIosSwift;
  let perScreenHoursMobileIosSwift=en_public_data.perScreenHoursMobileIosSwift;
  let adsIntegrationHoursMobileIosSwift=en_public_data.adsIntegrationHoursMobileIosSwift;
  let inAppPurchaseHoursMobileIosSwift=en_public_data.inAppPurchaseHoursMobileIosSwift;
  let perHourRateMobileIosSwift=en_public_data.perHourRateMobileIosSwift;
  let adsIntegrationMobileIOSSwiftToggle=0;
  if ( jQuery("#adsIntegrationMobileIOSSwift").prop('checked') ) {adsIntegrationMobileIOSSwiftToggle=1;}else{adsIntegrationMobileIOSSwiftToggle=0;}
  let inAppPurchaseMobileIOSSwiftToggle=0;
  if ( jQuery("#inAppPurchaseMobileIOSSwift").prop('checked') ) {inAppPurchaseMobileIOSSwiftToggle=1;}else{inAppPurchaseMobileIOSSwiftToggle=0;}
	let totalCostMobileIosSwift=0;if(noOfScreensMobileIosSwift!=0 || adsIntegrationMobileIOSSwiftToggle==1 || inAppPurchaseMobileIOSSwiftToggle==1){totalCostMobileIosSwift = (parseFloat(minHoursMobileIosSwift)+(parseFloat(perScreenHoursMobileIosSwift)*parseFloat(noOfScreensMobileIosSwift))+(parseFloat(adsIntegrationHoursMobileIosSwift)*adsIntegrationMobileIOSSwiftToggle)+(parseFloat(inAppPurchaseHoursMobileIosSwift)*inAppPurchaseMobileIOSSwiftToggle))*parseFloat(perHourRateMobileIosSwift);}
//Development>Mobile> IOS Apps>Objective C
  let noOfScreensMobileIOSObjectiveC=(!(jQuery("#noOfScreensMobileIOSObjectiveC").val())) ? 0 : jQuery("#noOfScreensMobileIOSObjectiveC").val();
  let minHoursMobileIosObjectiveC=en_public_data.minHoursMobileIosObjectiveC;
  let perScreenHoursMobileIosObjectiveC=en_public_data.perScreenHoursMobileIosObjectiveC;
  let adsIntegrationHoursMobileIosObjectiveC=en_public_data.adsIntegrationHoursMobileIosObjectiveC;
  let inAppPurchaseHoursMobileIosObjectiveC=en_public_data.inAppPurchaseHoursMobileIosObjectiveC;
  let perHourRateMobileIosObjectiveC=en_public_data.perHourRateMobileIosObjectiveC;
  let adsIntegrationMobileIOSObjectiveCToggle=0;
  if ( jQuery("#adsIntegrationMobileIOSObjectiveC").prop('checked') ) {adsIntegrationMobileIOSObjectiveCToggle=1;}else{adsIntegrationMobileIOSObjectiveCToggle=0;}
  let inAppPurchaseMobileIOSObjectiveCToggle=0;
  if ( jQuery("#inAppPurchaseMobileIOSObjectiveC").prop('checked') ) {inAppPurchaseMobileIOSObjectiveCToggle=1;}else{inAppPurchaseMobileIOSObjectiveCToggle=0;}
  let totalCostMobileIosObjectiveC=0;if(noOfScreensMobileIOSObjectiveC!=0 || adsIntegrationMobileIOSObjectiveCToggle==1 || inAppPurchaseMobileIOSObjectiveCToggle==1){ totalCostMobileIosObjectiveC=(parseFloat(minHoursMobileIosObjectiveC)+(parseFloat(perScreenHoursMobileIosObjectiveC)*parseFloat(noOfScreensMobileIOSObjectiveC))+(parseFloat(adsIntegrationHoursMobileIosObjectiveC)*adsIntegrationMobileIOSObjectiveCToggle)+(parseFloat(inAppPurchaseHoursMobileIosObjectiveC)*inAppPurchaseMobileIOSObjectiveCToggle))*parseFloat(perHourRateMobileIosObjectiveC);}
	
	  let totalCostIosApps=totalCostMobileIosSwift+totalCostMobileIosObjectiveC;	
	return totalCostIosApps;
}
function getMobileHybridAppsCost() {
//Development>Mobile>Hybrid Apps>React Native>IOS
let noOfScreensMobileHybridReactNativeIOS=(!(jQuery("#noOfScreensMobileHybridReactIOS").val())) ? 0 : jQuery("#noOfScreensMobileHybridReactIOS").val();	
  let minHoursMobileHybridReactNativeIOS=en_public_data.minHoursMobileHybridReactNativeIOS;
  let perScreenHoursMobileHybridReactNativeIOS=en_public_data.perScreenHoursMobileHybridReactNativeIOS;
  let adsIntegrationHoursMobileHybridReactNativeIOS=en_public_data.adsIntegrationHoursMobileHybridReactNativeIOS;
  let inAppPurchaseHoursMobileHybridReactNativeIOS=en_public_data.inAppPurchaseHoursMobileHybridReactNativeIOS;
  let perHourRateMobileHybridReactNativeIOS=en_public_data.perHourRateMobileHybridReactNativeIOS;
  let adsIntegrationMobileHybridReactIOSToggle=0;
  if ( jQuery("#adsIntegrationMobileHybridReactIOS").prop('checked') ) {adsIntegrationMobileHybridReactIOSToggle=1;}else{adsIntegrationMobileHybridReactIOSToggle=0;}
  let inAppPurchaseMobileHybridReactIOSToggle=0;
  if ( jQuery("#inAppPurchaseMobileHybridReactIOS").prop('checked') ) {inAppPurchaseMobileHybridReactIOSToggle=1;}else{inAppPurchaseMobileHybridReactIOSToggle=0;}
   let totalCostMobileHybridReactNativeIOS=0;if(noOfScreensMobileHybridReactNativeIOS!=0 || adsIntegrationMobileHybridReactIOSToggle==1 || inAppPurchaseMobileHybridReactIOSToggle==1){ totalCostMobileHybridReactNativeIOS=(parseFloat(minHoursMobileHybridReactNativeIOS)+(parseFloat(perScreenHoursMobileHybridReactNativeIOS)*parseFloat(noOfScreensMobileHybridReactNativeIOS))+(parseFloat(adsIntegrationHoursMobileHybridReactNativeIOS)*adsIntegrationMobileHybridReactIOSToggle)+(parseFloat(inAppPurchaseHoursMobileHybridReactNativeIOS)*inAppPurchaseMobileHybridReactIOSToggle))*parseFloat(perHourRateMobileHybridReactNativeIOS);}
//Development>Mobile>Hybrid Apps>React Native>Android
  let noOfScreensMobileHybridReactAndroid=(!(jQuery("#noOfScreensMobileHybridReactAndroid").val())) ? 0 : jQuery("#noOfScreensMobileHybridReactAndroid").val();	
  let minHoursMobileHybridReactNativeAndroid=en_public_data.minHoursMobileHybridReactNativeAndroid;
  let perScreenHoursMobileHybridReactNativeAndroid=en_public_data.perScreenHoursMobileHybridReactNativeAndroid;
  let adsIntegrationHoursMobileHybridReactNativeAndroid=en_public_data.adsIntegrationHoursMobileHybridReactNativeAndroid;
  let inAppPurchaseHoursMobileHybridReactNativeAndroid=en_public_data.inAppPurchaseHoursMobileHybridReactNativeAndroid;
  let perHourRateMobileHybridReactNativeAndroid=en_public_data.perHourRateMobileHybridReactNativeAndroid;
  let adsIntegrationMobileHybridReactAndroidToggle=0;
  if ( jQuery("#adsIntegrationMobileHybridReactAndroid").prop('checked') ) {adsIntegrationMobileHybridReactAndroidToggle=1;}else{adsIntegrationMobileHybridReactAndroidToggle=0;}
  let inAppPurchaseMobileHybridReactAndroidToggle=0;
  if ( jQuery("#inAppPurchaseMobileHybridReactAndroid").prop('checked') ) {inAppPurchaseMobileHybridReactAndroidToggle=1;}else{inAppPurchaseMobileHybridReactAndroidToggle=0;}
  let totalCostMobileHybridReactNativeAndroid=0;if(noOfScreensMobileHybridReactAndroid!=0 || adsIntegrationMobileHybridReactAndroidToggle==1 || inAppPurchaseMobileHybridReactAndroidToggle==1){ totalCostMobileHybridReactNativeAndroid=(parseFloat(minHoursMobileHybridReactNativeAndroid)+(parseFloat(perScreenHoursMobileHybridReactNativeAndroid)*parseFloat(noOfScreensMobileHybridReactAndroid))+(parseFloat(adsIntegrationHoursMobileHybridReactNativeAndroid)*adsIntegrationMobileHybridReactAndroidToggle)+(parseFloat(inAppPurchaseHoursMobileHybridReactNativeAndroid)*inAppPurchaseMobileHybridReactAndroidToggle))*parseFloat(perHourRateMobileHybridReactNativeAndroid);}
//Development>Mobile>Hybrid Apps>Flutter>IOS
  let noOfScreensMobileHybridFlutterIOS=(!(jQuery("#noOfScreensMobileHybridFlutterIOS").val())) ? 0 : jQuery("#noOfScreensMobileHybridFlutterIOS").val();	
  let minHoursMobileHybridFlutterIOS=en_public_data.minHoursMobileHybridFlutterIOS;
  let perScreenHoursMobileHybridFlutterIOS=en_public_data.perScreenHoursMobileHybridFlutterIOS;
  let adsIntegrationHoursMobileHybridFlutterIOS=en_public_data.adsIntegrationHoursMobileHybridFlutterIOS;
  let inAppPurchaseHoursMobileHybridFlutterIOS=en_public_data.inAppPurchaseHoursMobileHybridFlutterIOS;
  let perHourRateMobileHybridFlutterIOS=en_public_data.perHourRateMobileHybridFlutterIOS;
  let adsIntegrationMobileHybridFlutterIOSToggle=0;
  if ( jQuery("#adsIntegrationMobileHybridFlutterIOS").prop('checked') ) {adsIntegrationMobileHybridFlutterIOSToggle=1;}else{adsIntegrationMobileHybridFlutterIOSToggle=0;}
  let inAppPurchaseMobileHybridFlutterIOSToggle=0;
  if ( jQuery("#inAppPurchaseMobileHybridFlutterIOS").prop('checked') ) {inAppPurchaseMobileHybridFlutterIOSToggle=1;}else{inAppPurchaseMobileHybridFlutterIOSToggle=0;}
  let totalCostMobileHybridFlutterIOS=0;if(noOfScreensMobileHybridFlutterIOS!=0 || adsIntegrationMobileHybridFlutterIOSToggle==1 || inAppPurchaseMobileHybridFlutterIOSToggle==1){ totalCostMobileHybridFlutterIOS=(parseFloat(minHoursMobileHybridFlutterIOS)+(parseFloat(perScreenHoursMobileHybridFlutterIOS)*parseFloat(noOfScreensMobileHybridFlutterIOS))+(parseFloat(adsIntegrationHoursMobileHybridFlutterIOS)*adsIntegrationMobileHybridFlutterIOSToggle)+(parseFloat(inAppPurchaseHoursMobileHybridFlutterIOS)*inAppPurchaseMobileHybridFlutterIOSToggle))*parseFloat(perHourRateMobileHybridFlutterIOS);}
//Development>Mobile>Hybrid Apps>Android
  let noOfScreensMobileHybridFlutterAndroid=(!(jQuery("#noOfScreensMobileHybridFlutterAndroid").val())) ? 0 : jQuery("#noOfScreensMobileHybridFlutterAndroid").val();	
  let minHoursMobileHybridFlutterAndroid=en_public_data.minHoursMobileHybridFlutterAndroid;
  let perScreenHoursMobileHybridFlutterAndroid=en_public_data.perScreenHoursMobileHybridFlutterAndroid;
  let adsIntegrationHoursMobileHybridFlutterAndroid=en_public_data.adsIntegrationHoursMobileHybridFlutterAndroid;
  let inAppPurchaseHoursMobileHybridFlutterAndroid=en_public_data.inAppPurchaseHoursMobileHybridFlutterAndroid;
  let perHourRateMobileHybridFlutterAndroid=en_public_data.perHourRateMobileHybridFlutterAndroid;
  let adsIntegrationMobileHybridFlutterAndroidToggle=0;
  if ( jQuery("#adsIntegrationMobileHybridFlutterAndroid").prop('checked') ) {adsIntegrationMobileHybridFlutterAndroidToggle=1;}else{adsIntegrationMobileHybridFlutterAndroidToggle=0;}
  let inAppPurchaseMobileHybridFlutterAndroidToggle=0;
  if ( jQuery("#inAppPurchaseMobileHybridFlutterAndroid").prop('checked') ) {inAppPurchaseMobileHybridFlutterAndroidToggle=1;}else{inAppPurchaseMobileHybridFlutterAndroidToggle=0;}
	  let totalCostMobileHybridFlutterAndroid=0;if(noOfScreensMobileHybridFlutterAndroid!=0 || adsIntegrationMobileHybridFlutterAndroidToggle==1 || inAppPurchaseMobileHybridFlutterAndroidToggle==1){ totalCostMobileHybridFlutterAndroid=(parseFloat(minHoursMobileHybridFlutterAndroid)+(parseFloat(perScreenHoursMobileHybridFlutterAndroid)*parseFloat(noOfScreensMobileHybridFlutterAndroid))+(parseFloat(adsIntegrationHoursMobileHybridFlutterAndroid)*adsIntegrationMobileHybridFlutterAndroidToggle)+(parseFloat(inAppPurchaseHoursMobileHybridFlutterAndroid)*inAppPurchaseMobileHybridFlutterAndroidToggle))*parseFloat(perHourRateMobileHybridFlutterAndroid);}
	
	  let totalCostHybridApps=totalCostMobileHybridReactNativeIOS+totalCostMobileHybridReactNativeAndroid+totalCostMobileHybridFlutterIOS+totalCostMobileHybridFlutterAndroid;
	return totalCostHybridApps;
}
function getMobileGamesCost() {
//Development>Mobile>Games / Unity
  let noOfScreensMobileGamesUnity=(!(jQuery("#noOfScreensMobileGames").val())) ? 0 : jQuery("#noOfScreensMobileGames").val();	
  let minHoursMobileGamesUnity=en_public_data.minHoursMobileGamesUnity;
  let perScreenHoursMobileGamesUnity=en_public_data.perScreenHoursMobileGamesUnity;
  let adsIntegrationHoursMobileGamesUnity=en_public_data.adsIntegrationHoursMobileGamesUnity;
  let inAppPurchaseHoursMobileGamesUnity=en_public_data.inAppPurchaseHoursMobileGamesUnity;
  let perHourRateMobileGamesUnity=en_public_data.perHourRateMobileGamesUnity;
  let $adsIntegrationMobileGamesToggle=0;
  if ( jQuery("#adsIntegrationMobileGames").prop('checked') ) {$adsIntegrationMobileGamesToggle=1;}else{$adsIntegrationMobileGamesToggle=0;}
  let $inAppPurchaseMobileToggle=0;
  if ( jQuery("#inAppPurchaseMobileGames").prop('checked') ) {$inAppPurchaseMobileToggle=1;}else{$inAppPurchaseMobileToggle=0;}
	  let totalCostMobileGamesUnity=0;if(noOfScreensMobileGamesUnity!=0 || $adsIntegrationMobileGamesToggle==1 || $inAppPurchaseMobileToggle==1){ totalCostMobileGamesUnity=(parseFloat(minHoursMobileGamesUnity)+(parseFloat(perScreenHoursMobileGamesUnity)*parseFloat(noOfScreensMobileGamesUnity))+(parseFloat(adsIntegrationHoursMobileGamesUnity)*$adsIntegrationMobileGamesToggle)+(parseFloat(inAppPurchaseHoursMobileGamesUnity)*$inAppPurchaseMobileToggle))*parseFloat(perHourRateMobileGamesUnity);}
	return totalCostMobileGamesUnity;
}
function getDesktopDevelopmentCost() {
//Development>Desktop> Java
  let noOfPagesDesktopJava=(!(jQuery("#noOfScreensDesktopJava").val())) ? 0 : jQuery("#noOfScreensDesktopJava").val();	
  let minHoursDesktopJava=en_public_data.minHoursDesktopJava;
  let perScreenHoursDesktopJava=en_public_data.perScreenHoursDesktopJava;
  let perHourRateDesktopJava=en_public_data.perHourRateDesktopJava;
let totalCostDesktopJava=0;if(noOfPagesDesktopJava!=0){totalCostDesktopJava=(parseFloat(minHoursDesktopJava)+(parseFloat(perScreenHoursDesktopJava)*parseFloat(noOfPagesDesktopJava)))*parseFloat(perHourRateDesktopJava);}	
//Development>Desktop>JavaScript
  let noOfPagesDesktopJavaScript=(!(jQuery("#noOfScreensDesktopJavaScript").val())) ? 0 : jQuery("#noOfScreensDesktopJavaScript").val();	
  let minHoursDesktopJavaScript=en_public_data.minHoursDesktopJavaScript;
  let perScreenHoursDesktopJavaScript=en_public_data.perScreenHoursDesktopJavaScript;
  let perHourRateDesktopJavaScript=en_public_data.perHourRateDesktopJavaScript;
let totalCostDesktopJavaScript=0;if(noOfPagesDesktopJavaScript!=0){totalCostDesktopJavaScript=(parseFloat(minHoursDesktopJava)+(parseFloat(perScreenHoursDesktopJavaScript)*parseFloat(noOfPagesDesktopJavaScript)))*parseFloat(perHourRateDesktopJavaScript);}	
 //Development>Desktop>C# Sharp
  let noOfPagesDesktopCSharp=(!(jQuery("#noOfScreensDesktopCSharp").val())) ? 0 : jQuery("#noOfScreensDesktopCSharp").val();	
  let minHoursDesktopCSharp=en_public_data.minHoursDesktopCSharp;
  let perScreenHoursDesktopCSharp=en_public_data.perScreenHoursDesktopCSharp;
  let perHourRateDesktopCSharp=en_public_data.perHourRateDesktopCSharp;
let totalCostDesktopCSharp=0;if(noOfPagesDesktopCSharp!=0){totalCostDesktopCSharp=(parseFloat(minHoursDesktopCSharp)+(parseFloat(perScreenHoursDesktopCSharp)*parseFloat(noOfPagesDesktopCSharp)))*parseFloat(perHourRateDesktopCSharp);}	
//Development>Desktop>Kotlin
  let noOfScreensDesktopKotlin=(!(jQuery("#noOfScreensDesktopKotlin").val())) ? 0 : jQuery("#noOfScreensDesktopKotlin").val();	
  let minHoursDesktopKotlin=en_public_data.minHoursDesktopKotlin;
  let perScreenHoursDesktopKotlin=en_public_data.perScreenHoursDesktopKotlin;
  let perHourRateDesktopKotlin=en_public_data.perHourRateDesktopKotlin;
let totalCostDesktopKotlin=0;if(noOfScreensDesktopKotlin!=0){totalCostDesktopKotlin=(parseFloat(minHoursDesktopKotlin)+(parseFloat(perScreenHoursDesktopKotlin)*parseFloat(noOfScreensDesktopKotlin)))*parseFloat(perHourRateDesktopKotlin);}	
//Development>Desktop>Python
  let noOfScreensDesktopPython=(!(jQuery("#noOfScreensDesktopPython").val())) ? 0 : jQuery("#noOfScreensDesktopPython").val();	
  let minHoursDesktopPython=en_public_data.minHoursDesktopPython;
  let perScreenHoursDesktopPython=en_public_data.perScreenHoursDesktopPython;
  let perHourRateDesktopPython=en_public_data.perHourRateDesktopPython;
  let totalCostDesktopPython=0;if(noOfScreensDesktopPython!=0){totalCostDesktopPython=(parseFloat(minHoursDesktopPython)+(parseFloat(perScreenHoursDesktopPython)*parseFloat(noOfScreensDesktopPython)))*parseFloat(perHourRateDesktopPython);	}	
	
  let totalCostDesktopDevelopment=totalCostDesktopJava+totalCostDesktopJavaScript+totalCostDesktopCSharp+totalCostDesktopKotlin+totalCostDesktopPython;
   return totalCostDesktopDevelopment;
}
function getWebsiteDesigningCost() {
//Designing>Website Designing
  let noOfWebDesigningPagesWebsiteDesigning=(!(jQuery("#noOfWebDesigningPagesWebsiteDesigning").val())) ? 0 : jQuery("#noOfWebDesigningPagesWebsiteDesigning").val();	
  let noOfDesignConceptWireframmingPagesWebsiteDesigning=(!(jQuery("#noOfDesignConceptWireframmingPagesWebsiteDesigning").val())) ? 0 : jQuery("#noOfDesignConceptWireframmingPagesWebsiteDesigning").val();	
  let noOfBannerSlidersImagesWebsiteDesigning=(!(jQuery("#noOfBannerSlidersImagesWebsiteDesigning").val())) ? 0 : jQuery("#noOfBannerSlidersImagesWebsiteDesigning").val();	
  let noOfVideosWebsiteDesigning=(!(jQuery("#noOfVideosWebsiteDesigning").val())) ? 0 : jQuery("#noOfVideosWebsiteDesigning").val();	
  let minHourWebsiteDesigning=en_public_data.minHourWebsiteDesigning;
  let perWebPageDesignHoursWebsiteDesigning=en_public_data.perWebPageDesignHoursWebsiteDesigning;
  let perDesignConceptWireframeHoursWebsiteDesigning=en_public_data.perDesignConceptWireframeHoursWebsiteDesigning;
  let perBannerSliderImageHoursWebsiteDesigning=en_public_data.perBannerSliderImageHoursWebsiteDesigning;
  let perVideohoursWebsiteDesigning=en_public_data.perVideohoursWebsiteDesigning;
  let perHourRateWebsiteDesigning=en_public_data.perHourRateWebsiteDesigning;

   let totalCostWebsiteDesigning=0;if(noOfWebDesigningPagesWebsiteDesigning!=0 || noOfDesignConceptWireframmingPagesWebsiteDesigning!=0 || noOfBannerSlidersImagesWebsiteDesigning!=0  || noOfVideosWebsiteDesigning!=0  ){totalCostWebsiteDesigning=(parseFloat(minHourWebsiteDesigning)+(parseFloat(perWebPageDesignHoursWebsiteDesigning)*parseFloat(noOfWebDesigningPagesWebsiteDesigning))+(parseFloat(perDesignConceptWireframeHoursWebsiteDesigning)*parseFloat(noOfDesignConceptWireframmingPagesWebsiteDesigning))+(parseFloat(perBannerSliderImageHoursWebsiteDesigning)*parseFloat(noOfBannerSlidersImagesWebsiteDesigning))+(parseFloat(perVideohoursWebsiteDesigning)*parseFloat(noOfVideosWebsiteDesigning)))*parseFloat(perHourRateWebsiteDesigning);	}	
	return totalCostWebsiteDesigning;
}
function getMobileAppDesigningCost() {
//Designing>Mobile App Designing
  let noOfMobileDesigningPagesMobileAppDesigning=(!(jQuery("#noOfMobileDesigningPagesMobileAppDesigning").val())) ? 0 : jQuery("#noOfMobileDesigningPagesMobileAppDesigning").val();
  let noOfDesignConceptWireframmingPagesMobileAppDesigning=(!(jQuery("#noOfDesignConceptWireframmingPagesMobileAppDesigning").val())) ? 0 : jQuery("#noOfDesignConceptWireframmingPagesMobileAppDesigning").val();
  let noOfBannerSlidersImagesMobileAppDesigning=(!(jQuery("#noOfBannerSlidersImagesMobileAppDesigning").val())) ? 0 : jQuery("#noOfBannerSlidersImagesMobileAppDesigning").val();
  let noOfVideosMobileAppDesigning=(!(jQuery("#noOfVideosMobileAppDesigning").val())) ? 0 : jQuery("#noOfVideosMobileAppDesigning").val();
  let minHourMobileDesigning=en_public_data.minHourMobileDesigning;
  let perMobilePageDesignHoursMobileDesigning=en_public_data.perMobilePageDesignHoursMobileDesigning;
  let perDesignConceptWireframeHoursMobileDesigning=en_public_data.perDesignConceptWireframeHoursMobileDesigning;
  let perBannerSliderImageHoursMobileDesigning=en_public_data.perBannerSliderImageHoursMobileDesigning;
  let perVideohoursMobileDesigning=en_public_data.perVideohoursMobileDesigning;
  let perHourRateMobileDesigning=en_public_data.perHourRateMobileDesigning;
	
   let totalCostMobileDesigning=0;if(noOfMobileDesigningPagesMobileAppDesigning!=0 || noOfDesignConceptWireframmingPagesMobileAppDesigning!=0 || noOfBannerSlidersImagesMobileAppDesigning!=0  || noOfVideosMobileAppDesigning!=0  ){totalCostMobileDesigning=(parseFloat(minHourMobileDesigning)+(parseFloat(perMobilePageDesignHoursMobileDesigning)*parseFloat(noOfMobileDesigningPagesMobileAppDesigning))+(parseFloat(perDesignConceptWireframeHoursMobileDesigning)*parseFloat(noOfDesignConceptWireframmingPagesMobileAppDesigning))+(parseFloat(perBannerSliderImageHoursMobileDesigning)*parseFloat(noOfBannerSlidersImagesMobileAppDesigning))+(parseFloat(perVideohoursMobileDesigning)*parseFloat(noOfVideosMobileAppDesigning)))*parseFloat(perHourRateMobileDesigning);		}
	
	return totalCostMobileDesigning;
}
function getDesktopAppDesigningCost() {
//Designing> Desktop App Designing
  let noOfDesigningPagesDesktopAppDesigning=(!(jQuery("#noOfDesigningPagesDesktopAppDesigning").val())) ? 0 : jQuery("#noOfDesigningPagesDesktopAppDesigning").val();
  let noOfDesignConceptWireframmingPagesDesktopAppDesigning=(!(jQuery("#noOfDesignConceptWireframmingPagesDesktopAppDesigning").val())) ? 0 : jQuery("#noOfDesignConceptWireframmingPagesDesktopAppDesigning").val();
  let noOfBannerSlidersImagesDesktopAppDesigning=(!(jQuery("#noOfBannerSlidersImagesDesktopAppDesigning").val())) ? 0 : jQuery("#noOfBannerSlidersImagesDesktopAppDesigning").val();
  let noOfVideosDesktopAppDesigning=(!(jQuery("#noOfVideosDesktopAppDesigning").val())) ? 0 : jQuery("#noOfVideosDesktopAppDesigning").val();
  let minHourDesktopDesigning=en_public_data.minHourDesktopDesigning;
  let perPageDesignHoursDesktopDesigning=en_public_data.perPageDesignHoursDesktopDesigning;
  let perDesignConceptWireframeHoursDesktopDesigning=en_public_data.perDesignConceptWireframeHoursDesktopDesigning;
  let perBannerSliderImageHoursDesktopDesigning=en_public_data.perBannerSliderImageHoursDesktopDesigning;
  let perVideohoursDesktopDesigning=en_public_data.perVideohoursDesktopDesigning;
  let perHourRateDesktopDesigning=en_public_data.perHourRateDesktopDesigning;
	
   let totalCostDesktopDesigning=0;if(noOfDesigningPagesDesktopAppDesigning!=0 || noOfDesignConceptWireframmingPagesDesktopAppDesigning!=0 || noOfBannerSlidersImagesDesktopAppDesigning!=0  || noOfVideosDesktopAppDesigning!=0  ){totalCostDesktopDesigning=(parseFloat(minHourDesktopDesigning)+(parseFloat(perPageDesignHoursDesktopDesigning)*parseFloat(noOfDesigningPagesDesktopAppDesigning))+(parseFloat(perDesignConceptWireframeHoursDesktopDesigning)*parseFloat(noOfDesignConceptWireframmingPagesDesktopAppDesigning))+(parseFloat(perBannerSliderImageHoursDesktopDesigning)*parseFloat(noOfBannerSlidersImagesDesktopAppDesigning))+(parseFloat(perVideohoursDesktopDesigning)*parseFloat(noOfVideosDesktopAppDesigning)))*parseFloat(perHourRateDesktopDesigning);	}

	return totalCostDesktopDesigning;
}
function getGamesDesigningCost() {
//Designing> Games Designing
  let noOf3DMOdelsGamesDesigning=(!(jQuery("#noOf3DMOdelsGamesDesigning").val())) ? 0 : jQuery("#noOf3DMOdelsGamesDesigning").val();
  let noOfStoryBoardConceptArtScreensGamesDesigning=(!(jQuery("#noOfStoryBoardConceptArtScreensGamesDesigning").val())) ? 0 : jQuery("#noOfStoryBoardConceptArtScreensGamesDesigning").val();
  let noOfDesignConceptWireframmingsGamesDesigning=(!(jQuery("#noOfDesignConceptWireframmingsGamesDesigning").val())) ? 0 : jQuery("#noOfDesignConceptWireframmingsGamesDesigning").val();
  let noOfGamingAssetsGamesDesigning=(!(jQuery("#noOfGamingAssetsGamesDesigning").val())) ? 0 : jQuery("#noOfGamingAssetsGamesDesigning").val();
  let noOfGameUIDesignScreensGamesDesigning=(!(jQuery("#noOfGameUIDesignScreensGamesDesigning").val())) ? 0 : jQuery("#noOfGameUIDesignScreensGamesDesigning").val();
  let minHourGamesDesigning=en_public_data.minHourGamesDesigning;
  let per3DModelHoursGamesDesigning=en_public_data.per3DModelHoursGamesDesigning;
  let perBannerStoryBoardScreenHoursGamesDesigning=en_public_data.perBannerStoryBoardScreenHoursGamesDesigning;
  let perDesignConceptWireframeHoursGamesDesigning=en_public_data.perDesignConceptWireframeHoursGamesDesigning;
  let perGameAssetHoursGamesDesigning=en_public_data.perGameAssetHoursGamesDesigning;
  let perGameUIDesignHoursGamesDesigning=en_public_data.perGameUIDesignHoursGamesDesigning;
  let perHourRateGamesDesigning=en_public_data.perHourRateGamesDesigning;
	
  let totalCostGamesDesigning=0;if(noOf3DMOdelsGamesDesigning!=0 || noOfStoryBoardConceptArtScreensGamesDesigning!=0 || noOfDesignConceptWireframmingsGamesDesigning!=0  || noOfGamingAssetsGamesDesigning!=0 || noOfGameUIDesignScreensGamesDesigning!=0  ){totalCostGamesDesigning=(parseFloat(minHourGamesDesigning)+(parseFloat(per3DModelHoursGamesDesigning)*parseFloat(noOf3DMOdelsGamesDesigning))+(parseFloat(perBannerStoryBoardScreenHoursGamesDesigning)*parseFloat(noOfStoryBoardConceptArtScreensGamesDesigning))+(parseFloat(perDesignConceptWireframeHoursGamesDesigning)*parseFloat(noOfDesignConceptWireframmingsGamesDesigning))+(parseFloat(perGameAssetHoursGamesDesigning)*parseFloat(noOfGamingAssetsGamesDesigning))+(parseFloat(perGameUIDesignHoursGamesDesigning)*parseFloat(noOfGameUIDesignScreensGamesDesigning)))*parseFloat(perHourRateGamesDesigning);		}
	return totalCostGamesDesigning;
}
function getSocialMediaDesigningCost() {
//Designing>Social Media Design
  let noOfBannersSocialMediaDesign=(!(jQuery("#noOfBannersSocialMediaDesign").val())) ? 0 : jQuery("#noOfBannersSocialMediaDesign").val();
  let noOfImagesSocialMediaDesign=(!(jQuery("#noOfImagesSocialMediaDesign").val())) ? 0 : jQuery("#noOfImagesSocialMediaDesign").val();
  let noOfBusinessCardsSocialMediaDesign=(!(jQuery("#noOfBusinessCardsSocialMediaDesign").val())) ? 0 : jQuery("#noOfBusinessCardsSocialMediaDesign").val();
  let noOfFlyersBroachersSocialMediaDesign=(!(jQuery("#noOfFlyersBroachersSocialMediaDesign").val())) ? 0 : jQuery("#noOfFlyersBroachersSocialMediaDesign").val();
  let noOfGraphicalPostSocialMediaDesign=(!(jQuery("#noOfGraphicalPostSocialMediaDesign").val())) ? 0 : jQuery("#noOfGraphicalPostSocialMediaDesign").val();
  let minHourSocialMediaDesigning=en_public_data.minHourSocialMediaDesigning;
  let perBannerHoursSocialMediaDesigning=en_public_data.perBannerHoursSocialMediaDesigning;
  let perImageHoursSocialMediaDesigning=en_public_data.perImageHoursSocialMediaDesigning;
  let perBusinessCardHoursSocialMediaDesigning=en_public_data.perBusinessCardHoursSocialMediaDesigning;
  let perFlyerHoursSocialMediaDesigning=en_public_data.perFlyerHoursSocialMediaDesigning;
  let perGraphicalPostHoursSocialMediaDesigning=en_public_data.perGraphicalPostHoursSocialMediaDesigning;
  let perHourRateSocialMediaDesigning=en_public_data.perHourRateSocialMediaDesigning;
	
  let totalCostSocialMediaDesigning=0;if(noOfBannersSocialMediaDesign!=0 || noOfImagesSocialMediaDesign!=0 || noOfBusinessCardsSocialMediaDesign!=0  || noOfFlyersBroachersSocialMediaDesign!=0 || noOfGraphicalPostSocialMediaDesign!=0  ){totalCostSocialMediaDesigning=(parseFloat(minHourSocialMediaDesigning)+(parseFloat(perBannerHoursSocialMediaDesigning)*parseFloat(noOfBannersSocialMediaDesign))+(parseFloat(perImageHoursSocialMediaDesigning)*parseFloat(noOfImagesSocialMediaDesign))+(parseFloat(perBusinessCardHoursSocialMediaDesigning)*parseFloat(noOfBusinessCardsSocialMediaDesign))+(parseFloat(perFlyerHoursSocialMediaDesigning)*parseFloat(noOfFlyersBroachersSocialMediaDesign))+(parseFloat(perGraphicalPostHoursSocialMediaDesigning)*parseFloat(noOfGraphicalPostSocialMediaDesign)))*parseFloat(perHourRateSocialMediaDesigning);}
	return totalCostSocialMediaDesigning;
}
function getBrandIdentityDesigningCost() {
 //Designing>Brand Identity>Animated Logo
  let noOfPagesAnimatedLogo=(!(jQuery("#noOfLogosAnimatedLogo").val())) ? 0 : jQuery("#noOfLogosAnimatedLogo").val();
  let minHoursBrandIdentityAnimatedLogo=en_public_data.minHoursBrandIdentityAnimatedLogo;
  let perLogoHoursBrandIdentityAnimatedLogo=en_public_data.perLogoHoursBrandIdentityAnimatedLogo;
  let perHourRateBrandIdentityAnimatedLogo=en_public_data.perHourRateBrandIdentityAnimatedLogo;
  let totalCostBrandIdentityAnimatedLogo=0;if(noOfPagesAnimatedLogo!=0){totalCostBrandIdentityAnimatedLogo=(parseFloat(minHoursBrandIdentityAnimatedLogo)+(parseFloat(perLogoHoursBrandIdentityAnimatedLogo)*parseFloat(noOfPagesAnimatedLogo)))*parseFloat(perHourRateBrandIdentityAnimatedLogo);}
 //Designing>Brand Identity> Static Logo
  let noOfPagesStaticLogo=(!(jQuery("#noOfLogosStaticLogo").val())) ? 0 : jQuery("#noOfLogosStaticLogo").val();
  let minHoursBrandIdentityStaticLogo=en_public_data.minHoursBrandIdentityStaticLogo;
  let perLogoHoursBrandIdentityStaticLogo=en_public_data.perLogoHoursBrandIdentityStaticLogo;
  let perHourRateBrandIdentityStaticLogo=en_public_data.perHourRateBrandIdentityStaticLogo;
  let totalCostBrandIdentityStaticLogo=0;if(noOfPagesStaticLogo!=0){ totalCostBrandIdentityStaticLogo=(parseFloat(minHoursBrandIdentityAnimatedLogo)+(parseFloat(perLogoHoursBrandIdentityStaticLogo)*parseFloat(noOfPagesStaticLogo)))*parseFloat(perHourRateBrandIdentityStaticLogo);}
	  
	  let totalCostBrandIdentity=totalCostBrandIdentityAnimatedLogo+totalCostBrandIdentityStaticLogo;
	return totalCostBrandIdentity;
}
function getSEOMarketingCost() {
 //Marketing>SEO Marketing
  let minHourSEOMarketing=en_public_data.minHourSEOMarketing;
  let onPageSEOHoursSEOMarketing=en_public_data.onPageSEOHoursSEOMarketing;
  let offPageSEOHoursSEOMarketing=en_public_data.offPageSEOHoursSEOMarketing;
  let technicalSEOHoursSEOMarketing=en_public_data.technicalSEOHoursSEOMarketing;
  let localSEOHoursSEOMarketing=en_public_data.localSEOHoursSEOMarketing;
  let perHourRateSEOMarketing=en_public_data.perHourRateSEOMarketing;
  let onPageSEOToggle=0;
  if ( jQuery("#onPageSEO").prop('checked') ) {onPageSEOToggle=1;}else{onPageSEOToggle=0;}
  let offPageSEOToggle=0;
  if ( jQuery("#offPageSEO").prop('checked') ) {offPageSEOToggle=1;}else{offPageSEOToggle=0;}
  let technicalSEOToggle=0;
  if ( jQuery("#technicalSEO").prop('checked') ) {technicalSEOToggle=1;}else{technicalSEOToggle=0;}
  let localSEOToggle=0;
  if ( jQuery("#localSEO").prop('checked') ) {localSEOToggle=1;}else{localSEOToggle=0;}
let totalCostSEOMarketing=0;if( onPageSEOToggle==1 || offPageSEOToggle==1 || technicalSEOToggle==1 || localSEOToggle==1){totalCostSEOMarketing=(parseFloat(minHourSEOMarketing)+(parseFloat(onPageSEOHoursSEOMarketing)*parseFloat(onPageSEOToggle))+(parseFloat(offPageSEOHoursSEOMarketing)*offPageSEOToggle)+(parseFloat(technicalSEOHoursSEOMarketing)*technicalSEOToggle)+(parseFloat(localSEOHoursSEOMarketing)*localSEOToggle))*parseFloat(perHourRateSEOMarketing);}
	return totalCostSEOMarketing;
}
function getSEMMarketingCost() {
//Marketing> SEM Marketing
  let noOfMonthsSEM=(!(jQuery("#noOfMonthsSEM").val())) ? 0 : jQuery("#noOfMonthsSEM").val();
  let perHourRateSEMMarketing=en_public_data.perHourRateSEMMarketing;
  let totalCostSEMMarketing=0;if(noOfMonthsSEM!=0){ totalCostSEMMarketing=parseFloat(perHourRateSEMMarketing)*parseFloat(noOfMonthsSEM)*176;}
	return totalCostSEMMarketing;
} 
function getSMMMarketingCost() {
//Marketing> SMM Marketing>Organic Marketing
 let minHoursOrganicSMMMarketing=en_public_data.minHoursOrganicSMMMarketing;
  let organicMarketingHoursOrganicSMMMarketing=en_public_data.organicMarketingHoursOrganicSMMMarketing;
  let perHourRateOrganicSMMMarketing=en_public_data.perHourRateOrganicSMMMarketing;
  let organicMarketingSMMToggle=0;
  if ( jQuery("#organicMarketingSMM").prop('checked') ) {organicMarketingSMMToggle=1;}else{organicMarketingSMMToggle=0;}
let totalCostSMMMarketingOrganic=0;if( organicMarketingSMMToggle==1){ totalCostSMMMarketingOrganic=(parseFloat(minHoursOrganicSMMMarketing)+(parseFloat(organicMarketingHoursOrganicSMMMarketing)*parseFloat(organicMarketingSMMToggle)))*parseFloat(perHourRateOrganicSMMMarketing);}
//Marketing> SMM Marketing>Paid Marketing
  let noOfMonthsSMM=(!(jQuery("#noOfMonthsSMM").val())) ? 0 : jQuery("#noOfMonthsSMM").val();
  let perHourRatePaidSMMMarketing=en_public_data.perHourRatePaidSMMMarketing;
 let totalCostSMMMarketingPaid=0;if(noOfMonthsSMM!=0){ totalCostSMMMarketingPaid=parseFloat(perHourRatePaidSMMMarketing)*parseFloat(noOfMonthsSMM)*176;}
let totalCostSMMMarketing=totalCostSMMMarketingOrganic+totalCostSMMMarketingPaid;
	return totalCostSMMMarketing;
}
function getASOMarketingCost() {
//Marketing> ASO Marketing > App Optimization
 let minHoursASOMarketing=en_public_data.minHoursASOMarketing;
  let appOptimizationHoursASOMarketing=en_public_data.appOptimizationHoursASOMarketing;
  let perHourRateASOMarketing=en_public_data.perHourRateASOMarketing;
  let appOptimizationASOToggle=0;
  if ( jQuery("#appOptimizationASO").prop('checked') ) {appOptimizationASOToggle=1;}else{appOptimizationASOToggle=0;}
let totalCostASOMarketingAppOptimization=0;if( appOptimizationASOToggle==1){ totalCostASOMarketingAppOptimization=(parseFloat(minHoursASOMarketing)+(parseFloat(appOptimizationHoursASOMarketing)*parseFloat(appOptimizationASOToggle)))*parseFloat(perHourRateASOMarketing);
}
//Marketing> ASO Marketing>Paid Marketing
let noOfMonthsPaidMarketingASO=(!(jQuery("#noOfMonthsPaidMarketingASO").val())) ? 0 : jQuery("#noOfMonthsPaidMarketingASO").val();
let perHourRatePaidASOMarketing=en_public_data.perHourRatePaidASOMarketing;
let totalCostASOMarketingPaid=0;if(noOfMonthsPaidMarketingASO!=0){ totalCostASOMarketingPaid=parseFloat(perHourRatePaidASOMarketing)*parseFloat(noOfMonthsPaidMarketingASO)*176;}
let totalCostASOMarketing=totalCostASOMarketingAppOptimization+totalCostASOMarketingPaid;
	return totalCostASOMarketing;
}

function getInformationalContentCost() {
//Content>Informational
  let noOfWordsInformational= (!(jQuery("#noOfWordsInformational").val())) ? 0 : jQuery("#noOfWordsInformational").val();
	let noOfMonthsPaidMarketingASO=(!(jQuery("#noOfMonthsPaidMarketingASO").val())) ? 0 : jQuery("#noOfMonthsPaidMarketingASO").val();
  let perWordRateContentInformational=en_public_data.perWordRateContentInformational;
 let totalCostInformational=0;if(noOfWordsInformational!=0){ totalCostInformational=parseFloat(perWordRateContentInformational)*parseFloat(noOfWordsInformational);}
	return totalCostInformational;
}

function getNavigationalContentCost() {
//Content>Navigational
  let noOfWordsNavigational=(!(jQuery("#noOfWordsNavigational").val())) ? 0 : jQuery("#noOfWordsNavigational").val();
  let perWordRateContentNavigational=en_public_data.perWordRateContentNavigational;
  let totalCostNavigational=0;if(noOfWordsNavigational!=0){ totalCostNavigational=parseFloat(perWordRateContentNavigational)*parseFloat(noOfWordsNavigational);}
	return totalCostNavigational;
}

function getCommercialMarketingCost() {
//Marketing> Commercial
  let noOfWordsCommercial=(!(jQuery("#noOfWordsCommercial").val())) ? 0 : jQuery("#noOfWordsCommercial").val();
  let perWordRateContentCommercial=en_public_data.perWordRateContentCommercial;
  let totalCostCommercial=0;if(noOfWordsCommercial!=0){ totalCostCommercial=parseFloat(perWordRateContentCommercial)*parseFloat(noOfWordsCommercial);}
	return totalCostCommercial;
}

function getTranslationalContentCost() {
//Content>Translational
  let noOfWordsTranslational=(!(jQuery("#noOfWordsTranslational").val())) ? 0 : jQuery("#noOfWordsTranslational").val();
  let perWordRateContentTranslational=en_public_data.perWordRateContentTranslational;
  let totalCostTranslational=0;if(noOfWordsTranslational!=0){ totalCostTranslational=parseFloat(perWordRateContentTranslational)*parseFloat(noOfWordsTranslational);}
	return totalCostTranslational;
}

