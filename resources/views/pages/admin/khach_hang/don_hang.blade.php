@extends('pages/admin/layout/master')
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
    .pagination a:hover:not(.active) {
        background-color: #ddd;
    }
    tr:hover{
        cursor: pointer;
    }
</style>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Quản lý đơn hàng</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
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
                        <div class="table-responsive">
                            {{-- <table class="table table-striped table-bordered table-hover" >
                                <tr >
                                        <a href="{{url('admin/loai-san-pham/them-loai-san-pham')}}" ><button type="button" class="btn btn-outline btn-success">Thêm loại mới</button></a>
                                </tr>
                            </table> --}}
                            <table class="table">
                                <form enctype="multipart/form-data" method="GET" action="{{url('admin/khach-hang/tim-kiem-don-hang')}}">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <tr>
                                        <td>
                                            <input type="text"  class="form-control" name="th_ma_dh" placeholder="Mã đơn hàng...">
                                        </td>
                                        <td>
                                            <input type="text"  class="form-control" name="th_ma_kh" placeholder="Mã khách hàng..." >
                                        </td>
                                        <td>
                                            <input type="text"  class="form-control" name="th_id_sp"  placeholder="Mã sản phẩm...">
                                        </td>
                                        <input type="hidden"  class="form-control" name="trang_thai" value="{{$trang_thai}}">
                                        <td>
                                            <input type="submit"  class="form-control btn btn-primary btn-sm"  value="Tìm kiếm">
                                        </td>

                                    </tr>
                                </form>
                            </table>
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th><b>Mã ĐH</b></th>
                                        <th><b>Mã KH</b></th>
                                        <th><b>Sản phẩm</b></th>
                                        <th><b>Ngày đặt hàng</b></th>
                                        <th><b>Đơn giá</b></th>
                                        <th><b>Số lượng</b></th>
                                        <th><b>Giảm giá</b></th>
                                        <th><b>Tổng tiền</b></th>
                                        <th><b>Trạng thái</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ds_dh as $hd)
                                        <tr onclick="window.location='<?php echo url('admin/khach-hang/chi-tiet-don-hang/'.$hd->id)?>'">
                                            <th scope="row">{{$hd->id}}</th>
                                            <td>{{ $hd->id_ma_kh }}</td>
                                            <td>
                                                @if(substr($hd->hinh_san_pham,-4,4)=='.jpg')
                                                    <span>
                                                        <img src="{{ URL::asset('resources/hinh/hinh_san_pham/'.$hd->hinh_san_pham)}}" class="img-thumbnail" style="width: 50px; height:50px;">&nbsp;
                                                    </span>
                                                    <span>
                                                        <div>{{$hd->ten_san_pham}}</div>
                                                    </span>
                                                @else
                                                    <span>
                                                        <img src="{{ URL::asset('resources/hinh/hinh_san_pham/'.$hd->hinh_san_pham.'.jpg')}}" class="img-thumbnail" style="width: 50px; height:50px;">&nbsp;
                                                    </span>
                                                    <span>
                                                        <div>{{$hd->ten_san_pham}}</div>
                                                    </span>
                                                @endif
                                            </td>
                                            <td>{{ $hd->ngay_hoa_don }}</td>
                                            <td>{{ number_format($hd->don_gia).'đ'}}</td>
                                            <td>{{ $hd->so_luong }}</td>
                                            <td><?php if(isset($hd->giam_gia)){
                                                echo number_format($hd->giam_gia).'đ';
                                            } else  echo '0đ';
                                            ?></td>
                                            <td><?php if(isset($hd->giam_gia)){
                                                echo number_format($hd->so_luong *$hd->don_gia-$hd->giam_gia).'đ';
                                            } else  echo number_format($hd->so_luong *$hd->don_gia).'đ';
                                            ?></td>
                                            <td>{{$hd->tinh_trang}}</td></a>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col-md-5"></div>
                                <?php if($ds_dh->count()>0)	{ ?>
                                  <div class="pagination" >
                                    <li style="align-content: center;">
                                      <a class="<?php echo $ds_dh->currentPage()==1?"disabled":"" ?>" href="{{$ds_dh->url(1)}}">&laquo;</a>
                                      <?php
                                      $start = $ds_dh->currentPage()-1;
                                      $end =$ds_dh->currentPage()+2;
                                      if($ds_dh->lastPage()<=$end) $end = $ds_dh->lastPage();
                                      if(1>=$start) $start = 1;
                                        for($i=$start;$i<=$end;$i++){ ?>
                                         <a class="<?php echo $ds_dh->currentPage()==$i?"disabled":"" ?>" href="{{$ds_dh->url($i)}}">{{$i}}</a>
                                    <?php
                                        }
                                      ?>
                                        <a class="<?php echo $ds_dh->currentPage()==$ds_dh->lastPage()?"disabled":"" ?>" href="{{$ds_dh->url($ds_dh->lastPage())}}">&raquo;</a>
                                    </li>
                                </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel-body -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
<style>
	a.one:visited {color:#323233;}
	a.one:hover {color:#0000ff;}
	</style>
@endsection
