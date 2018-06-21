<?php

if ( ! function_exists('humanFilesize') ) {

	/**
	 * Display # of bytes in human readable format
	 *
	 * @param  integer $bytes # of bytes
	 * @param  integer $decimals # of decimal places to display
	 * @return string  Human readable format including the size ending
	 */
	function humanFilesize($bytes, $decimals = 2) {
		
        $size = array('B','kB','MB','GB','TB','PB','EB','ZB','YB');
		$factor = floor((strlen($bytes) - 1) / 3);
		return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . @$size[$factor];
	}
}