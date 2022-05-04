<?php

use phpDocumentor\Reflection\Types\Integer;

$rand_otp=random_int(10,30);
$string=array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C',
'D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','1','2','3','4','5','6','7','8','9','0');
// $rand_otp=random_bytes(5);
// echo $rand_otp;
$otp='';
for($i=0;$i<5;$i++){
    $otp.=$string[random_int(0,61)];
}
$result=['status'=>True,'data'=>$otp];
echo json_encode($result);
// print_r($string);
// echo  ob_get_length();
?>
