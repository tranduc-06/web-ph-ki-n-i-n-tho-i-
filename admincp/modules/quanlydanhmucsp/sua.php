<?php
    $sql_sua = "SELECT * FROM danhmuc where id_danhmuc = '".$_GET['iddanhmuc']."' limit 1";
    $row_sua = mysqli_query($connect,$sql_sua);
?>
<p>Danh mục sản phẩm</p>
<form action="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc']?>" method="post">

<?php
    while($dong = mysqli_fetch_array($row_sua)){
?>
<table border="1" width=50% style="border-collapse:collapse;"> 
<tr>
<th>Điền danh mục sản phẩm</th>
</tr>
<tr>
<td>Tên danh mục</td>
<td><input type="text" value = "<?php echo $dong['tendanhmuc']?>" name="tendanhmuc"></td>
</tr>
<tr>
<td>Thứ tự</td>
<td><input type="text" value = "<?php echo $dong['thutu']?>" name="thutu"></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="suadanhmuc" value="Sửa danh mục sản phẩm"></td>
</tr>
</table>

<?php
    }
?>
</form>