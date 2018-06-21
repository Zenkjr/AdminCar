@extends('layout.admin_template')

@section('content')
    <section class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Danh Sách Loại xe</h3>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <button type="submit" class="btn btn-info" data-toggle="modal" data-target="#addnew">
                                Thêm Mới
                                <i class="fas fa-plus-circle fa-lg pl-1"></i>
                            </button>
                            @if (session('add'))
                                <div class="alert alert-info">{{session('add')}}</div>
                            @endif
                            @if (session('Delete'))
                                <div class="alert alert-info">{{session('Delete')}}</div>
                            @endif
                            <div class="alert alert-success d-none text-center bg-success text-white" role="alert"
                                 id="messageSuccess"></div>
                            <div class="alert alert-danger d-none text-center bg-danger text-white" role="alert"
                                 id="messageError"></div>
                        </div>
                        <div class="table-responsive">
                            <form id="formDelete" onsubmit="return confirm('bạn chắc chắn muốn xóa ??')"
                                  action="/clazz/test" method="post">
                                <input type="hidden" id="methodForm" name="_method" value="post">
                                {{csrf_field()}}
                                <table class="table mb-0">
                                    <thead class="thead-light">
                                    <tr>
                                        <th>
                                            <label class="customcheckbox m-b-20">
                                                <input type="checkbox" id="mainCheckbox"/>
                                                <span class="checkmark"></span>
                                            </label>
                                        </th>
                                        <th>#</th>
                                        <th>loại</th>
                                        <th>Được tạo tại</th>
                                        <th>Được cập nhật</th>
                                        <th>Sửa</th>
                                        <th>Xóa</th>
                                    </tr>
                                    </thead>
                                    <div class="card-body">
                                        <tbody class="customtable  border-bottom">

                                        @foreach($clazzes as $item)

                                            <tr id="{{$item->id}}">
                                                <th>
                                                    <label class="customcheckbox">
                                                        <input type="checkbox" name="checkName[]" value="{{$item->id}}"
                                                               class="listCheckbox " required/>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </th>
                                                <td class="clazz-id">{{$item->id}}</td>
                                                <td class="clazz-name"
                                                    id="name-{{$item->id}}">{{$item->clazzes_name}}</td>
                                                <td class="clazz-created">{{$item->created_at}}</td>
                                                <td class="clazz-updated">{{$item->updated_at}}</td>
                                                <td>
                                                    <a class="btn btn-info btn-edit text-white"
                                                       data-toggle="modal"
                                                       data-target="#modal-edit">Sửa
                                                    </a>
                                                </td>
                                                <td>
                                                    <a class="btn btn-danger btn-delete" id="delete-{{$item->id}}">
                                                        delete
                                                    </a>
                                                </td>
                                            </tr>

                                        @endforeach
                                        </tbody>
                                    </div>
                                </table>

                                <div class="card-footer">
                                    <div class="form-group float-right">
                                        {{ $clazzes->links() }}
                                    </div>
                                    <div class="form-group">
                                        <label>
                                            <select name="chosse" id="selectAction">
                                                <option value="0">
                                                    -- chọn một mục --
                                                </option>
                                                <option value="1" class="text-center">
                                                    Xóa
                                                </option>
                                            </select>
                                        </label>
                                        <button type="button" class="btn btn-danger btn-Apply">Apply</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                    <!-- Button trigger modal -->
                {{--===================================================--}}

                {{--===================================================--}}
                <!-- Modal Add New-->
                    <div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Thêm Mới loại</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form class="form-horizontal" action="/clazz/store"
                                      enctype="multipart/form-data"
                                      method="post">
                                    {{ csrf_field() }}
                                    <div class="modal-body bg-info">
                                        <div class="box-body">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend ">
                                                    <span class="input-group-text"
                                                          id="inputGroup-sizing-default">loại xe</span>
                                                </div>
                                                <input type="text" name="name" class="form-control rounded"
                                                       aria-label="Default"
                                                       placeholder="loại xe"
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
                    {{--================================================================--}}

                    {{--================================================================--}}
                    {{--modal delete--}}
                    <div class="modal fade" id="modal-delete" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-danger" id="exampleModalLabel">Bạn có chắc muốn
                                        xóa?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body bg-danger">
                                    <div class="box-body">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend ">
                                                    <span class="input-group-text"
                                                          id="inputGroup-sizing-default">loại</span>
                                            </div>
                                            <input type="text" id="nameDelete" name="name"
                                                   class="form-control rounded text-center"
                                                   aria-label="Default" disabled>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-dropbox" data-dismiss="modal">Close
                                    </button>
                                    <button type="submit" id="btn-deleteOk" class="btn btn-info pull-right bg-danger">
                                        Xóa
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{--end modal delete--}}
                    {{--================================================================--}}
                    {{--================================================================--}}

                    {{--modal edit--}}
                    <div class="modal fade" id="modal-edit" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Sửa Mới loại</h5>
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
                                                    <span class="input-group-text"
                                                          id="inputGroup-sizing-default">loại xe</span>
                                                </div>
                                                <input type="hidden" name="id" id="idUpdate" class="form-control">

                                                <input type="text" name="name_Update" id="name_Update"
                                                       class="form-control rounded"
                                                       aria-label="Default"
                                                       placeholder="loại xe"
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
    <!-- /.row -->
@endsection
@section('script')
    <script>
        var deleteId = '';
        $('.btn-delete').click(function () {
            deleteId = $(this).attr("id").replace('delete-', '');
            var name = $('#name-' + deleteId).text();
            $('#idDelete').val(deleteId);
            $('#nameDelete').val(name);
            $('#modal-delete').modal('show');

        });
        $('#btn-deleteOk').click(function () {
            $.ajax({
                type: 'delete',
                url: '/clazz/delete/' + deleteId,
                data: {
                    '_token': '{{csrf_token()}}',
                },
                success: function () {
                    $('#modal-delete').modal('hide');
                    $('tr#' + deleteId).hide();
                    $('#messageSuccess').text('Xóa thành công');
                    $('#messageSuccess').removeClass('d-none');
                },
                error: function () {
                    $('#messageError').removeClass('d-none');
                    $('#messageError').text('lỗi ! vui lòng thử lại sau');
                    $('#exampleModal').modal('hide');
                }
            });
        });
        var id;
        $('.btn-edit').click(function () {
            id = $(this).closest('tr').attr('id');
            $.ajax({
                method: 'get',
                url: '/clazz/' + id + '/edit',
                data: {
                    '_token': '{{csrf_token()}}'
                },
                success: function (resp) {
                    $('#idUpdate').val(resp.id);
                    $('#name_Update').val(resp.clazzes_name);
                },
                error: function () {
                    $('#messageError').removeClass('d-none');
                    $('#messageError').text('lỗi ! vui lòng thử lại sau');
                    $('#modal-delete').modal('hide');
                }
            })
        });
        $('#formUpdate').submit(function (event) {
            $.ajax({
                method: 'put',
                url: '/clazz/update/' + id,
                data: $('#formUpdate').serialize(),
                success: function (resp) {
                    $('tr#' + id + ' > td.clazz-id').text(resp.id);
                    $('tr#' + id + ' > td.clazz-name').text(resp.clazzes_name);
                    $('tr#' + id + ' > td.clazz-created').text(resp.created_at);
                    $('tr#' + id + ' > td.clazz-updated').text(resp.updated_at);
                    $('#modal-edit').modal('hide');
                    $('#messageSuccess').text('Sửa thành công');
                    $('#messageSuccess').removeClass('d-none');
                },
                error: function () {
                    $('#messageError').removeClass('d-none');
                    $('#messageError').text('lỗi ! vui lòng thử lại sau');
                    $('#messageSuccess').html('hide');
                    $('#modal-edit').modal('hide');

                }
            });
            event.preventDefault();
        });

        $('.btn-Apply').click(function () {
            switch ($('#selectAction').val()) {
                case '0':
                    alert('vui long chon mot muc');
                    break;
                case '1':
                    if ($('.listCheckbox').is(':checked')) {
                        $('#formDelete').submit();
                    } else {
                        alert(' no check no delete')
                    }
                    break;
                case '2':
                    break;
            }
        });
        $('#zero_config').DataTable();

    </script>
@endsection
