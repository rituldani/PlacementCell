<?php
	session_start();
	$username = $_POST['username'];
	$password  = $_POST['password'];
?>

	
<?php 	
	if ($username&&$password)
	{
		// $connect = mysqli_connect("localhost","root","") or die("Couldn't Connect");
		// mysqli_select_db("placement") or die("Cant find DB");
		$connect = new mysqli("localhost", "root", "", "placement", 3307);

		// Check connection
		if ($connect->connect_error) {
		    die("Connection failed: " . $connect->connect_error);
		}
		
		// $query = mysqli_query("SELECT * FROM plogin WHERE Username='$pusername'");
		$query = mysqli_query($connect, "SELECT * FROM slogin WHERE USN='$username'");

		
		$numrows = mysqli_num_rows($query);
		
		if ($numrows!=0)
		{
			while($row = mysqli_fetch_assoc($query))
			{
				$dbusername = $row['Username'];
				$dbpassword = $row['Password'];
				
			}
			if ($username==$dbusername&&$password==$dbpassword)
			{
			  echo "<center>Login Successfull..!! <br/>Redirecting you to HomePage! </br>If not Goto <a href='index.php'> Here </a></center>";
			  echo "<meta http-equiv='refresh' content ='3; url=index.php'>";
			 $_SESSION['pusername'] = $username;
			} else {
			$message = "Username and/or Password incorrect.";
  			echo "<script type='text/javascript'>alert('$message');</script>";
			  echo "<center>Redirecting you back to Login Page! If not Goto <a href='index.php'> Here </a></center>";
			  echo "<meta http-equiv='refresh' content ='1; url=index.php'>";
			}
		}else
			die("User not exist");
		
	}
	else
	header("location: index.php");
	?>