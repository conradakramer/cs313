<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Yay team</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="team2.css">
    </head>
    <body>
    <?php session_start(); ?>
    <h1>PHP Team Activity</h1>
    <?php for ($i = 0; $i < 10; $i++) {
    $s .= '<div';
    if ($i % 2 == 0) {
      $s .= ' style="color:red"';
    }
    $s .= '>This is div #' . $i . '</div>';
  } ?>
  <?php echo $s; ?>
        <script src="" async defer></script>
    </body>
</html>


