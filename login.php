<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>    
<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LOGIN PAGE</title>
    
  </head>
  <body>
    <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
    
<div class="text-center">
<form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">User name</label><br>
    <input type="text"  id="exampleInputEmail1" aria-describedby="emailHelp" name = "uname">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label><br>
    <input type="password" id="exampleInputPassword1" name = "psw">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit"  name = "submit"class="btn btn-primary">Submit</button>
</form>
</div>

  </body>
</html>

<?php
session_start();
if(isset($_POST['submit'])){
  $conn = mysqli_connect("localhost","root","","project","3306");
     if(!$conn){
         echo "Can't connect database" . mysqli_connect_error($conn);
         exit;
     }
 
     $username = $_POST["uname"];
     $Password = $_POST["psw"];
     
    
     $query = "SELECT username,Password from users where username = '$username';";
     $result= mysqli_query($conn, $query);
    
     $row= mysqli_fetch_assoc($result);
     
     print_r($row);
     
 
     if($username != $row['username'] OR $Password != $row['Password']){
          echo "<script> alert('Username and Password mismatch. Please fill it again');
          window.location.href = 'index.php';
         
          </script>;";
      }
 
      else if($username == $row['username'] OR $Password == $row['Password']){
        $_SESSION['username'] = $username;
          echo "<script> alert('Successfully Logged in!');
          window.location.href = 'admin.php';
         
          </script>;"; 
     }
}
?>