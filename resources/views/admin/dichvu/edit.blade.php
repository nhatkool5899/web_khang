@extends('layout.admin')
@section('title', 'Cập nhật dịch vụ')
@section('content')
    <h4 class="font-medium leading-tight text-2xl mt-0 mb-2">Cập nhật dịch vụ mới</h4>

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
    <form action="{{route('service.update',['service' => $dichvu->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="box-submit">
            <button type="submit" class="btn btn-primary"><i class="fa-regular fa-floppy-disk"></i> Xác nhận</button>
        </div>
        <div class="mb-3 form-group">
          <label class="form-label">Tên dịch vụ</label>
          <input type="text" class="form-control" name="name" value="{{$dichvu->name}}">
        </div>
        <div class="mb-3 form-group">
            <label class="form-label">Mô tả</label>
            <input type="text" class="form-control" name="description" value="{{$dichvu->description}}">
        </div>
        <div class="mb-3 form-group">
            <label class="form-label">Nội dung</label>
            <textarea name="content" id="ckeditor" class="form-control" rows="10">{{$dichvu->content}}</textarea>
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
    <img src="{{asset('uploads/dichvu/'.$dichvu->img)}}" id="img-preview" class="img-preview">
</div>
@endsection





