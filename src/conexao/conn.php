<?php


$hostname = "sql102.epizy.com";
$database = "epiz_31454026_RIFAS";
$username = "epiz_31454026";
$password = "RLvpAkgFJNv";

if($conecta = mysqli_connect($hostname, $username, $password, $database)){
    echo 'Conected succesfully!!';
} else {
    echo 'Error: '.mysqli_connect_error();
}