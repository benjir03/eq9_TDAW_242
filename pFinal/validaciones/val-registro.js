const boleta = document.getElementById("boleta")
const nombre = document.getElementById("nombre")
const apPat = document.getElementById("primerAp")
const apMat = document.getElementById("segundoAp")
const tel = document.getElementById("tel")
const correo = document.getElementById("correo")
const pass = document.getElementById("contra")
const form = document.getElementById("registro")
const alerta = document.getElementById("alertas")

form.addEventListener("submit", e=>{
    e.preventDefault()
    let alertas;
    let entrar = false;
    if(boleta.value.length<10){
        alertas += 'Boleta no valida <br>'
        entrar = true
    }

    if(entrar){
        alerta.innerHTML = alertas
    }
})