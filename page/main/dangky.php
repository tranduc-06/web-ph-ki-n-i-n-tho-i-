<?php
    if(isset($_POST['dangky']))
    {
        $tenkhachhang = $_POST['hovaten'];
        $email = $_POST['email'];
        $sodienthoai = $_POST['sodienthoai'];
        $diachi = $_POST['diachi'];
        $matkhau = md5($_POST['matkhau']);
     

        $sql_dangky = "INSERT INTO dangki(tenkhachhang,diachi,email,dienthoai,matkhau) VALUE ('".$tenkhachhang."','".$email."','".$sodienthoai."','".$diachi."','".$matkhau."')";
        $query_dangky = mysqli_query($connect,$sql_dangky);

        if($query_dangky)
        {
            echo 'bạn đã đăng kí thành công';
        }

        else echo 'vui lòng nhập đủ thông tin';
    }

    else echo 'sai';
 

?>


<p>Đăng ký thành viên</p>

<form action="" method="POST">
    <label>Họ và tên</label><br>
    <input type="text" name="hovaten" autofocus><br>

    <label>Email</label><br>
    <input type="email" name="email"><br>

    <label>Số điện thoại</label><br>
    <input type="text" name="sodienthoai"><br>

    <label>Địa chỉ</label><br>
    <input type="text" name="diachi"><br>

    <label>Mật khẩu</label><br>
    <input type="password" name="matkhau"><br><br>
    <input type="submit" name="dangky" value="Đăng ký">
</form>

