function validarTelefono(inputTelefono) {

    var telefono = inputTelefono.value;

    if (telefono.trim() === '') {
        alert("El número de teléfono es obligatorio");
        inputTelefono.setCustomValidity("El número de teléfono es obligatorio");
        inputTelefono.value = ''; 
    } else if (telefono.length !== 10) {
        alert("El número de teléfono debe tener 10 dígitos");
        inputTelefono.setCustomValidity("El número de teléfono debe tener 10 dígitos");
        inputTelefono.value = ''; 
    } else {
        inputTelefono.setCustomValidity("");
    }
}

function validarNombre(inputNombre) {
    const nombreRegex = /^[A-ZÁÉÍÓÚÜÑ][a-záéíóúüñ]+(?:\s[A-ZÁÉÍÓÚÜÑ][a-záéíóúüñ]+)*$/;

    if (inputNombre.value.trim() === '') {
        alert("El nombre es obligatorio");
        inputNombre.setCustomValidity("El nombre es obligatorio");
        inputNombre.value = '';
    } else if (!nombreRegex.test(inputNombre.value)) {
        alert("El nombre(s) deben de comenzar con mayúsculas");
        inputNombre.value = '';
    } else {
        inputNombre.setCustomValidity("");
    }
}

function validarApellido(inputApellido) {
    const apellidoRegex = /^[A-ZÁÉÍÓÚÜÑ][a-záéíóúüñ]+$/;

    if (inputApellido.value.trim() === '') {
        alert("El apellido es obligatorio");
        inputApellido.setCustomValidity("El apellido es obligatorio");
        inputApellido.value = '';
    } else if (!apellidoRegex.test(inputApellido.value)) {
        alert("El apellido debe comenzar con mayúscula");
        inputApellido.value = '';
    } else {
        inputApellido.setCustomValidity("");
    }
}

function validarBoleta(input) {
    var boleta = input.value;
    var patronNumerico = /^\d{10}$/;
    var patronAlfanumerico = /^(PE|PP)\d{8}$/;

    if (patronNumerico.test(boleta) || patronAlfanumerico.test(boleta)) {
        alert('Boleta válida');
    } else {
        alert('La boleta debe ser un número con 10 dígitos, o bien, debe ser en formato alfanumérico PE/PP seguido de 8 dígitos.');
        input.value = '';
    }
}


function validarCURP(inputCURP) {
    let curp = inputCURP.value;
    const curpRegex = /^[A-Z]{4}\d{6}[A-Z]{6}[\dA-Z]{2}$/;

    if (curp.trim() === '') {
        alert("El CURP es obligatorio");
        inputCURP.setCustomValidity("El CURP es obligatorio");
    } else if (!curpRegex.test(curp)) {
        alert("El formato de CURP es inválido");
        inputCURP.setCustomValidity("El formato de CURP es inválido");
        inputCURP.value = '';
    } else {
        alert("CURP válido");
        inputCURP.setCustomValidity("");
    }
}

function validarCorreo(inputCorreo) {
    
    let correo = inputCorreo.value;

    const correo1 = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

    if(correo.trim() === '')
    {
        alert("El correo electrónico es obligatorio");
        inputCorreo.setCustomValidity("El correo electrónico es obligatorio");
        inputCorreo.value = ''; 
    }
    else if (!correo1.test(correo)) {
        alert("Ingresa una dirección de correo electrónico válida.");

        inputCorreo.value = ''; 
    }
    else
    {
        inputCorreo.setCustomValidity("");
    }
}

function validarPromedio(input) {
    var promedio = parseFloat(input.value);

    if (isNaN(promedio) || promedio < 6.0 || promedio > 10.0) {
        alert("El promedio debe estar entre 6.0 y 10.0");
        input.value = ''; 
    }
}

function mostrarOcultarCampoA() {
    var tipoDiscapacidad = document.getElementById("otra");
    var otraDiscapacidadInput = document.getElementById("otraDiscapacidad");
    
    if (tipoDiscapacidad.checked) {
        otraDiscapacidadInput.style.display = "inline-block";
    } else {
        otraDiscapacidadInput.style.display = "none";
    }
}

function mostrarOcultarCampoB() {
    var tipoEscuela = document.getElementById("escuela_de_procedencias");
    var otraEscuelaInput = document.getElementById("otraEscuela");

    if (tipoEscuela.value === "otro") {
        otraEscuelaInput.style.display = "inline-block";
    } else {
        otraEscuelaInput.style.display = "none";
    }
}

function mostrarOcultarCampoC() {
    var tipoMunicipio = document.getElementById("delegacion");
    var otroMunicipioInput = document.getElementById("otroMunicipio");

    if (tipoMunicipio.value === "Otro") {
        otroMunicipioInput.style.display = "inline-block";
    } else {
        otroMunicipioInput.style.display = "none";
    }
}

function next1(){
    var opc1 = document.getElementById('opc1');
    var opc2 = document.getElementById('opc2');

    opc1.style.display = 'none';
    opc2.style.display = 'block';
}

function next2(){
    var opc2 = document.getElementById('opc2');
    var opc3 = document.getElementById('opc3');

    opc2.style.display = 'none';
    opc3.style.display = 'block';
    botones.style.display = 'block';
}

function prev1(){
    var opc1 = document.getElementById('opc1');
    var opc2 = document.getElementById('opc2');

    opc1.style.display = 'block';
    opc2.style.display = 'none';
}

function prev2(){
    var opc2 = document.getElementById('opc2');
    var opc3 = document.getElementById('opc3');

    opc2.style.display = 'block';
    opc3.style.display = 'none';
    botones.style.display = 'none';
}

function blancos() {
    var campos = ["boleta", "nombre", "apellidoP", "apellidoM", "fecha", "curp",
                  "calle", "col", "delegacion", "cp", "tel", "inputEmail3",
                  "escuela_de_procedencias", "Estado", "Promedio"];

    for (var i = 0; i < campos.length; i++) {
        var campo = document.getElementById(campos[i]);

        if (!campo.value.trim()) {
            alert("Revisa, algún campo está vacío.");
            return false;
        }
    }
}

function validarCamposVacios() {

    var checkboxes = document.querySelectorAll('.form-check-input');
    var checkboxSeleccionado = false;

    checkboxes.forEach(function (checkbox) {
        if (checkbox.checked) {
            checkboxSeleccionado = true;
        }
    });

    if (!checkboxSeleccionado) {
        alert("Revisa, debes rellenar el campo de cuál fue tu opción ESCOM.");
        return false;
    }

    var radiobuttons = document.querySelectorAll('input[type="radio"]');
    var radiobuttonSeleccionado = false;

    radiobuttons.forEach(function (radiobutton) {
        if (radiobutton.checked) {
            radiobuttonSeleccionado = true;
        }
    });

    if (!radiobuttonSeleccionado) {
        alert("Revisa, debes seleccionar una opción de género.");
        return false;
    }

    return true;
}


function validarCodigoPostal(inputCodigoPostal) {
    var codigoPostal = inputCodigoPostal.value;

    var patron = /^[0-9]{5}$/;

    if (codigoPostal.trim() === '') {
        alert("El código postal es obligatorio");
        inputCodigoPostal.setCustomValidity("El código postal es obligatorio");
        inputCodigoPostal.value = ''; 
    } else if (!patron.test(codigoPostal)) {
        alert("El código postal debe constar de 5 números");
        inputCodigoPostal.setCustomValidity("El código postal debe constar de 5 números");
        inputCodigoPostal.value = ''; 
    } else {
        inputCodigoPostal.setCustomValidity("");
    }
}

function Seleccion(checkbox) {
    var checkboxes = document.getElementsByName("Opcion");

    checkboxes.forEach(function (cb) {
        if (cb !== checkbox) {
            cb.checked = false;
        }
    });
}