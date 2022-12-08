@extends('layout.page')
@section('breadcrumb')
<div class="breadcrumb">
    <div class="container">
        <ul>
            <li><a href="{{url('trang-chu')}}">Trang chủ</a></li>
            <li><a href="{{url('khach-hang')}}">Khách hàng</a></li>
            <li><a href="">{{$collected->name}}</a></li>
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
                        <h4>{{$collected->name}}</h4>
                        <div class="text">{!!$collected->description!!}</div>
                        {{-- <div class="btn-whatsnew"><a href="#">(xem thêm)</a></div> --}}
                    </div>
                </div>
            </div>
            <div class="pd_details-img">
                @if (!empty($collected->imgs))    
                    @foreach (json_decode($collected->imgs) as $item => $value)
                    <div class="image">
                        <img class="zoom_img-loader" src="{{asset('uploads/bo-suu-tap/'.$collected->id.'/'.$value)}}" alt="{{$value}}">
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