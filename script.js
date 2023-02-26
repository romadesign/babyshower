// Establece la fecha de tu cumpleaños
var cumpleanos = new Date('2023-04-09');

// Crea una función para calcular la diferencia en días
function calcularDiferenciaEnDias(fecha) {
    var diasnav = document.getElementById('day_data');
    var hoy = new Date();
    var diferencia = fecha.getTime() - hoy.getTime();
    var dias = Math.floor(diferencia / (1000 * 60 * 60 * 24));
    diasnav.innerText = 'Faltan ' + dias + ' días';
    return dias;
}

// Actualiza el contenido del elemento HTML con el número de días restantes
var diasElemento = document.getElementById('dias');
diasElemento.innerText = calcularDiferenciaEnDias(cumpleanos);