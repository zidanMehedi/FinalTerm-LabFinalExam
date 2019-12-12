<?php

function reg($name,$id,$pass,$email,$type)
{
	$con = mysqli_connect("localhost","root","","webproject");
	$sql = "insert into user values('{$id}','{$pass}','{$name}','{$email}','{$type}')";
	if(mysqli_query($con,$sql))
	{
		return true;
	}
	else
		return false;
}

function loginCheck($uname, $password)
	{
		$con = mysqli_connect("localhost","root","","webproject");
		$sql = "select * from users where username='{$uname}' and password='{$password}'";
		return count(mysqli_query($con, $sql));
	}

function getType($uname)
{
	$con = mysqli_connect("localhost","root","","webproject");
	$sql = "select type from user where userid='{$uname}'";
	return mysqli_query($con,$sql);
}

?>