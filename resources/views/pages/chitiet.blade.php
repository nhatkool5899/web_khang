@extends('layout.page')
@section('breadcrumb')
<div class="breadcrumb">
    <div class="container">
        <ul>
            <li><a href="{{url('trang-chu')}}">Trang chủ</a></li>
            <li><a href="{{url($sanpham->danhmuc->slug)}}">{{$sanpham->danhmuc->name}}</a></li>
            <li><a style="font-style: italic">{{$sanpham->name}}</a></li>
        </ul>
    </div>
</div>
@endsection

@section('content')
<div class="main-body bg-details">
    <div class="container hide-padding">
        <div class="pd_details">
            <div class="pd_details-desc">
                <div class="row">
                    <div class="col-12">
                        <h4>{{$sanpham->name}}</h4>
                        <div class="text">
                            {!!$sanpham->content!!}
                        </div>
                        <div class="desc">{{$sanpham->description}}</div>
                        <div class="price"><span>Giá:</span> {{number_format($sanpham->price,0,',','.')}} Vnd</div>
                    </div>
                    {{-- <div class="col-12 pd_details-right">
                        <div class="image">
                            <img src="{{asset('uploads/sanpham/'.$sanpham->danhmuc_id.'/'.$sanpham->img)}}" alt="">
                        </div>
                    </div> --}}
                </div>
            </div>
            {{-- <div class="pd_details-title"><i class="fa-light fa-images"></i> Hình ảnh mô tả sản phẩm</div> --}}
            <div class="pd_details-img">
                @foreach (json_decode($sanpham->list_img) as $item => $value)
                <div class="image">
                    <img class="zoom_img-loader" src="{{asset('uploads/sanpham/'.$sanpham->danhmuc_id.'/'.$sanpham->name.'/'.$value)}}" alt="{{$value}}">
                    {{-- <p>Ảnh {{$item+1}}</p> --}}
                </div>
                @endforeach

                {{-- <div class="image">
                    <img src="{{asset('front-end/imgs/bosuutap/pd-1.png')}}" >
                    <p>Ảnh 1</p>
                </div>
                <div class="image">
                    <img src="{{asset('front-end/imgs/bosuutap/pd-4.png')}}" >
                    <p>Ảnh 2</p>
                </div>
                <div class="image">
                    <img src="{{asset('front-end/imgs/bosuutap/pd-6.png')}}" >
                    <p>Ảnh 3</p>
                </div>
                <div class="image">
                    <img src="{{asset('front-end/imgs/bosuutap/pd-2.png')}}" >
                    <p>Ảnh 5</p>
                </div>
                <div class="image">
                    <img src="{{asset('front-end/imgs/bosuutap/pd-3.png')}}" >
                    <p>Ảnh 6</p>
                </div>
                <div class="image">
                    <img src="{{asset('front-end/imgs/bosuutap/pd-5.png')}}" >
                    <p>Ảnh 6</p>
                </div> --}}
            </div>
        </div>
    </div>
</div>
@endsection