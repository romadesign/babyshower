<?php 
include('db/dbconnect.php');
if (isset($_POST['id'])){
  $id = $_POST["id"];
  $sql = "DELETE FROM products WHERE id='$id'";
  $result = $conn->query($sql);
}
?>