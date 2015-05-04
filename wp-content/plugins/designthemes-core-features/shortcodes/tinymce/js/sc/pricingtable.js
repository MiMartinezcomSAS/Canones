scnShortcodeMeta = {
	attributes : [ {
		label : "Style",
		id : "type",
		help : "Select which type of pricing table you would like to use.",
		controlType : "select-control",
		selectValues : [ 'type1', 'type2' ],
		defaultValue : 'type1',
		defaultText : 'type1'
	}, {
		label : "Columns",
		id : "content",
		controlType : "column-control"
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
		label : "Class",
		id : "ptclass",
		help : 'You can add predefined class "type2" or custom class for this pricing table',
		controlType : "text-control"
	}
	 ],
	customMakeShortcode : function(b) {
		var a = b.data, type = b.type, ptclass = b.ptclass;
		var animation = b.data_animation;

		type = ' type =" '+type+'"';
		ptclass = ' class =" '+ptclass+'"';
		if(animation != 'None'){
			animation = 'data_animation="'+animation+'"';
		}else{
			animation = '';
		}

		if (!a)
			return "";
		b = a.numColumns;
		var c = a.content;
		a = [ "0", "one", "two", "three", "four", "five", 'six' ];
		var x = [ "0", "0", "half", "third", "fourth", "fifth", 'sixth' ];
		var f = x[b];
		c = c.split("|");
		var g = "";
		for ( var h in c) {
			var d = jQuery.trim(c[h]);
			if (d.length > 0) {
				var e = a[d.length] + '_' + f;
				if (b == 4 && d.length == 2)
					e = "one_half";

				var z = e;
				var selected = "";
				if (h == 0) {
					e += " first";
					selected = "selected";
				}

				g += "[dt_sc_"
						+ e + " " + animation
						+ "] "
						+ "<br>[dt_sc_pricing_table_item heading='Heading' button_text='Buy Now' button_icon='check-circle-o' button_link='#' price='$15' per='month' " + ptclass + " "
						+ selected + "]<br>" + "<ul>" + "<li>Text</li>"
						+ "<li>Text</li>" + "<li>Text</li>" + "</ul>"
						+ "[/dt_sc_pricing_table_item]<br>" + " [/dt_sc_" + z
						+ "] <br/>";
			}
		}

		return "[dt_sc_pricing_table " + type + "]<br>" + g + "<br>[/dt_sc_pricing_table]";
	}
};