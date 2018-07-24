@extends('fontEnd.layout.master')
@section('title')
    {{$article->article_title}}
@endsection

@section('body')
    <div class="container">
        <div class="row mt-3">
            <div class="col-8">
                <h1 class="text-center article-title px-3">{{$article->article_title}}</h1>
                <span class="article-publish px-3">{{$article->publish}}</span>
                <p class="article-description px-3">{{$article->description}}</p>

                <div class="article-conten px-3">
                    <img src="../{{$article->img}}" title="{{$article->article_title}}" alt="{{$article->article_title}}">
                    <br><br>{!! $article->content !!}
                </div>
                <div class="article-source">
                    <p>Nguồn: <strong>{{$article->source}}</strong></p>
                </div>
            </div>

            <div class="col-4">
                <div class="com-hotline com-hotline-news with-support">
                    <h4 class="featured">
                        <i class="web-icon icon-big"></i>
                        Hỗ trợ trả góp toàn quốc
                    </h4>
                    <ul>
                        <li><i class="fas fa-plus"></i>Hỗ trợ 100% thủ tục</li>
                        <li><i class="fas fa-plus"></i>Duyệt vay nhanh</li>
                        <li><i class="fas fa-plus"></i>Tỷ lệ vay cao</li>
                    </ul>
                    <span>Gọi ngay Hotline:</span>
                    <a href="tel:0916461999" class="line line2">0916461999</a>
                </div>
                <div class="com-featured">
                    <span>5 TIÊU CHÍ VÀNG</span>
                    <div class="stars"></div>
                    <ul>
                        <li>1. Xe không tai nạn.</li>
                        <li>2. Xe không thủy kích.</li>
                        <li>3. Xe không đại tu động cơ, hộp số.</li>
                        <li>4. Nguồn gốc xuất xứ rõ ràng.</li>
                        <li>5. Hồ sơ hợp lệ, sang tên ngay.</li>
                    </ul>
                </div>
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fanthinhauto%2F&tabs&width=340&height=196&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="196" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
            </div>
        </div>

    </div>
@endsection