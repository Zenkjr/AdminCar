{{--@extends('layout.admin_template')--}}

{{--@section('content')--}}
    {{--<section class="container-fluid">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-12">--}}
                {{--<div class="box">--}}
                    {{--<div class="box-header">--}}
                        {{--<h3 class="box-title">Danh Sách Hãng xe</h3>--}}
                    {{--</div>--}}
                    {{--<div class="card">--}}
                        {{--<div class="card-header">--}}
                            {{--<button type="submit" class="btn btn-info" data-toggle="modal" data-target="#addnew">--}}
                                {{--Thêm Mới--}}
                                {{--<i class="fas fa-plus-circle fa-lg pl-1"></i>--}}
                            {{--</button>--}}
                        {{--</div>--}}
                        {{--<div class="table-responsive">--}}
                            {{--<table class="table">--}}
                                {{--<thead class="thead-light">--}}
                                {{--<tr>--}}
                                    {{--<th>--}}
                                        {{--<label class="customcheckbox m-b-20">--}}
                                            {{--<input type="checkbox" id="mainCheckbox"/>--}}
                                            {{--<span class="checkmark"></span>--}}
                                        {{--</label>--}}
                                    {{--</th>--}}
                                    {{--<th>#</th>--}}
                                    {{--<th>id</th>--}}
                                    {{--<th>Hãng</th>--}}
                                    {{--<th>Được tạo tại</th>--}}
                                    {{--<th>Được cập nhật</th>--}}
                                    {{--<th>Hoạt Động</th>--}}

                                {{--</tr>--}}
                                {{--</thead>--}}
                                {{--@foreach($brands as $item)--}}

                                    {{--<tbody class="customtable">--}}
                                    {{--<tr id="{{$item->id}}">--}}
                                        {{--<th>--}}
                                            {{--<label class="customcheckbox">--}}
                                                {{--<input type="checkbox" class="listCheckbox"/>--}}
                                                {{--<span class="checkmark"></span>--}}
                                            {{--</label>--}}
                                        {{--</th>--}}
                                        {{--<td class="brand-id">{{$item->id}}</td>--}}
                                        {{--<td class="brand-name">{{$item->name}}</td>--}}
                                        {{--<td class="brand-created">{{$item->created_at}}</td>--}}
                                        {{--<td class="brand-updated">{{$item->updated_at}}</td>--}}
                                        {{--<td>--}}
                                            {{--<button class="btn btn-info btn-edit" id="edit-{{$item->id}}"--}}
                                                    {{--data-toggle="modal"--}}
                                                    {{--data-target="#modal-edit">Sửa--}}
                                            {{--</button>--}}
                                        {{--</td>--}}
                                        {{--<td>--}}
                                            {{--<form onsubmit="return confirm(' Bạn có chắc muốn xóa ?')"--}}
                                                  {{--action="{{url('/brand/destroy',['id'=> $item->id])}}" method="post">--}}
                                                {{--<input type="hidden" name="_method" value="delete">--}}
                                                {{--{{csrf_field()}}--}}
                                                {{--<button type="submit" class="btn btn-danger" data-toggle="modal"--}}
                                                        {{--data-target="#modal-delete">--}}
                                                    {{--delete--}}
                                                {{--</button>--}}
                                            {{--</form>--}}
                                        {{--</td>--}}
                                    {{--</tr>--}}
                                    {{--</tbody>--}}
                                {{--@endforeach--}}

                            {{--</table>--}}
                            {{--<div class="card-footer">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label>--}}
                                        {{--<select name="chosse" id="">--}}
                                            {{--<option value="">--}}
                                                {{---- chọn một mục ----}}
                                            {{--</option>--}}
                                            {{--<option value="1" class="text-center">--}}
                                                {{--Xóa--}}
                                            {{--</option>--}}
                                        {{--</select>--}}
                                    {{--</label>--}}
                                    {{--<button class="btn btn-danger">Apply</button>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- Button trigger modal -->--}}

                    {{--<!-- Modal Add New-->--}}

                    {{--<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"--}}
                         {{--aria-hidden="true">--}}
                        {{--<div class="modal-dialog" role="document">--}}
                            {{--<div class="modal-content">--}}
                                {{--<div class="modal-header">--}}
                                    {{--<h5 class="modal-title" id="exampleModalLabel">Thêm Mới Hãng xe</h5>--}}
                                    {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                                        {{--<span aria-hidden="true">&times;</span>--}}
                                    {{--</button>--}}
                                {{--</div>--}}
                                {{--<form class="form-horizontal" action="/brand/store"--}}
                                      {{--enctype="multipart/form-data"--}}
                                      {{--method="post">--}}
                                    {{--{{ csrf_field() }}--}}
                                    {{--<div class="modal-body bg-info">--}}
                                        {{--<div class="box-body">--}}
                                            {{--<div class="input-group mb-3">--}}
                                                {{--<div class="input-group-prepend ">--}}
                                                    {{--<span class="input-group-text" id="inputGroup-sizing-default">Hãng xe</span>--}}
                                                {{--</div>--}}
                                                {{--<input type="text" name="name" class="form-control rounded"--}}
                                                       {{--aria-label="Default"--}}
                                                       {{--placeholder="Hãng xe"--}}
                                                       {{--aria-describedby="inputGroup-sizing-default">--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<!-- /.box-body -->--}}
                                    {{--<div class="modal-footer">--}}
                                        {{--<button type="button" class="btn btn-default" data-dismiss="modal">Close--}}
                                        {{--</button>--}}
                                        {{--<button type="submit" class="btn btn-info pull-right">Lưu--}}
                                        {{--</button>--}}
                                    {{--</div>--}}
                                {{--</form>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--End modal add new--}}

                    {{--modal edit--}}
                    {{--<div class="modal fade" id="modal-edit" tabindex="-1" role="dialog"--}}
                         {{--aria-labelledby="exampleModalLabel"--}}
                         {{--aria-hidden="true">--}}
                        {{--<div class="modal-dialog" role="document">--}}
                            {{--<div class="modal-content">--}}
                                {{--<div class="modal-header">--}}
                                    {{--<h5 class="modal-title" id="exampleModalLabel">Chỉnh Sửa Hãng xe</h5>--}}
                                    {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                                        {{--<span aria-hidden="true">&times;</span>--}}
                                    {{--</button>--}}
                                {{--</div>--}}
                                {{--<form action="" method="post" id="formUpdate">--}}
                                    {{--<input type="hidden" name="_method" value="put">--}}
                                    {{--{{csrf_field()}}--}}
                                    {{--<div class="modal-body bg-info">--}}
                                        {{--<div class="box-body">--}}
                                            {{--<div class="input-group mb-3">--}}
                                                {{--<div class="input-group-prepend ">--}}
                                                    {{--<span class="input-group-text" id="inputGroup-sizing-default">Hãng xe</span>--}}
                                                {{--</div>--}}
                                                {{--<input type="hidden" name="id" id="idUpdate" class="form-control">--}}

                                                {{--<input type="text" name="name_Update" id="name_Update"--}}
                                                       {{--class="form-control rounded"--}}
                                                       {{--aria-label="Default"--}}
                                                       {{--placeholder="Hãng xe"--}}
                                                       {{--aria-describedby="inputGroup-sizing-default">--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<!-- /.box-body -->--}}
                                    {{--<div class="modal-footer">--}}
                                        {{--<button type="button" class="btn btn-default" data-dismiss="modal">Close--}}
                                        {{--</button>--}}
                                        {{--<button type="submit" class="btn btn-info pull-right">Lưu--}}
                                        {{--</button>--}}
                                    {{--</div>--}}
                                {{--</form>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--end modal edit--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
            {{--<!-- /.row -->--}}
{{--@endsection--}}
{{--@section('script')--}}
    {{--<script>--}}
        {{--var id;--}}
        {{--$('.btn-edit').click(function () {--}}
            {{--id = $(this).closest('tr').attr('id');--}}
            {{--$.ajax({--}}
                {{--method: 'get',--}}
                {{--url: '/brand/' + id + '/edit',--}}
                {{--data: {--}}
                    {{--'_token': '{{csrf_token()}}'--}}
                {{--},--}}
                {{--success: function (resp) {--}}
                    {{--$('#idUpdate').val(resp.id);--}}
                    {{--$('#name_Update').val(resp.name);--}}
                {{--},--}}
                {{--error: function () {--}}
                    {{--alert("wrong");--}}
                {{--}--}}
            {{--})--}}
        {{--});--}}
        {{--$('#formUpdate').submit(function (event) {--}}
            {{--$.ajax({--}}
                {{--method: 'put',--}}
                {{--url: '/brand/update/' + id,--}}
                {{--data: $('#formUpdate').serialize(),--}}
                {{--success: function (resp) {--}}
                    {{--$('tr#' + id + ' > td.brand-id').text(resp.id);--}}
                    {{--$('tr#' + id + ' > td.brand-name').text(resp.name);--}}
                    {{--$('tr#' + id + ' > td.brand-created').text(resp.created_at);--}}
                    {{--$('tr#' + id + ' > td.brand-updated').text(resp.updated_at);--}}
                    {{--$('#modal-edit').modal('hide');--}}
                {{--},--}}
                {{--error: function () {--}}
                    {{--alert('wrong')--}}
                {{--}--}}
            {{--});--}}
            {{--event.preventDefault();--}}
        {{--})--}}
    {{--</script>--}}
{{--@endsection--}}

@extends('layout.admin_template')

@section('content')
    <section class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Danh Sách Hãng xe</h3>
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
                                  action="/brand/test" method="post">
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
                                        <th>Hãng xe</th>
                                        <th>Được tạo tại</th>
                                        <th>Được cập nhật</th>
                                        <th>Sửa</th>
                                        <th>Xóa</th>
                                    </tr>
                                    </thead>
                                    <div class="card-body">
                                        <tbody class="customtable  border-bottom">

                                        @foreach($brand as $item)

                                            <tr id="{{$item->id}}">
                                                <th>
                                                    <label class="customcheckbox">
                                                        <input type="checkbox" name="checkName[]" value="{{$item->id}}"
                                                               class="listCheckbox " required/>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </th>
                                                <td class="brand-id">{{$item->id}}</td>
                                                <td class="brand-name" id="name-{{$item->id}}">{{$item->name}}</td>
                                                <td class="brand-created">{{$item->created_at}}</td>
                                                <td class="brand-updated">{{$item->updated_at}}</td>
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
                                        {{ $brand->links() }}
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
                                    <h5 class="modal-title" id="exampleModalLabel">Thêm Mới Hãng xe</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form class="form-horizontal" action="/brand/store"
                                      enctype="multipart/form-data"
                                      method="post">
                                    {{ csrf_field() }}
                                    <div class="modal-body bg-info">
                                        <div class="box-body">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend ">
                                                    <span class="input-group-text"
                                                          id="inputGroup-sizing-default">Hãng xe </span>
                                                </div>
                                                <input type="text" name="name" class="form-control rounded"
                                                       aria-label="Default"
                                                       placeholder="Hãng xe "
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
                                                          id="inputGroup-sizing-default">Hãng xe</span>
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
                                    <h5 class="modal-title" id="exampleModalLabel">Sửa Mới Hãng xe</h5>
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
                                                          id="inputGroup-sizing-default">Hãng xe </span>
                                                </div>
                                                <input type="hidden" name="id" id="idUpdate" class="form-control">

                                                <input type="text" name="name_Update" id="name_Update"
                                                       class="form-control rounded"
                                                       aria-label="Default"
                                                       placeholder="Hãng xe "
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
                url: '/brand/delete/' + deleteId,
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
                url: '/brand/' + id + '/edit',
                data: {
                    '_token': '{{csrf_token()}}'
                },
                success: function (resp) {
                    $('#idUpdate').val(resp.id);
                    $('#name_Update').val(resp.name);
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
                url: '/brand/update/' + id,
                data: $('#formUpdate').serialize(),
                success: function (resp) {
                    $('tr#' + id + ' > td.brand-id').text(resp.id);
                    $('tr#' + id + ' > td.brand-name').text(resp.name);
                    $('tr#' + id + ' > td.brand-created').text(resp.created_at);
                    $('tr#' + id + ' > td.brand-updated').text(resp.updated_at);
                    $('#modal-edit').modal('hide');
                    $('#messageSuccess').text('Sửa thành công');
                    $('#messageSuccess').removeClass('d-none');
                },
                error: function () {
                    $('#messageError').removeClass('d-none');
                    $('#messageError').text('lỗi ! vui lòng thử lại sau');
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