@extends('pages/admin/layout/master')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><b>Thêm sản phẩm mới</b></h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Nhập thông tin sản phẩm mới
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form role="form" method="post" action="{{url('admin/san-pham/them-san-pham')}}" enctype="multipart/form-data">
                                    @csrf
                                    <!--tên sp-->
                                    <div class="form-group">
                                        <label>Tên sản phẩm:</label>
                                        <input type="text" id="ten_san_pham" name="ten_san_pham" class="form-control" value="{{old('ten_san_pham')}}">
                                        @if ($errors->has('ten_san_pham'))
                                            <p class="help-block" style="color: #9c0f26;">
                                                {{$errors->first('ten_san_pham')}}
                                            </p>
                                        @endif
                                    </div>
                                    <!--tên sp-->
                                    <div class="form-group">
                                        <label>Mã sản phẩm:</label>
                                        <input type="text" id="ma_san_pham" name="ma_san_pham" class="form-control" value="{{old('ma_san_pham')}}">
                                        @if ($errors->has('ma_san_pham'))
                                            <p class="help-block" style="color: #9c0f26;">
                                                {{$errors->first('ma_san_pham')}}
                                            </p>
                                        @endif
                                    </div>
                                    <!--tên url-->
                                    <div class="form-group">
                                        <label>Tên url:</label>
                                        <input type="text" id="ten_url" name="ten_url" class="form-control" value="{{old('ten_url')}}">
                                        @if ($errors->has('ten_url'))
                                            <p class="help-block" style="color: #9c0f26;">
                                                {{$errors->first('ten_url')}}
                                            </p>
                                        @endif
                                    </div>
                                    <!--Hình sản phẩm-->
                                    <div class="form-group">
                                        <label>Hình sản phẩm:</label>
                                        <input type="file" id="hinh_san_pham" name="hinh_san_pham" >
                                        @if ($errors->has('hinh_san_pham'))
                                            <p class="help-block" style="color: #9c0f26;">
                                                {{$errors->first('hinh_san_pham')}}
                                            </p>
                                        @endif
                                    </div>
                                    {{-- <!--Hình 1-->
                                    <div class="form-group">
                                        <label>Hình chi tiết 1:</label>
                                        <input type="file" id="hinh_1" name="hinh_1" >
                                        @if ($errors->has('hinh_1'))
                                            <p class="help-block" style="color: #9c0f26;">
                                                {{$errors->first('hinh_1')}}
                                            </p>
                                        @endif
                                    </div>
                                    <!--Hình 2-->
                                    <div class="form-group">
                                        <label>Hình chi tiết 2:</label>
                                        <input type="file" id="hinh_2" name="hinh_2" >
                                        @if ($errors->has('hinh_2'))
                                            <p class="help-block" style="color: #9c0f26;">
                                                {{$errors->first('hinh_2')}}
                                            </p>
                                        @endif
                                    </div>
                                    <!--Hình 3-->
                                    <div class="form-group">
                                        <label>Hình chi tiết 3:</label>
                                        <input type="file" id="hinh_3" name="hinh_3" >
                                        @if ($errors->has('hinh_3'))
                                            <p class="help-block" style="color: #9c0f26;">
                                                {{$errors->first('hinh_3')}}
                                            </p>
                                        @endif
                                    </div> --}}
                                    <!--Giá gốc-->
                                    <div class="form-group">
                                        <label>Giá gốc:</label>
                                        <input type="number" id="gia_goc" name="gia_goc" class="form-control" value="{{old('gia_goc')}}">
                                        @if ($errors->has('gia_goc'))
                                            <p class="help-block" style="color: #9c0f26;">
                                                {{$errors->first('gia_goc')}}
                                            </p>
                                        @endif
                                    </div>
                                    <!--Giảm giá-->
                                    <div class="form-group">
                                        <label>Giảm giá:</label>
                                        <input type="number" id="giam_gia" name="giam_gia" class="form-control" value="{{old('giam_gia')}}">
                                        @if ($errors->has('giam_gia'))
                                            <p class="help-block" style="color: #9c0f26;">
                                                {{$errors->first('giam_gia')}}
                                            </p>
                                        @endif
                                    </div>
                                    <!--loại-->
                                    <div class="form-group">
                                        <label>Loại:</label>
                                        <select type="text" id="ten_loai" class="form-control" name="ten_loai" style="width: 250px; text-align: center;"value="{{old('ten_loai')}}">
                                            @foreach($dslsp as $lsp)
                                                    <option value="{{$lsp->ma_loai}}">{{ $lsp->ten_loai }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('ten_loai'))
                                            <p class="help-block" style="color: #9c0f26;">
                                                {{$errors->first('ten_loai')}}
                                            </p>
                                        @endif
                                    </div>
                                    <!--nhà sản xuất-->
                                    <div class="form-group">
                                        <label>Thương hiệu:</label>
                                        <select type="text" id="ten_nsx" class="form-control" name="ten_nsx" style="width: 250px; text-align: center;" value="{{old('ten_nsx')}}" class="col-lg-1">
                                        @foreach($ds_nsx as $nsx)
                                            <option value="{{$nsx->ten_nha_san_xuat}}">{{ $nsx->ten_nha_san_xuat }}</option>
                                        @endforeach
                                        </select>
                                        @if ($errors->has('ten_nsx'))
                                            <p class="help-block" style="color: #9c0f26;">
                                                {{$errors->first('ten_nsx')}}
                                            </p>
                                        @endif
                                    </div>
                                    <!--Trạng thái-->
                                    <div class="form-group">
                                        <label>Trạng thái:</label>
                                        <select id="trang_thai" class="form-control" name="trang_thai" style="width: 250px; text-align: center;"value="1">
                                            <option value="1" selected="selected">Active</option>
                                            <option value="0">X</option>
                                        </select>
                                    </div>
                                    <!--Hot-->
                                    <div class="form-group">
                                        <label>Hot:</label>
                                        <select type="number" class="form-control" id="hot" name="hot" style="width: 250px; text-align: center;"value="1">
                                            <option  selected="selected" value="1">Active</option>
                                            <option value="0">X</option>
                                        </select>
                                    </div>
                                    <!--New-->
                                    <div class="form-group">
                                        <label>New:</label>
                                        <select type="text" id="new" class="form-control" name="new" style="width: 250px; text-align: center;"value="1">
                                            <option selected="selected" value="1">Active</option>
                                            <option value="0">X</option>
                                        </select>
                                    </div>
                                    <!--Gimar giá sốc-->
                                    <div class="form-group">
                                        <label>Sale:</label>
                                        <select type="text" id="new" class="form-control" name="giam_gia_soc" style="width: 250px; text-align: center;"value="1">
                                            <option selected="selected" value="1">Active</option>
                                            <option value="0">X</option>
                                        </select>
                                    </div>
                                    <!--Số lượng tồn-->
                                    <div class="form-group">
                                        <label>Số lượng tồn:</label>
                                        <input type="text" id="store_sl_ton" name="store_sl_ton" class="form-control" value="{{old('store_sl_ton')}}" placeholder="100">
                                        @if ($errors->has('store_sl_ton'))
                                            <p class="help-block" style="color: #9c0f26;">
                                                {{$errors->first('store_sl_ton')}}
                                            </p>
                                        @endif
                                    </div>
                                    <br>
                                    <!--Thông số sản phẩm-->
                                    <hr><h3><b>Thông số kỹ thuật</b></h3><hr>
                                    <!--CPU-->
                                    <div class="form-group">
                                        <label>CPU:</label>
                                        <input type="text" id="tskt_chip" name="tskt_chip" class="form-control" value="{{old('tskt_chip')}}" placeholder="intel....">
                                    </div>
                                    <!--RAM-->
                                    <div class="form-group">
                                        <label>RAM:</label>
                                        <input type="text" id="tskt_ram" name="tskt_ram" class="form-control" value="{{old('tskt_ram')}}" placeholder="8Gb DDR4...">
                                    </div>
                                    <!--ROM-->
                                    <div class="form-group">
                                        <label>Bộ nhớ trong:</label>
                                        <input type="text" id="tskt_bo_nho_trong" name="tskt_bo_nho_trong" class="form-control" value="{{old('tskt_bo_nho_trong')}}" placeholder="500GB SSD">
                                    </div>
                                    <!--Kích thướt màn hình-->
                                    <div class="form-group">
                                        <label>Kích thướt màn hình:</label>
                                        <input type="text" id="tskt_man_hinh" name="tskt_man_hinh" class="form-control" value="{{old('tskt_man_hinh')}}" placeholder="5''...">
                                    </div>
                                    <!--Màn hình-->
                                    <div class="form-group">
                                        <label>Màn hình:</label>
                                        <input type="text" id="tskt_pixel" name="tskt_pixel" class="form-control" value="{{old('tskt_pixel')}}" placeholder="1690x1080px...">
                                    </div>
                                    <!--Màn hình-->
                                    <div class="form-group">
                                        <label>VGA:</label>
                                        <input type="text" id="tskt_VGA" name="tskt_VGA" class="form-control" value="{{old('tskt_VGA')}}" placeholder="Randeon....">
                                    </div>
                                    <!--Cam trước-->
                                    <div class="form-group">
                                        <label>Camera trước:</label>
                                        <input type="text" id="tskt_camera_truoc" name="tskt_camera_truoc" class="form-control"value="{{old('tskt_camera_truoc')}}" placeholder="...MP">
                                    </div>
                                    <!--Cam sau-->
                                    <div class="form-group">
                                        <label>Camera sau:</label>
                                        <input type="text" id="tskt_camera_sau" name="tskt_camera_sau" class="form-control" value="{{old('tskt_camera_sau')}}" placeholder="...MP" >
                                    </div>
                                    <!--Sim-->
                                    <div class="form-group">
                                        <label>Sim:</label>
                                        <input type="text" id="tskt_sim" name="tskt_sim" class="form-control"  value="{{old('tskt_sim')}}" placeholder="... sim">
                                    </div>
                                    <!--Pin-->
                                    <div class="form-group">
                                        <label>Pin:</label>
                                        <input type="text" id="tskt_pin" name="tskt_pin" class="form-control" value="{{old('tskt_pin')}}" placeholder="... mAh">
                                    </div>
                                    <!--Kết nối-->
                                    <div class="form-group">
                                        <label>Kết nối:</label>
                                        <input type="text" id="tskt_ket_noi_mang" name="tskt_ket_noi_mang" class="form-control" value="{{old('tskt_ket_noi_mang')}}" placeholder="Wifi, 3G, 4G, USB, HDMI,...">
                                    </div>
                                    <!--Vật liệu-->
                                    <div class="form-group">
                                        <label>Vật liệu:</label>
                                        <input type="text" id="tskt_material" name="tskt_material" class="form-control" value="{{old('tskt_material')}}" placeholder="Khung nhôm....">
                                    </div>
                                    <!--Xuất xứ-->
                                    <div class="form-group">
                                        <label>Xuất xứ:</label>
                                        <input type="text" id="tskt_xuat_xu" name="tskt_xuat_xu" class="form-control" value="{{old('tskt_material')}}" placeholder="Hàng chính hãng...">
                                    </div>
                                    <!--Trọng lượng-->
                                    <div class="form-group">
                                        <label>Trọng lượng:</label>
                                        <input type="text" id="tskt_weight" name="tskt_weight" class="form-control" value="{{old('tskt_weight')}}" placeholder="Nặng ... kg">
                                    </div>
                                    <!--Bảo hành-->
                                    <div class="form-group">
                                        <label>Bảo hành:</label>
                                        <input type="text" id="tskt_bao_hanh" name="tskt_bao_hanh" class="form-control" value="{{old('tskt_bao_hanh')}}" placeholder="... tháng">
                                    </div>
                                    <!--Giới thiệu-->
                                    <hr><h3><b >Giới thiệu sản phẩm</b></h3><hr>
                                    <!--Giới thiệu-->
                                    <div class="form-group">
                                        <label>Giới thiệu:</label>
                                        <textarea id="gioi_thieu" name="gioi_thieu" style="width:650px;height:200px;" class="form-control"  value="{{old('gioi_thieu')}}" placeholder=".........."></textarea>
                                    </div>
                                    <br>
                                    <!--Giới thiệu 2-->
                                    <div class="form-group">
                                        <label>Giới thiệu 2:</label>
                                        <textarea rows="" id="gioi_thieu_2" name="gioi_thieu_2" style="width:650px;height:200px;" class="form-control" value="{{old('gioi_thieu_2')}}" placeholder=".........."></textarea>
                                    </div>
                                    <br>
                                    <!--Giới thiệu 3-->
                                    <div class="form-group">
                                        <label>Giới thiệu 3:</label>
                                        <textarea id="gioi_thieu_3" class="form-control" name="gioi_thieu_3" style="width:650px;height:200px;"value="{{old('gioi_thieu_3')}}" placeholder=".........." ></textarea>
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-success">Đồng ý</button>
                                    <button type="reset" class="btn btn-danger">Reset</button>
                                </form>
                            </div>
                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
</div>

@endsection
