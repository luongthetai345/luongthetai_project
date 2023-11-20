<div id="main">
    <?php
        if(isset($_GET['quanly'])){
            $tam = $_GET['quanly'];
        }else{
            $tam = '';
        }
        if($tam == 'index'){
            include('main/index.php');
        }else if($tam == 'danhmucsanpham'){
            include('main/danhmuc.php');
        }else if($tam == 'giohang'){
            include('main/cart.php');
        }
    ?>
</div>