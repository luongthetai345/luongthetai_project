<?php
    $sql_sua_danhmucsp = "SELECT * FROM php_ad.tblcategory WHERE id_category = '$_GET[iddanhmuc]' LIMIT 1";
    $query_sua_danhmucsp = mysqli_query($mysqli, $sql_sua_danhmucsp);
?>
<style>
    td{
        text-align: center;
    }
</style>

    <h3>Sửa danh mục sản phẩm</h3>
    <table border="1px" width="50%" style="border-collapse: collapse;">
    <form action="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>" method="post">
        <?php
            while($dong = mysqli_fetch_array($query_sua_danhmucsp)){
        ?>
            <tr>
                <td>Tên</td>
                <td><input type="text" name='tendanhmuc' value = "<?php echo $dong['name_category']; ?>"></td>
            </tr>
            <tr>
                <td>Thứ tự</td>
                <td><input type="text" name='thutu' value = "<?php echo $dong['thutul'] ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Sửa" name='sua'></td>
            </tr>
        <?php
            }
        ?>
        </form>
    </table>

