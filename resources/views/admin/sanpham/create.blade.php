@extends('layout.admin')
@section('title', 'Thêm Sản phẩm')
@section('content')
    <h4 class="font-medium leading-tight text-2xl mt-0 mb-2">Thêm Sản phẩm</h4>

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
    <form action="{{route('sanpham.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="box-submit">
            <button type="submit" class="btn btn-primary"><i class="fa-regular fa-floppy-disk"></i> Xác nhận</button>
        </div>
        <div class="mb-3 form-group">
            <label class="form-label">Danh mục</label>
            <select name="danhmuc_id" class="form-select">
                <option value="">--Chọn danh mục--</option>
                @foreach ($danhmuc as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3 form-group">
            <label class="form-label">Tên sản phẩm</label>
            <input type="text" class="form-control" name="name" id="slug" onkeyup="ChangeToSlug()">
        </div>
        <div class="mb-3 form-group">
            <label class="form-label">Slug</label>
            <input type="text" class="form-control" name="slug" id="convert_slug">
        </div>
        <div class="mb-3 form-group">
            <label class="form-label">Giới tính:</label>
            <select name="gender" class="form-select">
                <option value="0">Tất cả</option>
                <option value="1">Nam</option>
                <option value="2">Nữ</option>
            </select>
        </div>
        <div class="mb-3 form-group">
            <label class="form-label">Mô tả</label>
            <input type="text" class="form-control" name="description">
        </div>
        <div class="mb-3 form-group">
            <label class="form-label">Nội dung</label>
            <textarea name="content" class="form-control" id="ckeditor" cols="30" rows="10"></textarea>
        </div>
        <div class="mb-3 form-group">
            <label class="form-label">Giá tiền</label>
            <input type="text" class="form-control" name="price">
        </div>
        <div class="mb-3 form-group">
            <label class="form-label">Hình ảnh</label>
            <label for="inputImg" class="form-label custom-label">
                <img src="{{asset('back-end/imgs/add-img.png')}}" alt="">
                <span>Chọn hình ảnh</span>
                <input type="file" id="inputImg" name="img" style="display: none">
            </label>
            <img src="" id="img-preview" class="img-preview" style="display:inline;position: relative;top:-30px;left:50px">
        </div>
        <div class="mb-3 form-group">
            <label class="form-label">Thư viện Hình ảnh</label>
            <label for="listImg" class="form-label custom-label">
                <img src="{{asset('back-end/imgs/add-img.png')}}" alt="">
                <span>Chọn các tệp</span>
            </label>
            <input type="file" id="listImg" name="list_img[]" accept="image/*" multiple style="display: block">
        </div>
       
    </form>

    <div class="list-images row">
        {{-- @if (isset($list_images) && !empty($list_images))
            @foreach (json_decode($list_images) as $key => $img)
                <div class="box-image">
                    <input type="hidden" name="images_uploaded[]" value="{{ $img }}" id="img-{{ $key }}">
                    <img src="{{ asset('files/'.$img) }}" class="picture-box">
                    <div class="wrap-btn-delete"><span data-id="img-{{ $key }}" class="btn-delete-image">x</span></div>
                </div>
            @endforeach
            <input type="hidden" name="images_uploaded_origin" value="{{ $list_images }}">
            <input type="hidden" name="id" value="{{ $id }}">
        @endif --}}
    </div>

    <script type="text/javascript">
    
        $('#listImg').change(function(event){
            let today = new Date();
            let time = today.getTime();
            for (let i = 0; i < event.target.files.length; i++) {
                let image = event.target.files[i];
                let file_name = event.target.files[i].name;
                let box_image = $('<div class="box-image col-lg-2 col-6"></div>');
                box_image.append('<img src="' + URL.createObjectURL(image) + '" class="picture-box">');
                box_image.append('<div class="wrap-btn-delete"><span data-id=img'+i+' class="btn-delete-image">x</span></div>');
                $(".list-images").append(box_image);
                
            }
    
        });
    
        $(".list-images").on('click', '.btn-delete-image', function(){
            let id = $(this).data('id');
            $('#'+id).remove();
            $(this).parents('.box-image').remove();
        });
    </script>

@endsection


