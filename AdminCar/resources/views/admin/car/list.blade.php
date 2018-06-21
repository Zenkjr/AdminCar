@extends('layout.admin_template')

@section('content')
    <section class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h5 class="card-title m-b-0">Danh Sách xe</h5>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <form action="/car/create" method="get">
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
                            <div class="alert alert-success d-none text-center bg-success text-white" role="alert"
                                 id="messageSuccess"></div>
                            <div class="alert alert-danger d-none text-center bg-danger text-white" role="alert"
                                 id="messageError"></div>
                        </div>
                        <div class="table-responsive">
                            <form id="formDelete" onsubmit="return confirm('bạn chắc chắn muốn xóa ??')"
                                  action="/car/test" method="post">
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
                                        <th>Trạng thái</th>
                                        <th>Chú thích</th>
                                        <th>Thay Đổi</th>
                                        <th>Xóa</th>
                                    </tr>
                                    </thead>
                                    <div class="card-body">
                                        <tbody class="customtable  border-bottom">
                                        @foreach($cars as $item)
                                            <tr id="{{$item->id}}">
                                                <th>
                                                    <label class="customcheckbox">
                                                        <input type="checkbox" name="checkName[]" value="{{$item->id}}"
                                                               class="listCheckbox " required/>
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
                                                <td>{{$item->status}}</td>
                                                <td>{{$item->note}}</td>
                                                <td>
                                                    <a href="/car/{{$item->id}}/edit"
                                                       class="btn btn-info btn-edit text-white">Sửa
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
                                        {{ $cars->links() }}
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
            $.ajax({
                type: 'delete',
                url: '/car/delete/' + deleteId,
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
    </script>
@endsection
