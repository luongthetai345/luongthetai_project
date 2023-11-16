<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        td{
            text-align: center;
        }
    </style>
    <form action="modules/quanlydanhmucsp/xuly.php" method="post">
        <h3>Thêm danh mục sản phẩm</h3>
        <table border="1px" width="50%" style="border-collapse: collapse;">
            <tr>
                <td>Tên</td>
                <td><input type="text" name='tendanhmuc' width="100%"></td>
            </tr>
            <tr>
                <td>Thứ tự</td>
                <td><input type="text" name='thutu' width="100%"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Thêm" name='them'></td>
            </tr>
        </table>
    </form>
    
</body>
</html>