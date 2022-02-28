<html>
    <head>
    <title>UD05_T11_boletin_4</title>
        <meta charset='UTF-8'>
        <h1>UD05_T11</h1>
        <h2>Ejercicio 7</h2>
        <h3>Realiza el control de acceso a una caja fuerte. La combinación será un número de 4 cifras. El
programa nos pedirá la combinación para abrirla. Si no acertamos, se nos mostrará el mensaje
“Lo siento, esa no es la combinación” y si acertamos se nos dirá “La caja fuerte se ha abierto
satisfactoriamente”. Tendremos cuatro oportunidades para abrir la caja fuerte.</h3>
    </head>
    <body>
    <form action="ejercicio_07.php" enctype='multipart/form-data' method='post'>
        <p>Numero: <input type='number' name='numero' min=0/></p>
        <p><input type='submit' value='Submit'/></p>   
    </from>
    <?php
    session_start();

    if (isset($_REQUEST["reiniciar"])) {
        $_SESSION["intentos"] = 0;
        $_SESSION["limite"] = 6;
    }
    $Limite = $_SESSION['limite'];


if($_SESSION["intentos"] <= 4){        
        $Numero=isset($_REQUEST["numero"])?$_REQUEST["numero"]:"";
        $Clave=2222;
    if(strlen($Numero) <= 4){
        if($Numero == $Clave){
            echo "Contraseña Correcta";
            $_SESSION["intentos"]= 0;
        }else{
            echo "Contraseña es incorrecta";
            $_SESSION["intentos"]= $_SESSION["intentos"] + 1;
            $Limite = $Limite - 1;
            echo "<br>Te queda $Limite intentos";
            $_SESSION["limite"] = $Limite;
        }
    }else{
        echo "Tiene que ser de 5 cifras";
    }
}else{
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <p><input type='submit' name="reiniciar" value='Reiniciar'/></p>
    </form>
<?php
    echo "Numero de intentos terminado";
}
?>
    </body>
</html>