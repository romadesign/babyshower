<?php 

function createProduct()
{
    include('db/dbconnect.php');
    if (isset($_POST['createItem'])) {
        $title = $_POST["title"];
        $url = $_POST["url"];
        $img = $_POST["img"];
        $status = $_POST["status"];
        $user_id = 1;
        $categoria_id = $_POST["categoria_id"];
     
        $query = "INSERT INTO products (title, url, img, user_id, categoria_id, status) 
                  VALUES ('$title', '$url','$img', '$user_id', '$categoria_id', $status)";
        $resultado = mysqli_query($conn, $query);
          
        header("Location: ./createproduct.php");
    }
}


function createCategorie()
{
    include('db/dbconnect.php');
    if (isset($_POST['createCategorie'])) {
        $nombre = $_POST["nombre"];
        $descripcion = $_POST["descripcion"];

        $query = "INSERT INTO categories (nombre, descripcion) 
                  VALUES ('$nombre', '$descripcion')";
        $resultado = mysqli_query($conn, $query);
          
        header("Location: ./createproduct.php");
    }
}



function createList()
{
    include('db/dbconnect.php');
    if (isset($_POST['createList'])) {
        $title = $_POST["title"];

        $query = "INSERT INTO listas (title) 
                  VALUES ('$title')";
        $resultado = mysqli_query($conn, $query);
          
        header("Location: ./createproduct.php");
    }
}



function createListproduct()
{
    include('db/dbconnect.php');
    if (isset($_POST['createItemList'])) {
        $descripcion = $_POST["descripcion"];
        $list_id = $_POST["list_id"];
        $estado = $_POST["estado"];
        $query = "INSERT INTO product_list (descripcion, list_id, estado) 
                  VALUES ('$descripcion', '$list_id', '$estado')";
        $resultado = mysqli_query($conn, $query);
          
        header("Refresh:0"); 
        echo "<script>location.reload();</script>";
    }
}