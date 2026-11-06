<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constants</title>
    <?php include_once("../includes/styles.php");?>
</head>
<body>
    <h1>Constants</h1>
    <a href="/">Home</a>
    <?php
        define("COLLEGE","NBCC");
        define("CAMPUS","MONCTON");
        define("MARGIN",0.05);
        //define("CAMPUS","FREDERICtion") // we cannot reassign constants

        const TAX_RATE = 0.15;
        const MAX_STUDENTS = 30;
        const ADDRESS = "1234 Mountain"
    ?>
    
    <h1>I am studying at <?= COLLEGE ?> <?= CAMPUS ?></h1>
    <div>
        Tax Rate: <?= TAX_RATE ?><br>
        Max Students: <?= MAX_STUDENTS ?><br>
        MARGIN: <?= MARGIN ?><br>
        Address: <?= ADDRESS ?>
    </div>
</body>
</html>