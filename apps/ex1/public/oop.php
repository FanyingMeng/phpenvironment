<?php include_once("../includes/student.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>

</head>

<body>
    <h1>OOP</h1>
    <a href="/">Home</a><br>
    <?php
    // Create an object
    $student1 = new Student("ff", "mm");

    echo $student1->firstName;
    echo "<br>";
    $student1->firstName = "cc";
    echo "<br>";
    echo $student1->firstName;
    echo "<br>";
    echo $student1->getFullName();
    echo "<br>";

    $student2 = new Student("John", "Smith");
    $student3 = new Student("Tom", "Brown");
    $student4 = new Student("Alice", "Johnson");

    // Create students array
    $students = [
        $student1,
        $student2,
        $student3
    ];

    //add elements to array
    array_push($students, $student4);

    ?>

    <ol>
        <?php
        for ($i = 0; $i < count($students); $i++) {
            echo "<li>" . $students[$i]->getFullName() ."</li>";
            
        }
        ?>
    </ol>

    <ul>
        <?php
            foreach ($students as $s) {
                echo "<li>". $s->getFullName() ."</li>";
            }
        ?>
    </ul>


</body>

</html>