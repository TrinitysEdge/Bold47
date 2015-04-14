// Disable image downloads ----------------------------------------------
$(document).ready(function(){
	$('img').bind('contextmenu', function(e) {
		return false;
	});
	$('img').bind('dragstart', function (e) {
		return false;
	});
});

// Set width-------------------------------------------------------------
$(document).ready(function(){
	var defaultWidth = $("body").width();	
	if(defaultWidth >= 1237){
		$("body").width(defaultWidth);
	}
	else {
		$("body").width(1237);
		/*Make the site more mobile-friendly here
		 * 
		 * 
		 */
	};
});
	
// Contact form ---------------------------------------------------------

var subject = "";

function changeSubject(sub) {
	"use strict";
	switch (sub) {
	case "services":
		// Unhide extra "Services" info
		document.getElementById("services_TypeAndDate").style.display = "";
		// Hide extra "Other" info
		document.getElementById("other_Info").style.display = "none";
		// Set global subject variable
		subject = "Services";
		break;
	case "questionsComments":
		//Hide extra "Services" and "Other" info
		document.getElementById("services_TypeAndDate").style.display = "none";
		document.getElementById("other_Info").style.display = "none";
		// Set global subject variable
		subject = "Questions/Comments";
		break;
	case "other":
		//Hide extra Services info
		document.getElementById("services_TypeAndDate").style.display = "none";
		//Unhide extra "Other" info
		document.getElementById("other_Info").style.display = "";
		// Set global subject variable
		subject = "Other";
		break;
	default:
		//Hide everything
		document.getElementById("services_TypeAndDate").style.display = "none";
		document.getElementById("other_Info").style.display = "none";
		// Clear global subject variable
		subject = "";
	}
}

function formatSubject() {
	"use strict";
	var extraInfo = "";
	if (subject === "Services") {
		extraInfo = " - " + document.getElementById("serviceType").value + " on " + document.getElementById("serviceDate").value;
	} else if (subject === "Other") {
		extraInfo = " - " + document.getElementById("otherSubject").value;
	}

	document.getElementById("subject").value = subject + extraInfo;
}

$(function(){
	$("#serviceDate").datepicker({
		showAnim: "slideDown",
		changeMonth: true,
		changeYear: true
	});
});

//Isotope ---------------------------------------------------------------

// init Isotope
$(function(){
var $container = $('#galleryAll').isotope({
  // options
  itemSelector: ".item",
  columnWidth: 70,
  layoutMode: "masonry",
  percentPosition: true,
  filter : ".landscape"
});
// apply Isotope and styles after images load
$container.imagesLoaded(function(){
	$("#loadSpinner").addClass("hidden");
	$("#galleryAll, #filters").removeClass("hidden");
	$container.isotope('layout');
	$(".portrait, .architecture, .macro, .liquid, .landscape, .nyc, .event").css({"border":"2px solid #7F7F7F"});
});
//Filter items on radio input
$('#filters').on( 'click', 'input', function() {
	// get filter value from input value
	var filterValue = this.value;
	console.log( filterValue );
	// use filterFn if matches value
	$container.isotope({ filter: filterValue });
});
});

// Lightbox -------------------------------------------------------------

$(function(){
	$(".lightbox").fancybox({
		openEffect	: 'elastic',
		closeEffect	: 'elastic',
		beforeShow : function () {
			/* Disable right click */
			$.fancybox.wrap.bind("contextmenu", function (e) {
				return false;
			});
			/* Disable drag */
			$.fancybox.wrap.bind("dragstart", function (e) {
				return false;
			});
			
		},

		helpers: {
			overlay: {
				locked: false // if true, the content will be locked into overlay
			}
		},
		autoCenter : true // fancybox will scroll along the content
	});
	$('#fancybox-wrap').unbind('mousewheel.fb');
});

// Misc ------------------------------------------------------------

//Set buttons in Gallery
$(function(){
	$("#filters").buttonset();
});