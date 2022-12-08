@extends('layout.admin')
@section('title', 'Quản lý banner trang chủ')
@section('content')
<div class="table-responsive">
    <div class="container-fluid text-center" style="margin: 10px 10px ;">
        <div class="row">
        <div class="col-md-4 offset-md-8"><a href="{{route('home-banner.create')}}"><button type="button" class="btn btn-primary"><i class="fa-solid fa-plus"></i>Thêm mới</button></a></div>
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
            <th scope="col">Vị trí</th>
            <th scope="col">Hình ảnh</th>
            <th scope="col">Trang thái</th>
            <th scope="col">Thao tác</th>
        </tr>
        </thead>
        <tbody>
        @foreach($bannerHome as $key => $value)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $value->vitri }}</td>
            <td><img src="{{asset('uploads/banner-home/'.$value->img)}}" alt=""></td>
            <td>
                @if ($value->status == 1)
                    <a href="{{url('home-banner/unactive/'.$value->id)}}" class="btn-status">Hiển thị</a>
                @else
                    <a href="{{url('home-banner/active/'.$value->id)}}" class="btn-status">Ẩn</a>
                @endif
            </td>
            <td>
                <a href="{{route('home-banner.edit', ['home_banner' => $value->id])}}" class="edit-icon"><i class="fa-solid fa-pen"></i></a>

                <form action="{{route('home-banner.destroy',['home_banner' => $value->id])}}" method="post" style="display: inline-block">
                    @method("DELETE")
                    @csrf
                    <button class="delete-icon" style="border:none;background:none" onclick="return confirm('Bạn có chắc là xóa danh mục này?')"><i class="fa-solid fa-trash-can"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection