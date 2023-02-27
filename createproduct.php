<?php include './db/dbconnect.php'; ?>
<?php include_once('template/header.php') ?>
<?php require('fetch/postdata.php'); ?>
<?php require('fetch/getdata.php'); ?>
<div class="container my-3 pt-5 mb-5">
  <div class="col-lg-2 text-center bg-lightmy-3" style="margin:auto;border-top: 2px groove black;border-bottom: 2px groove black;">
    <h2 class="text-center">create</h2>
  </div>
  <br>
  <form action="<?php echo createProduct() ?>" method="post" enctype="multipart/form-data">
    <div class="card mb-3">
      <div class="card-header">
        Create New Product
      </div>
      <div class="card-body">
        <div class="form-group">
          <input type="number" class="form-control" name="user_id" placeholder="id user:" required>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="title" placeholder="title:" required>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="img" placeholder="url-img:" required>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="url" placeholder="url:" required>
        </div>
        <div class="form-floating">
          <label for="floatingSelect">Category: </label>
          <select name="categoria_id" id="categoria_id" class="form-select" id="floatingSelect" required>
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
          <spam>Ingresa 0 para que sea visible o 1 para que no aparezca</spam>
          <input type="number" class="form-control" name="status" placeholder="status:" required>
        </div>
      </div>
      <button type="submit" name="createItem" class="btn btn-sm btn-primary button_menu_create"> Create </button>
    </div>
  </form>

  <form action="<?php echo createCategorie() ?>" method="post" enctype="multipart/form-data">
    <div class="card mb-3">
      <div class="card-header">
        Create New categoria
      </div>
      <div class="card-body">
        <div class="form-group">
          <input type="text" class="form-control" name="nombre" placeholder="nombre:" required>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="descripcion" placeholder="descripcion:" required>
        </div>
        
      </div>
      <button type="submit" name="createCategorie" class="btn btn-sm btn-primary button_menu_create"> Create categoria </button>
    </div>
  </form>

  <form action="<?php echo createList() ?>" method="post" enctype="multipart/form-data">
    <div class="card mb-3">
      <div class="card-header">
        Create New Listas
      </div>
      <div class="card-body">
        <div class="form-group">
          <input type="text" class="form-control" name="title" placeholder="title:" required>
        </div>
      </div>
      <button type="submit" name="createList" class="btn btn-sm btn-primary button_menu_create"> Create list </button>
    </div>
  </form>

  <form action="<?php echo createListproduct() ?>" method="post" enctype="multipart/form-data">
    <div class="card mb-3">
      <div class="card-header">
        Create New Producto para lista
      </div>
      <div class="card-body">
        <div class="form-group">
          <input type="text" class="form-control" name="descripcion" placeholder="Nombre del producto:" required>
        </div>
        <div class="form-floating">
          <label for="floatingSelect">Category list: </label>
          <select name="list_id" id="list_id" class="form-select" required>
            <option hidden disabled selected value>Select category</option>
            <?php
            $catsql = "SELECT * FROM `listas`";
            $catresult = mysqli_query($conn, $catsql);
            while ($row = mysqli_fetch_assoc($catresult)) {
              $id = $row['id'];
              $title = $row['title'];
              echo '<option value="' . $id . '">' . $title . '</option>';
            }
            ?>
          </select>
        </div>
        <div class="form-group">
          <spam>Ingresa 0 para que sea activo o 1 para inactivo</spam>
          <input type="number" class="form-control" name="estado" placeholder="estado:" required>
        </div>
      </div>
      <button type="submit" name="createItemList" class="btn btn-sm btn-primary button_menu_create"> Create </button>
    </div>
  </form>
</div>

<?php include_once('template/footer.php') ?>