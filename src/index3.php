<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // get values from form 
    $number = $_POST['number'];
    $min = $_POST['min'];
    $second = $_POST["second"];
    // applied condition to convert hour into min
    if(isset($min))
    {
       $result = $number * 60; 
   
    } 
// applied condition to convert hour into second
    elseif(isset($second))
    {
        $result1 = $number* 3600;

    }
    
    ?>
    <!-- form start -->
    <form action="" method="post">
        <p>
        <label for="number">Enter Number</label>
<input type="number" name="number" value="<?php echo $number;?>">
</p>
<label for="hourmin">Hour to Min</label>
<input type="radio" name="min" value="<?php echo $min;?>">
<br>
<label for="hoursecond">Hour to second</label>
<input type="radio" name="second" value="<?php echo $second;?>">
<p>
    <input type="submit" name="submit" value="convert">
</p>
</form>
<!-- form end -->
<!-- taken div to show result  -->
<div id="hourmin">
    <?php echo "Hour into min :" .$result;?>
</div>
<div id="hoursecond">
    <?php echo "Hour into second :" .$result1;?>
</div>

</body>
</html>