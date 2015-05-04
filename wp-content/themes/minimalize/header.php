<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<?php dttheme_is_mobile_view(); ?>

    <?php if ( ! function_exists( '_wp_render_title_tag' ) ) {
		      function theme_slug_render_title() { ?>
                <title><?php
                    $status = dttheme_is_plugin_active('all-in-one-seo-pack/all_in_one_seo_pack.php') || dttheme_is_plugin_active('wordpress-seo/wp-seo.php');
                    if (!$status) :
                        $title = dttheme_public_title();
                
                        if( !empty( $title) )
                            echo $title;
                        else
                            wp_title( '|', true, 'right' );
                    else :
                        wp_title( '|', true, 'right' );
                    endif;?></title><?php
		      }
		      add_action( 'wp_head', 'theme_slug_render_title' );
		  } ?>
   
    <link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <?php #Header Code Section
	  if( dttheme_option('integration', 'enable-header-code') ):
	  $custom_js = stripslashes(dttheme_option('integration', 'header-code'));
	  
	  echo '<script>'.wp_kses($custom_js, array(
									    'br' => array(),
									    'em' => array(),
									    'strong' => array(),
									    'h1' => array('class' => array()), 
									    'h2' => array('class' => array()),
										'h3' => array('class' => array()),
										'h4' => array('class' => array()),
										'h5' => array('class' => array()),
										'h6' => array('class' => array()),
							   )).'</script>';
	  endif;
wp_head(); ?>
</head>
<?php 
$body_class_arg  = ( dttheme_option("appearance","layout") === "boxed" ) ? array("boxed") : array(); 
$body_class_arg  = ( dttheme_option("general","enable-dark-layout") ) ? "dark-bg" : "light-bg";


$postid = ( isset( $post->ID ) ? $post->ID : NULL );
$tpl_header_styles = get_post_meta( $postid, '_tpl_default_settings', TRUE );
$tpl_header_styles = isset( $tpl_header_styles['header-styles'] ) ? $tpl_header_styles['header-styles']  : '';

if($tpl_header_styles == 'type5') {
	$body_class_arg[] = 'menu-over-slider';	
}
?>
<body <?php body_class( $body_class_arg ); ?>>
<?php if(dttheme_option('general','loading-bar') != "true") echo '<div class="cover"></div>'; ?>
<?php 
$picker = dttheme_option("general","disable-picker");
if(!isset($picker) && !is_user_logged_in() ):	dttheme_color_picker();	endif;
?>
<!-- **Wrapper** -->
<?php if ( dttheme_option("general","enable-dark-layout") ) {
			$bg_class = "dark-bg";
}else {
	$bg_class = "light-bg";
} ?>


<?php if($tpl_header_styles != 'type2'){ 
		if($tpl_header_styles == 'type3'){ ?>
			<div id="containerr" class="wrapper <?php echo esc_attr($bg_class); ?>">
<?php   }else{ ?>
			<div class="wrapper <?php echo esc_attr($bg_class); ?>">
<?php	} 
	  }?>
   
<?php if($tpl_header_styles != 'type6'){ 
		if($tpl_header_styles == 'type2' ){ ?>
			<div class="wrapper <?php echo esc_attr($bg_class); ?> ">
              <div class="inner-wrapper <?php if($tpl_header_styles == 'type5'){ echo "no-header-bg"; } ?> "><?php
		}else{ ?>
			<div class="inner-wrapper <?php if($tpl_header_styles == 'type5'){ echo "no-header-bg"; } ?> "> <?php
		}
	  } ?>

	<?php 
	global $post;
	     if(is_page_template('tpl-onepage.php') && $tpl_header_styles != 'type1' && $tpl_header_styles != 'type4' && $tpl_header_styles != 'type5' && $tpl_header_styles != 'type3' && $tpl_header_styles != 'type2' ):
		dttheme_slider_section( $post->ID, 'topsection');	
    endif; 

	if(is_page_template('tpl-onepage.php')) {
		if($tpl_header_styles == 'type1') {
			require_once(IAMD_TD."/framework/headers/header1.php");
		} else if($tpl_header_styles == 'type2') {
			require_once(IAMD_TD."/framework/headers/header2.php");
		} else if($tpl_header_styles == 'type3') {
			require_once(IAMD_TD."/framework/headers/header3.php");
		} else if($tpl_header_styles == 'type4') {
			require_once(IAMD_TD."/framework/headers/header4.php");
		} else if($tpl_header_styles == 'type5') {
			require_once(IAMD_TD."/framework/headers/header5.php");
		} else if($tpl_header_styles == 'type6') {
			require_once(IAMD_TD."/framework/headers/header6.php");
		}
		else {
			require_once(IAMD_TD."/framework/headers/header-default.php");
		}
	} else {
		require_once(IAMD_TD."/framework/headers/header-default.php");
	} ?>

    <!--main-content starts-->
   <?php  if($tpl_header_styles == 'type2'): ?> 
    <div id="sb-site" class="wrapper <?php echo esc_attr($bg_class); ?>">
<div class="inner-wrapper"><?php endif; ?>

    <?php  if($tpl_header_styles != 'type6'): ?> <div id="main"> <?php endif; ?>
    
		<?php if( !is_page_template('tpl-onepage.php') ): ?>
        	<?php require_once( IAMD_TD."/framework/sub-title.php"); ?>
		 <?php endif; ?>