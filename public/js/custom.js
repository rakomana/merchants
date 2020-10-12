$(window).on('load', function(){

	"use strict";
 
	
	/* ========================================================== */
	/*   Popup-Gallery                                            */
	/* ========================================================== */
	$('.popup-gallery').find('a.popup1').magnificPopup({
		type: 'image',
		gallery: {
		  enabled:true
		}
	}); 
	
	$('.popup-gallery').find('a.popup2').magnificPopup({
		type: 'image',
		gallery: {
		  enabled:true
		}
	}); 
 
	$('.popup-gallery').find('a.popup3').magnificPopup({
		type: 'image',
		gallery: {
		  enabled:true
		}
	}); 
 
	$('.popup-gallery').find('a.popup4').magnificPopup({
		type: 'iframe',
		gallery: {
		  enabled:false
		}
	});


    /* ========================================================== */
	/*   Dropdown Menu Fade                                       */
	/* ========================================================== */
	
    $('.dropdown').on('hover', function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(100);
        }, function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(10).fadeOut(100);
    });


	/* ========================================================== */
	/*   Navigation Background Color                              */
	/* ========================================================== */
	
	$(window).scroll(function() {
		if($(this).scrollTop() > 500) {
			$('.navbar-fixed-top').addClass('opaque');
		} else {
			$('.navbar-fixed-top').removeClass('opaque');
		}
	});


	/* ========================================================== */
	/*   SmoothScroll                                             */
	/* ========================================================== */
	
	$(".nav li a, a.scrool").on('click', function(e) {
		
		var full_url = this.href;
		var parts = full_url.split("#");
		var trgt = parts[1];
		var target_offset = $("#"+trgt).offset();
		var target_top = target_offset.top;
		
		$('html,body').animate({scrollTop:target_top -70}, 1000);
			return false;
		
	});


	/* ========================================================== */
	/*   Newsletter                                               */
	/* ========================================================== */
	
	$('.newsletter_box .newsletter_form').each( function(){
		var form = $(this);
		//form.validate();
		form.submit(function(e) {
			if (!e.isDefaultPrevented()) {
				jQuery.post(this.action,{
					'email':$('input[name="nf_email"]').val(),
				},function(data){
					form.fadeOut('fast', function() {
						$(this).siblings('p.newsletter_success_box').show();
					});
				});
				e.preventDefault();
			}
		});
	});


	/* ========================================================== */
	/*   Analysis                                                 */
	/* ========================================================== */
	
	$('#analysis-form').each( function(){
		var form = $(this);
		//form.validate();
		form.submit(function(e) {
			if (!e.isDefaultPrevented()) {
				jQuery.post(this.action,{
					'website':$('input[name="analysis_website"]').val(),
					'names':$('input[name="analysis_names"]').val(),
					'email':$('input[name="analysis_email"]').val(),
					'phone':$('input[name="analysis_phone"]').val(),
					'message':$('textarea[name="analysis_message"]').val(),
				},function(data){
					form.fadeOut('fast', function() {
						$(this).siblings('p').show();
					});
				});
				e.preventDefault();
			}
		});
	})
	
	
	/* ========================================================== */
	/*   Contact                                                  */
	/* ========================================================== */
	$('#contact-form').each( function(){
		var form = $(this);
		//form.validate();
		form.submit(function(e) {
			if (!e.isDefaultPrevented()) {
				jQuery.post(this.action,{
					'names':$('input[name="contact_names"]').val(),
					'email':$('input[name="contact_email"]').val(),
					'phone':$('input[name="contact_phone"]').val(),
					'message':$('textarea[name="contact_message"]').val(),
				},function(data){
					form.fadeOut('fast', function() {
						$(this).siblings('p').show();
					});
				});
				e.preventDefault();
			}
		});
	})

	/* ========================================================== */
	/*   Tabs                                                     */
	/* ========================================================== */

	$(document).ready(function() {

          // Change tab class and display content
          $('div.tab-content').not('[data-tab=1]').addClass('hide');

          $('.tabs-nav li').first().addClass('active');
          $('.tabs-nav li').on('click', function() {
          $(this).addClass('active');
          $('.tabs-nav li').not(this).removeClass('active');

          //start sort
          var sortable = $(this).attr('data-tab');
            $('div[data-tab = '+sortable+']').removeClass('hide');
            $('div.tab-content').not('[data-tab='+sortable+']').addClass('hide');
          });

          //add an all option - to show all tabs when clicked
          $('li[data-tab=all]').on('click', function() {
            $(this).addClass('active');
            $('div.tab-content').removeClass('hide');
          });

        });
});
	
	