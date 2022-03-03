@extends('pages.admin/layout/master')
@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
}

.pagination a.active {
  background-color: dodgerblue;
  color: white;
}

.pagination a:hover:not(.active) {background-color: #ddd;}
</style>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header "><b>Quản lý đơn hàng</b></h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <div class="row">
            @if(count($errors)>0)
                @foreach ($errors->all() as $er)
                <div class="col-lg-12">
                    <div class="alert alert-danger" role="alert">
                        {{$er}}
                    </div>
                </div>
                @endforeach
            @endif
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                {{-- Hiển thị thông báo lỗi --}}
                @if(count($errors)>0)
                    @foreach ($errors->all() as $er)
                    <div class="alert alert-danger col-lg-12" role="alert">
                        {{$er}}
                    </div>
                    @endforeach
                @endif
                @if(session('success'))
                        <div class="alert alert-block alert-success">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            {{session('success')}}
                        </div>
                    @endif
                    @if(session('fail'))
                        <div class="alert alert-block alert-danger">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            {{session('fail')}}
                        </div>
                    @endif
                    {{--  --}}
                <form enctype="multipart/form-data" method="GET" action="{{url('admin/khach-hang/cap-nhat-don-hang/'.$dh->id)}}">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="id_sp" value="{{$dh->ma_san_pham}}">
                    <input type="hidden" name="tinh_trang_old" value="{{$dh->tinh_trang}}">
                    <table class="table">
                        <tr>
                            <td><b>Khách hàng:</b></td>
                            <td>{{ $user->first_name.' '.$user->last_name }}</td>
                        </tr>
                        <tr>
                            <td><b>Mã khách hàng:</b></td>
                            <td>{{ $user->id }}</td>
                        </tr>
                        <tr>
                            <td><b>Điện thoại:</b></td>
                            <td>{{ $user->phone }}</td>
                        </tr>
                        <tr>
                            <td><b>Email:</b></td>
                            <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <td><b>Địa chỉ:</b></td>
                            <td colspan="5">
                                Số: {{ $user->address1 }},
                                Xã/Phường: {{ $user->address2 }},
                                Quận/huyện: {{ $user->address3 }},
                                Tỉnh/TP: {{ $user->address4 }}.
                            </td>
                        </tr>
                </table>
                <table class="table table-striped table-bordered table-hover" >
                    <thead>
                    <tr style="background-color: #02acea">
                        <th>Mã ĐH</th>
                        <th>Ngày đặt</th>
                        <th>Mã SP</th>
                        <th>Sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Màu</th>
                        <th>Đơn giá</th>
                        <th>Giảm giá</th>
                        <th>Thành tiền</th>
                        <th>Trạng thái</th>
                    </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <th scope="row">{{$dh->id}}</th>
                            <td>{{ $dh->ngay_hoa_don }}</td>
                            <td>{{ $dh->ma_san_pham }}</td>
                            <td>
                                <img src="{{ URL::asset('resources/hinh/hinh_san_pham/'.$dh->hinh_san_pham.'.jpg') }}" class="img-thumbnail" style="width: 50px; height:50px;">&nbsp;{{ $dh->ten_san_pham }}
                            </td>
                            <td>{{ $dh->so_luong }}</td>
                            <td>{{ $dh->mau_san_pham }}</td>
                            <td>{{ number_format($dh->don_gia) }}</td>
                            <td><?php if(isset($dh->giam_gia)){
                                echo number_format($dh->giam_gia).'đ';
                            } else  echo '0đ';
                             ?></td>
                            <td><?php if(isset($dh->giam_gia)){
                                echo number_format($dh->so_luong *$dh->don_gia-$dh->giam_gia).'đ';
                            } else  echo number_format($dh->so_luong *$dh->don_gia).'đ';
                             ?></td>
                            <td><select type="text" id="tinh_trang" name="tinh_trang" style="width: 150px; text-align: center;" value="{{$dh->tinh_trang}}">
                                <option <?php echo $dh->tinh_trang=="Tiếp nhận"?'selected="selected"':"" ?> value="Tiếp nhận">Tiếp nhận</option>
                                <option <?php echo $dh->tinh_trang=="Đang vận chuyển"?'selected="selected"':"" ?> value="Đang vận chuyển">Đang vận chuyển</option>
                                <option <?php echo $dh->tinh_trang=="Hoàn tất"?'selected="selected"':"" ?> value="Hoàn tất">Hoàn tất</option>
                                <option <?php echo $dh->tinh_trang=="Hủy"?'selected="selected"':"" ?> value="Hủy">Hủy</option>
                            </select></td>
                        </tr>
                    </tbody>
                    <tfoot>

                    </tfoot>
                </table>
                <button type="submit" class="btn btn-primary">Cập nhật</button>
                </form>

            </div>
            <!-- /.col-lg-8 -->
            <!-- /.col-lg-4 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<style>
	a.one:visited {color:#323233;}
	a.one:hover {color:#0000ff;}
	</style>
@endsection
