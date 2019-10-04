importScripts('{{ themes_url("$theme/blokks-sw.js") }}');

const prefix = '{{ $schedule->slug }}';
const version = '3.0.1';
const url = '{{ route('embeds.dedicated', ['schedules' => $schedule->slug ]) }}/';
const updatedAt = '{{ $schedule->updated_at }}';

const files = [
	url,
	'{{ route('embeds.launcher', ['schedules' => $schedule->slug ]) }}',
	'{{ themes_url("$theme/modern.js") }}',
	'{{ themes_url("$theme/legacy.js") }}',
	'{{ themes_url("$theme/columns.css") }}',
	'{{ themes_url("$theme/rows.css") }}',
	'{{ themes_url("$theme/list.css") }}',
	'https://fonts.googleapis.com/icon?family=Material+Icons',
];

enableOffline({ 
	prefix, 
	version, 
	files, 
	cdns: [] 
});

enablePush({ url });
