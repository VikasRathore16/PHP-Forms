<?php
if(isset($_GET)){
   $inp = $_GET["inp"];
  $time = $_GET["time"];
}
if($time == "minute"){
  $result = "<h4>$inp hr = ".$inp * 60 ." minutes</h4>";
}
elseif($time == "second" ){
  $result = "<h4>$inp hrs = ".($inp * 60) * 60 ." seconds </h4>" ;
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
    <form>
      <div class="time">
        <label for="hours" class="hours">
          <input type="number" value="1" id="ihours" name="inp">
        </label>
        <div class="min-sec">
          <input type="radio" name="time" id="minute" value="minute">
          <label for="minute" class="minute">hours to minutes</label>
          <br>
          <input type="radio" name="time" id="second" value="second">
          <label for="second" class="second">Hours to second</label>
        </div>
        <div class="result">
          <p id="res"><?php echo $result ?></p>
        </div>
        <input type="submit" value="Convert" name="convert" id="btn">
        
   
      </div>
    </form>
  </div>
</body>

</html>