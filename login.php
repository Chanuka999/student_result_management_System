<?php
  $login=0;
  $invalid=0;
   if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
     $username=$_POST['username'];
     $password=$_POST['password'];

    
    
    $sql="Select * from `registration` where username='$username' and password='$password'";

    $result=mysqli_query($con,$sql);
    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
         $login=1;
         session_start();
         $_SESSION['username']=$username;
         header('location:home.php');
        }else{
           $invalid=1;
        
          
        }
    }
   }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="style.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
</head>
<body>
<?php 
    if($login){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Success </strong>You are successfully logged in.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
      }


?>

<?php 
    if($invalid){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Error </strong>Invalid credentials.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
      }


?>

   <div class="container" style="background-image:url(img/img3.html);">
   <form action="login.php" method="post">
   <h1>login our page</h1>
    <div class="group-1">
    <label for="e-mail">  Name</label>
    <input type="text"  placeholder="enter your username" name="username">
    </div>
    <div class="group-2">
    <label for="password">Password</label>
    <input type="password"  placeholder="enter your password" name="password">
    </div>
     <div class="group-3">
        <button class="btn">Login</button>
     </div>
   </form>
   </div>
</body>
</html>