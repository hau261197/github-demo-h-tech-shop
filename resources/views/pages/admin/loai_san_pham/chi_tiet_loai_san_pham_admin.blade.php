@extends('pages/admin/layout/master')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 style="background-color: #e9a974; color:#9c0f26;" class="page-header form-control"><b>Loại sản phẩm</b></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Thông tin loại sản phẩm
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form role="form" method="post" action="{{url('admin/loai-san-pham/chi-tiet-loai-san-pham')}}" enctype="multipart/form-data">
                                    @csrf
                                    {{-- tên loại --}}
                                    <div class="form-group">
                                        <label>Tên loại *</label>
                                        <input class="form-control" name="ten_loai" placeholder="Tên loại" value="{{
                                        $lsp->ten_loai}}">
                                    </div>
                                    @if($errors->has('ten_loai'))
                                        <p class="help-block" style="color: #9c0f26;">
                                            {{$errors->first('ten_loai')}}
                                        </p>
                                    @endif
                                    {{-- mã loại --}}
                                    <div class="form-group">
                                        <label>Mã loại *</label>
                                        <input class="form-control" name="ma_loai_old" type="hidden" value="{{$lsp->ma_loai}}">
                                        <input class="form-control" name="ma_loai" placeholder="Mã loại" value="{{$lsp->ma_loai}}">
                                    </div>
                                    @if($errors->has('ma_loai'))
                                        <p class="help-block" style="color: #9c0f26;">
                                            {{$errors->first('ma_loai')}}
                                        </p>
                                    @endif
                                    {{-- icon --}}
                                    <div class="form-group">
                                        <label>Icon * </label><br>
                                        <img style="height:50px;width:50px;" src="{{URL::asset('resources/hinh/icon/'.$lsp->icon)}}"/><br>
                                        <input type="file" name="icon" value="{{$lsp->icon}}" >
                                    </div>
                                    @if($errors->has('icon'))
                                        <p class="help-block" style="color: #9c0f26;">
                                            {{$errors->first('icon')}}
                                        </p>
                                    @endif
                                    {{--ghi chú --}}
                                    <div class="form-group">
                                        <label>Ghi chú</label>
                                        <textarea class="form-control" rows="3" name="ghi_chu" value="{{$lsp->ghi_chu}}">{{$lsp->ghi_chu}}</textarea>
                                    </div>
                                    @if($errors->has('ghi_chu'))
                                        <p class="help-block" style="color: #9c0f26;">
                                            {{$errors->first('ghi_chu')}}
                                        </p>
                                    @endif
                                    {{-- trạng thái --}}
                                    <div class="form-group">
                                        <label>Trạng thái</label>
                                        <select class="form-control" name="trang_thai" value="{{$lsp->trang_thai}}">
                                            <option value="1" >Active</option>
                                            <option value="0" <?php echo $lsp->trang_thai?'':'selected'; ?>>X</option>
                                        </select>
                                    </div>
                                    <button type="submit" name="edit" class="btn btn-success">Cập nhật</button>
                                    <button type="submit" name="delete" class="btn btn-danger">Xóa loại sản phẩm</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
