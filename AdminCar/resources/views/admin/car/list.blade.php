@extends('layout.admin_template')

@section('content')
    <section class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">List Cars</h3>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title m-b-0">Danh Sách xe</h5>
                        </div>
                        <div class="card-body">
                            <form action="/car/create" method="get">
                                <button type="submit" class="btn btn-info">
                                    Thêm Mới
                                    <i class="fas fa-plus-circle fa-lg pl-1"></i>
                                </button>
                            </form>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-light">
                                <tr>
                                    <th>
                                        <label class="customcheckbox m-b-20">
                                            <input type="checkbox" id="mainCheckbox"/>
                                            <span class="checkmark"></span>
                                        </label>
                                    </th>
                                    <th>id</th>
                                    <th>Ảnh</th>
                                    <th>Tên xe</th>
                                    <th>Hãng sản xuất</th>
                                    <th>Năm sản xuất</th>
                                    <th>Số ghế</th>
                                    <th>Động cơ</th>
                                    <th>Mã lực</th>
                                    <th>lốp xe</th>
                                    <th>Loại xe</th>
                                    <th>Chú thích</th>
                                    <th>Thay Đổi</th>
                                    <th>Xóa</th>
                                </tr>
                                </thead>
                                @foreach($cars as $item)
                                    <tbody class="customtable">
                                    <tr>
                                        <th>
                                            <label class="customcheckbox">
                                                <input type="checkbox" class="listCheckbox"/>
                                                <span class="checkmark"></span>
                                            </label>
                                        </th>
                                        <td>{{$item->id}}</td>
                                        <td>
                                            <div class="card"
                                                 style="background-image: url('{{$item->img}}'); background-size: cover; width: 100px; height: 60px;">
                                            </div>
                                        </td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->brand_id}}</td>
                                        <td>{{$item->year}}</td>
                                        <td>{{$item->seat}}</td>
                                        <td>{{$item->engine}}</td>
                                        <td>{{$item->horse_power}}</td>
                                        <td>{{$item->tire_size}}</td>
                                        <td>{{$item->clazz_id}}</td>
                                        <td>{{$item->note}}</td>
                                        <td>
                                            <form action="/car/{{$item->id}}/edit" method="post">
                                                {{csrf_field()}}
                                                <button type="submit" class="btn btn-info btn-edit m-1" href="/car/{{$item->id}}/edit">Sửa
                                                </button>
                                            </form>
                                        </td>
                                        <td>
                                            <form onsubmit="return confirm(' Bạn có chắc muốn xóa ?')"
                                                  action="{{url('/car/destroy',['id'=> $item->id])}}" method="post">
                                                <input type="hidden" name="_method" value="delete">
                                                {{csrf_field()}}
                                                <button type="submit" class="btn btn-danger m-1"
                                                >
                                                    delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    </tbody>
                                @endforeach

                            </table>
                            <div class="card-footer">
                                <div class="form-group">
                                    <label>
                                        <select name="chosse" id="">
                                            <option value="">
                                                -- chọn một mục --
                                            </option>
                                            <option value="1" class="text-center">
                                                Xóa
                                            </option>
                                        </select>
                                    </label>
                                    <button class="btn btn-danger">Apply</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- /.row -->
@endsection
@section('script')

    <script>

    </script>
@endsection
