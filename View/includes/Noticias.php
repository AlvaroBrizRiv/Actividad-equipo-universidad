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
    <?php require_once '../Model/Articulo.php'; ?>

    <section id="seccion-nacional" class="section pt-5">
        <div class="container is-max-desktop">
            <h2 class="title is-3 has-text-link mb-2" style="border-bottom: 3px solid #322a8f; padding-bottom: 5px;">Nacional</h2>
            <p class="subtitle is-5 has-text-grey">Lo más reciente del acontecer en el país.</p>
            
            <div class="columns is-multiline">
                
                <?php 
                // Pedimos a la base de datos los artículos de esta categoría
                $noticiasNacionales = Articulo::obtenerPorCategoria('nacional'); 
                
                // Si hay noticias, las recorremos una por una
                if (count($noticiasNacionales) > 0): 
                    foreach ($noticiasNacionales as $noticia):
                ?>
                    <div class="column is-4">
                        <article class="card h-100" style="height: 100%; flex-direction: column;">
                            <div class="card-image">
                                <figure class="image is-16by9">
                                    <img src="<?php echo htmlspecialchars($noticia['imagen_url']); ?>" alt="Imagen noticia" style="object-fit: cover;">
                                </figure>
                            </div>
                            <div class="card-content" style="flex-grow: 1;">
                                <span class="tag is-info is-small mb-2"><?php echo htmlspecialchars(ucfirst($noticia['categoria'])); ?></span>
                                <p class="title is-5 has-text-white"><?php echo htmlspecialchars($noticia['titulo']); ?></p>
                                <div class="content has-text-grey is-size-6">
                                    <?php echo htmlspecialchars($noticia['descripcion']); ?>
                                </div>
                                <a href="<?php echo htmlspecialchars($noticia['enlace_fuente']); ?>" target="_blank" class="has-text-link has-text-weight-bold">Leer fuente original →</a>
                            </div>
                        </article>
                    </div>
                    <?php 
                    endforeach; 
                else: 
                ?>
                    <div class="column is-12">
                        <div class="notification is-light">No hay noticias registradas en esta categoría aún.</div>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </section>

    <section id="seccion-internacional" class="section has-background-white-ter">
        <div class="container is-max-desktop">
            <h2 class="title is-3 has-text-link mb-2" style="border-bottom: 3px solid #322a8f; padding-bottom: 5px;">Internacional</h2>
            <div class="columns is-multiline">
                
                <?php 
                // Pedimos a la base de datos los artículos de esta categoría
                $noticiasInternacionales = Articulo::obtenerPorCategoria('internacional'); 
                
                // Si hay noticias, las recorremos una por una
                if (count($noticiasInternacionales) > 0): 
                    foreach ($noticiasInternacionales as $noticia):
                ?>
                    <div class="column is-4">
                        <article class="card h-100" style="height: 100%; flex-direction: column;">
                            <div class="card-image">
                                <figure class="image is-16by9">
                                    <img src="<?php echo htmlspecialchars($noticia['imagen_url']); ?>" alt="Imagen noticia" style="object-fit: cover;">
                                </figure>
                            </div>
                            <div class="card-content" style="flex-grow: 1;">
                                <span class="tag is-info is-small mb-2"><?php echo htmlspecialchars(ucfirst($noticia['categoria'])); ?></span>
                                <p class="title is-5 has-text-white"><?php echo htmlspecialchars($noticia['titulo']); ?></p>
                                <div class="content has-text-grey is-size-6">
                                    <?php echo htmlspecialchars($noticia['descripcion']); ?>
                                </div>
                                <a href="<?php echo htmlspecialchars($noticia['enlace_fuente']); ?>" target="_blank" class="has-text-link has-text-weight-bold">Leer fuente original →</a>
                            </div>
                        </article>
                    </div>
                    <?php 
                    endforeach; 
                else: 
                ?>
                    <div class="column is-12">
                        <div class="notification is-light">No hay noticias registradas en esta categoría aún.</div>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </section>

    <section id="seccion-deportes" class="section">
        <div class="container is-max-desktop">
            <h2 class="title is-3 has-text-link mb-2" style="border-bottom: 3px solid #322a8f; padding-bottom: 5px;">Deportes</h2>
            
            <div class="columns is-multiline">
                
                <?php 
                // Pedimos a la base de datos los artículos de esta categoría
                $noticiasDeportes = Articulo::obtenerPorCategoria('deportes'); 
                
                // Si hay noticias, las recorremos una por una
                if (count($noticiasDeportes) > 0): 
                    foreach ($noticiasDeportes as $noticia):
                ?>
                    <div class="column is-4">
                        <article class="card h-100" style="height: 100%; flex-direction: column;">
                            <div class="card-image">
                                <figure class="image is-16by9">
                                    <img src="<?php echo htmlspecialchars($noticia['imagen_url']); ?>" alt="Imagen noticia" style="object-fit: cover;">
                                </figure>
                            </div>
                            <div class="card-content" style="flex-grow: 1;">
                                <span class="tag is-info is-small mb-2"><?php echo htmlspecialchars(ucfirst($noticia['categoria'])); ?></span>
                                <p class="title is-5 has-text-white"><?php echo htmlspecialchars($noticia['titulo']); ?></p>
                                <div class="content has-text-grey is-size-6">
                                    <?php echo htmlspecialchars($noticia['descripcion']); ?>
                                </div>
                                <a href="<?php echo htmlspecialchars($noticia['enlace_fuente']); ?>" target="_blank" class="has-text-link has-text-weight-bold">Leer fuente original →</a>
                            </div>
                        </article>
                    </div>
                    <?php 
                    endforeach; 
                else: 
                ?>
                    <div class="column is-12">
                        <div class="notification is-light">No hay noticias registradas en esta categoría aún.</div>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </section>

    <section id="seccion-negocios" class="section has-background-white-ter">
        <div class="container is-max-desktop">
            <h2 class="title is-3 has-text-link mb-2" style="border-bottom: 3px solid #322a8f; padding-bottom: 5px;">Negocios</h2>
            
            <div class="columns is-multiline">
                
                <?php 
                // Pedimos a la base de datos los artículos de esta categoría
                $noticiasNegocios = Articulo::obtenerPorCategoria('negocios'); 
                
                // Si hay noticias, las recorremos una por una
                if (count($noticiasNegocios) > 0): 
                    foreach ($noticiasNegocios as $noticia):
                ?>
                    <div class="column is-4">
                        <article class="card h-100" style="height: 100%; flex-direction: column;">
                            <div class="card-image">
                                <figure class="image is-16by9">
                                    <img src="<?php echo htmlspecialchars($noticia['imagen_url']); ?>" alt="Imagen noticia" style="object-fit: cover;">
                                </figure>
                            </div>
                            <div class="card-content" style="flex-grow: 1;">
                                <span class="tag is-info is-small mb-2"><?php echo htmlspecialchars(ucfirst($noticia['categoria'])); ?></span>
                                <p class="title is-5 has-text-white"><?php echo htmlspecialchars($noticia['titulo']); ?></p>
                                <div class="content has-text-grey is-size-6">
                                    <?php echo htmlspecialchars($noticia['descripcion']); ?>
                                </div>
                                <a href="<?php echo htmlspecialchars($noticia['enlace_fuente']); ?>" target="_blank" class="has-text-link has-text-weight-bold">Leer fuente original →</a>
                            </div>
                        </article>
                    </div>
                    <?php 
                    endforeach; 
                else: 
                ?>
                    <div class="column is-12">
                        <div class="notification is-light">No hay noticias registradas en esta categoría aún.</div>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </section>

    <section id="seccion-espectaculo" class="section">
        <div class="container is-max-desktop">
            <h2 class="title is-3 has-text-link mb-2" style="border-bottom: 3px solid #322a8f; padding-bottom: 5px;">Espectáculo</h2>
            <p class="subtitle is-5 has-text-grey">Cultura, eventos y lo último del entretenimiento.</p>
            
            <div class="columns is-multiline">
                
                <?php 
                // Pedimos a la base de datos los artículos de esta categoría
                $noticiasEspectaculo = Articulo::obtenerPorCategoria('espectaculo'); 
                
                // Si hay noticias, las recorremos una por una
                if (count($noticiasEspectaculo) > 0): 
                    foreach ($noticiasEspectaculo as $noticia):
                ?>
                    <div class="column is-4">
                        <article class="card h-100" style="height: 100%; flex-direction: column;">
                            <div class="card-image">
                                <figure class="image is-16by9">
                                    <img src="<?php echo htmlspecialchars($noticia['imagen_url']); ?>" alt="Imagen noticia" style="object-fit: cover;">
                                </figure>
                            </div>
                            <div class="card-content" style="flex-grow: 1;">
                                <span class="tag is-info is-small mb-2"><?php echo htmlspecialchars(ucfirst($noticia['categoria'])); ?></span>
                                <p class="title is-5 has-text-white"><?php echo htmlspecialchars($noticia['titulo']); ?></p>
                                <div class="content has-text-grey is-size-6">
                                    <?php echo htmlspecialchars($noticia['descripcion']); ?>
                                </div>
                                <a href="<?php echo htmlspecialchars($noticia['enlace_fuente']); ?>" target="_blank" class="has-text-link has-text-weight-bold">Leer fuente original →</a>
                            </div>
                        </article>
                    </div>
                    <?php 
                    endforeach; 
                else: 
                ?>
                    <div class="column is-12">
                        <div class="notification is-light">No hay noticias registradas en esta categoría aún.</div>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </section>
   
