<?php

function getProductscomprados()
{
  include('db/dbconnect.php');
  $sql = "SELECT pc.id, p.title, p.img FROM products p
          INNER JOIN purchases pc ON p.id = pc.product_id";
  $result = mysqli_query($conn, $sql);
  while ($row = mysqli_fetch_assoc($result)) {
    $title = $row['title'];
    $img = $row['img']; ?>
    <table class="table">
      <tbody>
        <tr class="content_data_get">
          <th scope="row"><?php echo $row['id'] ?></th>
          <td><img class="image_product_width" src="<?php echo $img ?>"></td>
          <td>
            <p class="card-text fst-italic ">Title: <?php echo substr($title, 0, 100) ?> </p>
          </td>
          <td class="d-flex">
            <button type="button" class="btn btn-danger" onclick="confirmDelete(<?php echo $row['id']  ?>)">
              <i class="fas fa-trash"> </i>
            </button>
          </td>
        </tr>
      </tbody>
    </table>
  <?php }
}




function getProductsadmin()
{
  include('db/dbconnect.php');
  $sql = "SELECT * FROM `products`";
  $result = mysqli_query($conn, $sql);
  while ($row = mysqli_fetch_assoc($result)) {
    $title = $row['title'];
    $img = $row['img'];
    $url = $row['url']; ?>
    <table class="table">
      <tbody>
        <tr class="content_data_get">
          <th scope="row"><?php echo $row['id'] ?></th>
          <td><img class="image_product_width" src="<?php echo $img ?>"></td>
          <td>
            <p class="card-text fst-italic ">Title: <?php echo substr($title, 0, 100) ?> </p>
          </td>
          <td class="d-flex">
            <a class="pe-3" href="editarproduct.php?id=<?php echo $row['id'] ?>"><i class="fas fa-edit"></i></a>
            <button type="button" class="btn btn-danger" onclick="confirmDeleteproduct(<?php echo $row['id']  ?>)">
              <i class="fas fa-trash"> </i>
            </button>
          </td>
        </tr>
      </tbody>
    </table>
  <?php }
}





function listas()
{
  include('db/dbconnect.php');
  $sql = "SELECT * FROM `product_list`";
  $result = mysqli_query($conn, $sql);
  while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    $descripcion = $row['descripcion'];
    $estado = $row['estado']; ?>
    <table class="table">
      <tbody>
        <tr class="content_data_get_list">
          <th scope="row"><?php echo $row['id'] ?></th>
          <td>
            <p class="card-text fst-italic ">Title: <?php echo substr($descripcion, 0, 500) ?> </p>
          </td>
          <td class="d-flex">
            <a class="pe-3" href="editarproductlist.php?id=<?php echo $id ?>"><i class="fas fa-edit"></i></a>
            <button type="button" class="btn btn-danger" onclick="confirmDeletelistadeunacategoria(<?php echo $id  ?>)">
                  <i class="fas fa-trash"> </i>
                </button>
          </td>
        </tr>
      </tbody>
    </table>
  <?php }
}

function categorias_lista() //para editar categorias
{
  include('db/dbconnect.php');
  $sql = "SELECT * FROM `listas`";
  $result = mysqli_query($conn, $sql);
  while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    $title = $row['title']; ?>
    <table class="table">
      <tbody>
        <tr class="content_data_get_list">
          <th scope="row"><?php echo $row['id'] ?></th>
          <td>
            <p class="card-text fst-italic ">Categor??a: <strong> <?php echo substr($title, 0, 500) ?></strong> </p>
          </td>
          <td class="d-flex">
            <a class="pe-3" href="editcategorias.php?id=<?php echo $id ?>"><i class="fas fa-edit"></i></a>
            <button type="button" class="btn btn-danger" onclick="confirmDeletecategorialista(<?php echo $id  ?>)">
              <i class="fas fa-trash"> </i>
            </button>
          </td>
        </tr>
      </tbody>
    </table>
  <?php }
}

function getCategories() //para filtrar por categorias
{ ?>
  <a class="btn btn-danger" href="otrascategorias.php?id=TRUE">COMPRADO</a>
  <a class="btn btn-success" href="otrascategorias.php?id=NULL">PENDIENTE</a>
  <?php
  include('db/dbconnect.php');
  $sql = "SELECT * FROM `categories`";
  $result = mysqli_query($conn, $sql);
  while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    $nombre = $row['nombre'];
    $descripcion = $row['descripcion']; ?>
    <div class="content_categorias">
      <div class="card">
        <a class="btn" href="categoriaproducts.php?id=<?php echo $id ?>"><?php echo $nombre ?></a>
      </div>
    </div>
  <?php }
}


function getListas()
{ ?>
  <div class="accordion accordion-flush" id="accordionFlushExample">
    <?php include('db/dbconnect.php');
    $sql = "SELECT * FROM `listas`";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
      $id = $row['id'];
      $title = $row['title']; ?>
      <div class="content_categorias">
        <div class="card">
          <a class="btn" href="categoriaproducts.php?id=<?php echo $id ?>"><?php echo $title ?></a>
        </div>
      </div>
  </div>
<?php }
  }






  function getTodosLosProductos()
  { ?>
<div class="content_products_sincomprar">
  <?php include('db/dbconnect.php');

    $sql = "SELECT * FROM `products`";
    // $sql = "SELECT p.* FROM products p
    //         LEFT JOIN purchases c ON p.id = c.product_id
    //         WHERE c.id IS NULL  AND p.status = 0";
    $result = mysqli_query($conn, $sql);

    $no_of_products = $result->num_rows;
    $no_of_products_per_page = 12;

    $no_of_pages = ceil($no_of_products / $no_of_products_per_page);

    $page = 1;

    if (isset($_GET["pagination"])) {
      $page = $_GET["pagination"];
    }
    $start_limit = ((int)$page - (int)1) * $no_of_products_per_page;

    $sql = "SELECT * FROM products where id > $start_limit LIMIT  $no_of_products_per_page";
    $sel_query = mysqli_query($conn, $sql)  or die(mysqli_error($conn));

    while ($row = mysqli_fetch_assoc($sel_query)) {
      $id = $row['id'];
      $title = $row['title'];
      $img = $row['img'];
      $url = $row['url'];

  ?>
    <div class="">
      <div class="card">
        <img class="image_product" src="<?php echo $img ?>">
        <div class="card-body product_detail">
          <p class="card-text fst-italic "><?php echo substr($title, 0, 50) ?> </p>
          <div class="buttons">

            <?php
            $sqls = "SELECT * FROM `purchases` WHERE product_id = $id";
            $results = $conn->query($sqls);
            $data = $results->fetch_assoc();
            if (isset($data['product_id']) == $id) { ?>
              <a href="" class="button-position btn btn-primary-comprado">Comprado &#x2713; </a>
            <?php } else { ?>
              <a href="<?php echo $url ?>" class="btn btn-primary">Mirar producto</a>
              <!-- comprar producto -->
              <button type="button" class="botton_add" onclick="comprarItems(<?php echo $id ?>)">
                ??Compraste este producto?
              </button>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>

  <?php } ?>
  <!-- Modal -->
  <div id="editmodals">
    <div class="modal-body" id="edit_modals_user">
      <!-- Aqu?? se cargar?? el formulario de edici??n -->
    </div>
  </div>
</div>
<div class="content_pagination">
  <!-- Pagination button -->
  <nav>
    <ul class="pagination">
      <li class="page-item"></li>
      <?php
      for ($i = 1; $i <= $no_of_pages; $i++) {
        $pageName = basename($_SERVER["PHP_SELF"]);
        if ($page == $i) {
          echo "
								<li class='page-item active'>
									<a href='$pageName?page=menuManage&pagination={$i}' class='page-link'>{$i}</a>
								</li>
							";
        } else {
          echo "
								<li>
									<a href='$pageName?page=menuManage&pagination={$i}' class='page-link'>{$i}</a>
								</li>
							";
        }
      } ?>
      <li class="page-item"></li>
    </ul>
  </nav>
</div>


<?php }
  function getTodosLosProductosComprados()
  { ?>
  <div class="content_products_sincomprar">
    <?php include('db/dbconnect.php');

    $sql = "SELECT * FROM `products`";
    // $sql = "SELECT p.* FROM products p
    //         LEFT JOIN purchases c ON p.id = c.product_id
    //         WHERE c.id IS NULL  AND p.status = 0";
    $result = mysqli_query($conn, $sql);

    $no_of_products = $result->num_rows;
    $no_of_products_per_page = 12;

    $no_of_pages = ceil($no_of_products / $no_of_products_per_page);

    $page = 1;

    if (isset($_GET["pagination"])) {
      $page = $_GET["pagination"];
    }
    $start_limit = ((int)$page - (int)1) * $no_of_products_per_page;

    $sql = "SELECT * FROM products where id > $start_limit LIMIT  $no_of_products_per_page";
    $sel_query = mysqli_query($conn, $sql)  or die(mysqli_error($conn));

    while ($row = mysqli_fetch_assoc($sel_query)) {
      $id = $row['id'];
      $title = $row['title'];
      $img = $row['img'];
      $url = $row['url'];

    ?>
      <div class="">
        <div class="card">
          <img class="image_product" src="<?php echo $img ?>">
          <div class="card-body product_detail">
            <p class="card-text fst-italic "><?php echo substr($title, 0, 50) ?> </p>
            <div class="buttons">

              <?php
              $sqls = "SELECT * FROM `purchases` WHERE product_id = $id";
              $results = $conn->query($sqls);
              $data = $results->fetch_assoc();
              if (isset($data['product_id']) == $id) { ?>
                <a href="" class="button-position btn btn-primary-comprado">Comprado &#x2713; </a>
              <?php } else { ?>
                <a href="<?php echo $url ?>" class="btn btn-primary">Mirar producto</a>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
  <div class="content_pagination">
    <!-- Pagination button -->
    <nav>
      <ul class="pagination">
        <li class="page-item"></li>
        <?php
        for ($i = 1; $i <= $no_of_pages; $i++) {
          $pageName = basename($_SERVER["PHP_SELF"]);
          if ($page == $i) {
            echo "
								<li class='page-item active'>
									<a href='$pageName?page=menuManage&pagination={$i}' class='page-link'>{$i}</a>
								</li>
							";
          } else {
            echo "
								<li>
									<a href='$pageName?page=menuManage&pagination={$i}' class='page-link'>{$i}</a>
								</li>
							";
          }
        } ?>
        <li class="page-item"></li>
      </ul>
    </nav>
  </div>


<?php }
  function todoslosproductoscategoria()
  { ?>
  <div class="content_products_sincomprar">
    <?php include('db/dbconnect.php');
    if (isset($_GET['id'])) {
      $id_get = $_GET["id"];
      $sql = "SELECT * FROM `products` WHERE categoria_id = $id_get";
      $result = $conn->query($sql);
      while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $title = $row['title'];
        $img = $row['img'];
        $url = $row['url'];
    ?>
        <div class="">
          <div class="card">
            <img class="image_product" src="<?php echo $img ?>">
            <div class="card-body product_detail">
              <p class="card-text fst-italic "><?php echo substr($title, 0, 50) ?> </p>
              <div class="buttons">

                <?php
                $sqls = "SELECT * FROM `purchases` WHERE product_id = $id";
                $results = $conn->query($sqls);
                $data = $results->fetch_assoc();
                if (isset($data['product_id']) == $id) { ?>
                  <a href="" class="button-position btn btn-primary-comprado">Comprado &#x2713; </a>
                <?php } else { ?>
                  <a href="<?php echo $url ?>" class="btn btn-primary">Mirar producto</a>
                  <!-- comprar producto -->
                  <button type="button" class="botton_add" onclick="comprarItems(<?php echo $id ?>)">
                    ??Compraste este producto?
                  </button>
                <?php } ?>
              </div>
            </div>
          </div>
          <!-- Modal -->
          <div id="editmodals">
            <div class="modal-body" id="edit_modals_user">
              <!-- Aqu?? se cargar?? el formulario de edici??n -->
            </div>
          </div>
        </div>
  <?php
      }
    }
  }
  ?>


  <?php
  function otrasCategorias()
  {  ?>
    <div class="content_products_sincomprar">
      <?php
      include('db/dbconnect.php');
      if (isset($_GET['id'])) {
        $id_get = $_GET["id"];
        $sql = "SELECT p.* FROM products p
          LEFT JOIN purchases c ON p.id = c.product_id
          WHERE c.id IS $id_get  AND p.status = 1 ";
        $result = $conn->query($sql);
        while ($row = mysqli_fetch_assoc($result)) {
          $id = $row['id'];
          $title = $row['title'];
          $img = $row['img'];
          $url = $row['url'];
      ?>
          <div class="">
            <div class="card">
              <img class="image_product" src="<?php echo $img ?>">
              <div class="card-body product_detail">
                <p class="card-text fst-italic "><?php echo substr($title, 0, 50) ?> </p>
                <div class="buttons">

                  <?php
                  $sqls = "SELECT * FROM `purchases` WHERE product_id = $id";
                  $results = $conn->query($sqls);
                  $data = $results->fetch_assoc();
                  if (isset($data['product_id']) == $id) { ?>
                    <a href="" class="button-position btn btn-primary-comprado">Comprado &#x2713; </a>
                  <?php } else { ?>
                    <a href="<?php echo $url ?>" class="btn btn-primary">Mirar producto</a>
                    <!-- comprar producto -->
                    <button type="button" class="botton_add" onclick="comprarItems(<?php echo $id ?>)">
                      ??Compraste este producto?
                    </button>
                  <?php } ?>
                </div>
              </div>
            </div>
            <!-- Modal -->
            <div id="editmodals">
              <div class="modal-body" id="edit_modals_user">
                <!-- Aqu?? se cargar?? el formulario de edici??n -->
              </div>
            </div>
          </div>

    <?php
        }
      }
    }
    ?>


    <?php
    function getCategoriesadmin() //traer para admin
    {
      include('db/dbconnect.php');
      $sql = "SELECT * FROM `categories`";
      $result = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $nombre = $row['nombre']; ?>
        <table class="table">
          <tbody>
            <tr class="content_data_get_list">
              <th scope="row"><?php echo $row['id'] ?></th>
              <td>
                <p class="card-text fst-italic ">Categor??a: <strong> <?php echo $nombre ?></strong></p>
              </td>
              <td class="d-flex">
                <a class="pe-3" href="editcategorieproduct.php?id=<?php echo $id ?>"><i class="fas fa-edit"></i></a>
                <button type="button" class="btn btn-danger" onclick="confirmDeletecategoria(<?php echo $id  ?>)">
                  <i class="fas fa-trash"> </i>
                </button>
              </td>
            </tr>
          </tbody>
        </table>
    <?php }
    }

    ?>

    <?php
    function navbar()
    { ?>

      <nav class="navbar navbar-expand-lg ">
        <div class="accordion accordion-flush" id="accordionFlushExample">
          <div class="accordion-item">
            <div class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
              <h2 class="accordion-header" id="flush-headingOne">
                Listas
              </h2>
              <i class="fa-solid fa-bars"></i>
            </div>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
              <?php
              include('db/dbconnect.php');
              $sql = "SELECT * FROM `listas`";
              $result = mysqli_query($conn, $sql);
              while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $title = $row['title'];
              ?>
                <div class="subtitlemenu"><?php echo $title ?> :</div>
                <div class="accordion-body acordion_data">
                  <?php
                  $sql = "SELECT * FROM `product_list` WHERE list_id =  $id";
                  $sel_query = mysqli_query($conn, $sql)  or die(mysqli_error($conn));
                  while ($row = mysqli_fetch_assoc($sel_query)) {
                    $id = $row['id'];
                    $estado = $row['estado'];
                    $descripcion = $row['descripcion']; ?>
                    <div>
                      <div class="d-flex gap-3 ">
                        <?php
                        echo '- ', $descripcion;
                        if ($estado == 0) { ?>
                          <div>&#x2713;</div>
                        <?php } ?>
                      </div>
                    </div>
                  <?php } ?>
                </div>
              <?php } ?>
            </div>
          </div>

        </div>

        <div class="day">
          <div id="day_data">
            40 dias
          </div>
        </div>
      </nav>
    <?php }

    ?>