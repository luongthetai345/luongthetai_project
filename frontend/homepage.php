<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>

<body>
    <?php include('header.php'); ?>
    <!-- <?php require('menu.php'); ?> -->
    <section class="mymainmenu bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3 py-3">Danh mục sản phẩm</div>
                <div class="col-md-9">
                    <nav class="navbar navbar-expand-lg bg-body-tertiary">
                        <div class="container-fluid">
                            <a class="navbar-brand d-none" href="#">Navbar</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="./homepage.php">Trang chủ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="./introduce.php">Giới thiệu</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Sản phẩm
                                </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="./product-laptop.php">Laptop</a></li>
                                            <li><a class="dropdown-item" href="./product-pc.php">PC</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="./productlist.php">Tất cả sản phẩm</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="./news.php">Tin tức</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="./ask.php">Câu hỏi thường gặp</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="./about.php">Về chúng tôi</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="./contact.php">Liên hệ</a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section class="mymaincontent my-3 bg-white">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./imgs/slide1.png" width="100%" height="500px" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./imgs/slide2.png" width="100%" height="500px" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./imgs/slide3.png" width="100%" height="500px" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
        </div>
        <div class="container">
            <div class="product_tittle border-bottom">
                <h3><strong>Laptop</strong></h3>
            </div>
            <div class="product_list-s py-3">
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <img src="./imgs/lap1.webp" alt="" height="200px" width="200px">
                        <p>Tên sản phẩm</p>
                        <p>190000 đ</p>
                    </div>
                    <div class="col-md-3 mb-3">
                        <img src="./imgs/lap1.webp" alt="" height="200px" width="200px">
                        <p>Tên sản phẩm</p>
                        <p>190000 đ</p>
                    </div>
                    <div class="col-md-3 mb-3">
                        <img src="./imgs/lap1.webp" alt="" height="200px" width="200px">
                        <p>Tên sản phẩm</p>
                        <p>190000 đ</p>
                    </div>
                    <div class="col-md-3 mb-3">
                        <img src="./imgs/lap1.webp" alt="" height="200px" width="200px">
                        <p>Tên sản phẩm</p>
                        <p>190000 đ</p>
                    </div>
                    <div class="col-md-3 mb-3">
                        <img src="./imgs/lap1.webp" alt="" height="200px" width="200px">
                        <p>Tên sản phẩm</p>
                        <p>190000 đ</p>
                    </div>
                    <div class="col-md-3 mb-3">
                        <img src="./imgs/lap1.webp" alt="" height="200px" width="200px">
                        <p>Tên sản phẩm</p>
                        <p>190000 đ</p>
                    </div>
                    <div class="col-md-3 mb-3">
                        <img src="./imgs/lap1.webp" alt="" height="200px" width="200px">
                        <p>Tên sản phẩm</p>
                        <p>190000 đ</p>
                    </div>
                    <div class="col-md-3 mb-3">
                        <img src="./imgs/lap1.webp" alt="" height="200px" width="200px">
                        <p>Tên sản phẩm</p>
                        <p>190000 đ</p>
                    </div>
                </div>
            </div>
            <hr>
            <div class="product_tittle border-bottom">
                <h3><strong>PC</strong></h3>
            </div>
            <div class="product_list-s py-3">
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <img src="./imgs/pc1.jpg" alt="" height="200px" width="200px">
                        <p>Tên sản phẩm</p>
                        <p>190000 đ</p>
                    </div>
                    <div class="col-md-3 mb-3">
                        <img src="./imgs/pc1.jpg" alt="" height="200px" width="200px">
                        <p>Tên sản phẩm</p>
                        <p>190000 đ</p>
                    </div>
                    <div class="col-md-3 mb-3">
                        <img src="./imgs/pc1.jpg" alt="" height="200px" width="200px">
                        <p>Tên sản phẩm</p>
                        <p>190000 đ</p>
                    </div>
                    <div class="col-md-3 mb-3">
                        <img src="./imgs/pc1.jpg" alt="" height="200px" width="200px">
                        <p>Tên sản phẩm</p>
                        <p>190000 đ</p>
                    </div>
                    <div class="col-md-3 mb-3">
                        <img src="./imgs/pc1.jpg" alt="" height="200px" width="200px">
                        <p>Tên sản phẩm</p>
                        <p>190000 đ</p>
                    </div>
                    <div class="col-md-3 mb-3">
                        <img src="./imgs/pc1.jpg" alt="" height="200px" width="200px">
                        <p>Tên sản phẩm</p>
                        <p>190000 đ</p>
                    </div>
                    <div class="col-md-3 mb-3">
                        <img src="./imgs/pc1.jpg" alt="" height="200px" width="200px">
                        <p>Tên sản phẩm</p>
                        <p>190000 đ</p>
                    </div>
                    <div class="col-md-3 mb-3">
                        <img src="./imgs/pc1.jpg" alt="" height="200px" width="200px">
                        <p>Tên sản phẩm</p>
                        <p>190000 đ</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include('footer.php'); ?>
</body>

</html>