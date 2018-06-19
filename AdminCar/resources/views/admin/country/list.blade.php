@extends('layout.admin_template')

@section('content')
    <section class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Danh Sách Quốc gia</h3>
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
                                    <th>Quốc gia</th>
                                    <th>Được tạo tại</th>
                                    <th>Được cập nhật</th>
                                    <th>Hoạt Động</th>

                                </tr>
                                </thead>
                                @foreach($country as $item)

                                    <tbody class="customtable">
                                    <tr id="{{$item->id}}">
                                        <th>
                                            <label class="customcheckbox">
                                                <input type="checkbox" class="listCheckbox"/>
                                                <span class="checkmark"></span>
                                            </label>
                                        </th>
                                        <td class="country-id">{{$item->id}}</td>
                                        <td class="country-name">{{$item->name}}</td>
                                        <td class="country-created">{{$item->created_at}}</td>
                                        <td class="country-updated">{{$item->updated_at}}</td>
                                        <td>
                                            <button class="btn btn-info btn-edit" id="edit-{{$item->id}}"
                                                    data-toggle="modal"
                                                    data-target="#modal-edit">Sửa
                                            </button>
                                        </td>
                                        <td>
                                            <form onsubmit="return confirm(' Bạn có chắc muốn xóa ?')"
                                                  action="{{url('/country/destroy',['id'=> $item->id])}}" method="post">
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

                    <div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Thêm Mới Quốc gia</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form class="form-horizontal" action="/country/store"
                                      enctype="multipart/form-data"
                                      method="post">
                                    {{ csrf_field() }}
                                    <div class="modal-body bg-info">
                                        <div class="box-body">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend ">
                                                    <span class="input-group-text" id="inputGroup-sizing-default">Quốc gia</span>
                                                </div>
                                                <input type="text" name="name" class="form-control rounded"
                                                       aria-label="Default"
                                                       placeholder="Quốc gia"
                                                       aria-describedby="inputGroup-sizing-default">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.box-body -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close
                                        </button>
                                        <button type="submit" class="btn btn-info pull-right">Lưu
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    {{--End modal add new--}}

                    {{--modal edit--}}
                    <div class="modal fade" id="modal-edit" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Thêm Mới Quốc gia</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="" method="post" id="formUpdate">
                                    <input type="hidden" name="_method" value="put">
                                    {{csrf_field()}}
                                    <div class="modal-body bg-info">
                                        <div class="box-body">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend ">
                                                    <span class="input-group-text" id="inputGroup-sizing-default">Quốc gia</span>
                                                </div>
                                                <input type="hidden" name="id" id="idUpdate" class="form-control">

                                                <input type="text" name="name_Update" id="name_Update"
                                                       class="form-control rounded"
                                                       aria-label="Default"
                                                       placeholder="Quốc gia"
                                                       aria-describedby="inputGroup-sizing-default">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.box-body -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close
                                        </button>
                                        <button type="submit" class="btn btn-info pull-right">Lưu
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    {{--end modal edit--}}
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script>
        var id;
        $('.btn-edit').click(function () {
            id = $(this).closest('tr').attr('id');
            $.ajax({
                method: 'get',
                url: '/country/' + id + '/edit',
                data: {
                    '_token': '{{csrf_token()}}'
                },
                success: function (resp) {
                    $('#idUpdate').val(resp.id);
                    $('#name_Update').val(resp.name);
                },
                error: function () {
                    alert("wrong");
                }
            })
        });
        $('#formUpdate').submit(function (event) {
            $.ajax({
                method: 'put',
                url: '/country/update/' + id,
                data: $('#formUpdate').serialize(),

                success: function (resp) {
                    $('tr#' + id + ' > td.country-id').text(resp.id);
                    $('tr#' + id + ' > td.country-name').text(resp.name);
                    $('tr#' + id + ' > td.country-created').text(resp.created_at);
                    $('tr#' + id + ' > td.country-updated').text(resp.updated_at);
                    $('#modal-edit').modal('hide');
                },
                error: function () {
                    alert(id);
                    alert('wrong');
                }
            });
            event.preventDefault();
        });
    </script>
@endsection