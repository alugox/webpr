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

$htmlContent = "<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
  <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
  <meta name='viewport' content='width=device-width, initial-scale=1' />
  <title>Salvador Hairdressing - Mystery Shopper</title>

  <style type='text/css'>
    /* Take care of image borders and formatting, client hacks */
    img { max-width: 600px; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic;}
    a img { border: none; }
    table { border-collapse: collapse !important;}
    #outlook a { padding:0; }
    .ReadMsgBody { width: 100%; }
    .ExternalClass { width: 100%; }
    .backgroundTable { margin: 0 auto; padding: 0; width: 100% !important; }
    table td { border-collapse: collapse; }
    .ExternalClass * { line-height: 115%; }
    .container-for-gmail-android { min-width: 600px; }


    /* General styling */
    * {
      font-family: Helvetica, Arial, sans-serif;
    }

    body {
      -webkit-font-smoothing: antialiased;
      -webkit-text-size-adjust: none;
      width: 100% !important;
      margin: 0 !important;
      height: 100%;
      color: #676767;
    }

    td {
      font-family: Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #777777;
      text-align: center;
      line-height: 21px;
    }

    a {
      color: #676767;
      text-decoration: none !important;
    }

    .pull-left {
      text-align: left;
    }

    .pull-right {
      text-align: right;
    }

    .header-lg,
    .header-md,
    .header-sm {
      font-size: 32px;
      font-weight: 700;
      line-height: normal;
      padding: 35px 0 0;
      color: #4d4d4d;
    }

    .header-md {
      font-size: 24px;
    }

    .header-sm {
      padding: 5px 0;
      font-size: 18px;
      line-height: 1.3;
    }

    .content-padding {
      padding: 20px 0 10px;
    }

    .mobile-header-padding-right {
      width: 290px;
      text-align: right;
      padding-left: 10px;
    }

    .mobile-header-padding-left {
      width: 290px;
      text-align: left;
      padding-left: 10px;
    }

    .free-text {
      width: 100% !important;
      padding: 10px 60px 0px;
    }

    .block-rounded {
      border-radius: 5px;
      border: 1px solid #e5e5e5;
      vertical-align: top;
    }

    .button {
      padding: 30px 0;
    }

    .info-block {
      padding: 0 20px;
      width: 260px;
    }

    .block-rounded {
      width: 260px;
    }

    .info-img {
      width: 175px;
      border-radius: 5px 5px 0 0;
    }

    .force-width-gmail {
      min-width:600px;
      height: 0px !important;
      line-height: 1px !important;
      font-size: 1px !important;
    }

    .button-width {
      width: 228px;
    }

  </style>

  <style type='text/css' media='screen'>
    @import url(http://fonts.googleapis.com/css?family=Oxygen:400,700);
  </style>

  <style type='text/css' media='screen'>
    @media screen {
      /* Thanks Outlook 2013! */
      * {
        font-family: 'Oxygen', 'Helvetica Neue', 'Arial', 'sans-serif' !important;
      }
    }
  </style>

  <style type='text/css' media='only screen and (max-width: 480px)'>
    /* Mobile styles */
    @media only screen and (max-width: 480px) {

      table[class*='container-for-gmail-android'] {
        min-width: 290px !important;
        width: 100% !important;
      }

      table[class='w320'] {
        width: 320px !important;
      }

      img[class='force-width-gmail'] {
        display: none !important;
        width: 0 !important;
        height: 0 !important;
      }

      a[class='button-width'],
      a[class='button-mobile'] {
        width: 248px !important;
      }

      td[class*='mobile-header-padding-left'] {
        width: 160px !important;
        padding-left: 0 !important;
      }

      td[class*='mobile-header-padding-right'] {
        width: 160px !important;
        padding-right: 0 !important;
      }

      td[class='header-lg'] {
        font-size: 24px !important;
        padding-bottom: 5px !important;
      }

      td[class='header-md'] {
        font-size: 18px !important;
        padding-bottom: 5px !important;
      }

      td[class='content-padding'] {
        padding: 5px 0 30px !important;
      }

       td[class='button'] {
        padding: 5px !important;
      }

      td[class*='free-text'] {
        padding: 10px 18px 30px !important;
      }

      td[class='info-block'] {
        display: block !important;
        width: 280px !important;
        padding-bottom: 40px !important;
      }

      td[class='info-img'],
      img[class='info-img'] {
        width: 175px !important;
      }
    }
  </style>
  
  <style>
    .tabla1 {
    border-collapse: collapse;
    width: 80%;
    margin-left: auto;
    margin-right: auto;
    }

    .th1, .td1 {
        text-align: left;
        padding: 8px;
    }

    .tr1:nth-child(even){background-color: #f2f2f2}

    .th1 {
        background-color: #ff6f6f;
        color: white;
        border-radius: 5px;
        text-align: center;
    }
  </style>
</head>

<body bgcolor='#f7f7f7'>
<table align='center' cellpadding='0' cellspacing='0' class='container-for-gmail-android' width='100%'>
  <tr>
    <td align='left' valign='top' width='100%' style='background:repeat-x url(http://s3.amazonaws.com/swu-filepicker/4E687TRe69Ld95IDWyEg_bg_top_02.jpg) #ffffff;'>
      <center>
      <img src='http://s3.amazonaws.com/swu-filepicker/SBb2fQPrQ5ezxmqUTgCr_transparent.png' class='force-width-gmail'>
        <table cellspacing='0' cellpadding='0' width='100%' bgcolor='#ffffff' background='http://s3.amazonaws.com/swu-filepicker/4E687TRe69Ld95IDWyEg_bg_top_02.jpg' style='background-color:transparent'>
          <tr>
            <td width='100%' height='80' valign='top' style='text-align: center; vertical-align:middle;'>
            <!--[if gte mso 9]>
            <v:rect xmlns:v='urn:schemas-microsoft-com:vml' fill='true' stroke='false' style='mso-width-percent:1000;height:80px; v-text-anchor:middle;'>
              <v:fill type='tile' src='http://s3.amazonaws.com/swu-filepicker/4E687TRe69Ld95IDWyEg_bg_top_02.jpg' color='#ffffff' />
              <v:textbox inset='0,0,0,0'>
            <![endif]-->
              <center>
                <table cellpadding='0' cellspacing='0' width='600' class='w320'>
                  <tr>
                    <td class='pull-left mobile-header-padding-left' style='vertical-align: middle;'>
                      <a href='http://www.salvadorhairdressing.com/mysteryshopper'><img width='137' height='47' src='http://www.salvadorhairdressing.com/images/salv-hairdressing-logo.png'></a>
                    </td>
                    <td class='pull-right mobile-header-padding-right' style='color: #4d4d4d;'>
                      <a href='http://www.twitter.com/mundosalvador'><img width='33' height='32' src='http://www.salvadorhairdressing.com/images/rrss/twitter.jpg' /></a>
                      <a href='http://www.facebook.com/SalvadorWorld'><img width='33' height='32' src='http://www.salvadorhairdressing.com/images/rrss/facebook.jpg'/></a>
                      <a href='http://www.instagram.com/mundosalvador'><img width='33' height='32' src='http://www.salvadorhairdressing.com/images/rrss/instagram.jpg'  /></a>
                      <a href='https://www.youtube.com/user/salvadorpeluqueria'><img width='33' height='32' src='http://www.salvadorhairdressing.com/images/rrss/youtube.jpg' /></a>
                    </td>
                  </tr>
                </table>
              </center>
              <!--[if gte mso 9]>
              </v:textbox>
            </v:rect>
            <![endif]-->
            </td>
          </tr>
        </table>
      </center>
    </td>
  </tr>
  <tr>
    <td align='center' valign='top' width='100%' style='background-color: #f7f7f7;' class='content-padding'>
      <center>
        <table cellspacing='0' cellpadding='0' width='600' class='w320'>
          <tr>
            <td class='header-lg'>
              ¡Ya eres un Mystery Shopper!
            </td>
          </tr>
          <tr>
            <td class='free-text'>
              Tu solicitud de participación para ser un <b>Mystery Shopper</b> de <b><i>Salvador Hairdressing</i></b>, ¡ha sido aceptada! Esperamos que disfrutes tu tiempo con nosotros. Revisa ahora tu cuenta para <b>responder tu primera encuesta</b>.
            </td>
          </tr>
          <tr>
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
          </tr>
          <tr>
            <td class='button'>
              <div><!--[if mso]>
                <v:roundrect xmlns:v='urn:schemas-microsoft-com:vml' xmlns:w='urn:schemas-microsoft-com:office:word' href='http://' style='height:45px;v-text-anchor:middle;width:225px;' arcsize='15%' strokecolor='#ffffff' fillcolor='#ff6f6f'>
                  <w:anchorlock/>
                  <center style='color:#ffffff;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:regular;'>Rellena la Primera Encuesta</center>
                </v:roundrect>
              <![endif]--><a class='button-mobile' href='http://www.salvadorhairdressing.com/mysteryshopper'
              style='background-color:#ff6f6f;border-radius:5px;color:#ffffff;display:inline-block;font-family:'Cabin', Helvetica, Arial, sans-serif;font-size:14px;font-weight:regular;line-height:45px;text-align:center;text-decoration:none;width: 225px;-webkit-text-size-adjust:none;mso-hide:all;'>¡Responde tú Primera Encuesta!</a></div>
            </td>
          </tr>
        </table>
      </center>
    </td>
  </tr>
  <tr>
    <td align='center' valign='top' width='100%' style='background-color: #ffffff;  border-top: 1px solid #e5e5e5; border-bottom: 1px solid #e5e5e5;'>
      <center>
        <table cellpadding='0' cellspacing='0' width='600' class='w320'>
          <tr>
            <td class='content-padding'>
              <table cellpadding='0' cellspacing='0' width='100%'>
                <tr>
                  <td class='header-md'>
                    Una vez Inicies Sesión podrás...
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td style='padding-bottom: 75px;'>
              <table cellpadding='0' cellspacing='0' width='100%' style='border-collapse:separate !important;'>
                <tr>
                 <td class='info-block'>
                    <table cellpadding='0' cellspacing='0' width='100%' style='border-collapse:separate !important;'>
                      <tr>
                        <td class='block-rounded'>
                          <table cellpadding='0' cellspacing='0' width='100%'>
                            <tr>
                              <td class='info-img'>
                                <a href=''><img class='info-img' src='http://www.salvadorhairdressing.com/mysteryshopper/images/task-icon.png' alt='img' /></a>
                              </td>
                            </tr>
                            <tr>
                              <td style='padding: 15px;'>
                                <table cellspacing='0' cellpadding='0' width='100%'>
                                  <tr>
                                    <td style='text-align:left; width:155px'>
                                      <a href=''><span class='header-sm'>Responder tu primera encuesta</span></a><br /><br/>
                                      Cuando inicies sesión en el portal web, podrás responder tu primera encuesta. En esta encuesta debes <b>rellenar tus datos bancarios</b>. Este <b>es un requesito obligatorio para que nuestro equipo pueda asignarte visitas</b> a salones.
                                    </td>
                                  </tr>
                                </table>
                              </td>
                            </tr>
                            <tr>
                              <td style='padding: 15px;'>
                                <div><!--[if mso]>
                                  <v:roundrect xmlns:v='urn:schemas-microsoft-com:vml' xmlns:w='urn:schemas-microsoft-com:office:word' href='http://' style='height:45px;v-text-anchor:middle;width:228px;' arcsize='15%' strokecolor='#ffffff' fillcolor='#ff6f6f'>
                                    <w:anchorlock/>
                                    <center style='color:#ffffff;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:regular;'>My Account</center>
                                  </v:roundrect>
                                <![endif]--><a class='button-width' href='http://www.salvadorhairdressing.com/mysteryshopper'
                                style='background-color:#ff6f6f;border-radius:5px;color:#ffffff;display:inline-block;font-family:'Cabin', Helvetica, Arial, sans-serif;font-size:14px;font-weight:regular;line-height:45px;text-align:center;text-decoration:none; -webkit-text-size-adjust:none;mso-hide:all;'>¡Entra ya!</a></div>
                              </td>
                            </tr>
                          </table>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      </center>
    </td>
  </tr>
  <tr>
    <td align='center' valign='top' width='100%' style='background-color: #f7f7f7; height: 100px;'>
      <center>
        <table cellspacing='0' cellpadding='0' width='600' class='w320'>
          <tr>
            <td style='padding: 25px 0 25px'>
              <strong>Salvador Hairdressing</strong><br />
              Programa de Mystery Shopper <br />
              <i>La información contenida en este correo es confidencial.</i> <br /><br />
            </td>
          </tr>
        </table>
      </center>
    </td>
  </tr>
</table>
</body>
</html>";

//$htmlContent = file_get_contents("");

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
    $to = "sistemas@salvadorhairdressing.com";
    //$to = "alugox@gmail.com";
    $subject = "Salvador Hairdressing: Mystery Shopper - ¡Nueva Solicitud de Participante!";

    $htmlContent = file_get_contents("../etc/correos/nuevoregistro.php");

    // Set content-type header for sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // Additional headers
    $headers .= 'From: Salvador Hairdressing<noreply@salvadorhairdressing.com>' . "\r\n";
    $headers .= 'Cc: programacion@salvadorhairdressing.com' . "\r\n";
    //$headers .= 'Bcc: welcome2@example.com' . "\r\n";

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
    $to = "sistemas@salvadorhairdressing.com";
    
    $name = getNombre($idpart);
    
    //$to = "alugox@gmail.com";
    $subject = "Salvador Hairdressing: Mystery Shopper - ¡$name ha completado sus datos bancarios!";

    $htmlContent = file_get_contents("../etc/correos/datosbancariosafter.php");

    // Set content-type header for sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // Additional headers
    $headers .= 'From: Salvador Hairdressing<noreply@salvadorhairdressing.com>' . "\r\n";
    $headers .= 'Cc: programacion@salvadorhairdressing.com' . "\r\n";
    //$headers .= 'Bcc: welcome2@example.com' . "\r\n";

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
    $to = $array;
    //$to = "alugox@gmail.com";
    $subject = "Salvador Hairdressing: Mystery Shopper - ¡Sé un Cliente Misterioso!";

    $htmlContent = file_get_contents("../etc/correos/nuevoregistro.php");

    // Set content-type header for sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // Additional headers
    $headers .= 'From: Salvador Hairdressing<noreply@salvadorhairdressing.com>' . "\r\n";
    //$headers .= 'Cc: alugox@gmail.com' . "\r\n";
    //$headers .= 'Bcc: welcome2@example.com' . "\r\n";

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
