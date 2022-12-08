@extends('layout.page')
@section('breadcrumb')
<div class="breadcrumb">
    <div class="container">
        <ul>
            <li><a href="{{url('trang-chu')}}">Trang chủ</a></li>
            <li><a href="{{url('tu-lieu')}}">Tư liệu</a></li>
            <li><a href="">{{$tulieu->name}}</a></li>
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
                        <h4>{{$tulieu->name}}</h4>
                        <div class="text">{!!$tulieu->description!!}</div>
                        {{-- <div class="btn-whatsnew"><a href="#">(xem thêm)</a></div> --}}
                    </div>
                </div>
            </div>
            <div class="pd_details-img">
                @if (!empty($tulieu->imgs))    
                    @foreach (json_decode($tulieu->imgs) as $item => $value)
                    <div class="image">
                        <img class="zoom_img-loader" src="{{asset('uploads/tu-lieu/'.$tulieu->id.'/'.$value)}}" alt="{{$value}}">
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