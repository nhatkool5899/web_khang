@extends('layout.page')
@section('breadcrumb')
<div class="breadcrumb" style="box-shadow: 0 2px 8px #ccc">
    <div class="container">
        <ul>
            <li><a href="{{url('trang-chu')}}">Trang chủ</a></li>
            <li><a href="#">About Khang</a></li>
        </ul>
    </div>
</div>
@endsection

{{-- @section('banner')
<section class="box-banner style-banner">
    <div class="banner">
        <img src="{{asset('uploads/banner/'.$banner->img)}}" alt="{{$banner->img}}">
    </div>
</section>
@endsection --}}
<div class="clear-header"></div>

<style>
    @media (max-width: 568px){
        .box-search {
            top: 22px !important;
            right: 16px !important;
        }
    }
</style>

@section('content')
<div class="main-body">
    <div class="about-body">
        <div class="container">
            <div class="intro_about">
                <div class="row">
                    <div class="col-md-6">
                        <div class="intro_about-left">
                            <h2>Giới thiệu về Khang</h2>
                            <h5>{{$about->title_1}}</h5>
                            <p>{{$about->text_1}}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="intro_about-right">
                            <img src="{{asset('uploads/about/'.$about->img_1)}}" alt="">
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="intro_about-right">
                            <img src="{{asset('uploads/about/'.$about->img_2)}}" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="intro_about-left" style="padding-right:0">
                            <h2>Áo dài ngũ thân?</h2>
                            <h5>Sơ lược về áo dài ngũ thân</h5>
                            <p>{{$about->text_2}}</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="about-text">{{$about->text_3}}</div>
                    </div>

                    <div class="col-md-12">
                        <div class="about-title">
                            Đặc điểm và ý nghĩa của áo dài ngũ thân
                        </div>
                        <div class="about-text">
                            {{$about->text_4}}
                        </div>
                        <div class="about-img">
                            <img src="{{asset('uploads/about/'.$about->img_3)}}" alt="">
                        </div>
                        <div class="about-text">
                            {{$about->text_5}}
                        </div>
                    </div>
                    <div class="clearfix-2"></div>
                    {{-- <div class="col-md-12 text-center">
                        <iframe width="660" height="355" src="https://www.youtube.com/embed/fFYqXKViTBU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div> --}}
                    
                </div>
            </div>
        </div>
        <div class="clearfix" id="lienhe" style="height: 200px"></div>
        {{-- <div class="container container-ft">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-left">
                        <ul class="contact-left-list">
                            <li>
                                <span class="contact-icon"><i style="padding:  0 14px" class="fa-regular fa-location-dot"></i></span>
                                <div class="contact-item">
                                    <h4>Địa chỉ:</h4>
                                    <p> 489 ấp Mỹ Huề, xã Nhơn Mỹ, huyện Kế Sách, tỉnh Sóc Trăng.</p>
                                </div>
                            </li>
                            <li>
                                <span class="contact-icon"><i class="fa-regular fa-envelope"></i></span>
                                <div class="contact-item">
                                    <h4>Email:</h4>
                                    <p>admin@gmail.com</p>
                                </div>
                            </li>
                            <li>
                                <span class="contact-icon"><i class="fa-light fa-mobile"></i></span>
                                <div class="contact-item">
                                    <h4>Số điện thoại:</h4>
                                    <p>+84 356855566</p>
                                </div>
                            </li>
                        </ul>
                        <div class="contact-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3931.8145927196438!2d106.03614631416501!3d9.781750379439396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a04565951e6141%3A0xb097c6b58acc3c60!2zVG9ucyDDgW8gbmfFqSB0aMOibiB0cnV54buBbiB0aOG7kW5n!5e0!3m2!1svi!2s!4v1669449141453!5m2!1svi!2s" width="600" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact-right">
                        <div class="ct-right-title">Gửi thông tin liên hệ:</div>
                        <form class="row g-3">
                            <div class="col-md-6 form-group">
                              <label for="inputEmail" class="form-label style-label">Tên của bạn</label>
                              <input type="email" class="form-control style-input" id="inputEmail4" placeholder="Nhật">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="inputEmail" class="form-label style-label">Email</label>
                                <input type="email" class="form-control style-input" id="inputEmail" placeholder="adb@gmail.com">
                              </div>
                            <div class="col-12 form-group">
                              <label for="inputPhone" class="form-label style-label">Số điện thoại</label>
                              <input type="text" class="form-control style-input" id="inputPhone" placeholder="0907 000">
                            </div>
                            <div class="col-12 form-group">
                                <label for="inputMessage" class="form-label style-label">Lời nhắn: </label>
                                <textarea name="" class="form-control" rows="6"></textarea>
                              </div>
                            <div class="col-12 form-group text-center">
                              <button type="submit" class="btn btn-primary btn-style">Gửi Ngay</button>
                            </div>
                          </form>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</div>
@endsection