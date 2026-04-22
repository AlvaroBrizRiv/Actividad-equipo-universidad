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
<section class="section pt-5">
    <div class="container">
        <div class="columns is-variable is-4">
            
            <div class="column is-7">
                <div class="card is-relative is-shadowless" style="overflow: hidden; border-radius: 12px;">
                    <div class="card-image">
                        <figure class="image is-3by2">
                            <img src="https://picsum.photos/id/0/1000/600" alt="Noticia Principal de Tecnología" style="object-fit: cover;">
                        </figure>
                    </div>
                    <div class="is-overlay p-5 is-flex is-flex-direction-column is-justify-content-end" 
                         style="background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0) 60%);">
                        <span class="tag is-danger is-uppercase has-text-weight-bold mb-2">Urgente</span>
                        <h1 class="title is-2 has-text-white is-size-4-mobile">
                            El futuro de la tecnología en Chile: Transformación digital en el 2026
                        </h1>
                        <p class="subtitle is-5 has-text-light is-hidden-mobile">
                            Expertos analizan el impacto de la inteligencia artificial en el mercado laboral nacional y los nuevos desafíos para los programadores.
                        </p>
                        <a href="#" class="button is-link is-small" style="width: fit-content;">Leer Noticia</a>
                    </div>
                </div>
            </div>

            <div class="column is-5">
                <div class="columns is-multiline">
                    
                    <div class="column is-12">
                        <div class="box is-paddingless is-shadowless" style="border-radius: 12px; overflow: hidden; background: #f9f9f9;">
                            <div class="columns is-mobile is-gapless">
                                <div class="column is-4">
                                    <figure class="image is-1by1">
                                        <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?auto=format&fit=crop&q=80&w=400" alt="Miniatura" style="object-fit: cover;">
                                    </figure>
                                </div>
                                <div class="column is-8 p-3">
                                    <span class="tag is-info is-light is-small mb-1">Nacional</span>
                                    <h3 class="title is-6 mb-2 has-text-black">Nuevas becas de especialización para desarrolladores en regiones.</h3>
                                    <a href="#" class="is-size-7 has-text-link has-text-weight-bold">Seguir leyendo →</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="column is-12">
                        <div class="box is-paddingless is-shadowless" style="border-radius: 12px; overflow: hidden; background: #f9f9f9;">
                            <div class="columns is-mobile is-gapless">
                                <div class="column is-4">
                                    <figure class="image is-1by1">
                                        <img src="https://picsum.photos/id/453/400/400" alt="Festival de Viña" style="object-fit: cover;">
                                    </figure>
                                </div>
                                <div class="column is-8 p-3">
                                    <span class="tag is-success is-light is-small mb-1">Espectáculo</span>
                                    <h3 class="title is-6 mb-2 has-text-black">Festival de Viña 2026 confirma su parrilla internacional.</h3>
                                    <a href="#" class="is-size-7 has-text-link has-text-weight-bold">Seguir leyendo →</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
    <section id="seccion-nacional" class="section pt-5">
        <div class="container is-max-desktop">
            <h2 class="title is-3 has-text-link mb-2" style="border-bottom: 3px solid #322a8f; padding-bottom: 5px;">Nacional</h2>
            <p class="subtitle is-5 has-text-grey">Lo más reciente del acontecer en el país.</p>
            
            <div class="columns is-multiline">
                <div class="column is-4">
                    <article class="card h-100" style="height: 100%; flex-direction: column;">
                        <div class="card-image">
                            <figure class="image is-16by9">
                                <img src="https://media.biobiochile.cl/wp-content/uploads/2026/04/adolescente-queda-con-cautelares-y-es-suspendido-tras-amenazar-con-tiroteo-en-liceo-de-puerto-montt-750x400.png" alt="Escolar" style="object-fit: cover;">
                            </figure>
                        </div>
                        <div class="card-content" style="flex-grow: 1;">
                            <span class="tag is-info is-small mb-2">Nacional</span>
                            <p class="title is-5 has-text-white">Adolescente queda sin cautelares tras amenazar con tiroteo en liceo de Puerto Montt</p>
                            <div class="content has-text-grey is-size-6">
                                Adolescente de 15 años detenido por amenaza de tiroteo en Liceo Comercial Miramar de Puerto Montt. Sin medidas cautelares y con suspensión académica, se activó Ley Aula Segura.
                            </div>
                            <a href="https://www.biobiochile.cl/noticias/nacional/region-de-los-lagos/2026/04/15/adolescente-queda-con-cautelares-y-es-suspendido-tras-amenazar-con-tiroteo-en-liceo-de-puerto-montt.shtml" target="_blank" class="has-text-link has-text-weight-bold">Leer más en BioBioChile →</a>
                        </div>
                    </article>
                </div>

                <div class="column is-4">
                    <article class="card h-100" style="height: 100%; display: flex; flex-direction: column;">
                        <div class="card-image">
                            <figure class="image is-16by9">
                                <img src="https://media.biobiochile.cl/wp-content/uploads/2026/04/foto-de-contexto-para-nota-bbcl-2026-04-20t142336-068-750x400.png" alt="Camioneros" style="object-fit: cover;">
                            </figure>
                        </div>
                        <div class="card-content" style="flex-grow: 1;">
                            <span class="tag is-info is-small mb-2">Nacional</span>
                            <p class="title is-5 has-text-white">Gremio de camioneros se declara en "alerta total"</p>
                            <div class="content has-text-grey is-size-6">
                                Confederación Nacional de Dueños de Camiones de Chile mantiene "alerta total" por alzas en combustibles, con un aumento del 65% desde marzo.
                            </div>
                            <a href="https://www.biobiochile.cl/noticias/nacional/chile/2026/04/20/gremio-de-camioneros-se-declara-en-alerta-total-y-respalda-movilizaciones-por-alza-de-combustibles.shtml" target="_blank" class="has-text-link has-text-weight-bold">Leer más en BioBioChile →</a>
                        </div>
                    </article>
                </div>

                <div class="column is-4">
                    <article class="card h-100" style="height: 100%; display: flex; flex-direction: column;">
                        <div class="card-image">
                            <figure class="image is-16by9">
                                <img src="https://media.biobiochile.cl/wp-content/uploads/2026/04/operacion-renta-750x400.jpg" alt="Operación Renta" style="object-fit: cover;">
                            </figure>
                        </div>
                        <div class="card-content" style="flex-grow: 1;">
                            <span class="tag is-info is-small mb-2">Economía Nacional</span>
                            <p class="title is-5 has-text-white">Operación Renta</p>
                            <div class="content has-text-grey is-size-6">
                                El SII autorizó devolución anticipada para más de 988.933 declaraciones en la primera etapa de la Operación Renta 2026. Del total de 1.063.066 presentadas, el 93% recibirá los dineros.
                            </div>
                            <a href="https://www.biobiochile.cl/noticias/economia/actualidad-economica/2026/04/20/operacion-renta-sii-detalla-cuantas-declaraciones-autorizo-para-que-reciban-devolucion-anticipada.shtml" target="_blank" class="has-text-link has-text-weight-bold">Leer más en BioBioChile →</a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section id="seccion-internacional" class="section has-background-white-ter">
        <div class="container is-max-desktop">
            <h2 class="title is-3 has-text-link mb-2" style="border-bottom: 3px solid #322a8f; padding-bottom: 5px;">Internacional</h2>
            <div class="columns">
                <div class="column is-8 is-offset-2">
                    <article class="card">
                        <div class="card-image">
                            <figure class="image is-3by1">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f6/Casa_Rosada_-_Buenos_Aires%2C_Argentina.jpg/800px-Casa_Rosada_-_Buenos_Aires%2C_Argentina.jpg" alt="Internacional Argentina" style="object-fit: cover; object-position: center;">
                            </figure>
                        </div>
                        <div class="card-content">
                            <span class="tag is-warning is-small mb-2">Latinoamérica</span>
                            <p class="title is-4 has-text-white">Argentina celebra nuevo acuerdo con el FMI para acceder a millonario crédito</p>
                            <div class="content has-text-grey">
                                El gobierno argentino logró cerrar las negociaciones con el Fondo Monetario Internacional para la inyección de mil millones de dólares destinados a estabilizar su economía.
                                <br><br>
                                <a href="https://www.cooperativa.cl/noticias/mundo/argentina/argentina-celebro-acuerdo-con-el-fmi-para-acceder-a-otros-mil-millones/2026-04-15/155100.html" target="_blank" class="button is-link is-small">Leer más en Cooperativa</a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section id="seccion-deportes" class="section">
        <div class="container is-max-desktop">
            <h2 class="title is-3 has-text-link mb-2" style="border-bottom: 3px solid #322a8f; padding-bottom: 5px;">Deportes</h2>
            
            <div class="columns is-multiline">
                <div class="column is-6">
                    <article class="card h-100" style="height: 100%; display: flex; flex-direction: column;">
                        <div class="card-image">
                            <figure class="image is-16by9">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1f/Allianz_Arena_M%C3%BCnchen.jpg/800px-Allianz_Arena_M%C3%BCnchen.jpg" alt="Champions League" style="object-fit: cover;">
                            </figure>
                        </div>
                        <div class="card-content" style="flex-grow: 1;">
                            <span class="tag is-danger is-small mb-2">Champions League</span>
                            <p class="title is-5 has-text-white">Bayern Múnich elimina al Real Madrid y avanza a semifinales</p>
                            <div class="content has-text-grey is-size-6">
                                En un partidazo de infarto en Europa, la escuadra alemana logró derrotar al "Rey de Europa", dejando a los merengues fuera del torneo continental más importante.
                            </div>
                            <a href="https://www.biobiochile.cl/noticias/deportes/futbol/futbol-internacional/2026/04/15/la-champions-sin-su-rey-bayern-le-gano-un-partidazo-al-real-madrid-y-avanzo-a-las-semifinales.shtml" target="_blank" class="has-text-link has-text-weight-bold">Leer más en BioBioChile →</a>
                        </div>
                    </article>
                </div>

                <div class="column is-6">
                    <article class="card h-100" style="height: 100%; display: flex; flex-direction: column;">
                        <div class="card-image">
                            <figure class="image is-16by9">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a4/Estadio_S%C3%A1nchez_Rumoroso_2.jpg/800px-Estadio_S%C3%A1nchez_Rumoroso_2.jpg" alt="Coquimbo Unido" style="object-fit: cover;">
                            </figure>
                        </div>
                        <div class="card-content" style="flex-grow: 1;">
                            <span class="tag is-danger is-small mb-2">Copa Libertadores</span>
                            <p class="title is-5 has-text-white">El 'Pirata' asaltó Lima: Coquimbo ganó a Universitario</p>
                            <div class="content has-text-grey is-size-6">
                                Coquimbo Unido logró una histórica hazaña como visitante al derrotar a Universitario en Perú, sumando su primer triunfo en la actual edición de la copa.
                            </div>
                            <a href="https://www.biobiochile.cl/noticias/deportes/futbol/copa-libertadores/2026/04/14/el-pirata-asalto-lima-coquimbo-gano-a-universitario-y-sumo-primer-triunfo-en-copa-libertadores.shtml" target="_blank" class="has-text-link has-text-weight-bold">Leer más en BioBioChile →</a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section id="seccion-negocios" class="section has-background-white-ter">
        <div class="container is-max-desktop">
            <h2 class="title is-3 has-text-link mb-2" style="border-bottom: 3px solid #322a8f; padding-bottom: 5px;">Negocios</h2>
            
            <div class="columns is-multiline">
                <div class="column is-6">
                    <article class="card h-100" style="height: 100%; display: flex; flex-direction: column;">
                        <div class="card-image">
                            <figure class="image is-16by9">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/Sanhattan_-_Santiago_de_Chile.jpg/800px-Sanhattan_-_Santiago_de_Chile.jpg" alt="Exportaciones de servicios" style="object-fit: cover;">
                            </figure>
                        </div>
                        <div class="card-content" style="flex-grow: 1;">
                            <span class="tag is-primary is-small mb-2">Comercio Exterior</span>
                            <p class="title is-5 has-text-white">Exportaciones de servicios superan histórico de US$ 1.000 millones</p>
                            <div class="content has-text-grey is-size-6">
                                Las cifras de exportación informadas por ProChile en su informe de abril destacan un crecimiento récord en el área de servicios nacionales hacia el extranjero.
                            </div>
                            <a href="https://www.prochile.gob.cl/noticias/detalle-noticia/2026/04/13/destacado-en-prensa---exportaciones-de-servicios-superan-los-us-1.000-millones" target="_blank" class="has-text-link has-text-weight-bold">Leer más en ProChile →</a>
                        </div>
                    </article>
                </div>
                
                <div class="column is-6">
                    <article class="card h-100" style="height: 100%; display: flex; flex-direction: column;">
                        <div class="card-image">
                            <figure class="image is-16by9">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/Centro_Internacional_de_Bogot%C3%A1.jpg/800px-Centro_Internacional_de_Bogot%C3%A1.jpg" alt="StartCo Colombia" style="object-fit: cover;">
                            </figure>
                        </div>
                        <div class="card-content" style="flex-grow: 1;">
                            <span class="tag is-primary is-small mb-2">Emprendimiento</span>
                            <p class="title is-5 has-text-white">Chile lidera evento "StartCo 2026" con su mayor delegación</p>
                            <div class="content has-text-grey is-size-6">
                                28 empresas chilenas buscarán expansión en Colombia durante el encuentro de innovación, de las cuales 20 son apoyadas directamente por ProChile.
                            </div>
                            <a href="https://www.prochile.gob.cl/noticias/" target="_blank" class="has-text-link has-text-weight-bold">Leer más en ProChile →</a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section id="seccion-espectaculo" class="section">
        <div class="container is-max-desktop">
            <h2 class="title is-3 has-text-link mb-2" style="border-bottom: 3px solid #322a8f; padding-bottom: 5px;">Espectáculo</h2>
            <p class="subtitle is-5 has-text-grey">Cultura, eventos y lo último del entretenimiento.</p>
            
            <div class="columns is-multiline">
                <div class="column is-4">
                    <article class="card h-100" style="height: 100%; display: flex; flex-direction: column;">
                        <div class="card-image">
                            <figure class="image is-16by9">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/41/Andrea_Bocelli_2015.jpg/800px-Andrea_Bocelli_2015.jpg" alt="Andrea Bocelli" style="object-fit: cover;">
                            </figure>
                        </div>
                        <div class="card-content" style="flex-grow: 1;">
                            <span class="tag is-success is-small mb-2">Conciertos</span>
                            <p class="title is-5 has-text-white">Andrea Bocelli agenda histórica presentación en el Estadio Nacional</p>
                            <div class="content has-text-grey is-size-6">
                                Tras su arrollador éxito reciente, el icónico tenor italiano confirma su concierto en el coliseo de Ñuñoa para el 20 de abril de 2026.
                            </div>
                            <a href="https://www.cooperativa.cl/noticias/magazine/musica/shows-en-vivo/conciertos-abril-2026/2026-03-02/001600.html" target="_blank" class="has-text-link has-text-weight-bold">Leer más en Cooperativa →</a>
                        </div>
                    </article>
                </div>

                <div class="column is-4">
                    <article class="card h-100" style="height: 100%; display: flex; flex-direction: column;">
                        <div class="card-image">
                            <figure class="image is-16by9">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3d/Sebasti%C3%A1n_Yatra_en_2019.jpg/800px-Sebasti%C3%A1n_Yatra_en_2019.jpg" alt="Sebastián Yatra" style="object-fit: cover;">
                            </figure>
                        </div>
                        <div class="card-content" style="flex-grow: 1;">
                            <span class="tag is-success is-small mb-2">Cartelera</span>
                            <p class="title is-5 has-text-white">Sebastián Yatra confirma su regreso al Movistar Arena</p>
                            <div class="content has-text-grey is-size-6">
                                El reconocido artista colombiano regresa al país para reencontrarse con sus fanáticos chilenos el próximo 18 de abril.
                            </div>
                            <a href="https://www.cooperativa.cl/noticias/magazine/musica/shows-en-vivo/conciertos-abril-2026/2026-03-02/001600.html" target="_blank" class="has-text-link has-text-weight-bold">Leer más en Cooperativa →</a>
                        </div>
                    </article>
                </div>

                <div class="column is-4">
                    <article class="card h-100" style="height: 100%; display: flex; flex-direction: column;">
                        <div class="card-image">
                            <figure class="image is-16by9">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7b/TV_camera_in_a_studio.jpg/800px-TV_camera_in_a_studio.jpg" alt="Estudio de TV" style="object-fit: cover;">
                            </figure>
                        </div>
                        <div class="card-content" style="flex-grow: 1;">
                            <span class="tag is-success is-small mb-2">Televisión</span>
                            <p class="title is-5 has-text-white">Macarena Tondreau revela graves secuelas tras sufrir violenta encerrona</p>
                            <div class="content has-text-grey is-size-6">
                                La presentadora de televisión impactó al confesar que sufrió una parálisis facial debido al fuerte trauma vivido en el asalto.
                            </div>
                            <a href="https://www.cooperativa.cl/" target="_blank" class="has-text-link has-text-weight-bold">Leer más en Cooperativa →</a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <section class="section has-background-dark">
        <div class="container is-max-desktop has-text-centered mb-5">
            <audio controls class="is-shadowless">
                <source src="Asset/audio/audio.mp3" type="audio/mpeg">
            </audio>
        </div>
        
        <div class="container is-max-desktop">
            <div class="box">
                <h2 class="title is-4 has-text-centered has-text-link">Contacto</h2>
                <form id="formulario-contacto">
                    <div class="field">
                        <label class="label has-text-grey-dark" for="nombre">Nombre:</label>
                        <div class="control">
                            <input class="input" type="text" id="nombre" name="nombre" placeholder="Escriba su nombre completo">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label has-text-grey-dark" for="mensaje">Mensaje:</label>
                        <div class="control">
                            <textarea class="textarea" id="mensaje" name="mensaje" rows="4" placeholder="Deje su mensaje aquí"></textarea>
                        </div>
                    </div>
                    <div class="control mt-4">
                        <button class="button is-link is-fullwidth has-text-weight-bold" type="submit" id="btn-enviar">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <footer class="footer has-background-black has-text-light py-6">
        <div class="container is-max-desktop content has-text-centered">
            <div class="columns">
                <div class="column is-4">
                    <h4 class="has-text-white is-size-5 mb-3">El Faro Chile</h4>
                    <p class="is-size-7 has-text-grey-light">Tu fuente confiable de noticias nacionales e internacionales, actualizada minuto a minuto.</p>
                </div>
                <div class="column is-4">
                    <h4 class="has-text-white is-size-5 mb-3">Secciones</h4>
                    <ul style="list-style-type: none; margin: 0; padding: 0;">
                        <li><a class="has-text-grey-light hover-text-white" href="#seccion-deportes">Deportes</a></li>
                        <li><a class="has-text-grey-light hover-text-white" href="#seccion-negocios">Negocios</a></li>
                        <li><a class="has-text-grey-light hover-text-white" href="#seccion-internacional">Internacional</a></li>
                    </ul>
                </div>
                <div class="column is-4">
                    <h4 class="has-text-white is-size-5 mb-3">Contacto</h4>
                    <p class="is-size-7 has-text-grey-light">contacto@elfarochile.cl<br>Santiago, Chile</p>
                </div>
            </div>
            <hr class="has-background-grey-dark my-5" style="height: 1px;">
            <p class="is-size-7 has-text-grey">&copy; Periódico El Faro 2026. Todos los derechos reservados.</p>
        </div>
    </footer>
    <script src="script.js"></script>
</body>
</html>