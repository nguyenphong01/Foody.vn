<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../Foody.vn/css/header.css">

    <title>Foody</title>
</head>

<body>
    <header>
        <div class="container-topbar">
            <div class="topbar">
                <a class="header.php" href="#">Khám phá</a>
                <a href="datgiaohang.php">Đặt giao hàng</a>

                <a href="giamgia.php">Giảm giá</a>
            </div>
        </div>
        <div class="header-toolbar">
            <div class="left-header-toolbar">
                <div class="foody-wapper">
                    <a href="/" class="logo foody-logo" rel="home" alt="foody-logo">
                        <img src="../Foody.vn/img/logo-foody.png" alt="Foody.vn">
                    </a>
                </div>
                <select class="form-selectaddress" aria-label="Default select example" style="width:100px; height:30px">
                    <option selected="">Hà Nội</option>
                    <option value="1">Tp.Hồ Chí Minh</option>
                    <option value="2">Đà Nẵng</option>
                    <option value="3">Hải Phòng</option>
                </select>

                <select class="form-selectitems" aria-label="Default select example" style="width:100px; height:30px">
                    <option selected="">Ăn uống</option>
                    <option value="1">Ăn uống</option>
                    <option value="2">Du lịch</option>
                    <option value="3">Cưới hỏi</option>
                </select>
                <div class="search-box ">
                    <div class="results-box ">
                        <input type="text" class="search-input" autocomplete="off"
                            placeholder="Địa điểm, món ăn, loại hình....." id="inputSearch" value=""
                            style="width: 450px; height:30px">

                    </div>
                </div>
            </div>
            <div class="right-header-toolbar">
                <a href="logout.php">Đăng xuất</a>
            </div>
        </div>
    </header>

    <!-- Phần 2-->
    <div class="home-banner">
        <div class="home-banner-container slick-initialized slick-slider" style="display: block;">
            <div class="slick-list draggable" style="padding: 0px 50px;">
                <div class="slick-track" style="opacity: 1; width: 5000px; transform: translate3d(282px, 0px, 0px);">
                    <div class="banner-item slick-slide slick-current slick-active slick-center" data-slick-index="0"
                        aria-hidden="false" style="" tabindex="0">
                        <a target="_blank" href="/" title="Foody App trên Mobile"
                            onclick="ga('ads.send', 'event', 'Banner trang chu', 'Click', 'Foody App tren Mobile');"
                            tabindex="0">
                            <img src="img/foody_banner.jpg">
                            <img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                onload="ga('ads.send', 'event', 'Banner trang chu', 'Impression', 'Foody App tren Mobile');"
                                style="width:0;height:0;">
                        </a>
                    </div>
                    <div class="banner-caption">
                        <div class="banner-caption-desc">
                            <p>Khám phá, đặt bàn, giao tận nơi</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--
    <div class="home-banner-loading"></div>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.home-banner-container').slick({
                centerMode: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                variableWidth: true,
                swipeToSlide: true,
                autoplay: true,
                autoplaySpeed: 5000,
                //arrows: false,
                responsive: [
                    {
                        breakpoint: 700,
                        settings: {
                            draggable: true,
                            variableWidth: false,
                            centerPadding: '0px',
                        }
                    }
                ]
            });
            var m = ($(window).width() - 685) / 2 - 50;
            $('.slick-prev').css('left', m + 'px');
            $('.slick-next').css('right', m + 'px');
            $('.home-banner-container').css('display', 'block');
        });
    </script> -->
    </div>

    <!-- Phần home page-->

    <div class="home-page-2017 ng-scope" ng-controller="HomeMainCtrl">
        <div class="foody-wapper">
            <div class="user-history-delivery">
                <script src="/scripts/delivery/countingdown.js"></script>
            </div>
            <style>
            .c-dropdown-container {
                position: relative;
            }

            .c-dropdown {
                left: 0 !important;
                min-width: 180px !important;
                position: absolute !important;
                top: 100% !important;
                z-index: 20 !important;
                background-color: #fff !important;
                border-radius: 1px !important;
                box-shadow: 0 2px 3px rgba(10, 10, 10, .1), 0 0 0 1px rgba(10, 10, 10, .1) !important;
                height: auto !important;
            }

            .c-dropdown-container .c-dropdown li {
                display: block !important;
                padding: 0 !important;
                position: relative !important;
                border-bottom: 1px solid #eae9e9;
            }

            .c-dropdown-container .c-dropdown li a,
            .c-dropdown-container .c-dropdown li a span {
                white-space: nowrap !important;
                color: #4a4a4a !important;
                display: block !important;
                font-size: 14px !important;
                line-height: 1.5 !important;
                padding: 8px 10px !important;
            }

            .c-dropdown-container .c-dropdown li a:hover {
                background-color: #f5f5f5;
                color: #0a0a0a;
            }



            .home-page-2017 .box-group .n-header .nav-box ul {
                overflow: visible;
            }

            .banner-mini-box-container {
                width: 100%;
                margin: 10px auto -10px;
                padding-left: 0;
                padding-right: 0;
                display: block;
                float: left;
                width: 100%;
                z-index: 1;
                position: relative;
            }

            .banner-mini-box {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-flow: row wrap;
                flex-flow: row wrap;
                margin-left: -5px;
                margin-right: -5px;
            }

            .banner-mini-box-item {
                padding: 0 5px;
                -webkit-box-flex: 1;
                -ms-flex: 1 1 50%;
                flex: 1 1 50%;
                max-width: 50%;
            }

            .banner-mini-box-item .banner img {
                width: 100%;
            }

            .txt-orangen {
                padding: 9px 0 4px;
                font-weight: 700;
                font-size: 12px;
            }

            .card-view-more {
                font-size: 12px;
                color: #959595;
                text-overflow: ellipsis;
                white-space: nowrap;
                overflow: hidden;
                padding-top: 5px;
            }

            .home-page-2017 .box-group .n-listitems .items .info {
                height: 60px;
            }

            .opentime-status {
                position: absolute;
                top: -2px;
                left: -2px;
                z-index: 1;
            }

            .opentime-status .online {
                border-radius: 50%;
                cursor: pointer;
                width: 15px;
                height: 15px;
                display: block;
                position: relative;
                z-index: 2;
            }
            </style>

            <div id="box-delivery" class="box-group delivery ng-scope" ng-controller="DeliveryPythonCtrl"
                ng-init="Init({CityId:'218'})" ng-show="Cate.Items.length>0" style="">
                <div class="n-header">
                    <div class="avatar-box">
                        <div class="avatar"></div>
                        <div class="title">Giao tận nơi</div>
                    </div>
                    <div class="nav-box">
                        <ul style="white-space: nowrap;">
                            <li ng-class="{'active':IsActiveCate(-1)}" ng-click="CateClick({id:-1})" class="active"
                                style="">
                                <a href="javascript:void(0)">
                                    <span>Deal hôm nay</span>
                                </a>
                            </li>
                            <!-- ngRepeat: cat in Cate.Items| limitTo : 6 -->
                            <li ng-repeat="cat in Cate.Items| limitTo : 6" ng-class="{'active':IsActiveCate(cat.id)}"
                                ng-click="CateClick(cat)" class="ng-scope" style="">
                                <a href="javascript:void(0)">
                                    <span ng-bind="cat.name" class="ng-binding">Tất cả</span>
                                </a>
                            </li><!-- end ngRepeat: cat in Cate.Items| limitTo : 6 -->
                            <li ng-repeat="cat in Cate.Items| limitTo : 6" ng-class="{'active':IsActiveCate(cat.id)}"
                                ng-click="CateClick(cat)" class="ng-scope">
                                <a href="javascript:void(0)">
                                    <span ng-bind="cat.name" class="ng-binding">Đồ ăn</span>
                                </a>
                            </li><!-- end ngRepeat: cat in Cate.Items| limitTo : 6 -->
                            <li ng-repeat="cat in Cate.Items| limitTo : 6" ng-class="{'active':IsActiveCate(cat.id)}"
                                ng-click="CateClick(cat)" class="ng-scope">
                                <a href="javascript:void(0)">
                                    <span ng-bind="cat.name" class="ng-binding">Đồ uống</span>
                                </a>
                            </li><!-- end ngRepeat: cat in Cate.Items| limitTo : 6 -->
                            <li ng-repeat="cat in Cate.Items| limitTo : 6" ng-class="{'active':IsActiveCate(cat.id)}"
                                ng-click="CateClick(cat)" class="ng-scope">
                                <a href="javascript:void(0)">
                                    <span ng-bind="cat.name" class="ng-binding">Đồ chay</span>
                                </a>
                            </li><!-- end ngRepeat: cat in Cate.Items| limitTo : 6 -->
                            <li ng-repeat="cat in Cate.Items| limitTo : 6" ng-class="{'active':IsActiveCate(cat.id)}"
                                ng-click="CateClick(cat)" class="ng-scope">
                                <a href="javascript:void(0)">
                                    <span ng-bind="cat.name" class="ng-binding">Bánh kem</span>
                                </a>
                            </li><!-- end ngRepeat: cat in Cate.Items| limitTo : 6 -->
                            <li ng-repeat="cat in Cate.Items| limitTo : 6" ng-class="{'active':IsActiveCate(cat.id)}"
                                ng-click="CateClick(cat)" class="ng-scope">
                                <a href="javascript:void(0)">
                                    <span ng-bind="cat.name" class="ng-binding">Tráng miệng</span>
                                </a>
                            </li><!-- end ngRepeat: cat in Cate.Items| limitTo : 6 -->
                            <!-- ngIf: Cate.Items.length > 6 -->
                            <li class="c-dropdown-container ng-scope" ng-if="Cate.Items.length > 6"
                                ng-class="{'active':IsActiveCate(-10)}" style="">

                                <a href="javascript:void(0)" ng-click="ViewMoreCateClick()"><span ng-bind="LoadMoreText"
                                        class="ng-binding">Xem thêm</span> <i class="fa fa-angle-down"></i> </a>
                                <!-- ngIf: IsShowMore -->

                            </li><!-- end ngIf: Cate.Items.length > 6 -->
                        </ul>
                    </div>
                </div>
                <!-- Phần đồ ăn.........................-->
                <div class="n-listitems" ng-class="{'loading':ListItems.IsLoading,'less':ListItems.Items.length<=5}"
                    style="">
                    <!-- ngIf: ListItems.IsLoading && ListItems.Items.length>5 -->
                    <!-- ngIf: ListItems.IsLoading && ListItems.Items.length<=5 -->
                    <!-- ngIf: !ListItems.IsLoading -->
                    <ul class="items ng-scope ng-enter-prepare" ng-if="!ListItems.IsLoading">
                        <!-- ngRepeat: item in ListItems.Items -->
                        <li ng-repeat="item in ListItems.Items" class="ng-scope">
                            <!-- ngIf: item.brand && item.brand.restaurant_count>1 -->
                            <!-- ngIf: !(item.brand && item.brand.restaurant_count>1) -->
                            <div ng-if="!(item.brand &amp;&amp; item.brand.restaurant_count>1)" class="ng-scope">
                                <a class="avatar" title="Bánh Tiramisu - Shop Online" ng-href="" target="_blank"
                                    href="">
                                    <img ng-src="https://images.foody.vn/res/g87/863630/prof/s750x400/foody-upload-api-foody-mobile-tiramisu-1-jpg-181212180515.jpg"
                                        alt="Bánh Tiramisu - Shop Online"
                                        src="https://images.foody.vn/res/g87/863630/prof/s750x400/foody-upload-api-foody-mobile-tiramisu-1-jpg-181212180515.jpg">
                                </a>
                                <a title="Bánh Tiramisu - Shop Online" ng-href="" target="_blank" rel="nofollow"
                                    href="">
                                    <div class="name limit-text">
                                        <span ng-show="item.is_quality_merchant" class="quality-merchant ng-hide"
                                            title="Đây là một trong những địa điểm được đánh giá tốt nhất trên hệ thống ShopeeFood"></span>
                                        <span ng-bind="item.name" class="none-quality-text ng-binding"
                                            ng-class="{'quality-merchant-text':item.is_quality_merchant}"
                                            title="Bánh Tiramisu - Shop Online">Bánh Tiramisu - Shop Online</span>
                                    </div>
                                    <div class="address limit-text ng-binding" ng-bind="item.address"
                                        title="180 Xã Đàn, Đống Đa, Hà Nội">180 Xã Đàn, Đống Đa, Hà Nội</div>
                                </a>
                            </div><!-- end ngIf: !(item.brand && item.brand.restaurant_count>1) -->
                            <div class="info limit-text" ng-class="{'highlight':item.promotion_title}">
                                <i class="fa fa-tag ng-hide"
                                    style="color: red; font-weight: 900; display: inline-block;padding-right: 5px;"
                                    ng-show="item.promotion_title"></i>
                                <label ng-bind-html="BindCategoriesPython(item)" class="ng-binding">Shop Online</label>
                            </div>
                        </li><!-- end ngRepeat: item in ListItems.Items -->
                        <li ng-repeat="item in ListItems.Items" class="ng-scope">
                            <!-- ngIf: item.brand && item.brand.restaurant_count>1 -->
                            <div ng-if="item.brand &amp;&amp; item.brand.restaurant_count>1" class="ng-scope">
                                <a class="avatar" title="Lẩu Đức Trọc" ng-href="" target="_blank" href="">
                                    <img ng-src="https://images.foody.vn/res/g30/296509/prof/s750x400/foody-mobile-duc1-jpg.jpg"
                                        alt="Lẩu Đức Trọc"
                                        src="https://images.foody.vn/res/g30/296509/prof/s750x400/foody-mobile-duc1-jpg.jpg">
                                </a>
                                <a title="Lẩu Đức Trọc" ng-href="" target="_blank" rel="nofollow" href="">
                                    <div class="name limit-text">
                                        <span ng-show="item.is_quality_merchant" class="quality-merchant ng-hide"
                                            title="Đây là một trong những địa điểm được đánh giá tốt nhất trên hệ thống ShopeeFood"></span>
                                        <span ng-bind="item.name" title="Lẩu Đức Trọc - Tây Sơn"
                                            class="none-quality-text ng-binding"
                                            ng-class="{'quality-merchant-text':item.is_quality_merchant}">Lẩu Đức Trọc -
                                            Tây Sơn</span>
                                    </div>

                                    <div class="address limit-text ng-binding" ng-bind="item.address"
                                        title="61 Ngõ 298 Tây Sơn, Đống Đa, Hà Nội">61 Ngõ 298 Tây Sơn, Đống Đa, Hà Nội
                                    </div>
                                </a>
                            </div><!-- end ngIf: item.brand && item.brand.restaurant_count>1 -->
                            <!-- ngIf: !(item.brand && item.brand.restaurant_count>1) -->
                            <div class="info limit-text" ng-class="{'highlight':item.promotion_title}">
                                <i class="fa fa-tag ng-hide"
                                    style="color: red; font-weight: 900; display: inline-block;padding-right: 5px;"
                                    ng-show="item.promotion_title"></i>
                                <label ng-bind-html="BindCategoriesPython(item)" class="ng-binding">Restaurant</label>
                            </div>
                        </li><!-- end ngRepeat: item in ListItems.Items -->
                        <li ng-repeat="item in ListItems.Items" class="ng-scope">
                            <!-- ngIf: item.brand && item.brand.restaurant_count>1 -->
                            <!-- ngIf: !(item.brand && item.brand.restaurant_count>1) -->
                            <div ng-if="!(item.brand &amp;&amp; item.brand.restaurant_count>1)" class="ng-scope">
                                <a class="avatar" title="Lẩu Đức Trọc - Đường Láng" ng-href="" target="_blank" href="">
                                    <img ng-src="https://images.foody.vn/res/g75/747170/prof/s750x400/foody-upload-api-foody-mobile-1-jpg-180606103333.jpg"
                                        alt="Lẩu Đức Trọc - Đường Láng"
                                        src="https://images.foody.vn/res/g75/747170/prof/s750x400/foody-upload-api-foody-mobile-1-jpg-180606103333.jpg">
                                </a>
                                <a title="Lẩu Đức Trọc - Đường Láng" ng-href="" target="_blank" rel="nofollow" href="">
                                    <div class="name limit-text">
                                        <span ng-show="item.is_quality_merchant" class="quality-merchant ng-hide"
                                            title="Đây là một trong những địa điểm được đánh giá tốt nhất trên hệ thống ShopeeFood"></span>
                                        <span ng-bind="item.name" class="none-quality-text ng-binding"
                                            ng-class="{'quality-merchant-text':item.is_quality_merchant}"
                                            title="Lẩu Đức Trọc - Đường Láng">Lẩu Đức Trọc - Đường Láng</span>
                                    </div>
                                    <div class="address limit-text ng-binding" ng-bind="item.address"
                                        title="790 Đường Láng, Đống Đa, Hà Nội">790 Đường Láng, Đống Đa, Hà Nội</div>
                                </a>
                            </div><!-- end ngIf: !(item.brand && item.brand.restaurant_count>1) -->
                            <div class="info limit-text" ng-class="{'highlight':item.promotion_title}">
                                <i class="fa fa-tag ng-hide"
                                    style="color: red; font-weight: 900; display: inline-block;padding-right: 5px;"
                                    ng-show="item.promotion_title"></i>
                                <label ng-bind-html="BindCategoriesPython(item)" class="ng-binding">Boozer</label>
                            </div>
                        </li><!-- end ngRepeat: item in ListItems.Items -->
                        <li ng-repeat="item in ListItems.Items" class="ng-scope">
                            <!-- ngIf: item.brand && item.brand.restaurant_count>1 -->
                            <div ng-if="item.brand &amp;&amp; item.brand.restaurant_count>1" class="ng-scope">
                                <a class="avatar" title="Trà sữa Tocotoco Phố Xốm" ng-href="" target="_blank" href="">
                                    <img ng-src="https://images.foody.vn/res/g67/662390/prof/s750x400/foody-upload-api-foody-mobile-6ec017c3-c232-45fb-8-200429162344.jpg"
                                        alt="Trà sữa Tocotoco Phố Xốm"
                                        src="https://images.foody.vn/res/g67/662390/prof/s750x400/foody-upload-api-foody-mobile-6ec017c3-c232-45fb-8-200429162344.jpg">
                                </a>
                                <a title="Trà sữa Tocotoco Phố Xốm" ng-href="" target="_blank" rel="nofollow" href="">
                                    <div class="name limit-text">
                                        <span ng-show="item.is_quality_merchant" class="quality-merchant"
                                            title="Đây là một trong những địa điểm được đánh giá tốt nhất trên hệ thống ShopeeFood"></span>
                                        <span ng-bind="item.name" title="Trà Sữa Tocotoco - Ngọc Hồi"
                                            class="none-quality-text ng-binding quality-merchant-text"
                                            ng-class="{'quality-merchant-text':item.is_quality_merchant}">Trà Sữa
                                            Tocotoco - Ngọc Hồi</span>
                                    </div>

                                    <div class="address limit-text ng-binding" ng-bind="item.address"
                                        title="Km13 QL1A Ngọc Hồi, Thanh Trì, Hà Nội">Km13 QL1A Ngọc Hồi, Thanh Trì, Hà
                                        Nội</div>
                                </a>
                            </div><!-- end ngIf: item.brand && item.brand.restaurant_count>1 -->
                            <!-- ngIf: !(item.brand && item.brand.restaurant_count>1) -->
                            <div class="info limit-text" ng-class="{'highlight':item.promotion_title}">
                                <i class="fa fa-tag ng-hide"
                                    style="color: red; font-weight: 900; display: inline-block;padding-right: 5px;"
                                    ng-show="item.promotion_title"></i>
                                <label ng-bind-html="BindCategoriesPython(item)"
                                    class="ng-binding">Coffee/Dessert</label>
                            </div>
                        </li><!-- end ngRepeat: item in ListItems.Items -->
                        <li ng-repeat="item in ListItems.Items" class="ng-scope">
                            <!-- ngIf: item.brand && item.brand.restaurant_count>1 -->
                            <!-- ngIf: !(item.brand && item.brand.restaurant_count>1) -->
                            <div ng-if="!(item.brand &amp;&amp; item.brand.restaurant_count>1)" class="ng-scope">
                                <a class="avatar"
                                    title="Khoa Nguyễn - Nước Ép, Sinh Tố &amp; Cóc Xoài Bao Tử - Shop Online"
                                    ng-href="" target="_blank" href="">
                                    <img ng-src="https://images.foody.vn/res/g86/853661/prof/s750x400/foody-upload-api-foody-mobile-khoa-nguyen-jpg-181127171409.jpg"
                                        alt="Khoa Nguyễn - Nước Ép, Sinh Tố &amp; Cóc Xoài Bao Tử - Shop Online"
                                        src="https://images.foody.vn/res/g86/853661/prof/s750x400/foody-upload-api-foody-mobile-khoa-nguyen-jpg-181127171409.jpg">
                                </a>
                                <a title="Khoa Nguyễn - Nước Ép, Sinh Tố &amp; Cóc Xoài Bao Tử - Shop Online" ng-href=""
                                    target="_blank" rel="nofollow" href="">
                                    <div class="name limit-text">
                                        <span ng-show="item.is_quality_merchant" class="quality-merchant"
                                            title="Đây là một trong những địa điểm được đánh giá tốt nhất trên hệ thống ShopeeFood"></span>
                                        <span ng-bind="item.name"
                                            class="none-quality-text ng-binding quality-merchant-text"
                                            ng-class="{'quality-merchant-text':item.is_quality_merchant}"
                                            title="Khoa Nguyễn - Nước Ép, Sinh Tố &amp; Cóc Xoài Bao Tử - Shop Online">Khoa
                                            Nguyễn - Nước Ép, Sinh Tố &amp; Cóc Xoài Bao Tử - Shop Online</span>
                                    </div>
                                    <div class="address limit-text ng-binding" ng-bind="item.address"
                                        title="298 Đê La Thành Nhỏ, Đống Đa, Hà Nội">298 Đê La Thành Nhỏ, Đống Đa, Hà
                                        Nội</div>
                                </a>
                            </div><!-- end ngIf: !(item.brand && item.brand.restaurant_count>1) -->
                            <div class="info limit-text" ng-class="{'highlight':item.promotion_title}">
                                <i class="fa fa-tag ng-hide"
                                    style="color: red; font-weight: 900; display: inline-block;padding-right: 5px;"
                                    ng-show="item.promotion_title"></i>
                                <label ng-bind-html="BindCategoriesPython(item)" class="ng-binding">Shop Online</label>
                            </div>
                        </li><!-- end ngRepeat: item in ListItems.Items -->
                        <li ng-repeat="item in ListItems.Items" class="ng-scope">
                            <!-- ngIf: item.brand && item.brand.restaurant_count>1 -->
                            <!-- ngIf: !(item.brand && item.brand.restaurant_count>1) -->
                            <div ng-if="!(item.brand &amp;&amp; item.brand.restaurant_count>1)" class="ng-scope">
                                <a class="avatar" title="Bếp Tâm An - Cơm Văn Phòng Cao Cấp &amp; Ăn Vặt Online"
                                    ng-href="" target="_blank" href="">
                                    <img ng-src="https://images.foody.vn/res/g96/950657/prof/s750x400/image-7d8e6455-200910115820.jpeg"
                                        alt="Bếp Tâm An - Cơm Văn Phòng Cao Cấp &amp; Ăn Vặt Online"
                                        src="https://images.foody.vn/res/g96/950657/prof/s750x400/image-7d8e6455-200910115820.jpeg">
                                </a>
                                <a title="Bếp Tâm An - Cơm Văn Phòng Cao Cấp &amp; Ăn Vặt Online" ng-href=""
                                    target="_blank" rel="nofollow" href="">
                                    <div class="name limit-text">
                                        <span ng-show="item.is_quality_merchant" class="quality-merchant"
                                            title="Đây là một trong những địa điểm được đánh giá tốt nhất trên hệ thống ShopeeFood"></span>
                                        <span ng-bind="item.name"
                                            class="none-quality-text ng-binding quality-merchant-text"
                                            ng-class="{'quality-merchant-text':item.is_quality_merchant}"
                                            title="Bếp Tâm An - Cơm Văn Phòng Cao Cấp &amp; Ăn Vặt Online">Bếp Tâm An -
                                            Cơm Văn Phòng Cao Cấp &amp; Ăn Vặt Online</span>
                                    </div>
                                    <div class="address limit-text ng-binding" ng-bind="item.address"
                                        title="6 Ngách 82/96, Ngõ 166 Kim Mã (Cạnh Nhà Nghỉ Thuỳ Linh), Ba Đình, Hà Nội">
                                        6 Ngách 82/96, Ngõ 166 Kim Mã (Cạnh Nhà Nghỉ Thuỳ Linh), Ba Đình, Hà Nội</div>
                                </a>
                            </div><!-- end ngIf: !(item.brand && item.brand.restaurant_count>1) -->
                            <div class="info limit-text" ng-class="{'highlight':item.promotion_title}">
                                <i class="fa fa-tag ng-hide"
                                    style="color: red; font-weight: 900; display: inline-block;padding-right: 5px;"
                                    ng-show="item.promotion_title"></i>
                                <label ng-bind-html="BindCategoriesPython(item)" class="ng-binding">Shop Online</label>
                            </div>
                        </li><!-- end ngRepeat: item in ListItems.Items -->
                        <li ng-repeat="item in ListItems.Items" class="ng-scope">
                            <!-- ngIf: item.brand && item.brand.restaurant_count>1 -->
                            <div ng-if="item.brand &amp;&amp; item.brand.restaurant_count>1" class="ng-scope">
                                <a class="avatar" title="Phương Dung" ng-href="" target="_blank" href="">
                                    <img ng-src="https://images.foody.vn/res/g15/147172/prof/s750x400/file_restaurant_photo_nw9y_16117-c696996b-210128000015.jpeg"
                                        alt="Phương Dung"
                                        src="https://images.foody.vn/res/g15/147172/prof/s750x400/file_restaurant_photo_nw9y_16117-c696996b-210128000015.jpeg">
                                </a>
                                <a title="Phương Dung" ng-href="" target="_blank" rel="nofollow" href="">
                                    <div class="name limit-text">
                                        <span ng-show="item.is_quality_merchant" class="quality-merchant"
                                            title="Đây là một trong những địa điểm được đánh giá tốt nhất trên hệ thống ShopeeFood"></span>
                                        <span ng-bind="item.name"
                                            title="Phương Dung - Cơm Đảo Gà Rang &amp; Chim Quay - Tống Duy Tân"
                                            class="none-quality-text ng-binding quality-merchant-text"
                                            ng-class="{'quality-merchant-text':item.is_quality_merchant}">Phương Dung -
                                            Cơm Đảo Gà Rang &amp; Chim Quay - Tống Duy Tân</span>
                                    </div>

                                    <div class="address limit-text ng-binding" ng-bind="item.address"
                                        title="24 Tống Duy Tân, Hoàn Kiếm, Hà Nội">24 Tống Duy Tân, Hoàn Kiếm, Hà Nội
                                    </div>
                                </a>
                            </div><!-- end ngIf: item.brand && item.brand.restaurant_count>1 -->
                            <!-- ngIf: !(item.brand && item.brand.restaurant_count>1) -->
                            <div class="info limit-text" ng-class="{'highlight':item.promotion_title}">
                                <i class="fa fa-tag ng-hide"
                                    style="color: red; font-weight: 900; display: inline-block;padding-right: 5px;"
                                    ng-show="item.promotion_title"></i>
                                <label ng-bind-html="BindCategoriesPython(item)" class="ng-binding">Bistro</label>
                            </div>
                        </li><!-- end ngRepeat: item in ListItems.Items -->
                        <li ng-repeat="item in ListItems.Items" class="ng-scope">
                            <!-- ngIf: item.brand && item.brand.restaurant_count>1 -->
                            <div ng-if="item.brand &amp;&amp; item.brand.restaurant_count>1" class="ng-scope">
                                <a class="avatar" title="Cơm Ngon Hà Nội - HN" ng-href="" target="_blank" href="">
                                    <img ng-src="https://images.foody.vn/res/g109/1082221/prof/s750x400/foody-upload-api-foody-mobile-fo-b1161918-210610162812.jpeg"
                                        alt="Cơm Ngon Hà Nội - HN"
                                        src="https://images.foody.vn/res/g109/1082221/prof/s750x400/foody-upload-api-foody-mobile-fo-b1161918-210610162812.jpeg">
                                </a>
                                <a title="Cơm Ngon Hà Nội - HN" ng-href="" target="_blank" rel="nofollow" href="">
                                    <div class="name limit-text">
                                        <span ng-show="item.is_quality_merchant" class="quality-merchant ng-hide"
                                            title="Đây là một trong những địa điểm được đánh giá tốt nhất trên hệ thống ShopeeFood"></span>
                                        <span ng-bind="item.name" title="Cơm Ngon Hà Nội - Trung Hòa"
                                            class="none-quality-text ng-binding"
                                            ng-class="{'quality-merchant-text':item.is_quality_merchant}">Cơm Ngon Hà
                                            Nội - Trung Hòa</span>
                                    </div>

                                    <div class="address limit-text ng-binding" ng-bind="item.address"
                                        title="N6C Trung Hòa Nhân Chính, Thanh Xuân, Hà Nội">N6C Trung Hòa Nhân Chính,
                                        Thanh Xuân, Hà Nội</div>
                                </a>
                            </div><!-- end ngIf: item.brand && item.brand.restaurant_count>1 -->
                            <!-- ngIf: !(item.brand && item.brand.restaurant_count>1) -->
                            <div class="info limit-text" ng-class="{'highlight':item.promotion_title}">
                                <i class="fa fa-tag ng-hide"
                                    style="color: red; font-weight: 900; display: inline-block;padding-right: 5px;"
                                    ng-show="item.promotion_title"></i>
                                <label ng-bind-html="BindCategoriesPython(item)" class="ng-binding">Bistro</label>
                            </div>
                        </li><!-- end ngRepeat: item in ListItems.Items -->
                        <li ng-repeat="item in ListItems.Items" class="ng-scope">
                            <!-- ngIf: item.brand && item.brand.restaurant_count>1 -->
                            <!-- ngIf: !(item.brand && item.brand.restaurant_count>1) -->
                            <div ng-if="!(item.brand &amp;&amp; item.brand.restaurant_count>1)" class="ng-scope">
                                <a class="avatar" title="Lê Làn - Cháo, Mì Trộn &amp; Đồ Ăn Vặt Online" ng-href=""
                                    target="_blank" href="">
                                    <img ng-src="https://images.foody.vn/res/g99/980411/prof/s750x400/foody-upload-api-foody-mobile-z1617302029394_dd190-191115105744.jpg"
                                        alt="Lê Làn - Cháo, Mì Trộn &amp; Đồ Ăn Vặt Online"
                                        src="https://images.foody.vn/res/g99/980411/prof/s750x400/foody-upload-api-foody-mobile-z1617302029394_dd190-191115105744.jpg">
                                </a>
                                <a title="Lê Làn - Cháo, Mì Trộn &amp; Đồ Ăn Vặt Online" ng-href="" target="_blank"
                                    rel="nofollow" href="">
                                    <div class="name limit-text">
                                        <span ng-show="item.is_quality_merchant" class="quality-merchant"
                                            title="Đây là một trong những địa điểm được đánh giá tốt nhất trên hệ thống ShopeeFood"></span>
                                        <span ng-bind="item.name"
                                            class="none-quality-text ng-binding quality-merchant-text"
                                            ng-class="{'quality-merchant-text':item.is_quality_merchant}"
                                            title="Lê Làn - Cháo, Mì Trộn &amp; Đồ Ăn Vặt Online">Lê Làn - Cháo, Mì Trộn
                                            &amp; Đồ Ăn Vặt Online</span>
                                    </div>
                                    <div class="address limit-text ng-binding" ng-bind="item.address"
                                        title="Nhà 1 Ngách 189 Ngõ 205 Xuân Đỉnh, P. Xuân Đỉnh, Bắc Từ Liêm, Hà Nội">Nhà
                                        1 Ngách 189 Ngõ 205 Xuân Đỉnh, P. Xuân Đỉnh, Bắc Từ Liêm, Hà Nội</div>
                                </a>
                            </div><!-- end ngIf: !(item.brand && item.brand.restaurant_count>1) -->
                            <div class="info limit-text" ng-class="{'highlight':item.promotion_title}">
                                <i class="fa fa-tag ng-hide"
                                    style="color: red; font-weight: 900; display: inline-block;padding-right: 5px;"
                                    ng-show="item.promotion_title"></i>
                                <label ng-bind-html="BindCategoriesPython(item)" class="ng-binding">Shop Online</label>
                            </div>
                        </li><!-- end ngRepeat: item in ListItems.Items -->
                        <li ng-repeat="item in ListItems.Items" class="ng-scope">
                            <!-- ngIf: item.brand && item.brand.restaurant_count>1 -->
                            <!-- ngIf: !(item.brand && item.brand.restaurant_count>1) -->
                            <div ng-if="!(item.brand &amp;&amp; item.brand.restaurant_count>1)" class="ng-scope">
                                <a class="avatar" title="Chè Sầu Liên &amp; Dừa Dầm - Triều Khúc" ng-href=""
                                    target="_blank" href="">
                                    <img ng-src="https://images.foody.vn/res/g22/219293/prof/s750x400/foody-upload-api-foody-mobile-che-duong-thom-190221151020.jpg"
                                        alt="Chè Sầu Liên &amp; Dừa Dầm - Triều Khúc"
                                        src="https://images.foody.vn/res/g22/219293/prof/s750x400/foody-upload-api-foody-mobile-che-duong-thom-190221151020.jpg">
                                </a>
                                <a title="Chè Sầu Liên &amp; Dừa Dầm - Triều Khúc" ng-href="" target="_blank"
                                    rel="nofollow" href="">
                                    <div class="name limit-text">
                                        <span ng-show="item.is_quality_merchant" class="quality-merchant"
                                            title="Đây là một trong những địa điểm được đánh giá tốt nhất trên hệ thống ShopeeFood"></span>
                                        <span ng-bind="item.name"
                                            class="none-quality-text ng-binding quality-merchant-text"
                                            ng-class="{'quality-merchant-text':item.is_quality_merchant}"
                                            title="Chè Sầu Liên &amp; Dừa Dầm - Triều Khúc">Chè Sầu Liên &amp; Dừa Dầm -
                                            Triều Khúc</span>
                                    </div>
                                    <div class="address limit-text ng-binding" ng-bind="item.address"
                                        title="1 Ngõ 66A Triều Khúc, Thanh Xuân, Hà Nội">1 Ngõ 66A Triều Khúc, Thanh
                                        Xuân, Hà Nội</div>
                                </a>
                            </div><!-- end ngIf: !(item.brand && item.brand.restaurant_count>1) -->
                            <div class="info limit-text" ng-class="{'highlight':item.promotion_title}">
                                <i class="fa fa-tag ng-hide"
                                    style="color: red; font-weight: 900; display: inline-block;padding-right: 5px;"
                                    ng-show="item.promotion_title"></i>
                                <label ng-bind-html="BindCategoriesPython(item)" class="ng-binding">Street food</label>
                            </div>
                        </li><!-- end ngRepeat: item in ListItems.Items -->
                        <!-- ngIf: ListItems.Items.length==0 -->
                    </ul><!-- end ngIf: !ListItems.IsLoading -->
                    <!-- ngIf: ShowPrevPython() -->
                    <!-- ngIf: ShowNextPython() --><i class="li-page fa fa-angle-right ng-scope ng-enter-prepare"
                        ng-click="ListNextPython()" ng-if="ShowNextPython()"
                        ng-class="{'less':ListItems.Items.length<=5}"></i><!-- end ngIf: ShowNextPython() -->
                </div>



            </div>


            <footer class="footer" id="footer-in-bottom" style="position: relative;z-index: 11;">
                <div class="footer-fixed">
                    <div class="footer-min">
                        <div class="footer-left-box" style="display:none;">
                            <div class="footer-titles">Cài đặt</div>
                            <ul>
                                <li style="width:100%;float:left;margin:3px 0 7px;">
                                    <div style="float: left;padding:3px 5px 0 0;color:#666;width:100px;">Tỉnh thành
                                    </div>
                                    <div style="float: left;">
                                        <dl id="f_dropdown" class="drop_seeall">
                                            <dt>
                                                <a href="javascript:void(0)" style="cursor:default;"><span class="text"
                                                        style="cursor:default;">Hà Nội</span></a>
                                            </dt>
                                        </dl>
                                    </div>
                                </li>
                                <li style="width:100%;float:left;margin:3px 0 7px;">
                                    <div style="float: left;padding-right:5px;color:#666; width:100px;">Ngôn ngữ</div>
                                    <div class="footer-language-chooser">

                                        <a href="javascript:void(0)" style="cursor:default;" rel="nofollow">
                                            Tiếng Việt
                                        </a>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <div class="footer-middle-box">
                            <div class="footer-titles">Khám phá</div>
                            <ul>

                                <li><a href="/ung-dung-mobile" rel="nofollow">Ứng dụng Mobile</a></li>

                                <li><a href="javascript:void(0)" class="add-new-reviews" rel="nofollow">Viết bình
                                        luận</a></li>
                                <li><a href="javascript:void(0)" class="add-new-list" rel="nofollow">Tạo bộ sưu tập</a>
                                </li>

                                <li><a href="/chinh-sach-thuong" rel="nofollow">Phần thưởng</a></li>
                                <li><a href="/bao-mat-thong-tin" rel="nofollow">Bảo mật thông tin</a></li>
                                <li><a href="/dieu-khoan-su-dung" rel="nofollow">Quy định</a></li>

                            </ul>
                        </div>
                        <div class="footer-middle-box">
                            <div class="footer-titles">Công ty</div>
                            <ul>
                                <li><a href="/gioi-thieu" rel="nofollow">Giới thiệu</a></li>


                                <li><a href="/tro-giup" rel="nofollow">Trợ giúp</a></li>
                                <li><a href="/jobs" rel="nofollow">Việc làm</a></li>
                                <li><a href="/nha-dau-tu" rel="nofollow">Nhà đầu tư</a></li>
                                <li><a href="/gop-y" rel="nofollow">Góp ý</a></li>

                                <li><a href="/regulation" rel="nofollow">Quy chế</a></li>


                            </ul>
                        </div>
                        <div class="footer-middle-box" style="padding-left: 35px; width: 200px;" id="footer-join">
                            <div class="footer-titles" rel="nofollow">Tham gia trên</div>
                            <ul>
                                <li><a target="_blank" rel="nofollow">Facebook</a></li>
                                <li><a target="_blank" rel="nofollow">Instagram</a></li>
                                <li><a target="_blank" rel="nofollow">Youtube</a></li>
                                <li><a target="_blank" rel="publisher">Google</a></li>
                                <li style="clear: both;">
                                    <a target="_blank" rel="nofollow">
                                        ShopeeFood.vn
                                    </a>
                                </li>
                                <li style="clear: both;">
                                    <a target="_blank" rel="nofollow">
                                        NowPOS
                                    </a>
                                    - Phần mềm quản lý
                                </li>
                            </ul>
                        </div>
                        <div class="footer-middle-box" style="padding-left: 35px; width: 160px;">
                            <div class="footer-titles">Giấy phép</div>
                            <ul>
                                <li><a>MXH 363/GP-BTTTT</a></li>

                                <li>
                                    <a target="_blank" rel="nofollow">
                                        <img src="/Foody.vn/img/bocongthuong.jpg" width="160" style="margin-left: -5px;"
                                            alt="logo-da-dang-ky-bo-cong-thuong">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-middle-box" style="padding-left: 35px; width: 160px;">

                            <script language="JavaScript" src="https://dunsregistered.dnb.com" type="text/javascript">
                            </script><iframe id="Iframe1"
                                src="https://dunsregistered.dnb.com/SealAuthentication.aspx?Cid=1" width="114px"
                                height="97px" frameborder="0" scrolling="no" allowtransparency="true"></iframe>
                        </div>
                    </div>

                </div>
                <div class="footer-country-list">
                    <span style="color: #999; clear: both; display: block;">
                        Công Ty Cổ Phần Foody, Lầu G, Tòa nhà Jabes 1, 244 đường Cống Quỳnh, phường Phạm Ngũ Lão, Quận
                        1, TP.HCM
                    </span>

                    <span id="foody-hot-line" style="color: #999; clear: both; display: block;">
                        Điện thoại: 1900 2042
                        Email: info@foody.vn
                    </span>

                    <span style="color: #999; clear: both; display: block;">
                        Giấy CN ĐKDN số 0311828036 do Sở Kế hoạch và Đầu tư TP.HCM cấp ngày 11/6/2012, sửa đổi lần thứ
                        23, ngày 10/12/2020
                    </span>
                    <span style="color: #999; clear: both; display: block;">
                        Giấy phép thiết lập MXH trên mạng số 363/GP-BTTTT do Bộ Thông tin và Truyền thông cấp ngày
                        30/6/2016
                        Người chịu trách nhiệm: Đặng Hoàng Minh.
                    </span>



                </div>
                <script>
                function InviteFriend() {

                }
                </script>
            </footer>


</body>

</html>