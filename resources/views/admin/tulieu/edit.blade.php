@extends('layout.admin')
@section('title', 'Cập nhật Tư liệu')
@section('content')
    <h4 class="font-medium leading-tight text-2xl mt-0 mb-2">Cập nhật Tư liệu</h4>

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
    <form action="{{route('tulieu.update', ['tulieu' => $tulieu->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="box-submit">
            <button type="submit" class="btn btn-primary"><i class="fa-regular fa-floppy-disk"></i> Xác nhận</button>
        </div>
        <div class="mb-3 form-group">
            <label class="form-label">Tên tư liệu</label>
            <input type="text" class="form-control" name="name" value="{{$tulieu->name}}">
        </div>
        <div class="mb-3 form-group">
            <label class="form-label">Mô tả</label>
            <input type="text" class="form-control" name="description" value="{{$tulieu->description}}">
        </div>
        <div class="mb-3 form-group">
            <label class="form-label">Câu chuyện</label>
            <textarea name="content" id="ckditor" class="form-control" cols="30" rows="10">{{$tulieu->content}}</textarea>
        </div>
        <div class="mb-3 form-group">
            <label class="form-label">Loại bố cục hiển thị</label>
            <div class="row">
                <div class="col-4">
                    <select name="type" class="form-select" id="select-layout" disabled>
                        <option <?php if($tulieu->layout->type == 3) echo 'selected' ?> value="3">Bố cục 3</option>
                        <option <?php if($tulieu->layout->type == 4) echo 'selected' ?> value="4">Bố cục 4</option>
                        <option <?php if($tulieu->layout->type == 5) echo 'selected' ?> value="5">Bố cục 5</option>
                        <option <?php if($tulieu->layout->type == 7) echo 'selected' ?> value="7">Bố cục 7</option>
                    </select>
                </div>
                <div class="col-6">
                    <img class="layout-3 layout-block <?php if($tulieu->layout->type == 3) echo 'active' ?>" src="{{asset('back-end/imgs/layout-3.PNG')}}" alt="">
                    <img class="layout-4 layout-block <?php if($tulieu->layout->type == 4) echo 'active' ?>" src="{{asset('back-end/imgs/layout-4.PNG')}}" alt="">
                    <img class="layout-5 layout-block <?php if($tulieu->layout->type == 5) echo 'active' ?>" src="{{asset('back-end/imgs/layout-5.PNG')}}" alt="">
                    <img class="layout-7 layout-block <?php if($tulieu->layout->type == 7) echo 'active' ?>" src="{{asset('back-end/imgs/layout-7.PNG')}}" alt="">
                </div>
            </div>
        </div>

        <div class="mb-3 form-group">
            <label class="form-label">Hình ảnh</label>
            <div class="list-img">
                <label for="inputImg1" class="form-label custom-label">
                    <img class="imgPreview1" src="{{asset('uploads/tu-lieu/'.$tulieu->layout->img_1)}}" alt="">
                    <span>Ảnh 1</span>
                    <input type="file" id="inputImg1" name="img_1" style="display: none">
                </label>
                @if ($tulieu->layout->type != 7)
                    <label for="inputImg2" class="form-label custom-label hide-label">
                        <img class="imgPreview2" src="{{asset('uploads/tu-lieu/'.$tulieu->layout->img_2)}}" alt="">
                        <span>Ảnh 2</span>
                        <input type="file" id="inputImg2" name="img_2" style="display: none">
                    </label>
        
                    <label for="inputImg3" class="form-label custom-label hide-label">
                        <img class="imgPreview3" src="{{asset('uploads/tu-lieu/'.$tulieu->layout->img_3)}}" alt="">
                        <span>Ảnh 3</span>
                        <input type="file" id="inputImg3" name="img_3" style="display: none">
                    </label>
                    @if ($tulieu->layout->type != 5)
                    <label for="inputImg4" id="label_hide" class="form-label custom-label hide-label">
                        <img class="imgPreview4" src="{{asset('uploads/tu-lieu/'.$tulieu->layout->img_4)}}" alt="">
                        <span>Ảnh 4</span>
                        <input type="file" id="inputImg4" name="img_4" style="display: none">
                    </label>
                    @endif
                @endif
            </div>
        </div>
       
    </form>


    <script type="text/javascript">

        $('#select-layout').change(function(){
            if($(this).val() == 5){
                $('.hide-label').removeClass('hide');
                $('#label_hide').addClass('hide');
            }else{
                if($(this).val() == 7){
                    $('.hide-label').addClass('hide');
                }
                else{
                    $('#label_hide').removeClass('hide');
                    $('.hide-label').removeClass('hide');
                }
            }

        })
    </script>

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


