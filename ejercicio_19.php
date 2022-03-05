<html>
    <head>
    <title>UD05_T11_boletin_4</title>
        <meta charset='UTF-8'>
        <h1>UD05_T11</h1>
        <h2>Ejercicio 18</h2>
        <h3>Realiza un programa que pinte una pirámide por pantalla. La altura se debe pedir por teclado
mediante un formulario. La pirámide estará hecha de bolitas, ladrillos o cualquier otra imagen
de las 5 que se deben dar a elegir mediante un formulario.</h3>
    </head>
    <body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method='post'>
    <p>Altura: <input type='number' name='numero' min=0/></p>
    <label>Figura</label>
    <select name='figura'>
        <option selected value='Figuras/Asterisco.png'>Asterisco</option>
        <option value=''>Ladrillos</option>
        <option value='Figuras/Triangulo.png'>Triangulos</option>
        <option value='Figuras/Diamante.png'>Diamante</option>
        <option value='Figuras/Rengoku.png'>Rengoku</option>
        <option value='Figuras/Dusa.png'>Dusa</option>
    </select>
        <p><input type='submit' value='Submit'/></p>
    </from>
    <?php
    $Altura=$_REQUEST["numero"];
    $Figura=$_REQUEST["figura"];
    for($i=1;$i <= $Altura; $i++){
        for ($m = 1; $m <= 1 * $i-1; $m++){
            ?>
            <img src="<?php echo $Figura?>" height="30">
            <?php
        }
        echo '<br>';
    }
    ?>
</html>