<?php
    $sql_lietke = "SELECT * FROM sanpham,danhmuc where sanpham.id_danhmuc=danhmuc.id_danhmuc order by sanpham.id_sanpham ";
    $row_lietke = mysqli_query($connect,$sql_lietke);
?>
<p>Liệt kê danh mục sản phẩm</p>
<form action="modules/quanlysp/xuly.php" method="post">
<table border="1" width=100% style="border-collapse:collapse;"> 
<tr>
<th>id</th>
<th>Tên sản phẩm</th>
<th>Mã sản phẩm</th>
<th>Gía</th>
<th>Số lượng</th>
<th>Tóm tắt</th>
<th>Nội dung</th>
<th>Hình ảnh</th>
<th>Danh mục</th>
<th>Tình trạng</th>
</tr>

    <?php
        $i=0;
        while($row=mysqli_fetch_array($row_lietke)){
            $i++;
    ?>
    <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $row['tensp']; ?></td>
    <td><?php echo $row['masp']; ?></td>
    <td><?php echo $row['gia']; ?></td>
    <td><?php echo $row['soluong']; ?></td>
    <td><?php echo $row['tomtat']; ?></td>
    <td><?php echo $row['noidung']; ?></td>
    <td><img width=20% src="modules/quanlysp/uploads/<?php echo $row['hinhanh'];?>"</td>
    <td><?php echo $row['tendanhmuc'] ?></td>
    <td><?php if($row['tinhtrang'] ==1)
        {
            echo 'kích hoạt';
        }
        else echo 'ẩn';
    ?></td>
    
    <td>
            <a href="?action=quanlysanpham&query=sua&idsanpham=<?php echo($row['id_sanpham'])?>">Sửa</a>|<a href="modules/quanlysp/xuly.php?idsanpham=<?php echo($row['id_sanpham'])?>">Xóa</a>
    
    </td>
    </tr>
    <?php
        }
    ?>
</table>
</form>