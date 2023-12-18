<div id="main">
    <?php
        if(isset($_GET['quanly'])){
            $tam = $_GET['quanly'];
        }else{
            $tam = '';
        }
        if($tam == 'index'){
            include('frontend/main/index.php');
        }else if($tam == 'danhmucsanpham'){
            include('frontend/main/danhmuc.php');
        }else if($tam == 'giohang'){
            include('frontend/main/giohang.php');
        }else if($tam == 'sanpham'){
            include('frontend/main/sanpham.php');
        }
    ?>
</div>