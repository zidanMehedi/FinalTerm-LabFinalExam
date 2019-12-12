<?php
require_once('functions.php');

$Name = $_POST['name'];
$ID = $_POST['id'];
$Pass = $_POST['pass'];
$Email = $_POST['email'];
$Type = $_POST['type'];

$status = reg($Name,$ID,$Pass,$Email,$Type);
echo $status;
?>