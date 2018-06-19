@extends('layout.admin_template')

@section('content')

    <section class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Danh Sách loại xe</h3>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <button type="submit" class="btn btn-info" data-toggle="modal" data-target="#addnew">
                                Thêm Mới
                                <i class="fas fa-plus-circle fa-lg pl-1"></i>
                            </button>
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
                                    <th>#</th>
                                    <th>Xe Muốn mua</th>
                                    <th>Số Điện thoại</th>
                                    <th>email</th>
                                    <th>Địa chỉ</th>

                                </tr>
                                </thead>
                                @foreach($preorder as $item)

                                    <tbody class="customtable">
                                    <tr id="{{$item->id}}">
                                        <th>
                                            <label class="customcheckbox">
                                                <input type="checkbox" class="listCheckbox"/>
                                                <span class="checkmark"></span>
                                            </label>
                                        </th>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->stock_id}}</td>
                                        <td>{{$item->tel}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>{{$item->address}}</td>
                                        <td>
                                            <form onsubmit="return confirm(' Bạn có chắc muốn xóa ?')"
                                                  action="{{url('/preorder/destroy',['id'=> $item->id])}}" method="post">
                                                <input type="hidden" name="_method" value="delete">
                                                {{csrf_field()}}
                                                <button type="submit" class="btn btn-danger" data-toggle="modal"
                                                        data-target="#modal-delete">
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
                    <!-- Button trigger modal -->

                    <!-- Modal Add New-->

                    {{--End modal add new--}}

                    {{--modal edit--}}

                    {{--end modal edit--}}
                </div>
            </div>
        </div>
    </section>

    <!-- /.row -->
@endsection