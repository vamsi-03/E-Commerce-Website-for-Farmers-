<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<style>
    body{
        background-color: ivory;
    }
    
   .container{
       margin:auto;
       background-color: aqua;
       position:relative;
       padding:100px;
       
       }
 
    .button{
        border: 2px solid ivory;
        border-radius: 7px;
        background-color: blue;
        color: ivory;
        margin-bottom: 10px;
        padding: 10px 30px 10px 30px;
        margin-top: 10px;
        margin-left: 0px;
    }
    .button:hover{
        box-shadow: 7px 7px 50px white;
        transition: 1s;
    }
    .button2:hover{
        box-shadow: 7px 7px 50px white;
        transition: 1s;
    }
    .button2{
        border: 2px solid ivory;
        border-radius: 7px;
        background-color: rgba(205, 92, 92, 0.863);
        color: white;
        margin-bottom: 10px;
        margin-left: 0px;
        padding: 10px 30px 10px 30px;
    }
   
</style>
<body>
   <?php 
   $conn = mysqli_connect("localhost", "root", "", "farmer") or die("connection failed");

   if(!empty($_POST['save']))
   {
       $First_name = $_POST['First_name'];
       $Password = $_POST['Password'];

       $sql = "select * from register where First_name='$First_name' and Password='$Password'";
       $result = mysqli_query($conn,$sql);
       $count = mysqli_num_rows($result);
       if($count>0)
       {
           echo "login successful";
           header("Location:http://localhost/wt-mini-project-master/farmer/farmerbase/farmerbasepage.html");
       }
       else{
           echo "login not successful";
       }
   }
   ?>
    <form method="post" >
        <div class="container" >
            <h2>Farmer Login</h2>
      <p> <label for="First_name">Username</label>
       <input type="text" id="First_name" name="First_name">
</p>
<p>
       <label for="Password">Password:</label>
       <input type="password" id="Password" name="Password">
</p>
<input type="submit" name="save" value="Login"/>
    </form>
    <a>new user?</a>
    <a href="http://localhost/wt-mini-project-master/farmer/farmerregistration.html"><button type="button">Sign Up</button></a>
</div>
</body>
</html>