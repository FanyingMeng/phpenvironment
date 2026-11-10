<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Handling thrown exception </title>
    <?php include_once("../includes/styles.php");?>
</head>
<body>
    <h1>Handling thrown exception</h1>
    <a href="/">Home</a>
    <div>
        <?php
        try {
            $date = new DateTime("invalid dates");
            echo $date->format("Y-m-dates");
        } catch (Exception $e) {
            echo "An error occured: ".$e->getMessage();
        }
            
        ?>
    </div>
</body>
</html>