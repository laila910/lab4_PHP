<?php 

include './dbConn.php';





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <!-- Bootstrap -->
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
  
<div class="container mt-5 mb-5">
    <div class="row">
        <h1 class="col-6">User Details</h1>
        <a class="col-2 btn btn-success text-white text-capitalize font-weight-bold" href="addUser.php"><strong>add new user</strong></a>
    </div>
</div>
<div class="container">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
      <th scope="col">Mail Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>
        <a href="ShowSingleUser.php" data-toggle="tooltip" data-placement="top" title="Show Data Of single User"><img src="img/eye-fill.svg" alt="ShowSingleUserData"></a>
        <a href="editUser.php" data-toggle="tooltip" data-placement="top" title="Edit Single User"><img src="img/pencil-square.svg" alt="EditSingleUser"></a>
        <a href="DeleteUser.php" data-toggle="tooltip" data-placement="top" title="delete Single User"><img src="img/trash3-fill.svg" alt="DeleteOneUser"></a>
    </td>
    </tr>
  </tbody>
</table>
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