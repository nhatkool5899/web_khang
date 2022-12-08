@extends('layout.admin')
@section('title', 'Quản lý banner trang chủ')
@section('content')
<div class="table-responsive">
    <div class="container-fluid text-center" style="margin: 10px 10px ;">
        <div class="row">
        <div class="col-md-4 offset-md-8"><a href="{{route('photo-layout.create')}}"><button type="button" class="btn btn-primary"><i class="fa-solid fa-plus"></i>Thêm mới</button></a></div>
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
            <th scope="col">Bố cục</th>
            <th scope="col">Hình ảnh</th>
            <th scope="col">Trang thái</th>
            <th scope="col">Thao tác</th>
        </tr>
        </thead>
        <tbody>
        @foreach($photo_layout as $key => $value)
        
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>Kiểu {{ $value->type }}</td>
            <td>
                <span class="btn-show-layout btn-show-layout_{{$key}}"><i class="fa-regular fa-images"></i></span>
                @if ($value->type == 2)
                
                <div class="modal-layout modal-layout_{{$key}}">
                    <div class="modal-close"><i class="fa-solid fa-xmark"></i></div>
                    <div class="gallery-list">
                        <div class="img-top">
                            <div class="img_w-1"><img src="{{asset('uploads/'.$value->name.'/'.$value->img_1)}}" alt=""></div>
                            <div class="img_w-2"><img src="{{asset('uploads/'.$value->name.'/'.$value->img_2)}}" alt=""></div>
                        </div>
                        <div class="img-bottom">
                            <div class="img_w-3"><img src="{{asset('uploads/'.$value->name.'/'.$value->img_3)}}" alt=""></div>
                            <div class="img_w-4"><img src="{{asset('uploads/'.$value->name.'/'.$value->img_4)}}" alt=""></div>
                        </div>
                        <div class="img-middle" style="top:-2px">
                            <div class="img_w">
                                <img src="{{asset('uploads/'.$value->name.'/'.$value->img_5)}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                @else
                <div class="modal-layout modal-layout_{{$key}}">
                    <div class="modal-close"><i class="fa-solid fa-xmark"></i></div>
                    <div class="gallery-list">
                        <div class="img-top">
                            <div class="img_w-1"><img class="img_w-1" src="{{asset('uploads/'.$value->name.'/'.$value->img_1)}}" alt=""></div>
                            <div class="img_w-2"><img class="img_w-2" src="{{asset('uploads/'.$value->name.'/'.$value->img_2)}}" alt=""></div>
                        </div>
                        <div class="img-middle">
                            <div class="img_w">
                                <img src="{{asset('uploads/'.$value->name.'/'.$value->img_3)}}" alt="">
                            </div>
                        </div>
                        <div class="img-bottom">
                            <div class="img_w-1"><img class="img_w-1" src="{{asset('uploads/'.$value->name.'/'.$value->img_4)}}" alt=""></div>
                            <div class="img_w-2"><img class="img_w-2" src="{{asset('uploads/'.$value->name.'/'.$value->img_5)}}" alt=""></div>
                        </div>
                    </div>
                </div>
                @endif
            </td>
        
            <td>
                @if ($value->status == 1)
                    <a href="{{url('photo-layout/unactive/'.$value->id)}}" class="btn-status">Hiển thị</a>
                @else
                    <a href="{{url('photo-layout/active/'.$value->id)}}" class="btn-status">Ẩn</a>
                @endif
            </td>
            <td>
                {{-- <a href="{{route('photo-layout.edit', ['photo_layout' => $value->id])}}" class="edit-icon"><i class="fa-solid fa-pen"></i></a> --}}

                <form action="{{route('photo-layout.destroy',['photo_layout' => $value->id])}}" method="post" style="display: inline-block">
                    @method("DELETE")
                    @csrf
                    <button class="delete-icon" style="border:none;background:none" onclick="return confirm('Bạn có chắc là xóa danh mục này?')"><i class="fa-solid fa-trash-can"></i></button>
                </form>
            </td>
        </tr>
        
        @endforeach
        </tbody>

        <input type="hidden" id="count_key" value="{{$key}}">
    </table>
</div>


@endsection