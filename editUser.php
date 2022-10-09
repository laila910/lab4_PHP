<?php 

include './dbConn.php';
$id ='';
  

if($_SERVER['REQUEST_METHOD'] == "GET"){

    // LOGIC .... 
    
      $id=$_GET['id']; // id of clicked specific user
     
    
} 

if($_SERVER['REQUEST_METHOD']=='POST'){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
  
    if(isset($_POST['status'])=='yes'){

    $status=$_POST['status'];

    $sql="UPDATE `users` SET `name`='$name',`email`='$email',`gender`='$gender',`status`='$status' WHERE `id`=". $id;
    $op = mysqli_query($conn,$sql);
 
    }else{
        $sql="UPDATE `users` SET `name`='$name',`email`='$email',`gender`='$gender',`status`='no' WHERE `id`=". $id;
        $op = mysqli_query($conn,$sql);

    }

    if($op){
        $msg='Data Updated';
        header('Location: index.php');
    }else{
        $msg='error please try again';
    }
   
}
$sql = "SELECT * FROM `users` where `id` =".$id;
$op=mysqli_query($conn,$sql);
$FData = mysqli_fetch_assoc($op);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New User</title>
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
            crossorigin="anonymous">
    <!-- Font Awesome -->
    <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css"
            rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <?php if(isset($msg)){?>
        <div class="alert alert-warning" role="alert">
    <?php  echo $msg;} ?>
      </div>
       
            
    </div>
    <div class="container mt-5">
        <h1>Edit User Data</h1>
        <hr>
    </div>
    <div class="container mt-5">
        <p class="text-muted">Please fill this form and submit to add user record to the database</p>
    </div>
<div class="container mt-5">
        <form  action="editUser.php?id=<?php echo $FData['id'];?>"  method="post" class="row g-3" enctype ="multipart/form-data">
            <div class="col-md-12">
                <label for="inputName" class="form-label">Name</label>
                <input type="name" class="form-control" id="inputName" name="name" value="<?php echo $FData['name'];?>">
            </div>
            <div class="col-md-12">
              <label for="inputEmail4" class="form-label">Email</label>
              <input type="email" class="form-control" id="inputEmail4" name="email" value="<?php echo $FData['email']; ?>">
            </div>
            <fieldset class="form-group">
              <div class="row">
                  <legend class="col-form-label col-sm-2 pt-0">Gender <span style="color:red;"></legend>
                  <div class="col-sm-10">
                     <div class="form-check">
                        <input class="form-check-input" type="radio"  id="gridRadios1"  name="gender" value="<?php if($FData['gender']=='female'){echo $FData['gender']; ?>" checked <?php }?>> 
                        <label class="form-check-label" for="gridRadios1">
                       Female
                        </label>
                     </div>
                      <div class="form-check">
                      <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="<?php if($FData['gender']=='male'){echo $FData['gender'];?>" checked <?php } ?>>
                       <label class="form-check-label" for="gridRadios2">
                       Male
                       </label>
                       </div>
                    
                    </div>
                    
               </div>
          </fieldset>
          <div class="form-group row mt-5">
                    <div class="col-sm-2">
                       <div class="col-sm-10">
                          <div class="form-check">
                             <input class="form-check-input" name="status" type="checkbox" id="gridCheck1" value="<?php if($FData['status']=='yes'){ echo $FData['status']; ?>" checked <?php }?>>
                             <label class="form-check-label" for="gridCheck1">  
                             </label>
                           </div>
                      </div>
                    </div>Receive E-Mails from us 
           </div>
           <input type="hidden" name="id" value="<?php echo $FData['id'];?>">
            <div class="col-md-11  mt-2">
              <button type="submit" class="btn btn-primary text-white">Edit User</button>
              <a href="index.php" class="btn btn-light text-black">Cancel</a>
            </div>
 </form>
</div>
   


<!-- Bootstrap files -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
        <script
            src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
</html>