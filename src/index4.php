<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <!-- taking values from form -->
    <?php
    $number = $_POST["number"];
   
    if($number>1 && $number<50)
    {
      $result =  $number * 3.50;
    
    }
    else if($number>50 && $number <150)
    {
        $result = $number * 4.00;
  
    }
    elseif($number>150 && $number<250)
    {
        $result = $number * 5.20;
 
    }
    elseif($number>250)
    {
        $result = $number * 6.50;

    }
    ?>
    <!-- form start -->
    <form action="" method="post">
        <p>
        <label for ="units">units</label>
        <input type="number" name="number" value="<?php echo $number;?>">
</p>
<input type="submit" name="submit">
</form>
<!-- form end -->
<br>
 <div>
    <?php echo "<h3>Amount:" .$result;"</h3>"?>
</div>

</body>
</html>