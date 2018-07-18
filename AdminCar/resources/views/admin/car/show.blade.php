@extends('layout.admin_template')

@section('content')
    <div class="container">
        <h3 class="mt-3 mb-3">{{$car->name}}</h3>
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
                <div class="p-3" style=" border: 1px red solid;">
                    <div class="text-center">
                        <h3>Giá: <strong class="text-danger">{{$car->price}}</strong> triệu</h3>
                    </div>
                    <p>Địa chỉ xem xe:</p>
                    <h5>AN THỊNH AUTO</h5>
                    <p>39 Đường Lê Văn Lương, Trung Hoà, Cầu Giấy, Hà Nội</p>
                    <p>99 Đường Nguyễn Chánh, Trung Hoà, Cầu Giấy, Hà Nội</p>
                </div>
            </div>
        </div>
        <!-- end slider jquery -->

        <!-- Name of car -->
        <div class="row">
            <div class="col-sm-8 ">
                <!-- Table detail -->
                <div class="row mt-3" style="font-size: 14px">
                    <div class="col-lg-6">
                        <div class="detail-line">
                            <div class="detail-line-lable">Nhãn hiệu</div>
                            <div class="detail-line-value">{{$car->brand}}</div>
                        </div>
                        <div class="detail-line">
                            <div class="detail-line-lable">Tình trạng</div>
                            <div class="detail-line-value">{{$car->status}}</div>
                        </div>
                        <div class="detail-line">
                            <div class="detail-line-lable">Mã lực</div>
                            <div class="detail-line-value">{{$car->horse_power}}</div>
                        </div>
                        <div class="detail-line">
                            <div class="detail-line-lable">Xuất xứ</div>
                            <div class="detail-line-value">Lắp ráp tại {{$car->country}}</div>
                        </div>
                        <div class="detail-line">
                            <div class="detail-line-lable">Năm sản xuất</div>
                            <div class="detail-line-value">{{$car->year}}</div>
                        </div>
                        <div class="detail-line">
                            <div class="detail-line-lable">Màu xe</div>
                            <div class="detail-line-value">{{$car->color}}</div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="detail-line">
                            <div class="detail-line-lable">Kiểu dáng</div>
                            <div class="detail-line-value">{{$car->clazz}}</div>
                        </div>
                        <div class="detail-line">
                            <div class="detail-line-lable">Cỡ lốp</div>
                            <div class="detail-line-value">{{$car->tire_size}}</div>
                        </div>
                        <div class="detail-line">
                            <div class="detail-line-lable">Nhiên liệu</div>
                            <div class="detail-line-value">{{$car->engine}}</div>
                        </div>
                        <div class="detail-line">
                            <div class="detail-line-lable">Số chỗ ngồi</div>
                            <div class="detail-line-value">{{$car->seat}}</div>
                        </div>
                        <div class="detail-line">
                            <div class="detail-line-lable">Đăng ký lần đầu</div>
                            <div class="detail-line-value">{{$car->first_plate}}</div>
                        </div>
                        <div class="detail-line">
                            <div class="detail-line-lable">Ngày hết hạn</div>
                            <div class="detail-line-value">{{$car->regis_expiry}}</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript">jssor_1_slider_init();</script>
@endsection