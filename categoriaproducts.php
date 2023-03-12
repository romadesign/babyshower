<?php include './db/dbconnect.php'; session_start();?>
<?php include_once('template/header.php') ?>
<?php require('fetch/getdata.php'); ?>
<div class="container my-3 pt-5 mb-5">
    <div class="content_name col-lg-2 text-center bg-lightmy-3">
        <h2 class="text-center">CHLOE / ELIOT</h2>
        <span>Fecha de llegada:<strong> 02 Junio 2023</strong></span>
        <img src="./img/fondo.jpg" />
        <h3>Faltan <span id="dias"></span> días para mi <strong>Baby shower</strong>!</h3>
    </div>
    <div class="content_data">
        <strong>Categorías </strong>
        <div class="content_data_categorias">
            <?php getCategories() ?>
        </div>
        <div >
        <?php 
            
            if(isset($_SESSION['mensaje'])) { ?>
                <div class="alert alert-success  alert-dismissible fade show" role="alert">
                <strong class="text-center" style="font-size: 0.8rem;"><?php echo $_SESSION['mensaje']; ?></strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
               // Se elimina el mensaje de la sesión para evitar que se muestre de nuevo
               unset($_SESSION['mensaje']);
            }
            ?>
            <?php todoslosproductoscategoria() ?>
        </div>
    </div>
</div>

<?php include_once('template/footer.php') ?>