<?php
    include('../../config/config.php');
    $tensanpham = $_POST['tensp'];
    $soluong = $_POST['soluong'];
    $file=$_FILES['anh'];
    $anh=$file['name'];
    $anh_tmp = $_FILES['anh']['tmp_name'];
    $gioithieu = $_POST['gioithieu'];
    $gia = $_POST['gia'];
    $danhmuc = $_POST['danhmuc'];
    $thutu = $_POST['thutu'];


    if(isset($_POST['them'])){
        if(isset($_FILES['anh'])){
            move_uploaded_file($anh_tmp, "imgs/".$anh);
            $sql_them = "INSERT INTO php_ad.tblproduct( name_product, soluong, anh, introduct, gia, category, thutu) 
            VALUE( '".$tensanpham."', '".$soluong."', '".$anh."', '".$gioithieu."', '".$gia."', '".$danhmuc."', '".$thutu."')";
            mysqli_query($mysqli, $sql_them);
            
            header('Location:../../index.php?action=quanlysanpham&query=them');
        }
       
    }else if(isset($_POST['sua'])){
        $sql_update = "UPDATE php_ad.tblproduct SET name_product='".$tensanpham."', soluong='".$soluong."', anh='".$anh."', introduct='".$gioithieu."', gia='".$gia."', category='".$danhmuc."', thutu='".$thutu."' WHERE id_product = '$_GET[idsp]'";
        mysqli_query($mysqli, $sql_update);
        header('Location:../../index.php?action=quanlysanpham&query=them');
    }else {
        $id = $_GET['idsp'];
        $sql_xoa = "DELETE FROM php_ad.tblproduct WHERE id_product = '".$id."'";
        mysqli_query($mysqli, $sql_xoa);
        header('Location:../../index.php?action=quanlysanpham&query=them');
    }
    
?>