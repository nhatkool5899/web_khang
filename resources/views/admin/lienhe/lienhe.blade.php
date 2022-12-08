@extends('adminquanly')
@section('title', 'Quản lý liên hệ')
@section('content')
<div class="table-responsive">
  <table class="table">
    <thead class="table-dark">
      <tr>
        <th scope="col">Họ và tên</th>
        <th scope="col">Địa chỉ email</th>
        <th scope="col">Địa chỉ</th>
        <th scope="col">Số điện thoại</th>
        <th scope="col">Nội dung</th>
        <th scope="col">Thao tác</th>
      </tr>
    </thead>
    <tbody>
      @foreach($lienhes as $lienhe)
      <tr>
        <td>{{ $lienhe->hovaten }}</td>
        <td>{{ $lienhe->email }}</td>
        <td>{{ $lienhe->diachi }}</td>
        <td>{{ $lienhe->sodienthoai}}</td>
        <td>{{ $lienhe->noidung}}</td>
        <td>
          <a href="/quanly/lienhe/xoalienhe/{{ $lienhe->id_lienhe }}" onclick="return confirm('Bạn có muốn xóa không?')"><i class="fa-solid fa-trash"></i>Xóa</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection