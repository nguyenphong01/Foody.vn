<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foody.vn</title>
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
        <header>
            <div class="container-header">
                <div class="container">
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
                                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                            id="local-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Hà Nội
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="local-dropdown">
                                            <div class="dropdown-item">
                                                <span class="drop-item-name col">Bắc Ninh</span>
                                                <span class="drop-item-count col-auto">480 địa điểm</span>
                                            </div>

                                            <div class="dropdown-item">
                                                <span class="drop-item-name col">Hải Phòng</span>
                                                <span class="drop-item-count col-auto">480 địa điểm</span>
                                            </div>

                                            <div class="dropdown-item">
                                                <span class="drop-item-name col">Quảng Ninh</span>
                                                <span class="drop-item-count col-auto">480 địa điểm</span>
                                            </div>

                                            <div class="dropdown-item">
                                                <span class="drop-item-name col">Hưng Yên</span>
                                                <span class="drop-item-count col-auto">480 địa điểm</span>
                                            </div>

                                            <div class="dropdown-item">
                                                <span class="drop-item-name col">Vĩnh Phúc</span>
                                                <span class="drop-item-count col-auto">480 địa điểm</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="header-nav col">
                                    <a class="nav-item active" href="#">Đồ ăn</a>
                                    <a class="nav-item" href="thucpham.php">Thực phẩm</a>
                                    <a class="nav-item" href="bia.php">Bia</a>
                                    <a class="nav-item" href="hoa.php">Hoa</a>
                                    <a class="nav-item" href="sieuthi.php">Siêu thị</a>
                                    <a class="nav-item" href="thuoc.php">Thuốc</a>
                                    <a class="nav-item" href="thucung.php">Thú cưng</a>
                                </div>

                                <div class="flex-shrink-0 d-flex align-items-center">
                                    <div class="col-auto px-2">
                                        <span><i class="bi bi-search icon-search"></i></span>
                                    </div>

                                    <div class="user-login col-auto px-2">
                                        <a href="login.php">
                                            <button type="button" class="btn btn-none-bg btn-login">Đăng nhập</button>
                                        </a>
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
                </div>
            </div>
        </header>

        <!-- Search & Order -->
        <div id="now-banner" class="now-banner">
            <div class="container">
                <div class="search-local">
                    <div class="">
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
            </div>
        </div>
        <div class="contain-main-home clearfix">
            <div class="container">
                <div class="container">
                    <div class="main-right-home">
                        <div class="user-get-local" id="search-local" type="button" data-bs-toggle="modal"
                            data-bs-target="#locationModal">
                            <div class="row align-items-center pointer no-gutters" style="cursor:pointer;">
                                <div class="col-auto">
                                    <span>Đồ ăn</span>
                                    <i class="fas fa-long-arrow-alt-right bg-gray ms-2" style="font-size:12px;"></i>
                                </div>
                                <div class="col ps-0">32F4+G4 Tiên Du, Bắc Ninh, Việt Nam</div>
                                <div class="col-auto">
                                    <span>
                                        <i class="fas fa-angle-right"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="now-list-restaurant">
                            <div class="d-flex justify-content-between align-items-center">
                                <p style="font-weight: 700;">Ưu đãi</p>
                                <p>Xem tất cả</p>
                            </div>
                            <div class="row">
                                <div class="col-md-4 px-0">
                                    <div class="item-restaurant">
                                        <div class="img-restaurant">
                                            <img src="https://images.foody.vn/res/g69/682061/prof/s280x175/foody-upload-api-foody-mobile-11a-jpg-180816143840.jpg"
                                                class="w-100" />
                                        </div>
                                        <div class="info-restaurant">
                                            <div class="info-basic-res">
                                                <h4 class="name-res"
                                                    title="Rules Of Tea - Trà Sữa Đế Vương - Nguyễn Văn Cừ">
                                                    Rules Of Tea - Trà
                                                    Sữa Đế Vương - Nguyễn Văn Cừ
                                                </h4>
                                                <div class="address-res"
                                                    title="213D Nguyễn Văn Cừ, P. 3, Quận 5, TP. HCM">
                                                    213D Nguyễn Văn Cừ, P. 3, Quận
                                                    5, TP. HCM
                                                </div>
                                            </div>
                                            <p class="content-promotion"><i class="fas fa-tag"></i> Mã giảm 15%</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 px-0">
                                    <div class="item-restaurant">
                                        <div class="img-restaurant">
                                            <img src="./img/bundau.jpg"
                                            class="w-100"/>
                                        </div>
                                        <div class="info-restaurant">
                                            <div class="info-basic-res">
                                                <h4 class="name-res"
                                                    title="Bún Đậu Làng Quê-Bún Đậu Mẹt">
                                                    Bún Đậu Làng Quê-Bún Đậu Mẹt
                                                </h4>
                                                <div class="address-res"
                                                    title="83 Mễ Trì Thượng (Đối diện 262 Mễ Trì Thượng),Nam Từ Liêm,Hà Nội">
                                                    83 Mễ Trì Thượng (Đối diện 262 Mễ Trì Thượng),Nam Từ Liêm,Hà Nội
                                                </div>
                                            </div>
                                            <p class="content-promotion"><i class="fas fa-tag"></i> Giảm món</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 px-0">
                                    <div class="item-restaurant">
                                        <div class="img-restaurant">
                                            <img src="./img/comchay.jpg"
                                                class="w-100" />
                                        </div>
                                        <div class="info-restaurant">
                                            <div class="info-basic-res">
                                                <h4 class="name-res"
                                                    title="Cơm Cháy Phương Dung">
                                                    Cơm Cháy Phương Dung
                                                </h4>
                                                <div class="address-res"
                                                    title="24 Tống Duy Tân,Hoàn Kiếm,Hà Nội">
                                                    24 Tống Duy Tân,Hoàn Kiếm,Hà Nội
                                                </div>
                                            </div>
                                            <p class="content-promotion"><i class="fas fa-tag"></i> Giảm hết 10%</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 px-0">
                                    <div class="item-restaurant">
                                        <div class="img-restaurant">
                                            <img src="./img/trasua.jpg"
                                                class="w-100" />
                                        </div>
                                        <div class="info-restaurant">
                                            <div class="info-basic-res">
                                                <h4 class="name-res"
                                                    title="Tiger Sugar Fruit & Tea - Ô Chợ Dừa">
                                                    Tiger Sugar Fruit & Tea - Ô Chợ Dừa
                                                </h4>
                                                <div class="address-res"
                                                    title="92 Ô Chợ Dừa, Đống Đa, Hà Nội">
                                                    92 Ô Chợ Dừa, Đống Đa, Hà Nội
                                                </div>
                                            </div>
                                            <p class="content-promotion"><i class="fas fa-tag"></i> Deal 12k</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 px-0">
                                    <div class="item-restaurant">
                                        <div class="img-restaurant">
                                            <img src="./img/thitde.jpg"
                                                class="w-100" />
                                        </div>
                                        <div class="info-restaurant">
                                            <div class="info-basic-res">
                                                <h4 class="name-res"
                                                    title="Thịt dê Lê Làn">
                                                    Thịt dê Lê Làn
                                                </h4>
                                                <div class="address-res"
                                                    title="206 Xuân Đỉnh, Nam Từ Liêm, Hà Nội">
                                                    206 Xuân Đỉnh, Nam Từ Liêm, Hà Nội
                                                </div>
                                            </div>
                                            <p class="content-promotion"><i class="fas fa-tag"></i> Mã giảm 15%</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 px-0">
                                    <div class="item-restaurant">
                                        <div class="img-restaurant">
                                            <img src="./img/thitnuong.jpg"
                                                class="w-100" />
                                        </div>
                                        <div class="info-restaurant">
                                            <div class="info-basic-res">
                                                <h4 class="name-res"
                                                    title="Quang Anh - Thịt Nướng">
                                                    Quang Anh - Thịt Nướng
                                                </h4>
                                                <div class="address-res"
                                                    title="105 Tam Khương, Đống Đa, Hà Nội">
                                                    105 Tam Khương, Đống Đa, Hà Nội
                                                </div>
                                            </div>
                                            <p class="content-promotion"><i class="fas fa-tag"></i> Mã giảm 5%</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 px-0">
                                    <div class="item-restaurant">
                                        <div class="img-restaurant">
                                            <img src="./img/chesau.jpg"
                                                class="w-100" />
                                        </div>
                                        <div class="info-restaurant">
                                            <div class="info-basic-res">
                                                <h4 class="name-res"
                                                    title="Chè Sầu Liên và Dừa Dầm">
                                                    Chè Sầu Liên và Dừa Dầm
                                                </h4>
                                                <div class="address-res"
                                                    title="66A Triều Khúc, Thanh Xuân, Hà Nội">
                                                    66A Triều Khúc, Thanh Xuân, Hà Nội
                                                </div>
                                            </div>
                                            <p class="content-promotion"><i class="fas fa-tag"></i> Giảm món</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 px-0">
                                    <div class="item-restaurant">
                                        <div class="img-restaurant">
                                            <img src="./img/trasua.jpg"
                                                class="w-100" />
                                        </div>
                                        <div class="info-restaurant">
                                            <div class="info-basic-res">
                                                <h4 class="name-res"
                                                    title="Trà Sữa Tocotoco - Chùa Láng">
                                                    Trà Sữa Tocotoco - Chùa Láng
                                                </h4>
                                                <div class="address-res"
                                                    title="Chùa Láng, Đống Đa, Hà Nội">
                                                    Chùa Láng, Đống Đa, Hà Nội
                                                </div>
                                            </div>
                                            <p class="content-promotion"><i class="fas fa-tag"></i> Giảm hết 40%</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 px-0">
                                    <div class="item-restaurant">
                                        <div class="img-restaurant">
                                            <img src="https://images.foody.vn/res/g69/682061/prof/s280x175/foody-upload-api-foody-mobile-11a-jpg-180816143840.jpg"
                                                class="w-100" />
                                        </div>
                                        <div class="info-restaurant">
                                            <div class="info-basic-res">
                                                <h4 class="name-res"
                                                    title="Rules Of Tea - Trà Sữa Đế Vương - Nguyễn Văn Cừ">
                                                    Rules Of Tea - Trà
                                                    Sữa Đế Vương - Nguyễn Văn Cừ
                                                </h4>
                                                <div class="address-res"
                                                    title="213D Nguyễn Văn Cừ, P. 3, Quận 5, TP. HCM">
                                                    213D Nguyễn Văn Cừ, P. 3, Quận
                                                    5, TP. HCM
                                                </div>
                                            </div>
                                            <p class="content-promotion"><i class="fas fa-tag"></i> Mã giảm 15%</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="now-list-restaurant">
                            <div class="d-flex justify-content-between align-items-center">
                                <p>Bộ sưu tập</p>
                                <p>Xem tất cả</p>
                            </div>
                            <div class="row">
                                <div class="col-md-4 px-0">
                                    <div class="item-restaurant" >
                                        <div class="img-restaurant">
                                            <img src="./img/deal.jpeg"
                                                class="w-100" />
                                        </div>
                                        <div class="info-restaurant" style="border: 0;">
                                            <div class="info-basic-res" style="border-bottom: 0;">
                                                <h4 class="name-res"
                                                    title="Năm cũ sắp qua - Hốt deal 88k">
                                                    Năm cũ sắp qua - Hốt deal 88k
                                                </h4>
                                                <div class="address-res"
                                                    title="200 địa điểm">
                                                    200 địa điểm
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 px-0">
                                    <div class="item-restaurant" >
                                        <div class="img-restaurant">
                                            <img src="./img/deal.jpeg"
                                                class="w-100" />
                                        </div>
                                        <div class="info-restaurant" style="border: 0;">
                                            <div class="info-basic-res" style="border-bottom: 0;">
                                                <h4 class="name-res"
                                                    title="Combo 188k - Khao nhà ăn tết">
                                                    Combo 188k - Khao nhà ăn tết
                                                </h4>
                                                <div class="address-res"
                                                    title="200 địa điểm">
                                                    200 địa điểm
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 px-0">
                                    <div class="item-restaurant" >
                                        <div class="img-restaurant">
                                            <img src="./img/deal.jpeg"
                                                class="w-100" />
                                        </div>
                                        <div class="info-restaurant" style="border: 0;">
                                            <div class="info-basic-res" style="border-bottom: 0;">
                                                <h4 class="name-res"
                                                    title="Năm cũ sắp qua - Hốt deal 88k">
                                                    Năm cũ sắp qua - Hốt deal 88k
                                                </h4>
                                                <div class="address-res"
                                                    title="200 địa điểm">
                                                    200 địa điểm
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 px-0">
                                    <div class="item-restaurant" >
                                        <div class="img-restaurant">
                                            <img src="./img/deal.jpeg"
                                                class="w-100" />
                                        </div>
                                        <div class="info-restaurant" style="border: 0;">
                                            <div class="info-basic-res" style="border-bottom: 0;">
                                                <h4 class="name-res"
                                                    title="Năm cũ sắp qua - Hốt deal 88k">
                                                    Năm cũ sắp qua - Hốt deal 88k
                                                </h4>
                                                <div class="address-res"
                                                    title="200 địa điểm">
                                                    200 địa điểm
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 px-0">
                                    <div class="item-restaurant" >
                                        <div class="img-restaurant">
                                            <img src="./img/deal.jpeg"
                                                class="w-100" />
                                        </div>
                                        <div class="info-restaurant" style="border: 0;">
                                            <div class="info-basic-res" style="border-bottom: 0;">
                                                <h4 class="name-res"
                                                    title="Năm cũ sắp qua - Hốt deal 88k">
                                                    Năm cũ sắp qua - Hốt deal 88k
                                                </h4>
                                                <div class="address-res"
                                                    title="200 địa điểm">
                                                    200 địa điểm
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 px-0">
                                    <div class="item-restaurant" >
                                        <div class="img-restaurant">
                                            <img src="./img/deal.jpeg"
                                                class="w-100" />
                                        </div>
                                        <div class="info-restaurant" style="border: 0;">
                                            <div class="info-basic-res" style="border-bottom: 0;">
                                                <h4 class="name-res"
                                                    title="Năm cũ sắp qua - Hốt deal 88k">
                                                    Năm cũ sắp qua - Hốt deal 88k
                                                </h4>
                                                <div class="address-res"
                                                    title="200 địa điểm">
                                                    200 địa điểm
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 px-0">
                                    <div class="item-restaurant" >
                                        <div class="img-restaurant">
                                            <img src="./img/deal.jpeg"
                                                class="w-100" />
                                        </div>
                                        <div class="info-restaurant" style="border: 0;">
                                            <div class="info-basic-res" style="border-bottom: 0;">
                                                <h4 class="name-res"
                                                    title="Năm cũ sắp qua - Hốt deal 88k">
                                                    Năm cũ sắp qua - Hốt deal 88k
                                                </h4>
                                                <div class="address-res"
                                                    title="200 địa điểm">
                                                    200 địa điểm
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 px-0">
                                    <div class="item-restaurant" >
                                        <div class="img-restaurant">
                                            <img src="./img/deal.jpeg"
                                                class="w-100" />
                                        </div>
                                        <div class="info-restaurant" style="border: 0;">
                                            <div class="info-basic-res" style="border-bottom: 0;">
                                                <h4 class="name-res"
                                                    title="Năm cũ sắp qua - Hốt deal 88k">
                                                    Năm cũ sắp qua - Hốt deal 88k
                                                </h4>
                                                <div class="address-res"
                                                    title="200 địa điểm">
                                                    200 địa điểm
                                                </div>
                                            </div>
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
            <hr>
        </div>

        <!-- Footer -->
        <footer class="main-footer">
            <div class="container  mt-5">
                <div class="row mt-3">
                    <div class="block-footer col-xl-3 mb-4">
                        <p class="title-block">Công ty</p>
                        <ul class="list-unstyled" style="line-height: 25px;">
                            <li>
                                <a href="#">Giới thiệu</a>
                            </li>
                            <li>
                                <a href="#">Trung tâm trợ giúp</a>
                            </li>
                            <li>
                                <a href="#">Quy chế</a>
                            </li>
                            <li>
                                <a href="#">Điều khoản sử dụng</a>
                            </li>
                            <li>
                                <a href="#">Bảo mật thông tin</a>
                            </li>
                            <li>
                                <a href="#">Giải quyết khiếu nại</a>
                            </li>
                            <li>
                                <a href="#">Liên hệ</a>
                            </li>
                            <li>
                                <a href="#">Hợp tác nhân viên giao nhận</a>
                            </li>
                            <li>
                                <a href="#">Đăng kí quán</a>
                            </li>
                            <li>
                                <a href="#">ShopeeFood Uni</a>
                            </li>
                        </ul>
                    </div>
                    <div class="block-footer col-md-2 mb-4">
                        <p class="title-block">Ứng dụng ShopeeFood</p>
                        <a href="#" class="apps">
                            <span class="apps__appstore" title="IOS"></span>
                        </a>
                        <a href="#" class="apps">
                            <span class="apps__ggplay" title="Androi"></span>
                        </a>
                        <a href="#" class="apps">
                            <span class="apps__gallery" title="Huawei"></span>
                        </a>
                    </div>
                    <div class="block-footer col-md-3 mb-4 text-center">
                        <div class="logo-footer">
                            <img src="./img/Logo-Shopeefood2.png" alt="Đặt món trực tuyến giao hàng tận nơi"
                                width="100">
                        </div>
                        <div class="col-md text-center text-muted" style="font-size:12px;">
                            &copy; 2021 ShopeeFood
                        </div>
                        <ul class="icon-link">
                            <li>
                                <span class="icon-fb">
                                    <i class="fab fa-facebook-f"></i>
                                </span>
                            </li>
                            <li>
                                <span class="icon-ig">
                                    <i class="fab fa-instagram"></i>
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="block-last col-xl-3 mb-4">
                        <p class="title-block">Địa chỉ công ty</p>
                        <span>
                            <p>Công Ty Cổ Phần Foody</p>
                            <p>Lầu G, Tòa nhà Jabes 1,</p>
                            <p>số 244 đường Cống Quỳnh, phường Phạm Ngũ Lão, Quận 1, TPHCM</p>
                            <p>Giấy CN ĐKDN số: 0311828036</p>
                            <p>do Sở Kế hoạch và Đầu tư TP.HCM cấp ngày 11/6/2012,</p>
                            <p>sửa đổi lần thứ 23, ngày 10/12/2020</p>
                            <p>Số điện thoại: 1900 2042</p>
                            <p>
                                Email:
                                <a href="mailto:info@shopeefood.vn">info@shopeefood.vn</a>
                            </p>
                        </span>
                        <span class="registered">
                            <img src="./img/dangki.jpg" alt="ĐÃ ĐĂNG KÝ BỘ CÔNG THƯƠNG">
                        </span>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Modal -->
    <div class="modal fade modal-get-local" id="locationModal" tabindex="-1" aria-labelledby="locationModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    Bạn muốn giao đến đâu?
                    <button type="button" class="btn-close btn" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="search-local-modal">
                        <div class="primary-local">
                            <div class="row align-items-center no-gutters">
                                <div class="col-auto">
                                    <i class="icon icon-search-modal"></i>
                                </div>
                                <div class="col">
                                    <input type="text" id="formatted-address" name="address"
                                        placeholder="Nhập địa chỉ giao hàng" value>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
    window.addEventListener('DOMContentLoaded', (event) => {
        var banner = document.getElementById("now-banner");
        var searchLocal = document.getElementById("search-local");
        var locationModal = document.getElementById("locationModal");

        banner.style.cssText += 'position: fixed; top: 70px;';

        window.onscroll = function() {
            onSCrollFoodList()
        };

        function onSCrollFoodList() {
            var top = 950;
            var posY = window.scrollY;
            if (posY >= top) {
                banner.style.cssText += `position: absolute; top: ${top}px;`;
            } else {
                banner.style.cssText += 'position: fixed; top: 70px;';
            }
        }
        var myModal = new bootstrap.Modal(locationModal, {
            keyboard: false
        })
        var modalToggle = locationModal // relatedTarget
        myModal.show(modalToggle)
    });
    </script>


</body>

</html>