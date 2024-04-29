<?php

// var_dump($_POST); //

$_POST["userParagraph"];
$userParagraph =$_POST["userParagraph"];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>request</title>
</head>
<body>
    <p>
    ❝<em><?php  echo $userParagraph ?>❞</em>
    </p>
    <p> Numero parole: 
    <?php  echo str_word_count($userParagraph) ?>
    </p>

    <p>
    ❝<em><?php  echo $userParagraph ?>❞</em>
    </p>
    <h2>Versione censurata: </h2>
    <p>
    <em>❝<?php  echo str_replace("come", "***", $userParagraph) ?>❞</em>
    </p>
</body>
</html>