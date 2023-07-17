@extends('layout')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Sửa sinh viên</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('sinhvien.index')}}" class="btn btn-primary float-end">Danh sách sinh viên</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{route('sinhvien.update',$sinhvien->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Mã sinh viên</strong>
                                <input type="text" name="MaSV" value="{{$sinhvien->MaSV}}" id="" class="form-control" placeholder="Nhập mã sinh viên">
                            </div>
                            <div class="form-group">
                                <strong>Họ Tên</strong>
                                <input type="text" name="HoTen" value="{{$sinhvien->HoTen}}" id="" class="form-control" placeholder="Nhập họ tên sinh viên">
                            </div>
                            <div class="form-group">
                                <strong>Ngày sinh</strong>
                                <input type="date" value="{{$sinhvien->NgaySinh}}" name="NgaySinh" id="" class="form-control" placeholder="Nhập ngày sinh">
                            </div>
                            <div class="form-group">
                                <strong>Giới tính</strong>
                                <select name="GioiTinh" id="" class="form-select">
                                    <option selected>Chọn giới tính</option>
                                    <option value="Nam" value="{{$sinhvien->GioiTinh == "Nam" ? 'selected' : ''}}">Nam</option>
                                    <option value="Nữ" value="{{$sinhvien->GioiTinh == "Nữ" ? 'selected' : ''}}">Nữ</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <strong>Địa chỉ</strong>
                                <input type="text" name="DiaChi" value="{{$sinhvien->DiaChi}}" id="" class="form-control" placeholder="Nhập địa chỉ">
                            </div>
                            <div class="form-group">
                                <strong>Số điện thoại</strong>
                                <input type="text" name="SoDT" value="{{$sinhvien->SoDT}}" id="" class="form-control" placeholder="Nhập số điện thoại">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success mt-2">Cập nhật</button>
                </form>
            </div>
        </div>
    </div>
@endsection