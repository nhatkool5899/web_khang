@extends('layout.admin')
@section('title', 'Quản lý trang Tư liệu')
@section('content')
<div class="table-responsive">
    <div class="container-fluid text-center" style="margin: 10px 10px ;">
        <div class="row">
        <div class="col-md-4 offset-md-8"><a href="{{url('stories/create')}}"><button type="button" class="btn btn-primary"><i class="fa-solid fa-plus"></i>Thêm mới</button></a></div>
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
            <th scope="col">Tên tư liệu</th>
            <th scope="col">Ảnh</th>
            <th scope="col">Trạng thái</th>
            <th scope="col">Thư viện ảnh</th>
            <th scope="col">Thao tác</th>
        </tr>
        </thead>
        <tbody>
        @foreach($stories as $key => $value)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $value->title }}</td>
            <td>
                <img style="margin: 0" src="{{asset('uploads/stories/'.$value->img_1)}}" alt="">
            </td>
        
            <td>
                @if ($value->status == 1)
                    <a href="{{url('stories/unactive/'.$value->id)}}" class="btn-status">Hiển thị</a>
                @else
                    <a href="{{url('stories/active/'.$value->id)}}" class="btn-status">Ẩn</a>
                @endif
            </td>
            <td><a href="{{url('stories/gallery/'.$value->id)}}" class="btn-status">Thêm ảnh</a></td>
            <td>
                <a href="{{url('stories/destroy/'.$value->id)}}" class="delete-icon" onclick="return confirm('Bạn có chắc là xóa danh mục này?')"><i class="fa-solid fa-trash-can"></i></a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>


@endsection