<?php

if ( ! function_exists('isNotNull') ) {

    /**
     * ! is_null
     *
     * @param  mixed  $value
     * @return boolean
     */
    function isNotNull($value) {

		return ! is_null($value);
	}
}

if ( ! function_exists('isNull') ) {

    /**
     * is_null in camelcase
     *
     * @param  mixed  $value
     * @return boolean
     */
    function isNull($value) {

		return is_null($value);
	}
}

if ( ! function_exists('shortName') ) {

	/**
	 * returns class name in lowercase
	 *
	 * @param  mixed $object
	 * @return array
	 */
	function shortName($object) {

		return (! is_null($object)) ? strtolower((new \ReflectionClass($object))->getShortName()) : false;
	}
}

if ( ! function_exists('isJson') ) {

	/**
	 * Is the given string json?
	 *
	 * @param  string  $string
	 * @return boolean
	 */
	function isJson($string) {

        json_decode($string);

        return (json_last_error() == JSON_ERROR_NONE);
    }
}

if ( ! function_exists('prettyPrintJson') ) {

	/**
	 * Pretty print json
	 *
	 * @param  string $json
	 * @return string
	 */
	function prettyPrintJson($json) {

        return json_encode(json_decode($json), JSON_PRETTY_PRINT);
    }
}

if ( ! function_exists('host') ) {
	
	/**
	 * Get current host
	 *
	 * @return string
	 */
	function host() {
		
		if ( isset($_SERVER['USER']) && gethostname() !== false ) {
            
            return $_SERVER['USER'].'@'.gethostname();
        }
        
        return php_uname();
	}
}

if ( ! function_exists('makeArray') ) {
	
	/**
	 * Force the given value to be an array
	 *
	 * @param  string|array $value
	 * @return array
	 */
	function makeArray(&$value) {
		
		if (! is_array($value)) {
			
			$value = [$value];
		}
		
		return $value;
	}
}