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
tr{
    cursor: pointer;
}
.pagination a:hover:not(.active) {background-color: #ddd;}
</style>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header "><b>Quản lý mã giảm giá</b></h2>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <div class="row">
            @if(count($errors)>0)
                @foreach ($errors->all() as $er)
                <div class="alert alert-danger col-lg-12" role="alert">
                    {{$er}}
                </div>
                @endforeach
            @endif
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
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
                    <table class="table">
                        <form enctype="multipart/form-data" method="GET" action="{{url('admin/khach-hang/tim-kiem-ma-giam-gia')}}">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <tr>
                                    <td><input type="text"  class="form-control" name="loai_mgg" placeholder="Mã..."></td>

                                    <td><input type="text"  class="form-control" name="gia_tri_mgg" placeholder="Giá trị..."></td>

                                    <td><input type="submit"  class="form-control btn btn-primary btn-sm"  value="Tìm kiếm"></td>

                                    <td><a type="button" href="{{url('admin/khach-hang/them-ma-giam-gia')}}" class="form-control btn btn-primary btn-sm">Thêm mã</a></td>

                            </tr>
                        </form>
                    </table>
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr style="background-color: #02acea">
                                <td>STT</td>
                                <td>Code</td>
                                <td>Đối tượng</td>
                                <td>Giá trị</td>
                                <td>Ngày bắt đầu</td>
                                <td>Ngày kết thúc</td>
                                <td>Trạng thái</td>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($ds_mgg as $mgg)
                                <tr onclick="window.location='<?php echo url('admin/khach-hang/chi-tiet-ma-giam-gia/'.$mgg->code)?>'">
                                    <th scope="row">{{$mgg->id}}</th>
                                    <td>{{ $mgg->code }}</td>
                                    <td>{{ $mgg->khach_hang }}</td>
                                    <td>{{ number_format($mgg->gia_tri).' đ'}}</td>
                                    <td>
                                        {{ $mgg->ngay_bat_dau}}
                                    </td>
                                    <td>{{ $mgg->ket_thuc }}</td>
                                    <td>
                                        @if(strtotime($mgg->ket_thuc)<strtotime(date('Y-m-d'))||!$mgg->trang_thai)
                                            <b style="color: red">Expire</b>
                                        @else
                                            <b style="color: green">Active</b>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>

                        </tfoot>
                    </table>
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
