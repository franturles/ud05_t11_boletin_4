<html>
    <head>
    <title>UD05_T11_boletin_4</title>
        <meta charset='UTF-8'>
        <h1>UD05_T11</h1>
        <h2>Ejercicio 13</h2>
        <h3>Escribe un programa que lea una lista de diez números y determine cuántos son positivos, y cuántos
            son negativos.</h3>
    </head>
    <body>
    
    <?php
    session_start();
    $_SESSION['pos'];
    $_SESSION['neg'];
    $valores = $_SESSION["valores"]; 
    $contar = isset($_SESSION["contar"])?$_SESSION["contar"]:0;

    if (isset($_REQUEST["reiniciar"])) {
        $_SESSION["contar"] = 0;
        $contar = 0;
        $_SESSION["valores"] = 0;
        $valores = 0;
        $_SESSION['pos'] = 0;
        $_SESSION['neg'] = 0;
    }

    $nu=$_REQUEST["numero"];
    echo "<p>ANTES DE IF</p>";
    print_r($valores);
    echo "<br />Valores introducidos: $contar";

    if ($contar < 2) {
        ?>

        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method='post'>
        <p>Numero: <input type='number' name='numero'/></p>
        <p><input type='submit' value='Submit'/></p>
        <p><input type='submit' name="reiniciar" value='Reiniciar'/></p>
        
        <?php
        if (empty($valores) && !empty($nu)) {
            $valores = array();
            array_push($valores, $nu);
            $contar=count($valores);
        } else {
            array_push($valores, $nu);
            $contar=count($valores);
        }

        echo "<p>DENTRO DE IF</p>";
        print_r($valores);
        echo "<br />Valores introducidos: $contar";
    } elseif ($contar == 2) {
        ?>
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                <p><input type='submit' name="reiniciar" value='Reiniciar'/></p>
            </form>
        <?php
            echo "<p>DENTRO DE ELSE</p>";
            print_r($valores);
            echo "Valores introducidos: $contar";
    }
    $_SESSION["valores"] = $valores;
    $_SESSION["contar"] = $contar;
    ?>

    </body>
</html>