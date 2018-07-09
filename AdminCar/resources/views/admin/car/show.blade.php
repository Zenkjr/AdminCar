<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link rel="stylesheet" href="{{asset('css/show/showInfo.css')}}">
    <script src="{{asset('js/show/showInfo.js')}}"></script>

    <script src="{{asset('js/app.js')}}"></script>

    <title>Document</title>
</head>
<body>
{{--silder jquery--}}
<div class="container">
    <div class="row">
        <div class="col-sm-8 slider-show">

            <div id="jssor_1">
                <!-- Loading Screen -->
                <div data-u="loading" class="jssorl-009-spin"
                     style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                </div>
                <div data-u="slides"
                     style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
                    @foreach($image as $item)
                        <div data-p="170">
                            <img data-u="image" src="{{$item->url}}"/>
                            <img data-u="thumb" src="{{$item->url}}"/>
                        </div>
                    @endforeach
                </div>
                <!-- Thumbnail Navigator -->
                <div data-u="thumbnavigator" class="jssort101"
                     style="position:absolute;left:0px;bottom:0px;width:980px;height:100px;background-color:#000;"
                     data-autocenter="1" data-scale-bottom="0.75">
                    <div data-u="slides">
                        <div data-u="prototype" class="p" style="width:190px;height:90px;">
                            <div data-u="thumbnailtemplate" class="t"></div>
                            <svg viewbox="0 0 16000 16000" class="cv">
                                <circle class="a" cx="8000" cy="8000" r="3238.1"></circle>
                                <line class="a" x1="6190.5" y1="8000" x2="9809.5" y2="8000"></line>
                                <line class="a" x1="8000" y1="9809.5" x2="8000" y2="6190.5"></line>
                            </svg>
                        </div>
                    </div>
                </div>
                <!-- Arrow Navigator -->
                <div data-u="arrowleft" class="jssora106" style="width:55px;height:55px;top:162px;left:30px;"
                     data-scale="0.75">
                    <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                        <polyline class="a" points="7930.4,5495.7 5426.1,8000 7930.4,10504.3 "></polyline>
                        <line class="a" x1="10573.9" y1="8000" x2="5426.1" y2="8000"></line>
                    </svg>
                </div>
                <div data-u="arrowright" class="jssora106" style="width:55px;height:55px;top:162px;right:30px;"
                     data-scale="0.75">
                    <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                        <polyline class="a" points="8069.6,5495.7 10573.9,8000 8069.6,10504.3 "></polyline>
                        <line class="a" x1="5426.1" y1="8000" x2="10573.9" y2="8000"></line>
                    </svg>
                </div>
            </div>
        </div>
        <div class="col-sm-4" id="info-basic">
            <div class="border p-3">
                <div class="text-center">
                    <h3>Giá: <strong class="text-danger">900</strong> triệu</h3>
                </div>
                <p>Địa chỉ xem xe:</p>
                <h5>AN THỊNH AUTO</h5>
                <p>39 Đường Lê Văn Lương, Trung Hoà, Cầu Giấy, Hà Nội</p>
                <p>99 Đường Nguyễn Chánh, Trung Hoà, Cầu Giấy, Hà Nội</p>
                <div class="text-center">
                    <button type="button" class="btn btn-success">Quan tâm</button>
                </div>
            </div>
        </div>
    </div>
</div>
{{--end slider jquery--}}
<div class="container">
    <!-- Name of car -->
    <h3 class="mt-3 mb-3">Mazda 3 1.5AT 2017</h3>
    <div class="row">
        <div class="col-sm-8 ">

            <!-- Slide -->

        {{--<div id="listImg" class="carousel slide" data-interval="1000">--}}

        {{--<div class="carousel-inner">--}}

        {{--<div class="carousel-item active">--}}
        {{--<img class="d-block w-100 img-big"--}}
        {{--src="{{$image[0]->url}}">--}}
        {{--</div>--}}
        {{--@for ($i = 1; $i < count($image); $i++)--}}
        {{--<div class="carousel-item">--}}
        {{--<img class="d-block w-100 img-big"--}}
        {{--src="{{$image[$i]->url}}">--}}
        {{--</div>--}}
        {{--@foreach($image as $item)--}}
        {{--                        <img src="{{$item->url}}" alt="" style="width: 250px; height: 250px">--}}
        {{--@endfor--}}
        {{----}}
        {{--</div>--}}
        {{--<a class="carousel-control-prev" href="#listImg" role="button" data-slide="prev">--}}
        {{--<span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
        {{--<span class="sr-only">Previous</span>--}}
        {{--</a>--}}
        {{--<a class="carousel-control-next" href="#listImg" role="button" data-slide="next">--}}
        {{--<span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
        {{--<span class="sr-only">Next</span>--}}
        {{--</a>--}}
        {{--</div>--}}

        {{--<ul class="row list-inline mt-3">--}}
        {{--@for ($i = 0; $i < count($image); $i++)--}}
        {{--<li class="col list-inline-item" data-target="#listImg" data-slide-to="{{$i}}">--}}
        {{--<img class="d-block w-100 img-small"--}}
        {{--src="{{$image[$i]->url}}">--}}
        {{--</li>--}}
        {{--@endfor--}}
        {{--</ul>--}}
        <!-- Table detail -->
            <div class="row mt-3" style="font-size: 14px">
                <div class="col-lg-6">
                    <div class="detail-line">
                        <div class="detail-line-lable">Tình trạng</div>
                        <div class="detail-line-value">Đã qua SD</div>
                    </div>
                    <div class="detail-line">
                        <div class="detail-line-lable">Nhãn hiệu</div>
                        <div class="detail-line-value">Cerato 1.6MT</div>
                    </div>
                    <div class="detail-line">
                        <div class="detail-line-lable">Số loại</div>
                        <div class="detail-line-value"></div>
                    </div>
                    <div class="detail-line">
                        <div class="detail-line-lable">Xuất xứ</div>
                        <div class="detail-line-value">Lắp ráp trong nước Việt Nam</div>
                    </div>
                    <div class="detail-line">
                        <div class="detail-line-lable">Năm sản xuất</div>
                        <div class="detail-line-value">2016</div>
                    </div>
                    <div class="detail-line">
                        <div class="detail-line-lable">Màu xe</div>
                        <div class="detail-line-value">Bạc</div>
                    </div>
                    <div class="detail-line">
                        <div class="detail-line-lable">Màu nội thất</div>
                        <div class="detail-line-value">Đen</div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="detail-line">
                        <div class="detail-line-lable">Kiểu dáng</div>
                        <div class="detail-line-value">Sedans</div>
                    </div>
                    <div class="detail-line">
                        <div class="detail-line-lable">Số chỗ ngồi</div>
                        <div class="detail-line-value">5</div>
                    </div>
                    <div class="detail-line">
                        <div class="detail-line-lable">Số cửa</div>
                        <div class="detail-line-value">4</div>
                    </div>
                    <div class="detail-line">
                        <div class="detail-line-lable">Dẫn động</div>
                        <div class="detail-line-value">Một cầu</div>
                    </div>
                    <div class="detail-line">
                        <div class="detail-line-lable">Nhiên liệu</div>
                        <div class="detail-line-value">Xăng</div>
                    </div>
                    <div class="detail-line">
                        <div class="detail-line-lable">Hộp số</div>
                        <div class="detail-line-value">Số sàn</div>
                    </div>
                    <div class="detail-line">
                        <div class="detail-line-lable">Số km đã đi</div>
                        <div class="detail-line-value">22.000</div>
                    </div>
                </div>
            </div>

        </div>

        {{--<div class="col-4">--}}
        {{--<div class="border p-3">--}}
        {{--<div class="text-center">--}}
        {{--<h3>Giá: <strong class="text-danger">900</strong> triệu</h3>--}}
        {{--</div>--}}
        {{--<p>Địa chỉ xem xe:</p>--}}
        {{--<h5>AN THỊNH AUTO</h5>--}}
        {{--<p>39 Đường Lê Văn Lương, Trung Hoà, Cầu Giấy, Hà Nội</p>--}}
        {{--<p>99 Đường Nguyễn Chánh, Trung Hoà, Cầu Giấy, Hà Nội</p>--}}
        {{--<div class="text-center">--}}
        {{--<button type="button" class="btn btn-success">Quan tâm</button>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
    </div>

    <!-- Các mẫu oto tương tự -->
    <div class="row mt-5">
        <h5 class="text-center">Các mẫu ôtô tương tự</h5>
        {{--<div class="row">--}}

        {{--<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mt-3">--}}
        {{--<a href="#">--}}
        {{--<div class="card">--}}
        {{--<img class="card-img-top"--}}
        {{--src="https://www.caranddriver.com/images/17q4/692996/2019-mclaren-senna-hypercar-official-photos-and-info-news-car-and-driver-photo-698055-s-original.jpg">--}}
        {{--<div class="card-body">--}}
        {{--<p class="text-danger"--}}
        {{--style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Huyndai Avente--}}
        {{--1.6MT 2011</p>--}}
        {{--<span class="border text-secondary">2015</span>--}}
        {{--<span class="font-weight-light ml-1 text-secondary" style="font-size: 12px">31.000km</span>--}}
        {{--<span class="text-danger float-right"><strong>359 triệu</strong></span>--}}
        {{--</div>--}}
        {{--<div class="d-flex flex-row p-1">--}}
        {{--<div class="flex-fill text-center border-top border-right" style="font-size: 12px">Số sàn tự--}}
        {{--động--}}
        {{--</div>--}}
        {{--<div class="flex-fill text-success text-center border-top" style="font-size: 12px">Trả trước--}}
        {{--195 triệu--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</a>--}}
        {{--</div>--}}

        {{--<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mt-3">--}}
        {{--<a href="#">--}}
        {{--<div class="card">--}}
        {{--<img class="card-img-top"--}}
        {{--src="https://www.caranddriver.com/images/17q4/692996/2019-mclaren-senna-hypercar-official-photos-and-info-news-car-and-driver-photo-698055-s-original.jpg">--}}
        {{--<div class="card-body">--}}
        {{--<p class="text-danger"--}}
        {{--style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Huyndai Avente--}}
        {{--1.6MT 2011</p>--}}
        {{--<span class="border text-secondary">2015</span>--}}
        {{--<span class="font-weight-light ml-1 text-secondary" style="font-size: 12px">31.000km</span>--}}
        {{--<span class="text-danger float-right"><strong>359 triệu</strong></span>--}}
        {{--</div>--}}
        {{--<div class="d-flex flex-row p-1">--}}
        {{--<div class="flex-fill text-center border-top border-right" style="font-size: 12px">Số sàn tự--}}
        {{--động--}}
        {{--</div>--}}
        {{--<div class="flex-fill text-success text-center border-top" style="font-size: 12px">Trả trước--}}
        {{--195 triệu--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</a>--}}
        {{--</div>--}}

        {{--<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mt-3">--}}
        {{--<a href="#">--}}
        {{--<div class="card">--}}
        {{--<img class="card-img-top"--}}
        {{--src="https://www.caranddriver.com/images/17q4/692996/2019-mclaren-senna-hypercar-official-photos-and-info-news-car-and-driver-photo-698055-s-original.jpg">--}}
        {{--<div class="card-body">--}}
        {{--<p class="text-danger"--}}
        {{--style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Huyndai Avente--}}
        {{--1.6MT 2011</p>--}}
        {{--<span class="border text-secondary">2015</span>--}}
        {{--<span class="font-weight-light ml-1 text-secondary" style="font-size: 12px">31.000km</span>--}}
        {{--<span class="text-danger float-right"><strong>359 triệu</strong></span>--}}
        {{--</div>--}}
        {{--<div class="d-flex flex-row p-1">--}}
        {{--<div class="flex-fill text-center border-top border-right" style="font-size: 12px">Số sàn tự--}}
        {{--động--}}
        {{--</div>--}}
        {{--<div class="flex-fill text-success text-center border-top" style="font-size: 12px">Trả trước--}}
        {{--195 triệu--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</a>--}}
        {{--</div>--}}

        {{--<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mt-3">--}}
        {{--<a href="#">--}}
        {{--<div class="card">--}}
        {{--<img class="card-img-top"--}}
        {{--src="https://www.caranddriver.com/images/17q4/692996/2019-mclaren-senna-hypercar-official-photos-and-info-news-car-and-driver-photo-698055-s-original.jpg">--}}
        {{--<div class="card-body">--}}
        {{--<p class="text-danger"--}}
        {{--style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Huyndai Avente--}}
        {{--1.6MT 2011</p>--}}
        {{--<span class="border text-secondary">2015</span>--}}
        {{--<span class="font-weight-light ml-1 text-secondary" style="font-size: 12px">31.000km</span>--}}
        {{--<span class="text-danger float-right"><strong>359 triệu</strong></span>--}}
        {{--</div>--}}
        {{--<div class="d-flex flex-row p-1">--}}
        {{--<div class="flex-fill text-center border-top border-right" style="font-size: 12px">Số sàn tự--}}
        {{--động--}}
        {{--</div>--}}
        {{--<div class="flex-fill text-success text-center border-top" style="font-size: 12px">Trả trước--}}
        {{--195 triệu--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</a>--}}
        {{--</div>--}}

        {{--</div>--}}
    </div>
</div>
{{--@endif--}}
<script type="text/javascript">jssor_1_slider_init();</script>
</body>
</html>