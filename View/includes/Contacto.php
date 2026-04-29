<section class="section has-background-dark" id="seccion-contacto">
    <div class="container is-max-desktop">
        <div class="box">
            <h2 class="title is-4 has-text-centered has-text-link">Contacto</h2>
            
            <?php if(isset($_GET['status']) && $_GET['status'] == 'success'): ?>
                <div class="notification is-success has-text-centered">
                    <strong>¡Excelente!</strong> Tu mensaje se ha guardado en la base de datos.
                </div>
            <?php endif; ?>

            <form action="../Controller/ContactoController.php" method="POST">
                <div class="field">
                    <label class="label has-text-grey-dark">Nombre:</label>
                    <div class="control">
                        <input class="input" type="text" name="nombre_contacto" placeholder="Tu nombre" required>
                    </div>
                </div>
                <div class="field">
                    <label class="label has-text-grey-dark">Mensaje:</label>
                    <div class="control">
                        <textarea class="textarea" name="mensaje_contacto" placeholder="Escribe aquí..." required></textarea>
                    </div>
                </div>
                <div class="control mt-4">
                    <button class="button is-link is-fullwidth" type="submit">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</section>