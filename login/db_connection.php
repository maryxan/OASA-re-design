<?php
$host = 'localhost';
$username = 'root';
$password = '';
$db = 'sdi1400300';

$link = mysqli_connect($host,$username,$password,$db);

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>