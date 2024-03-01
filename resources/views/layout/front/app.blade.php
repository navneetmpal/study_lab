<!DOCTYPE HTML>
<html lang="en">
    <head>
    	<!-- Required meta tags -->
        <meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">    
        
        <title>StudyLabz</title>
        <meta name=description content="">
        <meta name=keywords content="">
        <meta name=author content="">
        
        <link rel="icon" type="image/png" href="{{asset('asset/images/favicon.ico')}}">
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('asset/images/favicon.ico')}}">
        
        <!-- Required Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        
        <!-- Required Css -->        
        <link rel="stylesheet" type="text/css" href="{{asset('asset/css/owl_carousel.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('asset/css/fancy_scroller.css')}}">      
        <link rel="stylesheet" type="text/css" href="{{asset('asset/css/font_awesome.css')}}">
        <link rel="stylesheet" href="{{asset('asset/css/swiper.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('asset/css/common.css')}}">        
        <link rel="stylesheet" type="text/css" href="{{asset('asset/css/style.css')}}">        
        <link rel="stylesheet" type="text/css" href="{{asset('asset/css/responsive.css')}}">

        
        <!-- Required Js -->
        <script src="{{asset('asset/js/owl_carousel.js')}}"></script>
        <script src="{{asset('asset/js/fancy_scroller.js')}}"></script>
        <script src="{{asset('asset/js/jquery-3.2.1.min.js')}}"></script>


        <!-- school detail js -->
        <!-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js"></script> -->
        	<!--tinycms --> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.8.3/tinymce.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>

        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> -->
        <!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">         -->

        <script>
			$(document).ready(function() {
				$('#header .header .right .profile .click').click(function () {
					var ts = $(this).parent();
					if (ts.hasClass('open')) {
						ts.removeClass('open').children('.click_detail').slideUp('slow');
					} else {
						ts.addClass('open').children('.click_detail').slideDown('slow');
						
					}
					return false;
				});
				if ($(window).width() < 993) {
					$('#footer .top .left .box h4').click(function () {
						var ts = $(this).parent();
						if (ts.hasClass('open')) {
							ts.removeClass('open').children('ul').slideUp('slow');							
						} else {
							ts.addClass('open').children('ul').slideDown('slow');							
						}
						return false;
					});
				}	
				$('#school').click(function () {
					var ts = $(this);
					if (ts.hasClass('active')) {
					} else {
						$('#banner .find .search .tab a').removeClass('active');
						ts.addClass('active');
						$('#banner .find .search .tab_detail .tab_search').slideUp('slow');
						$('#banner .find .search .tab_detail .tab_search.school').slideDown('slow');
					}
					return false;
				});
				$('#job').click(function () {
					var ts = $(this);
					if (ts.hasClass('active')) {
					} else {
						$('#banner .find .search .tab a').removeClass('active');
						ts.addClass('active');
						$('#banner .find .search .tab_detail .tab_search').slideUp('slow');
						$('#banner .find .search .tab_detail .tab_search.job').slideDown('slow');
					}
					return false;
				});
				$('.select_check .click a').click(function () {
                    var ts = $(this).parent().parent();
                    if (ts.hasClass('open')) {
                        ts.removeClass('open').children('.click_detail').slideUp('slow');						
                    } else {
						$('.select_check').removeClass('open');
						$('.select_check .click_detail').slideUp('slow');
                        ts.addClass('open').children('.click_detail').slideDown('slow');
						$('#banner .find .search .tab_detail .tab_search .box').removeClass('upper');
						ts.parent().parent().addClass('upper');
                    }
                    return false;
                });
                $('.select_option').click(function () {
					$(this).parent().parent().find('.select_row').removeClass('active');
					$(this).parent().addClass('active');
                    var obj = $(this).parents(".select_check");
                    $(obj).find(" > .click input[type='hidden']").val($(this).attr('data-value'));
                    $(obj).find(".select_main b").html($(this).html());
                    $(obj).find(".click_detail").slideUp('slow');
                    $(obj).removeClass('open');
                    return false;
                });					
				$(".custom_scrollbar").mCustomScrollbar();		
				$(".newsletter .label").click(function () {
					$(this).parent().children(".input_text").focus();
				});
				$(".newsletter .input_text").focus(function () {
					$(this).parent().addClass('active');
				});
				$(".newsletter .input_text").blur(function () {
					if ($(this).val() == "") {
						$(this).parent().removeClass('active');
					}
				});
				$(".newsletter .input_text").trigger("focus");
				$(".newsletter .input_text").trigger("blur");					
			});	
		</script>
		<!-- <style>
	        #name-error{
			    color: red;
			}
	    </style> -->
        
        <!--[if lt IE 9]>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>
<body>
	<div id="wrap">
        <!-- Main Header -->
    @include('layout.front.header')
    
  
    @yield('content')

    
    <!-- Main footer -->
    @include('layout.front.footer')
	<script src="{{asset('asset/js/swiper.js')}}"></script>
    <script>
		var swiper1 = new Swiper(".swiper_school", {
			slidesPerView: 3,
			spaceBetween: 0,
			pagination: {
				el: '.swiper_school .swiper-pagination',
				clickable: true,
			},
			navigation: {
				nextEl: '.swiper_school .swiper-button-next',
				prevEl: '.swiper_school .swiper-button-prev',
			},
			breakpoints: {
				// when window width is >= 320px
				320: {
				  slidesPerView: 1
				},
				// when window width is >= 480px
				480: {
				  slidesPerView: 2				  
				},
				// when window width is >= 640px
				992: {
				  slidesPerView: 3				  
				}
			}
		});
		var swiper2 = new Swiper(".swiper_teacher", {
			slidesPerView: 2,
			spaceBetween: 20,
			pagination: {
				el: '.swiper_teacher .swiper-pagination',
				clickable: true,
			},
			navigation: {
				nextEl: '.swiper_teacher .swiper-button-next',
				prevEl: '.swiper_teacher .swiper-button-prev',				
			},
			breakpoints: {
				// when window width is >= 320px
				320: {
				  slidesPerView: 1
				},
				// when window width is >= 480px
				600: {
				  slidesPerView: 2				  
				},
				// when window width is >= 640px
				992: {
				  slidesPerView: 2				  
				}
			}
		});
		var swiper3 = new Swiper(".swiper_testimonial", {
			slidesPerView: 1,
			 autoplay: {
				delay: 4500,
				disableOnInteraction: false,
			  },
			pagination: {
				el: '.swiper_testimonial .swiper-pagination',
				clickable: true,
			},
			navigation: {
				nextEl: '.swiper_testimonial .swiper-button-next',
				prevEl: '.swiper_testimonial .swiper-button-prev',				
			},
		});
		var swiper4 = new Swiper(".swiper_blog", {
			slidesPerView: 3,
			spaceBetween: 0,
			pagination: {
				el: '.swiper_blog .swiper-pagination',
				clickable: true,
			},
			navigation: {
				nextEl: '.swiper_blog .swiper-button-next',
				prevEl: '.swiper_blog .swiper-button-prev',
			},
			breakpoints: {
				// when window width is >= 320px
				320: {
				  slidesPerView: 1
				},
				// when window width is >= 480px
				480: {
				  slidesPerView: 2				  
				},
				// when window width is >= 640px
				992: {
				  slidesPerView: 3				  
				}
			}
		});	

        // $(window).on('unload', function() {
        //    $(window).scrollTop(0);
        // });	
	
    </script>
    @yield('js')   
</body>
</html>
