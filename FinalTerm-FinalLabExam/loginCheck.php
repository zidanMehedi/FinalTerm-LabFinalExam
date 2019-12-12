<?php

require_once('functions.php');
 $uname = $_POST['Id'];
 $pass = $_POST['Pass'];
 $name = getData($uname);
 $type = getType($uname);
setcookie('Name',$name['name'],time()+3600,'/');
echo loginCheck($uname, $pass);

?>