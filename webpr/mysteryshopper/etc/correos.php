<?php
function enviarMail($user, $id){
$to = 'alugox@gmail.com';
$subject = "Beautiful HTML Email using PHP by CodexWorld";

$htmlContent = '
    <html>
    <head>
        <title>Welcome to CodexWorld</title>
    </head>
    <body>
        <h1>Thanks you for joining with us!</h1>
        <table cellspacing="0" style="border: 2px dashed #FB4314; width: 300px; height: 200px;">
            <tr>
                <th>Name:</th><td>CodexWorld</td>
            </tr>
            <tr style="background-color: #e0e0e0;">
                <th>Email:</th><td>contact@codexworld.com</td>
            </tr>
            <tr>
                <th>Website:</th><td><a href="http://www.codexworld.com">www.codexworld.com</a></td>
            </tr>
        </table>
    </body>
    </html>';

// Set content-type header for sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// Additional headers
$headers .= 'From: Armando<alugox@gmail.com>' . "\r\n";
$headers .= 'Cc: arm_lug@outlook.com' . "\r\n";
//$headers .= 'Bcc: welcome2@example.com' . "\r\n";

// Send email
if(mail($to,$subject,$htmlContent,$headers)):
    $successMsg = 'Email has sent successfully.';
else:
    $errorMsg = 'Email sending fail.';
endif;
echo "El estado del mensaje es: <br>Exitoso = $successMsg<br><br>Fallo = $errorMsg";
}

function enviarMailBienvenida($email, $password){
$to = $email;
$subject = "Salvador Hairdressing: Mystery Shopper - Bienvenido";

$htmlContent1 = file_get_contents("../etc/correos/bienvenido.php");
$htmlContent2 = "<tr>
              <td class='free-text'>
                  <br><table class='tabla1'>
                  <tr class='tr1'>
                    <th class='th1' colspan='2'>Datos de Acceso</th>
                  </tr>
                  <tr class='tr1'>
                    <td class='td1'><b>Usuario:</b></td>
                    <td class='td1'>$email</td>
                  </tr>
                  <tr class='tr1'>
                    <td class='td1'><b>Contraseña:</b></td>
                    <td class='td1'>$password</td>
                  </tr>
                </table>
              </td>
          </tr>";
$htmlContent3 = file_get_contents("../etc/correos/bienvenido2.php");

$htmlContent = $htmlContent1.$htmlContent2.$htmlContent3;


// Set content-type header for sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// Additional headers
$headers .= 'From: Salvador Hairdressing<noreply@salvadorhairdressing.com>' . "\r\n";
//$headers .= 'Cc: arm_lug@outlook.com' . "\r\n";
//$headers .= 'Bcc: welcome2@example.com' . "\r\n";

// Send email
if(mail($to,$subject,$htmlContent,$headers)):
        $msg = "<b>¡Participante Aprobado Éxitosamente!</b> Este recibirá un correo siendo informado.<br><br><b>Aviso:</b> No se pueden programar visitas, hasta que el cliente no responda la encuesta inicial.";
        $clase = "alert alert-success alert-dismissable fade in";
else:
        $msg = "<strong>Error</strong> al enviar Correo Informativo al Cliente.<br>";
        $clase = "alert alert-danger alert-dismissable fade in";  
endif;
echo "<div class='$clase'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        $msg</div>";   
}

function enviarRecordatorioBanco($user){
    $to = $user;
    $subject = "Salvador Hairdressing: Mystery Shopper - Completa tu Información Bancaria";

    $htmlContent = file_get_contents("../etc/correos/datosbancarios.php");

    // Set content-type header for sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // Additional headers
    $headers .= 'From: Salvador Hairdressing<noreply@salvadorhairdressing.com>' . "\r\n";
    //$headers .= 'Cc: arm_lug@outlook.com' . "\r\n";
    //$headers .= 'Bcc: welcome2@example.com' . "\r\n";

    // Send email
    if(mail($to,$subject,$htmlContent,$headers)):
        $msg = "Correo Recordatorio al Cliente fue <strong>Enviado Éxitosamente</strong>.<br>";
        $clase = "alert alert-success alert-dismissable fade in";
    else:
        $msg = "<strong>Error</strong> al enviar Correo Recordatorio al Cliente.<br>";
        $clase = "alert alert-danger alert-dismissable fade in";  
    endif;
    
    echo "<div class='$clase'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        $msg</div>";
}

function enviarNuevaCita($user, $fecha, $salones, $mensaje, $descripcion, $servicios){

    list($salon,$salondir) = getSalon($salones);

    //$salon = getSalon($salones);
    //setlocale(LC_TIME, 'es_ES.UTF-8');
    $date = date("j-m-Y", strtotime($fecha));
    $to = $user;
    $subject = "Salvador Hairdressing: Mystery Shopper - ¡Nueva Visita!";

    $htmlContent1 = file_get_contents("../etc/correos/nuevacita.php");
    $htmlContent2 = "<td style='text-align:left; width:155px'>
                                      Salón: <span class='header-sm'>$salon</span><br />
                                      Dirección del Salón: <b>$salondir</b>
                                      Fecha apróximada de la visita: <span class='header-sm'>$date</span><br />
                                      Instrucciones: <span class='header-sm'>$mensaje</span><br />
                                      Servicios a Pedir: <span class='header-sm'>$servicios</span><br /><br/>
                                      Una vez realizada tu visita como <b>Mystery Shopper</b> al salón, podrás rellenar un cuestionario sobre como te atendieron.<br><br>
                                      Consulta <b>más detalles</b> de tu visita entrando a tu cuenta.
                                    </td>";

    $htmlContent3 = file_get_contents("../etc/correos/nuevacita2.php");

    $htmlContent = $htmlContent1.$htmlContent2.$htmlContent3;
    // Set content-type header for sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // Additional headers
    $headers .= 'From: Salvador Hairdressing<noreply@salvadorhairdressing.com>' . "\r\n";
    //$headers .= 'Cc: arm_lug@outlook.com' . "\r\n";
    //$headers .= 'Bcc: welcome2@example.com' . "\r\n";

    // Send email
    if(mail($to,$subject,$htmlContent,$headers)):
        $msg = "<strong>¡La visita fue programada éxitosamente!</strong><br><br>El correo con Aviso de Nueva Visita fue enviado al Cliente <strong>Éxitosamente</strong>.<br>";
        $clase = "alert alert-success alert-dismissable fade in";
    else:
        $msg = "<strong>Error</strong> al enviar Correo de Aviso al Cliente.<br>";
        $clase = "alert alert-danger alert-dismissable fade in";  
    endif;
    
    echo "<div class='$clase'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        $msg</div>";    
}

function enviarAvisoNuevoUsuario(){
    $to = "ceo@salvadorhairdressing.com";
    $subject = "Salvador Hairdressing: Mystery Shopper - ¡Nueva Solicitud de Participante!";

    $htmlContent = file_get_contents("../etc/correos/nuevoregistro.php");

    // Set content-type header for sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // Additional headers
    $headers .= 'From: Salvador Hairdressing<noreply@salvadorhairdressing.com>' . "\r\n";
    $headers .= 'Cc: oym@salvadorhairdressing.com, sistemas@salvadorhairdressing.com' . "\r\n";
    $headers .= 'Bcc: programacion@salvadorhairdressing.com' . "\r\n";

    // Send email
    if(mail($to,$subject,$htmlContent,$headers)):
        //header('location: /mysteryshopper/index.php?e=1');
        //include '../index.php?e=1';
      return "1";
//
//        $msg = "<strong>¡La visita fue programada éxitosamente!</strong><br><br>El correo con Aviso de Nueva Cita fue enviado al Cliente <strong>Éxitosamente</strong>.<br>";
//        $clase = "alert alert-success alert-dismissable fade in";
    else:
        //header('location: /mysteryshopper/index.php?e=0');
      return "0";
//        $msg = "<strong>Error</strong> al enviar Correo de Aviso al Cliente.<br>";
//        $clase = "alert alert-danger alert-dismissable fade in";  
    endif;
    
//    echo "<div class='$clase'>
//        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
//        $msg</div>";    
}

function enviarRecordatorioProgr($idpart){
    $to = "ceo@salvadorhairdressing.com";
    
    $name = getNombre($idpart);
    
    $subject = "Salvador Hairdressing: Mystery Shopper - ¡$name ha completado sus datos bancarios!";

    $htmlContent = file_get_contents("../etc/correos/datosbancariosafter.php");

    // Set content-type header for sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // Additional headers
    $headers .= 'From: Salvador Hairdressing<noreply@salvadorhairdressing.com>' . "\r\n";
    $headers .= 'Cc: oym@salvadorhairdressing.com, sistemas@salvadorhairdressing.com' . "\r\n";
    $headers .= 'Bcc: programacion@salvadorhairdressing.com' . "\r\n";

    // Send email
    if(mail($to,$subject,$htmlContent,$headers)):
        //header('location: /mysteryshopper/index.php?e=1');
        include '../index.php?e=1';
//
//        $msg = "<strong>¡La visita fue programada éxitosamente!</strong><br><br>El correo con Aviso de Nueva Cita fue enviado al Cliente <strong>Éxitosamente</strong>.<br>";
//        $clase = "alert alert-success alert-dismissable fade in";
    else:
        header('location: /mysteryshopper/index.php?e=0');
//        $msg = "<strong>Error</strong> al enviar Correo de Aviso al Cliente.<br>";
//        $clase = "alert alert-danger alert-dismissable fade in";  
    endif;
    
//    echo "<div class='$clase'>
//        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
//        $msg</div>"; 
}

function enviarInvitaciones($array){
    $to = "noreply@salvadorhairdressing.com";
    //$to = "alugox@gmail.com";
    $subject = "Salvador Hairdressing: Mystery Shopper - ¡Sé un Cliente Misterioso!";

    $htmlContent = file_get_contents("../etc/correos/invitacion.php");

    // Set content-type header for sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // Additional headers
    $headers .= 'From: Salvador Hairdressing<noreply@salvadorhairdressing.com>' . "\r\n";
    //$headers .= 'Cc: alugox@gmail.com' . "\r\n";
    $headers .= 'Bcc: '.$array. "\r\n";

    // Send email
    if(mail($to,$subject,$htmlContent,$headers)):
        //header('location: /mysteryshopper/index.php?e=1');
        //include '../index.php?e=1';
      return "1";
//
//        $msg = "<strong>¡La visita fue programada éxitosamente!</strong><br><br>El correo con Aviso de Nueva Cita fue enviado al Cliente <strong>Éxitosamente</strong>.<br>";
//        $clase = "alert alert-success alert-dismissable fade in";
    else:
        //header('location: /mysteryshopper/index.php?e=0');
      return "0";
//        $msg = "<strong>Error</strong> al enviar Correo de Aviso al Cliente.<br>";
//        $clase = "alert alert-danger alert-dismissable fade in";  
    endif;
    
//    echo "<div class='$clase'>
//        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
//        $msg</div>";    
}

/* FUNCIONES COMPLEMENTARIAS PARA LOS CORREOS */

function getCorreo($idp){
    require_once "../../sitio/sec/ms/libcon.php";
    $dbh = dbconn();
    mysqli_set_charset($dbh, 'utf8');
    if (!$dbh) {
        die('Error en Conexión: ' . mysqli_error($dbh));
        exit;
    }
    $email = "";

    $sql = "SELECT correo FROM ms_usuario WHERE id = $idp LIMIT 1";
    $search = mysqli_query($dbh, $sql);
    $match = mysqli_num_rows($search);
    if ($match > 0) {
            while ($rw = mysqli_fetch_array($search)) {
                $email = $rw['correo'];
                return $email;
            }
    } else{
        //NO HAY CORREO
    }
}

function getPassword($idp){
    require_once "../../sitio/sec/ms/libcon.php";
    $dbh = dbconn();
    mysqli_set_charset($dbh, 'utf8');
    if (!$dbh) {
        die('Error en Conexión: ' . mysqli_error($dbh));
        exit;
    }
    $pass = "";

    $sql = "SELECT password FROM ms_usuario WHERE id = $idp LIMIT 1";
    $search = mysqli_query($dbh, $sql);
    $match = mysqli_num_rows($search);
    if ($match > 0) {
            while ($rw = mysqli_fetch_array($search)) {
                $pass = $rw['password'];
                return $pass;
            }
    } else{
        //NO HAY RESULTADO
    }
}

function getNombre($idp){
    require_once "../../sitio/sec/ms/libcon.php";
    $dbh = dbconn();
    mysqli_set_charset($dbh, 'utf8');
    if (!$dbh) {
        die('Error en Conexión: ' . mysqli_error($dbh));
        exit;
    }
    $pass = "";

    $sql = "SELECT nombre FROM ms_usuario WHERE id = $idp LIMIT 1";
    $search = mysqli_query($dbh, $sql);
    $match = mysqli_num_rows($search);
    if ($match > 0) {
            while ($rw = mysqli_fetch_array($search)) {
                $name = $rw['nombre'];
                return $name;
            }
    } else{
        //NO HAY CORREO
    }
}

function getSalon($ids){
    require_once "../../sitio/sec/ms/libcon.php";
    $dbh = dbconncc();
    mysqli_set_charset($dbh, 'utf8');
    if (!$dbh) {
        die('Error en Conexión: ' . mysqli_error($dbh));
        exit;
    }

    $sql = "SELECT NOMBRE, DIRECCION FROM SALONES WHERE CODIGO = '$ids' LIMIT 1";
    $search = mysqli_query($dbh, $sql);
    $match = mysqli_num_rows($search);
    if ($match > 0) {
            while ($rw = mysqli_fetch_array($search)) {
                $name = $rw['NOMBRE'];
                $dir = $rw['DIRECCION'];
                return array($name, $dir);
            }
    } else{
      $name = "CONTACTAR A NUESTRO EQUIPO";
      return $name;
        //NO HAY CORREO
    }  
}

?>
