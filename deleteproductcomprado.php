<?php 
include('db/dbconnect.php');
if (isset($_POST['id'])){
  $id = $_POST["id"];
  $sql = "DELETE FROM purchases WHERE id='$id'";
  $result = $conn->query($sql);
}
?>