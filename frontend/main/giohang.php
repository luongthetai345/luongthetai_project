
<?php
    
    if(isset($_GET['cong'])){
        // session_destroy();
        $id = $_GET['cong'];
        foreach($_SESSION['cart'] as $cart_item){
            if($cart_item['id'] != $id){
                $product[]= array('tensanpham'=>$cart_item['name_product'], 'id'=>$cart_item['id_product'], 
                'soluong'=>$cart_item['soluong'], 'gia'=>$cart_item['gia'], 'anh'=>$cart_item['anh']);
                $_SESSION['cart'] = $product;
            }else{
                $tangsoluong = $cart_item['soluong'] + 1;
                if($cart_item['soluong'] < 10){
                    $product[]= array('tensanpham'=>$cart_item['name_product'], 'id'=>$cart_item['id_product'], 
                    'soluong'=>$tangsoluong, 'gia'=>$cart_item['gia'], 'anh'=>$cart_item['anh']);
                }else{
                    $product[]= array('tensanpham'=>$cart_item['name_product'], 'id'=>$cart_item['id_product'], 
                    'soluong'=>$cart_item['soluong'], 'gia'=>$cart_item['gia'], 'anh'=>$cart_item['anh']);
                }
                $_SESSION['cart'] = $product;
            }
        }
    }
    if(isset($_GET['tru'])){
        $id = $_GET['tru'];
        foreach($_SESSION['cart'] as $cart_item){
            if($cart_item['id'] != $id){
                $product[]= array('tensanpham'=>$cart_item['name_product'], 'id'=>$cart_item['id_product'], 
                'soluong'=>$cart_item['soluong'], 'gia'=>$cart_item['gia'], 'anh'=>$cart_item['anh']);
                $_SESSION['cart'] = $product;
            }else{
                $tangsoluong = $cart_item['soluong'] - 1;
                if($cart_item['soluong'] > 1){
                    $product[]= array('tensanpham'=>$cart_item['name_product'], 'id'=>$cart_item['id_product'], 
                    'soluong'=>$tangsoluong, 'gia'=>$cart_item['gia'], 'anh'=>$cart_item['anh']);
                }else{
                    $product[]= array('tensanpham'=>$cart_item['name_product'], 'id'=>$cart_item['id_product'], 
                    'soluong'=>$cart_item['soluong'], 'gia'=>$cart_item['gia'], 'anh'=>$cart_item['anh']);
                }
                $_SESSION['cart'] = $product;
            }
        }
    }

    if(isset($_SESSION['cart'])&& isset($_GET['xoa'])){
        $id=$_GET['xoa'];
        foreach($_SESSION['cart'] as $cart_item){
            if($cart_item['id']!=$id){
                //thiết lập lại session 
                $product[]= array('tensanpham'=>$cart_item['name_product'],'id'=>$cart_item['id_product'],
                'soluong'=>$cart_item['soluong'],'giasanpham'=>$cart_item['gia'],'anh'=>$cart_item['anh']);
            }
        $_SESSION['cart']=$product;
        }
		
	}
    if(isset($_GET['xoatatca']) && $_GET['xoatatca'] == 1){
        unset($_SESSION['cart']);
    }
    if(isset($_POST['themgiohang'])){
        $id = $_GET['idsanpham'];
        $soluong = 1;
        $sql = "SELECT * FROM php_ad.tblproduct WHERE id_product = '".$id."' LIMIT 1";
        $query = mysqli_query($mysqli, $sql);
        $row = mysqli_fetch_array($query);
        if($row){
            $new_product = array(array('tensanpham'=>$row['name_product'], 'id'=>$id,
             'soluong'=>$soluong, 'gia'=>$row['gia'], 'anh'=>$row['anh']));
            if(isset($_SESSION['cart'])){
                $found = false;
                foreach($_SESSION['cart'] as $cart_item){
                    if($cart_item['id_product'] == $id){
                        $product[]= array('tensanpham'=>$cart_item['name_product'], 'id'=>$cart_item['id'], 'soluong'=>$soluong+1, 'gia'=>$cart_item['gia'], 'anh'=>$cart_item['anh']);
                        $found=true;
                    }else{
                        $product[]= array('tensanpham'=>$cart_item['name_product'], 'id'=>$cart_item['id'], 'soluong'=>$cart_item['soluong'], 'gia'=>$cart_item['gia'], 'anh'=>$cart_item['anh']);
                    }
                }
                if($found = false){
                    $_SESSION['cart'] = array_merge($product, $new_product);
                }else{
                    $_SESSION['cart'] = $product;
                }
            }else{
                $_SESSION['cart'] = $new_product;
            }
        }
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
        <td><img src="./admin/modules/quanlysp/imgs/<?php echo $cart_item['anh']; ?>" height="200px" width="250px"></td>
        <td>
            <a href="index.php?quanly=giohang&tru=<?php echo $cart_item['id']; ?>"><i class="fa-solid fa-minus"></i></a>
            <?php echo $cart_item['soluong']; ?>
            <a href="index.php?quanly=giohang&cong=<?php echo $cart_item['id']; ?>"><i class="fa-solid fa-plus"></i></a>
        </td>
        <td><?php echo number_format($cart_item['gia'], 0, ',', '.'). ' VNĐ'; ?></td>
        <td><?php echo number_format($thanhtien, 0, ',', '.'). ' VNĐ'; ?></td>
        <td><a href="index.php?quanly=giohang&xoa=<?php echo $cart_item['id']; ?>">Xóa</a></td>
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
            <p><a href="index.php?quanly=giohang&xoatatca=1">Xóa tất cả</a></p>
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
<?php
    if(isset($_SESSION['dangky'])){

?>
<button class="btn btn-primary" name="thanhtoan"><a href="index.php?quanly=thanhtoan" style="text-decoration: none; color: white;" >Thanh toán</a></button>
<?php
    }
?>

