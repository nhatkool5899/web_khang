@extends('layout.page')
@section('banner')
<section class="box-banner">
    <div class="banner">
        <div class="slick_banner">
            @foreach ($banner as $item)
            <div class="slick_banner-item">
                <img src="{{asset('uploads/banner-home/'.$item->img)}}" alt="{{$item->img}}">
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection

@section('content')
<div class="main-body">
    <div class="introduce">
        <div class="container hide-padding">
            <div class="introduce_body">
                <div class="introduce_title">
                    <h4 style="text-shadow: 2px 2px #ddd">welcome to khang!</h4>
                    <p>***</p>
                </div>
                <div class="introduce_content hidden-content">
                    KHANG HOANG DUY KHANG <br>
                    là đơn vị tiên phong trong sứ mệnh <br>
                    giữ gìn và phát huy vai trò của áo dài ngũ thân. <br>
                    Đồng thời giúp tà áo hội nhập tốt vào xã hội Việt Nam hiện đại và văn minh.
                </div>
                <div class="introduce_content show-content">
                    KHANG HOANG DUY KHANG <br>
                    là đơn vị tiên phong trong sứ mệnh<br>
                    giữ gìn và phát huy vai trò của áo dài ngũ thân.<br>
                    Đồng thời giúp tà áo hội nhập tốt<br> vào xã hội Việt Nam hiện đại và văn minh.
                </div>
            </div>
        </div>
    </div>
    <!-- Main-content -->
    <div class="main-content">
        <div class="line-1"></div>
        <!-- Item-main-1 -->
        <div class="container container-home">
            <div class="clearfix-2"></div>
            <div class="slider_product">
                @foreach ($sanpham as $item)
                    
                <div class="item">
                    <a href="{{url('bo-suu-tap/'.$item->slug)}}" class="slider_product-img">
                        <img src="{{asset('uploads/sanpham/'.$item->danhmuc_id.'/'.$item->img)}}" alt="{{$item->img}}">
                    </a>
                    <div class="title">Khang - {{$item->name}}</div>
                    <div class="desc">Khám phá vẻ đẹp truyền thống Việt Nam</div>
                    <div class="store">Khang hoang duy khang</div>
                    <div class="dots">
                   
                    </div>
                    <a href="{{url('bo-suu-tap/'.$item->slug)}}" class="btn-discover">
                        <h5>Khám phá</h5>
                    </a>
                </div>
                @endforeach

            </div>
            <!-- End slider -->
            <div class="clearfix"></div>
                @if ($photo_1)
                    
                <div class="gallery-list">
                    <div class="img-top">
                        <div class="img_w-1"><img src="{{asset('uploads/trang-chu/'.$photo_1->img_1)}}" alt=""></div>
                        <div class="img_w-2"><img src="{{asset('uploads/trang-chu/'.$photo_1->img_2)}}" alt=""></div>
                    </div>
                    <div class="img-middle">
                        <div class="img_w">
                            <img src="{{asset('uploads/trang-chu/'.$photo_1->img_3)}}" alt="">
                        </div>
                    </div>
                    <div class="img-bottom">
                        <div class="img_w-1"><img src="{{asset('uploads/trang-chu/'.$photo_1->img_4)}}" alt=""></div>
                        <div class="img_w-2"><img src="{{asset('uploads/trang-chu/'.$photo_1->img_5)}}" alt=""></div>
                    </div>
                    <div class="gallery-content">
                        <h5 class="title">
                            Khang - Áo dài ngũ thân truyền thống
                        </h5>
                        <div class="desc">Khang hoang duy khang</div>
                        <div class="dots">
                       
                        </div>
                        <a href="{{url('bo-suu-tap')}}" class="btn-discover">
                            <h5>Khám phá</h5>
                        </a>
                    </div>
                </div>
                @endif
   
            <div class="clearfix-2"></div>

            <!-- End-gallery -->
        </div>
        <!-- End-item-main -->

        <div class="line-1"></div>
        <!-- Item-main-2 -->
        <div class="container container-home">
            <div class="clearfix-2"></div>
            <div class="slider_product">
                @foreach ($phukien as $item)
                    
                <div class="item">
                    <a href="{{url('phu-kien/'.$item->slug)}}" class="slider_product-img">
                        <img src="{{asset('uploads/sanpham/'.$item->danhmuc_id.'/'.$item->img)}}" alt="{{$item->img}}">
                    </a>
                    <div class="title">{{$item->name}}</div>
                    <div class="desc">Khăn đội đầu yêu thích của vua khải định</div>
                    <div class="store">Khang hoang duy khang</div>
                    <div class="dots">
                  
                    </div>
                    <a href="{{url('phu-kien/'.$item->slug)}}" class="btn-discover">
                        <h5>Khám phá</h5>
                    </a>
                </div>
                @endforeach
            </div>
            <!-- End slider -->
            <div class="clearfix"></div>
            @if ($photo_2)
                <div class="gallery-list">
                    <div class="img-top">
                        <div class="img_w-1"><img src="{{asset('uploads/trang-chu/'.$photo_2->img_1)}}" alt=""></div>
                        <div class="img_w-2"><img src="{{asset('uploads/trang-chu/'.$photo_2->img_2)}}" alt=""></div>
                    </div>
                    <div class="img-bottom">
                        <div class="img_w-3"><img src="{{asset('uploads/trang-chu/'.$photo_2->img_3)}}" alt=""></div>
                        <div class="img_w-4"><img src="{{asset('uploads/trang-chu/'.$photo_2->img_4)}}" alt=""></div>
                    </div>
                    <div class="img-middle" style="top:-2px">
                        <div class="img_w">
                            <img src="{{asset('uploads/trang-chu/'.$photo_2->img_5)}}" alt="">
                        </div>
                    </div>
                    <div class="gallery-content">
                        <h5 class="title">
                            Khang - Áo dài ngũ thân truyền thống
                        </h5>
                        <div class="desc">Khang hoang duy khang</div>
                        <div class="dots">
                         
                        </div>
                        <a href="{{url('phu-kien')}}" class="btn-discover">
                            <h5>Khám phá</h5>
                        </a>
                    </div>
                </div>
            @endif
            <div class="clearfix-2"></div>

            <!-- End-gallery -->
        </div>
        <!-- End-item-main -->

        <div class="line-1"></div>
        <div class="container container-home">
            <div class="clearfix"></div>
            <div class="slider_product">
                @foreach ($chatlieu as $item)
                    
                <div class="item">
                    <a href="{{url('chat-lieu/'.$item->slug)}}" class="slider_product-img">
                        <img src="{{asset('uploads/sanpham/'.$item->danhmuc_id.'/'.$item->img)}}" alt="{{$item->img}}">
                    </a>
                    <div class="title">{{$item->name}}</div>
                    <div class="desc">Khám phá vẻ đẹp truyền thống Việt Nam</div>
                    <div class="store">Khang hoang duy khang</div>
                    <div class="dots">
                        
                    </div>
                    <a href="{{url('chat-lieu/'.$item->slug)}}" class="btn-discover">
                        <h5>Khám phá</h5>
                    </a>
                </div>
                @endforeach
            </div>
            <!-- End slider -->
            <div class="clearfix-2"></div>
        </div>

        <div class="line-1"></div>
        <div class="container container-ft">
            <div class="stories">
                <div class="stories-title">Stories</div>
                <div class="clearfix"></div>
                <div class="stories-list row">
                    @foreach ($stories as $item)
                    <div class="stories-item col-md-4">
                        <a class="stories-item-link" href="{{url('page-stories/'.$item->id)}}">
                            <div class="image"><img src="{{asset('uploads/stories/'.$item->img_1)}}" alt=""></div>
                            <div class="desc">
                                {{$item->content}}
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection