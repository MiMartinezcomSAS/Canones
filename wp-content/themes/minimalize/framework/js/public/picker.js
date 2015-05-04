jQuery(document).ready(function($){

  "use strict";
  var $picker_container = jQuery("div.dt-style-picker-wrapper"),
      $theme_url = mytheme_urls.theme_base_url,
      $fw_url = mytheme_urls.framework_base_url,
	  $dark_layout = mytheme_urls.dark_layout,
	  $rtl = mytheme_urls.isRTL,
      $patterns_url = $fw_url+"theme_options/images/patterns/";
  
  //Applying Cookies
	if($rtl == true) {
		if ( $.cookie('minimalize-control-open') === '1' ) {
			$picker_container.animate({right: 0});
			$('a.style-picker-ico').removeClass('control-open');
		} else {
			$picker_container.animate( { right: -230 } );
			$('a.style-picker-ico').addClass('control-open');
		}
	} else {
		if ( $.cookie('minimalize-control-open') === '1' ) {
			$picker_container.animate({left: 0});
			$('a.style-picker-ico').removeClass('control-open');
		} else {
			$picker_container.animate( { left: -230 } );
			$('a.style-picker-ico').addClass('control-open');
		}
	}

	if($.cookie("minimalize_layout_color") !== null){
		if($.cookie("minimalize_layout_color") == 'dark-layout'){
			$("body").addClass('dark-bg');
			$('.wrapper').removeClass('light-bg');
			$('#top-content').removeClass('light-bg');
			$('body').addClass('dark-bg');
			$('.wrapper').addClass('dark-bg');
			$('#top-content').addClass('dark-bg');
			
			$("ul.layout-color-picker a#dark-layout").addClass("selected");
			
			var $dark_skin_css_src = $theme_url+'css/dark-skin.css';
			$('head').append('<link rel="stylesheet" href="'+$dark_skin_css_src+'" type="text/css" />');
			
			$('#dt_logo').attr('src', $theme_url+'images/logo-dark.png');
			$('#dt_retina_logo').attr('src', $theme_url+'images/logo-dark@2x.png');
			
			$('#dt_togglelogo').attr('src', $theme_url+'images/logo-dark.png');
			$('#dt_retina_togglelogo').attr('src', $theme_url+'images/logo-dark@2x.png');
		} else {
			$('.wrapper').removeClass('dark-bg');
			$('body').removeClass('dark-bg');
			$('#top-content').removeClass('dark-bg');
			$('body').addClass('light-bg');
			$('.wrapper').addClass('light-bg');
			$('#top-content').addClass('light-bg');
			
			$("ul.layout-color-picker a#default-layout").addClass("selected");
			
			if($('#header').hasClass('dt-menuoverslider')) {
				$('#dt_logo').attr('src', $theme_url+'images/logo-dark.png');
				$('#dt_retina_logo').attr('src', $theme_url+'images/logo-dark@2x.png');
			}else{
				$('#dt_logo').attr('src', $theme_url+'images/logo.png');
				$('#dt_retina_logo').attr('src', $theme_url+'images/logo@2x.png');
			}
			
			
			$('#dt_togglelogo').attr('src', $theme_url+'images/logo.png');
			$('#dt_retina_togglelogo').attr('src', $theme_url+'images/logo@2x.png');
			
		}
	} else {
		if($dark_layout != '') {
			$('body').addClass('dark-bg');
			$('.wrapper').removeClass('light-bg');
			$('#top-content').removeClass('light-bg');
			$('body').addClass('dark-bg');
			$('.wrapper').addClass('dark-bg');
			$('#top-content').addClass('dark-bg');
			
			$("ul.layout-color-picker a#dark-layout").addClass("selected");

			var $dark_skin_css_src = $theme_url+'css/dark-skin.css';
			$('head').append('<link rel="stylesheet" href="'+$dark_skin_css_src+'" type="text/css" />');

			$('#dt_logo').attr('src', $theme_url+'images/logo-dark.png');
			$('#dt_retina_logo').attr('src', $theme_url+'images/logo-dark@2x.png');
			
			
			$('#dt_togglelogo').attr('src', $theme_url+'images/logo-dark.png');
			$('#dt_retina_togglelogo').attr('src', $theme_url+'images/logo-dark@2x.png');
		} else {
			$('.wrapper').removeClass('dark-bg');
			$('body').removeClass('dark-bg');
			$('#top-content').removeClass('dark-bg');
			$('body').addClass('light-bg');
			$('.wrapper').addClass('light-bg');
			$('#top-content').addClass('light-bg');
			
			$("ul.layout-color-picker a#default-layout").addClass("selected");
			
			if($('#header').hasClass('dt-menuoverslider')) {
				$('#dt_logo').attr('src', $theme_url+'images/logo-dark.png');
				$('#dt_retina_logo').attr('src', $theme_url+'images/logo-dark@2x.png');
			}else{
				$('#dt_logo').attr('src', $theme_url+'images/logo.png');
				$('#dt_retina_logo').attr('src', $theme_url+'images/logo@2x.png');
			}
			
			
			$('#dt_togglelogo').attr('src', $theme_url+'images/logo.png');
			$('#dt_retina_togglelogo').attr('src', $theme_url+'images/logo@2x.png');
		}
	}
    
  //1. Applying Layout & patterns
  if($.cookie("minimalize_layout") === "fullwidth"){
	  $("body").removeAttr("style").removeClass("boxed");
      $("div#pattern-holder").slideUp();
      $("ul.pattern-picker a").removeAttr("class");
  }

  if($.cookie("minimalize_layout") === "boxed"){
	  
    $("ul.layout-picker li a").removeAttr("class");
    $("ul.layout-picker li a[id='"+$.cookie("minimalize_layout")+"']").addClass("selected");

	  $("div#pattern-holder").removeAttr("style");
    $('body').addClass('boxed');
    if($.cookie("minimalize_pattern")) {
	    var $i = $.cookie("minimalize_pattern");
    	var $img = $patterns_url+$i;
        $('body').css('background-image', 'url('+$img+')');
	}
	
    
  }//Applying Cookies End
  
	//Picker On/Off
	$("a.style-picker-ico").click(function(e){
		var $this = $(this);	
		
		if($rtl == true) {
			if($this.hasClass('control-open')){
				$picker_container.animate({right: 0},function(){$this.removeClass('control-open');});
				$.cookie('minimalize-control-open', 1, { path: '/' });	
			}else{
				$picker_container.animate({right: -230},function(){$this.addClass('control-open');});
				$.cookie('minimalize-control-open', 0, { path: '/' });
			}
		} else {
			if($this.hasClass('control-open')){
				$picker_container.animate({left: 0},function(){$this.removeClass('control-open');});
				$.cookie('minimalize-control-open', 1, { path: '/' });	
			}else{
				$picker_container.animate({left: -230},function(){$this.addClass('control-open');});
				$.cookie('minimalize-control-open', 0, { path: '/' });
			}
		}
		
		e.preventDefault();
	});//Picker On/Off end

  //Layout Picker
  $("ul.layout-picker a").click(function(e){
    var $this = $(this);
    $("ul.layout-picker a").removeAttr("class");
    $this.addClass("selected");
    $.cookie("minimalize_layout", $this.attr("id"), { path: '/' });

    if( $.cookie("minimalize_layout") === "boxed") {
      $("body").addClass("boxed");
      $("div#pattern-holder").slideDown();
		if( $.cookie("minimalize_pattern") == null ){
			$("ul.pattern-picker a:first").addClass('selected');
			$.cookie("minimalize_pattern","pattern1.jpg",{ path: '/' });
			$('body').css('background-image', 'url('+$patterns_url+'pattern1.jpg)');
		} else {
			$img = $patterns_url+$.cookie("minimalize_pattern");
			$('body').css('background-image', 'url('+$img+')');
      }
    } else {
      $("body").removeAttr("style").removeClass("boxed");
      $("div#pattern-holder").slideUp();
      $("ul.pattern-picker a").removeAttr("class");
    }
    window.location.href = location.href;
    e.preventDefault();
  });//Layout Picker End

  //Pattern Picker
  $("ul.pattern-picker a").click(function(e){
    
    if($.cookie("minimalize_layout") === "boxed"){
      var $this = $(this);
      $("ul.pattern-picker a").removeAttr("class");
      $this.addClass("selected");
      $.cookie("minimalize_pattern", $this.attr("data-image"), { path: '/' });
      var $img = $patterns_url+$.cookie("minimalize_pattern");
      $('body').css('background-image', 'url('+$img+')');
    }
    e.preventDefault();
  });//Pattern Picker End

	//Layout Color Picker
	$("ul.layout-color-picker a").click(function(e){
	
		var $this = $(this);
		$("ul.layout-color-picker a").removeClass("selected");
		$this.addClass("selected");
	
		if($this.attr('id') === "dark-layout"){
			$.cookie("minimalize_layout_color", 'dark-layout', { path: '/' });
			$('body').removeClass('light-bg');
			$('.wrapper').removeClass('light-bg');
			$('#top-content').removeClass('light-bg');
			$('body').addClass('dark-bg');
			$('.wrapper').addClass('dark-bg');
			$('#top-content').addClass('dark-bg');

			var $dark_skin_css_src = $theme_url+'css/dark-skin.css';
			$('head').append('<link rel="stylesheet" href="'+$dark_skin_css_src+'" type="text/css" />');
			
			$('#dt_logo').attr('src', $theme_url+'images/logo-dark.png');
			$('#dt_retina_logo').attr('src', $theme_url+'images/logo-dark@2x.png');
			
			
			$('#dt_togglelogo').attr('src', $theme_url+'images/logo-dark.png');
			$('#dt_retina_togglelogo').attr('src', $theme_url+'images/logo-dark@2x.png');
		} else {
			$.cookie("minimalize_layout_color", 'white-layout', { path: '/' });
			$('.wrapper').removeClass('dark-bg');
			$('body').removeClass('dark-bg');
			$('#top-content').removeClass('dark-bg');
			$('body').addClass('light-bg');
			$('.wrapper').addClass('light-bg');
			$('#top-content').addClass('light-bg');
			
			if($('#header').hasClass('dt-menuoverslider')) {
				$('#dt_logo').attr('src', $theme_url+'images/logo-dark.png');
				$('#dt_retina_logo').attr('src', $theme_url+'images/logo-dark@2x.png');
			}else{
				$('#dt_logo').attr('src', $theme_url+'images/logo.png');
				$('#dt_retina_logo').attr('src', $theme_url+'images/logo@2x.png');
			}
			
			$('#dt_togglelogo').attr('src', $theme_url+'images/logo.png');
			$('#dt_retina_togglelogo').attr('src', $theme_url+'images/logo@2x.png');
		}
		window.location.href = location.href;
    	e.preventDefault();
	
	});//Layout Color Picker

});