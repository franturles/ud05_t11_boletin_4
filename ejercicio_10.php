<?php 
    session_start();
?>
<html>
    <head>
    <title>UD05_T11_boletin_4</title>
        <meta charset='UTF-8'>
        <h1>UD05_T11</h1>
        <h2>Ejercicio 10</h2>
        <h3>Escribe un programa que calcule la media de un conjunto de números positivos introducidos por
        teclado. A priori, el programa no sabe cuántos números se introducirán. El usuario indicará que ha
        terminado de introducir los datos cuando meta un número negativo.</h3>
    </head>
    <body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method='post'>
        <p>Numero: <input type='number' name='numero'/></p>
        <p><input type='submit' value='Submit'/></p>
    </from>
    <?php
    if(!isset($_SESSION['numeros'])){
        $_SESSION['numeros'] = array();
    }
    if(isset($_POST['numero'])&& filter_var($_POST['numero'],FILTER_VALIDATE_INT) && $_POST['numero']>=0){
        $n = $_POST["numero"];
        array_push($_SESSION["numeros"],$n);
    }elseif(($_POST['numero'])&& filter_var($_POST['numero'],FILTER_VALIDATE_INT) && $_POST['numero']<0){
        $Suma = 0;
        for ($i=0; $i < count($_SESSION['numeros']); $i++) { 
            $Suma = $Suma + $_SESSION['numeros'][$i];
        }
        $media = $Suma / count($_SESSION['numeros']);
        echo "<p>La media es $media";
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