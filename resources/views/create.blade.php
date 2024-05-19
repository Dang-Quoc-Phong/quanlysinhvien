@extends('layout');
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Them moi sinh vien</h2>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('sinhvien.index') }}" class="btn btn-primary float-end">Danh sach sinh vien</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('sinhvien.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Ma sinh vien</strong>
                                <input type="text" name="MaSV" class="form-control" placeholder="Nhap ma sinh vien">
                            </div>
                            <div class="form-group">
                                <strong>Ho ten</strong>
                                <input type="text" name="HoTen" class="form-control" placeholder="Nhap ho ten">
                            </div>
                            <div class="form-group">
                                <strong>Ngay sinh</strong>
                                <input type="date" name="NgaySinh" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Gioi Tinh</strong>
                                    <select name="GioiTinh" class="form-select">
                                        <option selected>--Chon Gioi Tinh---</option>
                                        <option value="Nam">Nam</option>
                                        <option value="Nu">Nu</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <strong>Dia chi</strong>
                                    <input type="text" name="DaiChi" class="form-control" placeholder="Nhap dia chi...">
                                </div>
                                <div class="form-group">
                                    <strong>Nhap so dien thoai</strong>
                                    <input type="text" name="SoDT" class="form-control"
                                        placeholder="Nhap So dien thoai...">
                                </div>
                            </div>
                        </div>
                        <button style="submit" class="btn btn-success mt-2">Luu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
