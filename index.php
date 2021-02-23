<?php 
    $name = "Diego";
    $lastname = "Petronaci";
    $spazio = " ";
    $name1 = $argv[1];
    $lastname1 = $argv[2];

    echo $argv[0];
    echo $argv[1];
    echo $argv[2];

    echo 'Ciao ' . $name1 . $spazio . $lastname1;

    $string = "ciao, sono Diego Petronaci";
    $newName = str_replace("Diego", "***", $string);
    $newSurname = str_replace("Petronaci", "***", $string);


    $string1 = "ciao, sono Diego Petronaci";
    $newName1 = str_replace($name1, "***", $string1);

    $prova = $_GET["name"];
    $newName2 = str_replace($prova, "***", $string1);

    $provaArray = ["ciao", 30, "ciao", "hey", "hola"];
    var_dump($provaArray);
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1> Benvenuto <?php echo $name . $spazio . $lastname . $spazio ?>, il tuo nome è lungo <?php echo strlen($name) ?> lettere  </h1>
        <h1><?php echo $newName ?>, il mio nome è lungo <?php echo strlen($name) ?> lettere  </h1>
        <h1><?php echo $newSurname . $spazio ?></h1>

        <h2><?php echo $newName2; ?> </h2>
    </body>
</html>