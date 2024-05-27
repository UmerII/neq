<?php 
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Sign-Up</title>
</head>
<style>
    input{
    margin: 10px;
    }
</style>
<body>
<h1 style="text-align: center">Sign Up Here</h1>
<div class="container">
    <form method="post">
        <input type="text" name="username" placeholder="Enter Your Username" class="form-control">
        <input type="email" name="email" placeholder="Enter Your Email" class="form-control">
        <input type="text" name="address" placeholder="Enter Your Address" class="form-control">
        <input type="text" name="age" placeholder="Enter Your Age" class="form-control">
        <input type="password" name="password" placeholder="Enter Your Password" class="form-control">
        <button type="submit" name="btn-signup" class="btn btn-success">Sign up</button>
    </form>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>

<?php 

if(isset($_POST['btn-signup']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $age = $_POST['age'];
    $password = $_POST['password'];
    
   $insert = " INSERT INTO sign_up( username, email, address, age, password) VALUES ('$username','$email','$address','$age','$password')";
   
   $result = mysqli_query($conn,$insert);
   if($result)
   {
    echo"signup completed";
   }
}




?>