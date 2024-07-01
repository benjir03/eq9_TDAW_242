document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("formUpd");

    const boleta = document.getElementById("boleta");
    const nombre = document.getElementById("nombre");
    const apPat = document.getElementById("apPat");
    const apMat = document.getElementById("apMat");
    const tel = document.getElementById("tel");
    const semestre = document.getElementById("semestre");
    const carrera = document.getElementById("carrera");
    const correo = document.getElementById("correo");
    const pass = document.getElementById("contra");

    const alerta = document.getElementById("alertas");

    form.addEventListener("submit", e => {
        e.preventDefault();

        // Limpiar errores previos
        clearErrors();
        let entrar = false;

        if (boleta.value.length<1||boleta.value.trim() === '' || boleta.value.length != 10 || !/^\d+$/.test(boleta.value)) {
            mostrarError('error-boleta', 'La boleta debe contener solo números');
            entrar = true;
        } else{
            mostrarError('error-boleta', '');
        }
        if (nombre.value.trim() === '' || nombre.value.length > 50 || !/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/.test(nombre.value)) {
            mostrarError('error-nombre', 'El nombre solo puede tener un máximo de 50 letras');
            entrar = true;
        } else{
            mostrarError('error-nombre', '');}

        if (apPat.value.trim() === '' || apPat.value.length > 50 || !/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/.test(apPat.value)) {
            mostrarError('error-apPat', 'El apellido paterno solo puede tener un máximo de 50 letras');
            entrar = true;
        } else{
            mostrarError('error-apPat', '');}

        if (apMat.value.trim() === '' || apMat.value.length > 50 || !/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/.test(apMat.value)) {
            mostrarError('error-apMat', 'El apellido materno solo puede tener un máximo de 50 letras');
            entrar = true;
        } else{
            mostrarError('error-apMat', '');}

        if (tel.value.trim() === '' || tel.value.length != 10 || !/^\d{10}$/.test(tel.value)) {
            mostrarError('error-tel', 'El teléfono debe tener 10 dígitos');
            entrar = true;
        }else{
            mostrarError('error-tel', '');
        }
        
        if (semestre.value === '0') {
            mostrarError('error-semestre', 'Debe seleccionar su semestre');
            entrar = true;
        }else{
            mostrarError('error-semestre', '');
        }

        if (carrera.value === '0') {
            mostrarError('error-carrera', 'Debe seleccionar su carrera');
            entrar = true;
        }else{
            mostrarError('error-carrera', '');
        }
        
        if (correo.value.trim() === '' || !/^[a-zA-Z0-9._%+-]+@alumno\.ipn\.mx$/.test(correo.value)) {
            mostrarError('error-correo', 'El correo no es válido. Debe ser un correo institucional (@alumno.ipn.mx)');
            entrar = true;
        }else{
            mostrarError('error-correo', '');
        }
        if (pass.value.trim() === '' || pass.value.length < 8) {
            mostrarError('error-contra', 'La contraseña debe tener un mínimo de 8 caracteres');
            entrar = true;
        }else{
            mostrarError('error-contra', '');
        }

        if (entrar) {
            alerta.innerHTML = 'Por favor corrige los errores en el formulario.';
        } else {
            alert("Tus datos han sido guardados correctamente:)");
            form.submit();
        }
    });

    // Función para mostrar errores específicos junto a los campos correspondientes
    function mostrarError(idCampo, mensaje) {
        const campo = document.getElementById(idCampo);
        campo.innerText = mensaje;

        // Agregar clase para resaltar el campo con error
        if (mensaje) {
            document.getElementById(idCampo.replace('error-', '')).classList.add('campo-error');
        } else {
            document.getElementById(idCampo.replace('error-', '')).classList.remove('campo-error');
        }
    }

    // Función para limpiar todos los mensajes de error y estilos de los campos
    function clearErrors() {
        const errores = document.querySelectorAll('.error');
        errores.forEach(error => {
            error.innerText = '';
            document.getElementById(error.id.replace('error-', '')).classList.remove('campo-error');
        });
    }
});
