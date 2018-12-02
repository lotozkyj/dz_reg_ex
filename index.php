<?php


function getPhonesFromText($str){
    preg_match_all('/(\+?3?8?0\d{9})/', $str,$mathes);
    return $mathes[0];
}

$str = '+3809911223340912234567380987651234';

print_r(getPhonesFromText($str));


function getIPsFromText($str){
    preg_match_all('/((\d{1,3}.){3}\d{1,3})/', $str,$mathes);
    return $mathes[0];
}

$ips = "10.3.124.55127.678.56.67";

echo '<pre>';

print_r(getIPsFromText($ips));

function getCorrectPhoneNumber($str){
    $phonesArr = getPhonesFromText($str);
    $patternForPhones = array('/(^0\d{9})/','/(^80\d{9})/','/(^380\d{9})/');
    $replacementForPhones = array('+38$1', '+3$1', '+$1');
    return preg_replace($patternForPhones, $replacementForPhones, $phonesArr);
}

echo '<pre>';


$strPhones = '+3809911223340912234567380987651234';

print_r(getCorrectPhoneNumber($strPhones));