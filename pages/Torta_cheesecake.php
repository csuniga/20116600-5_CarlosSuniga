<?php
    include "../dados/dados.php";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Torta Cheesecake Figos</title>
</head>
<body>
    <div id="pgproduto">
        <div id="img1">
            <figure id="figesquerda">
                <img src="../images/torta_cheesecake_figos.jpg" alt="Torta Cheesecake Figos" width=200 height=300>
                <figcaption>Torta Cheesecake Figos</figcaption>
            </figure>
        </div>
        <div id="ingr">

            <h1>Ingredientes</h1>
                <?php foreach($dados3 as $item){
                    echo "$item <br/>";
                }
                ?>
                <br/>
        </div>
    </div>
</body>
</html>