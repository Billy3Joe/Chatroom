
<?php
	include ('includes/database.php');
	
	if (isset($_POST['submit']))
	{
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$username=$_POST['username'];
		$birthday=$_POST['day']."/".$_POST['month']."/".$_POST['year'];
		$gender=$_POST['gender'];
		$number=$_POST['number'];
		$email=$_POST['email'];
		// $password= $_POST['password']; 
		$password= password_hash($_POST['password'], PASSWORD_DEFAULT); 
		
		
			$sql=mySQLi_query($con,"select * from user WHERE email='$email'");
			$row=mySQLi_num_rows($sql);


			if ($row > 0)
			{
			echo "<script>alert('E-mail already taken!'); window.location='signup.php'</script>";
			}
			else
		{
			mySQLi_query($con,"INSERT INTO user (firstname,lastname,username,birthday,gender,number,email,password)
			VALUES ('$firstname','$lastname','$username','$birthday','$gender','$number','$email','$password')");
			echo "<script>alert('Account successfully created!'); window.location='signin.php'</script>";
			
		}
			
	}
	
?>