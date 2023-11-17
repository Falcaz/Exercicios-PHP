<!DOCTYPE html>
<html lang= "en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Primeiro exemplo de PHP</title>
</head>
<body>
    <h1>Primeiro exemplo de PHP</h1>
    <h2>Aqui ainda é HTML!</h2>
    <?php
        $texto = "texto do botao";
        echo "<p style='color:red;'>Aqui ja é PHP!</P>";
        echo "<button>" . $texto . "</button>";

        ?>
</body>
</HTML>