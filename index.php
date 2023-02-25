<?php include './db/dbconnect.php'; ?>
<?php include_once('template/header.php') ?>
<?php require('fetch/getdata.php'); ?>
<div class="container my-3 pt-5 mb-5">
    <div class="col-lg-2 text-center bg-lightmy-3">
        <h2 class="text-center">Procutos</h2>
    </div>
        <div class="content_data">
        <div class="content_data_categorias">
            <?php getCategories() ?>
        </div>
        <div class="content_products_sincomprar">
            <?php getProductsSinComprar() ?>
        </div>
    </div>
</div>

<?php include_once('template/footer.php') ?>    