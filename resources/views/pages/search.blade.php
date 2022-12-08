@extends('layout.page')
@section('breadcrumb')
<div class="breadcrumb">
    <div class="container">
        <ul>
            <li><a href="{{url('trang-chu')}}">Trang chủ</a></li>
            <li><a href="#">Tìm kiếm</a></li>
            <li><a href="#">{{$keyword}}</a></li>
        </ul>
    </div>
</div>
@endsection


@section('content')
<div class="clear-header style-clear-header clear-search"></div>
<div class="main-body main-body-style">
    <div class="container hide-padding">

        <div class="page_ft-title" style="font-size: 26px">Kết quả tìm kiếm : <span>"{{$keyword}}"</span></div>
        <div class="collection">
            <div class="row" style="margin-left: 0; margin-right:0">
                <div class="box-result">
                    <div class="row" style="margin-left: 0; margin-right:0">
                    @foreach ($whatsnew as $item)
                    
                        <div class="col-6 col-md-4 body-result">
                            <a href="{{url('whats-new/'.$item->id)}}">
                                <div class="image">
                                    <img src="{{asset('uploads/whats-new/'.$item->img_1)}}" alt="{{$item->img_1}}">
                                </div>
                                <div class="desc">{{$item->title}}</div>
                                <div class="category">(What's New)</div>
                                
                            </a>
                        </div>
                    @endforeach

                    @foreach ($khachhang as $item)
                    
                    
                        <div class="col-6 col-md-4 body-result">
                            <a href="{{url('khach-hang/'.$item->id)}}">
                                <div class="image">
                                    <img src="{{asset('uploads/bo-suu-tap/'.$item->layout->img_1)}}" alt="{{$item->layout->img_1}}">
                                </div>
                                <div class="desc">{{$item->name}}</div>
                                <div class="category">(Khách hàng)</div>
                            </a>
                        </div>
                    @endforeach

                    @foreach ($tulieu as $item)
                    
                    
                        <div class="col-6 col-md-4 body-result">
                            <a href="{{url('tu-lieu/'.$item->id)}}">
                                <div class="image">
                                    <img src="{{asset('uploads/tu-lieu/'.$item->layout->img_1)}}" alt="{{$item->layout->img_1}}">
                                </div>
                                <div class="desc">{{$item->name}}</div>
                                <div class="category">(Tư liệu)</div>
                            </a>
                        </div>
                    @endforeach
                    </div>
                </div>

                <div class="clearfix hide-clearfix"></div>
                @foreach ($sanpham as $item)
                
                <div class="col-6">
                    <div class="collection_item bg-search">
                        <a href="{{url($item->danhmuc->slug.'/'.$item->slug)}}">
                            <div class="collection_item-img collection_item-img-style">
                                <img src="{{asset('uploads/sanpham/'.$item->danhmuc_id.'/'.$item->img)}}" alt="{{$item->img}}">
                            </div>
                            <div class="collection_item-body">
                                <div class="title">{{$item->name}}</div>
                                <div class="desc">{{$item->description}}</div>
                                <div class="price">{{number_format($item->price,0,',','.')}} Vnd</div>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach

            </div>
        
        </div>
    </div>
</div>
@endsection