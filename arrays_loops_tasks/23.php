
<?php

if ( $_POST ){

$sum = 0;

if ( isset($_POST['number']) ){
$number = $_POST['number'];
}

for($i = 0; $i < strlen($number); $i++){
echo $number[$i];
$sum += $number[$i];
}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post" action="">
    <input type="text" name="number" placeholder="Enter number" />
    <input type="submit" />
</form>

<p> <?php echo  "Итог:{$sum}";?> </p>
</body>
</html>