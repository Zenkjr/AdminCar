@extends('fontEnd.layout.master')
@section('title', 'Tin tức | An Thịnh AUTO')

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-8 mt-3">
                <div class="article-list listing-layout">
                    <h3>Tin tức An Thịnh AUTO</h3>

                    @foreach($articles as $article)
                        <article class="article-item type-text">
                            <p class="article-thumbnail">
                                <a href="tin-tuc/{{$article->id}}" title="{{$article->article_title}}">
                                    <img src="{{$article->image}}" alt="{{$article->article_title}}">
                                </a>
                            </p>
                            <header>
                                <p class="article-title">
                                    <a href="tin-tuc/{{$article->id}}">{{$article->article_title}}</a>
                                </p>
                                <p class="article-meta">
								<span class="article-publish">
									<span class="time">12:00</span>
									<span class="date">12/12/2011</span>
								</span>
                                </p>
                                <p class="article-summary">{{$article->description}}</p>
                            </header>
                        </article>
                    @endforeach

                    <div class="float-right mt-2">
                        {{ $articles->links() }}
                    </div>

                </div>
            </div>
            <div class="col-4 mt-3">
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