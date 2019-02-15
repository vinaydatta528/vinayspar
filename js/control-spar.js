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
	
$(document).ready(function(){
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('.backToTop').fadeIn('slow');
        } else {
            $('.backToTop').fadeOut('slow');
        }
    });
    $('.backToTop').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 200);
        return false;
    });
});


$(document).ready(function(){
	$(".seven_list").click(function(){
		$(".seven_menu").slideDown();
	});
});


$(document).ready(function(){
	$(".solut_bar").click(function(){
			$(".solut_bar_menu").slideToggle();
	});
	});


/*Deals*/






