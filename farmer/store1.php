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
			box-shadow:10px;

		}
		</style>
	<center>
		<div class="container">
		<?php

		
		$conn = mysqli_connect("localhost", "root", "", "farmer");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
	
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO login VALUES ('$username','$password')";
		
		if(mysqli_query($conn, $sql)){
			echo "registration successful";
			echo "<br><br>";
			
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
