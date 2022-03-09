<html>
    <head>
    <title>UD05_T11_boletin_4</title>
        <meta charset='UTF-8'>
        <h1>UD05_T11</h1>
        <h2>Ejercicio 20</h2>
        <h3>Realiza un programa que pinte una pirámide por pantalla. La altura se debe pedir por teclado
mediante un formulario. La pirámide estará hecha de bolitas, ladrillos o cualquier otra imagen
de las 5 que se deben dar a elegir mediante un formulario.</h3>
    </head>
    <body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method='post'>
    <p>Altura: <input type='number' name='altura' min=0/></p>
    <p>Numero: <input type='number' name='numero' min=0/></p>
    <p><input type='submit' value='Submit'/></p>
    </from>
<?php
    $Altura=$_REQUEST["altura"];
    $Numero=$_REQUEST["numero"];
    for($i=0;$i <= $Altura; $i++){
        for ($m = 0; $m <= 1 * $i-1; $m++){
            echo "$Numero";
        }
        echo '<br>';
    }



?>