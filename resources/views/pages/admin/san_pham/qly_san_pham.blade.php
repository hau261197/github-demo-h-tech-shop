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
    tr:hover{
        cursor: pointer;
    }
</style>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Quản lý sản phẩm</h1>
            </div>
        </div>
        {{-- hiển thị thông báo lỗi --}}
        <div class="row">
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
            {{-- Danh mục tìm kiếm --}}
            <table class="table">
                <form enctype="multipart/form-data" method="get" action="{{url('admin/san-pham/danh-sach-tim-kiem')}}">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <tr>
                            <td>
                                <input type="text"  class="form-control" name="th_id_sp" placeholder="Mã sản phẩm..." >
                            </td>
                            <td>
                                <select name="th_lsp" class="form-control" style="width: 150px; text-align: center;">
                                    <option value="-1">--Loại sản phẩm--</option>
                                    @foreach ($dslsp as $lsp)
                                        <option value="{{$lsp->ma_loai}}">{{$lsp->ten_loai}}</option>
                                    @endforeach
                                </select>
                            </td>

                            <td>
                                <select name="th_nsx" class="form-control" style="width: 150px; text-align: center;">
                                    <option value="-1">--Thương hiệu--</option>
                                    @foreach ($ds_nsx as $nsx)
                                        <option value="{{$nsx->ten_nha_san_xuat}}">
                                            {{$nsx->ten_nha_san_xuat}}
                                        </option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <button type="submit" class="btn btn-outline btn-primary">
                                    Tìm kiếm
                                </button>
                            </td>
                            <td>
                                <a href="{{url('admin/san-pham/them-san-pham')}}" >
                                    <button type="button" class="btn btn-outline btn-success">
                                        Thêm mới
                                    </button>
                                </a>
                            </td>
                    </tr>
                </form>
            </table>
        </div>
        {{-- --------- --}}
        <div class="row">
            <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Mã</th>
                                    <th>Hình</th>
                                    <th>Tên</th>
                                    <th>Loại</th>
                                    <th>Giá</th>
                                    <th>Giảm giá</th>
                                    <th>Tồn kho</th>
                                    <th>Đã bán</th>
                                    <th>Trạng thái</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($dssp)==0)
                                    {{'Không tìm thấy sản phẩm phù hợp!'}}
                                @endif
                                @foreach ($dssp as $sp)
                                <tr onclick="window.location='<?php echo url('admin/san-pham/chi-tiet/'.$sp->ma_san_pham)?>'" >
                                    <td scope="row">{{$sp->ma_san_pham}}</td>
                                    <td>
                                        @if(substr($sp->hinh_san_pham,-4,4)=='.jpg')
                                            <img src="{{ URL::asset('resources/hinh/hinh_san_pham/'.$sp->hinh_san_pham) }}" class="img-thumbnail" style="width: 50px; height:50px;">
                                        @else
                                            <img src="{{ URL::asset('resources/hinh/hinh_san_pham/'.$sp->hinh_san_pham.'.jpg') }}" class="img-thumbnail" style="width: 50px; height:50px;">
                                        @endif
                                    </td>
                                    <td>{{ $sp->ten_san_pham }}</td>
                                    <td>{{ $sp->ma_loai }}</td>
                                    <td>{{ number_format($sp->gia_goc).'đ'}}</td>
                                    <td>{{ number_format($sp->giam_gia).'đ' }}</td>
                                    <td>{{ $sp->store_sl_ton }}</td>
                                    <td>{{ $sp->store_sl_da_ban }}</td>
                                    <td>{{$sp->trang_thai?'Active':'X'}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                            <?php if($dssp->count()>0)	{ ?>
                        <div class="pagination" >
                            <li style="align-content: center;">
                            <a class="<?php echo $dssp->currentPage()==1?"disabled":"" ?>" href="{{$dssp->url(1)}}">&laquo;</a>
                            <?php
                            $start = $dssp->currentPage()-1;
                            $end =$dssp->currentPage()+2;
                            if($dssp->lastPage()<=$end) $end = $dssp->lastPage();
                            if(1>=$start) $start = 1;
                                for($i=$start;$i<=$end;$i++){ ?>
                                <a class="<?php echo $dssp->currentPage()==$i?"disabled":"" ?>" href="{{$dssp->url($i)}}">{{$i}}</a>
                            <?php
                                }
                            ?>
                                <a class="<?php echo $dssp->currentPage()==$dssp->lastPage()?"disabled":"" ?>" href="{{$dssp->url($dssp->lastPage())}}">&raquo;</a>
                            </li>
                        </div>
                        <?php }?>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
