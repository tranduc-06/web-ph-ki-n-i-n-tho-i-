<?php
include('../../config/config.php');


$tensanpham=$_POST['tensanpham'];
$masanpham = $_POST['masanpham'];
$gia= $_POST['gia'];
$soluong= $_POST['soluong'];
$tomtat = $_POST['tomtat'];
$noidung = $_POST['noidung'];
$tinhtrang = $_POST['tinhtrang'];
$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh = $hinhanh;
$danhmuc = $_POST['danhmuc'];


if(isset($_POST['themsanpham']) && isset($_FILES['hinhanh']))
{
    
    move_uploaded_file($_FILES['hinhanh']['tmp_name'], 'uploads/' . $_FILES['hinhanh']['name']);
    $sql_them = "INSERT INTO sanpham(tensp,masp,gia,soluong,tomtat,noidung,tinhtrang,hinhanh,id_danhmuc)
    value ('".$tensanpham."','".$masanpham."','".$gia."','".$soluong."','".$tomtat."','".$noidung."','".$tinhtrang."','".$hinhanh."','".$danhmuc."')";
    mysqli_query($connect,$sql_them);
    header('Location:../../index.php?action=quanlysanpham&query=them');
}

elseif(isset($_POST['suasanpham']))
{
    if($hinhanh != '')
    {
    move_uploaded_file($_FILES['hinhanh']['tmp_name'], 'uploads/' . $_FILES['hinhanh']['name']);

    
    $edit = mysqli_query($connect,"UPDATE sanpham SET tensp='".$tensanpham."',masp='".$masanpham."',gia='".$gia."',soluong='".$soluong."',hinhanh='".$hinhanh."',tomtat='".$tomtat."',noidung='".$noidung."',id_danhmuc='".$danhmuc."',tinhtrang='".$tinhtrang."' where id_sanpham='".$_GET['idsanpham']."'");
    $id = $_GET['idsanpham'];
    $sql = "SELECT * FROM sanpham where id_sanpham = '".$id."' limit 1";

    $query = mysqli_query($connect,$sql);
    while($row = mysqli_fetch_array($query))
    {
        unlink('uploads/'.$row['hinhanh']);
    }
    header('Location:../../index.php?action=quanlysanpham&query=them');
    }

    else{
    
        $edit = mysqli_query($connect,"UPDATE sanpham SET tensp='".$tensanpham."',masp='".$masanpham."',gia='".$gia."',soluong='".$soluong."',tomtat='".$tomtat."',noidung='".$noidung."',id_danhmuc='".$danhmuc."',tinhtrang='".$tinhtrang."' where id_sanpham='".$_GET['idsanpham']."'");
	
        header('Location:../../index.php?action=quanlysanpham&query=them');
    }
}

else
{
    var_dump(123);
    $id = $_GET['idsanpham'];
    $sql = "SELECT * FROM sanpham where id_sanpham = '".$id."' limit 1";
    $query = mysqli_query($connect,$sql);
    while($row = mysqli_fetch_array($query))
    {
        unlink('uploads/'.$row['hinhanh']);
    }
    $sql_xoa = "DELETE FROM sanpham where id_sanpham = '".$id."'";
    mysqli_query($connect,$sql_xoa);
    header('Location:../../index.php?action=quanlysanpham&query=them');
}
?>