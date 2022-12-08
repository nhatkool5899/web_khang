<!DOCTYPE html>
<html lang="en" class="light">

<head>
    <meta charset="utf-8">
    <link href="dist/images/logo.svg" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="https://res.cloudinary.com/xuan-nong/image/upload/v1639585625/lo_fd3hab.jpg">
    <title>Đăng nhập trang Quản lý</title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="{{asset('back-end/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('back-end/css/style.css')}}">
    <!-- END: CSS Assets-->
</head>

<body class="login">
    <div class="container sm:px-10">
        <div class="block xl:grid grid-cols-2 gap-4">
            <!-- BEGIN: Login Info -->
            <div class="hidden xl:flex flex-col min-h-screen">
                <a href="/dangnhap" class="-intro-x flex items-center pt-5">
                    <img alt="Logo" class="w-6" id="logohead" src="{{asset('back-end/imgs/logo-ft.png')}}">
                    <span class="text-white text-lg ml-3 h1 login-title">Trang phục truyền thống</span>
                </a>
                <div class="my-auto">
                    <img class="-intro-x w-1/2 -mt-16" src="{{asset('back-end/imgs/anh_login.jpg')}}">
                    <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                        Chào mừng bạn đến với trang <strong>quản trị viên</strong> !</div>
                    <div class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-slate-400">Quản lí website Khang</div>
                </div>
            </div>
            <!-- END: Login Info -->
            <!-- BEGIN: Login Form -->
            <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                <div class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                    <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">Đăng nhập vào hệ thống</h2>
                    <br>
                    @if(count($errors)>0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                        {{$err}}<br>
                        @endforeach
                    </div>
                    @endif
                    @if(session('thongbao'))
                    <div class="alert alert-primary">
                        {{session('thongbao')}}<br>
                    </div>
                    @endif
                    <div class="intro-x mt-2 text-slate-400 xl:hidden text-center">Chào mừng bạn đến với trang <strong>quản trị viên</strong> !</div>
                    <form method="POST" action="{{url('auth/khang/login')}}">
                        @csrf
                        <div class="intro-x mt-8">
                            <input name="email" type="email" class="intro-x login__input form-control py-3 px-4 block" placeholder="Địa chỉ email" autofocus>
                        </div>
                        <div class="intro-x mt-8">
                            <input name="password" type="password" class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Mật khẩu">
                        </div>
                        <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                            <button type="submit" class="btn btn-login py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">Đăng nhập</button>
                        </div>
                    </form>
                    <div class="intro-x mt-10 xl:mt-24 text-slate-600 dark:text-slate-500 text-center xl:text-left"></div>
                </div>
            </div>
            <!-- END: Login Form -->
        </div>
    </div>
    <div class="bg-login"></div>
</body>

</html>