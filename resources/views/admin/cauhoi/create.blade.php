@extends('layout.admin')
@section('title', 'Thêm câu hỏi')
@section('content')
    <h4 class="font-medium leading-tight text-2xl mt-0 mb-2">Thêm câu hỏi</h4>

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
    <form action="{{route('cauhoi.store')}}" method="post">
        @csrf
        <div class="box-submit">
            <button type="submit" class="btn btn-primary"><i class="fa-regular fa-floppy-disk"></i> Xác nhận</button>
        </div>

        <div class="mb-3 form-group">
            <label class="form-label">Câu hỏi</label>
            <input type="text" class="form-control" name="title" value="{{old('title')}}">
        </div>
        <div class="mb-3 form-group">
            <label class="form-label">Nội dung</label>
            <textarea name="content" class="form-control" rows="10">{{old('content')}}</textarea>
        </div>
        
       
    </form>

@endsection


