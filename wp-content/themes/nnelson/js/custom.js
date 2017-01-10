
	jQuery(document).ready(function($) {

		// Dropdown Menu Toggle
		$('.dropdown-toggle').click(function() {
			var location = $(this).attr('href');
    		window.location.href = location;
    		return false;
		});
				
		// Adds Responsiveness to Embedded IFrames
		$('.embed-responsive iframe').addClass('embed-responsive-item');
		$('.embed-responsive iframe').each(function(){ 
			$(this).removeAttr('width')
			$(this).removeAttr('height');
		});
		
		// Strips Chrome, Branding and Related Videos From YouTube Embeds
		$('.embed-responsive iframe').each(function () {
			var src = $(this).attr('src');
			$(this).attr('src', src + '?rel=0&modestbranding=1&autohide=1&showinfo=0&controls=0');
		});
		
	  $('a[href*="#"]:not([href="#"])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html, body').animate({
	          scrollTop: target.offset().top
	        }, 1000);
	        return false;
	      }
	    }
	  });
		
	});
	
	// IE 10 in Windows 8 Device Size Fix
	if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
		var msViewportStyle = document.createElement('style')
		msViewportStyle.appendChild(
			document.createTextNode(
				'@-ms-viewport{width:auto!important}'
			)
		)
		document.querySelector('head').appendChild(msViewportStyle)
	}
	
