<?php

/*
 * RECIBO PARÁMETROS DEL SERVIDOR SALVADOR Y PASO A MANIPULARLOS EN EL SERVIDOR WEB
 */


function finishLogin($code, $user){
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    $_SESSION["codigo"] = $code;
    $_SESSION["usuario"] = $user;
    $_SESSION["hash"] = "s6a5486dasdas31";
    header("location: index.php");
    return;
}

if(isset($_GET['cs'])){
    $codigosec = base64_decode($_GET['cs']);
    $nombresec = base64_decode($_GET['us']);
    finishLogin($codigosec, $nombresec);
} else{
    
}

?>
