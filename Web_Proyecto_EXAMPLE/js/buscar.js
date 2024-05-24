function buscar() {
    var busqueda = document.getElementById('busqueda').value;

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
            document.getElementById('tabla-container').innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "buscar.php?busqueda=" + busqueda, true);
    xhttp.send();

    return false;
}