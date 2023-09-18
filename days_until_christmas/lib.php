<?php

/**
 * Local plugin "days_until_christmas" - Version file
 *
 * @package    local_days_until_christmas
 * @copyright  Martin Wright
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

 function days_until_christmas() {

   date_default_timezone_set('Europe/London');
    
   $christmasDay = strtotime('December 25');

   $time = time();

   $seconds = $christmasDay - $time;
   $minutes = $seconds / 60;
   $hours = $minutes / 60;
   $days = ceil($hours / 24);

   return "There are " . $days . " days until Christmas";
 }
 
 
 function local_days_until_christmas_before_footer() {
    \core\notification::add(days_until_christmas(), \core\output\notification::NOTIFY_WARNING);
 }