@extends('layout.admin_template')

@section('content')
    <div class='row'>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="box-title text-center">{{$title}}</h3>
                </div>
                @if (count($errors) > 0)
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
                @if($action == null)
                    {{$action = '/create/store'}}
                    @endif
                <form class="form-horizontal" action="{{$action}}" enctype="multipart/form-data" method="post">
                    {{csrf_field()}}
                    @if($method == 'put')
                        <input type="hidden" name="_method" value="put">
                    @endif
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card-body">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Tên Xe</span>
                                    </div>
                                    <input value="{{$cars_edit->name}}" type="text" name="name" placeholder="Tên Xe"
                                           class="form-control rounded">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Năm sản xuất</span>
                                    </div>
                                    <input value="{{$cars_edit->year }}" type="number" name="year"
                                           placeholder="Năm sản xuất" class="form-control rounded">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> Số ghế</span>
                                    </div>
                                    <input value="{{$cars_edit->seat }}" type="number" name="seat" placeholder="Số ghế"
                                           class="form-control rounded">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Động cơ</span>
                                    </div>
                                    <input value="{{$cars_edit->engine }}" type="number" name="engine"
                                           placeholder="Động cơ" class="form-control rounded">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Mã lực</span>
                                    </div>
                                    <input value="{{$cars_edit->horse_power }}" type="number" name="horse_power"
                                           placeholder="Mã lực" class="form-control rounded">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text">Cỡ lốp</label>
                                    </div>
                                    <select class="custom-select rounded" name="tire_size">
                                        <option selected>Choose...</option>
                                        <option value="1">d21</option>
                                        <option value="2">d11</option>
                                        <option value="3">d23</option>
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text">Dòng xe</label>
                                    </div>
                                    <select class="custom-select rounded" name="clazz_id">
                                        <option value="{{$cars_edit->clazz_id}}" selected>Choose...</option>
                                        @foreach($clazz_id as $item)
                                            <option value="{{$item->id}}">{{$item->clazzes_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Ghi Chú</span>
                                    </div>
                                    <textarea name="note" class="form-control"
                                              aria-label="Ghi Chú">{{$cars_edit->note}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Biển số</span>
                                    </div>
                                    <input value="{{$car_stock->plate_num}}" type="text" name="plate_num"
                                           placeholder="Biển số" class="form-control rounded">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Đăng ký lần đầu</span>
                                    </div>
                                    <input value="{{$car_stock->first_plate}}" type="date" name="first_plate"
                                           placeholder="Đăng ký lần đầu" class="form-control rounded">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Hạn đăng kiểm</span>
                                    </div>
                                    <input value="{{$car_stock->regis_expiry}}" type="date" name="regis_expiry"
                                           placeholder="Hạn đăng kiểm" class="form-control rounded">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text">Hãng </label>
                                    </div>
                                    <select class="custom-select rounded" name="brand_id">
                                        <option value="{{$cars_edit->brand_id}}" selected>Choose...</option>
                                        @foreach($brand_id as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text">Quốc gia</label>
                                    </div>
                                    <select class="custom-select rounded" name="country_id">
                                        <option value="{{$car_stock->country_id}}" selected>... Chọn 1 mục ...</option>
                                        @foreach($country_id as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Giá bán</span>
                                    </div>
                                    <input value="{{$car_stock->price }}" type="number" name="price"
                                           placeholder="Giá bán" class="form-control rounded">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text">Trạng Thái</label>
                                    </div>
                                    <select class="custom-select rounded" name="status">
                                        <option value="{{$car_stock->status}}" selected>Choose...</option>
                                        <option value="1">Bán</option>
                                        <option value="2">Hết Hàng</option>
                                        <option value="3">Còn Trong kho</option>
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text">Màu</label>
                                    </div>
                                    <select class="custom-select rounded" name="color_id">
                                        <option value="{{$car_stock->color_id}}" selected>Choose...</option>
                                        @foreach($color_id as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    {{--<div class="input-group-prepend">--}}
                                        {{--<span class="input-group-text">Hình ảnh</span>--}}
                                    {{--</div>--}}
                                    {{--<div class="custom-file">--}}
                                        {{--<input type="file" name="img_url" class="custom-file-input" multiple/>--}}
                                        {{--<label class="custom-file-label">Chọn file</label>--}}
                                    {{--</div>--}}
                                    <label class="">Chọn file</label>

                                    <input type="file" name="img_url[]" multiple = ""/>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-secondary">Secondary</button>
                        <button type="submit" class="btn btn-success">Gửi đi</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- Horizontal Form -->     <!-- /.box -->
    <!-- /.row -->
@endsection