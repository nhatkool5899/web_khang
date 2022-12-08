@extends('layout.page')
@section('breadcrumb')
<div class="breadcrumb">
    <div class="container">
        <ul>
            <li><a href="{{url('trang-chu')}}">Trang chủ</a></li>
            <li><a href="#">Bộ sưu tập</a></li>
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

@section('breadcrumb-2')
<div class="line-1"></div>

<div class="breadcrumb-2">
    <div class="container">
        <div class="breadcrumb_left">
            <ul>
                <li>Trang chủ</li>
                <li>Bộ sưu tập</li>
                <li class="filter-name">Tất cả</li>
            </ul>
        </div>
        <div class="breadcrumb_right">
            <ul>
                <li><span class="filter-btn filter-all active">Tất cả</span></li>
                <li><span class="filter-btn filter-male">Nam</span></li>
                <li><span class="filter-btn filter-female">Nữ</span></li>
            </ul>
        </div>
    </div>
</div>

<div class="breadcrumb-mobile">
    <ul>
        <li  class="filter-all active"><span>Tất cả</span></li>
        <li  class="filter-male"><span>Nam</span></li>
        <li  class="filter-female"><span>Nữ</span></li>
    </ul>
</div>

<div class="line-1"></div>
@endsection

@section('content')
<div class="main-body">
    <div class="container hide-padding">
        <div class="collection">

            <div id="loader_result" class="row">

            </div>
            {{-- @foreach ($sanpham as $item)
            
            <div class="col-6 filter-item gender_{{$item->gender}}">
                <div class="collection_item">
                    <a href="{{url('bo-suu-tap/'.$item->slug)}}">
                        <div class="collection_item-img">
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
            @endforeach --}}
        </div>
    </div>
</div>

<script>
    loader_more();

    function loader_more(id = '') { 
        $.ajax({
            url: '/loader-collected',
            method: 'POST',
            headers:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {id:id},
            success: function(data){
                $('.box-collection-btn').remove();
                $('#loader_result').append(data);
            }
        });
    }

    $(document).on('click','.collection_view-more', function(){
        var last_id = $(this).data('id');
        loader_more(last_id);
    })
</script>
@endsection