@extends('layout.page')
@section('breadcrumb')
<div class="breadcrumb">
    <div class="container">
        <ul>
            <li><a href="{{url('trang-chu')}}">Trang chủ</a></li>
            <li><a href="#">Chất liệu</a></li>
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
                <li>Chất liệu</li>
            </ul>
        </div>
    </div>
</div>

<div class="line-1 style-line-2"></div>
@endsection

@section('content')
<div class="main-body">
    <div class="container hide-padding">
        <div class="collection">
            <div id="loader_result" class="row">

            </div>
        </div>
    </div>
</div>

<script>
    loader_more();

    function loader_more(id = '') { 
        $.ajax({
            url: '/loader-chatlieu',
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