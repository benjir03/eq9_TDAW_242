function validarRegistro() {
    var boleta = document.getElementById("boleta").value;
    var nombre = document.getElementById("nombre").value;
    var apPat = document.getElementById("apPat").value;
    var apMat = document.getElementById("apMat").value;
    var telefono = document.getElementById("tel").value;
    var carrera = document.getElementById("carrera").value;
    var semestre = document.getElementById("semestre").value;
    var correo = document.getElementById("correo").value;

    var mensaje = "¿Tus datos son correctos?\nBoleta: " + boleta + "\nNombre completo: " + apPat + " " + apMat + " " + nombre + "\nTeléfono: " + telefono + "\nCarrera: " + carrera + "\nSemestre: " + semestre + "\nCorreo: " + correo + "\nPresiona Aceptar para enviar el formulario, de lo contrario presiona Cancelar.\n\n";

    var confirmacion = confirm(mensaje);

    if (confirmacion) {
        alert("¡Tus datos han sido guardados!");
        return true;
    } else {
        return false;
    }
};