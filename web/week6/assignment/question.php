
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </head>
    <?php
	    require_once("dbConnect.php");
	    $db = get_db();
    ?>
    <body>
<div class="card w-75">
  <div class="card-body">
   
    <form action="addQuestion.php" method="POST">
    <h5 class="card-title"><input type="text"></h5>
    <p class="card-text"><textarea name="question" id="question" cols="300" rows="10"></textarea></p>
  
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</div>
    
        <script src="" async defer></script>
    </body>
</html>