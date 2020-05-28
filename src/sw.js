importScripts('http://themes.blokks.localhost/blokks-sw.js');

const prefix = 'blokks-default';
const version = '4.0.0';
const url = 'http://embeds.blokks.localhost';

const files = [
	url,
	'http://embeds.blokks.localhost/launch.js',
	'http://themes.blokks.localhost/modern.js',
	'http://themes.blokks.localhost/columns.css',
	'http://themes.blokks.localhost/rows.css',
	'http://themes.blokks.localhost/list.css',
	'https://fonts.googleapis.com/css2?family=Inter&family=Roboto+Slab:wght@500&display=swap',
];

enableOffline({
	prefix,
	version,
	files,
	cdns: [],
});

// enablePush({ url });
