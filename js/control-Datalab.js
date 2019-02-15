// JavaScript Document
/*Menu function*/
$(document).ready(function(){
	$(".menu_res").click(function(){
			$(".menu_res_det").slideDown();
			$(".menu_res").hide();
			$(".maskms").show();
			$(".menu_res_x").show();
		
	});
	$(".menu_res_x, .maskms").click(function(){
			$(".menu_res_det").slideUp();
			$(".menu_res").show();
			$(".maskms").hide();
			$(".menu_res_x").hide();
	});
	
	});
	
///////////////////// Back To Top 
$(document).ready(function(){
    $(window).scroll(function(){
        if ($(this).scrollTop() > 500) {
            $('.backToTop').fadeIn('slow');
        } else {
            $('.backToTop').fadeOut('slow');
        }
    });
    $('.backToTop').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 800);
        return false;
    });
}); 






