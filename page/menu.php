<?php
    $sql_lietke = "SELECT * FROM danhmuc order by id_danhmuc";
    $row_lietke = mysqli_query($connect,$sql_lietke);
?>

<div class="menu">
                <ul class="listmenu">
                
                    <li> <a href="index.php"> Trang chủ</a></li>                  
                    <?php while($row=mysqli_fetch_array($row_lietke)){ ?>
                        <li> <a href="index.php?quanly=danhmucsanpham&id=<?php echo $row['id_danhmuc']?>"><?php echo $row['tendanhmuc']?></a></
                    <?php
                        }
                    ?>
                    <li> <a href="index.php?quanly=giohang"> Giỏ hàng</a></li>
                    <li> <a href="index.php?quanly=dangky"> Đăng kí</a></li>            
                    <li> <a href="index.php?quanly=tintuc"> Tin tức</a></li>
                    <li> <a href="index.php?quanly=lienhe"> Liên hệ</a></li>
                   
                </ul>
            </div>