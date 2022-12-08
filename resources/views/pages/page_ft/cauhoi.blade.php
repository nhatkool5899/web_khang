@extends('layout.page')
@section('breadcrumb')
<div class="clear-header"></div>
<div class="breadcrumb">
    <div class="container">
        <ul>
            <li><a href="{{url('trang-chu')}}">Trang chủ</a></li>
            <li><a href="#">Câu hỏi thường gặp</a></li>
        </ul>
    </div>
</div>
@endsection

@section('content')
<div class="main-body bg-details question">
    <div class="container">
        <div class="page_ft-title">Các câu hỏi thường gặp</div>
        <div class="box-question">
            <ul class="list-question">
                @foreach ($cauhoi as $key => $value)
                <li class="item-question">
                    <span class="stt-icon">{{$key+1}}</span>
                    <div class="item-question-body">
                        <div class="item-question-title">
                            <span class="title">{{$value->title}}</span>
                            <span class="show-answer active"><i class="fa-light fa-plus"></i></span>
                            <span class="hide-answer"><i class="fa-light fa-minus"></i></span>
                        </div>

                        <div class="item-answer">
                            {{$value->content}}
                        </div>
                    </div>
                </li>
                
                @endforeach

            </ul>

            <div class="faq-topic-question">Vẫn còn thắc mắc?</div>
            <div class="text-center" style="height: 60px"><a href="{{url('lien-he')}}" class="btn_contact-us">Liên hệ chúng tôi</a></div>
        </div>
    </div>
</div>
@endsection