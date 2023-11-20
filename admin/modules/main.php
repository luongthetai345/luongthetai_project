<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="main">
        <?php
            if(isset($_GET['action']) && $_GET['query']){
                $tam = $_GET['action'];
                $query = $_GET['query'];
            }else{
                $tam = '';
                $query='';
            }
            if($tam == 'quanlydanhmucsanpham' && $query == 'them'){
                include('modules/quanlydanhmucsp/them.php');
                include('modules/quanlydanhmucsp/lietke.php');
            }else if($tam == 'quanlydanhmucsanpham' && $query == 'sua'){
                include('modules/quanlydanhmucsp/sua.php');
            }else if($tam == 'quanlysanpham' && $query == 'them'){
                include('modules/quanlysp/them.php');
                include('modules/quanlysp/lietke.php');
            }else if($tam == 'quanlysanpham' && $query == 'sua'){
                include('modules/quanlysp/sua.php');
            }
            else{
                include('modules/welcome.php');
            }
        ?>
    </div>
</body>
</html>