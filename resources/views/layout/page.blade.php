<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    
    <link rel="icon" href="{{asset('front-end/imgs/logo/k-icon.png')}}" type="image/x-icon">
    <title>Khang - Hoàng Duy Khang</title>


    <!-- link cdn css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Lib css -->
    <link rel="stylesheet" href="{{asset('font-end/css/all.min.css')}}">

    <!-- Css -->
    <link rel="stylesheet" href="{{asset('front-end/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('front-end/css/base.css')}}">
    <link rel="stylesheet" href="{{asset('front-end/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('front-end/css/responsive.css')}}">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v15.0&appId=396469165987143&autoLogAppEvents=1" nonce="KJqN8zBb"></script>

    <div class="app">
        <header>
            <div class="header block transparent">
                <div class="header_top">
                    <div class="nav_mobile">
                        <div class="btn_show-menu">
                            <i class="fa-regular fa-bars"></i>
                            <span>menu</span>
                        </div>
                        <ul class="nav_mobile-menu">

                            <li>
                                <a class="nav_mobile-item" href="{{url('whats-new')}}"><span>What's new</span></a>
                            </li>
                            <li>
                                <a class="nav_mobile-item" href="{{url('bo-suu-tap')}}"><span>Bộ sưu tập</span></a>
                            </li>
                            <li>
                                <a class="nav_mobile-item" href="{{url('phu-kien')}}"><span>Phụ kiện</span></a>
                            </li>
                            <li>
                                <a class="nav_mobile-item" href="{{url('chat-lieu')}}"><span>Chất liệu</span></a>
                            </li>
                            <li>
                                <a class="nav_mobile-item" href="{{url('khach-hang')}}"><span>Khách hàng</span></a>
                            </li>
                            <li>
                                <a class="nav_mobile-item" href="{{url('dich-vu')}}"><span>Dịch vụ</span></a>
                            </li>
                            <li>
                                <a class="nav_mobile-item" href="{{url('tu-lieu')}}"><span>Tư liệu</span></a>
                            </li>
                            <li>
                                <a class="nav_mobile-item" href="{{url('about-khang')}}"><span>About khang</span></a>
                            </li>


                            <span class="close-nav_mobile"><i class="fa-solid fa-xmark"></i></span>
                            <a class="phone-mobile" href="tel:0357855566"><i class="fa-duotone fa-phone-volume"></i> +84 357855566</a>
                        
                        </ul>
                    </div>
                    <div class="logo">
                        <a href="{{url('trang-chu')}}" class="link-logo">
                            <img src="{{asset('front-end/imgs/logo/logo.png')}}" alt="">
                        </a>
                    </div>
                    <div class="search-body">
                        <div class="search-content">
                            <div class="container-ft">
                                <div class="search-top">
                                    <span>Bạn cần tìm gì?</span>
                                    <span class="btn-search-close"><i class="fa-regular fa-x"></i></span>
                                </div>
                                <div class="search-bottom">
                                    <form action="{{url('search')}}" class="form-search" method="POST">
                                    @csrf
                                        <input type="search" class="search_input" name="keywords" placeholder="Tìm kiếm ...">
                                        <button type="submit" class="btn-search-submit"><i class="fa-light fa-magnifying-glass"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-search">
                        <span class="btn-search active"><i class="fa-regular fa-magnifying-glass"></i></span>
                    </div>
                </div>
                <div class="header_bottom">
                    <div class="menu_nav">
                        <ul class="menu_nav-list">
                            <li>
                                <a class="menu_nav-item" href="{{url('whats-new')}}"><span>What's new</span></a>
                            </li>
                            <li>
                                <a class="menu_nav-item" href="{{url('bo-suu-tap')}}"><span>Bộ sưu tập</span></a>
                            </li>
                            <li>
                                <a class="menu_nav-item" href="{{url('phu-kien')}}"><span>Phụ kiện</span></a>
                            </li>
                            <li>
                                <a class="menu_nav-item" href="{{url('chat-lieu')}}"><span>Chất liệu</span></a>
                            </li>
                            <li>
                                <a class="menu_nav-item" href="{{url('khach-hang')}}"><span>Khách hàng</span></a>
                            </li>
                            <li>
                                <a class="menu_nav-item" href="{{url('dich-vu')}}"><span>Dịch vụ</span></a>
                            </li>
                            <li>
                                <a class="menu_nav-item" href="{{url('tu-lieu')}}"><span>Tư liệu</span></a>
                            </li>
                            <li>
                                <a class="menu_nav-item" href="{{url('about-khang')}}"><span>About khang</span></a>
                            </li>
                           
                        </ul>
                    </div>
                    <div class="hotline">
                        <a href="tel:0357855566"><i class="fa-duotone fa-phone-volume"></i> +84 357855566</a>
                    </div>
                </div>
            </div>
        </header>

        @yield('breadcrumb')

        @yield('banner')

        @yield('breadcrumb-2')
        

        <main>
            @yield('content')
            <div class="clearfix"></div>
        </main>

        <footer>
            <div class="footer">
                <div class="container container-ft">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="contact-ft">
                                <a href="#" class="logo"><img src="{{asset('front-end/imgs/logo/logo-ft-2.png')}}" alt=""></a>
                                <div class="contact-title">Áo dài ngũ thân truyền thống</div>
                                <ul class="contact-list">
                                    <li>Điện thoại: +84 356855566</li>
                                    <li>08:30 - 20:30 tất cả các ngày trong tuần</li>
                                    <li> Địa chỉ: 489 ấp Mỹ Huề, xã Nhơn Mỹ, huyện Kế Sách, tỉnh Sóc Trăng</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-12">
                            <div class="support">
                                <div class="ft-title">Hỗ trợ khách hàng</div>
                                <ul>
                                    <li><a href="{{url('cau-hoi-thuong-gap')}}">Câu hỏi thường gặp</a></li>
                                    <li><a href="{{url('huong-dan-lay-so-do')}}">Hướng dẫn lấy số đo</a></li>
                                    <li><a href="{{url('huong-dan-dat-may')}}">Hướng dẫn đặt may</a></li>
                                    <li><a href="{{url('chinh-sach-doi-tra')}}">chính sách đổi trả</a></li>
                                    <li><a href="{{url('lien-he')}}">Liên hệ</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="advise">
                                <div class="ft-title">Đăng ký tư vấn</div>
                                <div class="advise-txt">
                                    Nếu bạn có bất kì thắc mắc nào
                                    về sản phẩm/dịch vụ của chúng tôi.
                                    Hãy để lại số điện thoại, chúng tôi
                                    sẽ liên hệ với bạn sớm nhất!                                 
                                </div>
                                <div class="advise-form">
                                    <form>
                                        <input type="number" class="advise-input" placeholder="Số điện thoại">
                                        <span class="advise-submit">Gửi</span>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="connection">
                                <div class="ft-title">Kết nối</div>
                                <div class="cnt-top">
                                    <img src="{{asset('front-end/imgs/qr-zalo.png')}}" alt="">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3931.8145927196438!2d106.03614631416501!3d9.781750379439396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a04565951e6141%3A0xb097c6b58acc3c60!2zVG9ucyDDgW8gbmfFqSB0aMOibiB0cnV54buBbiB0aOG7kW5n!5e0!3m2!1svi!2s!4v1669733235267!5m2!1svi!2s" width="220" height="70" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                                <div class="cnt-bottom">
                                    <div class="fb-page" data-href="https://www.facebook.com/TonsFashion/" data-tabs="" data-width="300" data-height="" data-small-header="false" data-adapt-container-width="" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/TonsFashion/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/TonsFashion/">Tons - Áo Dài Ngũ Thân Truyền Thống</a></blockquote></div>
                                </div>
                                <div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">© 2022 Copyright Khang Hoang Duy Khang</div>
        </footer>

        {{-- <div class="social">
            <ul>
                <li><a target="blank" href="https://www.facebook.com/TonsFashion" class="link-social link-fb"><img src="{{asset('front-end/imgs/facebook-icon.png')}}" alt=""></a></li>
                <li><a href="#" class="link-social"><img src="{{asset('front-end/imgs/zalo-icon.png')}}" alt=""></a></li>
                <li><a target="blank" href="https://www.youtube.com/channel/UCcAHwrvnEwepFMGvnsGPclw" class="link-social link-yt"><img style="width:30px;height:30px" src="{{asset('front-end/imgs/yt-icon2.png')}}" alt=""></a></li>
            </ul>
        </div>
        <div class="scrollTop">
            <a href="#top"><i class="fa-regular fa-circle-chevron-up"></i></a>
        </div> --}}

        <div class="zoom_loaded-img">
            <div class="loaded-title">
                {{-- <span class="zoom_in-img"><i class="fa-regular fa-magnifying-glass-plus"></i></span> --}}
                <span class="zoom_down-img"><i class="fa-duotone fa-down-to-line"></i></span>
                <span class="zoom_close-img"><i class="fa-solid fa-xmark"></i></span>
            </div>
            <div class="loaded-content">
                <img class="loaded-img" src="" alt="">
            </div>
        </div>
    </div>

    
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>


    <!-- Cdn js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <!-- js -->
    <script src="{{asset('front-end/js/all.min.js')}}"></script>
    <script src="{{asset('front-end/js/FileSaver.js')}}"></script>
    <script src="{{asset('front-end/js/main.js')}}"></script>

    <script>
        jQuery(function($) {
            var path = window.location.href;
            $('.menu_nav-item').each(function() {
                if (this.href === path) {
                    $(this).addClass('active');
                }
            });
        });
    </script>

    <script type="text/javascript">
        let btnDown = document.querySelector('.zoom_down-img');
        let img = document.querySelector('.loaded-img');
        btnDown.addEventListener('click', () => {
            let imgPath =  img.getAttribute('src');
            let fileName = getFileName(imgPath);

            saveAs(imgPath, fileName);
        });

        function getFileName(str) {
            return str.substring(str.lastIndexOf('/') + 1);
        }
    </script>

</body>
</html>