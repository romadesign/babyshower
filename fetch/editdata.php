<?php

function updateProduct()
{
  include('db/dbconnect.php');
  if (isset($_GET['id'])) {
    $id = $_GET["id"];
    $sql = "SELECT * FROM products WHERE id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
  }

  if (isset($_POST['update'])) {
    $id = $_GET["id"];
    $title = $_POST["title"];
    $url = $_POST["url"];
    $img = $_POST["img"];
    $status = $_POST["status"];
    $user_id = 1;
    $categoria_id = $_POST["categoria_id"];

    $sql = "UPDATE products set title = '$title', url = '$url',img = '$img', user_id = '$user_id', categoria_id = '$categoria_id', status ='$status' WHERE id =' $id'";
    $result = $conn->query($sql);
    header("Location: admproducts.php");
  } ?>
  <div class="form-content">
    <h2 class="mt-3">Procuto Id <?php echo $_GET['id']; ?></h2>
    <form action="editarproduct.php?id=<?php echo $_GET['id']; ?>" method="POST" enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <input type="number" class="form-control" name="user_id" placeholder="id user:" required>
          </div>
          <div class="mb-3">
            <label for="title" class="form-label">title</label>
            <input class="form-control" type="text" name="title" id="title" value="<?php echo $row['title'] ?>" autofocus>
          </div>
          <div class="mb-3">
            <label for="url" class="form-label">url</label>
            <input class="form-control" type="text" name="url" id="url" value="<?php echo $row['url'] ?>" autofocus>
          </div>
          <div class="mb-3">
            <label for="img" class="form-label">img url</label>
            <input class="form-control" type="text" name="img" id="img" value="<?php echo $row['img'] ?>" autofocus>
          </div>
          <div class="input-group mb-3">
            <select name="categoria_id" id="categoria_id" class="form-select" required>
              <option hidden disabled selected value>Select category</option>
              <?php
              $catsql = "SELECT * FROM `categories`";
              $catresult = mysqli_query($conn, $catsql);
              while ($row = mysqli_fetch_assoc($catresult)) {
                $id = $row['id'];
                $nombre = $row['nombre'];
                echo '<option value="' . $id . '">' . $nombre . '</option>';
              }
              ?>
            </select>
          </div>
          <div class="form-group">
            <spam>Ingresa 1 para que sea visible o 0 para que no aparezca</spam>
            <input type="number" class="form-control" name="status" placeholder="status:" required>
          </div>
          <div class="d-flex">
            <button type="submit" name="update" class="btn btn-success w-100  m-1">Save</button>
            <button type="button" class="btn btn-danger w-100  m-1"><a href="/index.php">Cancel</a></button>
          </div>
        </div>

      </div>
    </form>
  </div>
<?php

} ?>