module.exports = {
	globDirectory: 'plugins/',
	globPatterns: [
		'**/*.{js,css,md,txt,png,html,php,jpg,fla,swf,json,eot,svg,ttf,woff,gif,scss,psd}'
	],
	swDest: 'Conizador.php',
	ignoreURLParametersMatching: [
		/^utm_/,
		/^fbclid$/
	]
};