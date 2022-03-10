<?php

    session_start();
?>
<html>
    <head>
    <title>UD05_T11_boletin_4</title>
        <meta charset='UTF-8'>
        <h1>UD05_T11</h1>
        <h2>Ejercicio 21</h2>
        <h3>Realiza un programa que vaya pidiendo números hasta que se introduzca un numero negativo y
            nos diga cuantos números se han introducido, la media de los impares y el mayor de los pares . El
            número negativo sólo se utiliza para indicar el final de la introducción de datos pero no se incluye
            en el cómputo.</h3>
    </head>
    <body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method='post'>
        <p>Numero: <input type='number' name='numero'/></p>
        <p><input type='submit' value='Submit'/></p>
    </form>
    <?php
    if(!isset($_SESSION['numeros'])){
        $_SESSION['numeros'] = array();
        $_SESSION['par'] = array();
        $_SESSION['impar'] = array();
    }
    if(isset($_POST['numero'])&& filter_var($_POST['numero'],FILTER_VALIDATE_INT) && $_POST['numero']>=0){
        $n = $_POST["numero"];
        array_push($_SESSION["numeros"],$n);
        $Contar++;
        
        print_r($_SESSION["numeros"]);
    }elseif(($_POST['numero'])&& filter_var($_POST['numero'],FILTER_VALIDATE_INT) && $_POST['numero']<0){
        $Suma = 0;
        for ($i=0; $i < count($_SESSION['numeros']); $i++) { 
            $Suma = $Suma + $_SESSION['numeros'][$i];
            if ($_SESSION["numeros"][$i] % 2 != 0) {
                array_push($_SESSION['impar'] ,$_SESSION["numeros"][$i]);
                $mediaImpar= $_SESSION["numeros"][$i] / count($_SESSION['impar']);
                #echo "</br>Es impar $Impar";
            }elseif ($_SESSION["numeros"][$i] % 2 == 0) {
                array_push($_SESSION['par'] ,$_SESSION["numeros"][$i]);
                #echo "</br>Es par $Par";
            }
        }
        $Introducidos=count($_SESSION['numeros']);
        $MaxPar=max($_SESSION['par'] );
        $media = $Suma / count($_SESSION['numeros']);
        echo "<p>La media de los impares es $mediaImpar";
        echo "<p>El mayor de los pares es $MaxPar";
        echo "<p>Se introdujeron $Introducidos numeros</p>";
        /*Destruir sesion*/
        $_SESSION = array();

// Si se desea destruir la sesión completamente, borre también la cookie de sesión.
// Nota: ¡Esto destruirá la sesión, y no la información de la sesión!
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
    );
}


    session_destroy(); 
    }else {
        echo "<p>Introduce un numero</p>";
    }
    ?> 
    </body>
</html>