scnShortcodeMeta = {
	attributes : [ 
	
	{
		label : "Columns",
		id : "content",
		controlType : "column-control"
	},

	 ],
	customMakeShortcode : function(b) {
		var a = b.data, type = b.type, ctype = type;

		type = ' type ="'+type+'"';
		
		var icons = ["bell","cogs","leaf","trophy","flag","home","key"];

		if (!a)
			return "";
		b = a.numColumns;
		var c = a.content;
		a = [ "0", "one", "two", "three", "four", "five", 'six' ];
		var x = [ "0", "0", "half", "third", "fourth", "fifth", 'sixth' ];
		var f = x[b];
		c = c.split("|");
		var g = "";
		var g = "[dt_sc_icon_box_carousel data_animation='fadeInUp']<br/>";
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
				}
				
			var current_icon = icons[Math.floor(Math.random() * icons.length)];
	
				
				g += "[dt_sc_"
					+ e
					+ "] <br/>"
					+ '[dt_sc_icon_box type ="type4" fontawesome_icon="home" title="Title Comes Here" link="#"]'
					+ ' <p> Nunc at pretium est curabitur commodo leac est venenatis egestas sed aliquet auguevelit. </p>';
				g += " [/dt_sc_icon_box]"
					+ "<br> [/dt_sc_" + z
					+ "] <br/> ";
			
			}
		}
			g += '[/dt_sc_icon_box_carousel]';
		return g;
	}
};