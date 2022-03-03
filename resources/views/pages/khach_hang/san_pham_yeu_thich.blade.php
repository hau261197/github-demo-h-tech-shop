@extends('Client_layout/master')
@section('title','Danh sách sản phẩm')
@section('content')

<div id="mainBody">
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
                        <a  href="{{url('khach-hang/thong-tin-gio-hang/')}}">
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
				
				<div class="thumbnail">
					<img src="{{URL::asset('resources/css')}}/themes/images/payment_methods.png" title="Bootshop Payment Methods" alt="Payments Methods">
					<div class="caption">
					<h5>Payment Methods</h5>
					</div>
				</div>
			</div>

            <div class="span9">
                Đang phát triển
            </div>

		</div>
	</div>
</div>

@endsection