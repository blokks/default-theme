importScripts('{{ themes_url("$theme/blokks-sw.js") }}');

const prefix = '{{ $schedule->slug }}';
const version = '3.0.0';
const url = '{{ route('embeds.dedicated', ['schedules' => $schedule->slug ]) }}';

const files = [
	url,
	'{{ themes_url("$theme/launch.js") }}',
	'{{ themes_url("$theme/modern.js") }}',
	'{{ themes_url("$theme/legacy.js") }}',
	'{{ themes_url("$theme/rows.css") }}',
	'{{ themes_url("$theme/columns.css") }}',
	'{{ themes_url("$theme/icons.svg") }}',
	'{{ themes_url("$theme/PublicSans-Regular.woff") }}',
	'{{ themes_url("$theme/PublicSans-Regular.woff2") }}',
	'{{ themes_url("$theme/PublicSans-Medium.woff") }}',
	'{{ themes_url("$theme/PublicSans-Medium.woff2") }}',
	'{{ themes_url("$theme/PublicSans-SemiBold.woff") }}',
	'{{ themes_url("$theme/PublicSans-SemiBold.woff2") }}',
	'{{ themes_url("$theme/PublicSans-Bold.woff") }}',
	'{{ themes_url("$theme/PublicSans-Bold.woff2") }}',
];

enableOffline({ 
	prefix, 
	version, 
	files, 
	cdns: [] 
});

enablePush({ url });
