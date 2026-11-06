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
        date_default_timezone_set("America/Moncton");
        $now = time();//Get the current date time as EPOCH Seconds / UNIX timestamp
        $date = strtotime("2026-10-4 14:35:05")
    ?>
    <h1>Now EPOCH Seconds <?=$now ?></h1>
    <h2>Now Formatted date: <?= date("Y-m-d H:i:s", $now) ?></h2>

     <h1>EPOCH Seconds of our constructed date: <?=$date ?></h1>
     <h2>Formatted date: <?= date("Y-m-d H:i:s", $date) ?></h2>
</body>
</html>