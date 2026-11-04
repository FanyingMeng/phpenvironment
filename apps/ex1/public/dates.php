<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dates</title>
    <?php include_once("../includes/styles.php");?>
</head>
<body>
    <h1 class="blue">Dates</h1>
    <a href="index.php">Home</a>
    <?php
        $now = time();//Get the current date time as EPOCH Seconds
    ?>
    <h1>EPOCH Seconds <?=$now ?></h1>
    <h2>Formatted date: <?= date("Y-m-d H:i:s", $now) ?></h2>
</body>
</html>