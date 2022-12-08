@extends('layout.admin')
@section('title', 'Thêm Banner Trang chủ')
@section('content')
    <h4 class="font-medium leading-tight text-2xl mt-0 mb-2">Thêm Banner trang chủ</h4>

    <div class="clearfix"></div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{route('home-banner.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="box-submit">
            <button type="submit" class="btn btn-primary"><i class="fa-regular fa-floppy-disk"></i> Xác nhận</button>
        </div>
        <div class="mb-3 form-group">
            <label class="form-label">Vị trí</label>
            <select name="vitri" class="form-select">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
        </div>
        <div class="mb-3 form-group">
            <label class="form-label">Hình ảnh</label>
            <label for="inputImg" class="form-label custom-label">
                <img src="{{asset('back-end/imgs/add-img.png')}}" alt="">
                <span>Chọn hình ảnh</span>
            </label>
            <input type="file" id="inputImg" name="img" style="display: none">
        </div>
       
    </form>

<div class="box-preview">
    <img src="" id="img-preview" class="img-preview">
</div>
@endsection


