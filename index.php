<?php include './db/dbconnect.php'; ?>
<?php include_once('template/header.php') ?>
<?php require('fetch/getdata.php'); ?>
<div class="container my-3 pt-5 mb-5">
    <div class="content_name col-lg-2 text-center bg-lightmy-3">
        <h2 class="text-center">CHLOE / ELIOT</h2>
        <span>Fecha de llegada:<strong> 02 Junio 2023</strong></span>
        <img src="./img/fondo.jpg" />
        <h3>Faltan <span id="dias"></span> días para mi <strong>Baby shower</strong>!</h3>
        <div class="alert alert-light alert-dismissible fade show" role="alert">
            <strong>Muchas gracias por visitar nuestra Lista de Nacimiento. </strong> Estamos muy emocionados de formar
            nuestra familia y
            de empezar con los preparativos para su llegada. La revelación del sexo será una sorpresa, por ello hemos
            optado por elegir colores neutros y unisex. Para la habitación de nuestro bebé elegimos el color topo
            (taupé), un tono inspirado en la tierra para crear un ambiente acogedor, natural y apacible, con
            decoraciones y complementos en tonos neutros: blanco roto, gris claro, tierra, marrón y beige; y con cosas
            compactas o adaptables a varios usos que nos resulta idóneo para nuestro hogar. Para nuestro bebé optamos
            por usar en lo posible elementos ecológicos/ biodegradables/ reutilizables, productos y ropa sin
            ingredientes/compuestos de origen animal. Te agradecemos por formar parte de esta celebración, por el
            tiempo, por el amor y el cariño brindado. No podríamos ser más felices por la pronta llegada de nuestro
            primer hijo/a al mundo. ¡Gracias por ser parte de nuestra felicidad!. Danitza & Roman
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
    <div class="content_data">
        <strong>Categorías  </strong>
        <div class="content_data_categorias">
            <?php getCategories() ?>
        </div>
        <div >
            <?php getTodosLosProductos() ?>
        </div>
    </div>
</div>

<?php include_once('template/footer.php') ?>