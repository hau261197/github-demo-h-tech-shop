@extends('layout/master')
@section('title','Đăng ký')
@section('content')
<link rel="stylesheet" href="{{URL::asset('resources/css/fontend/customize_homepage.css')}}"/>
<div id="content">
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
                    {{-- 3 sản phẩm quảng cáo --}}
                    <div class="well well-small" style="background-color: rgba(210, 209, 221, 0.466)">
                        <h4 style="text-align: center; color:#aa1818; font:bolder;text-shadow: 2px 2px 5px red;">GIẢM GIÁ SỐC</h4>
                        @foreach ($sale_product as $sale)
                            <div class="thumbnail">
                                <a href="{{url('san-pham/chi-tiet/'.$sale->id)}}" class="a1">
                                    <i class="sale"></i>
                                    <img src="{{URL::asset('resources/hinh/hinh_san_pham/'.$sale->hinh_san_pham.'.jpg')}}" alt="Hình sản phẩm giảm giá"/>
                                    <div class="caption">
                                        <b class="text" style=" color: #02047c;">
                                        {{$sale->ten_san_pham}}
                                        </b>
                                        <b class="text" style="color: #cc0909; text-align:center;" >
                                            Giá: <?php echo number_format($sale->gia_goc - $sale->giam_gia)?> đ
                                        </b>
                                    </div>
                                </a>
                            </div>
                            <br/>
                        @endforeach
                        <a  href="{{url('san-pham/spggs')}}">
                            <div class="button-more">
                                <b> Xem thêm >></b>
                            </div>
                        </a>
                        <br>
                    </div>
                </div>
                {{-- Phần đăng ký --}}
                <div class="span10">
                    <h3> Đăng ký</h3>
                    <div class="well">
                        <form class="form-horizontal" method="post" action="{{url('khach-hang/dang-ky')}}" >
                            @csrf
                            <h4>Thông tin cá nhân</h4>
                            {{-- thông báo lỗi --}}
                            @if($errors->any())
                                @foreach($errors->all() as $er)
                                <div class="alert alert-block alert-error fade in">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>Lỗi: </strong>{{$er}}
                                </div>
                                @endforeach
                            @endif
                            {{-- giới tính --}}
                            <div class="control-group">
                                <label class="control-label">Giới tính <sup>*</sup></label>
                                <div class="controls">
                                    <select class="span1" name="gioi_tinh">
                                        <option value="nam">Nam</option>
                                        <option value="nu">Nữ</option>
                                        <option value="khac">Khác</option>
                                    </select>
                                </div>
                            </div>
                            {{-- Họ --}}
                            <div class="control-group">
                                <label class="control-label" for="inputFname1">Họ <sup>*</sup></label>
                                <div class="controls">
                                    <input type="text" id="inputFname1" class="span6" placeholder="Họ" name="ho" value="{{old('ho')}}">
                                </div>
                            </div>
                            {{-- tên --}}
                            <div class="control-group">
                                <label class="control-label" for="inputLnam">Tên <sup>*</sup></label>
                                <div class="controls">
                                    <input type="text" id="inputLnam" value="{{old('ten')}}"  class="span6"name="ten" placeholder="Tên">
                                </div>
                            </div>
                            {{-- Email --}}
                            <div class="control-group">
                                <label class="control-label" for="input_email">Email <sup>*</sup></label>
                                <div class="controls">
                                    <input type="text" id="input_email" class="span6" name="email" value="{{old('email')}}" placeholder="Email">
                                </div>
                            </div>
                            {{-- Password --}}
                            <div class="control-group">
                                <label class="control-label" for="inputPassword1">Password <sup>*</sup></label>
                                <div class="controls">
                                    <input type="password" class="span6" name="password"id="inputPassword1" placeholder="Password">
                                </div>
                            </div>
                            {{-- Re-Password --}}
                            <div class="control-group">
                                <label class="control-label" for="inputPassword1">Re-Password <sup>*</sup></label>
                                <div class="controls">
                                    <input type="password" class="span6" name="re_password"id="inputPassword1" placeholder="Password">
                                </div>
                            </div>
                            {{-- Ngày sinh --}}
                            <div class="control-group">
                                <label class="control-label">Ngày sinh <sup>*</sup></label>
                                <div class="controls">
                                    <input type="date" name="bday"  value="{{old('bday')}}">
                                </div>
                            </div>
                    {{-- PHẦN ĐỊA CHỈ --}}
                            <h4>Địa chỉ</h4>
                            <div class="control-group">
                                <label class="control-label" for="company">Công ty</label>
                                <div class="controls">
                                <input type="text" id="company" value="{{old('cong_ty')}}" class="span6"name="cong_ty" placeholder="Công ty"/>
                                </div>
                            </div>
                            {{-- số nhà tên đường --}}
                            <div class="control-group">
                                <label class="control-label" for="address">Số nhà, tên đường<sup>*</sup></label>
                                <div class="controls">
                                <input type="text" id="address1" value="{{old('address1')}}"  class="span6"name="address1" placeholder="Số nhà, tên đường"/>
                                </div>
                            </div>
                            {{-- Xã Phường --}}
                            <div class="control-group">
                                <label class="control-label" for="address2">Xã/Phường<sup>*</sup></label>
                                <div class="controls">
                                    <input type="text" id="address2" value="{{old('address2')}}" class="span6"name="address2" placeholder="Xã/Phường"/>
                                </div>
                            </div>
                            {{-- Quận Huyện --}}
                            <div class="control-group">
                                <label class="control-label" for="city">Quận/Huyện<sup>*</sup></label>
                                <div class="controls">
                                <input type="text" id="city"  class="span6"name="address3" placeholder="Quận/Huyện" value="{{old('address3')}}"/>
                                </div>
                            </div>
                            {{-- Tỉnh/Thành phố --}}
                            <div class="control-group">
                                <label class="control-label" for="state">Tỉnh/Thành phố<sup>*</sup></label>
                                <div class="controls">
                                    <input type="text" id="city" class="span6" name="address4" placeholder="Tỉnh/Thành phố" value="{{old('address4')}}"/>
                                </div>
                            </div>
                            {{-- Số điện thoại --}}
                            <div class="control-group">
                                <label class="control-label" class="span6" for="postcode">Số điện thoại<sup>*</sup></label>
                                <div class="controls">
                                    <input type="text" id="postcode" value="{{old('so_dien_thoai')}}" name="so_dien_thoai" placeholder="Số điện thoại"/>
                                </div>
                            </div>
                            {{-- Sở thích --}}
                            <div class="control-group">
                                <label class="control-label" for="aditionalInfo">Sở thích</label>
                                <div class="controls">
                                    <textarea name="so_thich" class="span6" id="aditionalInfo" cols="26" rows="3" placeholder="Hãy cho chúng tôi biết sở thích của bạn để cung cấp những dịch vụ tốt nhất cho bạn" value="{{old('so_thich')}}"></textarea>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                    {{-- <input type="hidden" name="email_create" value="1">
                                    <input type="hidden" name="is_new_customer" value="1"> --}}
                                    <input class="btn btn-large btn-success" type="submit" value="Đăng ký" />
                                </div>
                            </div>
                        </form>
                    </div>
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
