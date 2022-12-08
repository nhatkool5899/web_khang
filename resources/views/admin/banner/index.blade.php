@extends('layout.admin')
@section('title', 'Quản lý banner các trang')
@section('content')
<div class="table-responsive">
    <div class="container-fluid text-center" style="margin: 10px 10px ;">
        <div class="row">
        {{-- <div class="col-md-4 offset-md-8"><a href="{{route('home-banner.create')}}"><button type="button" class="btn btn-primary"><i class="fa-solid fa-plus"></i>Thêm mới</button></a></div> --}}
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
            <th scope="col">Trang</th>
            <th scope="col">Hình ảnh</th>
            <th scope="col">Thay đổi ảnh</th>
        </tr>
        </thead>
        <tbody>

        @foreach ($banner as $item => $value)
            
        <tr>
            <td style="width:10%">{{$item+1}}</td>
            <td style="width:16%">{{$value->name}}</td>
            <td style="width:40%">
                <img style="width:300px; margin:0" src="{{asset('uploads/banner/'.$value->img)}}" alt="">
            </td>
            <td>
                <a href="{{route('banner.edit', ['banner' => $value->id])}}" class="delete-icon"><i class="fa-regular fa-image"></i></a>
                
                {{-- <form action="{{route('banner.destroy',['banner' => $value->id])}}" method="post" style="display: inline-block">
                    @method("DELETE")
                    @csrf
                    <button class="delete-icon" style="border:none;background:none" onclick="return confirm('Bạn có chắc là xóa danh mục này?')"><i class="fa-solid fa-trash-can"></i></button>
                </form> --}}
            </td>
        </tr>
        @endforeach
        
        </tbody>
    </table>
</div>
@endsection