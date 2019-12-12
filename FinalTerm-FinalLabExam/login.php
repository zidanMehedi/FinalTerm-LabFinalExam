<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="script.js"></script>
</head>
<body>
	<form action="" method="">
		<fieldset style="width: 0px">
		<legend>LOGIN</legend>
			<table border="0px" cellpadding="0px" cellspacing="0px">
				<tr>
					<td colspan="" height="30px"> <div id="msg"></div></td>
				</tr>
				
				<tr>
					<td >User Id</td>
				</tr>
				<tr><td><input type="text" id="uname"></td></tr>
				<tr><td colspan="3" height="2px"></td></tr>
				<tr>
					<td>Password</td>
				</tr>
				<tr><td><input type="password" id="pass"></td></tr>
				<tr><td colspan="3" height="10px"></td></tr>
				<tr>
					<td colspan="3"><input type="checkbox" value="Yes">Remeber Me</td>
				</tr>
				<tr><td colspan="3"><hr></td></tr>
				<tr><td colspan="3" height="2px"></td></tr>
				<tr>
					<td colspan="3"><input type="button" value="Login" id="login" onclick="loginTime()">&nbsp;<a href="reg.php">Register</a></td>
				</tr>
			</table>
		</fieldset>
	</form>

</body>
</html>