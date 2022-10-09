<?php 

 
include './dbConn.php';

 if($_SERVER['REQUEST_METHOD'] == "GET"){

   // LOGIC .... 
   
     $id  = $_GET['id'];
    
     // DB Opretaion ... 
        $sql = "DELETE FROM `users` where `id` =".$id;

        $op = mysqli_query($conn,$sql);
    
     header("Location: index.php");

 }



?>