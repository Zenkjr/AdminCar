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
                            <form class="mt-3" action="{{$action}}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                @if($method == 'put')
                                    <input type="hidden" name="_method" value="put">
                                @endif
                                <div class="form-group row">
                                    <label class="col-md-2" for="">Tiêu đề</label>
                                    <input class="col-md-9" type="text" name="article_title"
                                           class="form-control form-control" value="{{$article->article_title}}">
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2" for="">Mô tả</label>
                                    <input class="col-md-9" type="text" name="description"
                                           class="form-control form-control"
                                           value="{{$article->description}}">
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2" for="">Link ảnh đại diện</label>
                                    <input class="col-md-9" type="text" name="img" class="form-control form-control"
                                           value="{{$article->img}}">
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2" for="">Nội dung</label>
                                    <textarea class="form-control" name="content"
                                              id="summary-ckeditor">{{$article->content}}</textarea>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2" for="">Nguồn</label>
                                    <input class="col-md-9" type="text" name="source" class="form-control form-control"
                                           value="{{$article->source}}">
                                </div>
                                <div class="form-group float-right">
                                    <input type="submit" value="Submit" class="btn btn-dark">
                                    <input type="reset" value="Reset" class="btn btn-dark">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('summary-ckeditor');
    </script>
@endsection
@section('script')
    {{--<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>--}}
    {{--<script>--}}
    {{--CKEDITOR.replace('summary-ckeditor');--}}
    {{--</script>--}}
    {{--<script>--}}
    {{--var quill = new Quill('.editor', {--}}
    {{--theme: 'snow'--}}
    {{--});--}}
    {{--</script>--}}
@endsection