@extends('layout.page')
@section('breadcrumb')
<div class="clear-header"></div>
<div class="breadcrumb">
    <div class="container">
        <ul>
            <li><a href="{{url('trang-chu')}}">Trang chủ</a></li>
            <li><a href="#">Chính sách đổi trả</a></li>
        </ul>
    </div>
</div>
@endsection

@section('content')
<div class="main-body bg-details question">
    <div class="container">
        <div class="page_ft-title">Chính sách bảo hành và đổi trả </div>
        <div class="box-take-number">
            <div class="heading">
                Mặc dù bộ phận kiểm soát chất lượng sản phẩm của <span>Khang</span> đã kiểm duyệt sách trước khi giao cho khách hàng nhưng cũng không thể tránh khỏi sai sót nên rất mong quý khách vui lòng kiểm tra sản phẩm trước khi ký xác nhận với nhân viên giao hàng để đảm bảo chất lượng sản phẩm được đảm bảo. Trường hợp, sản phẩm không đúng như đã đặt mua qua website hay sản phẩm bị hư hỏng (rách, xước, lỗi chất liệu …), quý khách có quyền từ chối nhận và yêu cầu <span>Khang</span> đổi sản phẩm khác.
            </div>
            <div class="entry-content">
                <p>Quy định đổi hàng:</p>
                <p class="entry-text">Trường hợp sản phẩm bị hư hỏng do quá trình vận chuyển; sản phẩm không đúng quy cách chất lượng hay được giao nhầm bởi <span>Khang</span>: Khách hàng vui lòng kiểm tra và từ chối nhận hàng ngay tại thời điểm nhận hàng ( Khang không chịu trách nhiệm giải quyết trong trường hợp khách hàng đã ký nhận và thanh toán sản phẩm ).

                   <br> Đối với khách hàng thanh toán trước ( ngoại thành Hà Nội và các tỉnh thành ngoài Hà Nội ) quý khách vui lòng phản ánh chậm nhất trong vòng 24h kể từ thời điểm nhận hàng để được hỗ trợ giải quyết và đổi sản phẩm miễn phí.</p>

                <div class="image text-center">
                    <img src="https://nhaxasilk.com/wp-content/uploads/2022/03/chinh-sach-doi-hang.jpg" alt="">
                </div>
                <div class="entry-text">
                    Chúng tôi khuyến nghị khách hàng hãy liên lạc ngay với chúng tôi qua mail ( luanhaxa.vn@gmail.com ), hoặc qua số điện thoại 0943.549.019 (24/24h) ngay khi nhận thấy sự sai khác của sản phẩm so với báo giá mà quý khách đã nhận.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection