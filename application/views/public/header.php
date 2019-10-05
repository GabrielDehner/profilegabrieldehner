<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <base href="<?= base_url() ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="<?= base_url('/logogadehner.png') ?>">
    <title>Gabriel Andr&eacute;s Dehner | Perfil</title>

    <meta property="og:url" content="<?= base_url() ?>"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Gabriel Andr&eacute;s Dehner | Perfil Laboral"/>
    <meta property="og:description" content="Gabriel Andr&eacute;s Dehner | Perfil Laboral"/>
    <meta property="og:image" content="<?= base_url('/logogadehner.png') ?>"/>

    <meta http-equiv="Cache-Control" content="private, max-age=2592000">

    <link rel="stylesheet" href="<?= base_url('assets/libs/bootstrap-4.1.1-dist/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/general.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/header.css') ?>">

    <?php if ($controller === 'home') { ?>
        <link rel="stylesheet" href="<?= base_url('assets/css/home.css') ?>">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
        
        
    <?php } ?>
       
</head>

<body>
<header>
    <nav id='barradenavegacion' class="navbar navbar-expand-lg navbar-dark" >
        <div class="navbar-collapse" id="navbarSupportedContent">
            <div class="container logoytexto">
                <a class="navbar-brand " href='<?= base_url() ?>'>
                    <div class="">
                        <img class="logoimagen" src="<?= base_url('assets/logos/LogoSolo.png') ?>" alt="Logo Gabriel Dehner">
                        <span class='acomodoresponsive tamaniofuente'>GABRIEL ANDR&Eacute;S DEHNER</span> <span class="text-muted acomodoresponsive tamaniofuente">| Perfil Acad&eacute;mico - Laboral</span> 
                        <span class='acomodoresponsive2'>GABRIEL ANDR&Eacute;S DEHNER</span> 
                        <p><span class="text-muted acomodoresponsive2">Perfil Acad&eacute;mico - Laboral</span>
                    </div>
                </a>
            </div>
        </div>
    </nav>
</header>