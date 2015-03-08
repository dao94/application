/*
Copyright (c) 2003-2014, CKSource - Frederico Knabben. All rights reserved.
For licensing, see license.txt or http://cksource.com/ckfinder/license
*/

CKFinder.customConfig = function( config )
{
	// Define changes to default configuration here.
	// For the list of available options, check:
	// http://docs.cksource.com/ckfinder_2.x_api/symbols/CKFinder.config.html

	// Sample configuration options:
	// config.uiColor = '#BDE31E';
	// config.language = 'fr';
	// config.removePlugins = 'basket';
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
    var duong_dan = 'localhost/laravel-shop/public/libs/';
	//config.filebrowserBrowseUrl = '/ckfinder/ckfinder.html';
//	config.filebrowserImageBrowseUrl = '/websites/ckfinder/ckfinder.html?type=Images';
//	config.filebrowserFlashBrowseUrl = '/ckfinder/ckfinder.html?type=Flash';
//    config.filebrowserUploadUrl = '/websites/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
		config.filebrowserBrowseUrl         = duong_dan+ 'ckfinder/ckfinder.html';
		// config.filebrowserImageBrowseUrl =duong_dan+ 'ckfinder/ckfinder.html?type=Images';
		config.filebrowserFlashBrowseUrl    = duong_dan+ 'ckfinder/ckfinder.html?type=Flash';
		config.filebrowserUploadUrl         = uong_dan+ 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
		config.filebrowserImageUploadUrl    = duong_dan+ 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
		config.filebrowserFlashUploadUrl    = duong_dan+ '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
};
