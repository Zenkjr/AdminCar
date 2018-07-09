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
                            @if (session('add'))
                                <div class="alert alert-info">{{session('add')}}</div>
                            @endif
                            @if (session('Delete'))
                                <div class="alert alert-info">{{session('Delete')}}</div>
                            @endif
                            @if (session('update'))
                                <div class="alert alert-info">{{session('update')}}</div>
                            @endif
                            <div class="alert alert-success d-none text-center bg-success text-white" role="alert"
                                 id="messageSuccess"></div>
                            <div class="alert alert-danger d-none text-center bg-danger text-white" role="alert"
                                 id="messageError"></div>
                        </div>
                        <div class="table-responsive">
                            <form id="formDelete" onsubmit="return confirm('bạn chắc chắn muốn xóa ??')"
                                  action="/article/test" method="post">
                                <input type="hidden" id="methodForm" name="_method" value="post">
                                {{csrf_field()}}
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
                                    <div class="card-body">
                                        <tbody class="customtable  border-bottom">
                                        @foreach($article as $item)
                                            <tr id="{{$item->id}}">
                                                <th>
                                                    <label class="customcheckbox">
                                                        <input type="checkbox" name="checkName[]" value="{{$item->id}}"
                                                               class="listCheckbox" required/>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </th>
                                                <td>
                                                    <h3>
                                                        <a id="name-{{$item->id}}" href="/article/edit/{{$item->id}}">
                                                            {{$item->article_title}}
                                                        </a>
                                                        {{--<input type="hidden" name="_method" value="put">--}}
                                                    </h3>
                                                </td>
                                                <td>
                                                    <a href="/article/{{$item->id}}/edit"
                                                       class="btn btn-info text-white">Sửa
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
                                        {{ $article->links() }}
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

                    {{--================================================================--}}
                    {{--modal delete--}}
                    {{--<div class="modal fade" id="modal-delete" tabindex="-1" role="dialog"--}}
                    {{--aria-labelledby="exampleModalLabel"--}}
                    {{--aria-hidden="true">--}}
                    {{--<div class="modal-dialog" role="document">--}}
                    {{--<div class="modal-content">--}}


                    <div class="modal fade bd-example-modal-lg" id="modal-delete" role="dialog" tabindex="-1"
                         role="dialog"
                         aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">

                                {{--<div class="modal fade"  id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">--}}
                                {{--<div class="modal-dialog" role="document">--}}
                                {{--<div class="modal-content">--}}

                                <div class="modal-header">
                                    <h5 class="modal-title text-danger" id="exampleModalLabel">Bạn có chắc muốn
                                        xóa?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body bg-danger">
                                    <div class="box-body">
                                        <input type="text" id="nameDelete" name="name"
                                               class="form-control rounded "
                                               aria-label="Default" disabled>
                                        </input>
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
                url: '/article/delete/' + deleteId,
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
