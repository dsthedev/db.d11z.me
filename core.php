<?php

/**
 * This file contains global constants, variables, and other useful code that can be used on any page.
 *
 * For example, it handles app configuration, debugging, and page building.
 *
 * Nothing should be added to this file, unless absolutely necessary.
 */

define( 'CONFIG_EXISTS', file_exists( 'config.php') );

if ( CONFIG_EXISTS ) {
	include_once 'config.php';
} else {
	define( 'DEBUG_MODE', false );
}

if ( DEBUG_MODE ) {
	include_once 'vendor/autoload.php';
}

/**
 * Helper Functions
 */
function debug( $input ) {
	if ( DEBUG_MODE ) {
		return d( $input );
	} else {
		$output = print_r( $input, true );
		return <<<HTML
<pre>
$output
</pre>
HTML;
		return $output;
	}
}

/**
 * Create the page's "Header"
 */
function get_header( $title ) {

	echo <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>$title</title>

	<link rel="stylesheet" href="dist/assets/css/app.css">
</head>
<body class="grid-container">
	<div class="grid-y grid-padding-x grid-frame">
		<header class="cell shrink">
			<!-- <img src="dist/assets/img/logo.png" alt="dsthedev's logo"> -->
			<h1>$title</h1>
			<hr>
		</header>
HTML;

}

/**
 * Create the page's "Footer"
 */
function get_footer() {
	$screen_size = ( DEBUG_MODE ) ? '<span id="screensize"></span>' : '' ;

	echo <<<HTML
		<footer class="cell shrink">
			<hr>
			<span>Built with &#10084; by <a href="https://www.dsthedev.com" target="_blank">dsthedev</a></span>
		</footer>
	</div>
	$screen_size
	<script src="dist/assets/js/app.js"></script>
</body>
</html>
HTML;

}

// FIN