<!DOCTYPE html>
<html>

	<head>
		<title>Bienvenue à chatroom - Sin up, Log in, Chat </title>
		<link rel="stylesheet" type="text/css" href="css/signup.css">
	</head>

<body>

	<div id="container">
		<div class="sign-in-form">
		<center>	
			<h1 style="color:#ffff;">Bienvenue à4 chatroom</h1>
		</center>

			<h2 style="text-align: center; color:#ffff;">Sign up</h2>
			<b>All fields are required.</b>
		<br />
		
		<fieldset class="sign-up-form-1" style="background-color:#fc9c1f;">
		<form method="post" action="signup_form.php" enctype="multipart/form-data">
			<table cellpadding="5" cellspacing="5" style="background-color:#fc9c1f;">
				<tr>
					<td><label>First name*</label></td>
					<td><label>Last name *</label></td>
				</tr>
				<tr>
					<td><input type="text" name="firstname" placeholder="Enter your firstname....." class="form-1" title="Enter your firstname" required /></td>
					<td><input type="text" name="lastname" placeholder="Enter your lastname....." class="form-1" title="Enter your lastname" required /></td>
				</tr>
				<tr>
					<td><label>User name*</label></td>
				</tr>
				<tr>
					<td><input type="text" name="username" placeholder="Enter your username....." class="form-1" title="Enter your username" required /></td>
				</tr>
				<tr>
					<td colspan="2">Note: No one can follow your username.</td>
				</tr>
			</table>
		</fieldset>
		
		<br />		
		
		<fieldset class="sign-up-form-1" style="background-color:#fc9c1f;">
			<legend>Profile information</legend>
			<table cellpadding="5" cellspacing="5" style="background-color:#fc9c1f;">
				<tr>
					<td><label>Birthday</label></td>
					<td>
					<select name=day style="font-size:18px;" required>
					<?php

					$day=1;
					while($day<=31)
					  {
					  echo "<option> $day
					  </option>";
					  $day++;
					  }
					?>
					</select>
					<select name=month style="font-size:18px;" required>
						<option>January</option>
						<option>Febuary</option>
						<option>March</option>
						<option>April</option>
						<option>May</option>
						<option>June</option>
						<option>July</option>
						<option>August</option>
						<option>September</option>
						<option>October</option>
						<option>November</option>
						<option>December</option>
					</select>
					<select name=year style="font-size:18px;" required>
					<?php
					$year=1901;
					while($year<=2014)
					  {
					  echo "<option> $year
					  </option>";
					  $year++;
					  }
					?>
					</select>
					</td>
				</tr>
				<tr>
					<td><label>Gender</label></td>
					<td>
					<label>Male</label><input type="radio" name="gender" value="male" required />
					<label>Female</label><input type="radio" name="gender" value="female" required />
					</td>
				</tr>
				<tr>
					<td><label>Mobile number*</label></td>
					<td><input type="text" name="number" placeholder="09...." maxlength="13" class="form-1" title="Enter your mobile number" required /></td>
				</tr>
			</table>
		</fieldset>
		
		<br />
		
		<fieldset class="sign-up-form-1" style="background-color:#fc9c1f;">
			<legend>Log in information*</legend>
			<table cellpadding="5" cellspacing="5" style="background-color:#fc9c1f;">
				<tr>
					<td><label>Your email address*</label></td>
				</tr>
				<tr>
					<td><input type="text" name="email" placeholder="Enter your email address....." class="form-1" title="Enter your firstname" required /></td>
				</tr>
				<tr>
					<td colspan="2">Note: no-one can see your email address.</td>
				</tr>
				<tr>
					<td><label>Password*</label></td>
				</tr>
				<tr>
					<td><input type="password" name="password" placeholder="Enter your password....." class="form-1" title="Enter your username" required /></td>
				</tr>
				<tr>
					<td colspan="2">Note: no-one else can see your password.</td>
				</tr>
			</table>
		</fieldset>
		
		<!-- <br />
		
			<strong>Yes, I have read and I accept the <a href="#">Biobook Terms of Use</a> and the <a href="#">Biobook Privacy Statement</a></strong>
			
		<br /> -->
		<br />
					<input type="submit" name="submit" value="I Agree - Continue" class="btn-sign-in" title="Log in" />
		</form>
		
		</div>
	</div>

</body>

</html>