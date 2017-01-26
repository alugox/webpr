<?php
/*
 * RECIBO PARÁMETROS DEL SERVIDOR SALVADOR Y PASO A MANIPULARLOS EN EL SERVIDOR WEB
 * 
 * LLAMADA A FUNCIÓN ENCARGADA DE CONTAR LA CANTIDAD DE MAILS A ENVIAR EN "INVITAR PARTICIPANTE"
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

function cantidadReferir($cantidad){
    $i = 1;
    $conttemp = 0;
    while($i != $cantidad){
        $conttemp = $i +1;
    echo "<div class='form-group'>
            <input class='form-control input-lg' name='emails$conttemp' id='emails' type='email' placeholder='Correo eléctronico #$conttemp' required>
        </div>";
    $i++;
    }
    echo "<input type='hidden' name='totalMails' value='$conttemp'>";
}

if(isset($_GET['cs'])){
    $codigosec = base64_decode($_GET['cs']);
    $nombresec = base64_decode($_GET['us']);
    finishLogin($codigosec, $nombresec);
} else if(isset($_POST['action'])){
    if($_POST['action'] == 'call_this') {

        // call removeday() here
        $cantidad = $_POST['cantidad'];
        cantidadReferir($cantidad);
    }
}
?>