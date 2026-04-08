function actualizarReloj()
{
    let fecha = new Date();
    let contenedorReloj = document.getElementById('reloj');
    contenedorReloj.innerText = "Hora en Chile: " + fecha.toLocaleTimeString();

}
actualizarReloj();
setInterval(actualizarReloj, 1000);