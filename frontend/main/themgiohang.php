<?php
    session_start();
    include('../../admin/config/config.php');
    if(isset($_POST['themgiohang'])){
        $id = $_GET['idsanpham'];
        $soluong = 1;
        $sql = "SELECT * FROM php_ad.tblproduct WHERE id_product = '".$id."' LIMIT 1";
        $query = mysqli_query($mysqli, $sql);
        $row = mysqli_fetch_array($query);
        if($row){
            $new_product = array(array('tensanpham'=>$row['name_product'], 'id'=>$id, 'soluong'=>$row['soluong'] ));
        }
    }
?>