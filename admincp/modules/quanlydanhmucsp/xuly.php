<?php
include('../../config/config.php');
$tendanhmuc=$_POST['tendanhmuc'];
$thutu = $_POST['thutu'];

if(isset($_POST['themdanhmuc']))
{
    $sql_them = "INSERT INTO danhmuc(tendanhmuc,thutu) value ('".$tendanhmuc."','".$thutu."')";
    mysqli_query($connect,$sql_them);
    header('Location:../../index.php?action=quanlydanhmucsanpham&query=them');
}

elseif(isset($_POST['suadanhmuc']))
{
    $sql_update = "UPDATE danhmuc SET tendanhmuc='".$tendanhmuc."',thutu='".$thutu."' where id_danhmuc='".$_GET['iddanhmuc']."'";
    mysqli_query($connect,$sql_update);
    header('Location:../../index.php?action=quanlydanhmucsanpham&query=them');
}

else
{
    $id = $_GET['iddanhmuc'];
    $sql_xoa = "DELETE FROM danhmuc where id_danhmuc = '".$id."'";
    mysqli_query($connect,$sql_xoa);
    header('Location:../../index.php?action=quanlydanhmucsanpham&query=them');
}
?>