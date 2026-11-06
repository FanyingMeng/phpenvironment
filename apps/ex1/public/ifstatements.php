<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If statements</title>
    <?php include_once("../includes/styles.php"); ?>
</head>

<body>
    <h1>If statements</h1>
    <a href="index.php">Home</a>

    <?php
    $x = 5;
    $y = 13;
    

   if ($x > $y) {
        echo "<div>$x is greater than $y</div>";
    } else if ($x < $y) {
        echo "<div>$x is less than $y</div>";
    } else {
        echo "<div>$x is equal to $y</div>";
    }

    //$z = $_GET["value"];// read a query string param called value
    // echo"<div> $z</div>";

    if(isset($_GET["value"])) {
        $z = $_GET["value"];// read a query string param called value
        if (is_numeric($z)) {
            if($z > $x && $z > $y) {
                 echo "<div>$z is greater than  $x and $y</div>";
            } else {
                echo "<div>$z is not greater than  $x and $y</div>";
            }
        }else{
            echo"<div> the value query string param value $z is not numeric </div>";
        }
    }else{
        echo"<div> the value query string param was not set</div>";
    }
    ?>


</html>