navbar<?php // compress and merge CSS files
header('Content-type: text/css');
ob_start("compress");

function compress($buffer) {
	$buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);
	$buffer = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $buffer);
	return $buffer;
}

include('bootstrap.css');
include('custom.css');
include('navigation.css');
include('ionicons.css');
include('h-style.css');
include('aos.css');
include('font-awesome.min.css');
include('slick.css');
include('slick-theme.css');
include('bootstrap-formhelpers.css');
include('social-buttons.css');
include('menu_style.css');
ob_end_flush();