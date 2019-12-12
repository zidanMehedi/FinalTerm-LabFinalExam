<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="script.js"></script>
</head>
<body>
	<form action="" method="">
		<fieldset style="width: 0px">
		<legend>REGISTRATION</legend>
			<table border="0px" cellpadding="0px" cellspacing="0px">
				<tr>
					<td colspan="3" height="30px"> <div id="msg"></div></td>
				</tr>
				<tr><td colspan="3" height="2px"></td></tr>
				<tr>
					<td >Id</td>
				</tr>
				<tr>
					<td><input type="text" id="uname"></td>
				</tr>
				<tr>
					<td >Password</td>
				</tr>
				<tr>
					<td><input type="pasword" id="pass"></td>
				</tr>
				<tr>
					<td >Confirm Password</td>
				</tr>
				<tr>
					<td><input type="password" id="cpass"></td>
				</tr>
				<tr>
					<td >Name</td>
				</tr>
				<tr>
					<td><input type="text" id="name"></td>
				</tr>
				<tr>
					<td >Email</td>
				</tr>
				<tr>
					<td><input type="text" id="email"></td>
				</tr>
				<tr>
					<td >User Type</td>
				</tr>
				<tr>
					<td>
						<select name="" id="">
							<option value="">User</option>
							<option value="">Admin</option>
						</select>
					</td>
				</tr>
				<tr><td colspan="3"><hr></td></tr>
				<tr><td colspan="3" height="2px"></td></tr>
				<tr>
					<td colspan="3"><input type="button" value="Register" id="reg" onclick="loginTime()">&nbsp;<a href="login.php">Login</a></td>
				</tr>
			</table>
		</fieldset>
	</form>

</body>
</html>