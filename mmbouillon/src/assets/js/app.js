import $ from 'jquery';
import whatInput from 'what-input';

window.$ = $;

import Foundation from 'foundation-sites';
// If you want to pick and choose which modules to include, comment out the above and uncomment
// the line below
//import './lib/foundation-explicit-pieces';

$(document).foundation();

/*$('.menu li.main-nav-link').click(function() {
	$(this).siblings().removeClass('active');
	$(this).addClass('active');
});*/

//closes the panel on click outside
/*$(document).mouseup(function (e) {
    var containers = $('.contact-panel');
    $.each(containers, function(idx, container) {
	    if (!container.is(e.target) // if the target of the click isn't the container...
		  && container.has(e.target).length === 0) // ... nor a descendant of the container
		    {
		      container.removeClass('is-active');
		    }
    });
});*/