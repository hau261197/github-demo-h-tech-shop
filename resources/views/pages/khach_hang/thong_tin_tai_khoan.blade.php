@extends('layout/master')
@section('title')
Thông tin tài khoản
@endsection
@section('content')
<div id="mainBody" style="margin-top:80px;">
	<div class="container">
		<div class="row">
			<div id="sidebar" class="span3">
				<ul id="sideManu" class="nav nav-tabs nav-stacked">
					<li style="cursor: pointer;">
                        <a  href="{{url('khach-hang/thong-tin-tai-khoan/')}}">
                            <h5><img src="{{URL::asset('resources/hinh/icon/icons8-test-account-24.png')}}" >&nbsp;Thông tin tài khoản</h5>
                        </a>
					</li>
                    <li style="cursor: pointer;">
                        <a  href="{{url('khach-hang/gio-hang/')}}">
                            <h5><img src="{{URL::asset('resources/hinh/icon/icons8-fast-cart-24.png')}}" >&nbsp;Thông tin giỏ hàng</h5>
                        </a>
					</li>
                    <li style="cursor: pointer;">
                        <a  href="{{url('khach-hang/lich-su-mua-hang/')}}">
                            <h5><img src="{{URL::asset('resources/hinh/icon/icons8-time-machine-24.png')}}" >&nbsp;Lịch sử mua hàng</h5>
                        </a>
					</li>
                    <li style="cursor: pointer;">
                        <a  href="{{url('khach-hang/theo-doi-don-hang/')}}">
                            <h5><img src="{{URL::asset('resources/hinh/icon/icons8-activity-history-24.png')}}" >&nbsp;Theo dõi đơn hàng</h5>
                        </a>
					</li>
                    <li style="cursor: pointer;">
                        <a  href="{{url('khach-hang/san-pham-yeu-thich/')}}">
                            <h5><img src="{{URL::asset('resources/hinh/icon/icons8-love-24.png')}}" >&nbsp;Sản phẩm yêu thích</h5>
                        </a>
					</li>
                    <li style="cursor: pointer;">
                        <a  href="{{url('khach-hang/ma-giam-gia/')}}">
                            <h5><img src="{{URL::asset('resources/hinh/icon/icons8-sale-price-tag-24.png')}}" >&nbsp;Mã giảm giá</h5>
                        </a>
					</li>

				</ul>
				<br/>
			</div>
            <div class="span9">
                <h3 style="background-color: #e9a974; color:#9c0f26">&nbsp;<img src="{{URL::asset('resources/hinh/icon/icons8-test-account-24.png')}}" >&nbsp;Thông tin tài khoản</h3>
                <div class="well">
                    <form class="form-horizontal" method="post" action="{{url('khach-hang/thong-tin-tai-khoan')}}" >
                        @csrf
                        <h4>Thông tin cá nhân</h4>
                        {{-- thông báo lỗi --}}
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
                                    <option value="nam" <?php echo Auth::user()->gioi_tinh=='nam'?"selected":"" ?>>Nam</option>
                                    <option value="nu" <?php echo Auth::user()->gioi_tinh=='nu'?"selected":"" ?>>Nữ</option>
                                    <option value="khac" <?php echo Auth::user()->gioi_tinh=='khac'?"selected":"" ?>>Khác</option>
                                </select>
                            </div>
                        </div>
                        {{-- Họ --}}
                        <div class="control-group">
                            <label class="control-label" for="inputFname1">Họ <sup>*</sup></label>
                            <div class="controls">
                                <input type="text" id="inputFname1" class="span6" placeholder="Họ" name="ho" value="{{Auth::user()->first_name}}">
                            </div>
                        </div>
                        {{-- tên --}}
                        <div class="control-group">
                            <label class="control-label" for="inputLnam">Tên <sup>*</sup></label>
                            <div class="controls">
                                <input type="text" id="inputLnam" value="{{Auth::user()->last_name}}"  class="span6"name="ten" placeholder="Tên">
                            </div>
                        </div>
                        {{-- Email --}}
                        <div class="control-group">
                            <label class="control-label" for="input_email">Email <sup>*</sup></label>
                            <div class="controls">
                                <input type="text" id="input_email" readonly class="span6" name="email" value="{{Auth::user()->email}}" placeholder="Email">
                            </div>
                        </div>
                        {{-- Password --}}
                        <div class="control-group">
                            <label class="control-label" for="inputPassword1">Password <sup>*</sup></label>
                            <div class="controls">
                                <input type="password" class="span6" id="inputPassword1" value="**********" placeholder="Password">
                            </div>
                        </div>
                        {{-- Re-Password --}}
                        <div class="control-group">
                            <label class="control-label" for="inputPassword1"></label>
                            <div class="controls">
                                <a href="{{url('khach-hang/doi-mk')}}" class="btn">
                                    Đổi mật khẩu
                                </a>
                            </div>
                        </div>
                        {{-- Ngày sinh --}}
                        <div class="control-group">
                            <label class="control-label">Ngày sinh <sup>*</sup></label>
                            <div class="controls">
                                <input type="date" name="bday"  value="{{Auth::user()->ngay_sinh}}">
                            </div>
                        </div>
                {{-- PHẦN ĐỊA CHỈ --}}
                        <h4>Địa chỉ</h4>
                        <div class="control-group">
                            <label class="control-label" for="company">Công ty</label>
                            <div class="controls">
                            <input type="text" id="company" value="{{Auth::user()->cong_ty}}" class="span6"name="cong_ty" placeholder="Công ty"/>
                            </div>
                        </div>
                        {{-- số nhà tên đường --}}
                        <div class="control-group">
                            <label class="control-label" for="address">Số nhà, tên đường<sup>*</sup></label>
                            <div class="controls">
                            <input type="text" id="address1" value="{{Auth::user()->address1}}"  class="span6"name="address1" placeholder="Số nhà, tên đường"/>
                            </div>
                        </div>
                        {{-- Xã Phường --}}
                        <div class="control-group">
                            <label class="control-label" for="address2">Xã/Phường<sup>*</sup></label>
                            <div class="controls">
                                <input type="text" id="address2" value="{{Auth::user()->address2}}" class="span6"name="address2" placeholder="Xã/Phường"/>
                            </div>
                        </div>
                        {{-- Quận Huyện --}}
                        <div class="control-group">
                            <label class="control-label" for="city">Quận/Huyện<sup>*</sup></label>
                            <div class="controls">
                            <input type="text" id="city"  class="span6"name="address3" placeholder="Quận/Huyện" value="{{Auth::user()->address3}}"/>
                            </div>
                        </div>
                        {{-- Tỉnh/Thành phố --}}
                        <div class="control-group">
                            <label class="control-label" for="state">Tỉnh/Thành phố<sup>*</sup></label>
                            <div class="controls">
                                <input type="text" id="city" class="span6" name="address4" placeholder="Tỉnh/Thành phố" value="{{Auth::user()->address4}}"/>
                            </div>
                        </div>
                        {{-- Số điện thoại --}}
                        <div class="control-group">
                            <label class="control-label" class="span6" for="postcode">Số điện thoại<sup>*</sup></label>
                            <div class="controls">
                                <input type="text" id="postcode" value="{{Auth::user()->phone}}" name="so_dien_thoai" placeholder="Số điện thoại"/>
                            </div>
                        </div>
                        {{-- Sở thích --}}
                        <div class="control-group">
                            <label class="control-label" for="aditionalInfo">Sở thích</label>
                            <div class="controls">
                                <textarea name="so_thich" class="span6" id="aditionalInfo" cols="26" rows="3" placeholder="Hãy cho chúng tôi biết sở thích của bạn để cung cấp những dịch vụ tốt nhất cho bạn" value="{{Auth::user()->so_thich}}"></textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                {{-- <input type="hidden" name="email_create" value="1">
                                <input type="hidden" name="is_new_customer" value="1"> --}}
                                <input class="btn btn-large btn-success" type="submit" value="Cập nhật" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            </div>

		</div>
	</div>
</div>

@endsection
