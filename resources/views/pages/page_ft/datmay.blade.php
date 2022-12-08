@extends('layout.page')
@section('breadcrumb')
<div class="clear-header"></div>
<div class="breadcrumb">
    <div class="container">
        <ul>
            <li><a href="{{url('trang-chu')}}">Trang chủ</a></li>
            <li><a href="#">Hướng dẫn đặt may</a></li>
        </ul>
    </div>
</div>
@endsection

@section('content')
<div class="main-body bg-details question">
    <div class="container">
        <div class="page_ft-title">Hướng dẫn đặt may</div>
        <div class="box-order">
            <div class="item-order">
                <div class="title">Đặt may trực tiếp qua số điện thoại Hotline</div>
                <div class="desc">Quý khách hàng có thể gọi điện và đặt hàng trực tiếp qua  <span>số điện thoại Hotline</span>  để được tư vấn tốt nhất.</div>
                <div class="content">Hotline Khang: <span> +84 356855566</span></div>
            </div>

            <div class="item-order">
                <div class="title">Đặt may qua kênh Facebook</div>
                <div class="desc"><span>Khang</span> có kênh Fanpage chính thức để tiện cho quý khách hàng theo dõi và liên hệ. Quý khách hàng liên hệ qua kênh Facebook xin vui lòng truy cập đường link sau:                </div>
                <div class="content">Fanpage Khang: <a href="https://www.facebook.com/TonsFashion">https://www.facebook.com/TonsFashion</a></div>
                <div class="image p-4">
                    <img src="{{asset('front-end/imgs/page-fb.PNG')}}" alt="">
                </div>
            </div>

            <div class="item-order">
                <div class="title">Đến trực tiếp cửa hàng Khang</div>
                <div class="content">Địa chỉ: 489 ấp Mỹ Huề, xã Nhơn Mỹ, huyện Kế Sách, tỉnh Sóc Trăng.</div>
                <div class="image p-4">
                    <img src="{{asset('front-end/imgs/address.PNG')}}" alt="">
                    <div class="clearfix-2"></div>
                    <iframe style="width:100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3931.8145927196438!2d106.03614631416501!3d9.781750379439396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a04565951e6141%3A0xb097c6b58acc3c60!2zVG9ucyDDgW8gbmfFqSB0aMOibiB0cnV54buBbiB0aOG7kW5n!5e0!3m2!1svi!2s!4v1669449141453!5m2!1svi!2s" width="" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection