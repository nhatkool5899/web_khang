@extends('layout.admin')
@section('title', 'Quản lý sản phẩm')
@section('content')
<div class="table-responsive">
    <div class="container-fluid text-center" style="margin: 10px 10px ;">
        <div class="row">
            <div class="col-md-3">
                <select id="change_cate" class="form-select">
                    <option value="0">Tất cả</option>
                    <option value="1">Bộ sưu tập</option>
                    <option value="2">Phụ kiện</option>
                    <option value="3">Chất liệu</option>
                </select>
            </div>
            <div class="col-md-4 offset-md-5"><a href="{{route('sanpham.create')}}"><button type="button" class="btn btn-primary"><i class="fa-solid fa-plus"></i>Thêm mới</button></a></div>
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
            <th scope="col">Tên sản phẩm</th>
            <th scope="col">Giới tính</th>
            <th scope="col">Danh mục</th>
            <th scope="col">Giá</th>
            <th scope="col">Thao tác</th>
        </tr>
        </thead>
        <tbody>
        @foreach($sanpham as $key => $value)
        <tr class="cate_{{$value->danhmuc_id}} table-item">
            <td>{{ $key + 1 }}</td>
            <td>{{ $value->name }}</td>
            <td>
                @php 
                if($value->gender == 0) echo 'Tất cả';
                if($value->gender == 1) echo 'Nam';
                if($value->gender == 2) echo 'Nữ';
                @endphp
            
            </td>
            <td>{{ $value->danhmuc->name }}</td>
            <td>{{ number_format($value->price,0,',','.') }} <span>Vnđ</span></td>
            <td>
                <a href="{{route('sanpham.edit', ['sanpham' => $value->id])}}" class="edit-icon"><i class="fa-solid fa-pen"></i></a>

                <form action="{{route('sanpham.destroy',['sanpham' => $value->id])}}" method="post" style="display: inline-block">
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