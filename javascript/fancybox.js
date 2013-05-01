$(document).ready(function() {
	$(".fancybox").fancybox({
		nextEffect: "fade",
		prevEffect: "fade",
		nextSpeed: 600,
		prevSpeed: 600,
		beforeLoad: function(){
			 $("html").css({"height":"100%", "overflow":"hidden"});
		},
		afterClose: function(){
		 $("html").css({"height":"auto", "overflow":"visible"});
		},
		beforeShow: function () {
            /* Disable right click */
            $.fancybox.wrap.bind("contextmenu", function (e) {
                    return false; 
            });
		},
		helpers : {
	        overlay : {
	            css : {
	                'background' : 'rgba(20, 20, 20, 0.90)'
	            }
	        }
	    }
	});
});
