<?php
use App\Models\User;

if (!function_exists('format_date')) {
    /**
     * Format a date into 'Y-m-d' format.
     *
     * @param string|null $date
     * @return string|null
     */
    function format_date($date)
    {
        return $date ? date('Y-m-d', strtotime($date)) : null;
    }
}

if (!function_exists('get_all_priest')) {
    /**
     * Format a date into 'Y-m-d' format.
     *
     * @param string|null $date
     * @return string|null
     */
    function get_all_priest()
    {
        return User::where('role','priest')->get();
    }
}