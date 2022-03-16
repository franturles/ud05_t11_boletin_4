<?php
session_start();
?>
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
    <?php
    function pintarformulario(){
    ?>
    <form action="ejercicio_07.php" enctype='multipart/form-data' method='post'>
    <p>Numero: <input type='number' name='numero' min=0/></p>
    <p><input type='submit' value='Submit'/></p>   
    </form>
    <?php
        
    }
    if (isset($_REQUEST["reiniciar"]) || !isset($_SESSION["intentos"]) || $_SESSION["intentos"]==0) {
        $_SESSION["intentos"] = 0;
        $_SESSION["limite"] = 4;
    }
    $Limite = $_SESSION['limite'];

if($_SESSION["intentos"] < 4){        
        pintarformulario();
        $Numero=isset($_REQUEST["numero"])?$_REQUEST["numero"]:"";
        $Clave=2222;
    if(strlen($Numero) == 4){
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
        echo "Tiene que ser de 4 cifras";
    }
}else{
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <p><input type='submit' name="reiniciar" value='Reiniciar'/></p>
    </form>
<?php
    echo "Numero de intentos terminado";
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }
    // Finalmente, destruir la sesión.
    session_destroy();
}
?>
    </body>
</html>