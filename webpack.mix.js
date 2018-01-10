let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

mix.styles([
		'public/css/bootstrap.css',
		'public/css/style.css',
		'public/css/font-awesome.css',
		'public/css/animate.css',
		'public/css/custom.css',
		'public/css/jqcandlestick.css',
	],'public/css/backend.css');

mix.scripts([
		'public/js/Chart.js',
		'public/js/jquery-1.11.1.min.js',
		'public/js/modernizr.custom.js',
		'public/js/wow.min.js',
		'public/js/metisMenu.min.js',
		'public/js/custom.js',
	],'public/js/backend-top.js');


mix.scripts([
		'public/js/classie.js',
		'public/js/bootstrap.min.js',
		'public/js/dev-loaders.js',
		'public/js/dev-layout-default.js',
		'public/js/jquery.marquee.js',
		'public/js/jquery.jqcandlestick.min.js',
		'public/js/plugins.js',
		'public/js/jquery.nicescroll.js',
		'public/js/scripts.js',	
	],'public/js/backend-footer.js');