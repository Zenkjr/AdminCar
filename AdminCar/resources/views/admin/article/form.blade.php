@extends('layout.admin_template')

@section('content')
    <section class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="col-md-9 ">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="box-title text-center">{{$title}}</h3>
                            </div>
                            <form action="{{$action}}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                @if($method == 'put')
                                    <input type="hidden" name="_method" value="put">
                                    @endif
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="input-group input-group-lg">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-lg">Tiêu Đề</span>
                                            </div>
                                            <input type="text" name="article_title" value="{{$article->article_title}}" class="form-control"
                                                   aria-label="Large"
                                                   aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Mô tả</span>
                                            </div>
                                            <textarea class="form-control" name="description" aria-label="With textarea">{{$article->description}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Nội Dung</span>
                                            </div>
                                            <textarea class="form-control" name="content" aria-label="With textarea">{{$article->content}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-default col-sm-1">Cancel</button>
                                    <button type="submit" class="btn btn-info pull-right col-sm-1">Lưu</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('script')
    <script>
        var quill = new Quill('.editor', {
            theme: 'snow'
        });
    </script>
@endsection