<!DOCTYPE html>
<html lang="es">
<head>
    <title>El Faro Chile</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="Asset/img/Icono1.png" width="16" height="16">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.4/css/bulma.min.css">
    <title>Get started with CSS</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="video-header">
        <video autoplay muted loop playsinline class="video-bg">
            <source src="Asset/video/video.mp4" type="video/mp4">
        </video>    </header>
    
<div class="notification is-warning is-light has-text-centered mb-0 is-radiusless">
        Mantente informado con nuestra nueva plataforma actualizada.
    </div>
    <?php include 'View/includes/header.php'; ?>
<div style="margin-top: 2.5rem;"></div>

    <div class="container is-max-desktop mt-4 px-3">
        <div class="tags has-addons">
            <span class="tag is-dark" id="fecha">Fecha: </span>
            <span class="tag is-info is-light" id="reloj">Hora: </span>
        </div>
    </div>

    