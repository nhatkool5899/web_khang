@extends('layout.page')
@section('breadcrumb')
<div class="clear-header"></div>
<div class="breadcrumb">
    <div class="container">
        <ul>
            <li><a href="{{url('trang-chu')}}">Trang chủ</a></li>
            <li><a href="#">Liên hệ</a></li>
        </ul>
    </div>
</div>
@endsection

@section('content')
<div class="main-body bg-details question">
    <div class="container">
        <div class="page_ft-title">Liên hệ </div>
        <div class="box-take-number">
            <div class="entry-content">
                <p style="color: #111">Khang - Áo dài ngũ thân truyền thống</p>
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="contact-style"> Địa chỉ: 489 ấp Mỹ Huề, xã Nhơn Mỹ, huyện Kế Sách, tỉnh Sóc Trăng.</div>
                        <div class="contact-style"> Email: <span style="font-size: 14px;font-family:system-ui">tons-aodainguthantruyenthong@gmail.com</span>.</div>
                        <div class="contact-style"> Hotline: +84 356855566.</div>

                    </div>

                    <div class="row">
                        <div class="col-md-6 col-12">
    
                            <form class="row g-3 form-contact">
                                <div class="col-12 form-group">
                                  <label for="inputEmail" class="form-label style-label">Họ tên</label>
                                  <input type="email" class="form-control style-input" id="inputEmail4">
                                </div>
                                {{-- <div class="col-12 form-group">
                                    <label for="inputEmail" class="form-label style-label">Email</label>
                                    <input type="email" class="form-control style-input" id="inputEmail" placeholder="adb@gmail.com">
                                  </div> --}}
                                <div class="col-12 form-group">
                                  <label for="inputPhone" class="form-label style-label">Số điện thoại</label>
                                  <input type="text" class="form-control style-input" id="inputPhone">
                                </div>
                                <div class="col-12 form-group">
                                    <label for="inputMessage" class="form-label style-label">Nội dung: </label>
                                    <textarea name="" class="form-control style-input" rows="6"></textarea>
                                </div>
                                <div class="col-12 form-group text-center">
                                  <button type="submit" class="btn btn-style">Gửi Ngay</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection