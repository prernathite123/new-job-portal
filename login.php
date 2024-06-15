<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
      
      form{
        background-color: #fff;
        margin-top: 6em;
        margin-left:30em;
        margin-right: 10em;
        padding: 30px;
        box-shadow: 10px 10px 8px 10px #888888;

      }
        
    </style>
    <title>Rrgistration Form</title>

</head>


    <Div class="container">
        <form>
        
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
          </div>
          
         
          <button type="submit" class="btn btn-primary" name="login">Submit</button>
        <p style="text-align:cente;">New user? <br>Create account <a href="register.php">Sign up</a></p>
        </form>
        </Div>

</html>-->
<?php
$login=false;
$showError=false;
include'config.php';
if($_SERVER["REQUEST_METHOD"]=="POST"){
$email=$_POST["email"];
$password=$_POST["password"];

$sql="SELECT * FROM 'table' WHERE  email='$email' &&  password='$password'";
  $result=mysqli_query($conn,$sql);
  $num=mysqli_num_rows($result);
  //echo"<pre>";
  //print_r($conn);
  if($num == 1){
    $login = true;
  }
else{
  $showError="Invalid Credentials";
}

//$conn->close();
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
     <!--<div class="alert alert-success d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
  <div>
    An example success alert with an icon
  </div>-->

    <style>
       body{
        background-image:url('Background.jpeg');
      }
      form{
        background-color: #fff;
        margin-top: 6em;
        margin-left:30em;
        margin-right: 10em;
        padding: 30px;
        box-shadow: 10px 10px 8px 10px #888888;

      }
        
    </style>
    <title>Rrgistration Form</title>
   

</head>
<?php  require 'partials/nav.php'   ?>
<?php
if($login){
echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> Your are loged in
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
    }
   if($showError){
      echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> Password do not match
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
          }
?>

    <Div class="container">
        <form action="login.php" method="post">
          
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
          </div>
          
          
          <button type="submit" class="btn btn-primary" name="login">Login</button>
          <br>
          Already Registered <a href=login.php>login</a>
        </form>
        </Div>

</html>