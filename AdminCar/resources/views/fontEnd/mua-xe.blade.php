@extends('fontEnd.layout.master')
@section('title', 'Mua xe | An Thịnh AUTO')

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-9">
                <div class="row">

                    @foreach($cars as $item)
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mt-3">
                            <a href="cars/{{$item->id}}">
                                <div class="category-grid-box-1">
                                    <div class="image">
                                        <img src="{{$item->img}}">
                                        <div class="ribbon popular"></div>
                                        <div class="price-tag">
                                            <div class="price"><span>{{$item->price}} triệu</span></div>
                                        </div>
                                    </div>
                                    <div class="short-description-1 clearfix">
                                        <h3>{{$item->name}}</h3>
                                        <ul class="list-unstyled">
                                            <li><i class="fas fa-gas-pump"></i>{{$item->engine}}</li>
                                            <li><i class="fas fa-wheelchair"></i>{{$item->seat}}</li>
                                            <li><i class="fas fa-cogs"></i>{{$item->horse_power}} HP</li>
                                            <li><i class="fas fa-car"></i>{{$item->clazz}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach

                </div>

                <div class="float-right mt-2">
                    {{ $cars->links() }}
                </div>

            </div>


            <div class="col-3">
                <h3>Tìm kiếm nhanh</h3>
                <h5 class="border-bottom">Hãng xe</h5>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="brand">
                    <label class="form-check-label" for="brand">
                        Huyndai
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="brand">
                    <label class="form-check-label" for="brand">
                        Avenger
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="brand">
                    <label class="form-check-label" for="brand">
                        Lamboghini
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="brand">
                    <label class="form-check-label" for="brand">
                        Hpc
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="brand">
                    <label class="form-check-label" for="brand">
                        Lojo
                    </label>
                </div>

                <h5 class="border-bottom">Giá xe</h5>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="price">
                    <label class="form-check-label" for="price">
                        Từ 200 triệu đến 350 triệu
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="price">
                    <label class="form-check-label" for="price">
                        Từ 350 triệu đến 500 triệu
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="price">
                    <label class="form-check-label" for="price">
                        Từ 500 triệu đến 650 triệu
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="price">
                    <label class="form-check-label" for="price">
                        Từ 650 triệu đến 800 triệu
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="price">
                    <label class="form-check-label" for="price">
                        Từ 800 triệu đến 1000 triệu
                    </label>
                </div>
            </div>
        </div>
    </div>
@endsection