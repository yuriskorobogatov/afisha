<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
		'css/bootstrap-grid.css',
		'css/style.css',
		'css/colors/blue.css',
		'css/icons.css',
		'css/invoice.css',
		];
    public $js = [
	'js/jquery-3.3.1.min.js',
	'js/jquery-migrate-3.0.0.min.js',
	'js/mmenu.min.js',
	'js/tippy.all.min.js',
	'js/simplebar.min.js',
	'js/bootstrap-slider.min.js',
	'js/bootstrap-select.min.js',
	'js/snackbar.js',
	'js/clipboard.min.js',
	'js/counterup.min.js',
	'js/magnific-popup.min.js',
	'js/slick.min.js',
	'js/custom.js', 
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
