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
$result_str = $result = '';
if (isset($_POST['submit'])) {
    $number = $_POST['number'];
}


    $cost1 = 3.50;
    $cost2 = 4.00;
    $cost3 = 5.20;
    $cost4 = 6.50;

    if($number <= 50) {
        $b1 = $number * $cost1;
    }
    else if($number > 50 && $number <= 100) {
        $temp = 50 * $cost1;
        $rem = $number - 50;
        $b1 = $temp + ($rem * $cost2);
    }
    else if($units > 100 && $units <= 200) {
        $temp = (50 * 3.5) + (100 * $cost2);
        $rem = $number - 150;
        $b1 = $temp + ($rem * $cost3);
    }
    else {
        $temp = (50 * 3.5) + (100 * $cost2) + (100 * $cost3);
        $rem = $number - 250;
        $b1 = $temp + ($rem * $cost4);
    }
?>
<body>
		<form action="" method="post">
            	<input type="number" name="number" id="units" placeholder="enter unit" />
            	<input type="submit" name="submit" id="submit" value="Submit" />
		</form>
		<div>
		    <?php echo '' . $totalresult . '' . $b1; ?>
		</div>

</body>
</html>