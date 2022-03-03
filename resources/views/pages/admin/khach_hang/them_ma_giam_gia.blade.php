@extends('pages/admin/layout/master')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header"><b>Thêm mã giảm giá mới</b></h2>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                @if(session('success'))
                    <div class="alert alert-block alert-success">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        {{session('success')}}
                    </div>
                @endif
                @if(session('fail'))
                    <div class="alert alert-block alert-danger">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        {{session('fail')}}
                    </div>
                @endif
                    <form role="form" enctype="multipart/form-data" method="POST" action="{{url('admin/khach-hang/them-ma-giam-gia')}}">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <!--CODE-->
                        <div class="form-group">
                            <label>Code:</label>
                            <input type="text" name="code_mgg" class="form-control" value="{{old('code_mgg')}}" placeholder="10 ký tự">
                        </div>
                        @if ($errors->has('code_mgg'))
                            <p class="help-block" style="color: #9c0f26;">
                                {{$errors->first('code_mgg')}}
                            </p>
                        @endif
                        <!--Đối tượng-->
                        <div class="form-group">
                            <label>Đối tượng:</label>
                            <select type="text" id="doi_tuong" name="doi_tuong" style="width: 250px; text-align: center;"   value="{{old('doi_tuong')}}" class="form-control">
                                @foreach($doi_tuong as $dtg)
                                    <option value="{{$dtg->member}}">{{$dtg->member}}</option>
                                @endforeach
                            </select>
                        </div>
                        @if ($errors->has('doi_tuong'))
                            <p class="help-block" style="color: #9c0f26;">
                                {{$errors->first('doi_tuong')}}
                            </p>
                        @endif
                        <!--Giá trị-->
                        <div class="form-group">
                            <label>Giá trị:</label>
                            <input type="number" id="gia_tri" name="gia_tri" class="form-control" value="{{old('gia_tri')}}" placeholder="Giá trị số thực...">
                        </div>
                        @if ($errors->has('gia_tri'))
                            <p class="help-block" style="color: #9c0f26;">
                                {{$errors->first('gia_tri')}}
                            </p>
                        @endif
                        <!--Trạng thái-->
                        <div class="form-group">
                            <label>Trạng thái:</label>
                            <select class="form-control" type="text" id="trang_thai" name="trang_thai" style="width: 250px; text-align: center;"   value="{{old('trang_thai')}}">
                                <option selected="selected" value="1">Active</option>
                                <option  value="0">X</option>
                            </select>
                        </div>
                        <!--Ngày bắt đầu-->
                        <div class="form-group">
                            <label>Ngày bắt đầu:</label>
                            <input type="date"  name="ngay_bat_dau" class="form-control"  value="{{date('Y-m-d')}}">
                        </div>
                        @if ($errors->has('ngay_bat_dau'))
                            <p class="help-block" style="color: #9c0f26;">
                                {{$errors->first('ngay_bat_dau')}}
                            </p>
                        @endif
                        <!--Ngày kết thúc-->
                        <div class="form-group">
                            <label>Ngày kết thúc:</label>
                            <input type="date"  name="ngay_ket_thuc" class="form-control"  value="{{date('Y-m-d')}}">
                        </div>
                        @if ($errors->has('ngay_ket_thuc'))
                            <p class="help-block" style="color: #9c0f26;">
                                {{$errors->first('ngay_ket_thuc')}}
                            </p>
                        @endif
                        <button type="submit" class="btn btn-primary">Xác nhận</button>
                        <br><br>
                    </form>
                </div>
            </div>
            <!-- /.col-lg-8 -->
            <!-- /.col-lg-4 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>

@endsection
