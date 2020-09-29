<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body class="m-auto pt-3">
  <div class="card m-auto" style="width: 55rem;">
    <div class="card-header">
      <h2>03 Teach : Team Activity</h2>
      <div class="card-body">
        <div class="container">

          <form action="teamActivity.php" method="POST">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="name" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
              <label for="email">Email address</label>
              <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
            </div>
            <!-- <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="major" value="Computer Science" checked="">
               <label>Computer Science</label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                
                  <input type="radio" class="form-check-input" name="major" value="Web Design and Development" checked="">
               <label>Web Design and Development</label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="major" value="Computer information Technology" checked="">
                  <label>Computer information Technology</label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                
                  <input type="radio" class="form-check-input" name="major" value="Computer Engineering" checked="">
                  <label>Computer Engineering </label>
            </div> -->
            <?php
            $majors = array("Computer Science", "Web Design and Development", "Computer information Technology", "Computer Engineering");

            for ($i = 0; $i < count($majors); $i++) {
              $list = "<div class='form-check'>";
              $list .= "<label class='form-check-label'>";
              $list .=  "<input type='radio' class='form-check-input' name='major' value='$majors[$i]' checked=''>";
              $list .=  "<label>$majors[$i]</label>";
              $list .= "</div>";
              echo $list;
            }
            ?>
            <br>
            <div class="form-group">
              <label for="comment">Comments</label>
              <textarea class="form-control" name="comment" rows="3"></textarea>
            </div>

            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="continent[]" value="NA">
                North America
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="continent[]" value="SA">
                South America
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="continent[]" value="EU">
                Europe
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="continent[]" value="AS">
                Asia
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="continent[]" value="AU">
                Australia
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="continent[]" value="AF">
                Africa
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="continent[]" value="AN">
                Antarctica
              </label>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="" async defer></script>
</body>

</html>