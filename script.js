function actualizarReloj()
{
    let fecha = new Date();
    let contenedorReloj = document.getElementById('reloj');
    let contenedorFecha = document.getElementById('fecha');
    let opciones = { hour: '2-digit', minute: '2-digit', second: '2-digit' };   
    contenedorFecha.innerText = "Fecha: " + fecha.toLocaleDateString();
    contenedorReloj.innerText = "Hora: " + fecha.toLocaleTimeString(opciones);

}

actualizarReloj();
setInterval(actualizarReloj, 1000);

const formulario = document.getElementById("formulario-articulo");

formulario.addEventListener("submit", function(evento){

    evento.preventDefault();
    
    const imagenURL = document.getElementById('imagen-articulo').value;
    const titulo = document.getElementById('titulo-articulo').value;
    const descripcion = document.getElementById('descripcion-articulo').value;
    const categoria = document.getElementById('categoria-articulo').value;
    const link = document.getElementById('link-articulo').value;
    const nuevoArticulo = document.createElement('article');

    nuevoArticulo.innerHTML = `
    <img src="${imagenURL}" width="750" height="265" alt="Imagen del artículo"/>
        <div class="info-articulo">
            <p><strong>${titulo}</strong></p>
            <p>${descripcion}</p>
            <p class="${categoria}">Más información haciendo click <a href="${link}" target="_blank">aquí</a></p>
        </div>
    `;

    const seccionDestino = document.getElementById('seccion-' + categoria);
    seccionDestino.prepend(nuevoArticulo);

    formulario.reset();

    actualizarContadores();

})

function actualizarContadores() {
    const categorias = ['deportes', 'negocios', 'internacional'];
    categorias.forEach(categoria => {
        const articulos = document.querySelectorAll(`#seccion-${categoria} article`);
        const contador = document.getElementById(`cantidad-${categoria}`);
        if (contador) {
            contador.innerText = `cantidad de noticias: ${articulos.length}`;
        }
    });
}

actualizarContadores();