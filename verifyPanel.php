<?php

include "functions.php";

function masterconnect(){

global $dbcon;
$dbcon = mysqli_connect('localhost', 'haris', '123456', 'altislife') or die ('Database connection failed');
}

function loginconnect(){

global $dbconL;
$dbconL = mysqli_connect('localhost', 'haris', '123456', 'altislife');
}

function Rconconnect(){

global $rcon;
$rcon = new \Nizarii\ArmaRConClass\ARC('127.0.0.0', 2310, 'roft221133');
}

global $DBHost;
$DBHost = 'localhost';
global $DBUser;
$DBUser = 'haris';
global $DBPass;
$DBPass = '123456';
global $DBName;
$DBName = 'altislife';

global $RconHost;
$RconHost = '127.0.0.0';
global $RconPort;
$RconPort = 2310;
global $RconPass;
$RconPass = 'haris';

global $maxCop;
$maxCop = 7;
global $maxMedic;
$maxMedic = 5;
global $maxAdmin;
$maxAdmin = 5;
global $maxDonator;
$maxDonator = 5;

global $apiUser;
$apiUser = 'default';
global $apiPass;
$apiPass = 'password';
global $apiEnable;
$apiEnable = 1;

?>
