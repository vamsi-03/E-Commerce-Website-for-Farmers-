<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<style>
		.button{
			color:orange;
			font-size:100px;
			padding:20px;
		}

		body{
			background-color:grey;
		}
		.container
		{
			margin:1px solid black;
			background-color:pink;
			font-size:50px;
			padding:20px;
			position:relative;
			margin-bottom:1px solid black;
			margin-right:1px solid black;
			margin-left:1px solid black;
		
		}
		button:hover
		{
			box-shadow:2px;

		}
		</style>
	<center>
		<div class="container">
		<?php

		
		$conn = mysqli_connect("localhost", "root", "", "customer");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$First_name = $_REQUEST['firstname'];
		$Last_name = $_REQUEST['lastname'];
		$Phone_no = $_REQUEST['phoneno'];
		$Email = $_REQUEST['Email'];
        $Password = $_REQUEST['Password'];
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO register VALUES ('$First_name',
			'$Last_name','$Phone_no','$Email','$Password')";
		
		if(mysqli_query($conn, $sql)){
			echo "registration successful";
			echo "<br><br>";
			echo "<a href='http://localhost/wt-mini-project-master/customer/customerlogin.php' target='_self'><button>Click here to Login</button></a>"; 
			
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
		</div>
	</center>
</body>

</html>
