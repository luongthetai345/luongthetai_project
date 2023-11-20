<?php
    $mysqli = mysqli_connect('localhost', 'root', 'Tai@02102003', 'php_ad');
    if(mysqli_connect_errno()){
        echo "Error connectiong to MySQL: ".mysqli_connect_error();
    }
?>
<?php
    $sql_product = "SELECT * FROM  php_ad.tblproduct WHERE php_ad.tblproduct.category = '$_GET[id]' ";
    $query_product = mysqli_query($mysqli, $sql_product);
?>
<?php
    $sql_pro = "SELECT * FROM php_ad.tblcategory, php_ad.tblproduct WHERE php_ad.tblproduct.category = php_ad.tblcategory.id_category 
    AND php_ad.tblproduct.category = '$_GET[id]' ";
    $query_pro = mysqli_query($mysqli, $sql_pro);
    $row_title = mysqli_fetch_array($query_pro);
?>

<style>
    ul{
        display: flex;
        flex-direction: row;
    }
    li{
        display: flex;
        margin-right: 50px;
    }
</style>
<section class="mymaincontent my-3 bg-white">
    <div class="container">       
        <h3>Danh mục sản phẩm: <?php echo $row_title['name_category'] ?></h3>
       
        <ul>
            <?php
                while($row_pro = mysqli_fetch_array($query_product)){
            ?>
            <li>
                <a href="">
                    <img src="admin/modules/quanlysp/imgs/<?php echo $row_pro['anh'] ?>" height="200px" width="200px" >
                    <p>Tên sản phẩm: <?php echo $row_pro['name_product'] ?></p>
                    <p>Giá: <?php echo $row_pro['gia'] ?></p>
                </a>
            </li>
            <?php
                }
            ?>
        </ul>
    </div>
    
</section>