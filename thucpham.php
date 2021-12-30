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
    <link rel="stylesheet" href="./css/foody.css">
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
                                        <button class="btn btn-secondary dropdown-toggle" role="button"
                                            id="local-dropdown" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
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
                                    <a class="nav-item " href="datgiaohang.php">Đồ ăn</a>
                                    <a class="nav-item active" href="#">Thực phẩm</a>
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
                </div>
            </div>
        </header>

        <!-- Search & Order -->
        <div id="now-banner" class="now-banner">
            <div class="container">
                <div class="search-local">
                    <div class="">
                        <div>
                            <h1 class="title">Đặt Thực phẩm, giao hàng từ 20'...</h1>
                            <div class="font15">Có 4215 Địa Điểm Ở Hà Nội Từ 00:00 - 23:59</div>
                        </div>

                        <div class="input-group">
                            <div style="flex-grow: 1;">
                                <input type="search" id="form1" class="form-control" placeholder="Tìm shop thực phẩm">
                            </div>
                            <button type="button" class="btn btn-primary btn-search">
                                <i class="fal fa-search"></i>
                            </button>
                        </div>

                        <div class="category-list-filter">
                            <a href=""><button type="button"
                                    class="btn btn-outline-secondary cate-item">All</button></a>
                            <a href=""><button type="button" class="btn btn-outline-secondary cate-item">Đồ
                                    chay</button></a>
                            <a href=""><button type="button" class="btn btn-outline-secondary cate-item">Trái
                                    cây</button></a>
                            <a href=""><button type="button" class="btn btn-outline-secondary cate-item">Thịt /
                                    Trứng</button></a>
                            <a href=""><button type="button" class="btn btn-outline-secondary cate-item">Thủy
                                    hải sản</button></a>
                            <a href=""><button type="button" class="btn btn-outline-secondary cate-item">Rau
                                    củ</button></a>
                            <a href=""><button type="button" class="btn btn-outline-secondary cate-item">Gạo
                                    mì</button></a>
                            <a href=""><button type="button" class="btn btn-outline-secondary cate-item">Đồ hộp / Đồ
                                    uống</button></a>
                            <a href=""><button type="button" class="btn btn-outline-secondary cate-item">Gia
                                    vị</button></a>
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
                        <div class="user-get-local">
                            Do an => Giao hang
                        </div>
                        <div class="now-list-restaurant">
                            <div class="d-flex justify-content-between align-items-center">
                                <p>Ưu đãi</p>
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
                                <p>Ưu đãi</p>
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script>
    var banner = document.getElementById("now-banner");
    banner.style.cssText += 'position: fixed; top: 70px;';

    window.onscroll = function() {
        onSCrollFoodList()
    };

    function onSCrollFoodList() {
        var top = 950;
        var posY = window.scrollY;
        if (posY >= top) {
            console.log("aaaaaaaaaaaaa")
            banner.style.cssText += `position: absolute; top: ${top}px;`;
        } else {
            console.log("bbbbbbbb")
            banner.style.cssText += 'position: fixed; top: 70px;';
        }
    }
    </script>
</body>

</html>