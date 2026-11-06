<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
    <?php include_once("../includes/styles.php"); ?>
</head>

<body>
    <h1>Functions</h1>
    <a href="/">Home</a>

    <?php

    /**
     * Summary of add
     * @param int|float $x
     * @param int|float $y
     * @return float|int
     */
    function add(int|float $x, int|float $y): int|float
    {
        return $x + $y;
    }

    /**
     * Summary of subtract
     * @param int|float $x
     * @param int|float $y
     * @return float|int
     */
    function subtract(int|float $x, int|float $y): int|float
    {
        return $x - $y;
    }

    /**
     * Summary of multiply
     * @param int|float $x
     * @param int|float $y
     * @return float|int
     */
    function multiply(int|float $x, int|float $y): int|float
    {
        return $x * $y;
    }

    /**
     * Summary of divide
     * @param int|float $x
     * @param int|float $y
     * @return float
     */
    function divide(int|float $x, int|float $y): float
    {
        return $x / $y;
    }

    /**
     * Summary of modulus
     * @param int $x
     * @param int $y
     * @return int
     */
    function modulus(int $x, int $y): int
    {
        return $x % $y;
    }
    ?>

    <div>13 + 5 = <?= add(13, 5) ?></div>

    <div>13 - 5 = <?= subtract(13, 5) ?></div>

    <div>13 * 5 = <?= multiply(13, 5) ?></div>

    <div>13 / 5 = <?= divide(13, 5) ?></div>

    <div>13 / 0 = Throws an exception
        <?php
            //division by zero throw a error
            //echo divide(13,0) 
        ?>

    <div>13 % 5 = <?= modulus(13, 5) ?></div>



</body>

</html>