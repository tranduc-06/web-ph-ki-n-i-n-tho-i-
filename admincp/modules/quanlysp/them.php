<p>Thêm sản phẩm</p>
<form action="modules/quanlysp/xuly.php" method="post" enctype="multipart/form-data">
<table border="1" width=100% style="border-collapse:collapse;"> 
<tr>
    <th>Điền tênsản phẩm</th>
</tr>
<tr>
    <td>Tên sản phẩm</td>
    <td><input type="text" name="tensanpham"></td>
</tr>
<tr>
    <td>Mã sản phẩm</td>
    <td><input type="text" name="masanpham"></td>
</tr>
<tr>
    <td>Giá</td>
    <td><input type="text" name="gia"></td>
</tr>
<tr>
    <td>Số lượng</td>
    <td><input type="text" name="soluong"></td>
</tr>

<tr>
    <td>Hình ảnh</td>
    <td><input type="file" name="hinhanh" value = ''></td>
</tr>

<tr>
    <td>Tóm tắt</td>
    <td><textarea rows="10" name="tomtat" style='resizw:none'></textarea></td>
</tr>
<tr>
    <td>Nội dung</td>
    <td><textarea rows="10" name="noidung" style='resizw:none'></textarea></td>
</tr>

<tr>
    <td>Danh mục sản phẩm</td>
    <td>

    <?php 
        $sql = "SELECT * FROM danhmuc order by id_danhmuc";
        $query = mysqli_query($connect,$sql);
    ?>

        <select name="danhmuc">
        <?php 
            while ($row = mysqli_fetch_array($query)) {
        ?>

            <option value = "<?php echo $row['id_danhmuc']?>"><?php echo $row['tendanhmuc']?></option>
            <?php
            }
            ?>
        </select>
    </td>
</tr>

<tr>
    <td>Tình trạng</td>
    <td>
        <select name="tinhtrang">
            <option value="1">Kích hoạt</option>
            <option value="0">Ẩn</option>
        </select>
    </td>
</tr>
    <td colspan="2"><input type="submit" name="themsanpham" value="Thêm sản phẩm"></td>
</tr>
</table>
</form>