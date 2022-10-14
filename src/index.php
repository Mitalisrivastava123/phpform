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
// sending data to form 
 $number1=$_POST['number1'];
 $number2=$_POST['number2'];
$operator=$_POST['operator'];
$result='';
// calculator using switch case
if(isset($number1) &&  isset($number2))
{
  switch($operator)
  {
    case "+":
    $result = $number1 + $number2;
    break;
    case "-":
    $result = $number1 - $number2;
    break;
    case "*":
    $result = $number1 * $number2;
    break;
    case "/":
    $result = $number1 / $number2;
  } 
 
}

 
 ?>
    <!-- php form -->
<form action= "" method="post">
    <p>
        <label for = "number1">Number1</label>
        <input type="number" name="number1" id="number1"  required value="<?php echo $number1; ?>">
</p>
<p>
    <label for="number2">Number2</label>
    <input type="number" name="number2" id="number2" required value="<?php echo $number2;?>">

</p>
<p>
    <label for ="result">Result</label>
<input type="readonly" name="result"  value="<?php echo $result; ?>">
</p>

<div>
<input type="submit" value="+" name="operator" class="op">
<input type="submit" value="-" name="operator" class="op">
<input type="submit" value="*" name="operator" class="op">
<input type="submit" value="/" name="operator" class="op">
</div>
</form>
</body>
</html>