<section class="section has-background-dark">
    <div class="container is-max-desktop">
        <div class="box">
            <h2 class="title is-4 has-text-centered has-text-link">Contacto</h2>
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