<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publicar Noticia - El Faro Chile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.0/css/bulma.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body class="has-background-light">
    <nav class="navbar is-dark">
        <div class="container">
            <div class="navbar-brand">
                <span class="navbar-item has-text-weight-bold">EL FARO - EDITOR</span>
            </div>
        </div>
    </nav>

    <section class="section">
        <div class="container is-max-desktop">
            <div class="columns is-centered">
                <div class="column is-8">
                    <div class="box shadow">
                        <div class="has-text-centered mb-5">
                            <h1 class="title is-3 has-text-link">Nuevo Artículo</h1>
                            <p class="subtitle is-6">Completa los campos para publicar en el portal principal</p>
                        </div>

                        <link rel="stylesheet" href="../styles.css">

<form id="formulario-articulo" action="../Controller/ArticuloController.php" method="POST">
    
    <div class="field">
        <label class="label">URL de la imagen representativa</label>
        <div class="control has-icons-left">
            <input class="input" type="url" id="imagen-articulo" name="imagen" placeholder="https://..." required>
            <span class="icon is-small is-left">🖼️</span>
        </div>
    </div>

    <div class="field">
        <label class="label">Título de la Noticia</label>
        <div class="control">
            <input class="input" type="text" id="titulo-articulo" name="titulo" placeholder="Ej: Importante avance en..." required>
        </div>
    </div>

    <div class="field">
        <label class="label">Descripción de la Noticia</label>
        <div class="control">
            <textarea class="textarea" id="descripcion-articulo" name="descripcion" placeholder="Escribe el resumen de la noticia aquí..." required></textarea>
        </div>
    </div>

    <div class="field">
        <label class="label">Categoría</label>
        <div class="control">
            <div class="select is-fullwidth is-link">
                <select id="categoria-articulo" name="categoria" required>
                    <option value="" disabled selected>Selecciona una categoría...</option>
                    <option value="nacional">Nacional</option>
                    <option value="internacional">Internacional</option>
                    <option value="deportes">Deportes</option>
                    <option value="negocios">Negocios</option>
                    <option value="espectaculo">Espectáculo</option>
                </select>
            </div>
        </div>
    </div>

    <div class="field">
        <label class="label">Enlace a la Fuente Original</label>
        <div class="control">
            <input class="input" type="url" id="link-articulo" name="link" placeholder="https://fuente-original.com" required>
        </div>
    </div>

    <div class="buttons is-centered mt-5">
        <button type="submit" class="button is-link is-large is-fullwidth">
            Publicar en El Faro
        </button>
    </div>
</form>

                    </div>
                </div>
            </div>
        </div>
    </section>