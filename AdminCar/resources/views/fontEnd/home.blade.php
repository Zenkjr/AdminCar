@extends('fontEnd.layout.master')
@section('title', 'An Thịnh AUTO')

@section('body')
    <div class="container-fluid mt-3">
        <!-- The slideshow -->
        <div id="mySlide" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('images/vintage.jpg')}}">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('images/audi_t.jpg')}}">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('images/homeIma.jpg')}}">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('images/homeImages.jpg')}}">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('images/homeImas.jpg')}}">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#mySlide" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#mySlide" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
        <!-- The end slideshow -->
    </div>
    <div class="container mt-3">

        <!-- Brand -->
        <div class="text-center mt-5">
            <h2>HÃNG NỔI BẬT</h2>
            <br>
            <div class="row slideanim">
                <div class="col-sm-4">
                    <a href="/brand/4">
                        <img class="img-fluid" src="http://www.pumpedinc.com/placeholders/logos/audi-logo.png">
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="/brand/8">
                        <img class="img-fluid" src="http://www.carlogos.org/logo/Mazda-logo-1997-1920x1080.png">
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="/brand/3">
                        <img class="img-fluid" src="http://interbrand.com/assets/00000001492.png">
                    </a>
                </div>
            </div>
            <br>
            <div class="row slideanim">
                <div class="col-sm-4">
                    <a href="/brand/7">
                        <img class="img-fluid" src="https://www.accutechauto.co/wp-content/uploads/2017/12/hyundai.png">
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="/brand/2">
                        <img class="img-fluid" src="http://interbrand.com/assets/00000001585.png">
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="/brand/1">
                        <img class="img-fluid" src="http://interbrand.com/assets/00000001574.png">
                    </a>
                </div>
            </div>
        </div>
        <!-- End Brand -->

        <!-- Sản phẩm nổi bật -->
        <h2 class="text-center mt-5">SẢN PHẨM NỔI BẬT</h2>
        <br>
        <div class="manufacturer-header mt-3">
            <img class="img-fluid" src="http://www.pumpedinc.com/placeholders/logos/audi-logo.png" width="100px">
            <span><a href="/brand/4">Xem thêm ></a></span>
        </div>
        <div class="row">
            @foreach($brandAudi as $audi)
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mt-3">
                <a href="cars/{{$audi->id}}">
                    <div class="category-grid-box-1">
                        <div class="image">
                            <img src="{{$audi->img}}">
                            <div class="ribbon popular"></div>
                            <div class="price-tag">
                                <div class="price"><span>{{$audi->price}} triệu</span></div>
                            </div>
                        </div>
                        <div class="short-description-1 clearfix">
                            <h3>{{$audi->name}}</h3>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-gas-pump"></i>{{$audi->engine}}</li>
                                <li><i class="fas fa-wheelchair"></i>{{$audi->seat}}</li>
                                <li><i class="fas fa-cogs"></i>{{$audi->horse_power}} HP</li>
                                <li><i class="fas fa-car"></i>{{$audi->clazz}}</li>
                            </ul>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach

        </div>

        <div class="manufacturer-header mt-5">
            <img class="img-fluid" src="http://www.carlogos.org/logo/Mazda-logo-1997-1920x1080.png" width="100px">
            <span><a href="/brand/8">Xem thêm ></a></span>
        </div>
        <div class="row">
            @foreach($brandMazda as $mazda)
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mt-3">
                    <a href="cars/{{$mazda->id}}">
                        <div class="category-grid-box-1">
                            <div class="image">
                                <img src="{{$mazda->img}}">
                                <div class="ribbon popular"></div>
                                <div class="price-tag">
                                    <div class="price"><span>{{$mazda->price}} triệu</span></div>
                                </div>
                            </div>
                            <div class="short-description-1 clearfix">
                                <h3>{{$mazda->name}}</h3>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-gas-pump"></i>{{$mazda->engine}}</li>
                                    <li><i class="fas fa-wheelchair"></i>{{$mazda->seat}}</li>
                                    <li><i class="fas fa-cogs"></i>{{$mazda->horse_power}} HP</li>
                                    <li><i class="fas fa-car"></i>{{$mazda->clazz}}</li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>

        <div class="manufacturer-header mt-5">
            <img class="img-fluid" src="http://interbrand.com/assets/00000001492.png" width="100px">
            <span><a href="/brand/3">Xem thêm ></a></span>
        </div>
        <div class="row">
            @foreach($brandBmw as $bmw)
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mt-3">
                    <a href="cars/{{$bmw->id}}">
                        <div class="category-grid-box-1">
                            <div class="image">
                                <img src="{{$bmw->img}}">
                                <div class="ribbon popular"></div>
                                <div class="price-tag">
                                    <div class="price"><span>{{$bmw->price}} triệu</span></div>
                                </div>
                            </div>
                            <div class="short-description-1 clearfix">
                                <h3>{{$bmw->name}}</h3>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-gas-pump"></i>{{$bmw->engine}}</li>
                                    <li><i class="fas fa-wheelchair"></i>{{$bmw->seat}}</li>
                                    <li><i class="fas fa-cogs"></i>{{$bmw->horse_power}} HP</li>
                                    <li><i class="fas fa-car"></i>{{$bmw->clazz}}</li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>

        <div class="manufacturer-header mt-5">
            <img class="img-fluid" src="https://www.accutechauto.co/wp-content/uploads/2017/12/hyundai.png" width="100px">
            <span><a href="/brand/7">Xem thêm ></a></span>
        </div>
        <div class="row">
            @foreach($brandHyundai as $hyundai)
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mt-3">
                    <a href="cars/{{$hyundai->id}}">
                        <div class="category-grid-box-1">
                            <div class="image">
                                <img src="{{$hyundai->img}}">
                                <div class="ribbon popular"></div>
                                <div class="price-tag">
                                    <div class="price"><span>{{$hyundai->price}} triệu</span></div>
                                </div>
                            </div>
                            <div class="short-description-1 clearfix">
                                <h3>{{$hyundai->name}}</h3>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-gas-pump"></i>{{$hyundai->engine}}</li>
                                    <li><i class="fas fa-wheelchair"></i>{{$hyundai->seat}}</li>
                                    <li><i class="fas fa-cogs"></i>{{$hyundai->horse_power}} HP</li>
                                    <li><i class="fas fa-car"></i>{{$hyundai->clazz}}</li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>

    </div>

    <script>
        $(document).ready(function(){
            // Add smooth scrolling to all links in navbar + footer link
            $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 900, function(){

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });

            $(window).scroll(function() {
                $(".slideanim").each(function(){
                    var pos = $(this).offset().top;

                    var winTop = $(window).scrollTop();
                    if (pos < winTop + 600) {
                        $(this).addClass("slide");
                    }
                });
            });
        })
    </script>
@endsection