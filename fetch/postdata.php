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
        exit();
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
        exit();
    }
}
