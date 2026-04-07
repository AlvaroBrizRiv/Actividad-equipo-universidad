function fechaYHora() {
    new Date().toLocaleString("es-CL",)

}
fechaYHora();
document.getElementById('fechaYHora').textContent = fechaYHora();