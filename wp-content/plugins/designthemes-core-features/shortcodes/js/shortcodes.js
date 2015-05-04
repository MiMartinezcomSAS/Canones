jQuery(document).ready(function() {

	//Accordion & Toggle
	jQuery('.dt-sc-toggle').toggle(function(){ jQuery(this).addClass('active'); },function(){ jQuery(this).removeClass('active'); });
	jQuery('.dt-sc-toggle').click(function(){ jQuery(this).next('.dt-sc-toggle-content').slideToggle(); });
	
	jQuery('.dt-sc-toggle-frame-set').each(function(){
		var $this = jQuery(this),
		    $toggle = $this.find('.dt-sc-toggle-accordion');
			
			$toggle.click(function(){
				if( jQuery(this).next().is(':hidden') ) {
					$this.find('.dt-sc-toggle-accordion').removeClass('active').next().slideUp();
					jQuery(this).toggleClass('active').next().slideDown();
				}
				return false;
			});
			
			//Activate First Item always
			$this.find('.dt-sc-toggle-accordion:first').addClass("active");
			$this.find('.dt-sc-toggle-accordion:first').next().slideDown();
  	});//Accordion & Toggle End
	
	//Tooltip
	 if(jQuery(".dt-sc-tooltip-bottom").length){
		 jQuery(".dt-sc-tooltip-bottom").each(function(){	jQuery(this).tipTip({maxWidth: "auto"}); });
	 }
	 
	 if(jQuery(".dt-sc-tooltip-top").length){
		 jQuery(".dt-sc-tooltip-top").each(function(){ jQuery(this).tipTip({maxWidth: "auto",defaultPosition: "top"}); });
	 }
	 
	 if(jQuery(".dt-sc-tooltip-left").length){
		 jQuery(".dt-sc-tooltip-left").each(function(){ jQuery(this).tipTip({maxWidth: "auto",defaultPosition: "left"}); });
	 }
	 
	 if(jQuery(".dt-sc-tooltip-right").length){
		 jQuery(".dt-sc-tooltip-right").each(function(){ jQuery(this).tipTip({maxWidth: "auto",defaultPosition: "right"}); });
	 }//Tooltip End	

	//Parallax Sections...
	jQuery('.dt-sc-parallax-section').each(function(){
		jQuery(this).bind('inview', function (event, visible) {
			if(visible == true) {
				jQuery(this).parallax("50%", 0.3);
			} else {
				jQuery(this).css('background-position','');
			}
		});
	});//Parallax Sections End

	//Progress Bar 
	jQuery('.dt-sc-progress-bar').each(function(){
		jQuery(this).bind('inview', function (event, visible) {
			var t = jQuery(this),
				dataperc = t.attr('data-perc'),
				lblpos = dataperc;
			t.find('.dt-sc-bar').animate({width:dataperc+'%'}, 800);
			t.find('.dt-sc-label').animate({left:lblpos+'%'}, 800);
			t.find('.dt-sc-perc').text(dataperc+'%');
		});
	});//Progress Bar End
	 
	//Divider Scroll to top
	jQuery("a.scrollTop").each(function(){
		jQuery(this).click(function(e){
		  jQuery("html, body").animate({ scrollTop: 0 }, 600);
		  e.preventDefault();
		});
	});//Divider Scroll to top End
	
	// Tabs Shortcodes  
	  "use strict";
	if(jQuery('ul.dt-sc-tabs').length > 0) {
		jQuery('ul.dt-sc-tabs').jtabs('> .dt-sc-tabs-content');
	}
	  
	if(jQuery('ul.dt-sc-tabs-frame').length > 0){
		jQuery('ul.dt-sc-tabs-frame').jtabs('> .dt-sc-tabs-frame-content');
	}
	  
	if(jQuery('.dt-sc-tabs-vertical-frame').length > 0){
		
		jQuery('.dt-sc-tabs-vertical-frame').jtabs('> .dt-sc-tabs-vertical-frame-content');
		
		jQuery('.dt-sc-tabs-vertical-frame').each(function(){
		  jQuery(this).find("li:first").addClass('first').addClass('current');
		  jQuery(this).find("li:last").addClass('last');
		});
		
		jQuery('.dt-sc-tabs-vertical-frame li').click(function(){
		  jQuery(this).parent().children().removeClass('current');
		  jQuery(this).addClass('current');
		});
		
	} //Tabs Shortcode End
	
	//Donutchart
  	jQuery(".donutchart").each(function(){
		var $this = jQuery(this);
	 	var $bgColor =  ( $this.data("bgcolor") !== undefined ) ? $this.data("bgcolor") : "#fdfdfd";
	 	var $fgColor =  ( $this.data("fgcolor") !== undefined ) ? $this.data("fgcolor") : "#959595";
	 	var $size = ( $this.data("size") !== undefined ) ? $this.data("size") : "160";
		
		var $donutwidth,$textsize;
		if($size == "160"){
			$donutwidth = 8;
			$textsize = 18;			
		}else if($size == "180"){
			$donutwidth = 6;
			$textsize = 22;			
		}else{
			$donutwidth = 4;
			$textsize = 26;
		}
			
	 	$this.donutchart({'size': $size, 'fgColor': $fgColor, 'bgColor': $bgColor , 'donutwidth' : $donutwidth, 'textsize': $textsize });
	 	$this.donutchart('animate');
	});//Donutchart Shortcode End
		  
});


jQuery(window).load(function() {
	
	// Clients Carousel
	if( jQuery('.dt-sc-partner-carousel').length) {
		jQuery('.dt-sc-partner-carousel').each(function(){
			  var pagger = jQuery(this).parents(".dt-sc-partner-carousel-wrapper").find("div.carousel-arrows"),
			      next = pagger.find("a.carousel-next"),
				  prev = pagger.find("a.carousel-prev");

			jQuery(this).carouFredSel({
				  responsive:true,
				  auto:true,
				  width:'100%',
				  height: 'variable',
				  scroll:1,
				  items:{
				  	height: 'variable',
				  	visible: {min: 1,max: 4} 
				  },
				  prev:prev,
				  next:next
			});

		});
	}// Clients Carousel End
	
	// Team Carousel
	if( jQuery('.dt-sc-team-carousel').length) { 
		jQuery('.dt-sc-team-carousel').each(function(){
			  var pagger = jQuery(this).parents(".dt-sc-team-carousel-wrapper").find("div.carousel-arrows"),
			      next = pagger.find("a.carousel-next"),
				  prev = pagger.find("a.carousel-prev");

			jQuery(this).carouFredSel({
				  responsive:true,
				  auto:false,
				  width:'100%',
				  height: 'variable',
				  scroll:1,
				  items:{
				  	height: 'variable',
				  	visible: {min: 1,max: 4} 
				  },
				  prev:prev,
				  next:next
			});

		});
	}// Team Carousel End	
	
	//Testimonial Carousel
	if( jQuery('.dt-sc-testimonial-carousel').length ) {
		  jQuery('.dt-sc-testimonial-carousel').each(function(){
			  var pagger = jQuery(this).parents(".dt-sc-testimonial-carousel-wrapper").find("div.carousel-arrows"),
			      next = pagger.find("a.testimonial-next"),
				  prev = pagger.find("a.testimonial-prev") ;
			  		
			  jQuery(this).carouFredSel({
				  responsive:true,
				  auto:false,
				  width:'100%',
				  height: 'variable',
				  pagination: "#pager",
				  scroll:1,
				  items:{ 
				  	width:600,
				  	height: 'variable',
				  	visible: {min: 1,max: 1} 
				  },
				  prev:prev,
				  next:next
			  });
		  });
	}//Testimonial Carousel End
	
	//Service (or) Icon Box Carousel
	if( jQuery('.dt-sc-service-carousel').length ) {
		
		var currentWidth = window.innerWidth || document.documentElement.clientWidth;
		if(currentWidth < 767){
			var $min_max_count  = 1;
		}else{
			var $min_max_count = 4;
		}
			jQuery('.dt-sc-service-carousel').each(function(){
				jQuery(this).carouFredSel({
					responsive:true,
					auto:false,
					width: '100%',
					height: 'variable',
					pagination: "#carouselnav",					
					swipe: {
                                      onTouch: true,
                                      onMouse: true,
                                      duration: 1200,
                    },
					scroll :$min_max_count,
					items:{
						height: 'variable',
						visible: 
						{
							min: $min_max_count,
							max: $min_max_count
						} 
					},
				});
			});
	}	
	
	if(jQuery(".carouselnav-pager.dt-sc-tooltip-top").length){
		jQuery(".carouselnav-pager.dt-sc-tooltip-top").each(function(){ jQuery(this).tipTip({maxWidth: "auto",defaultPosition: "top"}); });
	}//Service (or) Icon box Carousel End
	
	//Counter Number...
	jQuery('.dt-sc-num-count').each(function(){
	  jQuery(this).one('inview', function (event, visible) {
		  if(visible === true) {
			  var val = jQuery(this).attr('data-value');
			  jQuery(this).animateNumber({ number: val	}, 1000);
		  }
	  });
	}); //Counter End
	 
	// Tweets 
	if(jQuery('.tweets_container').length > 0) {
		jQuery('.tweets_container .tweet_list').carouFredSel({
			width: 'auto',
			height: 'auto',
			scroll: 1,
			direction: 'up',
			items: {
				height: 'auto',
				visible: {
					min: 1,
					max: 1
				}
			}
		});
	}
});