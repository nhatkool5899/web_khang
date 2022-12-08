@extends('layout.admin')
@section('title', 'Thêm Banner Trang chủ')
@section('content')
    <h4 class="font-medium leading-tight text-2xl mt-0 mb-2">Thêm bố cục ảnh</h4>

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
    <form action="{{route('photo-layout.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="box-submit">
            <button type="submit" class="btn btn-primary"><i class="fa-regular fa-floppy-disk"></i> Xác nhận</button>
        </div>
        <div class="mb-3 form-group">
            <label class="form-label">Vị trí</label>
            <select name="name" class="form-select" style="font-size: 18px">
                <option value="trang-chu">Trang chủ</option>
                {{-- <option value="2">What's new</option> --}}
            </select>
        </div>
        <div class="mb-3 form-group">
            <label class="form-label">Loại bố cục ảnh</label>
            <div class="row">
                <div class="col-4">
                    <select name="type" class="form-select" id="select-layout">
                        <option value="1">Bố cục 1</option>
                        <option value="2">Bố cục 2</option>
                        {{-- <option value="3">Bố cục 3</option>
                        <option value="4">Bố cục 4</option> --}}
                    </select>
                </div>
                <div class="col-6">
                    <img class="layout-1 layout-block active" src="{{asset('back-end/imgs/layout-1.PNG')}}" alt="">
                    <img class="layout-2 layout-block" src="{{asset('back-end/imgs/layout-2.PNG')}}" alt="">
                    <img class="layout-3 layout-block" src="{{asset('back-end/imgs/layout-1.PNG')}}" alt="">
                    <img class="layout-4 layout-block" src="{{asset('back-end/imgs/layout-1.PNG')}}" alt="">
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

                <label for="inputImg4" class="form-label custom-label">
                    <img class="imgPreview4" src="{{asset('back-end/imgs/add-img.png')}}" alt="">
                    <span>Ảnh 4</span>
                    <input type="file" id="inputImg4" name="img_4" style="display: none">
                </label>

                <label for="inputImg5" class="form-label custom-label">
                    <img class="imgPreview5" src="{{asset('back-end/imgs/add-img.png')}}" alt="">
                    <span>Ảnh 5</span>
                    <input type="file" id="inputImg5" name="img_5" style="display: none">
                </label>
            </div>
        </div>
       
    </form>

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
    <script>

        var input1 = document.getElementById('inputImg1');
        var input2 = document.getElementById('inputImg2');
        var input3 = document.getElementById('inputImg3');
        var input4 = document.getElementById('inputImg4');
        var input5 = document.getElementById('inputImg5');

        console.log(input1);

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
        input5.addEventListener('change', (e) => {
            if (e.target.files.length) {
                let src = URL.createObjectURL(e.target.files[0]);
                $('.imgPreview5').attr('src',src);
            }
        });

    </script>
@endsection


