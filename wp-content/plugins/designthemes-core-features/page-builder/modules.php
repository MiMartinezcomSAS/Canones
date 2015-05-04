<?php

global $dt_modules, $dt_animation_types, $woothemes_sensei, $dtthemes_columns;

$dt_animation_types = array('flash' => 'flash', 'shake' => 'shake', 'bounce' => 'bounce', 'tada' => 'tada', 'swing' => 'swing', 'wobble' => 'wobble', 'pulse' => 'pulse', 'flip' => 'flip', 'flipInX' => 'flipInX', 'flipOutX' => 'flipOutX', 'flipInY' => 'flipInY', 'flipOutY' => 'flipOutY', 'fadeIn' => 'fadeIn', 'fadeInUp' => 'fadeInUp', 'fadeInDown' => 'fadeInDown', 'fadeInLeft' => 'fadeInLeft', 'fadeInRight' => 'fadeInRight', 'fadeInUpBig' => 'fadeInUpBig', 'fadeInDownBig' => 'fadeInDownBig', 'fadeInLeftBig' => 'fadeInLeftBig', 'fadeInRightBig' => 'fadeInRightBig', 'fadeOut' => 'fadeOut', 'fadeOutUp' => 'fadeOutUp','fadeOutDown' => 'fadeOutDown', 'fadeOutLeft' => 'fadeOutLeft', 'fadeOutRight' => 'fadeOutRight', 'fadeOutUpBig' => 'fadeOutUpBig', 'fadeOutDownBig' => 'fadeOutDownBig', 'fadeOutLeftBig' => 'fadeOutLeftBig','fadeOutRightBig' => 'fadeOutRightBig', 'bounceIn' => 'bounceIn', 'bounceInUp' => 'bounceInUp', 'bounceInDown' => 'bounceInDown', 'bounceInLeft' => 'bounceInLeft', 'bounceInRight' => 'bounceInRight', 'bounceOut' => 'bounceOut', 'bounceOutUp' => 'bounceOutUp', 'bounceOutDown' => 'bounceOutDown', 'bounceOutLeft' => 'bounceOutLeft', 'bounceOutRight' => 'bounceOutRight', 'rotateIn' => 'rotateIn', 'rotateInUpLeft' => 'rotateInUpLeft', 'rotateInDownLeft' => 'rotateInDownLeft', 'rotateInUpRight' => 'rotateInUpRight', 'rotateInDownRight' => 'rotateInDownRight', 'rotateOut' => 'rotateOut', 'rotateOutUpLeft' => 'rotateOutUpLeft','rotateOutDownLeft' => 'rotateOutDownLeft', 'rotateOutUpRight' => 'rotateOutUpRight', 'rotateOutDownRight' => 'rotateOutDownRight', 'hinge' => 'hinge', 'rollIn' => 'rollIn', 'rollOut' => 'rollOut', 'lightSpeedIn' => 'lightSpeedIn', 'lightSpeedOut' => 'lightSpeedOut', 'slideDown' => 'slideDown', 'slideUp' => 'slideUp', 'slideLeft' => 'slideLeft', 'slideRight' => 'slideRight', 'slideExpandUp' => 'slideExpandUp', 'expandUp' => 'expandUp', 'expandOpen' => 'expandOpen', 'bigEntrance' => 'bigEntrance', 'hatch' => 'hatch', 'floating' => 'floating', 'tossing' => 'tossing', 'pullUp' => 'pullUp', 'pullDown' => 'pullDown', 'stretchLeft' => 'stretchLeft', 'stretchRight' => 'stretchRight');

$variations = array('avocado' => 'avocado', 'black' => 'black', 'blue' => 'blue', 'blueiris' => 'blueiris', 'blueturquoise' => 'blueturquoise', 'brown' => 'brown', 'burntsienna' => 'burntsienna', 'chillipepper' => 'chillipepper', 'eggplant' => 'eggplant', 'electricblue' => 'electricblue', 'graasgreen' => 'graasgreen', 'gray' => 'gray', 'green' => 'green', 'orange' => 'orange', 'palebrown' => 'palebrown', 'pink' => 'pink', 'radiantorchid' => 'radiantorchid', 'red' => 'red', 'skyblue' => 'skyblue', 'yellow' => 'yellow', 'violet' => 'violet', 'emerald' => 'emerald', 'wetasphalt' => 'wetasphalt');

$button_types = array('type1' => 'Type 1', 'type2' => 'Type 2');

$button_size = array('small' => 'Small', 'medium' => 'Medium', 'large' => 'Large', 'xlarge' => 'Xlarge');

$button_style = array('with-icon' => 'With icon', 'without-icon' => 'Without icon', 'hover-effect-with-icon' => 'Hover effect with icon');

$page_targets = array('_blank' => 'Blank', '_new' => 'New', '_parent' => 'Parent', '_self' => 'Self', '_top' => 'Top');

$box_types = array('titled-box' => 'Titled Box', 'error-box' => 'Error Box', 'warning-box' => 'Warning Box', 'success-box' => 'Success Box', 'info-box' => 'Info Box');

$blocquote_types = array('type1' => 'Type 1', 'type2' => 'Type 2', 'type3' => 'Type 3', 'type4' => 'Type 4', 'type5' => 'Type 5', 'type6' => 'Type 6');

$pullquote_types = array('pullquote1' => 'Pullquote 1', 'pullquote2' => 'Pullquote 2', 'pullquote3' => 'Pullquote 3', 'pullquote4' => 'Pullquote 4', 'pullquote5' => 'Pullquote 5', 'pullquote6' => 'Pullquote 6');

$callout_box_types = array('type1' => 'Type 1', 'type2' => 'Type 2', 'type3' => 'Type 3', 'type4' => 'Type 4', 'type5' => 'Type 5');

$pricingtable_types = array('type1' => 'Type 1', 'type2' => 'Type 2');

$icon_box_types = array('type1' => 'Type 1', 'type2' => 'Type 2', 'type3' => 'Type 3', 'type4' => 'Type 4');

$heading_types = array('type1' => 'Type 1', 'type2' => 'Type 2', 'type3' => 'Type 3');

$align = array('left' => 'Left', 'right' => 'Right', 'center' => 'Center');

$themeservice_align = array('left' => 'Left', 'right' => 'Right');

$yesorno = array('yes' => 'Yes', 'no' => 'No');

$trueorfalse = array('true' => 'True', 'false' => 'False');

$tooltip_positions = array('top' => 'Top', 'right' => 'Right', 'bottom' => 'Bottom', 'left' => 'Left');

$dropcap_types = array('Default' => 'Default', 'Circle' => 'Circle', 'Bordered Circle' => 'Bordered Circle', 'Square' => 'Square', 'Bordered Square' => 'Bordered Square');

$bacground_repeat = array('no-repeat' => 'No Repeat', 'repeat' => 'Repeat', 'repeat-x' => 'Repeat X', 'repeat-y' => 'Repeat Y');

$bacground_position = array('left top' => 'Left Top', 'left center' => 'Left Center', 'left bottom' => 'Left Bottom', 'right top' => 'Right Top', 'right center' => 'Right Center', 'right bottom' => 'Right Bottom', 'center top' => 'Center Top', 'center center' => 'Center Center', 'center bottom' => 'Center Bottom');

$lengths = array(5 => 5, 10 => 10, 15 => 15, 20 => 20, 25 => 25, 30 => 30, 35 => 35, 40 => 40, 45 => 45, 50 => 50, 55 => 55, 60 => 60, 65 => 65, 70 => 70, 75 => 75, 80 => 80, 85 => 85, 90 => 90, 95 => 95, 100 => 100);

$post_columns = array(2 => 2, 3 => 3);

$recent_portfolio_column_types = array(2 => 2, 3 => 3, 4 => 4);

$recent_portfolio_style = array('space' => 'Space', 'no-space' => 'No Space');

$portfolio_columns = array(2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6);

$margin_spaces = array(10 => 10, 15 => 15, 20 => 20, 25 => 25, 30 => 30, 35 => 35, 40 => 40, 45 => 45, 50 => 50, 55 => 55, 60 => 60, 65 => 65, 70 => 70);

$twitter_counts = array(1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10, 11 => 11, 12 => 12, 13 => 13, 14 => 14, 15 => 15, 16 => 16, 17 => 17, 18 => 18, 19 => 19, 20 => 20);

$progressbar_types = array('standard' => 'Standard', 'progress-striped' => 'Striped', 'progress-striped-active' => 'Striped Active');

$oltypes = array('decimal' => 'Decimal', 'decimal-leading-zero' => 'Decimal With Leading Zero', 'lower-alpha' => 'Lower Alpha', 'lower-roman' => 'Lower Roman', 'upper-alpha' => 'Upper Alpha', 'upper-roman' => 'Upper Roman');

$ultypes = array('arrow' => 'Arrow', 'rounded-arrow' => 'Rounded Arrow', 'double-arrow' => 'Double Arrow', 'heart' => 'Heart', 'trash' => 'Trash', 'star' => 'Star', 'tick' => 'Tick', 'rounded-tick' => 'Rounded Tick', 'cross' => 'Cross', 'rounded-cross' => 'Rounded Cross', 'rounded-question' => 'Rounded Question', 'rounded-info' => 'Rounded Info', 'delete' => 'Delete', 'warning' => 'Warning', 'comment' => 'Comment', 'edit' => 'Edit', 'share' => 'Share', 'plus' => 'Plus', 'rounded-plus' => 'Rounded Plus', 'minus' => 'Minus', 'rounded-minus' => 'Rounded Minus', 'asterisk' => 'Asterisk', 'cart' => 'Cart', 'folder' => 'Folder', 'folder-open' => 'Folder Open', 'desktop' => 'Desktop', 'tablet' => 'Tablet', 'mobile' => 'Mobile', 'reply' => 'Reply', 'quote' => 'Quote', 'mail' => 'Mail', 'external-link' => 'External Link', 'adjust' => 'Adjust', 'pencil' => 'Pencil', 'print' => 'Print', 'tag' => 'Tag', 'thumbs-up' => 'Thumbs Up', 'thumbs-down' => 'Thumbs Down', 'time' => 'Time', 'globe' => 'Globe', 'pushpin' => 'Pushpin', 'map-marker' => 'Map Marker', 'link' => 'Link', 'paper-clip' => 'Paper Clip', 'download' => 'Download', 'key' => 'Key', 'search' => 'Search', 'rss' => 'Rss', 'twitter' => 'Twitter', 'facebook' => 'Facebook', 'linkedin' => 'Linkedin', 'google-plus' => 'Google Plus', 'circle-tick' => 'Circle Tick');


/*  Start of Columns Definition */

$dtthemes_columns['full_width'] = array( 
		'name' => __('1 Column', 'dt_themes'),
		'type' => 'column',
	);
$dtthemes_columns['one_half'] = array( 
		'name' => __('1/2 Column', 'dt_themes'),
		'type' => 'column',
	);
$dtthemes_columns['one_third'] = array( 
		'name' => __('1/3 Column', 'dt_themes'),
		'type' => 'column',
	);
$dtthemes_columns['one_fourth'] = array( 
		'name' => __('1/4 Column', 'dt_themes'),
		'type' => 'column',
	);
$dtthemes_columns['one_fifth'] = array( 
		'name' => __('1/5 Column', 'dt_themes'),
		'type' => 'column',
	);
$dtthemes_columns['one_sixth'] = array( 
		'name' => __('1/6 Column', 'dt_themes'),
		'type' => 'column',
	);
$dtthemes_columns['two_third'] = array( 
		'name' => __('2/3 Column', 'dt_themes'),
		'type' => 'column',
	);
$dtthemes_columns['two_fifth'] = array( 
		'name' => __('2/5 Column', 'dt_themes'),
		'type' => 'column',
	);
$dtthemes_columns['two_sixth'] = array( 
		'name' => __('2/6 Column', 'dt_themes'),
		'type' => 'column',
	);
$dtthemes_columns['three_fourth'] = array( 
		'name' => __('3/4 Column', 'dt_themes'),
		'type' => 'column',
	);
$dtthemes_columns['three_fifth'] = array( 
		'name' => __('3/5 Column', 'dt_themes'),
		'type' => 'column',
	);
$dtthemes_columns['three_sixth'] = array( 
		'name' => __('3/6 Column', 'dt_themes'),
		'type' => 'column',
	);
$dtthemes_columns['four_fifth'] = array( 
		'name' => __('4/5 Column', 'dt_themes'),
		'type' => 'column',
	);
$dtthemes_columns['four_sixth'] = array( 
		'name' => __('4/6 Column', 'dt_themes'),
		'type' => 'column',
	);
$dtthemes_columns['five_sixth'] = array( 
		'name' => __('5/6 Column', 'dt_themes'),
		'type' => 'column',
	);
$dtthemes_columns['resizable'] = array( 
		'name' => __('Resizable Column', 'dt_themes') ,
		'type' => 'column',
	);

$dtthemes_columns['fullwidth_section'] = array( 
	'name' => __('Fullwidth Section', 'dt_themes'),
	'type' => 'section',
	'options' => array(
		'backgroundcolor' => array(
			'title' => __('Background Color', 'dt_themes'),
			'type' => 'colorpicker',
			'default_value' => ''
		),
		'backgroundimage' => array(
			'title' => __('Background Image', 'dt_themes'),
			'type' => 'upload',
			'default_value' => ''
		),
		'opacity' => array(
			'title' => __('Background Opacity', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'parallax' => array(
			'title' => __('Parallax Effect', 'dt_themes'),
			'type' => 'select',
			'options' => $yesorno,
			'default_value' => array('no')
		),
		'backgroundrepeat' => array(
			'title' => __('Background Repeat', 'dt_themes'),
			'type' => 'select',
			'options' => $bacground_repeat,
			'default_value' => array('no-repeat')
		),
		'backgroundposition' => array(
			'title' => __('Background Position', 'dt_themes'),
			'type' => 'select',
			'options' => $bacground_position,
			'default_value' => array('left top')
		),
		'paddingtop' => array(
			'title' => __('Padding Top', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'paddingbottom' => array(
			'title' => __('Padding Bottom', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'textcolor' => array(
			'title' => __('Text Color', 'dt_themes'),
			'type' => 'colorpicker',
			'default_value' => ''
		),
		'class' => array(
			'title' => __('CSS Class', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'disable_container' => array(
			'title' => __('Disable Container', 'dt_themes'),
			'type' => 'select',
			'options' => $yesorno,
			'default_value' => array('no')
		),
	)
);

/*  End of Columns definition */


/*  Start of General Modules */

$dt_modules['general']['doshortcode_anycontent'] = array(
	'name' => __('Add Any Content Here', 'dt_themes'),
	'tooltip' => 'Add any content using this module',
	'icon_class' => 'ico-anycontent',
	'options' => array(
		'acc_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true
		)
	)
);
											 
$dt_modules['general']['doshortcode_accordion_framed'] = array(
	'name' => __('Accordion Framed', 'dt_themes'),
	'tooltip' => 'Add Accordion Framed Module',
	'icon_class' => 'ico-accordion',
	'options' => array(
		'acc_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '[dt_sc_accordion_group]<br>
							[dt_sc_toggle_framed title="Accordion 1"]<br>
							
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
							
							[/dt_sc_toggle_framed]<br>
							[dt_sc_toggle_framed title="Accordion 2"]<br>
							
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
							
							[/dt_sc_toggle_framed]<br>
							[dt_sc_toggle_framed title="Accordion 3"]<br>
							
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
							
							[/dt_sc_toggle_framed]<br>
						[/dt_sc_accordion_group]'
		)
	)
);

$dt_modules['general']['doshortcode_accordion_default'] = array(
	'name' => __('Accordion Default', 'dt_themes'),
	'tooltip' => 'Add Accordion Default Module',
	'icon_class' => 'ico-accordion',
	'options' => array(
		'acc_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '[dt_sc_accordion_group]<br>
							[dt_sc_toggle title="Accordion 1"]<br>
							
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
							
							[/dt_sc_toggle]<br>
							[dt_sc_toggle title="Accordion 2"]<br>
							
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
							
							[/dt_sc_toggle]<br>
							[dt_sc_toggle title="Accordion 3"]<br>
							
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
							
							[/dt_sc_toggle]<br>
						[/dt_sc_accordion_group]'
		)
	)
);


$dt_modules['general']['titled_box'] = array(
	'name' => __('Titled Box', 'dt_themes'),
	'tooltip' => 'Add titled box and different types of message box',
	'icon_class' => 'ico-box',
	'options' => array(
		'type' => array(
			'title' => __('Type', 'dt_themes'),
			'type' => 'select',
			'options' => $box_types,
			'default_value' => array('titled-box')
		),
		'title' => array(
			'title' => __('Title', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Title Comes Here'
		),
		'icon' => array(
			'title' => __('Fontawesome Icon', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'fa-cogs'
		),
		'variation' => array(
			'title' => __('Variation', 'dt_themes'),
			'type' => 'select',
			'options' => $variations,
			'default_value' => array()
		),
		'box_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
		)
	)
);

$dt_modules['general']['button'] = array(
	'name' => __('Button', 'dt_themes'),
	'tooltip' => 'Add Button',
	'icon_class' => 'ico-button',
	'options' => array(
		'type' => array(
			'title' => __('Style', 'dt_themes'),
			'type' => 'select',
			'options' => $button_style,
			'default_value' => array('with-icon')
		),
		'icon' => array(
			'title' => __('Icon', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'fa-upload'
		),
		'link' => array(
			'title' => __('Link', 'dt_themes'),
			'type' => 'text',
			'default_value' => '#'
		),
		'size' => array(
			'title' => __('Size', 'dt_themes'),
			'type' => 'select',
			'options' => $button_size,
			'default_value' => array('medium')
		),
		'bgcolor' => array(
			'title' => __('Background Color', 'dt_themes'),
			'type' => 'colorpicker'
		),
		'variation' => array(
			'title' => __('Variation', 'dt_themes'),
			'type' => 'select',
			'options' => $variations,
			'default_value' => array()
		),
		'textcolor' => array(
			'title' => __('Text Color', 'dt_themes'),
			'type' => 'colorpicker'
		),
		'target' => array(
			'title' => __('Target', 'dt_themes'),
			'type' => 'select',
			'options' => $page_targets,
			'default_value' => array('_blank')
		),
		'class' => array(
			'title' => __('Class', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'content' => array(
			'title' => __('Title', 'dt_themes'),
			'type' => 'text',
			'is_content' => true,
			'default_value' => 'Sample Button'
		),
	)
);

$dt_modules['general']['blockquote'] = array(
	'name' => __('Blockquote', 'dt_themes'),
	'tooltip' => 'Add Blockquote',
	'icon_class' => 'ico-blockquote',
	'options' => array(
		'type' => array(
			'title' => __('Type', 'dt_themes'),
			'type' => 'select',
			'options' => $blocquote_types,
			'default_value' => array('type1')
		),
		'align' => array(
			'title' => __('Align', 'dt_themes'),
			'type' => 'select',
			'options' => $align,
			'default_value' => array('left')
		),
		'cite' => array(
			'title' => __('Cite', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'blockquote_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
		)
	)
);

$dt_modules['general']['pullquote'] = array(
	'name' => __('Pullquote', 'dt_themes'),
	'tooltip' => 'Add different types of pullquotes',
	'icon_class' => 'ico-quote',
	'options' => array(
		'type' => array(
			'title' => __('Type', 'dt_themes'),
			'type' => 'select',
			'options' => $pullquote_types,
			'default_value' => array('pullquote1')
		),
		'align' => array(
			'title' => __('Align', 'dt_themes'),
			'type' => 'select',
			'options' => $align,
			'default_value' => array('left')
		),
		'pq_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
		)
	)
);

$dt_modules['general']['tooltip'] = array(
	'name' => __('Tooltip', 'dt_themes'),
	'tooltip' => 'Add tooltip with different positions',
	'icon_class' => 'ico-pullquote',
	'options' => array(
		'position' => array(
			'title' => __('Position', 'dt_themes'),
			'type' => 'select',
			'options' => $tooltip_positions,
			'default_value' => array('top')
		),
		'tooltip' => array(
			'title' => __('Tooltip Text', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Consectetur adipisicing elit'
		),
		'href' => array(
			'title' => __('Link', 'dt_themes'),
			'type' => 'text',
			'default_value' => '#'
		),
		'target' => array(
			'title' => __('Target', 'dt_themes'),
			'type' => 'select',
			'options' => $page_targets,
			'default_value' => array('_blank')
		),
		'tp_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'text',
			'is_content' => true,
			'default_value' => 'Lorem ipsum'
		)
	)
);

$dt_modules['general']['callout_box'] = array(
	'name' => __('Callout Box without Icon', 'dt_themes'),
	'tooltip' => 'Add the callout box here',
	'icon_class' => 'ico-callout',
	'options' => array(
		'type' => array(
			'title' => __('Type', 'dt_themes'),
			'type' => 'select',
			'options' => $callout_box_types,
			'default_value' => array('type1')
		),
		'link' => array(
			'title' => __('Link', 'dt_themes'),
			'type' => 'text',
			'default_value' => '#'
		),
		'button_text' => array(
			'title' => __('Button Label', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Purchase Now'
		),
		
		'target' => array(
			'title' => __('Target', 'dt_themes'),
			'type' => 'select',
			'options' => $page_targets,
			'default_value' => array('_blank')
		),
		'cb_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => "<h4>Our Technological services has been improved vastly</h4><h5>Come lets stand out of crowd and be unique in our style</h5>"
		)
	)
);

$dt_modules['general']['callout_box_with_icon'] = array(
	'name' => __('Callout Box With Icon', 'dt_themes'),
	'tooltip' => 'Add the callout box here',
	'icon_class' => 'ico-callout',
	'options' => array(
		'type' => array(
			'title' => __('Type', 'dt_themes'),
			'type' => 'select',
			'options' => $callout_box_types,
			'default_value' => array('type1')
		),
		'icon' => array(
			'title' => __('Icon', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'fa-shield'
		),
		'link' => array(
			'title' => __('Link', 'dt_themes'),
			'type' => 'text',
			'default_value' => '#'
		),
		'button_text' => array(
			'title' => __('Button Label', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Purchase Now'
		),
		
		'target' => array(
			'title' => __('Target', 'dt_themes'),
			'type' => 'select',
			'options' => $page_targets,
			'default_value' => array('_blank')
		),
		'cb_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => "<h4>Humanity- An Ultimate Theme for Education and Charity Trust</h4><h5>Come lets stand out of crowd and be unique in our style</h5>"
		)
	)
);



$dt_modules['general']['fancy_ol'] = array(
	'name' => __('Ordered Lists', 'dt_themes'),
	'tooltip' => 'Add items in ordered list',
	'icon_class' => 'ico-orderedlists',
	'options' => array(
		'style' => array(
			'title' => __('Style', 'dt_themes'),
			'type' => 'select',
			'options' => $oltypes,
			'default_value' => array('decimal')
		),
		'variation' => array(
			'title' => __('Variation', 'dt_themes'),
			'type' => 'select',
			'options' => $variations,
			'default_value' => array()
		),
		'ol_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '<ol>
							<li>Lorem ipsum dolor sit</li>
							<li>Praesent convallis nibh</li>
							<li>Nullam ac sapien sit</li>
							<li>Phasellus auctor augue</li>
						</ol>'
		)
	)
);

$dt_modules['general']['fancy_ul'] = array(
	'name' => __('Unordered Lists', 'dt_themes'),
	'tooltip' => 'Add items in unordered lists',
	'icon_class' => 'ico-unorderedlists',
	'options' => array(
		'style' => array(
			'title' => __('Style', 'dt_themes'),
			'type' => 'select',
			'options' => $ultypes,
			'default_value' => array('arrow')
		),
		'variation' => array(
			'title' => __('Variation', 'dt_themes'),
			'type' => 'select',
			'options' => $variations,
			'default_value' => array()
		),
		'ul_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '<ul>
							<li>Lorem ipsum dolor sit</li>
							<li>Praesent convallis nibh</li>
							<li>Nullam ac sapien sit</li>
							<li>Phasellus auctor augue</li>
						</ul>'
		)
	)
);

$dt_modules['general']['pricing_table'] = array(
	'name' => __('Pricing Table', 'dt_themes'),
	'tooltip' => 'Add pricing table',
	'icon_class' => 'ico-pricingtable',
	'options' => array(
		'type' => array(
			'title' => __('Type', 'dt_themes'),
			'type' => 'select',
			'options' => $pricingtable_types,
			'default_value' => array('type1')
		),
		'ptclass' => array(
			'title' => __('Class', 'dt_themes'),
			'type' => 'text'
		),
		'pt_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => "[dt_sc_one_third first data_animation='fadeInUp']
								[dt_sc_pricing_table_item heading='Heading' button_text='Buy Now' button_icon='check-circle-o' button_link='#' price='$15' per='month' class='' selected]
								<ul>
									<li>Text</li>
									<li>Text</li>
									<li>Text</li>
								</ul>
								[/dt_sc_pricing_table_item]
								[/dt_sc_one_third]
								[dt_sc_one_third data_animation='fadeInUp']
								[dt_sc_pricing_table_item heading='Heading' button_text='Buy Now' button_icon='check-circle-o' button_link='#' price='$15' per='month' class='' ]
								<ul>
									<li>Text</li>
									<li>Text</li>
									<li>Text</li>
								</ul>
								[/dt_sc_pricing_table_item]
								[/dt_sc_one_third]
								[dt_sc_one_third data_animation='fadeInUp']
								[dt_sc_pricing_table_item heading='Heading' button_text='Buy Now' button_icon='check-circle-o' button_link='#' price='$15' per='month' class='' ]
								<ul>
									<li>Text</li>
									<li>Text</li>
									<li>Text</li>
								</ul>
								[/dt_sc_pricing_table_item]
								[/dt_sc_one_third]"
		)
	)
);

$dt_modules['general']['doshortcode_progressbartype1'] = array(
	'name' => __('Progress Bar-Type1', 'dt_themes'),
	'tooltip' => 'Add different types of progres bar',
	'icon_class' => 'ico-progressbar',
	'options' => array(
		'th_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '[dt_sc_progressbar value="45" type="type1"] consectetur [/dt_sc_progressbar]'
		)
	)
);

$dt_modules['general']['doshortcode_progressbartype2'] = array(
	'name' => __('Progress Bar-Type2', 'dt_themes'),
	'tooltip' => 'Add different types of progres bar',
	'icon_class' => 'ico-progressbar',
	'options' => array(
		'th_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '[dt_sc_progressbar value="45" type="type2"] consectetur [/dt_sc_progressbar]'
		)
	)
);

$dt_modules['general']['doshortcode_progressbartype3'] = array(
	'name' => __('Progress Bar-Type3', 'dt_themes'),
	'tooltip' => 'Add different types of progres bar',
	'icon_class' => 'ico-progressbar',
	'options' => array(
		'th_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '[dt_sc_progressbar value="45" type="type3"] consectetur [/dt_sc_progressbar]'
		)
	)
);

$dt_modules['general']['doshortcode_progressbartype4'] = array(
	'name' => __('Progress Bar-Type4', 'dt_themes'),
	'tooltip' => 'Add different types of progres bar',
	'icon_class' => 'ico-progressbar',
	'options' => array(
		'th_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '[dt_sc_progressbar value="45" type="type4"] consectetur [/dt_sc_progressbar]'
		)
	)
);


$dt_modules['general']['doshortcode_tabs_horizontal'] = array(
	'name' => __('Tabs Horizontal', 'dt_themes'),
	'tooltip' => 'Add horizontal tabs',
	'icon_class' => 'ico-tabs',
	'options' => array(
		'th_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '[dt_sc_tabs_horizontal data_animation="fadeInUp"]<br>
									[dt_sc_tab title="Tab1" font_awesome_icon="fa-pencil"]<br>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
									[/dt_sc_tab]<br>
									[dt_sc_tab title="Tab2" font_awesome_icon="fa-unlock-alt" ]<br>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
									[/dt_sc_tab]<br>
									[dt_sc_tab title="Tab3" font_awesome_icon="fa-apple" ]<br>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
									[/dt_sc_tab]<br>
								[/dt_sc_tabs_horizontal]'
		)
	)
);

$dt_modules['general']['doshortcode_tabs_vertical'] = array(
	'name' => __('Tabs Vertical', 'dt_themes'),
	'tooltip' => 'Add vertical tabs',
	'icon_class' => 'ico-tabs',
	'options' => array(
		'tv_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '[dt_sc_tabs_vertical data_animation="fadeInUp"]<br>
									[dt_sc_tab title="Tab1" font_awesome_icon="fa-pencil"]<br>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
									[/dt_sc_tab]<br>
									[dt_sc_tab title="Tab2" font_awesome_icon="fa-unlock-alt" ]<br>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
									[/dt_sc_tab]<br>
									[dt_sc_tab title="Tab3" font_awesome_icon="fa-apple" ]<br>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
									[/dt_sc_tab]<br>
								[/dt_sc_tabs_vertical]'
		)
	)
);

$dt_modules['general']['doshortcode_toggledefault'] = array(
	'name' => __('Toggle Default', 'dt_themes'),
	'tooltip' => 'Add default toggles',
	'icon_class' => 'ico-toggle',
	'options' => array(
		'td_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '[dt_sc_toggle title="Toggle 1"]<br>
							
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
							
							[/dt_sc_toggle]<br>
							[dt_sc_toggle title="Toggle 2"]<br>
							
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
							
							[/dt_sc_toggle]<br>
							[dt_sc_toggle title="Toggle 3"]<br>
							
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
							
						[/dt_sc_toggle]'
		)
	)
);

$dt_modules['general']['doshortcode_toggleframed'] = array(
	'name' => __('Toggle Framed', 'dt_themes'),
	'tooltip' => 'Add framed toggles',
	'icon_class' => 'ico-toggle',
	'options' => array(
		'tf_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '[dt_sc_toggle_framed title="Toggle 1"]<br>
							
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
							
							[/dt_sc_toggle_framed]<br>
							[dt_sc_toggle_framed title="Toggle 2"]<br>
							
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
							
							[/dt_sc_toggle_framed]<br>
							[dt_sc_toggle_framed title="Toggle 3"]<br>
							
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
							
						[/dt_sc_toggle_framed]'
		)
	)
);

$dt_modules['general']['doshortcode_clients_carousel'] = array(
	'name' => __('Clients Carousel', 'dt_themes'),
	'tooltip' => __('Use this module to add clients carousel', 'dt_themes'),
	'icon_class' => 'ico-clients',
	'options' => array(
		'cc_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '[dt_sc_clients_carousel data_animation="fadeInUp"]
									<ul>
										<li><a href="#"><img title="Client 1" src="http://placehold.it/232x61" alt="Client 1" /></a></li>
										<li><a href="#"><img title="Client 2" src="http://placehold.it/232x61" alt="Client 2" /></a></li>
										<li><a href="#"><img title="Client 3" src="http://placehold.it/232x61" alt="Client 3" /></a></li>
										<li><a href="#"><img title="Client 4" src="http://placehold.it/232x61" alt="Client 4" /></a></li>
										<li><a href="#"><img title="Client 5" src="http://placehold.it/232x61" alt="Client 5" /></a></li>
										<li><a href="#"><img title="Client 6" src="http://placehold.it/232x61" alt="Client 6" /></a></li>
										<li><a href="#"><img title="Client 7" src="http://placehold.it/232x61" alt="Client 7" /></a></li>
										<li><a href="#"><img title="Client 8" src="http://placehold.it/232x61" alt="Client 8" /></a></li>
									</ul>
								[/dt_sc_clients_carousel]'
		)
	)
);

/*  End of General Modules */


/*  Start of Unique Modules */

$dt_modules['unique']['donutchart_small'] = array(
	'name' => __('Donut Chart - Small', 'dt_themes'),
	'tooltip' => __('Use this module to add small donutchart', 'dt_themes'),
	'icon_class' => 'ico-donutchart',
	'options' => array(
		'title' => array(
			'title' => __('Title', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Lorem'
		),
		'bgcolor' => array(
			'title' => __('Background Color', 'dt_themes'),
			'type' => 'colorpicker',
			'default_value' => '#999999'
		),
		'fgcolor' => array(
			'title' => __('Foreground Color', 'dt_themes'),
			'type' => 'colorpicker',
			'default_value' => '#000000'
		),
		'percent' => array(
			'title' => __('Percent', 'dt_themes'),
			'type' => 'text',
			'default_value' => '40'
		),
	)
);

$dt_modules['unique']['donutchart_medium'] = array(
	'name' => __('Donut Chart - Medium', 'dt_themes'),
	'tooltip' => __('Use this module to add medium donutchart', 'dt_themes'),
	'icon_class' => 'ico-donutchart',
	'options' => array(
		'title' => array(
			'title' => __('Title', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Lorem'
		),
		'bgcolor' => array(
			'title' => __('Background Color', 'dt_themes'),
			'type' => 'colorpicker',
			'default_value' => '#999999'
		),
		'fgcolor' => array(
			'title' => __('Foreground Color', 'dt_themes'),
			'type' => 'colorpicker',
			'default_value' => '#000000'
		),
		'percent' => array(
			'title' => __('Percent', 'dt_themes'),
			'type' => 'text',
			'default_value' => '40'
		),
	)
);

$dt_modules['unique']['donutchart_large'] = array(
	'name' => __('Donut Chart - Large', 'dt_themes'),
	'tooltip' => __('Use this module to add large donutchart', 'dt_themes'),
	'icon_class' => 'ico-donutchart',
	'options' => array(
		'title' => array(
			'title' => __('Title', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Lorem'
		),
		'bgcolor' => array(
			'title' => __('Background Color', 'dt_themes'),
			'type' => 'colorpicker',
			'default_value' => '#999999'
		),
		'fgcolor' => array(
			'title' => __('Foreground Color', 'dt_themes'),
			'type' => 'colorpicker',
			'default_value' => '#000000'
		),
		'percent' => array(
			'title' => __('Percent', 'dt_themes'),
			'type' => 'text',
			'default_value' => '40'
		),
	)
);

$dt_modules['unique']['icon_box'] = array(
	'name' => __('Icon Box', 'dt_themes'),
	'tooltip' => __('Use this module to add icon box', 'dt_themes'),
	'icon_class' => 'ico-iconbox',
	'options' => array(
		'type' => array(
			'title' => __('Types', 'dt_themes'),
			'type' => 'select',
			'options' => $icon_box_types,
			'default_value' => array('type1')
		),
		'fontawesome_icon' => array(
			'title' => __('Fontawesome Icon', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'magic'
		),
		'title' => array(
			'title' => __('Title', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Title Comes Here'
		),
		'link' => array(
			'title' => __('Link', 'dt_themes'),
			'type' => 'text',
			'default_value' => '#'
		),
		'ib_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras cursus sollicitudin nunc nec rhoncus.'
		)
	)
);

$dt_modules['unique']['doshortcode_iconboxcarousel'] = array(
	'name' => __('Icon Box Carousel', 'dt_themes'),
	'tooltip' => __('Use this module to add icon box carousel', 'dt_themes'),
	'icon_class' => 'ico-iconbox',
	'options' => array(
		'tf_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '[dt_sc_icon_box_carousel data_animation="fadeInUp"]<br>
									[dt_sc_one_fourth first]<br>
										[dt_sc_icon_box type ="type4" fontawesome_icon="home" title="Title Comes Here" link="#"]<br>
									
											<p> Nunc at pretium est curabitur commodo leac est venenatis egestas sed aliquet auguevelit.</p><br>
									
										[/dt_sc_icon_box]<br>
									[/dt_sc_one_fourth]<br>
									[dt_sc_one_fourth]<br>
										[dt_sc_icon_box type ="type4" fontawesome_icon="home" title="Title Comes Here" link="#"]<br>
									
											<p> Nunc at pretium est curabitur commodo leac est venenatis egestas sed aliquet auguevelit.</p><br>
									
										[/dt_sc_icon_box]<br>
									[/dt_sc_one_fourth]<br>
									[dt_sc_one_fourth]<br>
										[dt_sc_icon_box type ="type4" fontawesome_icon="home" title="Title Comes Here" link="#"]<br>
									
											<p> Nunc at pretium est curabitur commodo leac est venenatis egestas sed aliquet auguevelit.</p><br>
									
										[/dt_sc_icon_box]<br>
									[/dt_sc_one_fourth]<br>
									[dt_sc_one_fourth]<br>
										[dt_sc_icon_box type ="type4" fontawesome_icon="home" title="Title Comes Here" link="#"]<br>
									
											<p> Nunc at pretium est curabitur commodo leac est venenatis egestas sed aliquet auguevelit.</p><br>
									
										[/dt_sc_icon_box]<br>
									[/dt_sc_one_fourth]<br>
									[dt_sc_one_fourth first]<br>
										[dt_sc_icon_box type ="type4" fontawesome_icon="home" title="Title Comes Here" link="#"]<br>
									
											<p> Nunc at pretium est curabitur commodo leac est venenatis egestas sed aliquet auguevelit.</p><br>
									
										[/dt_sc_icon_box]<br>
									[/dt_sc_one_fourth]<br>
									[dt_sc_one_fourth]<br>
										[dt_sc_icon_box type ="type4" fontawesome_icon="home" title="Title Comes Here" link="#"]<br>
									
											<p> Nunc at pretium est curabitur commodo leac est venenatis egestas sed aliquet auguevelit.</p><br>
									
										[/dt_sc_icon_box]<br>
									[/dt_sc_one_fourth]<br>
									[dt_sc_one_fourth]<br>
										[dt_sc_icon_box type ="type4" fontawesome_icon="home" title="Title Comes Here" link="#"]<br>
									
											<p> Nunc at pretium est curabitur commodo leac est venenatis egestas sed aliquet auguevelit.</p><br>
									
										[/dt_sc_icon_box]<br>
									[/dt_sc_one_fourth]<br>
									[dt_sc_one_fourth]<br>
										[dt_sc_icon_box type ="type4" fontawesome_icon="home" title="Title Comes Here" link="#"]<br>
										
											<p> Nunc at pretium est curabitur commodo leac est venenatis egestas sed aliquet auguevelit.</p><br>
									
										[/dt_sc_icon_box]<br>
									[/dt_sc_one_fourth]<br>
								[/dt_sc_icon_box_carousel]'
		)
	)
);

$dt_modules['unique']['doshortcode_team'] = array(
	'name' => __('Team', 'dt_themes'),
	'tooltip' => __('Use this module to add member', 'dt_themes'),
	'icon_class' => 'ico-team',
	'options' => array(
		'tf_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '[dt_sc_team name="DesignThemes" role="Customer Support" image="http://placehold.it/274x322" twitter="#" facebook="#" instagram="#" dribbble="#"]<br>
									<p> We wont Express. But our Portfolios will! </p><br>
								[/dt_sc_team]'
		)
	)
);

$dt_modules['unique']['doshortcode_teamcarousel'] = array(
	'name' => __('Team Carousel', 'dt_themes'),
	'tooltip' => __('Use this module to add member', 'dt_themes'),
	'icon_class' => 'ico-team',
	'options' => array(
		'tf_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '[dt_sc_team_carousel data_animation="fadeInUp"]<br>
									[dt_sc_one_fourth first]<br>
										[dt_sc_team_type2 name="DesignThemes" role="Customer Support" image="http://placehold.it/274x322" twitter="#" facebook="#" instagram="#" dribbble="#"]<br>
										<p> We wont Express. But our Portfolios will! </p> <br>									
										[/dt_sc_team_type2]<br>
									[/dt_sc_one_fourth]<br>
									[dt_sc_one_fourth]<br>
										[dt_sc_team_type2 name="DesignThemes" role="Customer Support" image="http://placehold.it/274x322" twitter="#" facebook="#" instagram="#" dribbble="#"]<br>
											<p> We wont Express. But our Portfolios will! </p><br>
										[/dt_sc_team_type2]<br>
									[/dt_sc_one_fourth]<br>
									[dt_sc_one_fourth]<br>
										[dt_sc_team_type2 name="DesignThemes" role="Customer Support" image="http://placehold.it/274x322" twitter="#" facebook="#" instagram="#" dribbble="#"]<br>
											<p> We wont Express. But our Portfolios will! </p><br>
										[/dt_sc_team_type2]<br>
									[/dt_sc_one_fourth]<br>
									[dt_sc_one_fourth]<br>
										[dt_sc_team_type2 name="DesignThemes" role="Customer Support" image="http://placehold.it/274x322" twitter="#" facebook="#" instagram="#" dribbble="#"]		<br>							
											<p> We wont Express. But our Portfolios will! </p><br>
									
										[/dt_sc_team_type2]<br>
									[/dt_sc_one_fourth]<br>
									[dt_sc_one_fourth first]<br>
										[dt_sc_team_type2 name="DesignThemes" role="Customer Support" image="http://placehold.it/274x322" twitter="#" facebook="#" instagram="#" dribbble="#"]<br>
									
											<p> We wont Express. But our Portfolios will! </p><br>
									
										[/dt_sc_team_type2]<br>
									[/dt_sc_one_fourth]<br>
									[dt_sc_one_fourth]<br>
										[dt_sc_team_type2 name="DesignThemes" role="Customer Support" image="http://placehold.it/274x322" twitter="#" facebook="#" instagram="#" dribbble="#"]<br>
									
											<p> We wont Express. But our Portfolios will! </p><br>
									
										[/dt_sc_team_type2]<br>
									[/dt_sc_one_fourth]<br>
									[dt_sc_one_fourth]<br>
										[dt_sc_team_type2 name="DesignThemes" role="Customer Support" image="http://placehold.it/274x322" twitter="#" facebook="#" instagram="#" dribbble="#"]<br>
									
											<p> We wont Express. But our Portfolios will! </p><br>
									
										[/dt_sc_team_type2]<br>
									[/dt_sc_one_fourth]<br>
									[dt_sc_one_fourth]<br>
										[dt_sc_team_type2 name="DesignThemes" role="Customer Support" image="http://placehold.it/274x322" twitter="#" facebook="#" instagram="#" dribbble="#"]<br>
									
											<p> We wont Express. But our Portfolios will! </p><br>
									
										[/dt_sc_team_type2]<br>
									[/dt_sc_one_fourth]<br>
								[/dt_sc_team_carousel]'
		)
	)
);


$dt_modules['unique']['doshortcode_testimonial_carousel'] = array(
	'name' => __('Testimonial Carousel', 'dt_themes'),
	'tooltip' => __('Use this module to add testimonial carousel', 'dt_themes'),
	'icon_class' => 'ico-testimonial',
	'options' => array(
		'tmc_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '[dt_sc_testimonial_carousel data_animation="fadeInUp"]<br>
									<ul>
										<li>[dt_sc_testimonial image="http://placehold.it/100" cite="John Doe" role="Cambridge Telcecom"]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.[/dt_sc_testimonial]</li>
										<li>[dt_sc_testimonial image="http://placehold.it/100" cite="John Doe" role="Cambridge Telcecom"]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.[/dt_sc_testimonial]</li>
										<li>[dt_sc_testimonial image="http://placehold.it/100" cite="John Doe" role="Cambridge Telcecom"]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.[/dt_sc_testimonial]</li>
									</ul>
								[/dt_sc_testimonial_carousel]'
		)
	)
);

$dt_modules['unique']['doshortcode_counter'] = array(
	'name' => __('Counter', 'dt_themes'),
	'tooltip' => __('You can add counter inside this module', 'dt_themes'),
	'icon_class' => 'ico-counter',
	'options' => array(
		'cic_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '[dt_sc_counter image="http://placehold.it/67x49" title="Projects" number="345" /]'
		)
	)
);

$dt_modules['unique']['doshortcode_newsletter'] = array(
	'name' => __('News Letter', 'dt_themes'),
	'tooltip' => __('You can add newsletter inside this module', 'dt_themes'),
	'icon_class' => 'ico-newsletter',
	'options' => array(
		'cic_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '[dt_sc_news_letter data_animation="stretchLeft" data_animation2="stretchRight" description="Feel free to place your Mail_ID and Subscribe to our Newsletter here. So that, you can receive our exiting Updates and Offers with no wait!" /]'
		)
	)
);

$dt_modules['unique']['recent_portfolio'] = array(
	'name' => __('Recent Portfolio', 'dt_themes'),
	'tooltip' => __('You can add recent portfolio inside this module', 'dt_themes'),
	'icon_class' => 'ico-portfolio',
	'options' => array(
		'count' => array(
			'title' => __('Count', 'dt_themes'),
			'type' => 'text',
			'default_value' => '4'
		),
		'column' => array(
			'title' => __('Column', 'dt_themes'),
			'type' => 'select',
			'options' => $recent_portfolio_column_types,
			'default_value' => array('4')
		),
		'excerpt_length' => array(
			'title' => __('Excerpt Length', 'dt_themes'),
			'type' => 'text',
			'default_value' => '20'
		),
		'style' => array(
			'title' => __('Style', 'dt_themes'),
			'type' => 'select',
			'options' => $recent_portfolio_style,
			'default_value' => array('no-space')
		),
		'data_animation' => array(
			'title' => __('Animation', 'dt_themes'),
			'type' => 'select',
			'options' => $dt_animation_types,
			'default_value' => array('fadeInUp')
		),
	)
);

$dt_modules['unique']['address'] = array(
	'name' => __('Address', 'dt_themes'),
	'tooltip' => __('Use this module to add address', 'dt_themes'),
	'icon_class' => 'ico-address',
	'options' => array(
		'icon' => array(
			'title' => __('Icon', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'map-marker'
		),
		'address_text' => array(
			'title' => __('Address Text', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Address: '
		),
		'address_details' => array(
			'title' => __('Address Details', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'No-58 A,East Madison St, Baltimore, MD, USA'
		),
	)
);

$dt_modules['unique']['phone'] = array(
	'name' => __('Phone', 'dt_themes'),
	'tooltip' => __('Use this module to add phone number alone', 'dt_themes'),
	'icon_class' => 'ico-phone',
	'options' => array(
		'icon' => array(
			'title' => __('Icon', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'phone'
		),
		'phone_text' => array(
			'title' => __('Phone Text', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Phone: '
		),
		'phone' => array(
			'title' => __('Phone', 'dt_themes'),
			'type' => 'text',
			'default_value' => '+1 200 258 2145'
		),		
	)
);

$dt_modules['unique']['fax'] = array(
	'name' => __('Fax', 'dt_themes'),
	'tooltip' => __('Use this module to add fax alone', 'dt_themes'),
	'icon_class' => 'ico-fax',
	'options' => array(
		'icon' => array(
			'title' => __('Icon', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'paperclip'
		),
		'fax_text' => array(
			'title' => __('Fax Text', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Fax: '
		),
		'fax' => array(
			'title' => __('Fax', 'dt_themes'),
			'type' => 'text',
			'default_value' => '+1 100 458 2345'
		),		
	)
);

$dt_modules['unique']['email'] = array(
	'name' => __('Email', 'dt_themes'),
	'tooltip' => __('Use this module to add email alone', 'dt_themes'),
	'icon_class' => 'ico-email',
	'options' => array(
		'icon' => array(
			'title' => __('Icon', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'envelope'
		),
		'email_text' => array(
			'title' => __('Email Text', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Email: '
		),
		'emailid' => array(
			'title' => __('Email', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'yourname@somemail.com'
		),		
	)
);

$dt_modules['unique']['web'] = array(
	'name' => __('Web', 'dt_themes'),
	'tooltip' => __('Use this module to add web alone', 'dt_themes'),
	'icon_class' => 'ico-web',
	'options' => array(
		'icon' => array(
			'title' => __('Icon', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'globe'
		),
		'web_text' => array(
			'title' => __('Web Text', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Web: '
		),
		'url' => array(
			'title' => __('URL', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'http://www.google.com'
		),		
	)
);

$dt_modules['unique']['twitter'] = array(
	'name' => __('Twitter', 'dt_themes'),
	'tooltip' => __('Use this module to list twitter feed', 'dt_themes'),
	'icon_class' => 'ico-twitter',
	'options' => array(
		'username' => array(
			'title' => __('Username', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'consumer_key' => array(
			'title' => __('Consumer Key', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'consumer_secret' => array(
			'title' => __('Consumer Secret', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'user_token' => array(
			'title' => __('User Token', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'user_secret' => array(
			'title' => __('User Secret', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'count' => array(
			'title' => __('Count', 'dt_themes'),
			'type' => 'select',
			'options' => $twitter_counts,
			'default_value' => array(4)
		),
		'data_animation' => array(
			'title' => __('Animation', 'dt_themes'),
			'type' => 'select',
			'options' => $dt_animation_types,
			'default_value' => array('pullDown')
		),
		'data_animation_delay' => array(
			'title' => __('Animation Delay', 'dt_themes'),
			'type' => 'text',
			'default_value' => '200'
		),
		
	)
);

$dt_modules['unique']['doshortcode_social_links'] = array(
	'name' => __('Social Links', 'dt_themes'),
	'tooltip' => __('Use this module to add social items', 'dt_themes'),
	'icon_class' => 'ico-sociallinks',
	'options' => array(
		'sl_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '[dt_sc_social_links twitter="#" facebook="#" google="#" linkedin="#" youtube="#" type="type1" /]'
		)
	)
);

/*  End of Unique Modules */

/*  Start of Others Modules */

$dt_modules['others']['h1'] = array(
	'name' => __('Heading 1', 'dt_themes'),
	'tooltip' => __('Use this module to add heading 1', 'dt_themes'),
	'icon_class' => 'ico-headings',
	'options' => array(
		'text' => array(
			'title' => __('Text', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Lorem'
		),		
		'data_animation' => array(
			'title' => __('Animation', 'dt_themes'),
			'type' => 'select',
			'options' => $dt_animation_types,
			'default_value' => array('pullDown')
		),		
		'class' => array(
			'title' => __('Class', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),		
	)
);

$dt_modules['others']['h2'] = array(
	'name' => __('Heading 2', 'dt_themes'),
	'tooltip' => __('Use this module to add heading 2', 'dt_themes'),
	'icon_class' => 'ico-headings',
	'options' => array(
		'text' => array(
			'title' => __('Text', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Lorem'
		),		
		'data_animation' => array(
			'title' => __('Animation', 'dt_themes'),
			'type' => 'select',
			'options' => $dt_animation_types,
			'default_value' => array('pullDown')
		),		
		'class' => array(
			'title' => __('Class', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
	)
);

$dt_modules['others']['h3'] = array(
	'name' => __('Heading 3', 'dt_themes'),
	'tooltip' => __('Use this module to add heading 3', 'dt_themes'),
	'icon_class' => 'ico-headings',
	'options' => array(
		'text' => array(
			'title' => __('Text', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Lorem'
		),		
		'data_animation' => array(
			'title' => __('Animation', 'dt_themes'),
			'type' => 'select',
			'options' => $dt_animation_types,
			'default_value' => array('pullDown')
		),		
		'class' => array(
			'title' => __('Class', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
	)
);

$dt_modules['others']['h4'] = array(
	'name' => __('Heading 4', 'dt_themes'),
	'tooltip' => __('Use this module to add heading 4', 'dt_themes'),
	'icon_class' => 'ico-headings',
	'options' => array(
		'text' => array(
			'title' => __('Text', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Lorem'
		),		
		'data_animation' => array(
			'title' => __('Animation', 'dt_themes'),
			'type' => 'select',
			'options' => $dt_animation_types,
			'default_value' => array('pullDown')
		),		
		'class' => array(
			'title' => __('Class', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
	)
);

$dt_modules['others']['h5'] = array(
	'name' => __('Heading 5', 'dt_themes'),
	'tooltip' => __('Use this module to add heading 5', 'dt_themes'),
	'icon_class' => 'ico-headings',
	'options' => array(
		'text' => array(
			'title' => __('Text', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Lorem'
		),		
		'data_animation' => array(
			'title' => __('Animation', 'dt_themes'),
			'type' => 'select',
			'options' => $dt_animation_types,
			'default_value' => array('pullDown')
		),		
		'class' => array(
			'title' => __('Class', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
	)
);

$dt_modules['others']['h6'] = array(
	'name' => __('Heading 6', 'dt_themes'),
	'tooltip' => __('Use this module to add heading 6', 'dt_themes'),
	'icon_class' => 'ico-headings',
	'options' => array(
		'text' => array(
			'title' => __('Text', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Lorem'
		),		
		'data_animation' => array(
			'title' => __('Animation', 'dt_themes'),
			'type' => 'select',
			'options' => $dt_animation_types,
			'default_value' => array('pullDown')
		),		
		'class' => array(
			'title' => __('Class', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
	)
);

$dt_modules['others']['bordered_h1'] = array(
	'name' => __('Bordered Heading 1', 'dt_themes'),
	'tooltip' => __('Use this module to add bordered heading 1', 'dt_themes'),
	'icon_class' => 'ico-border-heading',
	'options' => array(
		'text' => array(
			'title' => __('Text', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Lorem'
		),		
		'class' => array(
			'title' => __('Class', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
	)
);

$dt_modules['others']['bordered_h2'] = array(
	'name' => __('Bordered Heading 2', 'dt_themes'),
	'tooltip' => __('Use this module to add bordered heading 2', 'dt_themes'),
	'icon_class' => 'ico-border-heading',
	'options' => array(
		'text' => array(
			'title' => __('Text', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Lorem'
		),		
		'class' => array(
			'title' => __('Class', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
	)
);

$dt_modules['others']['bordered_h3'] = array(
	'name' => __('Bordered Heading 3', 'dt_themes'),
	'tooltip' => __('Use this module to add bordered heading 3', 'dt_themes'),
	'icon_class' => 'ico-border-heading',
	'options' => array(
		'text' => array(
			'title' => __('Text', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Lorem'
		),		
		'class' => array(
			'title' => __('Class', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
	)
);

$dt_modules['others']['bordered_h4'] = array(
	'name' => __('Bordered Heading 4', 'dt_themes'),
	'tooltip' => __('Use this module to add bordered heading 4', 'dt_themes'),
	'icon_class' => 'ico-border-heading',
	'options' => array(
		'text' => array(
			'title' => __('Text', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Lorem'
		),		
		'class' => array(
			'title' => __('Class', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
	)
);

$dt_modules['others']['bordered_h5'] = array(
	'name' => __('Bordered Heading 5', 'dt_themes'),
	'tooltip' => __('Use this module to add bordered heading 5', 'dt_themes'),
	'icon_class' => 'ico-border-heading',
	'options' => array(
		'text' => array(
			'title' => __('Text', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Lorem'
		),		
		'class' => array(
			'title' => __('Class', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
	)
);

$dt_modules['others']['bordered_h6'] = array(
	'name' => __('Bordered Heading 6', 'dt_themes'),
	'tooltip' => __('Use this module to add bordered heading 6', 'dt_themes'),
	'icon_class' => 'ico-border-heading',
	'options' => array(
		'text' => array(
			'title' => __('Text', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Lorem'
		),		
		'class' => array(
			'title' => __('Class', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
	)
);

$dt_modules['others']['clear'] = array(
	'name' => __('Clear', 'dt_themes'),
	'tooltip' => __('Add this module to add space between contents', 'dt_themes'),
	'icon_class' => 'ico-divider',
	'disable_resize' => true,
);

$dt_modules['others']['hr_border'] = array(
	'name' => __('Bordered Horizontal Rule', 'dt_themes'),
	'tooltip' => __('Use this module to add bordered horizontal rule', 'dt_themes'),
	'icon_class' => 'ico-divider',
	'disable_resize' => true,
);

$dt_modules['others']['hr_invisible'] = array(
	'name' => __('Whitespace', 'dt_themes'),
	'tooltip' => __('Use this module to add whitespace', 'dt_themes'),
	'icon_class' => 'ico-divider',
	'disable_resize' => true,
);

$dt_modules['others']['hr_invisible_toosmall'] = array(
	'name' => __('Whitespace Toosmall', 'dt_themes'),
	'tooltip' => __('Use this module to add too small whitespace', 'dt_themes'),
	'icon_class' => 'ico-divider',
	'disable_resize' => true,
);

$dt_modules['others']['hr_invisible_small'] = array(
	'name' => __('Whitespace Small', 'dt_themes'),
	'tooltip' => __('Use this module to add small whitespace', 'dt_themes'),
	'icon_class' => 'ico-divider',
	'disable_resize' => true,
);

$dt_modules['others']['hr_invisible_medium'] = array(
	'name' => __('Whitespace Medium', 'dt_themes'),
	'tooltip' => __('Use this module to add medium whitespace', 'dt_themes'),
	'icon_class' => 'ico-divider',
	'disable_resize' => true,
);

$dt_modules['others']['hr_invisible_large'] = array(
	'name' => __('Whitespace Large', 'dt_themes'),
	'tooltip' => __('Use this module to add large whitespace', 'dt_themes'),
	'icon_class' => 'ico-divider',
	'disable_resize' => true,
);
/*  End of Others Modules */
?>