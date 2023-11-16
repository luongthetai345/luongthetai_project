<?php
    $sql_lietke_danhmucsp = "SELECT * FROM php_ad.tblcategory ORDER BY thutul";
    $query_lietke_danhmucsp = mysqli_query($mysqli, $sql_lietke_danhmucsp);
?>

<h3>Danh mục sản phẩm</h3>
<table border="1px" style="border-collapse: collapse;" width="100%">
    <tr>
        <th>Id</th>
        <th>Tên danh mục</th>
        <th>Quản lý</th>
    </tr>
    <?php
        while($row = mysqli_fetch_array($query_lietke_danhmucsp)){
    ?>
    <tr>
        <td><?php echo $row['id_category']; ?></td>
        <td><?php echo $row['name_category']; ?></td>
        <td>
            <a href="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $row['id_category']; ?>">Xóa</a>
            <a href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_category']; ?>">Sửa</a>
        </td>
    </tr>
    <?php
        }
    ?>
</table>

