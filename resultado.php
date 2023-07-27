<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>triangulo</title>
</head>
<body>
   <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {    
            // Verifica se os campos foram preenchidos
            if (isset($_POST["lado1"]) && isset($_POST["lado2"]) && isset($_POST["lado3"])) {
                $l1 = $_POST["lado1"];
                $l2 = $_POST["lado2"];
                $l3 = $_POST["lado3"];
               if(($l1 <= ($l2 + $l3)) && ($l2 <= ($l1 + $l3)) && ($l3 <= ($l2 + $l1))){
                echo "triangulo verdadeiro";
                }else{
                    echo "triangulo errado";
                }
            }else{
            echo "<h2>Preencha todos os campos</h2>";}
        }
   ?>
</body>
</html>