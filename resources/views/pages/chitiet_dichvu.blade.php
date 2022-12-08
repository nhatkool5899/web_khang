@extends('layout.page')
@section('breadcrumb')
<div class="breadcrumb">
    <div class="container">
        <ul>
            <li><a href="{{url('trang-chu')}}">Trang chủ</a></li>
            <li><a href="{{url('dich-vu')}}">Dịch vụ</a></li>
            <li><a href="">{{$dichvu->name}}</a></li>
        </ul>
    </div>
</div>
@endsection

@section('content')
<div class="main-body bg-details">
    <div class="container">
        
        <div class="pd_details service-style">
            <div class="pd_details-desc" style="padding-bottom: 0">
                <div class="row">
                    <div class="col-12">
                        <h4>{{$dichvu->name}}</h4>
                        <div class="text">{!!$dichvu->description!!}</div>
                        {{-- <div class="btn-whatsnew"><a href="#">(xem thêm)</a></div> --}}
                    </div>
                </div>
            </div>
            {{-- <div class="pd_details-img p-4">
                <img class="zoom_img-loader" src="{{asset('uploads/dichvu/'.$dichvu->img)}}" alt="{{$dichvu->img}}">
            </div> --}}
            <div class="p-4">
                {!! $dichvu->content !!}
            </div>
        </div>
    </div>
</div>
@endsection