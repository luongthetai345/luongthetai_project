<?php
    session_start();
?>
<?php
    if($_SESSION['cart']){
        // echo "<pre>";
        // print_r($_SESSION['cart']);
        // echo "</pre>";
    }
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<h1>Cart: </h1>
<table  class="table table-striped">
    <tr>
        <th>Id</th>
        <th>Tên sản phẩm</th>
        <th>Hình ảnh</th>
        <th>Số lượng</th>
        <th>Giá</th>
        <th>Thành tiền</th>
        <th>Quản lý</th>
    </tr>
    <?php
        if(isset($_SESSION['cart'])){
            $i = 0;
            $tongtien = 0;
            foreach($_SESSION['cart'] as $cart_item){
                $thanhtien = $cart_item['gia'] * $cart_item['soluong'];
                $tongtien = $tongtien + $thanhtien;
                $i++;
    ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $cart_item['tensanpham']; ?></td>
        <td><img src="../../admin/modules/quanlysp/imgs/<?php echo $cart_item['anh']; ?>" height="200px" width="250px"></td>
        <td>
            <a href="themgiohang.php?tru=<?php echo $cart_item['id']; ?>"><i class="fa-solid fa-minus"></i></a>
            <?php echo $cart_item['soluong']; ?>
            <a href="themgiohang.php?cong=<?php echo $cart_item['id']; ?>"><i class="fa-solid fa-plus"></i></a>
        </td>
        <td><?php echo number_format($cart_item['gia'], 0, ',', '.'). ' VNĐ'; ?></td>
        <td><?php echo number_format($thanhtien, 0, ',', '.'). ' VNĐ'; ?></td>
        <td><a href="themgiohang.php?xoa=<?php echo $cart_item['id']; ?>">Xóa</a></td>
    </tr>
    <?php
            }
    ?>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>
            <p><B>Tông tiền: <?php echo number_format($tongtien, 0, ',', '.'). ' VNĐ'; ?></B></p>
            <p><a href="themgiohang.php?xoatatca=1">Xóa tất cả</a></p>
        </td>
        <td></td>
        <td></td>
    </tr>
    <?php
        }else{
    ?>
    <tr>
        <td><p>Hiện tại giỏ hàng trống</p></td>
    </tr>
    <?php
        }
    ?>
    
</table>
<a href="../../index.php?quanly=index">Quay về trang chủ</a>
     

