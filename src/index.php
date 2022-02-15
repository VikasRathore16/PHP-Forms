<?php
if (isset($_GET)) {
  $num1 = $_GET['num1'];
  $num2 = $_GET['num2'];
  $operator = $_GET['submit'];
}

switch ($operator) {
  case "+":
    $result = $num1 + $num2;
    break;
  case "*":
    $result = $num1 * $num2;
    break;
  case "-":
    $result = $num1 - $num2;
    break;
  case "/":
    if($num2 <0 or $num2=="" or $num1==""){
     echo "<span style='color:red'>Cannot be divided by zero and Value should not be empty</span>";
    }
    else{
      $result = $num1 / $num2;
    }
    
    break;
}

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
    <h3> A simple calculator</h3>
    <form method="GET" action="">
      <div class="user">
        <dv class="col">
          <label for="Number 1" class="row">Number 1</label>
          <label for="Number 2" class="row">Number 2</label>
          <label for="Result" class="row">Result</label>
        </dv>
        <div class="col">
          <input type="text" id="unit" name="num1">
          <input type="text" id="unit" name="num2">
          <input type="text" id="unit" name="result" value="<?php echo $result ?>">
        </div>
      </div>
      <div class="btn">
        <input type="submit" value="+" name="submit">
        <input type="submit" value="-" name="submit">
        <input type="submit" value="*" name="submit">
        <input type="submit" value="/" name="submit">
      </div>
    </form>
  </div>
</body>

</html>