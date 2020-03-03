<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

/**
 * This custom Util will return the number of words that we pass to the function
 *
 * @param  string  $string  String to count
 *
 * @return  integer
 */
function wordCount($string = '')
{
	// If it is not string or if the string is empty we will just return 0
	if (!is_string($string) || trim($string) == '')
	{
		return 0;
	}

	// Pattern is anything that can be a word divider: ., !, ?, tab key, ...
	$pattern        = "/[^(\w|\d|\'|\"|\.|\!|\?|;|,|\\|\/|\-\-|:|\&|@)]+/";
	$filteredString = trim(preg_replace($pattern, " ", $string));

	// After filtering maybe there is no actual word in the string so we just return 0. Ex: " "
	if ($filteredString == '')
	{
		return 0;
	}

	return count(explode(" ", $filteredString));
}
