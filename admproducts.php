<?php include './db/dbconnect.php'; ?>
<?php include_once('template/header.php') ?>
<?php require('fetch/getdata.php'); ?>
<div class="container my-3 pt-5 mb-5">
    <div class="col-lg-2 text-center bg-lightmy-3" style="margin:auto;border-top: 2px groove black;border-bottom: 2px groove black;">
        <h2 class="text-center">Todos los Procutos</h2>
    </div>
    <br>
    <div class="row">
        <div class="d-flex">
            <button class="btn_categiria_Editar w-100"> <a href="categoriesbyproducts.php"> Edit categorías</a></button>
            <button class="btn_productos_comprados w-100"> <a href="editproductscomprados.php"> Edit productos comprados</a></button>
        </div>
        <?php getProductsadmin() ?>
    </div>
</div>

<?php include_once('template/footer.php') ?>