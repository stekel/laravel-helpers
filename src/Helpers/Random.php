<?php

if ( ! function_exists('randomUppercaseLetter') ) {

	/**
	 * Generate a random uppercase letter
	 *
	 * @return string
	 */
	function randomUppercaseLetter() {

		$letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
		$randomLetterPosition = rand(0,(strlen($letters)-1));
	    return $letters[$randomLetterPosition];
	}
}

if ( ! function_exists('randomLowercaseLetter') ) {

	/**
	 * Generate a random lowercase letter
	 *
	 * @return string
	 */
	function randomLowercaseLetter() {

		$letters = "abcdefghijklmnopqrstuvwxyz";
		$randomLetterPosition = rand(0,(strlen($letters)-1));
	    return $letters[$randomLetterPosition];
	}
}

if ( ! function_exists('generateRandomPassword') ) {

	/**
	 * Generate a random password for new users
	 * 		- Makes a random 15char string
	 * 		- Forces the use of 1 Upper, 1 Lower, 1 Digit
	 *
	 * @return string
	 */
	function generateRandomPassword() {

		return str_random(15).randomUppercaseLetter().randomLowercaseLetter().rand(1,100);
	}
}