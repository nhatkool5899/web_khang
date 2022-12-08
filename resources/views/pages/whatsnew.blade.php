@extends('layout.page')
@section('breadcrumb')
<div class="breadcrumb">
    <div class="container">
        <ul>
            <li><a href="{{url('trang-chu')}}">Trang chủ</a></li>
            <li><a href="#">What's new</a></li>
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
                    <h4 class="whatnew-title">Quốc phục việt nam</h4>
                </div>
                <div class="introduce_content">
                    <div class="whatsnew-desc">
                        Điều đầu tiên khi bạn muốn chọn một bộ áo dài phù hợp với bản thân,
                        bạn cần biết chính xác thế nào là áo dài truyền thống.
                        11.11.2022
                        {{-- <div class="btn-whatsnew"><a href="#">(xem thêm)</a></div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main-content -->
    <div class="main-content">
        <div id="loader-seemore" class="loader-seemore">

        </div>
    </div>
</div>

<script>
    loader_more();

    function loader_more(id = '') { 
        $.ajax({
            url: '/loader-more',
            method: 'POST',
            headers:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {id:id},
            success: function(data){
                $('.btn-view-more').remove();
                $('#loader-seemore').append(data);
            }
        });
    }

    $(document).on('click','.btn-view-more', function(){
        var last_id = $(this).data('id');
        loader_more(last_id);
    })
</script>
@endsection