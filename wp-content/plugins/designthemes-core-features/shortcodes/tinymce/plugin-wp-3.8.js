(function() {
	tinymce.create("tinymce.plugins.DTCoreShortcodePlugin", {

		init : function(d, e) {

			d.addCommand("scnOpenDialog", function(a, c) {
				scnSelectedShortcodeType = c.identifier;
				jQuery.get(e + "/dialog.php", function(b) {
					jQuery("#scn-dialog").remove();
					jQuery("body").append(b);
					jQuery("#scn-dialog").hide();
					var f = jQuery(window).width();
					b = jQuery(window).height();
					f = 720 < f ? 720 : f;
					f -= 80;
					b -= 84;
					tb_show("Insert Shortcode", "#TB_inline?width=" + f
							+ "&height=" + b + "&inlineId=scn-dialog");
					jQuery("#scn-options h3:first").text(
							"Customize the " + c.title + " Shortcode");
				});
			});
		},

		getInfo : function() {
			return {
				longname : 'DesignThemes Core Shortcodes',
				author : 'DesignThemes',
				authorurl : 'http://themeforest.net/user/designthemes',
				infourl : '',
				version : "1.0"
			};
		},

		createControl : function(btn, e) {

			var dummy_conent = "Lorem ipsum dolor sit amet, consectetur"
					+ " adipiscing elit. Morbi hendrerit elit turpis,"
					+ " a porttitor tellus sollicitudin at."
					+ " Class aptent taciti sociosqu ad litora "
					+ " torquent per conubia nostra,"
					+ " per inceptos himenaeos.",
					
			dummy_tabs = '<br>[dt_sc_tab title="Tab 1"]'
					+ "<br>" + dummy_conent + "<br>" + '[/dt_sc_tab]' + "<br>"
					+ '[dt_sc_tab title="Tab 2"]' + "<br>"
					+ dummy_conent + "<br>" + '[/dt_sc_tab]' + "<br>"
					+ '[dt_sc_tab title="Tab 3"]' + "<br>"
					+ dummy_conent + "<br>" + '[/dt_sc_tab]<br>',
					
		    testimonal = '[dt_sc_testimonial image="http://placehold.it/100" cite="John Doe" role="Cambridge Telcecom"]'+dummy_conent+'[/dt_sc_testimonial]';

			if ("designthemes_sc_button" === btn) {

				var a = this;
				var btn = e.createSplitButton("designthemes_sc_buttons", {
					title : "Insert Shortcode",
					image : DTCorePlugin.tinymce_folder+ "/images/dt-icon.png",
					icons : false
				});

				btn.onRenderMenu
						.add(function(c, b) {

							/* Accordion */
							c = b.addMenu({title : "Accordion"});
							a.addImmediate(c, "Default",
								"[dt_sc_accordion_group]"
								+'<br>[dt_sc_toggle title="Accordion 1"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle]"
								+'<br>[dt_sc_toggle title="Accordion 2"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle]"
								+'<br>[dt_sc_toggle title="Accordion 3"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle]"
								+"<br>[/dt_sc_accordion_group]");
							 									
							a.addImmediate(c, "Framed",
								"[dt_sc_accordion_group]"
								+'<br>[dt_sc_toggle_framed title="Accordion 1"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle_framed]"
								+'<br>[dt_sc_toggle_framed title="Accordion 2"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle_framed]"
								+'<br>[dt_sc_toggle_framed title="Accordion 3"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle_framed]"
								+"<br>[/dt_sc_accordion_group]");
							
							a.addWithDialog(b, "Button", "button");
							a.addWithDialog(b, "Blockquote", "blockquote");
							
							/* Callout Button */
							a.addWithDialog(b, "Callout Button", "callout");
							
							a.addWithDialog(b, "Column Layout", "column");
							
							
							/* Contact Info */
							c = b.addMenu({title: "Contact Info"});
							a.addImmediate(c, "Address",'[dt_sc_address icon="map-marker" address_text="Address: " address_details="No-58 A,East Madison St, Baltimore, MD, USA" /]');
							a.addImmediate(c, "Phone",'[dt_sc_phone icon="phone" phone_text="Phone: " phone="+1 200 258 2145"/]');
							a.addImmediate(c, "Fax",'[dt_sc_fax icon="paperclip" fax_text="Fax: " fax="+1 100 458 2345"/]');
							a.addImmediate(c, "Email",'[dt_sc_email icon="envelope" email_text="Email: " emailid="yourname@somemail.com"/]');
							a.addImmediate(c, "Web",'[dt_sc_web icon="globe" web_text="Web: " url="http://www.google.com"/]');
							
							a.addWithDialog(c, "Counter", "counter");

							/* Donutchart */
							c = b.addMenu({title: "Donut Chart"});
							a.addImmediate(c, "Small",'<br>[dt_sc_donutchart_small title="Lorem" bgcolor="#999999" fgcolor="#000000" percent="70"/]<br>');
							a.addImmediate(c, "Medium",'<br>[dt_sc_donutchart_medium title="Lorem" bgcolor="#999999" fgcolor="#000000" percent="65"/]<br>');
							a.addImmediate(c, "Large",'<br>[dt_sc_donutchart_large title="Lorem" bgcolor="#999999" fgcolor="#000000" percent="50"/]<br>');
							
							/* Dividers Shortcodes */
							c = b.addMenu({title : "Dividers"});
							
							a.addImmediate(c,  "Clear","<br>[dt_sc_clear]<br>");

							a.addImmediate(c, "Bordered Horizontal Rule","<br>[dt_sc_hr_border] <br>");
							
							a.addImmediate(c, "Whitespace","<br>[dt_sc_hr_invisible] <br>");
							
							a.addImmediate(c, "Whitespace TooSmall","<br>[dt_sc_hr_invisible_toosmall] <br>");
							
							a.addImmediate(c, "Whitespace Small","<br>[dt_sc_hr_invisible_small] <br>");

							a.addImmediate(c, "Whitespace Medium","<br>[dt_sc_hr_invisible_medium] <br>");
							
							a.addImmediate(c, "Whitespace Large","<br>[dt_sc_hr_invisible_large] <br>");


							/* Full Width Section */
							a.addWithDialog(b,"Full Width Section","fullwidth");

							/* Icon Box */
							a.addWithDialog(b, "Icon Boxes", "iconbox");
							
							/* Icon Box Carousel */
							a.addWithDialog(b, "Icon Boxes Carousel", "iconboxcarousel");

							/* List Shortcodes */
							c = b.addMenu({title : "Lists"});
							a.addWithDialog(c, "Ordered List", "orderedlist");
							a.addWithDialog(c, "Unordered List","unorderedlist");

							/*Pullquotes*/							
							a.addWithDialog(b, "Pullquote", "pullquote");

							/*Pricing Table*/
							a.addWithDialog(b, "Pricing Table", "pricingtable");
							
							/* Progressbar*/
							c = b.addMenu({title:"Progress Bar"});
							a.addImmediate(c, "Type1","<br>[dt_sc_progressbar value='45' type='type1'] consectetur [/dt_sc_progressbar] <br>");
							a.addImmediate(c, "Type2","<br>[dt_sc_progressbar value='45' type='type1'] consectetur [/dt_sc_progressbar] <br>");
							a.addImmediate(c, "Type3","<br>[dt_sc_progressbar value='45' type='type1'] consectetur [/dt_sc_progressbar] <br>");
							a.addImmediate(c, "Type4","<br>[dt_sc_progressbar value='45' type='type1'] consectetur [/dt_sc_progressbar] <br>");
							

							/* Sliders */
							c = b.addMenu({title : "Sliders"});
							a.addImmediate(c, "Pattern",'[dt_sc_slider_pattern patternbg_image="" quote_text="Creativity is a drug, we cannot live without it" cite_name="Cecil B. DeMile" button_title="Purchase Template" button_link="#" enable_scrolldown="yes" scrolldownto_pageid="" /]');
							a.addImmediate(c, "Pattern Type 2",' [dt_sc_slider_pattern_type2 patternbg_image="" title1="Minimalize" title2="Use Pattern of your own as full screen header design" button_title="Purchase Template" button_link="#" enable_scrolldown="yes" scrolldownto_pageid="" /]');
							a.addImmediate(c, "Video",'[dt_sc_slider_videobackground video_url="" title1="Minimalize" title2="Single Page HTML" description="" button_title="Purchase Template" button_link="#" /]');
							a.addImmediate(c, "Parallax",'[dt_sc_slider_parallax parallax_image="" title1="Enrich your header with Parallax effect" title2="Minimalize" title3="Cool HTMl Template" button_title="Purchase Template" button_link="#" enable_scrolldown="yes" scrolldownto_pageid="" /]');
							a.addImmediate(c, "Portfolio",'[dt_sc_slider_portfolio]Portfolio Slider Shortcode Goes Here[/dt_sc_slider_portfolio]');

							/* Tab */
							c = b.addMenu({title : "Tabs"});
							a.addImmediate(c, "Horizontal","[dt_sc_tabs_horizontal]" + dummy_tabs+ "[/dt_sc_tabs_horizontal]");

							a.addImmediate(c, "Vertical","[dt_sc_tabs_vertical]" + dummy_tabs+ "[/dt_sc_tabs_vertical]");

							/* Title */
							c = b.addMenu({title : "Title"});
							a.addImmediate(c,"H1",'[dt_sc_h1 text="Lorem" class="" data_animation="pullDown" /]');
							a.addImmediate(c,"H2",'[dt_sc_h2 text="Lorem" class="" data_animation="pullDown" /]');
							a.addImmediate(c,"H3",'[dt_sc_h3 text="Lorem" class="" data_animation="pullDown" /]');
							a.addImmediate(c,"H4",'[dt_sc_h4 text="Lorem" class="" data_animation="pullDown" /]');
							a.addImmediate(c,"H5",'[dt_sc_h5 text="Lorem" class="" data_animation="pullDown" /]');
							a.addImmediate(c,"H6",'[dt_sc_h6 text="Lorem" class="" data_animation="pullDown" /]');
							
							/* Bordered Title */
							c = b.addMenu({title : "Bordered Title"});
							a.addImmediate(c,"H1",'[dt_sc_bordered_h1 text="Lorem" class="" data_animation="pullDown" /]');
							a.addImmediate(c,"H2",'[dt_sc_bordered_h2 text="Lorem" class="" data_animation="pullDown" /]');
							a.addImmediate(c,"H3",'[dt_sc_bordered_h3 text="Lorem" class="" data_animation="pullDown" /]');
							a.addImmediate(c,"H4",'[dt_sc_bordered_h4 text="Lorem" class="" data_animation="pullDown" /]');
							a.addImmediate(c,"H5",'[dt_sc_bordered_h5 text="Lorem" class="" data_animation="pullDown" /]');
							a.addImmediate(c,"H6",'[dt_sc_bordered_h6 text="Lorem" class="" data_animation="pullDown" /]');


							a.addWithDialog(b, "Titled Box", "box");				

							/* Toggle */
							c = b.addMenu({title : "Toggle"});
							a.addImmediate(c, "Default",
								'[dt_sc_toggle title="Toggle 1"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle]"
								+'<br>[dt_sc_toggle title="Toggle 2"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle]"
								+'<br>[dt_sc_toggle title="Toggle 3"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle]");
							a.addImmediate(c, "Framed",
								'[dt_sc_toggle_framed title="Toggle 1"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle_framed]"
								+'<br>[dt_sc_toggle_framed title="Toggle 2"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle_framed]"
								+'<br>[dt_sc_toggle_framed title="Toggle 3"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle_framed]");
									
							/* Tooltip Shortcodes */
							a.addWithDialog(b, "Tooltip", "tooltip");							

							/* Twitter Shortcodes */
							a.addWithDialog(b, "Twitter", "twitter");							

							c = b.addMenu({title : "Others"});
							
							a.addImmediate(c, "Team",'<br>[dt_sc_team name="DesignThemes" role="Customer Support" image="http://placehold.it/274x322" twitter="#" facebook="#" instagram="#" dribbble="#"]<br><p>We wont Express. But our Portfolios will! </p>[/dt_sc_team]');
							
							a.addWithDialog(b, "Team Carousel", "teamcarousel");	
							
							a.addImmediate(c, "Testimonial Carousel",'[dt_sc_testimonial_carousel]<br>'
									+'[dt_sc_testimonial name="John Doe" type="type2" image="http://placehold.it/220" rating="4"]'+dummy_conent+'[/dt_sc_testimonial]<br>'
									+'[dt_sc_testimonial name="James Allen" type="type2" image="http://placehold.it/220" rating="4"]'+dummy_conent+'[/dt_sc_testimonial]'
									+'<br>[/dt_sc_testimonial_carousel]');

							a.addImmediate(c, "Clients Carousel",'<br>[dt_sc_clients_carousel]<br>'
										+'<ul>'
										+'<li><a href="#"><img src="http://placehold.it/198x161" alt="Client 1" title="Client 1"/></a></li>'
										+'<li><a href="#"><img src="http://placehold.it/198x161" alt="Client 2" title="Client 2"/></a></li>'
										+'<li><a href="#"><img src="http://placehold.it/198x161" alt="Client 3" title="Client 3"/></a></li>'
										+'<li><a href="#"><img src="http://placehold.it/198x161" alt="Client 4" title="Client 4"/></a></li>'
										+'<li><a href="#"><img src="http://placehold.it/198x161" alt="Client 5" title="Client 5"/></a></li>'
										+'<li><a href="#"><img src="http://placehold.it/198x161" alt="Client 6" title="Client 6"/></a></li>'
										+'<li><a href="#"><img src="http://placehold.it/198x161" alt="Client 7" title="Client 7"/></a></li>'
										+'<li><a href="#"><img src="http://placehold.it/198x161" alt="Client 8" title="Client 8"/></a></li>'
										+'</ul>'
										+'<br>[/dt_sc_clients_carousel]<br>');
										
							a.addImmediate(c, "Social Links",'[dt_sc_social_links twitter="#" facebook="#" google="#" linkedin="#" /]');
							
							a.addImmediate(c, "News Letter",'[dt_sc_news_letter  data_animation="stretchLeft" data_animation2="stretchRight" description="Feel free to place your Mail_ID and Subscribe to our Newsletter here. So that, you can receive our exiting Updates and Offers with no wait!" /]');
							
							a.addImmediate(c, "Recent Portfolio",'[dt_sc_recent_portfolio count="4" column="4/3/2" excerpt_length="20" style="space/no-space" data_animation="fadeInUp" ]');
																				
						});
				return btn;
			}
		},

		addImmediate : function(d, e, a) {
			d.add({title : e,onclick : function() { tinyMCE.activeEditor.execCommand("mceInsertContent", false,a);}});
		},

		addWithDialog : function(d, e, a) {
			d.add({title : e,
				onclick : function() {
					tinyMCE.activeEditor.execCommand("scnOpenDialog", false, {
						title : e,
						identifier : a
					});
				}
			});
		}
	});

	// add DTCoreShortcodePlugin plugin
	tinymce.PluginManager.add("DTCoreShortcodePlugin",
			tinymce.plugins.DTCoreShortcodePlugin);
})();