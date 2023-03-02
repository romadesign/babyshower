<?php include './db/dbconnect.php'; ?>
<?php include_once('template/headeradmin.php') ?>
<?php require('fetch/editlist.php'); ?>
<div class="container my-3 pt-5 mb-5">
    <div class="col-lg-2 text-center bg-lightmy-3" style="margin:auto;border-top: 2px groove black;border-bottom: 2px groove black;">
        <h2 class="text-center">Listas</h2>
    </div>
    <br>
   editar
    <div class="row">
        <?php updateProductlist() ?>
    </div>
</div>

<?php include_once('template/footer.php') ?>