<html>
    <head>
    <title>UD05_T11_boletin_4</title>
        <meta charset='UTF-8'>
        <h1>UD05_T11</h1>
        <h2>Ejercicio 20</h2>
        <h3>Igual que el ejercicio anterior pero esta vez se debe pintar una pirámide hueca.</h3>
    </head>
    <body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method='post'>
    <p>Altura: <input type='number' name='numero' min=0/></p>
    <label>Figura</label>
    <select name='figura'>
        <option selected value='Figuras/Asterisco.png'>Asterisco</option>
        <option value='Figuras/Ladrillo.png'>Ladrillos</option>
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
            if ($i==$Altura){
                for ($m=1; $m <= $i-1; $m++) { 
                    ?><img src="<?php echo $Figura?>" height="20"><?php
                    echo "&nbsp&nbsp&nbsp&nbsp";
                }
                echo "<br/>";
            }else {
                if($i<=2){
                    for ($m = 1; $m <= $i; $m++){
                        ?><img src="<?php echo $Figura?>" height="20"><?php
                }
                echo "<br/>";
            }
            else{
                ?><img src="<?php echo $Figura?>" height="20"><?php
                for ($m = 1; $m <= $i-2; $m++){
                    echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
            }
            ?><img src="<?php echo $Figura?>" height="20"><?php
            echo "&nbsp";
            echo "<br/>";
            }
        }
    }

    ?>
</html>