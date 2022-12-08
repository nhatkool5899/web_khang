@extends('layout.admin')
@section('title', 'Quản lý trang Khách hàng')
@section('content')
<div class="table-responsive">
    <div class="container-fluid text-center" style="margin: 10px 10px ;">
        <div class="row">
        <div class="col-md-4 offset-md-8"><a href="{{url('collected/create')}}"><button type="button" class="btn btn-primary"><i class="fa-solid fa-plus"></i>Thêm mới</button></a></div>
        </div>
    </div>
    @if (session('status'))
        <div class="alert alert-success" style="margin-left: 0">
            {{ session('status') }}
        </div>
    @endif
    <table class="table">
        <thead class="table-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tiêu đề</th>
            <th scope="col">Bố cục</th>
            <th scope="col">Trạng thái</th>
            <th scope="col">Thư viện ảnh</th>
            <th scope="col">Thao tác</th>
        </tr>
        </thead>
        <tbody>
        @foreach($collected as $key => $value)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $value->name }}</td>
            <td>
                <span class="btn-show-layout btn-show-layout_{{$key}}"><i class="fa-regular fa-images"></i></span>
                @if ($value->layout->type == 3)
                <div class="modal-layout modal-layout_{{$key}}">
                    <div class="modal-close"><i class="fa-solid fa-xmark"></i></div>

                    <div class="grid-wrapper grid-wrapper-1">
                        <div class="img"><img src="{{asset('uploads/bo-suu-tap/'.$value->layout->img_1)}}" alt=""></div>
                        <div class="img"><img src="{{asset('uploads/bo-suu-tap/'.$value->layout->img_2)}}" alt=""></div>
                        <div class="img"><img src="{{asset('uploads/bo-suu-tap/'.$value->layout->img_3)}}" alt=""></div>
                        <div class="img"><img src="{{asset('uploads/bo-suu-tap/'.$value->layout->img_4)}}" alt=""></div>
                    </div>
                </div>
                @elseif ($value->layout->type == 5)
                <div class="modal-layout modal-layout_{{$key}}">
                    <div class="modal-close"><i class="fa-solid fa-xmark"></i></div>
                    <div class="grid-wrapper grid-wrapper-2">
                        <div class="img resize-img-1"><img src="{{asset('uploads/bo-suu-tap/'.$value->layout->img_1)}}" alt=""></div>
                        <div class="img"><img src="{{asset('uploads/bo-suu-tap/'.$value->layout->img_2)}}" alt=""></div>
                        <div class="img"><img src="{{asset('uploads/bo-suu-tap/'.$value->layout->img_3)}}" alt=""></div>
                    </div>
                </div>
                @else
                <div class="modal-layout modal-layout_{{$key}}">
                    <div class="modal-close"><i class="fa-solid fa-xmark"></i></div>
                    <div class="grid-wrapper grid-wrapper-3">
                        <div class="img"><img src="{{asset('uploads/bo-suu-tap/'.$value->layout->img_1)}}" alt=""></div>
                        <div class="img"><img src="{{asset('uploads/bo-suu-tap/'.$value->layout->img_2)}}" alt=""></div>
                        <div class="img"><img src="{{asset('uploads/bo-suu-tap/'.$value->layout->img_4)}}" alt=""></div>
                        <div class="img"><img src="{{asset('uploads/bo-suu-tap/'.$value->layout->img_3)}}" alt=""></div>
                    </div>
                </div>
                @endif
            </td>
        
            <td>
                @if ($value->status == 1)
                    <a href="{{url('collected/unactive/'.$value->id)}}" class="btn-status">Hiển thị</a>
                @else
                    <a href="{{url('collected/active/'.$value->id)}}" class="btn-status">Ẩn</a>
                @endif
            </td>
            <td><a href="{{url('collected/gallery/'.$value->id)}}" class="btn-status">Thêm ảnh</a></td>
            <td>
                <a href="{{url('collected/destroy/'.$value->photo_layout_id)}}" class="delete-icon" onclick="return confirm('Bạn có chắc là xóa danh mục này?')"><i class="fa-solid fa-trash-can"></i></a>

            </td>
        </tr>
        @endforeach
        </tbody>

        <input type="hidden" id="count_key" value="{{$key}}">
    </table>
</div>


@endsection