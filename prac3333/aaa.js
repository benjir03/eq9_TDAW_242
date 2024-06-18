const datos = {
    cliente: {
        "nombre": "benjamin",
        "apellido": "rosario",
        "edad": 19,
        "hermanos": [
            {"nombre": "Ana", "apellido": "Cortez"},
            {"nombre": "Benji", "apellido": "Rosario"}
        ],
        "pareja": {
            "nombrePareja": "María"
        }
    }
};

// Obtener el número de hermanos
const numeroHermanos = datos.cliente.hermanos.length;

// Crear el mensaje utilizando una plantilla de cadena (template string)
const mensaje = `El cliente "${datos.cliente.nombre} ${datos.cliente.apellido}", tiene "${numeroHermanos}" hermanos y su pareja se llama "${datos.cliente.pareja.nombrePareja}".`;

// Imprimir el mensaje en pantalla
console.log(mensaje);