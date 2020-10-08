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
         $_SESSION["Items"] = [0,0,0,0,0,0];
         $_SESSION["favanimal"] = "dolphin";
         // echo that variables have been set
?>
<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>Get UR Stuff N Get Out</h1>
  <p>We love your support please feel free to invite your friends to shop here too!</p> 
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="#">Shop</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="cart.php">Cart</a>
      </li>   
      <li class="nav-item">
        <a class="nav-link" href="../../index.php">Home</a>
      </li>   
    </ul>
  </div>  
</nav>

<div class="container" style="margin-top:30px">
  <div class="row">
  <div class="card" id="card1">
    <img class="card-img-top" src="https://picsum.photos/seed/1/300/300" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">Thing 1</h4>
      <p class="card-text">Thing 1 is something that can help you a little</p>
      <a href="#" class="btn btn-primary"id="item1"value=200>Add to cart - $200</a>
  </div>
</div>
<div class="card" id="card2">
    <img class="card-img-top" src="https://picsum.photos/seed/2/300/300" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">Thing 2</h4>
      <p class="card-text">Thing 2 is something that can help you somewhat</p>
      <a href="#" class="btn btn-primary"id="item2" value=300>Add to cart - $300</a>
  </div>
</div>
<div class="card" id="card3">
    <img class="card-img-top" src="https://picsum.photos/seed/3/300/300" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">Thing 3</h4>
      <p class="card-text">Thing 3 is something that can help you a little more</p>
      <a href="#" class="btn btn-primary"id="item3" value=400>Add to cart - $400</a>
  </div>
</div>
<div class="card" id="card4">
    <img class="card-img-top" src="https://picsum.photos/seed/4/300/300" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">Thing 4</h4>
      <p class="card-text">Thing 4 is something that can help you a somemore</p>
      <a href="#" class="btn btn-primary"id="item4" value=500>Add to cart - $500</a>
  </div>
</div>
<div class="card" id="card5">
    <img class="card-img-top" src="https://picsum.photos/seed/5/300/300" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">Thing 5</h4>
      <p class="card-text">Thing 5 is something that can help you quite a bit</p>
      <a href="#" class="btn btn-primary"id="item5" value=600>Add to cart - $600</a>
  </div>
</div>
<div class="card" id="card6">
    <img class="card-img-top" src="https://picsum.photos/seed/6/300/300" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">Thing 6</h4>
      <p class="card-text">Thing 6 is something that can help you a lot</p>
      <a href="#" class="btn btn-primary" id="item6" value=700>Add to cart - $700</a>
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

