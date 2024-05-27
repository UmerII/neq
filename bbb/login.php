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
<title>Login-page</title>
</head>
<style>
    input{
        margin: 10px;
    }
</style>
<body>

<h1 style="text-align: center" class="alert alert-dark">login form</h1>
<div class="container">
    <form method="post">
        <input type="text" name="username" placeholder="Enter Your Username" class="form-control">
        <input type="password" name="password" placeholder="Enter Your Password" class="form-control">
        <button type="submit" name="btn-login" class="btn btn-success">login</button>
    </form>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
<?php 

if(isset($_POST['btn-login']))
{
    
    $email = $_POST['email'];   
    $password = $_POST['password'];
    
   $select = " SELECT * FROM sign_up WHERE email = '$email' and password = '$password'"; 
   
   $result = mysqli_query($conn,$select);
   if($result)
   {
    header("location:index1.php");
   }
}




?>
</html>


