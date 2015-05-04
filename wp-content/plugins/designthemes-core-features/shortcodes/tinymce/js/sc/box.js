scnShortcodeMeta = {
	attributes : [
			{
				label : "Type",
				id : "type",
				help : "Select which type of box you would like to use.",
				controlType : "select-control",
				selectValues : [ 'titled-box', 'error-box', 'warning-box',
						'success-box', 'info-box' ],
				defaultValue : 'medium',
				defaultText : 'medium (Default)'
			},

			{
				label : "Title",
				id : "title",
				help : 'Type out the title to use with your titled box. The title will display above the content. (* Applicable for titled box only )',
				controlType : "text-control"
			},

			{
				label : "Fontawesome Icon",
				id : "icon",
				help : 'Type out the fontawesome icon class to use with your titled box. (* Applicable for titled box only )',
				controlType : "text-control"
			},

			{
				label : 'Variation',
				id : 'variation',
				help : 'Choose one of our predefined colors to use with your list.',
				controlType : "select-control",
				selectValues : [ '','avocado','black','blue','blueiris','blueturquoise','brown','burntsienna','chillipepper','eggplant','electricblue','graasgreen','gray','green','orange','palebrown','pink','radiantorchid','red','skyblue','yellow','violet','emerald','wetasphalt'],
				defaultValue : '',
				defaultText : 'Select'
			},
			 ],
	defaultContent : "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra per inceptos himenaeos.,",
	shortcode : "dt_sc_titled_box"

};