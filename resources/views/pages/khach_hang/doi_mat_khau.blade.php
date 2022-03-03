@extends('layout/master')
@section('title','Đăng nhập')
@section('content')
<link rel="stylesheet" href="{{URL::asset('resources/css/fontend/customize_homepage.css')}}"/>
<div id="content" style="margin-top:75px;">
    <div id="mainBody">
        <div class="container">
            <div class="row">
                {{-- Phần đăng nhập --}}
                <div class="span12">
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
                            <div class="span3"></div>
                            <div class="span6">
                                <div class="well">
                                    <h3>Mật khẩu mới</h3>
                                    <form method="post" action="{{url('khach-hang/doi-mat-khau')}}">
                                        @csrf
                                        {{-- email --}}
                                      <div class="control-group">
                                            <label class="control-label" for="inputEmail1">Email</label>
                                            <div class="controls">
                                              <input class="span3" name="ctm_email" type="text" id="inputEmail1" value="{{$user->email}} " readonly placeholder="Email">
                                            </div>
                                      </div>
                                    {{-- password --}}
                                      <div class="control-group">
                                            <label class="control-label" for="inputPassword1">Password</label>
                                            <div class="controls">
                                              <input type="password" name="ctm_password" class="span3"  id="inputPassword1" placeholder="Password">
                                            </div>
                                      </div>
                                      <div class="control-group">
                                            <label class="control-label" for="inputPassword1">Re-Password</label>
                                            <div class="controls">
                                            <input type="password" name="ctm_re_password" class="span3"  id="inputPassword1" placeholder="Password">
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
                                              <button type="submit" class="btn">Xác nhận</button>
                                            </div>
                                      </div>
                                    </form>
                                </div>
                            </div>
                            <div class="span3"></div>
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
