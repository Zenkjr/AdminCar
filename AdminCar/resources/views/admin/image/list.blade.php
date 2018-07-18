@extends('layout.admin_template')

@section('content')
    <section class="content container">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Danh sách ảnh xe</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped table-responsive-md">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>id xe</th>
                                <th>ảnh xe</th>
                            </tr>
                            </thead>
                            @foreach($image as $item)
                                {{ csrf_field() }}
                                <tbody>
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->car_id}}</td>

                                    <td>
                                        <div class="card"
                                             style="background-image: url('{{$item->url}}'); background-size: cover; width: 100px; height: 60px;">
                                        </div>
                                    </td>
                                    @for ($i = 1; $i < count($image); $i++)
                                        <div class="carousel-item">
                                            <img class="d-block w-100 img-big"
                                                 src="{{$image[$i]->url}}">
                                        </div>
                                    @endfor
                                    <td>
                                        <button type="button" class="btn btn-info">Sửa</button>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger">Xóa</button>
                                    </td>
                                </tr>
                                </tbody>
                            @endforeach
                        </table>
                        <div class="form-group float-right">
                            {{ $image->links()}}
                        </div>
                    </div>
                    <div class="box-footer">
                        <div>
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal"
                                    style="color: #005cbf">
                                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                Thêm mới
                            </button>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Thêm Mới ảnh</h4>
                                    </div>
                                    <form class="form-horizontal" action="/image/store"
                                          enctype="multipart/form-data"
                                          method="post">
                                        {{ csrf_field() }}
                                        <div class="modal-body">
                                            <div class="box-body">
                                                <div class="form-group">
                                                    <input type="text" name="clazzes_name" class="form-control"
                                                           id="clazzes_name"
                                                           placeholder="Loại xe" style="border-radius: 15px">
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
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.row -->
@endsection