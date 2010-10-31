<?php

/*
	This class is used to define the default HTML, HEAD and BODY content that should 
	appear on all the pages - sort of as a template by default.

	The purpose for this is as follows:
	1. There are various things that are always needed on a project - like body classes, 
		favicon, base stylesheets, charsets etc. which will need on all files. You should
		not have to rewrite these declarations on all your views.
	2. This makes the views lighter. You just have to care about adding the respective
		sub-views and scripts that are needed for THAT view. 
	3. There is no reason that the library folder should be touched by the programmer for
		customising this stuff.
*/

class HtmlDefaults {
	
	public static function defaultHtml() {
		
		return '';

	}

	public static function defaultHead() {
		
		$html = '
		  <meta charset="utf-8">
		  <meta name="description" content="">
		  <meta name="author" content="">

		  <meta name="viewport" content="width=device-width, initial-scale=1.0">

		  <link rel="shortcut icon" href="/favicon.ico">
		  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
		';
		//  <script src="js/libs/modernizr-1.6.min.js"></script>';

		return $html;

	}

	public static function defaultBody() {
		
		$html = '';

		return $html;

	}

}


?>
