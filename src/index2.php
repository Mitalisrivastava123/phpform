<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<?php

$length = $_POST["length"];
$breadth = $_POST["breadth"];
// used isset function to check variable is declared or not
if(isset($length)&& isset($breadth))
{
    $area = $length * $breadth;
    $parameter = 2*($length + $breadth);
    
}

?>
<!-- form start -->
  <form action="" method="post">
    <p>
    <label for="length">Length</label>
    <input type="number" name="length" value="<?php echo $length;?>">
</p>
<p>
    <label for="breadth">Breadth</label>
        <input type="number" name="breadth" value="<?php echo $breadth;?>">
</p>
<p>
        <input type="submit" name="Calculate area and parameter" class="btn1" value="Calculate area and parameter" >
</p>

    </form>
    <div id="area">
    <?php echo "Area is ".$area;?>
    <?php echo "<br>";?>
    </div>  
    <div id="parameter">
        <?php echo "Paramter is".$parameter;?>
</div>
</body>
</html>