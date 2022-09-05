<?php
$myDb = new FLdataBase;
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
session_start();
$conn = $myDb->FLconnect();


$rcp=1;

$checkOK=0;
$karbarName = "";

$islogin=0;

?>
