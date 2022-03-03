@extends('layout/master')
@section('title')
Giỏ hàng
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
                        @if(Cart::count()==0)
                            <h3 style="text-align: center"> &nbsp;<img src="{{URL::asset('resources/hinh/icon/icons8-fast-cart-24.png')}}" >&nbsp;Giỏ hàng rỗng,
                                <a class="one" style="text-decoration: none;" href="{{url('/')}}">Tiếp tục mua hàng</a>
                            </h3>
                        @else
                        <h3 style="background-color: #e9a974; color:#9c0f26">&nbsp;<img src="{{URL::asset('resources/hinh/icon/icons8-fast-cart-24.png')}}" >&nbsp;Giỏ hàng của bạn</h3>
                        <table class="table">
                            <tr>
                                <td><b>Khách hàng</b></td>
                                <td>{{ Auth::user()->first_name.' '.Auth::user()->last_name }}</td>
                                <td><b>Địa chỉ</b></td>
                                <td colspan="5">{{ Auth::user()->address1.', '.Auth::user()->address2.', '.Auth::user()->address3.', '.Auth::user()->address4.', ' }}</td>
                            </tr>
                            <tr>
                                <td><b>Điện thoại</b></td>
                                <td>{{ Auth::user()->phone }}</td>
                                <td><b>Email</b></td>
                                <td>{{ Auth::user()->email }}</td>
                            </tr>
                    </table>
                        <table class="table table-bordered">
                            <thead class="">
                                <tr>
                                <th scope="col"style="text-align:center;">Hình</th>
                                <th scope="col"style="text-align:center;">Sản phẩm</th>
                                <th scope="col"style="text-align:center;">Màu</th>
                                <th scope="col"style="text-align:center;">Số lượng</th>
                                <th scope="col"style="text-align:center;">Giá</th>
                                <th scope="col"style="text-align:center;">Tiền</th>
                                <th scope="col" style="text-align:center;">Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $tong_tien=0; ?>
                                @foreach(Cart::content() as $row)
                                <form class="form-inline" method="GET" action="{{ url('khach-hang/cap-nhat-gio-hang') }}">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <input type="hidden" value="{{$row->rowId}}" name="th_row_id" id="th_row_id">
                                <tr >
                                    <td style="text-align:center;">
                                        <a href="{{ URL::asset('resources/hinh/hinh_san_pham/'.$row->hinh.'.jpg') }}">
                                            <img src="{{ URL::asset('resources/hinh/hinh_san_pham/'.$row->options->hinh.'.jpg') }}" class="img-thumbnail" style="width: 50px; height:50px;">
                                        </a>
                                    </td>
                                    <td style="max-width: 270px;">{{ $row->name }}</td>
                                    <td style="text-align:center;">
                                        <b style="color: {{$row->options->mau}}">{{$row->options->mau}}</b>
                                    </td>
                                    <td style="text-align:center;">
                                        <select name="Th_soluong" class="form-control" style="width: 50px; text-align: center;">
                                        @for ($i = 1; $i < 10; $i++)
                                            @if ($i == ($row->qty*1))
                                                <option value="{{ $i }}" selected="selected">{{ $i }}</option>
                                            @else
                                                <option value="{{ $i }}">{{ $i }}</option>
                                            @endif
                                        @endfor
                                    </select>
                                    </td>
                                    <td style="text-align:center;"><b style="color: crimson">{{ number_format($row->price) }} đ </b></td>
                                    <td style="text-align:center;"><b style="color: crimson">{{ number_format($row->qty*$row->price) }} đ </b></td>
                                    <td style="text-align:center;">
                                        <a type="button" style="width:22px;max-width:22px;" class="btn" href="{{ url('khach-hang/xoa-mat-hang/'.$row->rowId) }}"><img src="{{URL::asset('resources/css/fontend/themes/images/icons8-recycle-bin-30.png')}}" ></a>
                                    </td>
                                </tr>
                                <?php $tong_tien=$tong_tien + $row->qty*$row->price; ?>
                                </form>
                                @endforeach
                                   <tr>
                                    <td colspan="6" style="text-align:right"><b>Tiền sản phẩm:</b>	</td>
                                    <td><b><?php echo number_format($tong_tien*0.9).'đ';?></b></td>
                                  </tr>
                                   <tr>
                                    <td colspan="6" style="text-align:right"><b>Thuế (VAT):</b>	</td>
                                    <td><b><?php echo number_format($tong_tien*0.1).'đ';?></b></td>
                                  </tr>
                                  <tr>
                                    <form class="form-inline" method="post" action="{{ url('khach-hang/check-mgg') }}">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <input type="hidden" value="{{$row->rowId}}" name="th_row_id" id="th_row_id">
                                        <td colspan="3" style="text-align:right"><b>Mã giảm giá:</b></td>
                                        <td colspan="3" style="text-align:right"><input type="text submit" class="form-control" name="th_ma_giam_gia" value="<?php if(isset($mgg_code)){
                                            echo $mgg_code->code;
                                            }?>"/><br><span style="color: red">(*Press Enter to submit)</span></td>
                                        <td><b><?php if(isset($mgg_code)){
                                            echo number_format($mgg_code->gia_tri).'đ';;
                                            }else echo '0đ';?></b>
                                        </td>
                                    </form>
                                  </tr>
                                   <tr>
                                    <td colspan="6" style="text-align:right; font-size:130%;"><strong>Tổng tiền:</strong></td>
                                    <td class="label label-important" style="display:block"> <strong style=" font-size: 130%;"><?php if(isset($mgg_code)){
                                        echo number_format($tong_tien-$mgg_code->gia_tri).'đ';
                                        }else echo number_format($tong_tien).'đ';?> </strong></td>
                                  </tr>
                            </tbody>
                            </table>

                            <form class="form-inline" method="GET" action="{{url('khach-hang/tien-hanh-dat-hang')}}">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                @if(isset($mgg_code->gia_tri))
                                    <input type="hidden" name="th_giam_gia" value="<?php echo $mgg_code->gia_tri?>" >
                                    <input type="hidden" name="th_code" value="<?php echo $mgg_code->code?>" >
                                @endif

                            <input type="submit" class="btn btn-primary" value="Đặt hàng">
                            <a href="{{url('khach-hang/xoa-gio-hang')}}" class="btn btn-danger btn-sm">Xóa giỏ hàng</a>
                            </form>
                            <input type="hidden" class="form-control" name="th_tong_tien" value="<?php echo $tong_tien?>" >
                        @endif
                    </div>
                </div>
            </div>
            </div>

		</div>
	</div>
</div>

@endsection
