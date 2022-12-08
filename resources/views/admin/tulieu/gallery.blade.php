@extends('layout.admin')
@section('title', 'Thêm thư viện ảnh')
@section('content')
    <h4 class="font-medium leading-tight text-2xl mt-0 mb-2">Thêm thư viện ảnh</h4>

    <div class="clearfix"></div>

    <form action="{{url('tulieu/update-gallery/'.$value->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="box-submit">
            <button type="submit" class="btn btn-primary"><i class="fa-regular fa-floppy-disk"></i> Xác nhận</button>
        </div>
        <div class="mb-3 form-group">
            <label class="form-label">Thư viện Hình ảnh</label>
            <label for="listImg" class="form-label custom-label">
                <img src="{{asset('back-end/imgs/add-img.png')}}" alt="">
                <span>Thêm hình ảnh</span>
            </label>
            <input type="file" id="listImg" name="add_img[]" accept="image/*" multiple style="display: block">
        </div>

        <div class="list-images row">
            @if (!empty($value->imgs))    
                @foreach (json_decode($value->imgs) as $key => $img)
                    <div class="box-image col-lg-2 col-6">
                        <input type="hidden" name="list_img[]" value="{{ $img }}">
                        <img src="{{ asset('uploads/tu-lieu/'.$value->id.'/'.$img) }}" class="picture-box">
                        <div class="wrap-btn-delete"><span data-id="img-{{ $key }}" class="btn-delete-image">x</span></div>
                    </div>
                @endforeach
            @endif
        </div>
    </form>

    <script type="text/javascript">
    
        $('#listImg').change(function(event){
            $('.add-box-image').remove();
            let today = new Date();
            let time = today.getTime();
            for (let i = 0; i < event.target.files.length; i++) {
                let image = event.target.files[i];
                let file_name = event.target.files[i].name;
                let box_image = $('<div class="box-image add-box-image col-lg-2 col-6"></div>');
                box_image.append('<input type="hidden" name="list_img[]" value="'+file_name+'">');
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


