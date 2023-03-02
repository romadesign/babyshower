<?php include './db/dbconnect.php'; ?>
<?php include_once('template/header.php') ?>
<?php require('fetch/getdata.php'); ?>
<div class="container my-3 pt-5 mb-5">
    <div class="col-lg-2 text-center bg-lightmy-3" style="margin:auto;border-top: 2px groove black;border-bottom: 2px groove black;">
        <h2 class="text-center">categorias para las listas</h2>
    </div>
    <br>
    <div class="row">
        <div>
          <button class="btn_categiria_Editar"> <a href="admlist.php"> Editar listas</a></button>
        </div>
        <?php categorias_lista() ?>
    </div>
</div>

<?php include_once('template/footer.php') ?>