<?php

    $sql_pro = "SELECT * FROM danhmuc,sanpham where sanpham.`id_danhmuc` = danhmuc.`id_danhmuc` AND sanpham.`id_danhmuc` = '".$_GET['id']."' order by sanpham.`id_sanpham`";
    $query = mysqli_query($connect,$sql_pro);

?>


<ul class="flatproduct">
        <h1>Danh mục sản phẩm</h1>

                <?php while ($row=mysqli_fetch_array($query)) { ?>
                        <li>
                            <img src="images/tainghe.png" alt="tainghe001">
                            <a href="#">
                            <p class="name_product">Tên sản phẩm: Tai nghe Sony 001</p>
                            <p class="price_product">Giá: 3500000</p>
                            </a>
                        </li>
                    <?php
                }
                ?>
                    </ul>
                </div>