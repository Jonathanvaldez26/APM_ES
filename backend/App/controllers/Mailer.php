<?php
namespace App\controllers;
defined("APPPATH") OR die("Access denied");
require dirname(__DIR__).'/../public/librerias/PHPMailer/Exception.php';
require dirname(__DIR__).'/../public/librerias/PHPMailer/PHPMailer.php';
require dirname(__DIR__).'/../public/librerias/PHPMailer/SMTP.php';

use \Core\MasterDom;
use \Core\Controller;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception; 


class Mailer{
  

    private $_contenedor;

    function __construct(){
        //parent::__construct();
    }


    public function mailer($msg) {
        $mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'congressapmwadd2022@gmail.com';                     //SMTP username
    $mail->Password   = 'Grupolahe1';                               //SMTP password
    $mail->SMTPSecure = 'ssl';
    $mail->SMTPAutoTLS = false;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('congressapmwadd2022@gmail.com', 'APM');
    $mail->addAddress($msg['email'], $msg['name']);     //Add a recipient
    
    $html='     
    <!DOCTYPE html>
<html lang="es">

<!-- Define Charset -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<!-- Responsive Meta Tag -->
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">

<title>Email Template</title>

<!-- Responsive and Valid Styles -->
<style type="text/css">
    body {
        width: 100%;
        background-color: #FFF;
        margin: 0;
        padding: 0;
        -webkit-font-smoothing: antialiased;
        font-family: arial;
    }

    html {
        width: 100%;
    }
    .container{
        width: 80%;
        padding: 20px;
        margin: 0 auto;
        
    }

    img{
        width: 100%;
    }

  
</style>

</head>

<body leftmargin="0" topmargin="0" marginheight="0" marginwidth="0">
    
    <div class="container">
    <img src="https://registro.dualdisorderswaddmexico2022.com/img/apm_email_esp.jpeg" alt="">
        <p style="text-align: center !important;">
            <strong>¡Gracias por completar su formulario de pre registro!</strong>
        </p>
        <p>

            <strong>Estinado:
                ('.$msg['name'].')</strong><br>
            Método de pago: <span
                style="color: #40982B;">('.$msg['pay'].')</span><br>
            Número de cuenta: <span
                style="color: #40982B;">('.$msg['account_number'].')</span><br>
            Banco: <span
                style="color: #40982B;">('.$msg['bank'].')</span><br>
            Nombre: <span
                style="color: #40982B;">('.$msg['name_association'].')</span><br>
            Dirección: <span
                style="color: #40982B;">('.$msg['addres'].')</span><br>
            Código Swift : <span
                style="color: #40982B;">('.$msg['swift_account'].')</span><br>
            Referencia Swift: <span
                style="color: #40982B;">('.$msg['reference'].')</span><br>
            Monto a pagar: <span
                style="color: #40982B;">('.$msg['amount'].')</span><br>
            Tiempo límite de pago: <span
                style="color: #40982B;">('.$msg['date_pay'].')</span><br>
                

            <br><br>

        </p>
        <hr>
        Recuerda que tu lugar en la conferencia no se reservará hasta que se reciba el pago completo,
        y se le haya enviado un correo electrónico de confirmación.
        Las reservas incompletas serán canceladas después de la
        plazo de pago indicado anteriormente.



        <p>
        Si tiene alguna consulta o no
        recibió su código de confirmación dentro de dos
        días laborables al momento de realizar su pago, envíe un correo electrónico con su
        comprobante bancario a dualdisorders@grupolahe.com.
        </p><br>

        
    </div>
    
        
</body>

</html>';
    

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Pre registro';
    $mail->Body    = $html;
    $mail->CharSet = 'UTF-8';
    // $mail->AltBody = 'Mensaje plano';
    $mail->send();
    //echo 'El mensaje ha sido enviado';
} catch (Exception $e) {
    //echo "No se pudo enviar el email: {$mail->ErrorInfo}";
}

    }

}
