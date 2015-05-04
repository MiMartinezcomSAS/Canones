scnShortcodeMeta = {
	attributes : [ {
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
		label : "Image url",
		id : "image",
		help : 'Please enter counter image url',
		controlType : "text-control"
	},
	{
		label : "Title",
		id : "title",
		help : 'Type out the title to use with your counter box',
		controlType : "text-control"
	},
	{
		label : "Number",
		id : "number",
		help : 'Type out the number to count up',
		controlType : "text-control"
	},
	
	],
	customMakeShortcode : function(b) {
		var a = b.data, title = b.title, number = b.number, image = b.image;
		var animation = b.data_animation;
		
		if(image != '') image = ' image="'+image+'"'; else image = '';
		if(title != '') title = ' title="'+title+'"'; else title = '';
		if(number != '') number = ' number="'+number+'"'; else number = '';
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
				var chcnt = eval(h)+1;

				g += "[dt_sc_"
						+ e + " " + animation
						+ "] "
						+ "<br>[dt_sc_counter " + image + " " + title + " " + number + " /]"
						+ " [/dt_sc_" + z
						+ "] <br/>";
			}
		}

		return "<br>" + g + "<br>";
	}
};