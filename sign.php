<?php
   $success=0;
   $user=0;
   $invalid=0;

   if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
     $username=$_POST['username'];
     $password=$_POST['password'];
     $cpassword=$_POST['cpassword'];
    
    
    $sql="Select * from `registrations` where username='$username'";

    $result=mysqli_query($con,$sql);
    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
           // echo "user already exist";
           $user=1;
        }else{
          if($password===$cpassword){
            $sql="insert into `registrations`(username,password) values('$username','$password')";

            $result=mysqli_query($con,$sql);
            if($result){
                //echo "signup successful";
                $success=1;
                header('location:login.php');
            }
          }else{
              $invalid=1;
            }
        
        }
    }
   }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRATION</title>
    <link rel="stylesheet" href="style.css">
 <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
</head>
<body>

<?php  
  if($user){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>oh no sorry! </strong>user already exits.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
  }

?>

<?php  
  if($invalid){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>oh no sorry! </strong>password did not match.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
  }

?>
<?php  
  if($success){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>success </strong>You are succesfulkly signup.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
  }

?>

   <div class="container" style="background-image:url(img/img2.html)">
   <form action="sign.php" method="post">
   <h1>Sign up</h1>
    <div class="group-1">
    <label for="e-mail">  Name</label>
    <input type="text"  placeholder="enter your username" name="username">
    </div>
    <div class="group-2">
    <label for="password">Password</label>
    <input type="password"  placeholder="enter your password" name="password">
    </div>
    <div class="group-2">
    <label for="password">Confirm Password</label>
    <input type="password"  placeholder="confirm password" name="cpassword">
    </div>
     <div class="group-3">
        <button class="btn">Sign Up</button>
     </div>
   </form>
</div>
</body>
</html>