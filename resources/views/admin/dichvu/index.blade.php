@extends('layout.admin')
@section('title', 'Quản lý dịch vụ')
@section('content')
<div class="table-responsive">
    <div class="container-fluid text-center" style="margin: 10px 10px ;">
        <div class="row">
        <div class="col-md-4 offset-md-8"><a href="{{route('service.create')}}"><button type="button" class="btn btn-primary"><i class="fa-solid fa-plus"></i>Thêm mới</button></a></div>
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
            <th scope="col">Tên dịch vụ</th>
            <th scope="col">Hình ảnh</th>
            <th scope="col">Mô tả</th>
            <th scope="col">Thao tác</th>
        </tr>
        </thead>
        <tbody>
        @foreach($dichvu as $key => $value)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $value->name }}</td>
            <td><img src="{{asset('uploads/dichvu/'.$value->img)}}" alt=""></td>
            <td style="width:580px">{{ Str::limit($value->description,300) }}</td>
            <td>
                <a href="{{route('service.edit', ['service' => $value->id])}}" class="edit-icon"><i class="fa-solid fa-pen"></i></a>

                <form action="{{route('service.destroy',['service' => $value->id])}}" method="post" style="display: inline-block">
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