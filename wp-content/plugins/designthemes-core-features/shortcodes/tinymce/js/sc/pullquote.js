scnShortcodeMeta = {
	attributes : [

			{
				label : "Type",
				id : "type",
				help : "",
				controlType : "select-control",
				selectValues : [ 'pullquote1' ,'pullquote2' ,'pullquote3','pullquote4','pullquote5','pullquote6'],
				defaultValue : 'pullquote1',
				defaultText : 'pullquote1'
			},

			{
				label : "Align",
				id : "align",
				help : "Set the alignment for your quote here.Your quote will float along the center, left or right hand sides depending on your choice.",
				controlType : "select-control",
				selectValues : [ 'left' ,'right' ,'center'],
				defaultValue : 'left',
				defaultText : 'left'
			},

	],
	defaultContent : "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac luctus ligula. Phasellus a ligula blandit",
	shortcode : "dt_sc_pullquote"
};