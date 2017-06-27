<?php
error_reporting(0);
ini_set('display_errors', 'off');

include 'client.php';
$id_array = array('id'=>1);
echo $client->getName($id_array);