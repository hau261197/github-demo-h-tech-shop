@extends('layout/master')
@section('title','Đăng nhập')
@section('content')
<link rel="stylesheet" href="{{URL::asset('resources/css/fontend/customize_homepage.css')}}"/>
<div id="content" style="margin-top:75px;">
    <div id="mainBody">
        <div class="container">
            <div class="row">
                <!-- Danh sách loại sản phẩm -->
                <div id="sidebar" class="span2">
                    <ul id="sideManu" class="nav nav-tabs nav-stacked">
                        <?php
                            foreach($loai_san_pham as $lsp)
                            {
                        ?>
                        <li class="subMenu"><a style="color: rgb(95, 16, 16)"> {{$lsp->ten_loai}} [{{$lsp->tssp}}]</a>
                            {{-- Danh sách nhà sản xuất theo từng loại sản phẩm --}}
                            <ul style="display:none">
                                <?php foreach($nha_san_xuat as $nsx){
                                    if($nsx->ten_loai === $lsp->ten_loai){?>
                                    <li>
                                        <a class="active" href="{{url('san-pham/tim-theo-nsx/'.$lsp->ma_loai.'/'.$nsx->ma_nsx)}}">
                                            <i class="icon-chevron-right"></i>{{$nsx->ma_nsx}}
                                        </a>
                                    </li>
                                <?php }}?>
                            </ul>
                        </li>
                        <?php
                            }
                        ?>
                    </ul>
                    <br/>
                </div>
                {{-- Phần đăng nhập --}}
                <div class="span10">
                        <hr class="soft"/>
                        <div class="row">
                            @if($errors->any())
                                @foreach($errors->all() as $er)
                                <div class="span9 alert alert-block alert-error fade in">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>Lỗi: </strong>{{$er}}
                                </div>
                                @endforeach
                            @endif
                            @if(session('success'))
                                <div class="span9 alert alert-block alert-success">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    {{session('success')}}
                                </div>
                            @endif
                            @if(session('fail'))
                                <div class="span9 alert alert-block alert-danger">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    {{session('fail')}}
                                </div>
                            @endif
                            <div class="span4">
                                <div class="well">
                                    <h3>Quên mật khẩu?</h3><br/>
                                    Điền email của bạn để lấy lại mật khẩu.<br/><br/><br/>
                                    <form action="{{url('khach-hang/quen-mat-khau')}}" method="post">
                                        @csrf
                                      <div class="control-group">
                                            <label class="control-label" for="inputEmail0">Email</label>
                                            <div class="controls">
                                              <input class="span3" name="email" type="text" id="inputEmail0" placeholder="Email">
                                            </div>
                                      </div>
                                      <div class="controls">
                                          <button type="submit" class="btn block">Gửi mail xác nhận</button>
                                      </div>
                                    </form>
                                </div>
                            </div>
                            <div class="span1"> &nbsp;
                            </div>
                            <div class="span4">
                                <div class="well">
                                    <h3>Đăng nhập ngay</h3>
                                    <form method="post" action="{{url('khach-hang/dang-nhap')}}">
                                        @csrf
                                        {{-- email --}}
                                      <div class="control-group">
                                            <label class="control-label" for="inputEmail1">Email</label>
                                            <div class="controls">
                                              <input class="span3" name="ctm_email" type="text" id="inputEmail1" placeholder="Email">
                                            </div>
                                      </div>
                                    {{-- password --}}
                                      <div class="control-group">
                                            <label class="control-label" for="inputPassword1">Password</label>
                                            <div class="controls">
                                              <input type="password" name="ctm_password" class="span3"  id="inputPassword1" placeholder="Password">
                                            </div>
                                      </div>
                                      {{-- lưu đăng nhập --}}
                                      <div class="control-group">
                                        <div class="controls">
                                          <span>
                                              <input type="checkbox" name="remember_me" style="margin-top: -3px;">
                                          </span>
                                          &nbsp;Lưu đăng nhập
                                        </div>
                                  </div>
                                      <div class="control-group">
                                            <div class="controls">
                                              <button type="submit" class="btn">Đăng nhập</button>
                                            </div>
                                      </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <hr class="soft"/>
                    </div>
            </div>
        </div>
    </div>
</div>

<script language="javascript">
    function assignPage(ma_loai)
    {
      window.location.assign(window.location.origin +'/san-pham/tim-theo-loai/'+ma_loai );
    }
  </script>
@endsection
