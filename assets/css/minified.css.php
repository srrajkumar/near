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
ob_end_flush();