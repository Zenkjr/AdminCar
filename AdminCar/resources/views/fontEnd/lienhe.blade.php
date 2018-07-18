@extends('fontEnd.layout.master')
@section('title', 'An Thịnh AUTO')

@section('body')
    <div class="container">
        <div class="col-md-12">

            <div class="row">
                <div class="col-md-6 mt-5">

                    <form class="container form-control" action="/post/lienhe" method="post">
                        {{csrf_field()}}
                        <h3 class="text-center">LIÊN HỆ VỚI CHÚNG TÔI</h3>
                        <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                            </div>
                                <input name="name" class="form-control"  placeholder="Họ Tên Của Bạn">
                            </div>


                        <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-map-marker"></i></span>
                            </div>
                            <input class="form-control" name="address"  placeholder="Địa Chỉ Của Bạn">
                        </div>

                        <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-phone"></i></span>
                            </div>
                            <input class="form-control" name="phone"  placeholder="Số Điện Thoại Của Bạn">

                        </div>

                        <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span>
                            </div>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

                        </div>
                        <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-quote-right"></i></span>
                            </div>
                            <input class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tiêu Đề Của Bạn">

                        </div>

                        <div class="form-group mt-3">
                            <!-- <input type="textarea" name="noidung">  -->
                            <textarea class="form-control" name="content" id="exampleFormControlTextarea1" placeholder="Nội dung" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-danger btn-block">Gửi Liên Hệ</button>
                    </form>
                </div>
                <div class="col-md-6 mt-5" >
                    <!-- <form class="form-control"> -->
                    <div class="border-bottom">
                        <h4>CÔNG TY CỔ PHẦN XE AN THỊNH AUTO</h4>
                        <h5>Văn phòng đại diện: </h5>
                        <p>Cơ sở 1 : <button class="btn btn-link" id="map1">39 Đường Lê Văn Lương, Trung Hoà, Cầu Giấy, Hà Nội</button></p>
                        <p>Cơ Sở 2 : <button class="btn btn-link" id="map2">99 Nguyễn Chánh, Trung Hoà, Cầu Giấy, Hà Nội</button></p>
                        <h5>Hotline mua bán :</h5>
                        <a href="tel:0961694594">0961.694.594</a>
                        <h5>Email:</h5>
                        <a href="mailto:tran.trungviet19@gmail.com">tran.trungviet19@gmail.com</a>
                    </div>
                    <div id="map">
                        <iframe class="pt-3 w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.58372841617!2d105.80747501446614!3d21.009317186008904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac9e43748717%3A0x88517efdb51c1e3a!2zMzkgxJDGsOG7nW5nIEzDqiBWxINuIEzGsMahbmcsIFRydW5nIEhvw6AsIEPhuqd1IEdp4bqleSwgSMOgIE7hu5lpLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1528797715142" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $("#map1").click(function(){
                $("#map").html('<iframe class="pt-3 w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.58372841617!2d105.80747501446614!3d21.009317186008904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac9e43748717%3A0x88517efdb51c1e3a!2zMzkgxJDGsOG7nW5nIEzDqiBWxINuIEzGsMahbmcsIFRydW5nIEhvw6AsIEPhuqd1IEdp4bqleSwgSMOgIE7hu5lpLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1528797715142" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>');
            });
            $("#map2").click(function(){
                $("#map").html('<iframe class="pt-3 w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.5741962381653!2d105.79184171482733!3d21.00969899380486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135aca62bafbdff%3A0x64345e5de0ad9de8!2zOTkgTmd1eeG7hW4gQ2jDoW5oLCBUcnVuZyBIb8OgLCBD4bqndSBHaeG6pXksIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1528897008761" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>');
                $("#map").html('<iframe class="pt-3 w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.5743212634084!2d105.79184171446607!3d21.009693986008752!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135aca62bafbdff%3A0x64345e5de0ad9de8!2zOTkgTmd1eeG7hW4gQ2jDoW5oLCBUcnVuZyBIb8OgLCBD4bqndSBHaeG6pXksIEjDoCBO4buZaSwgVmlldG5hbQ!5e0!3m2!1sen!2s!4v1529050732372" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>');
            });
        });
    </script>
@endsection
