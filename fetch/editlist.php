<?php

function updateProductlist()
{
  include('db/dbconnect.php');
  if (isset($_GET['id'])) {
    $id = $_GET["id"];
    $sql = "SELECT * FROM product_list WHERE id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
  }

  if (isset($_POST['updatelist'])) {
    $id = $_GET["id"];
    $descripcion = $_POST["descripcion"];
    $estado = $_POST["estado"];
    $list_id = $_POST["list_id"];

    $sql = "UPDATE product_list set descripcion = '$descripcion', estado = '$estado', list_id = '$list_id' WHERE id =' $id'";
    $result = $conn->query($sql);
    header("Location: admlist.php");
  } ?>
  <div class="form-content">
    <h2 class="mt-3">list Id <?php echo $_GET['id']; ?></h2>
    <form action="editarproductlist.php?id=<?php echo $_GET['id']; ?>" method="POST" enctype="multipart/form-data">
      <div class="row">
        <div class="">
          <div class="mb-3">
            <label for="title" class="form-label">title</label>
            <input class="form-control" type="text" name="descripcion" id="descripcion" value="<?php echo $row['descripcion'] ?>" autofocus>
          </div>
          <div class="input-group mb-3">
            <select name="list_id" id="list_id" class="form-select" required>
              <option hidden disabled selected value>Select category</option>
              <?php
              $catsql = "SELECT * FROM `listas`";
              $catresult = mysqli_query($conn, $catsql);
              while ($data = mysqli_fetch_assoc($catresult)) {
                $id = $data['id'];
                $title = $data['title'];
                echo '<option value="' . $id . '">' . $title . '</option>';
              }
              ?>
            </select>
          </div>
          <div class="form-group">
            <spam>Ingresa 0 para que sea visible o 1 para que no aparezca</spam>
            <input type="number" class="form-control" name="estado" placeholder="estado: " required>
          </div>
          <div class="d-flex">
            <button type="submit" name="updatelist" class="btn btn-success w-100  m-1">Save</button>
            <a  class="btn btn-danger w-100  m-1" href="admlist.php">Cancel</a>
          </div>
        </div>

      </div>
    </form>
  </div>
<?php

} ?>

<?php

function updateCategorias()
{
  include('db/dbconnect.php');
  if (isset($_GET['id'])) {
    $id = $_GET["id"];
    $sql = "SELECT * FROM listas WHERE id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
  }

  if (isset($_POST['updatecategorie'])) {
    $id = $_GET["id"];
    $title = $_POST["title"];

    $sql = "UPDATE listas set title = '$title' WHERE id =' $id'";
    $result = $conn->query($sql);
    header("Location: categoriaslista.php");
  } ?>
  <div class="form-content">
    <h2 class="mt-3">list Id <?php echo $_GET['id']; ?></h2>
    <form action="editcategorias.php?id=<?php echo $_GET['id']; ?>" method="POST" enctype="multipart/form-data">
      <div class="row">
        <div class="">
          <div class="mb-3">
            <label for="title" class="form-label">title</label>
            <input class="form-control" type="text" name="title" id="title" value="<?php echo $row['title'] ?>" autofocus>
          </div>
          <div class="d-flex">
            <button type="submit" name="updatecategorie" class="btn btn-success w-100  m-1">Save</button>
           <a class="btn btn-danger w-100  m-1" href="categoriaslista.php">Cancel</a>
          </div>
        </div>

      </div>
    </form>
  </div>
<?php

} ?>


<?php

function updateCategoriasproducts()
{
  include('db/dbconnect.php');
  if (isset($_GET['id'])) {
    $id = $_GET["id"];
    $sql = "SELECT * FROM categories WHERE id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
  }

  if (isset($_POST['updatecategorie'])) {
    $id = $_GET["id"];
    $nombre = $_POST["nombre"];
    $descripcion = $_POST['descripcion'];
    $sql = "UPDATE categories set nombre = '$nombre', descripcion = '$descripcion' WHERE id =' $id'";
    $result = $conn->query($sql);
    header("Location: categoriesbyproducts.php");

  } ?>
  <div class="form-content">
    <h2 class="mt-3">list Id <?php echo $_GET['id']; ?></h2>
    <form action="editcategorieproduct.php?id=<?php echo $_GET['id']; ?>" method="POST" enctype="multipart/form-data">
      <div class="row">
        <div class="">
          <div class="mb-3">
            <label for="nombre" class="form-label">Title</label>
            <input class="form-control" type="text" name="nombre" id="nombre" value="<?php echo $row['nombre'] ?>" autofocus>
          </div>
          <div class="mb-3">
            <label for="nombre" class="form-label">Descripcion</label>
            <input class="form-control" type="text" name="descripcion" id="descripcion" value="<?php echo $row['descripcion'] ?>" autofocus>
          </div>
          <div class="d-flex">
            <button type="submit" name="updatecategorie" class="btn btn-success w-100  m-1">Save</button>
            <button type="button" class="btn btn-danger w-100  m-1"><a href="categoriesbyproducts.php">Cancel</a></button>
          </div>
        </div>

      </div>
    </form>
  </div>
<?php

} ?>