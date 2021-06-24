<?php
    $sql_sua = "SELECT * FROM sanpham where id_sanpham = '".$_GET['idsanpham']."' limit 1";
    $row_sua = mysqli_query($connect,$sql_sua);
?>

<p>Sửa sản phẩm</p>
<?php
    while($dong=mysqli_fetch_array($row_sua)){
?>
<form action="modules/quanlysp/xuly.php?idsanpham=<?php echo $_GET['idsanpham']?>" method="post" enctype="multipart/form-data">
<table border="1" width=100% style="border-collapse:collapse;"> 
<tr>
    <td>Tên sản phẩm</td>
    <td><input type="text" value="<?php echo $dong['tensp'];?>" name="tensanpham"></td>
</tr>
<tr>
    <td>Mã sản phẩm</td>
    <td><input type="text" value="<?php echo $dong['masp'];?>" name="masanpham"></td>
</tr>
<tr>
    <td>Giá</td>
    <td><input type="text" value="<?php echo $dong['gia']; ?>" name="gia"></td>
</tr>
<tr>
    <td>Số lượng</td>
    <td><input type="text" value="<?php echo $dong['soluong'];?>" name="soluong"></td>
</tr>

<tr>
    <td>Hình ảnh</td>
    <td><input type="file" value="<?php echo $dong['hinhanh'];?>" name="hinhanh"></td>
</tr>

<tr>
    <td>Tóm tắt</td>
    <td><textarea rows="10" name="tomtat" style='resizw:none'><?php echo $dong['tomtat'];?></textarea></td>
</tr>
<tr>
    <td>Nội dung</td>
    <td><textarea rows="10" name="noidung" style='resizw:none'><?php echo $dong['noidung'];?></textarea></td>
</tr>
<tr>
    <td>Danh mục sản phẩm</td>
    <td>

        <select name="danhmuc">
        <?php 
            $sql = "SELECT * FROM danhmuc order by id_danhmuc";
            $query = mysqli_query($connect,$sql);
            while ($sql1 = mysqli_fetch_array($query)) {
                if($sql1['id_danhmuc'] == $dong['id_danhmuc']){
        ?>
            <option selected value = "<?php echo $sql1['id_danhmuc']?>"><?php echo $sql1['tendanhmuc']?></option>
            <?php
            }else{
            ?>
            <option value = "<?php echo $sql1['id_danhmuc']?>"><?php echo $sql1['tendanhmuc']?></option>
            <?php
            }
            }
            ?>
        </select>
    </td>
</tr>

<tr>
    <td>Tình trạng</td>
    <td>
        <select value="<?php echo $dong['tinhtrang'];?>" name="tinhtrang">
            <option value="1">Kích hoạt</option>
            <option value="0">Ẩn</option>
        </select>
    </td>
</tr>
    <td colspan="2"><input type="submit" name="suasanpham" value="Sửa sản phẩm"></td>
</tr>
</table>
<?php
}
?>
</form>