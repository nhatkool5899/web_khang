@extends('layout.admin')
@section('title', 'Thêm Banner Trang chủ')
@section('content')
    <h4 class="font-medium leading-tight text-2xl mt-0 mb-2">Cập nhật Banner trang chủ</h4>

    <div class="clearfix"></div>
    @if ($errors->any())
    <div class="alert alert-danger" style="margin-bottom: 20px">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{route('home-banner.update', ['home_banner' => $bannerHome->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="box-submit">
            <button type="submit" class="btn btn-primary"><i class="fa-regular fa-floppy-disk"></i> Xác nhận</button>
        </div>
        <div class="mb-3 form-group">
            <label class="form-label">Vị trí</label>
            <select name="vitri" class="form-select">
                <option <?php if($bannerHome->vitri == 1) echo 'selected' ?> value="1">1</option>
                <option <?php if($bannerHome->vitri == 2) echo 'selected' ?> value="2">2</option>
                <option <?php if($bannerHome->vitri == 3) echo 'selected' ?> value="3">3</option>
                <option <?php if($bannerHome->vitri == 4) echo 'selected' ?> value="4">4</option>
            </select>
        </div>
        <div class="mb3 form-group">
            <label class="form-label">Trạng thái</label>
            <select name="status" class="form-select">
                <option <?php if($bannerHome->status == 1) echo 'selected' ?> value="1">Hiển thị</option>
                <option <?php if($bannerHome->status == 0) echo 'selected' ?> value="0">Ẩn</option>
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
    <img src="{{asset('uploads/banner-home/'.$bannerHome->img)}}" id="img-preview" class="img-preview">
</div>
@endsection


