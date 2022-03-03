@extends('layout/master')
@section('title')
Mã giảm giá
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
                    <h3 style="background-color: #e9a974; color:#9c0f26">&nbsp;<img src="{{URL::asset('resources/hinh/icon/icons8-sale-price-tag-24.png')}}" >&nbsp;Mã giảm giá</h3>
                    <table class="table">
                        <thead>
                            <tr style="background-color: #02acea">
                                <td>Loại mã</td>
                                <td>Giá trị</td>
                                <td>Ngày kết thúc</td>
                                <td>Trạng thái</td>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($ds_mgg as $mgg)
                            <tr>
                              <td>{{ $mgg->code }}</td>
                              <td>{{ number_format($mgg->gia_tri).' đ' }}</td>
                              <td>{{ $mgg->ket_thuc }}</td>
                              <td>
                                @if($mgg_exp[$mgg->code]=="Đã hết hạn")
                                    <b style="color:red">{{ $mgg_exp[$mgg->code]}}</b>
                                @else
                                    <b >{{ $mgg_exp[$mgg->code]}}</b>
                                @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>

                        </tfoot>
                    </table>
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
