<?php

if ( ! function_exists('ddquery') ) {

	/**
	 * Debug query by outputing sql + bindings
	 *
	 * @param  Illuminate\Database\Eloquent\Builder $query
	 * @return array
	 */
	function ddquery(Illuminate\Database\Eloquent\Builder $query) {
		
		$sql = explode('?', $query->toSql());
		$bindings = $query->getBindings();
		$fullString = '';
		
		foreach ($sql as $key => $parameter) {
		
			$fullString .= $parameter.(array_key_exists($key,$bindings) ? '\''.$bindings[$key].'\'' : '');
		}
		
		return dd(
			$query->toSql(),
			$query->getBindings(),
			$fullString
		);
	}
}

if ( ! function_exists('ddf') ) {

	/**
	 * Adds file name and line location to dd()
	 *
	 * @return array
	 */
	function ddf() {

		if (request()->ajax()) {
			header("HTTP/1.0 500 Internal Server Error");
		}

		$args = func_get_args();

		array_unshift($args, basename(debug_backtrace()[0]['file']).' line '.debug_backtrace()[0]['line']);

		array_map(function ($value) {
            (new \Illuminate\Support\Debug\Dumper)->dump($value);
        }, $args);

        die(1);
	}
}

if ( ! function_exists('dda')) {
	
	/**
	 * Die and dump a specific attribute on a collection of models.
	 *
	 * @param  Illuminate\Support\Collection $collection
	 * @param  string                        $attribute
	 * @return void
	 */
	function dda($collection, $attribute) {
		
		dd($collection->map(function($item) use($attribute) {
			return $item->$attribute;
		}));
	}
}

if ( ! function_exists('enableQueryLog')) {
	
	/**
	 * Enable the laravel database query log.
	 *
	 * @return void
	 */
	function enableQueryLog() {
		
		\DB::enableQueryLog();
	}
}

if ( ! function_exists('dumpQueryLog')) {
	
	/**
	 * Dump the entire laravel database query log.
	 *
	 * @return void
	 */
	function dumpQueryLog() {
		
		dd(\DB::getQueryLog());
	}
}

if ( ! function_exists('dumpSimpleQueryLog')) {
	
	/**
	 * Dump only the query line of the laravel database query log.
	 *
	 * @return void
	 */
	function dumpSimpleQueryLog() {
		
		dd(collect(\DB::getQueryLog())->map(function($q) {
			return $q['query'];
		}));
	}
}