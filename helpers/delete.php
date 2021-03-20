<?php

// EXCLUIR QRCODE DA PASTA
if(isset($_GET['acao']) && $_GET['acao'] == "excluir")
{

    if($_GET['page'] == "url"){
    
        unlink($_GET['arquivo']);
        header('Location: '. '../pages/index.php?page=url');
    
    } elseif($_GET['page'] == "phone") {

        unlink($_GET['arquivo']);
        header('Location: '. '../pages/index.php?page=phone');

    } elseif($_GET['page'] == "text") {

        unlink($_GET['arquivo']);
        header('Location: '. '../pages/index.php?page=text');

    } elseif($_GET['page'] == "sms") {

        unlink($_GET['arquivo']);
        header('Location: '. '../pages/index.php?page=sms');

    } elseif($_GET['page'] == "email") {

        unlink($_GET['arquivo']);
        header('Location: '. '../pages/index.php?page=email');

    } elseif($_GET['page'] == "whatsapp") {

        unlink($_GET['arquivo']);
        header('Location: '. '../pages/index.php?page=whatsapp');

    }
}