<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo" Hi Start Learning PHP";
    //creating a variable
    $name="Baasith";
    echo "$name";
    //we have to use html tags in php under echo
    echo "<br>";
    //to print
    echo $name;

    echo "<h2> Welcome to H2 </h2>";

    echo gettype($name);
    echo "<br>";

    for ($i=0; $i < 10; $i++) { 
        echo $i;
        echo "<br>";
    }

    ?>
</body>
</html>