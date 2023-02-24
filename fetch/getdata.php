<?php
function getProducts()
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
            <p class="card-text fst-italic ">Title: <?php echo substr($title, 0, 100) ?>.. </p>
          </td>
          <td>
          <a href="editarproduct.php?id=<?php echo $row['id'] ?>"><i class="fas fa-edit"></i></a>
        </td>
        </tr>
      </tbody>
    </table>
  <?php }
}

function getCategories()
{
  include('db/dbconnect.php');
  $sql = "SELECT * FROM `categories`";
  $result = mysqli_query($conn, $sql);
  while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    $nombre = $row['nombre'];
    $descripcion = $row['descripcion']; ?>
    <div class="col-sm-3 col-md-3">
      <div class="card">
        <a href="" class="btn btn-primary"><?php echo $nombre ?></a>
      </div>
    </div>
  <?php }
}


function getProductsSinComprar()
{
  include('db/dbconnect.php');
  $sql = "SELECT p.* FROM products p
          LEFT JOIN purchases c ON p.id = c.product_id
          WHERE c.id IS NULL  AND p.status = 0";
  $result = mysqli_query($conn, $sql);
  while ($row = mysqli_fetch_assoc($result)) {
    $title = $row['title'];
    $img = $row['img'];
    $url = $row['url']; ?>
    <div class="col-sm-3 col-md-3">
      <div class="card">
        <img class="image_product" src="<?php echo $img ?>">
        <div class="card-body product_detail">
          <p class="card-text fst-italic "><?php echo substr($title, 0, 60) ?>.. </p>
          <a href="<?php echo $url ?>" class="btn btn-primary">Mirar producto</a>
          <a href="<?php echo $url ?>" class="btn btn-primary">comprado por</a>
        </div>
      </div>
    </div>
<?php }
}
?>