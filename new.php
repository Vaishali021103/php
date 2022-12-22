<?php
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
     if($Name="" OR $Password=""){
         echo "<script> alert('Empty Data');
         window.location.href = 'login.php';
       </script>;";
        exit;
     }
     
 
     if($Name != $row['Name'] OR $Password != $row['Password']){
          echo "<script> alert('Username and Password mismatch. Please fill it again');
          window.location.href = 'index.php';
         
          </script>;";
      }
 
      else if($Name == $row['Name'] OR $Password == $row['Password']){
          echo "<script> alert('Successfully Logged in!');
          window.location.href = 'index.php';
         
          </script>;"; 
     }
       
    
?>