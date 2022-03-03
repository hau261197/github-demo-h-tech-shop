@extends('layout/master')
@section('title')
Theo dõi đơn hàng
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
                {{-- thông báo lỗi --}}
                <div class="row">
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
                </div>
                <div class="well">
                    <div >
                        <h3 style="background-color: #e9a974; color:#9c0f26">&nbsp;<img src="{{URL::asset('resources/hinh/icon/icons8-time-machine-24.png')}}" >&nbsp;Lịch sử mua hàng</h3>
                        @if(!count($DonDatHang))
                            <h4 style="text-align: center">Chưa có đơn hàng,<a class="one" style="text-decoration: none;" href="{{url('/')}}"> &nbsp;Tiếp tục mua hàng</a>
                        </h4>
                        @else
                            <table class="table">
                                <thead>
                                <tr style="background-color: #02acea">
                                    <td>#</td>
                                    <td>Ngày</td>
                                    <td>Mã hóa đơn</td>
                                    <td>Tên SP</td>
                                    <td>Số lượng</td>
                                    <td>Màu</td>
                                    <td>Đơn giá</td>
                                    <td>Giảm giá</td>
                                    <td>Thành tiền</td>
                                    <td>Trạng thái</td>
                                    <td></td>
                                </tr>
                                </thead>

                                <tbody>
                                    <?php $i=1?>
                                    @foreach ($DonDatHang as $dh)
                                    <tr>
                                    <th scope="row"><?php echo $i; ?></th>
                                    <td>{{ $dh->ngay_hoa_don }}</td>
                                    <td>{{ $dh->id }}</td>
                                    <td><img src="{{ URL::asset('resources/hinh/hinh_san_pham/'.$dh->hinh_san_pham.'.jpg') }}" class="img-thumbnail" style="width: 50px; height:50px;">{{ $dh->ten_san_pham }}</td>
                                    <td>{{ $dh->so_luong }}</td>
                                    <td>{{ $dh->mau_san_pham }}</td>
                                    <td>{{ number_format($dh->don_gia) }}</td>
                                    <td>
                                        {{number_format($dh->giam_gia).'đ'}}
                                        </td>
                                    <td>
                                        {{number_format($dh->so_luong * $dh->don_gia - $dh->giam_gia).'đ'}}
                                    </td>
                                    <td>{{$dh->tinh_trang}}</td>
                                    <td style="text-align:center;">
                                        @if($dh->tinh_trang=='Tiếp nhận')
                                        <a type="button" style="width:22px;max-width:22px;" class="btn" href="{{ url('khach-hang/huy-don-hang/'.$dh->id) }}"><img src="{{URL::asset('resources/css/fontend/themes/images/icons8-recycle-bin-30.png')}}" ></a>
                                        @endif
                                    </td>
                                    </tr>
                                    <?php $i++;?>
                                    @endforeach
                                </tbody>
                                <tfoot>

                                </tfoot>
                            </table>
                        @endif
                    </div>
                </div>
            </div>
            </div>

		</div>
	</div>
</div>
<style>
    table, th, td {
        border: 1px solid rgba(9, 3, 63, 0.753);
        border-collapse: collapse;
        margin: 0 auto;
    }
}
</style>

@endsection
