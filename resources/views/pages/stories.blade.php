@extends('layout.page')
@section('breadcrumb')
<div class="breadcrumb">
    <div class="container">
        <ul>
            <li><a href="{{url('trang-chu')}}">Trang chủ</a></li>
            <li><a href="">{{$stories->title}}</a></li>
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
                        <h4>{{$stories->title}}</h4>
                        <div class="text">{!!$stories->content!!}</div>
                    </div>
                </div>
            </div>
            <div class="pd_details-img">
                @if (!empty($stories->list_img))    
                    @foreach (json_decode($stories->list_img) as $item => $value)
                    <div class="image">
                        <img class="zoom_img-loader" src="{{asset('uploads/stories/'.$stories->id.'/'.$value)}}" alt="{{$value}}">
                    </div>
                    @endforeach
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection