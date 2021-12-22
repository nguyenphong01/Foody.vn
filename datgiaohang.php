<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/datgiaohang.css">
</head>

<body>
    <div class="wrapper">
        <!-- Header -->
        <header class="main-header">
            <div class="container">
                <div class="header-content row navbar d-flex">
                    <div class="logo-spfood col-auto">
                        <span>
                            <a href="">
                                <img src="./img/logo-shopeefood.png" alt="ShopeeFood">
                            </a>
                        </span>
                    </div>

                    <div class="local col-auto">
                        <div class="dropdown">
                            <div class="btn btn-secondary dropdown-toggle" type="button" id="local-dropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Hà Nội
                            </div>
                            <div class="dropdown-menu">
                                <div class="dropdown-item">
                                    <span drop-item-name col>Bắc Ninh</span>
                                    <span drop-item-count>66000 địa điểm</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="header-nav col">
                        <a class="nav-item active" href="#">Đồ ăn</a>
                        <a class="nav-item" href="#">Thực phẩm</a>
                        <a class="nav-item" href="#">Bia</a>
                        <a class="nav-item" href="#">Hoa</a>
                        <a class="nav-item" href="#">Siêu thị</a>
                        <a class="nav-item" href="#">Thuốc</a>
                        <a class="nav-item" href="#">Thú cưng</a>
                    </div>

                    <div class="col-auto">
                        <span><i class="bi bi-search icon-search"></i></span>
                    </div>

                    <div class="user-login col-auto">
                        <button type="button" class="btn btn-none-bg btn-login">Đăng nhập</button>
                    </div>

                    <div class="language dropdown col-auto">
                        <div class="dropdown-toggle" id="language-dropdown" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <span>
                                <img src="./img/flagvn.png" alt="Language">
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Search and product -->
        <div class="search-and-product mx-auto">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-5 bg-info">
                        <div>
                            <h3>Đặt đồ ăn, giao hàng từ 20'...</h3>
                            <div class="local">Có 32898 Địa Điểm Ở Hà Nội Từ 00:00 - 23:59</div>
                        </div>

                        <div class="form-search">
                            <!-- <div class="input-group">
                                <input type="text" id="input-search" placeholder="Tìm địa điểm, món ăn, địa chỉ...">
                                <a href="#"><button type="button" class="btn btn-search"></button></a>
                            </div> -->
                            <form class=" d-flex">
                                <input class="form-control" type="text" placeholder="Tìm địa điểm, món ăn, địa chỉ...">
                                <button class="btn bg-primary" type="button">
                                    <i class="bi bi-search"></i>
                                </button>
                            </form>
                        </div>
                        <div class="category-list-filter">
                            <a href=""><button type="button"
                                    class="btn btn-outline-secondary cate-item">All</button></a>
                            <a href=""><button type="button" class="btn btn-outline-secondary cate-item">Đồ
                                    ăn</button></a>
                            <a href=""><button type="button" class="btn btn-outline-secondary cate-item">Đồ
                                    uống</button></a>
                            <a href=""><button type="button" class="btn btn-outline-secondary cate-item">Đồ
                                    chay</button></a>
                            <a href=""><button type="button" class="btn btn-outline-secondary cate-item">Bánh
                                    kem</button></a>
                        </div>
                    </div>
                    <div class="col-md-7 bg-secondary">
                        FF
                    </div>
                </div>
            </div>
        </div>

        <!-- Using -->
        <div class="container">
            <div class="preservation-container">
                <h4 class="title"><span>Đơn hàng của bạn sẽ được bảo quản như thế nào?</span></h4>
                <span>
                    <p class="font16">ShopeeFood sẽ bảo quản đơn của bạn bằng túi và thùng để chống nắng mưa,giữ nhiệt... trên đường đi một cách tốt nhất.</p>
                </span>
                <img src="./img/using1.png" alt="preservation">
            </div>

            <div class="preservation-container img-right">
                <h4 class="title"><span>ShopeeFood Merchant App</span></h4>
                <span>
                    <p class="font14">
                        - <b>ShopeeFood Merchant</b> là ứng dụng quản lý đơn hàng cho các nhà hàng đối tác của dịch vụ đặt món tận nơi
                    </p>
                    <p class="font14">
                        - <b>ShopeeFood.vn</b> luôn sẵn sàng hợp tác với các nhà hàng, quán ăn, cafe... để mở rộng kinh doanh cũng như gia tăng khách hàng. Hãy kết nối vào hệ thống đặt và giao hàng để giảm bớt chi phí quản lý, vận hành, marketing, công nghệ...
                        <br>
                        Đăng ký tham gia: 
                        <b><a class="text-decoration-none " href="#">tại đây</a></b>
                    </p>
                </span>
                <div class="img-using">
                    <img src="./img/using2.png" alt="preservation" width="294px">
                </div>
            </div>
        </div>
    </div>
</body>

</html>