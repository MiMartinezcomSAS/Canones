jQuery.noConflict();
jQuery(document).ready(function($){
	
	"use strict";
	
	//LOADING BAR...
	if( mytheme_urls.loadingbar === "enable") {
		Pace.on("done", function(){
				$(".cover").fadeOut(500);
				$(".pace").remove();
		});
	}
		
	var isMobile = (navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i)) || (navigator.userAgent.match(/iPad/i)) || (navigator.userAgent.match(/Android/i)) || (navigator.userAgent.match(/Blackberry/i)) || (navigator.userAgent.match(/Windows Phone/i)) ? true : false;
	var currentWidth = window.innerWidth || document.documentElement.clientWidth;
	
	// Select Dropdown arrow  
	$("select").each(function(){
		if($(this).css('display') != 'none') {
			$(this).wrap( '<div class="selection-box"></div>' );
		}
	});


	// Sticky Header
	var default_offset = 0;
	if(mytheme_urls.stickynav === "enable" && !isMobile && currentWidth > 767) {
		$("#header").sticky({ topSpacing: 0 });
		var default_offset = 85;
	} // Sticky Header End
	
	
	$('.load-more').css({"cursor":"pointer"});
	$('.loading-bar').css({"cursor":"pointer"});

	
	//Scroll Down...
	$('.top-content #scrolldown a').click(function(e){
		$.scrollTo($('.top-content #scrolldown a').attr('href'), 1400, { offset: { top: -85 }});
		e.preventDefault();
	});
	
	$('.dt-sc-parallax-section #scrolldown a').click(function(e){
		$.scrollTo($('.top-content #scrolldown a').attr('href'), 1400);
		e.preventDefault();
	});
	
	$('.sb-site #scrolldown a').click(function(e){
		$.scrollTo($('.sb-site #scrolldown a').attr('href'), 1400, { offset: { top: -63 }});
		e.preventDefault();
	}); // scroll Down End
	
	if($('body').hasClass('page-template-tpl-onepage-php')) { 
		$('.dt-global-home a:first, .dt-vertical-menu a:first, .pusy-left-menu a:first, .menu-main-menu a:first, .menu a:first').click(function(e){
			$.scrollTo('#'+$('.content').attr('id'), 1400 , { offset: { top: -85 } } );
			e.preventDefault();
		});
	}
	
	/* Navigation Section */
	if(!isMobile && currentWidth > 767) {

		if(mytheme_urls.header_styles == 'type2') {
			
			$.slidebars();	
			
			$('.sb-slidebar .menu-main-menu').onePageNav({
			  currentClass : 'current_page_item',
			  filter		 : ':not(.external)',
			  scrollSpeed  : 750,
			  scrollOffset : 63
			});	
			
		} else if(mytheme_urls.header_styles == 'type3') {
			
			$(window).scroll(function(){
				if ( $(document).scrollTop() < 90 ) {
					$('.collapse').css({'display':'none'});
				}else{
					$('.collapse').css({'display':'block'});
				}
			});
			
			//Sidebar Active...
			$('#rt-menu-wrapper > ul, .menu-light > ul,#fp-nav').onePageNav({
				currentClass : 'current_page_item',
				filter		 : ':not(.external)',
				scrollSpeed  : 750,
				scrollOffset : -1
			});
				
		} else if(mytheme_urls.header_styles == 'type4') {
		
			//TOGGLE PANEL...
			$("#toggle-panel").click(function(){ 
				if($('#toggle i').hasClass('fa-minus')) {
					$('#toggle i').removeClass('fa-minus');
					$('#toggle i').addClass('fa-plus');
				} else {
					$('#toggle i').removeClass('fa-plus');
					$('#toggle i').addClass('fa-minus');
				}
		
				$("#panel").slideToggle("medium");
				return false;
			}); 
		
		} else if(mytheme_urls.header_styles == 'type5') {
			
			var headerH = $('#header').height();
			$(document).bind('ready scroll', function() {
				var docScroll = $(document).scrollTop();
				if($('#header').hasClass('dt-menuoverslider') && docScroll >= headerH) {
					if (!$('#header').hasClass('header-animate')) {
						$('#header').addClass('header-animate').css({ top: '-100px' }).stop().animate({ top: 0 }, 500);
					}
				} else {
					$('#header').removeClass('header-animate').removeAttr('style');
				}
			});
			
		}
		
	} else{
		
		$('header').attr('id', 'header');
		$("div.sb-toggle-right.navbar-right").remove();
		
	}
	

	// One page navigation 
	$('#main-menu').onePageNav({
		currentClass : 'current_page_item',
		filter		 : ':not(.external)',
		scrollSpeed  : 750,
		scrollOffset : 86
	});	

	//MINI MOBILE MENU...
    $('nav#main-menu').meanmenu({
        meanMenuContainer: $('header .menu-main-menu-container'),
        meanRevealPosition: 'left',
        meanScreenWidth: 767,
        meanMenuClose: "<span/><span/><span/>",
		onePage: true
    });
	

	var isMacLike = navigator.platform.match(/(Mac|iPhone|iPod|iPad)/i)?true:false;
	if( mytheme_urls.scroll === "enable" && !isMacLike ) {
		jQuery("html").niceScroll({zindex:99999,cursorborder:"1px solid #424242"});
	}

	// Goto Top
	$().UItoTop({ easingType: 'easeInOutCirc' });
	

	//Portfolio Single page Slider
	if( ($(".portfolio-slider").length) && ($(".portfolio-slider li").length > 1) ) {
		$('.portfolio-slider').bxSlider({
				auto: true,
				mode: 'fade',
				pager: ''
		});
	}
	
	
	//Single Blog Slider
    if( ($("ul.entry-gallery-post-slider").length) && ( $("ul.entry-gallery-post-slider li").length > 1 ) ){
	  	$("ul.entry-gallery-post-slider").bxSlider({auto:false, video:true, useCSS:false, pager:'', autoHover:true, adaptiveHeight:true});
    }	
	
	
	//Blog Template Isotop
	if( $(".apply-isotope").length ){
		$(".apply-isotope").each(function(){
			if( $('#primary').hasClass('with-both-sidebar') ) var $gw = 12; else var $gw = 15;
			$(this).isotope({itemSelector : '.column',transformsEnabled:false,masonry: { gutterWidth: $gw} });
		});
	}

	//Smart Resize Start
	$(window).smartresize(function(){
		/* Blog Template Isotope */
		if( $(".apply-isotope").length ){
			$(".apply-isotope").each(function(){
				if( $('#primary').hasClass('with-both-sidebar') ) var $gw = 12; else var $gw = 15;
				$(this).isotope({itemSelector : '.column',transformsEnabled:false,masonry: { gutterWidth: $gw} });
			});
		}
		
	});//Smart Resize End
	
	//Window Load Start
	$(window).load(function(){
		
		//Blog Template Isotope
		if( $(".apply-isotope").length ){
			$(".apply-isotope").each(function(){
				if( $('#primary').hasClass('with-both-sidebar') ) var $gw = 12; else var $gw = 15;
				$(this).isotope({itemSelector : '.column',transformsEnabled:false,masonry: { gutterWidth: $gw} });
			});
		}
		
		
		//Portfolio isotope
		var $container = $('.dt-sc-portfolio-container');
		if( $container.length) {
			
			var $width = $container.hasClass("no-space") ? 0 : 20;

			$(window).smartresize(function(){
				$container.css({overflow:'hidden'}).isotope({itemSelector : '.column',masonry: { gutterWidth: $width } });
			});
			
			$container.isotope({
			  filter: '*',
			  resizesContainer: true,
			  masonry: { gutterWidth: $width },
			  animationOptions: { duration: 750, easing: 'linear', queue: false  }
			});
			
		}

		if($("div.dt-sc-sorting-container").length){
			$("div.dt-sc-sorting-container a").click(function(){
				$width = $container.hasClass("no-space") ? 0 : 20;				
				$("div.dt-sc-sorting-container a").removeClass("active-sort");
				var selector = $(this).attr('data-filter');
				$(this).addClass("active-sort");
				$container.isotope({
					filter: selector,
					masonry: { gutterWidth: $width },
					animationOptions: { duration:750, easing: 'linear',  queue: false }
				});
			return false;	
			});
		}
		
	});//Window Load End
	
	
	// Portfolio Load More starts
	$('.load-more').click(function(){
		
		if(!$(this).hasClass('disable_click')) {
			var postid = $(this).attr('data-postid'),
				postperpage = $(this).attr('data-post-per-page'),
				page = $(this).attr('data-page'),
				tax = $(this).attr('data-taxonomy'),
				more_text = $(this).html();
				
			$.ajax({
				type: "POST",
				url : mytheme_urls.ajaxurl,
				data:
				{
					action: "dt_ajax_load_portfolio_posts",
					postid: postid,
					postperpage: postperpage,
					page: page,
					tax: tax,
				},
				beforeSend: function(){
					$('.load-more').html('Loading...');
				},
				error: function (xhr, status, error) {
					$('.load-more').html('No more posts to load!');
				},
				success: function (response) {
					if(response == 'NoData') {
						$('.load-more').html('Stop!! No more posts to load.');
						$('.load-more').addClass('disable_click');
						$('.load-more').css({"cursor":"default"});
					} else {
						$('.dt-sc-portfolio-container').append(response);
						page = parseInt(page)+1;
						$('.load-more').attr('data-page', page)
						$('.dt-sc-portfolio-container').isotope( 'reloadItems' ).isotope();
						$(window).trigger( 'resize' );	
						$('.load-more').html(more_text);
						if($(".gallery").length) {
							$(".gallery a[data-gal^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: false,social_tools: false,deeplinking:false});		
						}
					}
				},
			});
			//Isotope relayout...
			setTimeout(function() {
				$('.dt-sc-portfolio-container').isotope('reLayout');
			}, 3000);
			
		}
		
	}); // Portfolio Load More Ends
	
	
	// Blog Scroll Down to load more 
	if( ($('body').hasClass('page-template-tpl-blog-php')) ) {
		if($("#blog-loading-bar").length ) {
			$(window).scroll(function() {
				if($(window).scrollTop() + $(window).height() == $(document).height()) {
						
					if(!$("#blog-loading-bar").hasClass('disable_click')) { 
						var postid = $('.loading-bar').attr('data-postid'),
							page = $('.loading-bar').attr('data-page'),
							
							more_text = $(this).html();
			
						$.ajax({
							type: "POST",
							url : mytheme_urls.ajaxurl,
							data:
							{
								action: "dt_ajax_load_blog_posts",
								postid: postid,
								page: page,
							},
							beforeSend: function(){
								$('.loading-bar').html('Loading...');
							},
							error: function (xhr, status, error) {
								$('.loading-bar').html('No more posts to load!');
							},
							success: function (response) {
								if(response == 'NoData') {
									$('.loading-bar').html('No More Posts to load!');
									$('.loading-bar').addClass('disable_click');
									$('.loading-bar').css({"cursor":"default"});
								} else {
									$('.blog-items').append(response);
									page = parseInt(page)+1;
									$('.loading-bar').attr('data-page', page)
									$('.blog-items').isotope( 'reloadItems' ).isotope();
									if($(".blog-items ul.entry-gallery-post-slider").attr('style') === undefined ) {
										$(".blog-items ul.entry-gallery-post-slider").bxSlider({auto:false, video:true, useCSS:false, pager:'', autoHover:true, adaptiveHeight:true});
									}
									$('.wp-video').css('width', '100%');
									$('.wp-video').css('height', '100%');
									$("div.dt-video-wrap").fitVids();
									$('audio').attr('style', 'visibility: visible');
									$('audio source').attr('style', 'visibility: visible');
									$(window).trigger( 'resize' );
									$('.loading-bar').html('Scroll Down To Load More!');
								}
							},
						});
								//Isotope relayout...
								setTimeout(function() {
									$('.blog-items').isotope('reLayout');
								}, 3000);
					}
				}
			});
		}
	} // Blog Scroll Down to load more End
	
	
	//Breadcrumb Parallax Sections...
	jQuery('.dt-sc-breadcrumb-parallax').each(function(){
		jQuery(this).bind('inview', function (event, visible) {
			if(visible == true) {
				jQuery(this).parallax("0%", 0);
			} else {
				jQuery(this).css('background-position','');
			}
		});
	});	
	
	
	//Woocommerce 
	if(jQuery('.tabs').length > 0){
		jQuery('.tabs').each(function(){
		  jQuery(this).find("li:first a").addClass('active');
		});
		
		jQuery('.tabs li a').click(function(){
		  jQuery('.tabs li a').removeClass('active');
		  jQuery(this).addClass('active');
		});
	} 
		
	$('.wp-video').css('width', '100%');
	$('.wp-video-shortcode').css('width', '100%');
	$('.wp-video-shortcode').css('height', '100%');
	$("div.dt-video-wrap").fitVids();		
});

//MeanMenu Custom Scroll...
function funtoScroll(x, e) {
	"use strict";
	var str = new String(e.target);
	var pos = str.indexOf('#');
	var t = str.substr(pos);
	
	var eleclass = jQuery(e.target).prop("class");
	
	if(eleclass == "external") {
		window.location.href = e.target;	
	} else {
		jQuery.scrollTo(t, 750, { offset: { top: -44 }});
	}
	
	jQuery(x).parent('.mean-bar').next('.mean-push').remove();		
	jQuery(x).parent('.mean-bar').remove();

	jQuery('nav#main-menu').meanmenu({
		meanMenuContainer :  jQuery('header .menu-main-menu-container'),
		meanRevealPosition:  'left',
		meanScreenWidth   :  767,
        meanMenuClose : "<span /><span /><span />",
		onePage: true
	});
	
	e.preventDefault();
}(jQuery);