<?php 
    $name = "Diego";
    $lastname = "Petronaci";
    $spazio = " ";
    $name1 = $argv[1];
    $lastname1 = $argv[2];

    echo $argv[0];
    echo $argv[1];
    echo $argv[2];

    echo 'ciao ' . $name1 . $lastname1;

?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1> Benvenuto <?php echo $name . $spazio . $lastname ?> </h1>
    </body>
</html>