@extends('layout.page')
@section('breadcrumb')
<div class="breadcrumb">
    <div class="container">
        <ul>
            <li><a href="{{url('trang-chu')}}">Trang chủ</a></li>
            <li><a href="{{url('whats-new')}}">What's new</a></li>
            <li><a href="">{{$layout->title}}</a></li>
            {{-- <li><a href="{{url($sanpham->danhmuc->slug)}}">{{$sanpham->danhmuc->name}}</a></li>
            <li><a style="font-style: italic">{{$sanpham->name}}</a></li> --}}
        </ul>
    </div>
</div>
@endsection

@section('content')
<div class="main-body bg-details">
    <div class="container">
        
        <div class="pd_details">
            <div class="pd_details-desc" style="padding-bottom: 0">
                <div class="row">
                    <div class="col-12">
                        <h4>{{$layout->title}}</h4>
                        <div class="text">{!!$layout->content!!}</div>
                        {{-- <div class="btn-whatsnew"><a href="#">(xem thêm)</a></div> --}}
                    </div>
                </div>
            </div>
            <div class="pd_details-img">
                @if (!empty($layout->list_img))    
                    @foreach (json_decode($layout->list_img) as $item => $value)
                    <div class="image">
                        <img class="zoom_img-loader" src="{{asset('uploads/whats-new/'.$layout->id.'/'.$value)}}" alt="{{$value}}">
                        {{-- <p>Ảnh {{$item+1}}</p> --}}
                    </div>
                    @endforeach
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection