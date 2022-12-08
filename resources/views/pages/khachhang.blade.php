@extends('layout.page')
@section('breadcrumb')
<div class="breadcrumb">
    <div class="container">
        <ul>
            <li><a href="{{url('trang-chu')}}">Trang chủ</a></li>
            <li><a href="#">Khách hàng</a></li>
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
                    <h4 class="whatnew-title style-bst">Một số Feedback của khách</h4>
                </div>
                <div class="introduce_content hide-mobile">
                    <div class="whatsnew-desc">
                        <span class="style-logo">Khang</span> lan tỏa nét đẹp xưa đến với mọi người xung quanh,<br>
                        gìn giữ và phát triển giá trị văn hóa dân tộc.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main-content -->
    <div class="main-content">

        {{-- @foreach ($collected as $item)
            @if($item->layout->type == 3)

                <div class="line-1 style-line"></div>
                <div class="container hide-padding">
                    <a href="{{url('khach-hang/'.$item->id)}}">
                        <div class="grid-wrapper grid-wrapper-1">
                            <div class="img" style="max-height:700px"><img src="{{asset('uploads/bo-suu-tap/'.$item->layout->img_1)}}" alt=""></div>
                            <div class="img"><img src="{{asset('uploads/bo-suu-tap/'.$item->layout->img_2)}}" alt=""></div>
                            <div class="img"><img src="{{asset('uploads/bo-suu-tap/'.$item->layout->img_3)}}" alt=""></div>
                            <div class="img"><img src="{{asset('uploads/bo-suu-tap/'.$item->layout->img_4)}}" alt=""></div>
                        </div>
                    </a>
        
                    <div class="introduce_body whatsnew-body">
                        <div class="introduce_title padding-title">
                            <h4 class="whatnew-title style-title-bst">{{$item->name}}</h4>
                        </div>
                        <div class="introduce_content">
                            <div class="whatsnew-desc style-desc-bst">
                                {{$item->description}}
                            </div>
                        </div>
                        <div class="btn-whatsnew"><a href="{{url('khach-hang/'.$item->id)}}">(xem thêm)</a></div>
                    </div>
                </div>
            @elseif ($item->layout->type == 5)

                <div class="line-1 style-line"></div>
                <div class="container hide-padding">
                    <a href="{{url('khach-hang/'.$item->id)}}">
                        <div class="grid-wrapper grid-wrapper-2">
                            <div class="img resize-img-1"><img src="{{asset('uploads/bo-suu-tap/'.$item->layout->img_1)}}" alt=""></div>
                            <div class="img"><img src="{{asset('uploads/bo-suu-tap/'.$item->layout->img_2)}}" alt=""></div>
                            <div class="img"><img src="{{asset('uploads/bo-suu-tap/'.$item->layout->img_3)}}" alt=""></div>
                        </div>
                    </a>
        
                    <div class="introduce_body whatsnew-body">
                        <div class="introduce_title padding-title">
                            <h4 class="whatnew-title style-title-bst">{{$item->name}}</h4>
                        </div>
                        <div class="introduce_content">
                            <div class="whatsnew-desc style-desc-bst">
                                {{$item->description}}
                            </div>
                        </div>
                        <div class="btn-whatsnew"><a href="{{url('khach-hang/'.$item->id)}}">(xem thêm)</a></div>
                    </div>
                </div>
            @elseif ($item->layout->type == 6)

            <div class="line-1 style-line"></div>
            <div class="container hide-padding">
                <a href="{{url('khach-hang/'.$item->id)}}">
                    <div class="grid-wrapper grid-wrapper-3">
                        <div class="img"><img src="{{asset('uploads/bo-suu-tap/'.$item->layout->img_1)}}" alt=""></div>
                        <div class="img"><img src="{{asset('uploads/bo-suu-tap/'.$item->layout->img_2)}}" alt=""></div>
                        <div class="img"><img src="{{asset('uploads/bo-suu-tap/'.$item->layout->img_4)}}" alt=""></div>
                        <div class="img"><img src="{{asset('uploads/bo-suu-tap/'.$item->layout->img_3)}}" alt=""></div>
                    </div>
                </a>
                <div class="introduce_body whatsnew-body">
                    <div class="introduce_title">
                        <h4 class="whatnew-title">{{$item->name}}</h4>
                    </div>
                    <div class="introduce_content">
                        <div class="whatsnew-desc">
                            {{$item->description}}
                        </div>
                    </div>
                    <div class="btn-whatsnew"><a href="{{url('khach-hang/'.$item->id)}}">(xem ngay)</a></div>
                </div>
            </div>
            @endif
        @endforeach --}}

        <div id="loader-seemore" class="loader-seemore">

        </div>

        {{-- <div class="box-see-more">
            <span class="btn-see-more">Hiển thị thêm</span>
        </div> --}}
        <div class="clearfix hide-clear"></div>
    </div>
</div>

<script>
    loader_more();

    function loader_more(id = '') { 
        $.ajax({
            url: '/loader-more-2',
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