<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

</head>
<body>
    


<?php
session_start();

if(isset($_SESSION['username'])){
    ?>
    <h1>THIS IS THE LOGGED IN PAGE</h1>

    <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Name:</span>
  <input type="text" class="form-control" id="inputId" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
</div>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#exampleModal" id = "submit">
        LOG OUT!
        </button>
        

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Confirm Logout</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        Are you sure you want to Logout?
        </div>
        <div class = "show">

        </div>


        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary btn-danger" onclick="window.location.href='logout.php'">LOG OUT</button>
        </div>
        </div>
        </div>
        </div>
    <?php
}
else{
    ?>
    <h1>THIS IS NOT THE LOGGED IN PAGE</h1>
    <?php
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>   


<script>
    //  function getInputValue() {
    //    // Selecting the input element and get its value 
    //    let inputVal = document.getElementById("inputId").value;
    //    document.getElementById('show').innerHTML=inputVal;
    //  }

     jQuery(document).ready(function(){
         jQuery('#submit').on('click',function(){
             var inputagvalue = jQuery('#inputId').val();
             console.log(inputagvalue);
             jQuery('.show').html(inputagvalue);
         })
     })


    </script>
</body>

</html>

