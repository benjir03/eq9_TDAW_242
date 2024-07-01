function confirmarTutor() {
    var TipoTutoria = document.getElementById("TipoTutoria").value;
    var tutor = document.getElementById("tutor").value;

    var mensaje = "Vas a registrar los datos siguientes: \nTipo de tutoría: " + TipoTutoria + "\nTutor: " + tutor;

    var confirmacion = confirm(mensaje);

    if (confirmacion) {
        alert("¡Ya has completado tu registro!");
        return true;
    } else {
        return false;
    }
}