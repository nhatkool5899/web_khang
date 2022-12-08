@extends('layout.admin')
@section('title', 'Quản lý Câu hỏi')
@section('content')
<div class="table-responsive">
    <div class="container-fluid text-center" style="margin: 10px 10px ;">
        <div class="row">
        <div class="col-md-4 offset-md-8"><a href="{{route('cauhoi.create')}}"><button type="button" class="btn btn-primary"><i class="fa-solid fa-plus"></i>Thêm mới</button></a></div>
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
            <th scope="col">Câu hỏi</th>
            <th scope="col">Nôi dung</th>
            <th scope="col">Thao tác</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cauhoi as $key => $value)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $value->title }}</td>
            <td>
                {!! $value->content !!}
            </td>
            <td>

                <form action="{{route('cauhoi.destroy',['cauhoi' => $value->id])}}" method="post" style="display: inline-block">
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