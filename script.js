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


function comprarItems (id) {
    var modal = document.getElementById('editmodals')
    // hacer una petición AJAX para obtener los datos del usuario
    var xhttp = new XMLHttpRequest()
    xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        // si se obtienen los datos, cargarlos en el modal
        modal.querySelector('.modal-body').innerHTML = this.responseText
        modal.style.display = 'block'
      }
    }
    xhttp.open('GET', 'additemcard.php?id=' + id, true)
    xhttp.send()

  }


  function hideEditModal () {
    var modal = document.getElementById('editmodals')
    modal.style.display = 'none'
  }
  

  function confirmDelete(productId) {
    if (confirm("¿Estás seguro de que quieres eliminar?")) {
      // Envía la solicitud de eliminación al servidor utilizando AJAX
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          // Actualiza la lista de usuarios en la página sin recargarla
          window.location.reload()
        }
      };
      xhttp.open("POST", "deleteproductcomprado.php", true);
      xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhttp.send("id=" + productId);
    }
  }

  function confirmDeleteproduct(productId) {
    if (confirm("¿Estás seguro de que quieres eliminar?")) {
      // Envía la solicitud de eliminación al servidor utilizando AJAX
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          // Actualiza la lista de usuarios en la página sin recargarla
          window.location.reload()
        }
      };
      xhttp.open("POST", "deleteproduct.php", true);
      xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhttp.send("id=" + productId);
    }
  }

  function confirmDeletecategoria(categoriaId) {
    if (confirm("¿Estás seguro de que quieres eliminar?")) {
      // Envía la solicitud de eliminación al servidor utilizando AJAX
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          // Actualiza la lista de usuarios en la página sin recargarla
          window.location.reload()
        }
      };
      xhttp.open("POST", "deletecategoria.php", true);
      xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhttp.send("id=" + categoriaId);
    }
  }

  function confirmDeletelistadeunacategoria(listId) {
    if (confirm("¿Estás seguro de que quieres eliminar?")) {
      // Envía la solicitud de eliminación al servidor utilizando AJAX
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          // Actualiza la lista de usuarios en la página sin recargarla
          window.location.reload()
        }
      };
      xhttp.open("POST", "deletelist.php", true);
      xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhttp.send("id=" + listId);
    }
  }

  function confirmDeletecategorialista(categorialistId) {
    if (confirm("¿Estás seguro de que quieres eliminar?")) {
      // Envía la solicitud de eliminación al servidor utilizando AJAX
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          // Actualiza la lista de usuarios en la página sin recargarla
          window.location.reload()
        }
      };
      xhttp.open("POST", "deletecategorialist.php", true);
      xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhttp.send("id=" + categorialistId);
    }
  }
