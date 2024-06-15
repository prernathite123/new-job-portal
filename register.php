<?php
$showAlert=false;
$showError=false;
include'config.php';
if($_SERVER["REQUEST_METHOD"]=="POST"){
$name=$_POST["name"];
$email=$_POST["email"];
$number=$_POST["phone_no"];
$password=$_POST["password"];
$cpassword=$_POST["cpassword"];

$exists=false;
if(($password==$cpassword) && $exists==false){
  $sql="INSERT INTO `table1`(`name`, `email`, `password`, `phone_no`)VALUES ('$name','$email','$password','$number')";
  
  $result=mysqli_query($conn,$sql);
  //echo"<pre>";
  //print_r($conn);
  if($result){
    $showAlert=true;
  }
else{
  $showError="Password are not match";
}
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
if($showAlert){
echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> Your account is now crearted you can login
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
        <form action="register.php" method="post">
          <div class="mb-3">
            <label for="exampleInputName" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="exampleInputName" name="name" >
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
            <label for="exampleInputNumber" class="form-label">Phone Number</label>
            <input type="number" class="form-control" id="exampleInputNumber"  name="phone_no">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="cpassword">
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
          <button type="submit" class="btn btn-primary" name="login">Submit</button>
          <br>
          Already Registered <a href=login.php>login</a>
        </form>
        </Div>

</html>