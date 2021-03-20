<?php

require_once('../vendor/phpqrcode/qrlib.php');

// INSERIR QRCODE NA PASTA
if(isset($_GET['acao']) && $_GET['acao'] == "inserir")
{

    if($_GET['page'] == "url"){
    
        // Configuramos um nome único para o QR Code com base no número da matrícula.
        $qrCodeName =  "../img-qrcodes/url/". date('d-m-Y H-m-i') .".png";
            
        /**
         * Realizamos a criação da imagem PNG, sendo passado as seguintes informações:
         * 1º - A string que desejamos inserir no QR Code.
         * 2º - O nome da imagem que criamos no passo anterior.
         */
        if(isset($_GET['url']))
        {
            QRcode::png(isset($_GET['url']) ? $_GET['url'] : 'www.programadormaroto.co', $qrCodeName, QR_ECLEVEL_H);
        }
        
        header('Location: '. 'http://localhost/qrcode-php/pages/index.php?page=url&arquivo='. $qrCodeName .'&url='. $_GET['url']);
    
    } elseif($_GET['page'] == "phone") {

        // Configuramos um nome único para o QR Code com base no número da matrícula.
        $qrCodeName =  "../img-qrcodes/phone/". date('d-m-Y H-m-i') .".png";
                
        // here our data
        $phoneNo = isset($_GET['phone']) ? $_GET['phone'] : '(00)98765-4321';
        
        // we building raw data
        $codeContents = 'tel:'.$phoneNo;

        if(isset($_GET['phone']))
        {
            // generating
            QRcode::png(isset($codeContents) ? $codeContents : '(00)98765-4321', $qrCodeName, QR_ECLEVEL_H, 3);
        }

        header('Location: '. 'http://localhost/qrcode-php/pages/index.php?page=phone&arquivo='. $qrCodeName .'&phone='. $_GET['phone']);

    } elseif($_GET['page'] == "text") {

        // Configuramos um nome único para o QR Code com base texto.
        $qrCodeName =  "../img-qrcodes/text/". date('d-m-Y H-m-i') .".png";
    
        /**
         * Realizamos a criação da imagem PNG, sendo passado as seguintes informações:
         * 1º - A string que desejamos inserir no QR Code.
         * 2º - O nome da imagem que criamos no passo anterior.
         */
        if(isset($_GET['text']))
        {
            QRcode::png($_GET['text'], $qrCodeName);
        }

        header('Location: '. 'http://localhost/qrcode-php/pages/index.php?page=text&arquivo='. $qrCodeName .'&text='. $_GET['text']);

    } elseif($_GET['page'] == "sms") {

        // how to build raw content - QRCode to send SMS
    
        // Configuramos um nome único para o QR Code com base no número da matrícula.
        $qrCodeName =  "../img-qrcodes/sms/". date('d-m-Y H-m-i') .".png";
        
        // here our data
        $phoneNo = '(00)98765-4321';
        
        // we building raw data
        $codeContents = 'sms:'.$phoneNo;
        
        if(isset($_GET['sms']))
        {
            // generating
            QRcode::png(isset($codeContents) ? $codeContents : '(00)98765-4321', $qrCodeName, QR_ECLEVEL_H, 3);
        }

        header('Location: '. 'http://localhost/qrcode-php/pages/index.php?page=sms&arquivo='. $qrCodeName .'&sms='. $_GET['sms']);

    } elseif($_GET['page'] == "email") {

        // how to build raw content - QRCode to send email, with extras

        // Configuramos um nome único para o QR Code com base no número da matrícula.
        $qrCodeName =  "../img-qrcodes/email/". date('d-m-Y H-m-i') .".png";

        // here our data
        $email = isset($_GET['email']) ? $_GET['email'] : 'noreply@noreply.com.br';
        $subject = isset($_GET['subject']) ? $_GET['subject'] : 'Assunto';
        $body = isset($_GET['body']) ? $_GET['body'] : 'Corpo do E-mail';
        
        // we building raw data
        $codeContents = 'mailto:'.$email.'?subject='.urlencode($subject).'&body='.urlencode($body);
    
        /**
         * Realizamos a criação da imagem PNG, sendo passado as seguintes informações:
         * 1º - A string que desejamos inserir no QR Code.
         * 2º - O nome da imagem que criamos no passo anterior.
         */
        if(isset($_GET['email']))
        {
            QRcode::png($codeContents, $qrCodeName, QR_ECLEVEL_H, 3);
            // Para finalizar realizamos a exibição da imagem no navegador.
            echo "<img src='{$qrCodeName}'>";
        }

        header('Location: '. 'http://localhost/qrcode-php/pages/index.php?page=email');
        header('Location: '. 'http://localhost/qrcode-php/pages/index.php?page=email&arquivo='. $qrCodeName .'&email='. $_GET['email']. '&subject='. $_GET['subject']. '&body='. $_GET['body']);

    }
}
