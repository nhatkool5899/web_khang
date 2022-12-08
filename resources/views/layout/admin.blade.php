<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="https://res.cloudinary.com/xuan-nong/image/upload/v1639585625/lo_fd3hab.jpg">

    <link href="https://res.cloudinary.com/xuan-nong/image/upload/v1639585625/lo_fd3hab.jpg" rel="shortcut icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Quản lý - @yield('title')</title>

    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="{{asset('back-end/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('back-end/css/style.css')}}">
    <!-- END: CSS Assets-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="admin_app">
    <div>
        <div class="flex mt-[4.7rem] md:mt-0">
            <!-- BEGIN: Side Menu -->
            <nav class="side-nav">
                <a href="/quanly" class="intro-x flex items-center pl-5 pt-4" id="logoquanli">
                    <img alt="Logo" class="w-6" id="logohead" src="{{asset('back-end/imgs/logo-ft.png')}}">
                </a>
                <div class="side-nav__devider my-6"></div>
                <ul>
                    <li>
                        <a href="{{url('dashboard')}}" class="side-menu">
                            <div class="side-menu__icon"><i class="fa-solid fa-chart-simple"></i></div>
                            <div class="side-menu__title">Dashboard
                            </div>
                        </a>
                    </li>
                    
                    <li>
                        <a class="side-menu show-submenu">
                            <div class="side-menu__icon"> <i class="fa-solid fa-house-chimney"></i></div>
                            <div class="side-menu__title">Quản lý Trang chủ <i class="fa-solid fa-chevron-right icon-submenu"></i></div>
                        </a>
                        <ul class="drop-submenu">
                            <li><a class="side-menu" href="{{route('home-banner.index')}}"><i class="fa-regular fa-images"></i> Banner</a></li>
                            <li><a class="side-menu" href="{{route('photo-layout.index')}}"><i class="fa-brands fa-figma"></i> Layout Ảnh</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('banner.index')}}" class="side-menu">
                            <div class="side-menu__icon"><i class="fa-regular fa-image"></i></div>
                            <div class="side-menu__title">Quản lý Banner</div>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('whatsnew/index')}}" class="side-menu">
                            <div class="side-menu__icon"><i class="fa-brands fa-neos"></i></div>
                            <div class="side-menu__title">Quản lý What's New</div>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('sanpham.index')}}" class="side-menu">
                            <div class="side-menu__icon">
                                <i class="fa-solid fa-screwdriver-wrench"></i>
                            </div>
                            <div class="side-menu__title">Quản lý Sản phẩm</div>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('collected.index')}}" class="side-menu">
                            <div class="side-menu__icon">
                                <i class="fa-solid fa-book-tanakh"></i>
                            </div>
                            <div class="side-menu__title">Quản lý Khách hàng</div>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('service.index')}}" class="side-menu">
                            <div class="side-menu__icon">
                                <i class="fa-solid fa-layer-group"></i>
                            </div>
                            <div class="side-menu__title">Quản lý Dịch vụ</div>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('tulieu.index')}}" class="side-menu">
                            <div class="side-menu__icon">
                                <i class="fa-solid fa-book-open-reader"></i>
                            </div>
                            <div class="side-menu__title">Quản lý Tư liệu</div>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('about.index')}}" class="side-menu">
                            <div class="side-menu__icon">
                                <i class="fa-solid fa-book-open-reader"></i>
                            </div>
                            <div class="side-menu__title">Quản lý About Khang</div>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('stories/index')}}" class="side-menu">
                            <div class="side-menu__icon">
                                <i class="fa-solid fa-book-open-reader"></i>
                            </div>
                            <div class="side-menu__title">Quản lý Stories</div>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('cauhoi.index')}}" class="side-menu">
                            <div class="side-menu__icon">
                                <i class="fa-solid fa-book-open-reader"></i>
                            </div>
                            <div class="side-menu__title">Quản lý Câu hỏi</div>
                        </a>
                    </li>
                    <li class="side-nav__devider my-6"></li>
                    <li style="padding-top: 60px;">
                        <a href="{{url('auth/khang/logout')}}" class="side-menu">
                            <div class="side-menu__icon">
                                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                            </div>
                            <div class="side-menu__title">Đăng xuất</div>
                        </a>
                    </li>
                    <li class="side-nav__devider my-6"></li>
    
    
                </ul>
            </nav>
            <!-- END: Side Menu -->
            <!-- BEGIN: Content -->
            <div class="content">
                <!-- BEGIN: Top Bar -->
                <div class="top-bar">
                    <!-- BEGIN: Breadcrumb -->
                    <nav aria-label="breadcrumb" class="-intro-x mr-auto hidden sm:flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/quanly">Quản trị</a></li>
                            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
                        </ol>
                    </nav>
                    <!-- END: Breadcrumb -->
                    <!-- BEGIN: Account Menu -->
    
    
                    <div class="intro-x dropdown" style="color: #000">
                        <div class="dropdown-toggle rounded-full overflow-hidden shadow-lg image-fit zoom-in" role="button" aria-expanded="false" data-tw-toggle="dropdown" style="width:3.2rem;height:3.2rem">
                            <img src="{{asset('back-end/imgs/admin_img.jpg')}}">
                        </div>
                        {{-- <div class="dropdown-menu w-56">
                            <ul class="dropdown-content bg-primary text-white">
                                <li class="p-2">
                                    <div class="text-center">Chào <strong>{{Auth::user()->name}}</strong> !</div>
                                </li>
                                <li>
                                    <hr class="dropdown-divider border-white/[0.08]">
                                </li>
                                <li>
                                    <a href="/nguoidung/suanguoidung/{{Auth::user()->id_user}}" class="dropdown-item hover:bg-white/5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="user" data-lucide="user" class="lucide lucide-user w-4 h-4 mr-2">
                                            <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>Thông tin người dùng
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider border-white/[0.08]">
                                </li>
                                <li>
                                    <a href="/dangxuat" class="dropdown-item hover:bg-white/5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="toggle-right" data-lucide="toggle-right" class="lucide lucide-toggle-right w-4 h-4 mr-2">
                                            <rect x="1" y="5" width="22" height="14" rx="7" ry="7"></rect>
                                            <circle cx="16" cy="12" r="3"></circle>
                                        </svg>Đăng xuất
                                    </a>
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
                <!-- END: Account Menu -->
                <!-- END: Top Bar -->
                @yield('content')
            </div>
            <!-- END: Content -->
        </div>
    </div>

    {{-- Lib Js --}}
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <!-- BEGIN: JS Assets-->
    <script src="{{asset('back-end/js/style.js')}}"></script>
    {{-- <script src="{{asset('back-end/js/app.js')}}"></script> --}}
    <script src="{{asset('back-end/ckeditor/ckeditor.js')}}"></script>
    <!-- END: JS Assets-->
    <script>
        jQuery(function($) {
            var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
            $('ul a').each(function() {
                if (this.href === path) {
                    $(this).addClass('side-menu--active');
                }
            });
        });
    </script>

<script type="text/javascript">

    CKEDITOR.replace('ckeditor');
    // Slug auto
    function ChangeToSlug()
        {
            var slug;
            
            //Lấy text từ thẻ input title 
            slug = document.getElementById("slug").value;
            slug = slug.toLowerCase();
            //Đổi ký tự có dấu thành không dấu
                slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
                slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
                slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
                slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
                slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
                slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
                slug = slug.replace(/đ/gi, 'd');
                //Xóa các ký tự đặt biệt
                slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
                //Đổi khoảng trắng thành ký tự gạch ngang
                slug = slug.replace(/ /gi, "-");
                //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
                //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
                slug = slug.replace(/\-\-\-\-\-/gi, '-');
                slug = slug.replace(/\-\-\-\-/gi, '-');
                slug = slug.replace(/\-\-\-/gi, '-');
                slug = slug.replace(/\-\-/gi, '-');
                //Xóa các ký tự gạch ngang ở đầu và cuối
                slug = '@' + slug + '@';
                slug = slug.replace(/\@\-|\-\@|\@/gi, '');
                //In slug ra textbox có id “slug”
            document.getElementById('convert_slug').value = slug;
        }
              
  </script> 

</body>

</html>