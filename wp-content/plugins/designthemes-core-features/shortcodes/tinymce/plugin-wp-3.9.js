(function(){
	var dummy_conent = "Lorem ipsum dolor sit amet, consectetur"
				+ " adipiscing elit. Morbi hendrerit elit turpis,"
				+ " a porttitor tellus sollicitudin at."
				+ " Class aptent taciti sociosqu ad litora "
				+ " torquent per conubia nostra,"
				+ " per inceptos himenaeos.";

	var dummy_tabs = '<br>[dt_sc_tab title="Tab1" font_awesome_icon="fa-pencil"]'
					+ "<br>" + dummy_conent + "<br>" + '[/dt_sc_tab]' + "<br>"
					+ '[dt_sc_tab title="Tab2" font_awesome_icon="fa-unlock-alt" ]' + "<br>"
					+ dummy_conent + "<br>" + '[/dt_sc_tab]' + "<br>"
					+ '[dt_sc_tab title="Tab3" font_awesome_icon="fa-apple"]' + "<br>"
					+ dummy_conent + "<br>" + '[/dt_sc_tab]<br>';
	var testimonal = '[dt_sc_testimonial image="http://placehold.it/100" cite="John Doe" role="Cambridge Telcecom"]'+dummy_conent+'[/dt_sc_testimonial]';
	

	// Add Shortcode button
	tinymce.PluginManager.add("DTCoreShortcodePlugin",function( editor , url ) { 

		editor.on('init', function() {
			editor.addCommand("scnOpenDialog", function(obj) {
				scnSelectedShortcodeType = obj.identifier;
				jQuery.get(url + "/dialog.php", function(b) {
					jQuery("#scn-dialog").remove();
					jQuery("body").append(b);
					jQuery("#scn-dialog").hide();
					var f = jQuery(window).width();
					b = jQuery(window).height();
					f = 720 < f ? 720 : f;
					f -= 80;
					b -= 84;
					tb_show("Insert Shortcode", "#TB_inline?width=800"+ "&height=400&inlineId=scn-dialog");
					jQuery("#scn-options h3:first").text("Customize the " + obj.title + " Shortcode");
				});
			});
		});

		editor.addButton('designthemes_sc_button',{
			title: "DT Shortcode",
			icon: "dt-icon",
			type: "menubutton",
			menu:[
				{ text: 'Accordion',
					menu : [
						{ text: 'Default', onclick: function(e){
							e.stopPropagation();
							var content = "[dt_sc_accordion_group]"
								+'<br>[dt_sc_toggle title="Accordion 1"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle]"
								+'<br>[dt_sc_toggle title="Accordion 2"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle]"
								+'<br>[dt_sc_toggle title="Accordion 3"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle]"
								+"<br>[/dt_sc_accordion_group]";
								editor.insertContent(content);
							}
						},

						{ text: 'Framed', onclick: function(e){
							e.stopPropagation();
							var content = "[dt_sc_accordion_group]"
								+'<br>[dt_sc_toggle_framed title="Accordion 1"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle_framed]"
								+'<br>[dt_sc_toggle_framed title="Accordion 2"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle_framed]"
								+'<br>[dt_sc_toggle_framed title="Accordion 3"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle_framed]"
								+"<br>[/dt_sc_accordion_group]";
							editor.insertContent(content);
							}
						}
					]
				},


				{ text: 'Button',
					onclick: function(e) {
						e.stopPropagation();
						tinyMCE.activeEditor.execCommand("scnOpenDialog", {title: this.text() ,identifier: "button"});
					}
				},

				{ text: 'Block Quote',
					onclick: function(e) {
						e.stopPropagation();
						tinyMCE.activeEditor.execCommand("scnOpenDialog", {title: this.text() ,identifier: "blockquote"});
					}
				},

				
				{ text: 'Call Out Button', menu :[
					
					{ text: 'Without Icon', onclick: function(e){
						e.stopPropagation();
						tinyMCE.activeEditor.execCommand("scnOpenDialog", {title: this.text() ,identifier: "callout"});
					}},
					
					{ text: 'With Icon', onclick: function(e){
						e.stopPropagation();
						tinyMCE.activeEditor.execCommand("scnOpenDialog", {title: this.text() ,identifier: "calloutwithicon"});
					}},
				
				] },

				{ text: 'Column Layout', 
					onclick: function(e) {
						e.stopPropagation();
						tinyMCE.activeEditor.execCommand("scnOpenDialog", {title: this.text() ,identifier: "column"});
					}
				},
				

				{ text : 'Contact Info', menu :[

					
					{ text: 'Address', onclick: function(e){
						e.stopPropagation();
						editor.insertContent('[dt_sc_address icon="map-marker" address_text="Address: " address_details="No-58 A,East Madison St, Baltimore, MD, USA" /]');
					}},

					{ text: 'Phone', onclick: function(e){
						e.stopPropagation();
						editor.insertContent('[dt_sc_phone icon="phone" phone_text="Phone: " phone="+1 200 258 2145"/]');
					}},


					{ text: 'Fax', onclick: function(e){
						e.stopPropagation();
						editor.insertContent('[dt_sc_fax icon="paperclip" fax_text="Fax: " fax="+1 100 458 2345"/]');
					}},

					{ text: 'Email', onclick: function(e){
						e.stopPropagation();
						editor.insertContent('[dt_sc_email icon="envelope" email_text="Email: " emailid="yourname@somemail.com"/]');
					}},

					{ text: 'Web', onclick: function(e){
						e.stopPropagation();
						editor.insertContent('[dt_sc_web icon="globe" web_text="Web: " url="http://www.google.com"/]');
					}},
					
					
				] },
				
				{ text: 'Counter', onclick: function(e) {
						e.stopPropagation();
						tinyMCE.activeEditor.execCommand("scnOpenDialog", {title: this.text() ,identifier: "counter"});
					}
				},
				

				{ text : 'Donut Chart', menu:[

					{ text: 'Small', onclick: function(e) {
						e.stopPropagation();
						editor.insertContent('[dt_sc_donutchart_small title="Lorem" bgcolor="#999999" fgcolor="#000000" percent="70"/]');
					} },


					{ text: 'Medium', onclick: function(e) {
						e.stopPropagation();
						editor.insertContent('[dt_sc_donutchart_medium title="Lorem" bgcolor="#999999" fgcolor="#000000" percent="65"/]');
					} },


					{ text: 'Large', onclick: function(e) {
						e.stopPropagation();
						editor.insertContent('[dt_sc_donutchart_large title="Lorem" bgcolor="#999999" fgcolor="#000000" percent="50"/]');
					} },
				] },
				
				{ text : 'Dividers', menu:[


					{ text: 'Clear', onclick: function(e){
						e.stopPropagation();
						editor.insertContent('[dt_sc_clear]');
					}},

					{ text: 'Bordered Horizontal Rule', onclick: function(e){
						e.stopPropagation();
						editor.insertContent('[dt_sc_hr_border]');
					}},


					{ text: 'Whitespace', onclick: function(e){
						e.stopPropagation();
						editor.insertContent('[dt_sc_hr_invisible]');
					}},

					{ text: 'Whitespace Too Small', onclick: function(e){
						e.stopPropagation();
						editor.insertContent('[dt_sc_hr_invisible_toosmall]');
					}},
					
					{ text: 'Whitespace Small', onclick: function(e){
						e.stopPropagation();
						editor.insertContent('[dt_sc_hr_invisible_small]');
					}},

					{ text: 'Whitespace Medium', onclick: function(e){
						e.stopPropagation();
						editor.insertContent('[dt_sc_hr_invisible_medium]');
					}},

					{ text: 'Whitespace Large', onclick: function(e){
						e.stopPropagation();
						editor.insertContent('[dt_sc_hr_invisible_large]');
					}},
				] },

				{ text: 'Full Width Section', 
					onclick: function(e){
						e.stopPropagation();
						tinyMCE.activeEditor.execCommand("scnOpenDialog", {title: this.text() ,identifier: "fullwidth"});
					}
				},

				{ text: 'Icon Boxes', 
					onclick: function(e){
						e.stopPropagation();
						tinyMCE.activeEditor.execCommand("scnOpenDialog", {title: this.text() ,identifier: "iconbox"});
					}
				},
				
				{ text: 'IconBox Carousel', 
					onclick: function(e){
						e.stopPropagation();
						tinyMCE.activeEditor.execCommand("scnOpenDialog", {title: this.text() ,identifier: "iconboxcarousel"});
					}
				},

				{ text: 'Lists',
					menu :[
						{
							text: 'Ordered List',
							onclick : function() {
								editor.windowManager.open({
									title: "Add New Stylish Ordered List",
									body: [
										{
											type: 'listbox',
											name: 'style',
											label:'Style',
											values:[
												{ text: 'Decimal', value: 'decimal' }, { text: 'Decimals With Leading Zero', value: 'decimal-leading-zero' }, { text:'Lower Alpha', value:'lower-alpha'},
												{ text:'Lower Roman', value:'lower-roman'}, { text:'Upper Alpha', value:'upper-alpha'},{ text:'Upper Roman', value:'upper-roman'}
											],
										},

										{
											type: 'listbox',
											name: 'variation',
											label: 'Variation',

											values:[
												{ text: 'Default', value: '' },{ text: 'Avocado', value: 'avocado' },{ text: 'Black', value: 'black' },{ text: 'Blue', value: 'blue' },												{ text: 'Orange', value: 'orange' },{ text: 'Pink', value: 'pink' },{ text: 'Purple', value: 'purple' },{ text: 'Red', value: 'red' },{ text: 'Blueiris', value: 'blueiris' },     { text: 'Blueturquoise', value: 'blueturquoise' }, { text: 'Brown', value: 'brown' },{ text: 'Burntsienna', value: 'burntsienna' },	{ text: 'Chillipepper', value: 'chillipepper' }, { text: 'Eggplant', value: 'eggplant' }, { text: 'Electricblue', value: 'electricblue' },{ text: 'Graasgreen', value: 'graasgreen' },{ text: 'Gray', value: 'gray' },{ text: 'Green', value: 'green' },{ text: 'Orange', value: 'orange' },{ text: 'Palebrown', value: 'palebrown' },{ text: 'Pink', value: 'pink' },{ text: 'Radiantorchid', value: 'radiantorchid' },{ text: 'Red', value: 'red' },{ text: 'Skyblue', value: 'skyblue' },{ text: 'Yellow', value: 'yellow' },{ text: 'Violet', value: 'violet' },{ text: 'Emerald', value: 'emerald' },{ text: 'Wetasphalt', value: 'wetasphalt' },
											],
										},
									],
									onsubmit: function(e){
										var defaultContent =  "<ol>"
												+ "<li>Lorem ipsum dolor sit </li>"
												+ "<li>Praesent convallis nibh</li>"
												+ "<li>Nullam ac sapien sit</li>"
												+ "<li>Phasellus auctor augue</li></ol>";

										editor.insertContent('[dt_sc_fancy_ol style="'+e.data.style+'" variation="'+e.data.variation+'"]'+ defaultContent+'[/dt_sc_fancy_ol]');
									}
								});
							}
						},

						{
							text: 'Unordered List',
							onclick : function(){
								editor.windowManager.open({
									title: "Add New Stylish Unordered List",
									body: [

										{
											type: 'listbox',
											name: 'style',
											label:'Style',
											values:[
												{ text: 'Arrow', value: 'arrow' },					{ text: 'Rounded Arrow', value: 'rounded-arrow' },			{ text: 'Double Arrow', value: 'double-arrow' },
												{ text: 'Heart', value: 'heart' },					{ text: 'Trash', value: 'trash' },							{ text: 'Star', value: 'star' },
												{ text: 'Tick', value: 'tick' },					{ text: 'Rounded Tick', value: 'rounded-tick' },			{ text: 'Cross', value: 'cross' },
												{ text: 'Rounded Cross', value: 'rounded-cross' },	{ text: 'Rounded Question', value: 'rounded-question' },	{ text: 'Rounded Info', value: 'rounded-info' },
												{ text: 'Delete', value: 'delete' },				{ text: 'Warning', value: 'warning' },						{ text: 'Comment', value: 'comment' },
												{ text: 'Edit', value: 'edit' },					{ text: 'Share', value: 'share' },							{ text: 'Plus', value: 'plus' },
												{ text: 'Rounded Plus', value: 'Rounded Plus' },	{ text: 'Minus', value: 'minus' },							{ text: 'Rounded minus', value: 'rounded-minus' },
												{ text: 'Asterisk', value: 'asterisk' },			{ text: 'Cart', value: 'cart' },							{ text: 'Folder', value: 'folder' },
												{ text: 'Folder Open', value: 'folder-open' },		{ text: 'Desktop', value: 'desktop' },						{ text: 'Tablet', value: 'tablet' },
												{ text: 'Mobile', value: 'mobile' },				{ text: 'Reply', value: 'reply' },							{ text: 'Quote', value: 'quote' },
												{ text: 'Mail', value: 'mail' },					{ text: 'External Link', value: 'external-link' },			{ text: 'Adjust', value: 'adjust' },

												{ text: 'Pencil', value: 'pencil' },				{ text: 'Print', value: 'print' },							{ text: 'Tag', value: 'tag' },
												{ text: 'Thumbs Up', value: 'thumbs-up' },			{ text: 'Thumbs Down', value: 'thumbs-down' },				{ text: 'Time', value: 'time' },
												{ text: 'Globe', value: 'globe' },					{ text: 'Pushpin', value: 'pushpin' },						{ text: 'Map Marker', value: 'map-marker' },
												{ text: 'Link', value: 'link' },					{ text: 'Paper Clip', value: 'paper-clip' },				{ text: 'Download', value: 'download' },
												{ text: 'Key', value: 'key' },						{ text: 'Search', value: 'search' },						{ text: 'Rss', value: 'rss' },
												{ text: 'Twitter', value: 'twitter' },				{ text: 'Facebook', value: 'facebook' },					{ text: 'Linkedin', value: 'linkedin' },
												{ text:'Google Plus', value:'google-plus'}
											],
										},

										{
											type: 'listbox',
											name: 'variation',
											label: 'Variation',

											values:[
												{ text: 'Default', value: '' },{ text: 'Avocado', value: 'avocado' },{ text: 'Black', value: 'black' },{ text: 'Blue', value: 'blue' },												{ text: 'Orange', value: 'orange' },{ text: 'Pink', value: 'pink' },{ text: 'Purple', value: 'purple' },{ text: 'Red', value: 'red' },{ text: 'Blueiris', value: 'blueiris' },     { text: 'Blueturquoise', value: 'blueturquoise' }, { text: 'Brown', value: 'brown' },{ text: 'Burntsienna', value: 'burntsienna' },	{ text: 'Chillipepper', value: 'chillipepper' }, { text: 'Eggplant', value: 'eggplant' }, { text: 'Electricblue', value: 'electricblue' },{ text: 'Graasgreen', value: 'graasgreen' },{ text: 'Gray', value: 'gray' },{ text: 'Green', value: 'green' },{ text: 'Orange', value: 'orange' },{ text: 'Palebrown', value: 'palebrown' },{ text: 'Pink', value: 'pink' },{ text: 'Radiantorchid', value: 'radiantorchid' },{ text: 'Red', value: 'red' },{ text: 'Skyblue', value: 'skyblue' },{ text: 'Yellow', value: 'yellow' },{ text: 'Violet', value: 'violet' },{ text: 'Emerald', value: 'emerald' },{ text: 'Wetasphalt', value: 'wetasphalt' },
											],
										},
									],
									onsubmit: function(e){
										var defaultContent =  "<ul>"
												+ "<li>Lorem ipsum dolor sit </li>"
												+ "<li>Praesent convallis nibh</li>"
												+ "<li>Nullam ac sapien sit</li>"
												+ "<li>Phasellus auctor augue</li></ul>";

										editor.insertContent('[dt_sc_fancy_ul style="'+e.data.style+'" variation="'+e.data.variation+'"]'+ defaultContent+'[/dt_sc_fancy_ul]');
									}
								});
							}
						},
					]
				},

				{ text:'Pull Quote',
					onclick: function(e){
						e.stopPropagation();
						tinyMCE.activeEditor.execCommand("scnOpenDialog", {title: this.text() ,identifier: "pullquote"});
					}
				},

				{ text:'Pricing Table',
					onclick: function(e){
						e.stopPropagation();
						tinyMCE.activeEditor.execCommand("scnOpenDialog", {title: this.text() ,identifier: "pricingtable"});
					}
				},

				{ text: 'Progress Bar',
					menu:[

						{ text:'Type1', 
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_progressbar value="45" type="type1"] consectetur [/dt_sc_progressbar]');
							}
						},

						{ text:'Type2', 
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_progressbar value="45" type="type2"] consectetur [/dt_sc_progressbar]');
							}
						},

						{ text:'Type3', 
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_progressbar value="45" type="type3"] consectetur [/dt_sc_progressbar]');
							}
						},
						
						{ text:'Type4', 
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_progressbar value="45" type="type4"] consectetur [/dt_sc_progressbar]');
							}
						},
					]
				},

				
				{ text: 'Sliders',
					menu:[
						{ text:'Pattern',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_slider_pattern patternbg_image="" quote_text="Creativity is a drug, we cannot live without it" cite_name="Cecil B. DeMile" button_title="Purchase Template" button_link="#" enable_scrolldown="yes" scrolldownto_pageid="" /]');
							}
						},
						{ text:'Pattern Type2',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_slider_pattern_type2 patternbg_image="" title1="Minimalize" title2="Use Pattern of your own as full screen header design" button_title="Purchase Template" button_link="#" enable_scrolldown="yes" scrolldownto_pageid="" /]');
							}
						},
						{ text:'Video',
							onclick:function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_slider_videobackground video_url="" title1="Minimalize" title2="Single Page HTML" description="" button_title="Purchase Template" button_link="#" /]');
							}
						},
						{ text:'Parallax',
							onclick:function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_slider_parallax parallax_image="" title1="Enrich your header with Parallax effect" title2="Minimalize" title3="Cool HTMl Template" button_title="Purchase Template" button_link="#" enable_scrolldown="yes" scrolldownto_pageid="" /]');
							}
						},
						{ text:'Portfolio',
							onclick:function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_slider_portfolio]Portfolio Slider Shortcode Goes Here[/dt_sc_slider_portfolio]');
							}
						}
					]
				},

				{ text: 'Tabs',
					menu:[
						{ text:'Horizontal',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent("[dt_sc_tabs_horizontal data_animation='fadeInUp']" + dummy_tabs + "[/dt_sc_tabs_horizontal]");
							}
						},
						{ text:'Vertical',
							onclick:function(e){
								e.stopPropagation();
								editor.insertContent("[dt_sc_tabs_vertical data_animation='fadeInUp']" + dummy_tabs+ "[/dt_sc_tabs_vertical]");
							}
						}
					]
				},

				{ text: 'Title',
					menu:[
						{
							text:'H1',
							onclick:function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_h1 text="Lorem" class="" data_animation="pullDown" /]');
							}
						},

						{
							text:'H2',
							onclick:function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_h2 text="Lorem" class="" data_animation="pullDown" /]');
							}
						},
						{
							text:'H3',
							onclick:function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_h3 text="Lorem" class="" data_animation="pullDown" /]');
							}
						},
						{
							text:'H4',
							onclick:function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_h4 text="Lorem" class="" data_animation="pullDown" /]');
							}
						},
						{
							text:'H5',
							onclick:function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_h5 text="Lorem" class="" data_animation="pullDown" /]');
							}
						},
						{
							text:'H6',
							onclick:function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_h6 text="Lorem" class="" data_animation="pullDown" /]');
							}
						},
					]
				},
				
				{ text: 'Bordered Title',
					menu:[
						{
							text:'H1',
							onclick:function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_bordered_h1 text="Lorem" class="" /]');
							}
						},

						{
							text:'H2',
							onclick:function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_bordered_h2 text="Lorem" class="" /]');
							}
						},
						{
							text:'H3',
							onclick:function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_bordered_h3 text="Lorem" class="" /]');
							}
						},
						{
							text:'H4',
							onclick:function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_bordered_h4 text="Lorem" class="" /]');
							}
						},
						{
							text:'H5',
							onclick:function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_bordered_h5 text="Lorem" class="" /]');
							}
						},
						{
							text:'H6',
							onclick:function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_bordered_h6 text="Lorem" class="" /]');
							}
						},
					]
				},

				{ text:'Title Box',
					onclick: function(e){
						e.stopPropagation();
						tinyMCE.activeEditor.execCommand("scnOpenDialog", {title: this.text() ,identifier: "box"});
					}
				},

				{ text: 'Toggle',
					menu:[
						{
							text: 'Default',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_toggle title="Toggle 1"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle]"
										+'<br>[dt_sc_toggle title="Toggle 2"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle]"
										+'<br>[dt_sc_toggle title="Toggle 3"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle]");
							}
						},

						{
							text: 'Framed',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_toggle_framed title="Toggle 1"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle_framed]"
										+'<br>[dt_sc_toggle_framed title="Toggle 2"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle_framed]"
										+'<br>[dt_sc_toggle_framed title="Toggle 3"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle_framed]");
							}
						},
					]
				},

				{ text:'Tool tip',
					onclick: function(e){
						e.stopPropagation();
						tinyMCE.activeEditor.execCommand("scnOpenDialog", {title: this.text() ,identifier: "tooltip"});
					}
				},
				
				{ text:'Twitter',
					onclick: function(e){
						e.stopPropagation();
						tinyMCE.activeEditor.execCommand("scnOpenDialog", {title: this.text() ,identifier: "twitter"});
					}
				},

				{ text:'Others',
					menu:[
					
						{ text:'Team',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_team name="DesignThemes" role="Customer Support" image="http://placehold.it/274x322" twitter="#" facebook="#" instagram="#" dribbble="#"]<br><p>We wont Express. But our Portfolios will! </p>[/dt_sc_team]');
							}
						},
						
						{ text: 'Team Carousel', 
							onclick: function(e){
								e.stopPropagation();
								tinyMCE.activeEditor.execCommand("scnOpenDialog", {title: this.text() ,identifier: "teamcarousel"});
							}
						},
				

						{ text:'Testimonial Carousel',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_testimonial_carousel data_animation="fadeInUp"]<br>'
									+'<ul>'
									+'<li>'+testimonal+'</li>'
									+'<li>'+testimonal+'</li>'
									+'<li>'+testimonal+'</li>'
									+'</ul>'
									+'<br>[/dt_sc_testimonial_carousel]');
							}
						},

						{ text:'Clients Carousel',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_clients_carousel data_animation="fadeInUp"]<br>'
									+'<ul>'
									+'<li><a href="#"><img src="http://placehold.it/232x61" alt="Client 1" title="Client 1"/></a></li>'
									+'<li><a href="#"><img src="http://placehold.it/232x61" alt="Client 2" title="Client 2"/></a></li>'
									+'<li><a href="#"><img src="http://placehold.it/232x61" alt="Client 3" title="Client 3"/></a></li>'
									+'<li><a href="#"><img src="http://placehold.it/232x61" alt="Client 4" title="Client 4"/></a></li>'
									+'<li><a href="#"><img src="http://placehold.it/232x61" alt="Client 5" title="Client 5"/></a></li>'
									+'<li><a href="#"><img src="http://placehold.it/232x61" alt="Client 6" title="Client 6"/></a></li>'
									+'<li><a href="#"><img src="http://placehold.it/232x61" alt="Client 7" title="Client 7"/></a></li>'
									+'<li><a href="#"><img src="http://placehold.it/232x61" alt="Client 8" title="Client 8"/></a></li>'
									+'</ul>'
									+'<br>[/dt_sc_clients_carousel]');
							}
						},
						
						{ text:'Social Links',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_social_links twitter="#" facebook="#" google="#" linkedin="#" /]');
							}
						},
						
						{ text: 'Newsletter', 
							onclick: function(e){
								e.stopPropagation();
							editor.insertContent('[dt_sc_news_letter  data_animation="stretchLeft" data_animation2="stretchRight" description="Feel free to place your Mail_ID and Subscribe to our Newsletter here. So that, you can receive our exiting Updates and Offers with no wait!" /]' );
							}
						},
						
						{ text: 'Recent Portfolio', 
							onclick: function(e){
								e.stopPropagation();
							editor.insertContent('[dt_sc_recent_portfolio count="4" column="4/3/2" excerpt_length="20" style="space/no-space" data_animation="fadeInUp" ]' );
							}
						},
						
					]
				}
			]
		});
	});// Add Shortcode button End
})();