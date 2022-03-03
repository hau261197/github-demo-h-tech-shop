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
                <h1 class="page-header">Quản lý loại sản phẩm</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
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
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" >
                                <tr >
                                        <a href="{{url('admin/loai-san-pham/them-loai-san-pham')}}" ><button type="button" class="btn btn-outline btn-success">Thêm loại mới</button></a>
                                </tr>
                            </table>
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th><b>#</b></th>
                                        <th><b>Mã loại</b></th>
                                        <th><b>Hình</b></th>
                                        <th><b>Tên loại</b></th>
                                        <th><b>Ghi chú</b></th>
                                        <th><b>Số lượng SP</b></th>
                                        <th><b>Trạng thái</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1 ?>
                                    @foreach ($dslsp as $lsp)
                                    <tr onclick="window.location='<?php echo url('admin/loai-san-pham/chi-tiet-loai-san-pham/'.$lsp->ma_loai)?>'">
                                        <th scope="row">{{$i++}}</th>
                                        <td>{{ $lsp->ma_loai }}</td>
                                        <td>
                                            <img src="{{ URL::asset('resources/hinh/icon/'.$lsp->icon) }}" class="img-thumbnail" style="width: 50px; height:50px;">
                                        </td>
                                        <td style="text-align: left;">
                                            {{ $lsp->ten_loai }}
                                        </td>
                                        <td style="text-align: left;">{{ $lsp->ghi_chu }}</td>
                                        <td>{{$lsp->slsp}}</td>
                                        <td>{{$lsp->trang_thai?'Active':'X'}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col-md-5"></div>
                                <?php if($dslsp->count()>0)	{ ?>
                                  <div class="pagination" >
                                    <li style="align-content: center;">
                                      <a class="<?php echo $dslsp->currentPage()==1?"disabled":"" ?>" href="{{$dslsp->url(1)}}">&laquo;</a>
                                      <?php
                                      $start = $dslsp->currentPage()-1;
                                      $end =$dslsp->currentPage()+2;
                                      if($dslsp->lastPage()<=$end) $end = $dslsp->lastPage();
                                      if(1>=$start) $start = 1;
                                        for($i=$start;$i<=$end;$i++){ ?>
                                         <a class="<?php echo $dslsp->currentPage()==$i?"disabled":"" ?>" href="{{$dslsp->url($i)}}">{{$i}}</a>
                                    <?php
                                        }
                                      ?>
                                        <a class="<?php echo $dslsp->currentPage()==$dslsp->lastPage()?"disabled":"" ?>" href="{{$dslsp->url($dslsp->lastPage())}}">&raquo;</a>
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
