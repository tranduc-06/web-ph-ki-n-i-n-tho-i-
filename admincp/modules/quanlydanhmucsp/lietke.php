<?php
    $sql_lietke = "SELECT * FROM danhmuc order by thutu";
    $row_lietke = mysqli_query($connect,$sql_lietke);
?>
<p>Liệt kê danh mục sản phẩm</p>
<form action="modules/quanlydanhmucsp/xuly.php" method="post">
<table border="1" width=100% style="border-collapse:collapse;"> 
<tr>
<th>id</th>
<th>Danhmucsanpham</th>
<th>Thứ tự</th>
</tr>

    <?php
        $i=0;
        while($row=mysqli_fetch_array($row_lietke)){
            $i++;
    ?>
    <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $row['tendanhmuc']; ?></td>
    <td><?php echo $row['thutu']; ?></td>
    <td>
            <a href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo($row['id_danhmuc'])?>">Sửa</a>|<a href="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo($row['id_danhmuc'])?>">Xóa</a>
    
    </td>
    </tr>
    <?php
        }
    ?>
</table>
</form>