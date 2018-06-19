@extends('layout.admin_template')

@section('content')
    <section class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Danh Sách Bài Báo </h3>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <form action="/article/create" method="get">
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
                                    <th>
                                        <span>Check All</span>
                                    </th>
                                </tr>
                                </thead>
                                @foreach($article as $item)

                                    <tbody class="customtable">
                                    <tr id="{{$item->id}}">
                                        <th>
                                            <label class="customcheckbox">
                                                <input type="checkbox" class="listCheckbox"/>
                                                <span class="checkmark"></span>
                                            </label>
                                        </th>
                                        <td>
                                            <h3>
                                                <a href="/article/create/{{$item->id}}">
                                                    {{$item->article_title}}
                                                </a>
                                            </h3>
                                        </td>
                                        <td>
                                            <form action="/article/{{$item->id}}/edit" method="post">
                                                {{csrf_field()}}
                                                <button class="btn btn-info btn-edit" id="edit-{{$item->id}}">Sửa
                                                </button>
                                            </form>
                                        </td>
                                        <td>
                                            <form onsubmit="return confirm(' Bạn có chắc muốn xóa ?')"
                                                  action="{{url('/article/destroy',['id'=> $item->id])}}" method="post">
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
                                    <h5 class="modal-title" id="exampleModalLabel">Thêm Mới bài báo</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form class="form-horizontal" action="/article/store"
                                      enctype="multipart/form-data"
                                      method="post">
                                    {{ csrf_field() }}
                                    <div class="modal-body bg-info">
                                        <div class="box-body">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend ">
                                                    <span class="input-group-text" id="inputGroup-sizing-default">bài báo</span>
                                                </div>
                                                <input type="text" name="name" class="form-control rounded"
                                                       aria-label="Default"
                                                       placeholder="bài báo"
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
                    {{--end modal edit--}}
                </div>
            </div>
        </div>
    </section>

    <!-- /.row -->
@endsection
@section('script')
    {{--<script>--}}
    {{--// $('#check-car').checkbox(function () {--}}
    {{--//     alert('check');--}}
    {{--// })--}}
    {{--//--}}
    {{--$('#checkAll').click(function () {--}}
    {{--if ($(this).prop('checked')) {--}}
    {{--$('.check-one').prop('checked', true);--}}
    {{--} else {--}}
    {{--$('.check-one').prop('checked', false);--}}
    {{--}--}}
    {{--});--}}
    {{--$('.check-one').click(function () {--}}
    {{--if ($('#checkAll').prop("checked", true)) {--}}
    {{--// alert('check');--}}
    {{--$('#checkAll').prop('checked', false);--}}
    {{--}--}}
    {{--else {--}}
    {{--$('#checkAll').prop('checked', true);--}}
    {{--}--}}
    {{--});--}}

    {{--</script>--}}
@endsection
