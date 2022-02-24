<html>
    <head>
    <title>UD05_T11_boletin_4</title>
        <meta charset='UTF-8'>
        <h1>UD05_T11</h1>
        <h2>Ejercicio 12</h2>
        <h3>Escribe un programa que muestre los n primeros términos de la serie de Fibonacci. El primer término
            de la serie de Fibonacci es 0, el segundo es 1 y el resto se calcula sumando los dos anteriores, por lo
            que tendríamos que los términos son 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144... El número n se debe
            introducir por teclado.</h3>
    </head>
    <body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method='post'>
        <p>Numero: <input type='number' name='numero'/></p>
        <p><input type='submit' value='Submit'/></p>
        <?php
        $fb0 = 0;
        $fb1 = 1;
        $num= $_POST["numero"];

        for($i=2;$i < $num;$i++){
            $fbactual=$fb0+$fb1;
            echo "$fbactual <br>";
            $fb0=$fb1;
            $fb1=$fbactual;
        }
        
        ?>
    </from>
    </body>