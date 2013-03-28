<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
if (!function_exists('buildDayDropdown'))
{
    function buildDayDropdown($name='',$value='')
    {
        $days = range(1, 31);
		$day_list[''] = 'Day';
        foreach($days as $day)
        {
            $day_list[$day] = $day;
        } 		
        return form_dropdown($name, $day_list, $value);
    }
}	