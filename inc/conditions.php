<?php

// Include mobile Detect lib
include 'Mobile_Detect.php';

// Checking Oxygen is Loaded && Register Condition
if (function_exists('oxygen_vsb_register_condition')) {

    oxygen_vsb_register_condition('Is Device Type',
        array(
            'options' => array('Mobile', 'Desktop', 'Tablet', 'Android', 'iOS'),
            'custom' => false),
        array('=='), 'condition_mobile_callback', 'Mobile Detect');
}

/**
 * Callback function to handle the condition.
 * @param  string     $value        Input value - Desktop or Mobile.
 * @param  string     $operator     Comparison operator selected by the user currently '=='.
 *
 * @return boolean                  true or false.
 */
function condition_mobile_callback($value, $operator)
{

    $detect = new Mobile_Detect;
    $value = strval($value);

    if ($operator == "==" && $value == 'Mobile') {

        return ($detect->isMobile()) ? true : false;

    } elseif ($operator == "==" && $value == 'Desktop') {

        if (!$detect->isMobile()) {
            return true;
        } else {
            return false;
        }
    } elseif ($operator == "==" && $value == 'Tablet') {
        return ($detect->isTablet()) ? true : false;
    } elseif ($operator == "==" && $value == 'Android') {
        return ($detect->isAndroidOS()) ? true : false;
    } elseif ($operator == "==" && $value == 'iOS') {
        return ($detect->isiOS()) ? true : false;
    }

}

// $detect->isAndroidOS()
// isiOS()
