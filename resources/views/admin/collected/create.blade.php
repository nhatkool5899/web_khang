@extends('layout.admin')
@section('title', 'Thêm Bộ sưu tập')
@section('content')
    <h4 class="font-medium leading-tight text-2xl mt-0 mb-2">Thêm Bộ sưu tập</h4>

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
    <form action="{{route('collected.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="box-submit">
            <button type="submit" class="btn btn-primary"><i class="fa-regular fa-floppy-disk"></i> Xác nhận</button>
        </div>
        <div class="mb-3 form-group">
            <label class="form-label">Tên bộ sưu tập</label>
            <input type="text" class="form-control" name="name" value="{{old('name')}}">
        </div>
        <div class="mb-3 form-group">
            <label class="form-label">Mô tả</label>
            <input type="text" class="form-control" name="description" value="{{old('description')}}">
        </div>

        <div class="mb-3 form-group">
            <label class="form-label">Loại bố cục hiển thị</label>
            <div class="row">
                <div class="col-4">
                    <select name="type" class="form-select" id="select-layout">
                        <option value="3">Bố cục 3</option>
                        <option value="5">Bố cục 5</option>
                        <option value="6">Bố cục 6</option>
                    </select>
                </div>
                <div class="col-6">
                    <img class="layout-3 layout-block active" src="{{asset('back-end/imgs/layout-3.PNG')}}" alt="">
                    <img class="layout-5 layout-block" src="{{asset('back-end/imgs/layout-5.PNG')}}" alt="">
                    <img class="layout-6 layout-block" src="{{asset('back-end/imgs/layout-6.PNG')}}" alt="">
                </div>
            </div>
        </div>

        <div class="mb-3 form-group">
            <label class="form-label">Hình ảnh</label>
            <div class="list-img">
                <label for="inputImg1" class="form-label custom-label">
                    <img class="imgPreview1" src="{{asset('back-end/imgs/add-img.png')}}" alt="">
                    <span>Ảnh 1</span>
                    <input type="file" id="inputImg1" name="img_1" style="display: none">
                </label>
    
                <label for="inputImg2" class="form-label custom-label">
                    <img class="imgPreview2" src="{{asset('back-end/imgs/add-img.png')}}" alt="">
                    <span>Ảnh 2</span>
                    <input type="file" id="inputImg2" name="img_2" style="display: none">
                </label>
    
                <label for="inputImg3" class="form-label custom-label">
                    <img class="imgPreview3" src="{{asset('back-end/imgs/add-img.png')}}" alt="">
                    <span>Ảnh 3</span>
                    <input type="file" id="inputImg3" name="img_3" style="display: none">
                </label>

                <label for="inputImg4" id="label_hide" class="form-label custom-label">
                    <img class="imgPreview4" src="{{asset('back-end/imgs/add-img.png')}}" alt="">
                    <span>Ảnh 4</span>
                    <input type="file" id="inputImg4" name="img_4" style="display: none">
                </label>
            </div>
        </div>
        {{-- <div class="mb-3 form-group">
            <label class="form-label">Thư viện Hình ảnh</label>
            <label for="listImg" class="form-label custom-label">
                <img src="{{asset('back-end/imgs/add-img.png')}}" alt="">
                <span>Chọn các tệp</span>
            </label>
            <input type="file" id="listImg" name="imgs[]" accept="image/*" multiple style="display: block">
        </div> --}}
       
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

    {{-- <script type="text/javascript">
    
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

        $('#select-layout').change(function(){
            if($(this).val() == 5){
                $('#label_hide').addClass('hide');
            }else{
                $('#label_hide').removeClass('hide');
            }
        })
    </script> --}}

    <script>

        var input1 = document.getElementById('inputImg1');
        var input2 = document.getElementById('inputImg2');
        var input3 = document.getElementById('inputImg3');
        var input4 = document.getElementById('inputImg4');

        input1.addEventListener('change', (e) => {
            if (e.target.files.length) {
                let src = URL.createObjectURL(e.target.files[0]);
                $('.imgPreview1').attr('src',src);
            }
        });
        input2.addEventListener('change', (e) => {
            if (e.target.files.length) {
                let src = URL.createObjectURL(e.target.files[0]);
                $('.imgPreview2').attr('src',src);
            }
        });
        input3.addEventListener('change', (e) => {
            if (e.target.files.length) {
                let src = URL.createObjectURL(e.target.files[0]);
                $('.imgPreview3').attr('src',src);
            }
        });
        input4.addEventListener('change', (e) => {
            if (e.target.files.length) {
                let src = URL.createObjectURL(e.target.files[0]);
                $('.imgPreview4').attr('src',src);
            }
        });

    </script>

@endsection


