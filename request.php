<?php

// var_dump($_POST); //

$_POST["userParagraph"];
$userParagraph = $_POST["userParagraph"];
$censoredParag = str_replace("come", "***", $userParagraph);
$newString = preg_replace('/\s+/', '', $censoredParag);;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>request</title>
</head>
<body>
<h2>Versione originale: </h2>
    <p>
    <em><?php  echo $userParagraph ?></em>
    </p>
    <p> Numero parole: 
    <?php  echo str_word_count($userParagraph) ?>
    </p>
    <p> Numero caratteri: 
    <?php echo strlen($userParagraph) ?>
    </p>
    <h2>Versione censurata: </h2>
    <p>
    <em><?php  echo str_replace("come", "***", $userParagraph) ?></em>
    </p>
    <p> Numero caratteri (spazi esclusi): 
    <?php echo strlen($newString) ?>
    </p>
   
</body>
</html>