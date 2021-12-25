<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/datgiaohang.css">
</head>

<body>
    <div class="wrapper">
        <!-- Header -->
        <header class="main-header">
            <div class="container px-0">
                <div class="header-content navbar d-flex">
                    <div class="logo-spfood col-auto">
                        <span>
                            <a href="">
                                <img src="./img/logo-shopeefood.png" alt="ShopeeFood">
                            </a>
                        </span>
                    </div>

                    <div class="local col-auto">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" role="button" id="local-dropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Hà Nội
                            </button>
                            <div class="dropdown-menu" aria-labelledby="local-dropdown">
                                <div class="dropdown-item">
                                    <span class="drop-item-name col">Bắc Ninh</span>
                                    <span class="drop-item-count col-auto">480 địa điểm</span>
                                </div>

                                <div class="dropdown-item">
                                    <span class="drop-item-name col">Bắc Ninh</span>
                                    <span class="drop-item-count col-auto">480 địa điểm</span>
                                </div>

                                <div class="dropdown-item">
                                    <span class="drop-item-name col">Bắc Ninh</span>
                                    <span class="drop-item-count col-auto">480 địa điểm</span>
                                </div>

                                <div class="dropdown-item">
                                    <span class="drop-item-name col">Bắc Ninh</span>
                                    <span class="drop-item-count col-auto">480 địa điểm</span>
                                </div>
 
                                <div class="dropdown-item">
                                    <span class="drop-item-name col">Bắc Ninh</span>
                                    <span class="drop-item-count col-auto">480 địa điểm</span>
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

                    <div class="flex-shrink-0 d-flex align-items-center">
                        <div class="col-auto px-2">
                            <span><i class="bi bi-search icon-search"></i></span>
                        </div>

                        <div class="user-login col-auto px-2">
                            <button type="button" class="btn btn-none-bg btn-login">Đăng nhập</button>
                        </div>

                        <div class="language dropdown col-auto">
                            <div class="dropdown-toggle" id="language-dropdown" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <span>
                                    <img src="./img/flagvn.png" alt="Language">
                                </span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </header>

        <!-- Search and product -->
        <div class="search-and-product mx-auto">
            <div class="container-fluid">
                <div class="row h-100">
                    <div class="col-md-5 menu-left position-relative">
                        <div class="position-absolute search-local">
                            <div>
                                <h1 class="title">Đặt đồ ăn, giao hàng từ 20'...</h1>
                                <div class="font15">Có 32898 Địa Điểm Ở Hà Nội Từ 00:00 - 23:59</div>
                            </div>

                            <div class="input-group">
                                <div style="flex-grow: 1;">
                                    <input type="search" id="form1" class="form-control"
                                        placeholder="Tìm địa điểm, món ăn, địa chỉ...">
                                </div>
                                <button type="button" class="btn btn-primary btn-search">
                                    <i class="fal fa-search"></i>
                                </button>
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
                                <a href=""><button type="button" class="btn btn-outline-secondary cate-item">Tráng
                                        miệng</button></a>
                                <a href=""><button type="button"
                                        class="btn btn-outline-secondary cate-item">Homemade</button></a>
                                <a href=""><button type="button" class="btn btn-outline-secondary cate-item">Vỉa
                                        hè</button></a>
                                <a href=""><button type="button"
                                        class="btn btn-outline-secondary cate-item">Pizza/Burger</button></a>
                                <a href=""><button type="button" class="btn btn-outline-secondary cate-item">Món
                                        gà</button></a>
                                <a href=""><button type="button" class="btn btn-outline-secondary cate-item">Món
                                        lẩu</button></a>
                                <a href=""><button type="button"
                                        class="btn btn-outline-secondary cate-item">Sushi</button></a>
                                <a href=""><button type="button" class="btn btn-outline-secondary cate-item">Mì
                                        phở</button></a>
                                <a href=""><button type="button" class="btn btn-outline-secondary cate-item">Cơm
                                        hộp</button></a>
                            </div>

                            <div>
                                <div class="font18 mt-3 mb-2">
                                    Sử dụng App ShopeeFood để có nhiều giảm giá
                                    <br>
                                    và trải nghiệm tốt hơn
                                </div>
                                <span class="icon img-appstore"></span>
                                <span class="icon img-ggplay"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 content-right">
                        <div class="bg-white mt-4 px-3 py-2">
                            <p>Đồ ăn > Chọn địa chỉ giao hàng</p>
                        </div>
                        <div class="bg-white mt-2 px-3 py-2">
                            <p>Uu dai</p>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card" style="width: 100%;">
                                        <img class="card-img-top" src="..." alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk of the card's content.</p>
                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card" style="width: 100%;">
                                        <img class="card-img-top" src="..." alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk of the card's content.</p>
                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card" style="width: 100%;">
                                        <img class="card-img-top" src="..." alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk of the card's content.</p>
                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card" style="width: 100%;">
                                        <img class="card-img-top" src="..." alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk of the card's content.</p>
                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card" style="width: 100%;">
                                        <img class="card-img-top" src="..." alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk of the card's content.</p>
                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card" style="width: 100%;">
                                        <img class="card-img-top" src="..." alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk of the card's content.</p>
                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card" style="width: 100%;">
                                        <img class="card-img-top" src="..." alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk of the card's content.</p>
                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card" style="width: 100%;">
                                        <img class="card-img-top" src="..." alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk of the card's content.</p>
                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card" style="width: 100%;">
                                        <img class="card-img-top" src="..." alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk of the card's content.</p>
                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card" style="width: 100%;">
                                        <img class="card-img-top" src="..." alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk of the card's content.</p>
                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card" style="width: 100%;">
                                        <img class="card-img-top" src="..." alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk of the card's content.</p>
                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card" style="width: 100%;">
                                        <img class="card-img-top" src="..." alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk of the card's content.</p>
                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card" style="width: 100%;">
                                        <img class="card-img-top" src="..." alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk of the card's content.</p>
                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                    </div>
                                </div>


                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Using -->
        <div class="container">
            <div class="preservation-container">
                <h4 class="title"><span>Đơn hàng của bạn sẽ được bảo quản như thế nào?</span></h4>
                <span>
                    <p class="font15">ShopeeFood sẽ bảo quản đơn của bạn bằng túi và thùng để chống nắng mưa,giữ
                        nhiệt... trên đường đi một cách tốt nhất.</p>
                </span>
                <img src="./img/using1.png" alt="preservation">
            </div>

            <div class="preservation-container img-right">
                <h4 class="title"><span>ShopeeFood Merchant App</span></h4>
                <span>
                    <p class="font14">
                        - <b>ShopeeFood Merchant</b> là ứng dụng quản lý đơn hàng cho các nhà hàng đối tác của dịch vụ
                        đặt món tận nơi
                    </p>
                    <p class="font14">
                        - <b>ShopeeFood.vn</b> luôn sẵn sàng hợp tác với các nhà hàng, quán ăn, cafe... để mở rộng kinh
                        doanh cũng như gia tăng khách hàng. Hãy kết nối vào hệ thống đặt và giao hàng để giảm bớt chi
                        phí quản lý, vận hành, marketing, công nghệ...
                        <br>
                        Đăng ký tham gia:
                        <b><a href="#">tại đây</a></b>
                    </p>
                </span>
                <div class="img-using">
                    <img src="./img/using2.png" alt="preservation" width="294px">
                </div>
            </div>

            <div class="preservation-container img-right">
                <h4 class="title">
                    <a href="#">
                        <span>
                            <span style="color: #EE4D2D;font-weight: bold;">
                                ShopeeFood.vn</span> Hợp tác nhân viên giao nhận - ShopeeFood -
                            Driver
                        </span>
                    </a>
                </h4>
                <span>
                    <p class="font15">
                        Giúp bạn tăng thu nhập trong thời gian rảnh rỗi
                    </p>
                    <p class="font15">
                        <span style="color: #EE4D2D;font-weight: bold;">ShopeeFood</span>
                        tìm kiếm hợp tác với các cá nhân để thực hiện việc giao hàng, chúng tôi sẽ cung cấp ứng dụng
                        (app), một số dụng cụ cần thiết
                        để bạn có thể tiếp nhận và giao hàng,kiếm thêm thu nhập.
                        <br>
                        Đăng kí tham gia :
                        <a href="" style="color: #4D77A2;font-weight: bold;" class="text-decoration-none">tại đây</a>
                        hoặc gửi Email qua
                        <a href="" style="color: #4D77A2;font-weight: bold;"
                            class="text-decoration-none">tuyendung@gofast.vn</a>
                        - hoặc gọi qua số điện thoại (028) 7109 9179.
                    </p>
                </span>
                <div class="img-using">
                    <img src="./img/using3.png" alt="preservation" width="170px" class="bg-deliverynow">
                </div>
            </div>

            <div class="footer-link">
                <p class="footer-link__head">Danh mục</p>
                <div class="footer-link__body">
                    <div class="footer-link__item">
                        <p class="footer-link__title">Thuốc</p>
                        <ul class="footer-link__list">
                            <a href="#" class="footer-link__list-item">Hóa mỹ phẩm</a>
                            <a href="#" class="footer-link__list-item">BCS</a>
                            <a href="#" class="footer-link__list-item">Thiết bị</a>
                            <a href="#" class="footer-link__list-item">Thuốc tây</a>
                            <a href="#" class="footer-link__list-item">Khẩu trang</a>
                            <a href="#" class="footer-link__list-item">Khẩn cấp</a>
                        </ul>
                    </div>

                    <div class="footer-link__item">
                        <p class="footer-link__title">Thú cưng</p>
                        <ul class="footer-link__list">
                            <a href="#" class="footer-link__list-item">Thú cưng</a>
                        </ul>
                    </div>

                    <div class="footer-link__item">
                        <p class="footer-link__title">Sản phẩm</p>
                        <ul class="footer-link__list">
                            <a href="#" class="footer-link__list-item">Mỹ phẩm</a>
                            <a href="#" class="footer-link__list-item">Đồ chơi</a>
                            <a href="#" class="footer-link__list-item">Sữa</a>
                            <a href="#" class="footer-link__list-item">Tã bỉm</a>
                            <a href="#" class="footer-link__list-item">Dụng cụ</a>
                            <a href="#" class="footer-link__list-item">Quần áo</a>
                            <a href="#" class="footer-link__list-item">Giầy dép</a>
                            <a href="#" class="footer-link__list-item">Điện tử</a>
                            <a href="#" class="footer-link__list-item">Trang sức</a>
                        </ul>
                    </div>

                    <div class="footer-link__item">
                        <p class="footer-link__title">Hoa</p>
                        <ul class="footer-link__list">
                            <a href="#" class="footer-link__list-item">Chia buồn</a>
                            <a href="#" class="footer-link__list-item">Cây cảnh</a>
                            <a href="#" class="footer-link__list-item">Chúc mừng</a>
                            <a href="#" class="footer-link__list-item">Sinh nhật</a>
                            <a href="#" class="footer-link__list-item">Tình yêu</a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->

    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>