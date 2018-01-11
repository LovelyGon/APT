<?php

use PragmaRX\Coollection\Support\Str;
use PragmaRX\Coollection\Package\Coollection;

if (! function_exists('coollect')) {
    /**
     * Create a collection from the given value.
     *
     * @param  mixed  $value
     * @return \Tightenco\Collect\Support\Collection
     */
    function coollect($value = null)
    {
        return new Coollection($value);
    }
}


if (! function_exists('snake')) {
    /**
     * Convert a string to snake case.
     *
     * @param  string  $value
     * @param  string  $delimiter
     * @return string
     */
    function snake($value, $delimiter = '_')
    {
        return Str::snake($value, $delimiter);
    }
}

if (! function_exists('lower')) {
    /**
     * Convert the given string to lower-case.
     *
     * @param  string  $value
     * @return string
     */
    function lower($value)
    {
        return mb_strtolower($value, 'UTF-8');
    }
}

if (! function_exists('upper')) {
    /**
     * Convert the given string to lower-case.
     *
     * @param  string  $value
     * @return string
     */
    function upper($value)
    {
        return mb_strtoupper($value, 'UTF-8');
    }
}

if (! function_exists('dump')) {
    function dump(...$args)
    {
        foreach ($args as $value) {
            var_dump($value);
        }
    }
}

if (! function_exists('dd')) {
    function dd(...$args)
    {
        dump(...$args);

        die;
    }
}

if (! function_exists('starts_with')) {
    /**
     * Determine if a given string starts with a given substring.
     *
     * @param  string  $haystack
     * @param  string|array  $needles
     * @return bool
     */
    function starts_with($haystack, $needles)
    {
        return Str::startsWith($haystack, $needles);
    }
}
