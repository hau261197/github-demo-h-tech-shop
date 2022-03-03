@extends('pages/admin/layout/master')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 style="background-color: #e9a974; color:#9c0f26;" class="page-header form-control"><b>Thêm loại sản phẩm mới</b></h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Nhập thông tin loại sản phẩm mới
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form role="form" method="post" action="{{url('admin/loai-san-pham/them-loai-san-pham')}}" enctype="multipart/form-data">
                                    @csrf
                                    {{-- tên loại --}}
                                    <div class="form-group">
                                        <label>Tên loại *</label>
                                        <input class="form-control" name="ten_loai" placeholder="Tên loại" value="{{old('ten_loai')}}">
                                    </div>
                                    @if($errors->has('ten_loai'))
                                        <p class="help-block" style="color: #9c0f26;">
                                            {{$errors->first('ten_loai')}}
                                        </p>
                                    @endif
                                    {{-- mã loại --}}
                                    <div class="form-group">
                                        <label>Mã loại *</label>
                                        <input class="form-control" name="ma_loai" placeholder="Mã loại" value="{{old('ma_loai')}}">
                                    </div>
                                    @if($errors->has('ma_loai'))
                                        <p class="help-block" style="color: #9c0f26;">
                                            {{$errors->first('ma_loai')}}
                                        </p>
                                    @endif
                                    {{-- icon --}}
                                    <div class="form-group">
                                        <label>Icon * </label>
                                        <input type="file" name="icon" value="{{old('icon')}}" >
                                    </div>
                                    @if($errors->has('icon'))
                                        <p class="help-block" style="color: #9c0f26;">
                                            {{$errors->first('icon')}}
                                        </p>
                                    @endif
                                    {{--ghi chú --}}
                                    <div class="form-group">
                                        <label>Ghi chú</label>
                                        <textarea class="form-control" rows="3" name="ghi_chu" value="{{old('ghi_chu')}}"></textarea>
                                    </div>
                                    @if($errors->has('ghi_chu'))
                                        <p class="help-block" style="color: #9c0f26;">
                                            {{$errors->first('ghi_chu')}}
                                        </p>
                                    @endif
                                    {{-- trạng thái --}}
                                    <div class="form-group">
                                        <label>Trạng thái</label>
                                        <select class="form-control" name="trang_thai" value="{{old('trang_thai')}}">
                                            <option value="1">Active</option>
                                            <option value="0">X</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-success">Đồng ý</button>
                                    <button type="reset" class="btn btn-danger">Reset</button>
                                </form>
                            </div>
                            <!-- /.col-lg-6 (nested) -->
                            {{-- <div class="col-lg-6">
                                <h1>Disabled Form States</h1>
                                <form role="form">
                                    <fieldset disabled>
                                        <div class="form-group">
                                            <label for="disabledSelect">Disabled input</label>
                                            <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="disabledSelect">Disabled select menu</label>
                                            <select id="disabledSelect" class="form-control">
                                                <option>Disabled select</option>
                                            </select>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox">Disabled Checkbox
                                            </label>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Disabled Button</button>
                                    </fieldset>
                                </form>
                                <h1>Form Validation States</h1>
                                <form role="form">
                                    <div class="form-group has-success">
                                        <label class="control-label" for="inputSuccess">Input with success</label>
                                        <input type="text" class="form-control" id="inputSuccess">
                                    </div>
                                    <div class="form-group has-warning">
                                        <label class="control-label" for="inputWarning">Input with warning</label>
                                        <input type="text" class="form-control" id="inputWarning">
                                    </div>
                                    <div class="form-group has-error">
                                        <label class="control-label" for="inputError">Input with error</label>
                                        <input type="text" class="form-control" id="inputError">
                                    </div>
                                </form>
                                <h1>Input Groups</h1>
                                <form role="form">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon">@</span>
                                        <input type="text" class="form-control" placeholder="Username">
                                    </div>
                                    <div class="form-group input-group">
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon">.00</span>
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-eur"></i>
                                        </span>
                                        <input type="text" class="form-control" placeholder="Font Awesome Icon">
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon">$</span>
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon">.00</span>
                                    </div>
                                    <div class="form-group input-group">
                                        <input type="text" class="form-control">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="button"><i class="fa fa-search"></i>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            </div> --}}
                            <!-- /.col-lg-6 (nested) -->
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
    <!-- /.container-fluid -->
</div>

@endsection
