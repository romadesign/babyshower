<?php
include('db/dbconnect.php');

if (isset($_GET['id'])) {
  $id = (int) $_GET['id']; // validar y castear el id como integer

  $sql = "SELECT * FROM products  WHERE id = ?";

  $stmt = $conn->prepare($sql);
  $stmt->bind_param("i", $id);
  $stmt->execute();
  $result = $stmt->get_result();
  $row = $result->fetch_assoc();

  $id = htmlspecialchars($row['id']); 
  $title = htmlspecialchars($row['title']);

  if (isset($_POST['createuser'])) {
    $user_id = $_POST["user_id"];
    $product_id = $_POST["product_id"];
    $nombre = $_POST["nombre"];
    $mensaje = $_POST["mensaje"];

    $query = "INSERT INTO purchases (user_id, product_id, nombre, mensaje) 
                  VALUES ('$user_id', '$product_id','$nombre','$mensaje')";

    $resultado = mysqli_query($conn, $query);

    session_start();
    $_SESSION['mensaje'] = "Gracias :)";

    // Se obtiene la URL de la página anterior
    $pagina_anterior = $_SERVER['HTTP_REFERER'];

    // Se redirige al usuario a la página anterior
    header("Location: $pagina_anterior");
    exit();
  }
?>
  

    <form id="modal_edit" action="additemcard.php?id=<?php echo $_GET['id']; ?>" method="POST" enctype="multipart/form-data">
      <h5>Comprar: <?php echo $title ?></h5>
      <input hidden type='text' id='user_id' name='user_id' value='1'>
      <input hidden type='text' id='product_id' name='product_id' value='<?php echo $id ?>'>
      <div class="mb-3">
        <input type='text'  class="form-control" id='nombre' name='nombre' placeholder="Agrega tu nombre">
      </div>
      <div class="mb-3">
        <textarea class="form-control" name="mensaje" id="mensaje" rows="3" placeholder="Mensaje"></textarea>
      </div>
      <div class="content_button">
      <input type="submit" class="btn btn-success w-100" name="createuser" value="Comprar">
      <button type="button" class="btn btn-primary w-100" onclick="hideEditModal()">
        Cancelar
      </button>
      </div>
    </form>

<?php } ?>