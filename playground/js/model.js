// Creating an array for our demo items
var demoItems = [
	{
		id: 0,
		name: 'Angular',
		description: 'Angular is a Javascript Framework for creating dynamic web pages',
		visible: true,
		image: 'images/angular_demo/angular.png'
	},
	{
		id: 1,
		name: 'Bootstrap',
		description: 'Bootstrap is a CSS Framework used as a template for creating fluid and responsive websites',
		visible: false,
		image: 'images/angular_demo/bootstrap.png'
	}
];

var portfolioItems = [
	{
		id: 0,
		name: 'BanksaFEMS',
		url: 'http://www.banksiafems.com',
		urlFriendly: 'www.banksiafems.com',
		used: 'Wordpress',
		description: 'The Banksia FEMS website was created using Wordpress to advertise and provide help documentation for a Family Entertainment Centre System I managed called Banksia. This site was built using Wordpress',
		imageSmall: 'banksia-320.png',
		imageLarge: 'banksia-1024.png'
	},

	{
		id: 1,
		name: 'Banksia Online Bookings',
		url: 'https://www.myzonelaser.com/onlinebookings/#/basic/1104',
		urlFriendly: 'www.myzonelaser.com/onlinebookings',
		used: 'Angular, Laravel, OpenVPN',
		description: 'A part of Banksia is the Online Bookings website, which allows people to create a booking for a centre running BanksiaFEMS from a PC or mobile. Although I managed the project of this website instead of code it, I designed the site and lead the design of how the communication would work from the website to the centre. This site was built using Angular and Laravel, with an OpenVPN connection for communication.',
		imageSmall: 'bookings-320.png',
		imageLarge: 'bookings-1024.png'
	},

	{
		id: 2,
		name: 'Markston Sports',
		url: 'http://www.markstonsports.com',
		urlFriendly: 'www.markstonsports.com',
		used: 'Joomla',
		description: 'Built using Joomla, Markston Sports is a product website used for Zone\'s Outdoor lasertag equipment. This website was built a few years ago, but still remains active.',
		imageSmall: 'ms-320.png',
		imageLarge: 'ms-1024.png'		
	},

	{
		id: 3,
		name: 'Banksia Online Roster',
		url: 'http://www.rostertimeclock.com',
		urlFriendly: 'www.rostertimeclock.com',
		used: 'Laravel',
		description: 'Another part of Banksia is an Online Rostering system, which allows staff to see their future and past shifts online. It also includes SMS notifications to inform staff of when their shifts are about to start. As with the Banksia website, I designed and managed the project for this side instead of coding it.',
		imageSmall: 'roster-320.png',
		imageLarge: 'roster-1024.png'		
	},

	{
		id: 4,
		name: 'Zone Laser Tag EU',
		url: 'http://www.zonelasertag.eu',
		urlFriendly: 'www.zonelasertag.eu',
		used: 'Wordpress',
		description: 'The Zone Laser Tag website, built using Wordpress, is a product placement for all of Zone\'s products. Because it is designed for use by a wide audience, the language of the page is different depending upon the user\'s language.',
		imageSmall: 'zlteu-320.png',
		imageLarge: 'zlteu-1024.png'		
	},

	{
		id: 5,
		name: 'Wealth Planning TV',
		url: 'http://www.wealthplanning.tv',
		urlFriendly: 'www.wealthplanning.tv',
		used: 'Joomla',
		description: 'During my freelance days, this was one of the major websites I worked on, building it from the ground up. It is designed for use by people with large estates, to manage their tax efficiently. It contains a large number subscription-based videos and podcasts instructing people on how to manage their tax. This website was built using Joomla.',
		imageSmall: 'wptv-320.png',
		imageLarge: 'wptv-1024.png'		
	},	

	{
		id: 6,
		name: 'My Zone Laser',
		url: 'http://www.myzonelaser.com',
		urlFriendly: 'www.myzonelaser.com',
		used: 'PHP, Zend, MySQL',
		description: 'My Zone Laser, formerly known as Planet ZEON, is used for players of Zone Laser Tag to see their scores from past games, check up on their friends, view their achievements, and spend "Zone Points" which they earn during the game. It is a large website running on multple AWS servers across the world, and is built with PHP on Zend Framework, with a MySQL backend on AWS\'s RDS system',
		imageSmall: 'mzl-320.png',
		imageLarge: 'mzl-1024.png'		
	},		

]