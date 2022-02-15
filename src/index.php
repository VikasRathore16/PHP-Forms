<?php
// Turn off all error reporting
error_reporting(0);
if (isset($_GET)) {
  $length = $_GET['length'];
  $width = $_GET['width'];
}
$area = $length * $width;
$perimeter = 2*($length + $width);


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>PHP-Forms</title>
</head>

<body>
  <div class="wrapper">
    <h3> Area and Perimeter</h3>
    <form method="GET" action="">
      <div class="user">
        <dv class="col">
          <label for="Length" class="row">Length of Rectangle</label>
          <label for="Width" class="row">Width of Rectangle</label>
        </dv>
        <div class="col">
          <input type="text" name="length">
          <input type="text"  name="width">
          
        </div>
      </div>
      <div class="btn">
        <input type="submit" value="Calculate Perimeter And Area" name="submit">
      </div>
    </form>
    <h3>Area of Rectangle : <?php echo $area ?> sq_mtr</h3>
    <h3>Perimeter of Rectangle : <?php echo $perimeter ?> mtr</h3>
  </div>
</body>

</html>
