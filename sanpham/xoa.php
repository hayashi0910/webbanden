<?php
$masp = $_GET['id'];
$sql = "DELETE FROM sanpham WHERE masp = $masp";
$query = mysqli_query($connect, $sql);
header('location: index.php?page=danhsach');
?>
<div></div>