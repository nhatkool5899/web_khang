@extends('layout.page')
@section('breadcrumb')
<div class="breadcrumb">
    <div class="container">
        <ul>
            <li><a href="{{url('trang-chu')}}">Trang chủ</a></li>
            <li><a href="#">Dịch vụ</a></li>
        </ul>
    </div>
</div>
@endsection

@section('banner')
<section class="box-banner style-banner">
    <div class="banner banner-page">
        <img src="{{asset('uploads/banner/'.$banner->img)}}" alt="{{$banner->img}}">
    </div>
</section>
@endsection


@section('content')
<div class="main-body">
    <div class="introduce">
        <div class="container">
            <div class="introduce_body">
                <div class="introduce_title">
                    <h4>May đo trang phục</h4>
                </div>
            </div>
        </div>
    </div>
    <!-- Main-content -->
    <div class="main-content">
        <div class="container">
            <div class="service">

                @foreach ($dichvu as $item)
                    
                <div class="service_item">
                    <a class="service_item-link" href="{{url('dich-vu/'.$item->id)}}">
                        <div class="row">
                            <div class="col-4">
                                <div class="service_item-image"><img src="{{asset('uploads/dichvu/'.$item->img)}}" alt="{{$item->img}}"></div>
                            </div>
                            <div class="col-8">
                                <div class="service_item-title">{{$item->name}}</div>
                                <div class="service_item-desc">
                                    {{$item->description}}
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach


                <div class="text-center">
                    <a class="btn_contact-us" href="{{url('lien-he')}}">Liên hệ chúng tôi <i class="fa-light fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection