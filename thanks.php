<?php
$name = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$object = $_POST["object"];
$message = $_POST["message"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    
<body>
    <p>Merci <?php echo $_POST["name"] ?> de nous avoir contacté à propos de <?php echo $_POST["object"] ?>.

    Un de nos conseillers vous contactera soit à l’adresse <?php echo $_POST["email"] ?> ou par téléphone au <?php echo $_POST["phone"] ?> dans les plus brefs délais pour traiter votre demande : 

    <?php echo $_POST["message"] ?>
    <p>
</body>
</html>
