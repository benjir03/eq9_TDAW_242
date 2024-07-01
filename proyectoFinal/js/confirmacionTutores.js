document.addEventListener("DOMContentLoaded", function() {

    var form = document.getElementById("regT");

    const tipoTutoria = document.getElementById("tipoTutoria");
    const tutor = document.getElementById("tutor");

    form.addEventListener("submit", e => {
        e.preventDefault();

        var confirmacion = confirm("¿Tus datos son correctos?\nTipo de tutoría: " + tipoTutoria.value + "\nTutor: " + tutor.value + "\nPresiona Aceptar para registrar, de lo contrario presiona Cancelar.\n\n");

        if (confirmacion) {
            alert("Tus datos han sido guardados correctamente:)");
            form.submit();
        }
    });
});