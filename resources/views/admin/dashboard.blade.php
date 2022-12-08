@extends('layout.admin')
@section('title', 'Trang chủ')
@section('content')
<div class="grid grid-cols-12 gap-6">
    <!-- BEGIN: General Report -->
    <div class="col-span-12 mt-8">
        <div class="intro-y flex items-center h-10">
            <h2 class="text-lg font-medium truncate mr-5">Tổng quan</h2>
        </div>
        {{-- <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                <a href="/quanly/sanpham">
                    <div class="report-box zoom-in">
                        <div class="box p-5">
                            <div class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="report-box__icon text-primary">
                                    <path d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 1-2 2Zm0 0a2 2 0 0 1-2-2v-9c0-1.1.9-2 2-2h2"></path>
                                    <path d="M18 14h-8"></path>
                                    <path d="M15 18h-5"></path>
                                    <path d="M10 6h8v4h-8V6Z"></path>
                                </svg>
                                <div class="ml-auto">
                                    <div class="report-box__indicator">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="chevron-up" data-lucide="chevron-up" class="lucide lucide-chevron-up w-4 h-4 ml-0.5">
                                            <polyline points="18 15 12 9 6 15"></polyline>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="text-base text-slate-500 mt-1">Sản phẩm</div>
                            <div class="text-3xl font-medium leading-8 mt-6">6</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                <a href="/quanly/lienhe">
                    <div class="report-box zoom-in">
                        <div class="box p-5">
                            <div class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="report-box__icon text-warning">
                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                </svg>
                                <div class="ml-auto">
                                    <div class="report-box__indicator">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="chevron-down" data-lucide="chevron-down" class="lucide lucide-chevron-down w-4 h-4 ml-0.5">
                                            <polyline points="6 9 12 15 18 9"></polyline>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="text-base text-slate-500 mt-1">Liên hệ</div>
                            <div class="text-3xl font-medium leading-8 mt-6">5</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                <a href="/quanly/daily">
                    <div class="report-box zoom-in">
                        <div class="box p-5">
                            <div class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="report-box__icon text-danger">
                                    <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                                    <path d="M8 4H6a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-.5"></path>
                                    <path d="M16 4h2a2 2 0 0 1 1.73 1"></path>
                                    <path d="M18.42 9.61a2.1 2.1 0 1 1 2.97 2.97L16.95 17 13 18l.99-3.95 4.43-4.44Z"></path>
                                    <path d="M8 18h1"></path>
                                </svg>
                                <div class="ml-auto">
                                    <div class="report-box__indicator">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="chevron-up" data-lucide="chevron-up" class="lucide lucide-chevron-up w-4 h-4 ml-0.5">
                                            <polyline points="18 15 12 9 6 15"></polyline>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="text-base text-slate-500 mt-1">Đại lý</div>
                            <div class="text-3xl font-medium leading-8 mt-6">4</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                <a href="/quanly/tintuc">
                    <div class="report-box zoom-in">
                        <div class="box p-5">
                            <div class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="report-box__icon text-warning">
                                    <path d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 1-2 2Zm0 0a2 2 0 0 1-2-2v-9c0-1.1.9-2 2-2h2"></path>
                                    <path d="M18 14h-8"></path>
                                    <path d="M15 18h-5"></path>
                                    <path d="M10 6h8v4h-8V6Z"></path>
                                </svg>
                                <div class="ml-auto">
                                    <div class="report-box__indicator">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="chevron-up" data-lucide="chevron-up" class="lucide lucide-chevron-up w-4 h-4 ml-0.5">
                                            <polyline points="18 15 12 9 6 15"></polyline>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="text-base text-slate-500 mt-1">Tin tức</div>
                            <div class="text-3xl font-medium leading-8 mt-6">3</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                <a href="/quanly/kythuatnuoitrong">
                    <div class="report-box zoom-in">
                        <div class="box p-5">
                            <div class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="report-box__icon text-danger">
                                    <path d="M2 20a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8l-7 5V8l-7 5V4a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2Z"></path>
                                    <path d="M17 18h1"></path>
                                    <path d="M12 18h1"></path>
                                    <path d="M7 18h1"></path>
                                </svg>
                                <div class="ml-auto">
                                    <div class="report-box__indicator">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="chevron-up" data-lucide="chevron-up" class="lucide lucide-chevron-up w-4 h-4 ml-0.5">
                                            <polyline points="18 15 12 9 6 15"></polyline>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="text-base text-slate-500 mt-1">Kỹ thuật nuôi trồng</div>
                            <div class="text-3xl font-medium leading-8 mt-6">2</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                <a href="/quanly/cuahang">
                    <div class="report-box zoom-in">
                        <div class="box p-5">
                            <div class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="report-box__icon text-primary">
                                    <rect x="4" y="2" width="16" height="20" rx="2" ry="2"></rect>
                                    <path d="M9 22v-4h6v4"></path>
                                    <path d="M8 6h.01"></path>
                                    <path d="M16 6h.01"></path>
                                    <path d="M12 6h.01"></path>
                                    <path d="M12 10h.01"></path>
                                    <path d="M12 14h.01"></path>
                                    <path d="M16 10h.01"></path>
                                    <path d="M16 14h.01"></path>
                                    <path d="M8 10h.01"></path>
                                    <path d="M8 14h.01"></path>
                                </svg>
                                <div class="ml-auto">
                                    <div class="report-box__indicator">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="chevron-up" data-lucide="chevron-up" class="lucide lucide-chevron-up w-4 h-4 ml-0.5">
                                            <polyline points="18 15 12 9 6 15"></polyline>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="text-base text-slate-500 mt-1">Hệ thống cửa hàng</div>
                            <div class="text-3xl font-medium leading-8 mt-6">1</div>
                        </div>
                    </div>
                </a>
            </div>
        </div> --}}
    </div>

</div>
@endsection