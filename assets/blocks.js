CaxtonBlock( {
	id      : 'gbb25m/testimonial',
	title   : 'Testimonial',
	icon    : 'testimonial',
	category: 'layout',
	tpl: "<div style='{{border}}' " +
			 "class='gbb25m-testimonial helvetica br4 ma4 mt6'>" +
			 "<header style='background:{{Accent color}};' class='br--top br4 ph4 pv1 nt1 tc'>" +
			 // Image div
			 "<div style=\"{{border}};background:center/cover " +
			 "url('{{Image}}');\" " +
			 "class='gbb25m-testimonial-image br-100 center db nt5 w4 h4'></div>" +
			 // Name, Company
			 "<h3 style='color:{{Text color}};' class='fw4 mv2'>{{Name}}</h3>" +
			 "<h4 style='color:{{Text color}};' class='fw4 mt0 mb3'>{{Company}}</h4>" +
			 "</header>" +
			 // Quote
			 "<blockquote class='ma0 pa4'>" +
			 "{{Quote}}" +
			 "</blockquote>" +
			 "</div>",
	fields: {
		'Image': {
			type: 'image',
			default: '//images.unsplash.com/photo-1541943181603-d8fe267a5dcf?w=500'
		},
		'Accent color' : {
			type: 'color',
			default: '#e91d63',
			section: 'Layout',
		},
		'Text color' : {
			type: 'color',
			default: '#ffffff',
			section: 'Layout',
		},
		'border' : {
			label: 'Border width',
			type: 'range',
			default: '3',
			min: '1',
			max: '10',
			tpl: 'border:%spx solid {{Accent color}};',
			section: 'Layout',
		},
		'Name': {
			type: 'editable',
			default: 'Type in name'
		},
		'Company': {
			type: 'editable',
			default: 'Type in company'
		},
		'Quote': {
			type: 'editable',
			default: 'Type in the testimonial'
		},
	},
} );


