scnShortcodeMeta = {
	attributes : [

			{
				label : "Twitter Username",
				id : "username",
				help : "The twitter username.",
			},
	
			{
				label : "Consumer Key",
				id : "consumer_key",
				help : "The twitter consumer key.",
			},
			{
				label : "Consumer Secret",
				id : "consumer_secret",
				help : "The twitter consumer secret.",
			},
			{
				label : "Access Token",
				id : "user_token",
				help : "The twitter access token.",
			},
			{
				label : "Access Token Secret",
				id : "user_secret",
				help : "The twitter access token secret.",
			},
			{
				label : "How many enteries do you want to show",
				id : 'count',
				help : 'Number of tweets to display.',
				controlType : "select-control",
				selectValues : [ 1,2,3,4,5,6,7,8,910,11,12,13,14,15,16,17,18,19,20],
				defaultValue : '4',
				defaultText : '4'
			},
			{
				label : 'Animation',
				id : 'data_animation',
				help : 'Choose one of animation effects.',
				controlType : "select-control",
				selectValues : [ 'None','flash','shake','bounce','tada','swing','wobble','pulse','flip','flipInX','flipOutX','flipInY','flipOutY','fadeIn','fadeInUp','fadeInDown','fadeInLeft','fadeInRight','fadeInUpBig','fadeInDownBig','fadeInLeftBig','fadeInRightBig','fadeOut','fadeOutUp','fadeOutDown','fadeOutLeft','fadeOutRight','fadeOutUpBig','fadeOutDownBig','fadeOutLeftBig','fadeOutRightBig','bounceIn','bounceInUp','bounceInDown','bounceInLeft','bounceInRight','bounceOut','bounceOutUp','bounceOutDown','bounceOutLeft','bounceOutRight','rotateIn','rotateInUpLeft','rotateInDownLeft','rotateInUpRight','rotateInDownRight','rotateOut','rotateOutUpLeft','rotateOutDownLeft','rotateOutUpRight','rotateOutDownRight','hinge','rollIn','rollOut','lightSpeedIn','lightSpeedOut'],
				defaultValue : 'None',
				defaultText : 'None'
			},
			{
				label : "Animation Delay",
				id : "data_animation_delay",
				help : "Enter animation delay.",
			},
			],
	defaultContent : "",
	shortcode : "dt_sc_twitter"

};