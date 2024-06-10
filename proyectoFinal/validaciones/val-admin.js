const correo = document.getElementById("correo")
const password = document.getElementById("contra")
const mensaje = document.getElementsByClassName("alertas")
const form = document.getElementById("iniSecsion")

form.addEventListener("submit", e=>{
    e.preventDefault();
    let alertas = ''; 
    let entrar = false;

    if(correo.value.trim() === '' || !/^[a-zA-Z0-9._%+-]+@alumno\.ipn\.mx$/.test(correo.value)){
        alertas += 'El correo no es válido. Debe ser un correo institucional (@alumno.ipn.mx)<br>';
        entrar = true;
    }
    if(password.value.trim() === '' || password.value.length < 8){
        alertas += 'La contraseña debe tener un mínimo de 8 caracteres<br>';
        entrar = true;
    }

    if(entrar){
        mensaje.innerHTML = alertas;
    }else{
        form.submit();
    }
})