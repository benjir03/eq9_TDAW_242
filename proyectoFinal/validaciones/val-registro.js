const boleta = document.getElementById("boleta");
const nombre = document.getElementById("nombre");
const apPat = document.getElementById("primerAp");
const apMat = document.getElementById("segundoAp");
const tel = document.getElementById("tel");
const semestre = document.getElementById("semestre");
const carrera = document.getElementById("carrera");
const hombre = document.getElementById("hombre");
const mujer = document.getElementById("mujer");
const correo = document.getElementById("correo");
const pass = document.getElementById("contra");
const form = document.getElementById("registro");
const alerta = document.getElementById("alertas");

form.addEventListener("submit", e =>{
    e.preventDefault();
    let alertas = ''; 
    let entrar = false;

    if(boleta.value.trim() === '' || boleta.value.length != 10 || !/^\d+$/.test(boleta.value)){
        alertas += 'La boleta debe ser de 10 dígitos<br>';
        entrar = true;
    }
    if(nombre.value.trim() === '' || nombre.value.length > 50 || !/^[a-zA-Z\s]+$/.test(nombre.value)){
        alertas += 'El nombre solo puede tener un máximo de 50 letras<br>';
        entrar = true;
    }
    if(apPat.value.trim() === '' || apPat.value.length > 50 || !/^[a-zA-Z\s]+$/.test(apPat.value)){
        alertas += 'El apellido paterno solo puede tener un máximo de 50 letras<br>';
        entrar = true;
    }
    if(apMat.value.trim() === '' || apMat.value.length > 50 || !/^[a-zA-Z\s]+$/.test(apMat.value)){
        alertas += 'El apellido materno solo puede tener un máximo de 50 letras<br>';
        entrar = true;
    }
    if(tel.value.trim() === '' || tel.value.length != 10 || !/^\d{10}$/.test(tel.value)){
        alertas += 'El teléfono debe tener 10 dígitos<br>';
        entrar = true;
    }
    if(semestre.value === 0){
        alertas += 'Debe seleccionar su semestre<br>';
        entrar = true;
    }
    if(carrera.value === 0){
        alertas += 'Debe seleccionar su carrera<br>';
        entrar = true;
    }
    if(!hombre.checked && !mujer.checked){
        alertas += 'Debe escoger el género de su tutor<br>';
        entrar = true;
    }
    if(correo.value.trim() === '' || !/^[a-zA-Z0-9._%+-]+@alumno\.ipn\.mx$/.test(correo.value)){
        alertas += 'El correo no es válido. Debe ser un correo institucional (@alumno.ipn.mx)<br>';
        entrar = true;
    }
    if(pass.value.trim() === '' || pass.value.length < 8){
        alertas += 'La contraseña debe tener un mínimo de 8 caracteres<br>';
        entrar = true;
    }

    if(entrar){
        alerta.innerHTML = alertas;
    }else{
        form.submit();
    }
});
