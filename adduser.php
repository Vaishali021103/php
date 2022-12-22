<?php
        $conn = mysqli_connect("localhost","root","","project","3306");
    if(!$conn){
        echo "Can't connect database" . mysqli_connect_error($conn);
        exit;
    }

    $username = $_POST["uname"];
    $password = $_POST["psw"];
    $email = $_POST["eml"];

    $query = "INSERT into users(Name,Password,email)VALUES('$username','$password','$email');"; 
    $result= mysqli_query($conn, $query);


    if(!$result){
        echo "Query issue.".mysqli_error($conn);
    }
    else{
        echo "<script>
        alert('Sucsessfully registered!');
        window.location.href = 'http://localhost/project/index.php';
        </script>";
       
    }
    
    ?>
