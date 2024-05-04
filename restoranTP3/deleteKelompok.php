<?php
include "db_conn.php";
$id = $_GET["id"];
$sql = "DELETE FROM `kelompok` WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: kelompok.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}
