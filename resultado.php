<!DOCTYPE html>
<html lang="br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel='stylesheet' type='text/css' media='screen' href='resultado.css'>
        <title>triangulo</title>
    </head>
    <body>
        <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST"){    
                    // Verifica se os campos foram preenchidos
                if (isset($_POST["lado1"]) && isset($_POST["lado2"]) && isset($_POST["lado3"])) {
                    $l1 = $_POST["lado1"];
                    $l2 = $_POST["lado2"];
                    $l3 = $_POST["lado3"];
                    if(($l1 <= ($l2 + $l3)) && ($l2 <= ($l1 + $l3)) && ($l3 <= ($l2 + $l1))){
                   
                        if(($l1 == ($l2 == $l3)) && (($l1 == $l2) == $l3) && ($l2 == ($l1 == $l3))){
                            echo "<img src='img/equilatero.png'>";
                        }
                        elseif(($l2 == $l3) || ($l1 == $l3) || ($l2 == $l1)){
                            echo "<img src='img/isoscele.png'>";
                        }
                        else{
                            echo "<img src='img/escaleno.png'>";
                        }
                    }else{
                        echo "Não é um Triangulo";
                    }
                }else{
                    echo "Preencha todos os campos";
                }
            }
        ?>
    </body>
</html>