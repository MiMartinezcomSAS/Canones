scnShortcodeMeta = {
	attributes : [

			{
				label : "Position",
				id : "position",
				help : "Select which type of tooltip you would like to use.",
				controlType : "select-control",
				selectValues : [ 'top', 'right', 'bottom', 'left' ],
				defaultValue : 'top',
				defaultText : 'top'
			},

			{
				label : "Tooltip Text",
				id : "tooltip",
				help : 'Type out the tooltip content ,The content will display as tooltip.',
				controlType : "text-control"
			},
			{
				label : "Link",
				id : "href",
				help : 'Paste a URL here to use as a link for your button.',
				controlType : "text-control"
			},
			{
				label : "Target",
				id : 'target',
				help : 'Setting the target to _blank will open your page in a new tab when the reader clicks on the button.',
				controlType : "select-control",
				selectValues : [ '_blank', '_new', '_parent', '_self', '_top' ],
				defaultValue : '_blank',
				defaultText : '_blank (Default)'
			}],
	defaultContent : "lorem ipsum",
	shortcode : "dt_sc_tooltip"
};