<?php
if(isset($_GET['action']) == 'dangxuat')
{
    unset($_SESSION['dangnhap']);
    header('Location:./login.php');
}
?>

<ul class="admincp_list">
    <li> <a href="index.php?action=quanlydanhmucsanpham&query=them">Quản lý danh mục sản phẩm</a></li>
    <li> <a href="index.php?action=quanlysanpham&query=them">Quản lý sản phẩm</a></li>
    <li> <a href="index.php?action=quanlydanhmucbaiviet&query=them">Quản lý danh mục bài viết</a></li>
    <li> <a href="index.php?action=quanlybaiviet&query=them">Quản lý bài viết</a></li>
    <li> <a href="index.php?action=dangxuat">Đăng xuất: <?php if(isset($_SESSION['dangnhap'])){
       var_dump(123); echo $_SESSION['dangnhap'];
        }?></a></li>
</ul>
