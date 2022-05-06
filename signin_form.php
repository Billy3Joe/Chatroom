					
<?php
include('includes/database.php');

	if(isset($_POST['submit']))
	{
		$email=$_POST['email'];
		$password=$_POST['password'];
		
		$result = mysqli_query($con,"SELECT * FROM user WHERE email = '$email' ");
		$row = mysqli_fetch_array($result);

		$passwordFinal= password_verify($_POST['password'], $row['password']); 
		// var_dump($passwordFinal);
		// die;

		// var_dump($row);

		$count = mysqli_num_rows($result);				
			if ($count == 0) 
				{
				echo "<script>alert('Please check your username'); window.location='signin.php'</script>";
				} else if (!password_verify($_POST['password'], $row['password'])) {
				echo "<script>alert('Please check your password!'); window.location='signin.php'</script>";
				} else if ($count > 0){
					session_start();
					$_SESSION['id'] = $row['user_id'];
					header("location:home.php");
				}
			
	}
?>

