<?php
        require 'PHPMailer/PHPMailerAutoload.php';
        $mail = new PHPMailer();
        $mail->IsSMTP();

		include("ConBD.php");
		$con=conectar();



        //Configuracion servidor mail
        $mail->From = "latter.proyecto@gmail.com"; //remitente
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls'; //seguridad
        $mail->Host = "smtp.gmail.com"; // servidor smtp
        $mail->Port = 587; //puerto
        $mail->Username ='latter.proyecto@gmail.com'; //nombre usuario
        $mail->Password = 'latter-py1'; //contraseña


        //Agregar destinatario
        $mail->AddAddress($email);
        $mail->Subject = 'Recuperar contraseña';
        $mail->Body = "Siga esta ruta para cambiar su contraseña:";
    
        //Avisar si fue enviado o no y dirigir al index
        if ($mail->Send()) {
            echo'<script type="text/javascript">
                alert("Enviado Correctamente");
                </script>';
        } else {
            echo'<script type="text/javascript">
                alert("NO ENVIADO, intentar de nuevo");
                </script>';
        }
    
?>