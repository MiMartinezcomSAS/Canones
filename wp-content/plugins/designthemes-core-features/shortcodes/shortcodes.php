<?php
class DTCoreShortcodesDefination {
	
	function __construct() {
		
		/* Accordion Shortcode */
		add_shortcode ( "dt_sc_accordion_group", array ( $this, "dt_sc_accordion_group" ) );

		/* Button Shortcode */
		add_shortcode ( "dt_sc_button", array ( $this, "dt_sc_button" ) );

		/* BlockQuotes Shortcode */
		add_shortcode ( "dt_sc_blockquote", array ( $this, "dt_sc_blockquote" ) );

		/* Callout Box Shortcode */
		add_shortcode ( "dt_sc_callout_box", array ( $this, "dt_sc_callout_box" ));
		
		/* Callout Box With Icon Shortcode */
		add_shortcode ( "dt_sc_callout_box_with_icon", array ( $this, "dt_sc_callout_box_with_icon" ) );

		/* Counter Shortcode */
		add_shortcode ( "dt_sc_counter", array ( $this, "dt_sc_counter" ) );

		/* Columns Shortcode */
		add_shortcode ( "dt_sc_full_width", array ( $this, "dt_sc_columns" ) );
		
		add_shortcode ( "dt_sc_one_half", array ( $this, "dt_sc_columns" ) );

		add_shortcode ( "dt_sc_one_third", array ( $this, "dt_sc_columns" ) );

		add_shortcode ( "dt_sc_one_fourth", array ( $this, "dt_sc_columns" ) );

		add_shortcode ( "dt_sc_one_fifth", array ( $this, "dt_sc_columns" ) );

		add_shortcode ( "dt_sc_one_sixth", array ( $this, "dt_sc_columns" ) );

		add_shortcode ( "dt_sc_two_sixth", array ( $this, "dt_sc_columns" ) );

		add_shortcode ( "dt_sc_two_third", array ( $this, "dt_sc_columns" ) );

		add_shortcode ( "dt_sc_three_fourth", array ( $this, "dt_sc_columns") );

		add_shortcode ( "dt_sc_two_fifth", array ( $this, "dt_sc_columns" ) );

		add_shortcode ( "dt_sc_three_fifth", array ( $this,"dt_sc_columns" ) );

		add_shortcode ( "dt_sc_four_fifth", array ( $this,"dt_sc_columns" ) );

		add_shortcode ( "dt_sc_three_sixth", array ( $this, "dt_sc_columns" ) );

		add_shortcode ( "dt_sc_four_sixth", array ( $this, "dt_sc_columns" ) );

		add_shortcode ( "dt_sc_five_sixth", array ( $this, "dt_sc_columns" ) );

		/* Column with inner */
		add_shortcode ( "dt_sc_one_half_inner", array ( $this, "dt_sc_columns") );

		add_shortcode ( "dt_sc_one_third_inner", array ( $this, "dt_sc_columns") );

		add_shortcode ( "dt_sc_one_fourth_inner", array ( $this, "dt_sc_columns") );

		add_shortcode ( "dt_sc_one_fifth_inner", array ( $this, "dt_sc_columns" ) );

		add_shortcode ( "dt_sc_one_sixth_inner", array ( $this, "dt_sc_columns" ) );

		add_shortcode ( "dt_sc_two_sixth_inner", array ( $this, "dt_sc_columns" ) );

		add_shortcode ( "dt_sc_two_third_inner", array ( $this, "dt_sc_columns" ) );

		add_shortcode ( "dt_sc_three_fourth_inner", array ( $this, "dt_sc_columns" ) );

		add_shortcode ( "dt_sc_two_fifth_inner", array ( $this, "dt_sc_columns" ) );

		add_shortcode ( "dt_sc_three_fifth_inner", array ( $this, "dt_sc_columns" ) );

		add_shortcode ( "dt_sc_four_four_inner", array (  $this, "dt_sc_columns" ) );

		add_shortcode ( "dt_sc_three_sixth_inner", array ( $this, "dt_sc_columns" ) );

		add_shortcode ( "dt_sc_four_sixth_inner", array ( $this, "dt_sc_columns" ) );

		add_shortcode ( "dt_sc_five_sixth_inner", array ( $this, "dt_sc_columns" ) );

		add_shortcode ( "dt_sc_four_fifth_inner", array (  $this, "dt_sc_columns" ) );

		/* Contact Information */
		
		#Address
		add_shortcode ( "dt_sc_address", array ( $this, "dt_sc_address") );
		
		#Phone
		add_shortcode ( "dt_sc_phone", array ( $this,"dt_sc_phone") );

		#Fax
		add_shortcode ( "dt_sc_fax", array ( $this, "dt_sc_fax" ) );
		
		#Email
		add_shortcode ( "dt_sc_email", array ( $this, "dt_sc_email" ) );

		#Web
		add_shortcode ( "dt_sc_web", array ( $this, "dt_sc_web") );
		
		/* Contact Information End */

		/* Clients Carousel Shortcode */
		add_shortcode ( "dt_sc_clients_carousel", array ( $this, "dt_sc_clients_carousel") );

		/* Donutchart Start */
		add_shortcode ( "dt_sc_donutchart_small", array ( $this,"dt_sc_donutchart") );
		
		add_shortcode ( "dt_sc_donutchart_medium", array ( $this, "dt_sc_donutchart") );

		add_shortcode ( "dt_sc_donutchart_large", array ( $this, "dt_sc_donutchart") );
		/* Donutchart End */
		
		/* Dividers */
		
		/* Clear Shortcode */
		add_shortcode ( "dt_sc_clear", array ( $this,"dt_sc_clear") );
		
		/* HR With Border */
		add_shortcode( "dt_sc_hr_border", array ( $this,"dt_sc_hr_border") );

		add_shortcode ( "dt_sc_hr", array ( $this, "dt_sc_dividers" ) );
		
		add_shortcode ( "dt_sc_hr_invisible", array ( $this, "dt_sc_dividers" ) );
		
		add_shortcode ( "dt_sc_hr_invisible_toosmall", array ( $this, "dt_sc_dividers" ) );
	
		add_shortcode ( "dt_sc_hr_invisible_small", array ( $this, "dt_sc_dividers" ) );

		add_shortcode ( "dt_sc_hr_invisible_medium", array ( $this,"dt_sc_dividers" ) );
		
		add_shortcode ( "dt_sc_hr_invisible_large", array ($this,"dt_sc_dividers" ) );
		/* Dividers End */
		
		/* Icon Boxes Shortcode */
		add_shortcode ( "dt_sc_icon_box", array ( $this,"dt_sc_icon_box" ) );
		/* Icon Boxes Shortcode End*/
		
		/* Icon Boxes carousel Shortcode */
		add_shortcode ( "dt_sc_icon_box_carousel", array ( $this,"dt_sc_icon_box_carousel" ) );
		/* Icon Boxes carousel Shortcode End*/

		/* Code Shortcode */
		add_shortcode ( "dt_sc_code", array ( $this, "dt_sc_code" ) );

		/* Ordered List Shortcode */
		add_shortcode ( "dt_sc_fancy_ol", array ( $this, "dt_sc_fancy_ol" ) );
		
		/* Unordered List Shortcode */
		add_shortcode ( "dt_sc_fancy_ul", array ( $this, "dt_sc_fancy_ul" ) );

		/* Pricing Table */
		add_shortcode ( "dt_sc_pricing_table", array ( $this, "dt_sc_pricing_table" ) );

		/* Pricing Table Item */
		add_shortcode ( "dt_sc_pricing_table_item", array ( $this, "dt_sc_pricing_table_item" ) );

		/* Progress Bar Shortcode */
		add_shortcode ( "dt_sc_progressbar", array ( $this, "dt_sc_progressbar" ) );

		/* Tabs */
		add_shortcode ( "dt_sc_tab", array ( $this, "dt_sc_tab" ) );

		add_shortcode ( "dt_sc_tabs_horizontal", array ( $this, "dt_sc_tabs_horizontal") );

		add_shortcode ( "dt_sc_tabs_vertical", array ( $this, "dt_sc_tabs_vertical" ) );

		/* Team Shortcode */
		add_shortcode ( "dt_sc_team", array ( $this, "dt_sc_team" ) );
		
		/* Team Shortcode */
		add_shortcode ( "dt_sc_team_type2", array ( $this, "dt_sc_team_type2" ) );
				
		
		/* Team Carousel Shortcode */
		add_shortcode ( "dt_sc_team_carousel", array ( $this, "dt_sc_team_carousel" ) );

		/* Testimonial Shortcode */
		add_shortcode ( "dt_sc_testimonial", array ( $this, "dt_sc_testimonial" ) );
		
		/* Testimonial Carousel Shortcode */
		add_shortcode ( "dt_sc_testimonial_carousel", array ( $this, "dt_sc_testimonial_carousel") );

		/* Title Shortcode */
		add_shortcode ( "dt_sc_h1", array ( $this, "dt_sc_main_title") );

		add_shortcode ( "dt_sc_h2", array ( $this, "dt_sc_main_title" ) );

		add_shortcode ( "dt_sc_h3", array ( $this, "dt_sc_main_title" ) );

		add_shortcode ( "dt_sc_h4", array ( $this, "dt_sc_main_title" ) );

		add_shortcode ( "dt_sc_h5", array ( $this, "dt_sc_main_title" ) );

		add_shortcode ( "dt_sc_h6", array ( $this, "dt_sc_main_title" ) );
		/* Title Shortcode End */
		
		/* Bordered Title Shortcode */
		add_shortcode ( "dt_sc_bordered_h1", array ( $this, "dt_sc_bordered_title") );

		add_shortcode ( "dt_sc_bordered_h2", array ( $this, "dt_sc_bordered_title" ) );

		add_shortcode ( "dt_sc_bordered_h3", array ( $this, "dt_sc_bordered_title" ) );

		add_shortcode ( "dt_sc_bordered_h4", array ( $this, "dt_sc_bordered_title" ) );

		add_shortcode ( "dt_sc_bordered_h5", array ( $this, "dt_sc_bordered_title" ) );

		add_shortcode ( "dt_sc_bordered_h6", array ( $this, "dt_sc_bordered_title" ) );
		/* Bordered Title Shortcode End */
		

		/* Toggle Shortcode */
		add_shortcode ( "dt_sc_toggle", array ( $this, "dt_sc_toggle" ) );

		/* Toogle Framed Shortcode */
		add_shortcode ( "dt_sc_toggle_framed", array ( $this, "dt_sc_toggle_framed" ) );
		
		/* Titles Box Shortcode */
		add_shortcode ( "dt_sc_titled_box", array ( $this, "dt_sc_titled_box" ) );
		
		/* Tooltip Shortcode */
		add_shortcode ( "dt_sc_tooltip", array ( $this, "dt_sc_tooltip" ) );
		
		/* PullQuotes Shortcode */
		add_shortcode ( "dt_sc_pullquote", array ( $this, "dt_sc_pullquote" ) );


		/* Full width Shortcode*/
		add_shortcode("dt_sc_fullwidth_section", array ( $this, "dt_sc_fullwidth_section" ) );

		
		/* Twitter */	
		add_shortcode('dt_sc_twitter', array ( $this, "dt_sc_twitter" ));	
		
		/* Social Links */	
		add_shortcode('dt_sc_social_links', array ( $this, "dt_sc_social_links" ));	
		
		
		/* Slider Pattern Shortcode */
		add_shortcode ( "dt_sc_slider_pattern", array ( $this, "dt_sc_slider_pattern" ) );
		
		/* Slider Pattern Shortcode */
		add_shortcode ( "dt_sc_slider_pattern_type2", array ( $this, "dt_sc_slider_pattern_type2" ) );

		/* Slider Video Background Shortcode */
		add_shortcode ( "dt_sc_slider_videobackground", array ( $this, "dt_sc_slider_videobackground" ) );

		/* Slider Parallax Shortcode */
		add_shortcode ( "dt_sc_slider_parallax", array ( $this, "dt_sc_slider_parallax" ) );

		/* Slider Portfolio Shortcode */
		add_shortcode ( "dt_sc_slider_portfolio", array ( $this, "dt_sc_slider_portfolio" ) );

		/* Widget Shortcodes */
		add_shortcode ( "dt_sc_widgets", array ( $this, "dt_sc_widgets" ) );
		
		/* Do Shortcodes */
		add_shortcode ( "dt_sc_doshortcode", array ( $this, "dt_sc_doshortcode" ) );
	
		/* Resizeable Column */
		add_shortcode ( "dt_sc_resizable", array ( $this, "dt_sc_resizable" ) );

		add_shortcode ( "dt_sc_resizable_inner", array ( $this, "dt_sc_resizable" ) );
		
		/* Recent Portfolio Shortcode */
		add_shortcode('dt_sc_recent_portfolio', array ( $this,  "dt_sc_recent_portfolio" ) );
		
		/* NewsLetter Shortcode */
		add_shortcode('dt_sc_news_letter', array ( $this,  "dt_sc_news_letter" ) );
		
	}
	
	/**
	 *
	 * @param string $content        	
	 * @return string
	 */
	function dtShortcodeHelper($content = null) {
		$content = do_shortcode ( shortcode_unautop ( $content ) );
		$content = preg_replace ( '#^<\/p>|^<br \/>|<p>$#', '', $content );
		$content = preg_replace ( '#<br \/>#', '', $content );
		return trim ( $content );
	}
	
	/**
	 *
	 * @param string $dir        	
	 * @return multitype:
	 */
	function dtListImages($dir = null) {
		$images = array ();
		$icon_types = array ( 'jpg','jpeg','gif','png');
		
		if (is_dir ( $dir )) {
			$handle = opendir ( $dir );
			while ( false !== ($dirname = readdir ( $handle )) ) {
				
				if ($dirname != "." && $dirname != "..") {
					$parts = explode ( '.', $dirname );
					$ext = strtolower ( $parts [count ( $parts ) - 1] );
					
					if (in_array ( $ext, $icon_types )) {
						$option = $parts [count ( $parts ) - 2];
						$images [$dirname] = str_replace ( ' ', '', $option );
					}
				}
			}
			closedir ( $handle );
		}
		
		return $images;
	}
	
	
	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_accordion_group($attrs, $content = null) {
		$out = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$out = str_replace ( "<p class='dt-sc-toggle", "<p class='dt-sc-toggle-accordion ", $out );
		$out = "<div class='dt-sc-toggle-frame-set'>{$out}</div>";
		return $out;
	}


	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_button($attrs, $content = null) {
		extract ( shortcode_atts ( array ( 'type' => '', 'icon' => '','size' => '', 'link' => '#', 'target' => '', 'variation' => '', 'bgcolor' => '', 'textcolor' => '', 'class' =>''), $attrs ) );
		
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		
		if( ( ($type == "with-icon") || ($type == "hover-effect-with-icon") )  && !empty($icon)  ){
			$content = "<i class='fa {$icon}'> </i>".$content; 
		}
		
		$size = ($size == 'xlarge') ? ' xlarge' : $size;
		$size = ($size == 'large') ? ' large' : $size;
		$size = ($size == 'medium') ? ' medium' : $size;
		$size = ($size == 'small') ? ' small' : $size;
		
		$target = empty($target) ? 'target="_blank"' : "target='{$target}' ";
		
		$variation = (($variation) && (empty ( $bgcolor ))) ? ' ' . $variation : '';
		
		$styles = array ();
		if ($bgcolor)
			$styles [] = 'background-color:' . $bgcolor . ';border-color:' . $bgcolor . ';';
		if ($textcolor)
			$styles [] = 'color:' . $textcolor . ';';
		$style = join ( '', array_unique ( $styles ) );
		$style = ! empty ( $style ) ? ' style="' . $style . '"' : '';

		$btn_cls = "dt-sc-button {$class} {$size} {$variation}";
		if ($type == "with-icon"){
			$btn_cls .= " with-icon";
		}
		if ($type == "hover-effect-with-icon"){
			$btn_cls .= " with-hover-icon";
		}
		if ($bgcolor != '' ){
			$btn_cls .= " filled";
		}
		
		if(preg_match('#^{{#', $link) === 1) {
			$link =  str_replace ( '{{', '[', $link );
			$link =  str_replace ( '}}', '/]', $link );
			$link = do_shortcode($link);
		}else{
			$link = esc_url ( $link );
		}		
		
		
		$out = "<a href='{$link}' {$target} class='{$btn_cls}' {$style}>{$content}</a>";
		return $out;
	}

	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_blockquote($attrs, $content = null) {
		extract ( shortcode_atts ( array ( 'type' => "type1", 'align' => '',  'cite'=> ''), $attrs ) );
		
		if( preg_match( '/left|right|center/', trim( $align ) ) )
			$class[] = ' align' . $align;
		
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$content = ! empty ( $content ) ? "<q>{$content}</q>" : "";
		
		if($type == 'type2'){
			$cite = ! empty ( $cite ) ? '&ndash; ' .$cite. '&ndash; ' : "";
		}else{
			$cite = ! empty ( $cite ) ? '&ndash; ' .$cite : "";
		}

		$cite = !empty( $cite ) ? "<cite>$cite</cite>" : "";
		
		$class = ( empty($class)) ? "" : join( '', array_unique( $class ) );

		$out = "<blockquote class='{$type} {$class}' >{$content}{$cite}</blockquote>";
		return $out;
	}

	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_callout_box($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'type' => "type1",
				'link' => '#',
				'button_text'=> __('Purchase Now','dt_themes'),
				'class' => '',
				'target' => ''
		), $attrs ) );

		$attribute = " class='dt-sc-callout-box {$type} {$class}' ";
		
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		
		$out = "<div {$attribute}>";
		$out .= ( !empty( $title ) ) ? "<h2>{$title}</h2>" : "";

			$out .= ( $type == "type3" || $type == "type4" ) ? '<div class="column dt-sc-four-fifth first">' : '';
			$out .= $content;
			$out .= ( $type == "type3" || $type == "type4" ) ? '</div>' : '';
			$out .= ( $type == "type3" || $type == "type4" ) ? '<div class="column dt-sc-one-fifth">' : '';
			  if( $type == "type5" ) {
				  $out .= ( !empty($link) ) ? "<a href='{$link}' class='dt-sc-button small filled gray' target='{$target}'>{$button_text}</a>" : "";
			  }else{			
				  $out .= ( !empty($link) ) ? "<a href='{$link}' class='dt-sc-button small ' target='{$target}'>{$button_text}</a>" : "";
			  }
			$out .= ( $type == "type3" || $type == "type4" ) ? '</div>' : '';
		$out .= "</div>";
		
		return $out;
	}
	
	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_callout_box_with_icon($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'type' => "type1",
				'icon' => '',
				'icon2' => '',
				'link' => '#',
				'button_text'=> __('Purchase Now','dt_themes'),
				'class' => '',
				'target' => ''
		), $attrs ) );

		$attribute = " class='dt-sc-callout-box  with-icon {$type} {$class}' ";
		
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		
		$out = "<div {$attribute}>";
		$out .= ( !empty( $title ) ) ? "<h2>{$title}</h2>" : "";
		
			$out .= ( $type == "type2" || $type == "type3" || $type == "type4" ) ? '<div class="column dt-sc-four-fifth first">' : '';
			$out .= ( $type == "type5" ) ? '<div class="column dt-sc-one-fifth first">' : '';
			$out .= '	<div class="icon">';
			$out .= '		<span class="fa '.$icon.'"></span>';
			$out .= '	</div>';
			$out .= ( $type == "type5" ) ? '</div> <div class="column dt-sc-three-fifth">' : '';
			$out .= $content;
			$out .= ( $type == "type2" || $type == "type3" || $type == "type4"  ) ? '</div> <div class="column dt-sc-one-fifth">' : '';
			
				$out .= ( !empty($link) ) ? "<a href='{$link}' class='dt-sc-button small ' target='{$target}'>{$button_text}</a>" : "";
			
			$out .= ( $type == "type5" ) ? '</div>' : '';
			$out .= ( $type == "type2" || $type == "type3" || $type == "type4"  ) ? '</div>' : '';	
			if ( $type == "type5" && $icon2 !='' ) {
				$out .= '<div class="column dt-sc-one-fifth">';
				$out .= '	<div class="icon">';
				$out .= '		<span class="fa '.$icon2.'"></span>';
				$out .= '	</div>';
				$out .= '</div>';
			}
		$out .= "</div>";
		
		return $out;
	}
	
	# Counter
	function dt_sc_counter( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'image' => '',
			'title' => 'Employees',
			'number' => 2000,
		), $atts));

		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		
		$out = '<div class="dt-sc-services"> <img title="" alt="" src='.$image.' height="67" width="49">
					<h2 class="dt-sc-num-count" data-value='.$number.'>'.$number.'</h2>
					<p> '.$title.' </p>
				</div>';
		
		return $out;
	}

	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @param string $shortcodename        	
	 * @return string
	 */
	function dt_sc_columns($attrs, $content = null, $shortcodename = "") {
		extract ( shortcode_atts ( array ( 'id' => '', 'class' => '', 'style' => '' , 'type' => '', 'animation' => '', 'animation_delay' => '100' ), $attrs ) );
		
		$shortcodename = str_replace ( "_", "-", $shortcodename );
		$shortcodename = str_replace ( "-inner", "", $shortcodename );
		
		$danimation = !empty( $animation ) ? " data-animation='{$animation}' ": "";
		$ddelay = (!empty( $animation ) && !empty( $animation_delay )) ? " data-delay='{$animation_delay}' " : "";
		$danimate = !empty( $animation ) ? "animate": "";
		
		
		$id = ($id != '') ? " id = '{$id}'" : '';
		$style = !empty( $style ) ? " style='{$style}' ": "";
		$type = ( trim($type) === 'type2' ) ? "no-space" : "";
		$first = (isset ( $attrs [0] ) && trim ( $attrs [0] == 'first' )) ? 'first' : '';
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$out = "<div {$id} class='column {$shortcodename} {$class} {$type} {$danimate} {$first}' {$danimation} {$ddelay} {$style} >{$content}</div>";
		return $out;
	}

	/* Contact Information */
	
	/**
	 * Shortcode : Address
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_address($attrs, $content = null) {
		extract ( shortcode_atts ( array ( 'icon' =>'', 'address_text' =>'', 'address_details' => ''), $attrs ) );
				
		$out = '<div class="dt-sc-contact-details">';
		$out .= ' <span class="ico"> <i class="fa fa-'.$icon.'"></i> </span>';
		$out .= ' <div> </div>';
		$out .=  $address_text;
		$out .= ( !empty($address_details) ) ? $address_details : '';
		$out .= '</div>';
		
		return $out;
	}

	/**
	 * Shortcode : Phone
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_phone($attrs, $content = null) {
		extract ( shortcode_atts ( array ( 'icon' => '', 'phone_text' =>'', 'phone' => ''), $attrs ) );
		
		$out = '<div class="dt-sc-contact-details">';
		$out .= ' <span class="ico"> <i class="fa fa-'.$icon.'"></i> </span>';
		$out .= ' <div> </div>';
		$out .= 	$phone_text;
		$out .= 	$phone;
		$out .= '</div>';
		
		return $out;
	}
	 

	/**
	 * Shortcode : Fax
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_fax($attrs, $content = null) {
		extract ( shortcode_atts ( array ( 'icon' => '', 'fax_text' =>'', 'fax' => ''), $attrs ) );

		$out = '<div class="dt-sc-contact-details">';
		$out .= ' <span class="ico"> <i class="fa fa-'.$icon.'"></i> </span>';
		$out .= ' <div> </div>';
		$out .= 	$fax_text;
		$out .= 	$fax;
		$out .= '</div>';
		
		return $out;
	}

	/**
	 * Shortcode : Email id
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_email($attrs, $content = null) {
		extract ( shortcode_atts ( array ( 'icon' => '', 'email_text' =>'', 'emailid' => ''), $attrs ) );

		$out = '<div class="dt-sc-contact-details">';
		$out .= ' <span class="ico"> <i class="fa fa-'.$icon.'"></i> </span>';
		$out .= ' <div> </div>';
		$out .= 	$email_text;
		$out .= 	'<a href="mailto:'.$emailid.'">'.$emailid.'</a>';
		$out .= '</div>';
		
		return $out;
	}

	/**
	 * Shortcode : Website Url
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_web($attrs, $content = null) {
		extract ( shortcode_atts ( array ( 'icon' => '', 'web_text'=> '', 'url' => ''), $attrs ) );
		
		$out = '<div class="dt-sc-contact-details">';
		$out .= ' <span class="ico"> <i class="fa fa-'.$icon.'"></i> </span>';
		$out .= ' <div> </div>';
		$out .= $web_text;
		$out .= '<a target="_blank" href="'.$url.'">';
		$a = preg_replace('#^[^:/.]*[:/]+#i', '',urldecode( $url ));
		$out .=	preg_replace('!\bwww3?\..*?\b!', '', $a);
		$out .= '</a></div>';
		
		return $out;
	}
	/* Contact Information End*/

	/* Client Carousel */
	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_clients_carousel($attrs, $content = null) {
		extract ( shortcode_atts ( array ( 'data_animation_delay' => '100','data_animation' => '' ), $attrs ) );
		
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		
		$data_animation_class = ( !empty($data_animation) && $data_animation !='None' ) ? "animate" : " ";
		$data_animation_delay = ( !empty($data_animation) && !empty($data_animation_delay) && $data_animation !='None' ) ? "data-delay='{$data_animation_delay}'" : " ";
		$data_animation = (!empty($data_animation)) ? "data-animation='{$data_animation}'" : " ";
		
		if(is_rtl()) $dt_attr = 'dir="rtl"'; else $dt_attr = '';
		$content = str_replace( '<ul>', "<ul class='dt-sc-partner-carousel ".$dt_attr." '>", $content );
		
		$out = '<div class="dt-sc-partner-carousel-wrapper '.$data_animation_class.' " '.$data_animation.' '.$data_animation_delay.'>
						'.$content.'
				</div>';
						
		return $out;
	}

	/* Client Carousel End */
	
	/* Dividers */
	
	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_clear($attrs, $content = null) {
		return '<div class="dt-sc-clear"></div>';
	}

	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_hr_border($attrs, $content = null) {
		return '<div class="dt-sc-hr-border"></div>';
	}


	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @param string $shortcodename        	
	 * @return string
	 */
	function dt_sc_donutchart($attrs, $content = null, $shortcodename = "") {
		extract ( shortcode_atts ( array ( 'title' => '', 'bgcolor' => '', 'fgcolor' => '', 'percent' =>'30' ), $attrs ) );
		
		$size = "160";
		$size = ( "dt_sc_donutchart_medium" === $shortcodename ) ? "200" : $size;
		$size = ( "dt_sc_donutchart_large" === $shortcodename ) ? "240" : $size;
		
		$shortcodename = str_replace ( "_", "-", $shortcodename );
		$out = '<div class="progress-bar-wrapper">';
		$out .= ( empty($title) ) ? "" : "<div class='progress-bar-content' style='color:$fgcolor'> <h6> {$title} </h6> </div>";

		$out .= "<div class='donutchart' data-size='{$size}' data-percent='{$percent}' data-bgcolor='{$bgcolor}' data-fgcolor='$fgcolor'></div>";
		$out .= '</div>';
		return $out;
	}

	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @param string $shortcodename        	
	 * @return string
	 */
	function dt_sc_dividers($attrs, $content = null, $shortcodename = "") {
		extract ( shortcode_atts ( array ( 'class' => '', 'top' => '' ), $attrs ) );
		
		if ("dt_sc_hr" === $shortcodename) {
			
			$shortcodename = str_replace ( "_", "-", $shortcodename );
			
			$out = "<div class='{$shortcodename} {$class}'>";
			
			if ((isset ( $attrs [0] ) && trim ( $attrs [0] == 'top' ))) {
				
				$out = "<div class='{$shortcodename} top {$class}'>";
				$out .= "<a href='#top' class='scrollTop'><span class='fa fa-angle-up'></span>" . __ ( "top", 'dt_themes' ) . "</a>";
			}
			
			$out .= "</div>";
		} else {
			$shortcodename = str_replace ( "_", "-", $shortcodename );
			$out = "<div class='{$shortcodename}  {$class}'></div>";
		}
		return $out;
	}
	/* Dividers End*/
	
	/* Icon Boxes Shortcode */
	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @param string $shortcodename        	
	 * @return string
	 */
	function dt_sc_icon_box($attrs, $content = null, $shortcodename = "") {
		extract ( shortcode_atts ( array ( 'type' => 'type1', 'fontawesome_icon' => '', 'title' => '', 'link' => '#'), $attrs ) );
		
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		
			$out = '<div class="dt-sc-ico-content  '.$type.'">
						<div class="icon">
							<span class="fa fa-'.$fontawesome_icon.'"></span>
						</div>
						<h4><a href="'.$link.'">'.$title.'</a></h4>
						'.$content.'
					</div>';
		
			return $out;
	}
	/* Icon Boxes Shortcode End*/
	
	
	/* Icon Boxes carousel Shortcode */
	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @param string $shortcodename        	
	 * @return string
	 */
	function dt_sc_icon_box_carousel($attrs, $content = null) {
		extract ( shortcode_atts ( array ( 'data_animation_delay' => '', 'data_animation' => '' ), $attrs ) );

		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		
		$data_animation_class = ( !empty($data_animation) && $data_animation !='None' ) ? "animate" : " ";
		$data_animation_delay = ( !empty($data_animation) && !empty($data_animation_delay) && $data_animation !='None' ) ? "data-delay='{$data_animation_delay}'" : " ";
		$data_animation = (!empty($data_animation)) ? "data-animation='{$data_animation}'" : " ";
		
		$out = '<div class="dt-sc-service-carousel-wrapper">';
		$out .= '<div class="dt-sc-service-carousel '.$data_animation_class.'" '.$data_animation.' '.$data_animation_delay.'>';
		$out .= $content;
		$out .= '</div>';
		$out .= '<div id="carouselnav">';
		$out .= '	<a href="#" class="carouselnav-pager dt-sc-tooltip-top"> <span></span> </a>';
		$out .= '</div>';
		$out .= '</div>';

		return $out;
	}
	/* Icon Boxes Shortcode End*/
	

	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_code($attrs, $content = null) {
		$array = array ( '[' => '&#91;', ']' => '&#93;', '/' => '&#47;', '<' => '&#60;', '>' => '&#62;', '<br />' => '&nbsp;');
		$content = strtr ( $content, $array );
		$out = "<pre>{$content}</pre>";
		return $out;
	}

	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return mixed
	 */
	function dt_sc_fancy_ol($attrs, $content = null) {
		extract ( shortcode_atts ( array ( 'style' => '', 'variation' => '', 'class' => '' ), $attrs ) );
		
		$style = ($style) ? trim ( $style ) : 'decimal';
		$class = ($class) ? trim ( $class ) : '';
		$variation = ($variation) ? ' ' . trim ( $variation ) : '';
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$content = str_replace ( '<ol>', "<ol class='dt-sc-fancy-list {$variation} {$class} {$style}'>", $content );
		$content = str_replace ( '<li>', '<li><span>', $content );
		$content = str_replace ( '</li>', '</span></li>', $content );
		return $content;
	}
	
	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return mixed
	 */
	function dt_sc_fancy_ul($attrs, $content = null) {
		extract ( shortcode_atts ( array ( 'style' => '', 'variation' => '', 'class' => ''), $attrs ) );
		$style = ($style) ? trim ( $style ) : 'decimal';
		$class = ($class) ? trim ( $class ) : '';
		$variation = ($variation) ? ' ' . trim ( $variation ) : '';
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$content = str_replace ( '<ul>', "<ul class='dt-sc-fancy-list {$variation} {$class} {$style}'>", $content );
		return $content;
	}

	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_pricing_table($attrs, $content = null) {
		extract ( shortcode_atts ( array ( 'type' => 'type1' ), $attrs ) );
		
		$type = ( trim($type) === 'type1' ) ? "space" : "no-space";
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		
		return "<div class='dt-sc-pricing-table {$type}'>" . $content . '</div>';
	}

	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_pricing_table_item($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'heading' => __ ( "Heading", 'dt_themes' ),
				'per' => 'month',
				'price' => '',
				"button_link" => "#",
				"button_text" => __ ( "Buy Now", 'dt_themes' ),
				"button_size" => "small",
				'class' => '',
				'button_icon' => ''
		), $attrs ) );
		
		$selected = (isset ( $attrs [0] ) && trim ( $attrs [0] == 'selected' )) ? 'selected' : '';
		
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$content = str_replace ( '<ul>', '<ul class="dt-sc-tb-content">', $content );
		$content = str_replace ( '<ol>', '<ul class="dt-sc-tb-content">', $content );
		$content = str_replace ( '</ol>', '</ul>', $content );
		$price = ! empty ( $price ) ? "<div class='dt-sc-price'> <p> $price <span> /$per</span> </p> </div>" : "";
		
		$out = "<div class='dt-sc-pr-tb-col $selected $class'>";
		$out .= '	<div class="dt-sc-tb-header">';
		$out .= '		<div class="dt-sc-tb-title">';
		$out .= "			<h5>$heading</h5>";
		$out .= '		</div>';
		$out .= $price;
		$out .= '	</div>';
		$out .= $content;
		$out .= '<div class="dt-sc-buy-now">';
		$out .= do_shortcode ( "[dt_sc_button size='$button_size' link='$button_link']" . $button_text . '<i class="fa fa-'.$button_icon.'"></i>' . "[/dt_sc_button]" );
		$out .= '</div>';
		$out .= '</div>';
		return $out;
	}

	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_progressbar($attrs, $content = null) {
		extract ( shortcode_atts ( array ( 'type' => 'type1','value' => '55'), $attrs ) );
		
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$content = $content;
		$out = "<div class='dt-sc-our-progress {$type}'>";
		$out .= "  <div class='dt-sc-specials'>{$content}</div>";
		$out .= "  <div class='dt-sc-progress-bar' data-perc='".$value."'>";
		$out .= "     <div class='dt-sc-bar'></div>";
		$out .= "	  <div class='dt-sc-label'>";
		$out .= "		<span></span>";
		$out .= "		<div class='dt-sc-perc'>".$value.'%'."</div>";
		$out .= "	  </div>";
		$out .= '  </div>';
		$out .= '</div>';
		return $out;
	}
	
	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_tab($attrs, $content = null) {
		extract ( shortcode_atts ( array ( 'title' => '','font_awesome_icon' => 'fa-pencil' ), $attrs ) );
		$out = '<li class="tab_head"><a href="#"><i class="fa fa-'.$font_awesome_icon.'"></i>' . $title . '</a></li><div class="tabs_content">' . DTCoreShortcodesDefination::dtShortcodeHelper ( $content ) . '</div>';
		return $out;
	}
	
	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_tabs_horizontal($attrs, $content = null) {
		extract ( shortcode_atts ( array ( 'data_animation_delay' => '100', 'data_animation' => ''), $attrs ) );
		preg_match_all("/(.?)\[(dt_sc_tab)\b(.*?)(?:(\/))?\](?:(.+?)\[\/dt_sc_tab\])?(.?)/s", $content, $matches);

		$data_animation_class = ( !empty($data_animation) && $data_animation !='None' ) ? "animate" : " ";
		$data_animation_delay = ( !empty($data_animation) && !empty($data_animation_delay) && $data_animation !='None' ) ? "data-delay='{$data_animation_delay}'" : " ";
		$data_animation = (!empty($data_animation)) ? "data-animation='{$data_animation}'" : " ";
		
		for($i = 0; $i < count($matches[0]); $i++) {
			$matches[3][$i] = shortcode_parse_atts( $matches[3][$i] );
		}
			
		$out = '<ul class="dt-sc-tabs-frame">';
			for($i = 0; $i < count($matches[0]); $i++) {
				$out .= '<li><a href="#"> <i class="fa '.$matches[3][$i]['font_awesome_icon'].'"></i>' . $matches[3][$i]['title'] . '</a></li>';
			}
		$out .= '</ul>';

		for($i = 0; $i < count($matches[0]); $i++) {
			$out .= '<div class="dt-sc-tabs-frame-content"> <i class="fa '.$matches[3][$i]['font_awesome_icon'].'"></i>'. DTCoreShortcodesDefination::dtShortcodeHelper($matches[5][$i]).'</div>';
		}		
	return "<div class='dt-sc-tabs-container {$data_animation_class}' {$data_animation} {$data_animation_delay}'>$out</div>";
	}

	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_tabs_vertical($attrs, $content = null) {
		extract ( shortcode_atts ( array ( 'data_animation_delay' => '100', 'data_animation' => ''), $attrs ) );
		preg_match_all("/(.?)\[(dt_sc_tab)\b(.*?)(?:(\/))?\](?:(.+?)\[\/dt_sc_tab\])?(.?)/s", $content, $matches);
		
		$data_animation_class = ( !empty($data_animation) && $data_animation !='None' ) ? "animate" : " ";
		$data_animation_delay = ( !empty($data_animation) && !empty($data_animation_delay) && $data_animation !='None' ) ? "data-delay='{$data_animation_delay}'" : " ";
		$data_animation = (!empty($data_animation)) ? "data-animation='{$data_animation}'" : " ";
		
		for($i = 0; $i < count($matches[0]); $i++) {
			$matches[3][$i] = shortcode_parse_atts( $matches[3][$i] );
		}
		$out = "<ul class='dt-sc-tabs-vertical-frame column no-space'>";
		for($i = 0; $i < count($matches[0]); $i++) {
				$out .= '<li><a href="#">';
				if(!empty($matches[3][$i]['font_awesome_icon'])){
					$out .=   '<i class="fa '.$matches[3][$i]['font_awesome_icon'].'"></i>';
				}
				$out .= $matches[3][$i]['title'] . '<span></span></a></li>';
		}
		$out .= "</ul>";

		for($i = 0; $i < count($matches[0]); $i++) {
			$out .= '<div class="dt-sc-tabs-vertical-frame-content">';
			if(!empty($matches[3][$i]['font_awesome_icon'])){
				$out .= '<i class="fa '.$matches[3][$i]['font_awesome_icon'].'"></i>';
			}
			$out .= DTCoreShortcodesDefination::dtShortcodeHelper($matches[5][$i]) . '</div>';
		}		
		return "<div class='dt-sc-tabs-vertical-container {$data_animation_class}' {$data_animation} {$data_animation_delay}>$out</div>";		
	}

	/**
	 *
	 * @param unknown $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_team($attrs, $content = null) {
		$attributes = array (
				'name' => '',
				'image' => 'http://placehold.it/220',
				'role' => '',
		);
		
		$sociables =  array('fa-delicious' => 'delicious', 'fa-deviantart' => 'deviantart', 'fa-digg' => 'digg', 'fa-flickr' => 'flickr', 'fa-facebook' => 'facebook', 'fa-twitter' => 'twitter', 'fa-weibo' => 'weibo', 'fa-youtube' => 'youtube', 'fa-google-plus' => 'googleplus', 'fa-google' => 'google', 'fa-pinterest' => 'pinterest', 'fa-reddit' => 'reddit', 'fa-yahoo' => 'yahoo', 'fa-vimeo-square' => 'vimeosquare', 'fa-stumbleupon' => 'stumbleupon', 'fa-dribbble' => 'dribbble', 'fa-linkedin' => 'linkedin', 'fa-skype' => 'skype', 'fa-tumblr' => 'tumblr','fa-instagram' => 'instagram');
		foreach ( $sociables as $sociable ) {
			$attributes [$sociable] = '';
		}

		extract ( shortcode_atts ( $attributes, $attrs ) );

		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		
		$name = empty ( $name ) ? "" : "<h4>{$name}</h4>";
		$role = empty ( $role ) ? "" : "<span>{$role}</span>";
		
		$s = "";
		foreach ( $sociables as $sociable_key => $sociable ) {
			$s .= empty ( $$sociable ) ? '' : '<li><a href="'.$$sociable.'" target="_blank" class="dt-sc-tooltip-bottom" title="'.$sociable.'"><i class="fa '.$sociable_key.'"></i></a></li>';
		}
		
		$s = ! empty ( $s ) ? "<ul class='dt-sc-social-icons'>$s</ul>" : "";

		$out = '<div class="dt-sc-team type2">
					
					<figure>
						 <img alt="team-image" title="team-image" src='.$image.'> 
						 
						<figcaption>
							'.$content.$name.$role.$s.'
						</figcaption>
					</figure>'; 
					
		$out .= '</div>';	

		return $out;
	}
	
	
	
		/**
	 *
	 * @param unknown $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_team_type2($attrs, $content = null) {
		$attributes = array (
				'name' => '',
				'image' => 'http://placehold.it/220',
				'role' => '',
		);

		
		$sociables =  array('fa-delicious' => 'delicious', 'fa-deviantart' => 'deviantart', 'fa-digg' => 'digg', 'fa-flickr' => 'flickr', 'fa-facebook' => 'facebook', 'fa-twitter' => 'twitter', 'fa-weibo' => 'weibo', 'fa-youtube' => 'youtube', 'fa-google-plus' => 'googleplus', 'fa-google' => 'google', 'fa-pinterest' => 'pinterest', 'fa-reddit' => 'reddit', 'fa-yahoo' => 'yahoo', 'fa-vimeo-square' => 'vimeosquare', 'fa-stumbleupon' => 'stumbleupon', 'fa-dribbble' => 'dribbble', 'fa-linkedin' => 'linkedin', 'fa-skype' => 'skype', 'fa-tumblr' => 'tumblr','fa-instagram' => 'instagram');
		foreach ( $sociables as $sociable ) {
			$attributes [$sociable] = '';
		}
		
		extract ( shortcode_atts ( $attributes, $attrs ) );

		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		

		$name = empty ( $name ) ? "" : "<h4>{$name}</h4>";
		$role = empty ( $role ) ? "" : "<span>{$role}</span>";
		
		$s = "";
		foreach ( $sociables as $sociable_key => $sociable ) {
			$s .= empty ( $$sociable ) ? '' : '<li><a href="'.$$sociable.'" target="_blank" class="dt-sc-tooltip-bottom" title="'.$sociable.'"><i class="fa '.$sociable_key.'"></i></a></li>';
		}
		
		$s = ! empty ( $s ) ? "<ul class='dt-sc-social-icons'>$s</ul>" : "";

		$out = '<div class="dt-sc-team">
					
					<figure class="dt-sc-entry-thumb">
						 <a href="#"> <img alt="team-image" title="team-image" src='.$image.'> </a>
						 <div class="dt-sc-team-cmt"><p> '.$content.'</p> </div>
						<figcaption>
							'.$name.$role.'
						</figcaption>
					</figure>
					'.$s; 
					
		$out .= '</div>';	

		return $out;
	}


	/**
	 *
	 * @param unknown $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_team_carousel($attrs, $content = null) {
		extract ( shortcode_atts ( array ( 'custom_class' => '','data_animation_delay' => '100', 'data_animation' => ''), $attrs ) );

		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		
		$data_animation_class = ( !empty($data_animation) && $data_animation !='None' ) ? "animate" : " ";
		$data_animation_delay = ( !empty($data_animation) && !empty($data_animation_delay) && $data_animation !='None' ) ? "data-delay='{$data_animation_delay}'" : " ";
		$data_animation = (!empty($data_animation)) ? "data-animation='{$data_animation}'" : " ";
		
		$out = '<div class="dt-sc-team-carousel-wrapper '.$custom_class.'">';
		$out .= '<div class="dt-sc-team-carousel '.$data_animation_class.'" '.$data_animation.' '.$data_animation_delay.' >';
		$out .= $content;
		$out .= '</div>';
		$out .= '<div class="carousel-arrows">';
		$out .= '	<a href="" class="carousel-prev"> <i class="fa fa-angle-left"> </i> </a>';
		$out .= '	<a href="" class="carousel-next"> <i class="fa fa-angle-right"> </i> </a>';
		$out .= '</div>';
		$out .= '</div>';

		return $out;
	}

	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_testimonial($attrs, $content = null) {
		extract ( shortcode_atts ( array ( 'type' => 'type1', 'cite' => '', 'role' => '', 'image' => 'http://placehold.it/100'), $attrs ) );
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$content = strip_tags($content);
		
			
			$out = '	<div class="author">
							<img title="" alt="" src='.$image.'>
						</div>
						<blockquote><q>'.$content.'</q></blockquote>';
						if($cite !='' || $role !='' ){
							$out .= '<p>';
						}
						if($cite !=''){
							$out .= '<cite>'.$cite.'</cite>';
						}if($role !=''){
							$out .= '<br>'.$role;
						}
						if($cite !='' || $role !='' ){
							$out .= '</p>';
						}

			return $out;
	}
	
	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_testimonial_carousel($attrs, $content = null) {
		extract ( shortcode_atts ( array ( 'data_animation_delay' => '100', 'data_animation' => '' ), $attrs ) );
		
		$data_animation_class = ( !empty($data_animation) && $data_animation !='None' ) ? "animate" : " ";
		$data_animation_delay = ( !empty($data_animation) && !empty($data_animation_delay) && $data_animation !='None' ) ? "data-delay='{$data_animation_delay}'" : " ";
		$data_animation = (!empty($data_animation)) ? "data-animation='{$data_animation}'" : " ";
		
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$content = str_replace( '<ul>', "<ul class='dt-sc-testimonial-carousel'>", $content );
		$content = str_replace( '<li>', "<li class='dt-sc-testimonial'>", $content );
		
		$out = '<div class="dt-sc-testimonial-carousel-wrapper '.$data_animation_class.' " '.$data_animation.' '.$data_animation_delay.'>';
		$out .= $content;
		$out .=    '<div id="pager">
						<a href="#"><span></span></a>
					</div></div>
				';
		
		return $out;
	}

	function dt_sc_main_title( $attrs,$content = null , $shortcodename = "" ){
		extract ( shortcode_atts ( array ( 'class' => '', 'text' => '', 'data_animation_delay' => '100', 'data_animation' => '' ), $attrs ) );

		$shortcodename = str_replace ( "dt_sc_", "", $shortcodename );
		
		
		$data_animation_class = ( !empty($data_animation) && $data_animation !='None' ) ? "animate" : " ";
		$data_animation_delay = ( !empty($data_animation) && !empty($data_animation_delay) && $data_animation !='None' ) ? "data-delay='{$data_animation_delay}'" : " ";
		$data_animation = (!empty($data_animation)) ? "data-animation='{$data_animation}'" : " ";
		
		$out = '<div class="main-title"> <div class="container">
					<'.$shortcodename.' class="'.$class.' '.$data_animation_class.'"  '.$data_animation.'  '.$data_animation_delay.' >'
						.$text;
						$out .= '
					</'.$shortcodename.'>
				</div> </div>';
				
		return $out;	
	}
	
	function dt_sc_bordered_title( $attrs,$content = null , $shortcodename = "" ){
		extract ( shortcode_atts ( array ( 'class' => '', 'text' => '' ), $attrs ) );

		$shortcodename = str_replace ( "dt_sc_", "", $shortcodename );
		
		$tag = explode("_",$shortcodename);
		$tag = $tag[1];
		
		
			$out = '<div class="border-title '.$class.'">
						<'.$tag.' class="'.$class.'">'
							.$text;
							$out .= '
						</'.$tag.'>
					</div>';
				
		return $out;	
	}

	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_toggle($attrs, $content = null) {
		extract ( shortcode_atts ( array ( 'title' => '' ), $attrs ) );
		
		$out = "<p class='dt-sc-toggle'><a href='#'>{$title}</a></p>";
		$out .= '<div class="dt-sc-toggle-content" style="display: none;">';
		$out .= '<div class="block"><p>';
		$out .= DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$out .= '</p></div>';
		$out .= '</div>';
		return $out;
	}

	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_toggle_framed($attrs, $content = null) {
		extract ( shortcode_atts ( array ( 'title' => '' ), $attrs ) );
		
		$out = '<div class="dt-sc-toggle-frame">';
		$out .= "	<p class='dt-sc-toggle'><a href='#'>{$title}</a></p>";
		$out .= '	<div class="dt-sc-toggle-content" style="display: none;">';
		$out .= '		<div class="block"><p>';
		$out .= DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$out .= '		</p></div>';
		$out .= '	</div>';
		$out .= '</div>';
		return $out;
	}

	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_titled_box($attrs, $content = null) {
		extract ( shortcode_atts ( array ( 'title' => '', 'icon' => '', 'type'	=> '', 'variation' => ''), $attrs ) );
		
		$type = (empty($type)) ? 'dt-sc-titled-box' :"dt-sc-$type";
		$variation = ( empty( $variation ) ) ? ' ' : $variation ;
		$content = DTCoreShortcodesDefination::dtShortcodeHelper( $content );
		
		$styles = array();
		$style = join('', array_unique( $styles ) );
		$style = !empty( $style ) ? ' style="' . $style . '"': '' ;
		
		if($type == 'dt-sc-titled-box') :
			$icon = ( empty($icon) ) ? "" : "<span class='fa {$icon} '></span>";
			$title = "<h6 class='{$type}-title' {$style}> {$icon} {$title}</h6>";
			$out = "<div class='{$type} {$variation}'>";
			$out .= $title;
			$out .=	"<div class='{$type}-content'><p>{$content}</p></div>";
			$out .= "</div>";
		else :
			$title = "<h4> {$title} </h4>";
			$out = "<div class='{$type} aligncenter'> {$title} {$content}</div>";
		endif;
		return $out;
	}

	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_tooltip($attrs, $content = null) {
		extract ( shortcode_atts ( array ( 'tooltip' => '', 'position' => 'top', 'href' => '', 'target' => '' ), $attrs ) );
		
		$class  = " class=' ";
		$class .= "dt-sc-button small dt-sc-tooltip-{$position}'";
		
		$href = " href='{$href}' ";
		$title = " title = '{$tooltip}' ";
		$target = empty($target) ? 'target="_blank"' : "target='{$target}' ";
		
		$content = DTCoreShortcodesDefination::dtShortcodeHelper( $content );
		$out = "<a {$href} {$title} {$class}  {$target}>{$content}</a>";
		return $out;
	}

	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_pullquote($attrs, $content = null) {
		extract ( shortcode_atts ( array ( 'type' => 'pullquote1', 'align' => '' ), $attrs ) );
		
		$class = array();
		if( isset($type) )
			$class[] = " dt-sc-{$type}";
			

		if( preg_match( '/left|right|center/', trim( $align ) ) )
			$class[] = ' align' . $align;
			
		$class = join( '', array_unique( $class ) );
		
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$out = "<span class='{$class} quotes' > {$content} </span>";
		
		return $out;
	}


	function dt_sc_fullwidth_section($attrs, $content = null) {
		extract ( shortcode_atts ( array ( 'backgroundcolor' => '', 'backgroundimage' => '', 'backgroundrepeat' => '', 'backgroundposition' => '', 'paddingtop' => '', 'paddingbottom' => '', 'textcolor' =>'', 'opacity' => '', 'class' =>'', 'parallax' => 'no', 'disable_container' => 'no' ), $attrs ) );

		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );

		$styles = array ();
		$styles[] = !empty( $textcolor ) ? "color:{$textcolor};" : "";
		if( !empty( $opacity ) ) {
			$hex = str_replace ( "#", "", $backgroundcolor );
			if (strlen ( $hex ) == 3) :
				$r = hexdec ( substr ( $hex, 0, 1 ) . substr ( $hex, 0, 1 ) );
				$g = hexdec ( substr ( $hex, 1, 1 ) . substr ( $hex, 1, 1 ) );
				$b = hexdec ( substr ( $hex, 2, 1 ) . substr ( $hex, 2, 1 ) );
			else :
				$r = hexdec ( substr ( $hex, 0, 2 ) );
				$g = hexdec ( substr ( $hex, 2, 2 ) );
				$b = hexdec ( substr ( $hex, 4, 2 ) );
			endif;
			$rgb = array ( $r,$g,$b);
			$styles[] = "background-color:rgba($rgb[0],$rgb[1],$rgb[2],$opacity); ";
		} else {
			$styles[] = !empty( $backgroundcolor ) ? "background-color:{$backgroundcolor};" : "";
		}	

		$styles[] = !empty( $backgroundimage ) ? "background-image:url({$backgroundimage});" : "";
		$styles[] = !empty( $backgroundrepeat ) ? "background-repeat:{$backgroundrepeat};" : "";
		$styles[] = !empty( $backgroundposition ) ? "background-position:{$backgroundposition};" : "";
		$styles[] = !empty( $paddingtop ) ? "padding-top:{$paddingtop}px;" : "";
		$styles[] = !empty( $paddingbottom ) ? "padding-bottom:{$paddingbottom}px;" : "";

		$parallaxclass = '';
		if( $parallax === "yes") {
			$styles[] = "background-attachment:fixed; ";
			$parallaxclass = "dt-sc-parallax-section";
		}

		$styles = array_filter( $styles);
		$style = join ( '', array_unique ( $styles ) );
		$style = ! empty ( $style ) ? ' style="' . $style . '"' : '';
		
		$out = 	"<div class='fullwidth-section {$class} {$parallaxclass}' {$style}>";
		if($disable_container != 'yes') {
			$out .=	'	<div class="container">';
		}
		$out .= 	$content;
		if($disable_container != 'yes') {
			$out .= '	</div>';
		}
		$out .= '</div>';
		return $out;
	}

	function dt_sc_widgets($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'widget_name' => '',
				'widget_wpname' => '',
				'widget_wpid' => ''
		), $attrs ) );
		
		if($widget_name != ''):	
			
			foreach($attrs as $key=>$value):
				$instance[$key] = $value;			
			endforeach;
			
			$instance = array_filter($instance);
			
			if(($widget_name == 'TribeEventsAdvancedListWidget' || $widget_name == 'TribeEventsMiniCalendarWidget') && isset($instance['selector'])) {
				$instance['filters'] = '{"tribe_events_cat":["'.$instance['selector'].'"]}';
			}
			
			if(substr($widget_name, 0, 2) == 'WC') $add_cls = 'woocommerce';
			else $add_cls = '';
			
			ob_start();
			the_widget($widget_name, $instance, 'before_widget=<aside id="'.$widget_wpid.'" class="widget '.$add_cls.' '.$widget_wpname.'">&after_widget=</aside>&before_title=<h3 class="widgettitle">&after_title=<span></span></h3>');
			$output = ob_get_contents();
			ob_end_clean();
			
			return $output;
							
		endif;

	}

	function dt_sc_doshortcode($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'width' => '100',
				'animation' => '',
				'animation_delay' => ''
		), $attrs ) );

		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );

		$danimation = !empty( $animation ) ? " data-animation='{$animation}' ": "";
		$ddelay = ( !empty( $animation ) && !empty( $animation_delay )) ? " data-delay='{$animation_delay}' " : "";
		$danimate = !empty( $animation ) ? "animate": "";

		$first = (isset ( $attrs [0] ) && trim ( $attrs [0] == 'first' )) ? 'first' : '';

		$out = '<div class="column '.$danimate.' '.$first.'" style="width:'.$width.'%;" '.$danimation.' '.$ddelay.'>';
		$cont = do_shortcode($content);
		if(isset($cont))
			$out .= $cont;
		else
			$out .= $content;
		$out .= '</div>';
		return $out;
	}

	function dt_sc_resizable($attrs, $content = null) {		
		extract ( shortcode_atts ( array (
				'width' => '',
				'class' => '',
				'animation' => '',
				'animation_delay' => ''
		), $attrs ) );

		$danimation = !empty( $animation ) ? " data-animation='{$animation}' ": "";
		$ddelay = (!empty( $animation ) && !empty( $animation_delay )) ? " data-delay='{$animation_delay}' " : "";
		$danimate = !empty( $animation ) ? "animate": "";

		$style = (!empty( $width ) ) ? ' style="width:'.$width.'%;" ' : "";
	
		$first = (isset ( $attrs [0] ) && trim ( $attrs [0] == 'first' )) ? 'first' : '';
		$content = do_shortcode(DTCoreShortcodesDefination::dtShortcodeHelper ( $content ));
		$out = "<div class='column {$class} {$danimate} {$first}' {$danimation} {$ddelay} {$style}>{$content}</div>";
		return $out;
	}	
	
	
	function dt_sc_twitter($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'username' => '',
				'consumer_key' => '',
				'consumer_secret' => '',
				'user_token' => '',
				'user_secret' => '',
				'count' => '4',
				'data_animation_delay' => '100',
				'data_animation' => ''
		), $attrs ) );


		$data_animation_class = ( !empty($data_animation) && $data_animation !='None' ) ? "animate" : " ";
		$data_animation_delay = ( !empty($data_animation) && !empty($data_animation_delay) && $data_animation !='None' ) ? "data-delay='{$data_animation_delay}'" : " ";
		$data_animation = (!empty($data_animation)) ? "data-animation='{$data_animation}'" : " ";
		
		$transName = 'list_tweets';
		$cacheTime = 10;
		
			if(!class_exists('TwitterOAuth')){						
				require_once 'twitteroauth/twitteroauth.php';
			}
			$twitterConnection = new TwitterOAuth($consumer_key, $consumer_secret, $user_token, $user_secret );
			$twitterData = $twitterConnection->get('statuses/user_timeline',array('screen_name' => $username, 'count' => $count));

			 if($twitterConnection->http_code != 200) {
				 $twitterData = get_transient($transName);
			 }
 		set_transient($transName, $twitterData, 60 * 10);
		$twitter = get_transient($transName);
		
		  $out = '<div class="twitter-parallax aligncenter '.$data_animation_class.'"  '.$data_animation_delay.'  '.$data_animation.'>
			            <div class="latest-tweets tweets_container">
					        <ul class="tweet_list">';
						
								if($twitter && is_array($twitter)) {
									foreach( $twitter as $tweet ):
										$twcont = '';
										$twt_text = '<span class="tweet_text">'.$tweet->text.'</span>';
										
										$twitterTime = $tweet->created_at;
										$date = DateTime::createFromFormat('D M d H:i:s O Y', $twitterTime ); 
										$timeAgo = __('about ','dt_themes').human_time_diff( $date->format('U') ).__(' ago','dt_themes');
										$twt_time = "<span class='tweet-time'>{$timeAgo}</span>";
										
										if(isset($tweet->entities->urls['0'])): 
											$twurl = $tweet->entities->urls['0']->url; 
											if(isset($twurl)): $twcont = str_replace($twurl,"<a href='$twurl'>$twurl</a>",$twt_text); endif;
										endif;
										if(empty($twcont)): $twcont = $twt_text; endif;
										
										if(isset($tweet->entities->user_mentions['0'])): 
											$twuser = $tweet->entities->user_mentions['0']->screen_name; 
											if(isset($twuser)): $twcont = str_replace('@'.$twuser,"<a href='http://twitter.com/$twuser'>@$twuser</a>",$twcont); endif;
										endif;
										if(empty($twcont)): $twcont = $twt_text; endif;
										$twcont .= $twt_time;
										
										$out .= "<li>".$twcont."</li>";
									endforeach;
								}
						
						$out .= '</ul>
							</div>
					 </div>';
		
		return $out;
	}

	function dt_sc_social_links($attrs, $content = null) {
		
		$sociables =  array('fa-delicious' => 'delicious', 'fa-dribbble' => 'dribbble', 'fa-deviantart' => 'deviantart', 'fa-digg' => 'digg', 'fa-flickr' => 'flickr', 'fa-twitter' => 'twitter', 'fa-weibo' => 'weibo', 'fa-youtube' => 'youtube', 'fa-facebook' => 'facebook', 'fa-google-plus' => 'googleplus', 'fa-google' => 'google', 'fa-pinterest' => 'pinterest', 'fa-reddit' => 'reddit', 'fa-yahoo' => 'yahoo', 'fa-vimeo-square' => 'vimeosquare', 'fa-stumbleupon' => 'stumbleupon', 'fa-linkedin' => 'linkedin', 'fa-skype' => 'skype', 'fa-tumblr' => 'tumblr');
		foreach ( $sociables as $sociable ) {
			$attributes [$sociable] = '';
		}

		extract ( shortcode_atts ( $attributes, $attrs ) );
		
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		
		
		$s = "";
		foreach ( $sociables as $sociable_key => $sociable ) {
			$s .= empty ( $$sociable ) ? '' : '<li><a href="'.$$sociable.'" target="_blank" class="dt-sc-tooltip-top" title="'.$sociable.'"> <i class="fa '.$sociable_key.'"></i> </a></li>';
		}
											
		$s = ! empty ( $s ) ? "<ul class=' aligncenter dt-sc-social-icons'>$s</ul>" : "";

		$out = '<div class="social-media type1">'.$s.'</div>';

		return $out;

	}


	function dt_sc_slider_pattern($attrs, $content = null, $shortcodename = "") {
		extract ( shortcode_atts ( array ( 'patternbg_image' => '', 'quote_text' => '', 'cite_name' => '','button_title' => '', 'button_link' => '','enable_scrolldown' => 'yes', 'scrolldownto_pageid' => '' ), $attrs ) );
		
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		
		if(is_page_template('tpl-onepage.php')) {
			global $post;
			$op_name = basename( get_permalink($post->ID) );
		}
		
		if($scrolldownto_pageid != '') $scrollto_pagename = '#'.basename( get_permalink($scrolldownto_pageid) ); else $scrollto_pagename = "#";
		
		$out = '';
		$out .= '<div id="'.$op_name.'" class="content main">';
		
		if ( dttheme_option("general","enable-dark-layout") ) {
			$layout_class = "dark-bg";
		}else {
			$layout_class = "light-bg";
		}
		
		$tpl_header_styles = get_post_meta( $post->ID, '_tpl_default_settings', TRUE );
		$tpl_header_styles = isset( $tpl_header_styles['header-styles'] ) ? $tpl_header_styles['header-styles']  : '';
		
		if($tpl_header_styles == 'type2') {
			$content_class = 'sb-site';	
		}else{
			$content_class = 'top-content';
		}

		$out .= ' <div class="'.$content_class.' banner '.$layout_class.'" id="top-content" style="background:url('.$patternbg_image.') repeat fixed">
					<div class="container">
						<div class="caption quote">';
				
							if($quote_text != '') { 
								$out .= '<h2>';
								$out .=   $quote_text;
								if($cite_name !=''){
									$out .= '<span> - '.$cite_name. '</span>';
								}
								$out .= '</h2>';
							}
							if($button_title != '') $out .= '<a class="dt-sc-button black" href="'.$button_link.'">'.$button_title.'</a>';
						
		$out .= '		</div>';
				
				if($enable_scrolldown == 'yes') {
					$out .= '<div id="scrolldown">
								<a href="'.$scrollto_pagename.'"><i class="fa fa-angle-double-down"></i><br/>'.__('Scroll Down', 'dt_themes').'</a>
							</div>';
				}
				
		$out .= '  </div>';
		$out .= ' </div>';
		$out .= '</div>';
				
		return $out;
	}
	
	function dt_sc_slider_pattern_type2($attrs, $content = null, $shortcodename = "") {
		extract ( shortcode_atts ( array ( 'patternbg_image' => '', 'title1' => '', 'title2' => '','button_title' => '', 'button_link' => '','enable_scrolldown' => 'yes', 'scrolldownto_pageid' => '' ), $attrs ) );
		
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		
		if(is_page_template('tpl-onepage.php')) {
			global $post;
			$op_name = basename( get_permalink($post->ID) );
		}
		
		if($scrolldownto_pageid != '') $scrollto_pagename = '#'.basename( get_permalink($scrolldownto_pageid) ); else $scrollto_pagename = "#";
		
		$out = '';
		
		$out .= '<div id="'.$op_name.'" class="content main">';
		
		if ( dttheme_option("general","enable-dark-layout") ) {
			$layout_class = "dark-bg";
		}else {
			$layout_class = "light-bg";
		}
		
		$out .= ' <div class="top-content banner fullwidth-section pattern '.$layout_class.'" id="top-content" style="background:url('.$patternbg_image.') repeat fixed">
					<div class="container"> <div class="dt-sc-hr-invisible-medium"> </div>
						<div class="caption">';
				
							if($title1 != '') { 
								$out .= '<h1>'.$title1.'</h1>';
							}
							$out .= '<div class="dt-sc-hr-invisible-small"> </div>';
							$out .= '<h4>'.$title2.'</h4>';
							if($button_title != '') $out .= '<a class="dt-sc-button black" href="'.$button_link.'">'.$button_title.'</a>';
						
		$out .= '		</div>';
				
				if($enable_scrolldown == 'yes') {
					$out .= '<div id="scrolldown">
								<a href="'.$scrollto_pagename.'"><i class="fa fa-angle-double-down"></i><br/>'.__('Scroll Down', 'dt_themes').'</a>
							</div>';
				}
				
		$out .= '  </div>';
		$out .= ' </div>';
		$out .= '</div>';
				
		return $out;
	}

	function dt_sc_slider_videobackground($attrs, $content = null, $shortcodename = "") {
		extract ( shortcode_atts ( array ( 'video_url' => '', 'title1' => '', 'title2' => '', 'description' => '', 'button_title' => '', 'button_link' => ''), $attrs ) );
		
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		
		if(is_page_template('tpl-onepage.php')) {
			global $post;
			$op_name = basename( get_permalink($post->ID) );
		}
		
		$scrolldownto_pageid ="";
		if($scrolldownto_pageid != '') $scrollto_pagename = '#'.basename( get_permalink($scrolldownto_pageid) ); else $scrollto_pagename = "#";
		
		$out = '';
		
		$out .= '<div class="content video-full-width" id="'.$op_name.'">';
	
		if($video_url != '') {
			$out .= '<div class="dt-sc-video-container">
						<video class="dt-sc-video dt-sc-fillWidth" loop autoplay src="'.$video_url.'"></video>
					</div>';
		}
		
		$out .= '<div class="overlay-pattern"></div>
				<div class="overlay"></div>
					<div class="banner-content">
						<div class="video-text zoomIn">
							<div class="container">';
								if($title1 != '') $out .= '<h1>'.$title1.'</h1>';
								if($title2 != '') $out .= '<h3>'.$title2.'</h3>';
								if($description != '') $out .= '<p>'.$description.'</p>';
								
								if($button_title != '') $out .= '<a class="read-more dt-sc-button" href="'.$button_link.'">'.$button_title.'</a>';
					$out .= '</div>
						</div>
					</div>';
					
		$out .= '</div>';
		
		return $out;
	}

	function dt_sc_slider_parallax($attrs, $content = null, $shortcodename = "") {
		extract ( shortcode_atts ( array ( 'parallax_image' => '', 'title1' => '', 'title2' => '', 'title3' => '', 'button_title' => '', 'button_link' => '', 'enable_scrolldown' => 'yes', 'scrolldownto_pageid' => '' ), $attrs ) );
		
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		
		if(is_page_template('tpl-onepage.php')) {
			global $post;
			$op_name = basename( get_permalink($post->ID) );
		}
		
		if($scrolldownto_pageid != '') $scrollto_pagename = '#'.basename( get_permalink($scrolldownto_pageid) ); else $scrollto_pagename = "#";
		
		if ( dttheme_option("general","enable-dark-layout") ) {
			$layout_class = "dark-bg";
		}else {
			$layout_class = "light-bg";
		}
		
		$out = '';
		$out .= '<div id="'.$op_name.'" class="content main">';
		$out .= ' <div class="top-content banner fullwidth-section dt-sc-parallax-section banner-parallax '.$layout_class.'" id="top-content" style="background-image: url('.$parallax_image.')">';
		$out .= '	<div class="container">
						<div class="caption">';

								if($title1 != '') $out .= '<h4>'.$title1.'</h4><div class="dt-sc-hr-invisible-small"> </div>';
								if($title2 != '') $out .= '<h1>'.$title2.'</h1><div class="dt-sc-hr-invisible-small"> </div>';
								if($title3 != '') $out .= '<h4>'.$title3.'</h4>';
								
						if($button_title != '') $out .= '<a class="dt-sc-button black" href="'.$button_link.'">'.$button_title.'</a>';
				
				if($enable_scrolldown == 'yes') {
					$out .= '<div id="scrolldown">
								<a href="'.$scrollto_pagename.'"><i class="fa fa-angle-double-down"></i><br/>'.__('Scroll Down', 'dt_themes').'</a>
							</div>';
				}
				
		$out .= '		</div>';
		$out .= '	</div>';
		$out .= ' </div>';
		$out .= '</div>';	
		return $out;
	}
	
	function dt_sc_slider_portfolio($attrs, $content = null, $shortcodename = "") {
		
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		
		if(is_page_template('tpl-onepage.php')) {
			global $post;
			$op_name = basename( get_permalink($post->ID) );
		}
		
		$out = '';
		$out .= '<div class="content below-menu" id="'.$op_name.'">';
		$out .= do_shortcode($content);
		$out .= '</div>';
				
		return $out;
	}
	
	#Recent portfolio 
	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_recent_portfolio($attrs, $content = null, $shortcodename ="") {
		extract ( shortcode_atts ( array (
				'count' => '', 'column' => '', 'excerpt_length' =>  '','style' => '','data_animation' => 'fadeInUp', 'data_animation_delay' => '100'
		), $attrs ) );
		
		
		$out = "";
		$column = $column;
		
		$data_animation_class = ( !empty($data_animation) && $data_animation !='None' ) ? "animate" : " ";
		$data_animation_delay = ( !empty($data_animation) && !empty($data_animation_delay) && $data_animation !='None' ) ? "data-delay='{$data_animation_delay}'" : " ";
		$data_animation = (!empty($data_animation)) ? "data-animation='{$data_animation}'" : " ";
		
		$style = ($style == "no-space") ? 'no-space ' : ''; 
		$style .= $data_animation_class;
		
		$args = new WP_Query(  array(	'posts_per_page' => $count, 'orderby' => 'date', 'post_type' => 'dt_portfolios') );
		if ( $args->have_posts() ) :
        while( $args->have_posts() ) :
            $args->the_post();
			
			$current_post = $args->current_post;
			$id=get_the_id();
			$title = get_the_title();
			$link = get_permalink($id);
			$portfolio_item_meta = get_post_meta($id,'_portfolio_settings',TRUE);
            $portfolio_item_meta = is_array($portfolio_item_meta) ? $portfolio_item_meta  : array();
			
			
			if($column == 2) {
				if(($current_post % 2) == 0) {
					$class = "<div class='column dt-sc-one-half first ".$style." ".$data_animation_class."' ".$data_animation." ".$data_animation_delay." >";
				}else {
					$class = "<div class='column dt-sc-one-half ".$style." ".$data_animation_class."' ".$data_animation." ".$data_animation_delay." >";
				}
			}else if($column == 3) {
				if(($current_post % 3) == 0) {
					$class = "<div class='column dt-sc-one-third first ".$style." ".$data_animation_class."' ".$data_animation." ".$data_animation_delay.">";
				}else {
					$class = "<div class='column dt-sc-one-third ".$style." ".$data_animation_class."' ".$data_animation." ".$data_animation_delay.">";
				}
			}else {
				if(($current_post % 4) == 0) {
					$class = "<div class='column dt-sc-one-fourth first ".$style."' ".$data_animation." ".$data_animation_delay.">";
				}else {
					$class = "<div class='column dt-sc-one-fourth ".$style."' ".$data_animation." ".$data_animation_delay.">";
				}
			}
			
		$out .= $class;
			$out .= "<div class='service-grid'>";
			
		
			if( ( (($current_post % 4) == 0 || ($current_post % 4) == 2) && $column == 4 ) || ((($current_post % 3) == 0 || ($current_post % 3) == 2 ) && $column == 3) || 
				( ($current_post % 2 == 0) && $column == 2) ) { 
					
					$out .="<a href='".$link."' title='".$title."'>";
					$out .= '<figure class="service-overlay">';
                        $popup = "http://placehold.it/800x400";
                        if( array_key_exists('items_name', $portfolio_item_meta) ) {
                            $item =  $portfolio_item_meta['items_name'][0];
                            $popup = $portfolio_item_meta['items'][0];
							
                            if( "video" === $item ) {
                                $items = array_diff( $portfolio_item_meta['items_name'] , array("video") );
                                if( !empty($items) ) {
                                    $out .= "<img src='".$portfolio_item_meta['items'][key($items)]."' alt='' />";	
                                } else {
                                    $out .= '<img src="http://placehold.it/800x400" alt="" />';
                                }
                            } else {
								$attachment_id = dt_get_attachment_id_from_url($portfolio_item_meta['items'][0]);
								$img_attributes = wp_get_attachment_image_src($attachment_id, 'full');
                                $out .= "<img src='".$img_attributes[0]."' />";
                            }
                        } else {
                            $out .= "<img src='{$popup}' alt='' />";
                        }
                        
					$out .= "	<figcaption>";
					$out .= "<h6>".$title." </h6>";
                    $out .= "		<p>". wp_trim_words( get_the_excerpt(),10) ."</p>";
					$out .= " 	</figcaption>";
                        
					$out .= " </figure>";
					
				
					$out .= '<div class="services bottom '.$data_animation_class.'" '.$data_animation.' '.$data_animation_delay.' >';
					$out .=	'	<p>'.	 wp_trim_words( get_the_content($id), $excerpt_length ).'</p>';
				
					$out .= '</div>';
					$out .="</a>";
			
			}else {
				
					$out .="<a href='".$link."' title='".$title."'>";
					$out .= '<div class="services top '.$data_animation_class.'" '.$data_animation.' '.$data_animation_delay.' >';
					$out .=		'<p>'.	 wp_trim_words( get_the_content($id), $excerpt_length ).'</p>';
					$out .= '</div>';
				
					$out .= '<figure class="service-overlay">';
                        $popup = "http://placehold.it/800x400";
                        if( array_key_exists('items_name', $portfolio_item_meta) ) {
                            $item =  $portfolio_item_meta['items_name'][0];
                            $popup = $portfolio_item_meta['items'][0];
							
                            if( "video" === $item ) {
                                $items = array_diff( $portfolio_item_meta['items_name'] , array("video") );
                                if( !empty($items) ) {
                                    $out .= "<img src='".$portfolio_item_meta['items'][key($items)]."' alt='' />";	
                                } else {
                                    $out .= '<img src="http://placehold.it/800x400" alt="" />';
                                }
                            } else {
								$attachment_id = dt_get_attachment_id_from_url($portfolio_item_meta['items'][0]);
								$img_attributes = wp_get_attachment_image_src($attachment_id, 'full');
                                $out .= "<img src='".$img_attributes[0]."' />";
                            }
                        } else {
                            $out .= "<img src='{$popup}' alt='' />";
                        }
                    
					$out .= "	<figcaption>";
					$out .= "<h6>".$title." </h6>";
                    $out .= "		<p>". wp_trim_words( get_the_excerpt(),10) ."</p>";
					$out .= " 	</figcaption>";
					$out .= " </figure>";
					$out .="</a>";
			}
			
			$out .= '</div>';
		$out .= '</div>';
				
			endwhile;
		else:
			$out .= "<p>".__("Please add few portfolio items before using this shortcode",'dt_themes')."</p>";		
		endif;
		wp_reset_query();
		
		return $out;
	}
	
	#NewsLetter Shortcode
	 function dt_sc_news_letter($attrs, $content = null, $shortcodename = "") {
		 extract ( shortcode_atts ( array (
						 'description' => '',
						 'data_animation_delay' => '100',
						 'data_animation' => '',
						 'data_animation2' => ''
		 ), $attrs ) );
	 	
	 if(dttheme_option('general', 'newsletter-listid') != ""):  
	 
	 		$data_animation_class = ( (!empty($data_animation) || !empty($data_animation2) ) && $data_animation !='None' ) ? "animate" : " ";
			$data_animation_delay = ( !empty($data_animation) && !empty($data_animation_delay) && $data_animation !='None' ) ? "data-delay='{$data_animation_delay}'" : " ";
			$data_animation = (!empty($data_animation)) ? "data-animation='{$data_animation}'" : " ";
			
			$data_animation2 = (!empty($data_animation2)) ? "data-animation='{$data_animation2}'" : " ";
			
        
        $out  = "<!-- **Newsletter**  -->";
		$out .= '<div id="newsletter" class="newsletter">';
		$out .=  '<div class="dt-sc-hr-invisible-small"> </div>';
		$out .=    '<div class="container">';
		
		$out .=     '<form method="post" name="frmsubnewsletter" class="dt-sc-one-half column first '.$data_animation_class.'" '.$data_animation.'  '.$data_animation_delay.'>';
		$out .= 		'<div id="mailchimp-form">';
		$out .=				'<p> <span class="fa fa-envelope-o"> </span> ';
		$out .=     		'<input name="mc_email" type="email" placeholder="'.__("Enter Email Address","dt_themes").'" required="" /> </p>';
		$out .=     		'<input type="hidden" name="btm_mc_listid" value="'.dttheme_option("general", "newsletter-listid").'" />';
		$out .=     		'<p class="submit"> <input type="submit" name="submit" class="nl-submit" value="Subscribe" > </p>';
		$out .= 		 '</div>';
		$out .=     '</form>'; 
		
		$out .=		'<div class="newsletter-text dt-sc-one-half column '.$data_animation_class.'" '.$data_animation2.' '.$data_animation_delay.'><i class="fa fa-envelope-o"> </i>';
		$out .=       empty($description) ? "" : "{$description}";
		$out .= 	'</div>';
                
            
			    #AFTER SUBMITTING FORM...
                if( isset($_REQUEST['mc_email']) ):
                
                    require_once(IAMD_FW."theme_widgets/mailchimp/MCAPI.class.php");
                    $mcapi = new MCAPI( dttheme_option('general','mailchimp-key') );
                    
                    $merge_vars = Array( 'EMAIL' => $_REQUEST['mc_email'] );
                    $list_id = $_REQUEST['btm_mc_listid'];
					
					if($mcapi->listSubscribe($list_id, $_REQUEST['mc_email'], $merge_vars ) ):
                        // It worked!   
                      $msg = '<span style="color:#76EE00;">'.__('Success!&nbsp; Check your inbox or spam folder for a message containing a confirmation link.', 'dt_themes').'</span>';
                    else:
                        // An error ocurred, return error message   
                        $msg = '<span style="color:#ff0000;"><b>'.__('Error:', 'dt_themes').'</b>&nbsp; ' . $mcapi->errorMessage.'</span>';
                    endif;
                    
                    #PRINTING RESULT...
                    if ( isset($msg) ) $out .= '<span class="zn_mailchimp_result">'.$msg.'</span>';				
                endif; 
			
		$out .=    '</div>';
		$out .=  '<div class="dt-sc-hr-invisible-small"> </div>';
		$out .= '</div>';
		$out .= '<!-- **Newsletter - End** -->';
	  else : 
		$out = '<span style="color:#ff0000;">'.__('Error: &nbsp; tYou must specify a API KEY value for the listSubscribe method.', 'dt_themes').'</span>';
	  endif; 
	return $out;
	 }

}
new DTCoreShortcodesDefination();?>