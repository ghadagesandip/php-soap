<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
include 'client.php';
$id_array = array('id'=>1);
echo $client->getName($id_array);