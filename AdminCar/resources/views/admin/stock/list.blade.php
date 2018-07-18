@extends('layout.admin_template')

@section('content')
    <section class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"> Xe trong kho</h3>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <form action="/stock/show" method="get" id="formShowStatus">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label>
                                        <select name="choise_status" id="selectStatus">
                                            <option value="4">
                                                -- Trạng thái xe --
                                            </option>
                                            <option value="0" class="text-center">
                                                Hết Hàng
                                            </option>
                                            <option value="1" class="text-center">
                                                Đang bán
                                            </option>
                                            <option value="2" class="text-center">
                                                Còn trong kho
                                            </option>
                                        </select>
                                        <button type="button" class="btn btn-danger btn-Status">Chọn</button>
                                    </label>
                                </div>
                            </form>
                        </div>
                        <div class="table-responsive">
                            <form id="formDelete" onsubmit="return confirm('bạn chắc chắn muốn xóa ??')"
                                  action="/stock/test" method="post">
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
                                        <th>Tên Xe</th>
                                        <th>ảnh</th>
                                        <th>biển số</th>
                                        <th>đăng ký lần đầu</th>
                                        <th>hạn đăng kiểm</th>
                                        <th>Quốc gia</th>
                                        <th>màu</th>
                                        <th>Nhập ngày</th>
                                        <th>Xuất ngày</th>
                                        <th>Giá bán</th>
                                        <th>Trạng thái</th>
                                        <th>Chỉnh sửa</th>
                                        <th>Xóa</th>
                                    </tr>
                                    </thead>
                                    @foreach($stock as $item)
                                        <tbody class="customtable">
                                        <tr id="{{$item->id}}">
                                            <th>
                                                <label class="customcheckbox">
                                                    <input type="checkbox" name="checkName[]" value="{{$item->id}}"
                                                           class="listCheckbox " required/>
                                                    <span class="checkmark"></span>
                                                </label>
                                            </th>
                                            <td>{{$item->name}}</td>
                                            <td>
                                                <div class="card"
                                                     style="background-image: url('{{$item->img}}'); background-size: cover; width: 100px; height: 60px;">
                                                </div>
                                            </td>
                                            <td>{{$item->plate_num}}</td>
                                            <td>{{$item->first_plate}}</td>
                                            <td>{{$item->regis_expiry}}</td>
                                            <td>{{$item->country}}</td>
                                            <td>{{$item->color}}</td>
                                            <td>{{$item->in_at}}</td>
                                            <td>{{$item->out_at}}</td>
                                            <td>{{$item->price}}</td>
                                            @if($item->status == 0)
                                                <td>hết hàng</td>
                                            @elseif($item->status == 1)
                                                <td>Đang bán</td>
                                            @else
                                                <td>Còn trong kho</td>
                                            @endif
                                            <td>
                                                <a href="/stock/{{$item->id}}/edit"
                                                   class="btn btn-info btn-edit text-white">Sửa
                                                </a>
                                            </td>
                                            <td>
                                                <a class="btn btn-danger btn-delete" id="delete-{{$item->id}}">
                                                    delete
                                                </a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    @endforeach
                                </table>
                                <div class="card-footer">
                                    <div class="form-group float-right">
                                        {{ $stock->links()}}
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

                    <!-- Modal delete New-->

                    {{--End modal delete new--}}
                </div>
            </div>
        </div>
    </section>

    <!-- /.row -->
@endsection
@section('script')
    <script>
        $('.btn-Status').click(function () {
            switch ($('#selectStatus').val()) {
                case '4':
                    alert('vui long chon mot muc');
                    break;
                case '0':
                case '1':
                case '2':
                    $('#formShowStatus').submit();
                    break;
            }
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

        var deleteId = '';
        $('.btn-delete').click(function () {
            deleteId = $(this).attr("id").replace('delete-', '');
            $.ajax({
                type: 'delete',
                url: '/stock/delete/' + deleteId,
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
    </script>
@endsection