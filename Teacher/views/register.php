<!DOCTYPE html>
<html>
<head>

    <h3><a href="">Home  |  </a>  <a href="">Login  |  </a>  <a href="signup.php">Registration </a></h3>

</head>
<body>
<fieldset>
    <legend><b>REGISTRATION</b></legend>
	<form action="../php/signupController.php" method="post" enctype="multipart/form-data" name="reg_main">
		<br/>
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><input name="name" type="text"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td>
					<input name="email" type="text">
					<abbr title="hint: sample@example.com"><b>i</b></abbr>
				</td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Phone No.</td>
				<td>:</td>
				<td><input name="phoneNo" type="text"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input name="password" type="password"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Confirm Password</td>
				<td>:</td>
				<td><input name="confirmPassword" type="password"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td colspan="3">
					<fieldset>
						<legend>Gender</legend>    
						<input name="gender" type="radio" value="male">Male
						<input name="gender" type="radio" value="female">Female
						<input name="gender" type="radio" value="other">Other
					</fieldset>
				</td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td colspan="3">
					<fieldset>
						<legend>Date of Birth</legend>    
						<input type="text" size="2" name="day" />/
						<input type="text" size="2" name="month" />/
						<input type="text" size="4" name="year" />
						<font size="2"><i>(dd/mm/yyyy)</i></font>
					</fieldset>
				</td>
				<td></td>
			</tr>
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td colspan="3">
					<fieldset>
						<legend>User Type</legend>    
						<select name="usertype">
							<option value="admin">Admin</option>
							<option value="teacher">Teacher</option>
							<option value="student">Student</option>
							<option value="guardian">Guardian</option>
						</select>
					</fieldset>
				</td>
				<td></td>
			</tr>
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td colspan="3">
					<fieldset>
						<legend>User Photo</legend>    
						<input type="file" name="userphoto">
					</fieldset>
				</td>
				<td></td>
			</tr>
			<tr><td colspan="4"><hr/></td></tr>

		</table>
		<hr/>
		<input type="submit" value="Submit" name="submit" >
		<input type="reset">
	</form>
</fieldset>

</body>
</html>