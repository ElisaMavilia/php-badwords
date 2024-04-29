<?php

var_dump($_POST);

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
    <h2>
  <?php  echo $userParagraph ?>
    </h2>
</body>
</html>