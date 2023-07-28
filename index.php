<!DOCTYPE html>
<html lang="br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel='stylesheet' type='text/css' media='screen' href='triangulo.css'>
        <title>triangulo</title>
    </head>
    <body>
        <h1>Triangulos<h1>
        <br>
        <h4>Informe os Lados do Triangulo</h4>
        <form action="resultado.php" method="post">
            <div class="d1">
            <label for="lado1">Lado1:</label>
            <input type="number" name="lado1"><br>
            <label for="lado2">Lado2:</label>
            <input type="number" name="lado2"><br>     
            <label for="lado3">Lado3:</label>
            <input type="number" name="lado3"><br><br>
            </div>
            <input type="submit"class="bot1">
            <input type="reset" value="Reset" class="bot2">
        </form>
    </body>
</html>