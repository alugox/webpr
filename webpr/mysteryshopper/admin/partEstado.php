<?php

    include '../etc/modals.php';

    if (isset($_GET['a'])) {
        $iden = $_GET['a'];
        $id = base64_decode($iden);
        //echo "RESUMEN DEL PARTICIPANTE #000" . $id . "<BR>";
        partAprobarPend($id);
    } else if (isset($_GET['r'])) {
        $iden = $_GET['r'];
        $id = base64_decode($iden);
        //echo "RESUMEN DEL PARTICIPANTE #000" . $id . "<BR>";
        partRechazarPend($id);
    }
    ?>