<!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Document</title>
        <link type="text/css" rel="stylesheet" href="estilo.css"/>
    </head>
    <body>
    <h1>CT Desenvolvimento de Sistemas Back-End</h1>
    <div id="container">
        <?php
        echo "Comandos de atribuição: Incremento e Decremento<br><br>";

        $iNum1 = 1;
        $iNum2 = 2;
        $sTexto1 = "Bom ";
        $sTexto2 = "Dia!";

        echo "Valor inicial de iNum1 = $iNum1<br>";
        echo "Incremento anterior: ".++$iNum1."<br>";
        echo "Incremento posterior: ".$iNum1++."<br>";
        echo "Novo valor de iNum1 = $iNum1<br><br>";

        echo "O valor inicial de iNum2 = $iNum2<br>";
        echo "Decremento anterior: ".--$iNum2."<br>";
        echo "Decremento posterior: ".$iNum2--."<br>";
        echo "Novo valor de iNum2 = $iNum2<br><br>";

        echo $sTexto1.=$sTexto2."<br>";
        ?>
        </div>
    </body>
</html>