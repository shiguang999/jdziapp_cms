<?php
include("../../config.php");
error_reporting(0); 
function curl($url){ 
    $ch = curl_init(); 
    $timeout = 5; 
    curl_setopt($ch, CURLOPT_URL, $url); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    $content = trim(curl_exec($ch)); 
    curl_close($ch); 
    return $content; 
}
$tao_url = 'http://'.$muchoConfig['dataoke']['siteurl'].'/index.php?'.$_SERVER["QUERY_STRING"].'&u='.$muchoConfig['dataoke']['siteuid'];
$pcontent = curl($tao_url);
preg_match('/class="theme-bg-color-8" href="(.*)" target="_blank" >领券购买/sU', $pcontent, $temp);
$youtao =  $temp[1];
$ua = strtolower($_SERVER['HTTP_USER_AGENT']);
$uachar = "/(symbianos|android|Mac OS|ucweb|blackberry)/i";
if($ua != '' && !preg_match($uachar, $ua)){
    header("Location: $youtao");
}else {
    header("Location: $tao_url");
}
?>

