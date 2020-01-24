<?php
   // Start the session
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Get Ur Stuff N Get Out</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  .card{
      width:350px;
      margin: 10px;
  }
  .row{
      text-align:center;
      justify-content:center;
  }
  </style>
</head>
<body>
<?php
         // remove previous session variable
         // Set session variables
         $_SESSION["favcolor"] = "green";
         $_SESSION["favanimal"] = "dolphin";
         // echo that variables have been set
         echo "Session variables have been set.";
?>
<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>Get UR Stuff N Get Out</h1>
  <p>We love your support please feel free to invite your friends to shope here too!</p> 
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="#">Shop</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="cart.php" href="#">Cart</a>
      </li>   
      <li class="nav-item">
        <a class="../index.php" href="#">Home</a>
      </li>   
    </ul>
  </div>  
</nav>

<div class="container" style="margin-top:30px">
  <div class="row">
  <div class="card" id="card1">
    <img class="card-img-top" src="https://via.placeholder.com/300" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">John Doe</h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary"id="item1">Add to Cart</a>$200
  </div>
</div>
<div class="card" id="card2">
    <img class="card-img-top" src="https://via.placeholder.com/300" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">John Doe</h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary"id="item2">Add to Cart</a>$300
  </div>
</div>
<div class="card" id="card3">
    <img class="card-img-top" src="https://via.placeholder.com/300" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">John Doe</h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary"id="item3">Add to Cart</a>$400
  </div>
</div>
<div class="card" id="card4">
    <img class="card-img-top" src="https://via.placeholder.com/300" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">John Doe</h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary"id="item4">Add to Cart</a>$500
  </div>
</div>
<div class="card" id="card5">
    <img class="card-img-top" src="https://via.placeholder.com/300" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">John Doe</h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary"id="item5">Add to Cart</a>$600
  </div>
</div>
<div class="card" id="card6">
    <img class="card-img-top" src="https://via.placeholder.com/300" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">John Doe</h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary" id="item6">Add to Cart</a> $700
  </div>
</div>
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
  <p>Your Too low the stuff is up there!</p>
</div>
<?php 
        //this can be used to store items that are put into the cart.
         if(isset($_POST['Submit'])) {
            $_SESSION['pictureUrl'] = $_POST['picture'];
         }
      
      ?>
</body>
</html>

