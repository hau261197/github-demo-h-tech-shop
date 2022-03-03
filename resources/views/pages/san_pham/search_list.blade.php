@extends('layout/master')
@section('title')
Danh sách sản phẩm
@endsection
@section('content')
<div id="content" style="margin-top:80px;">
    <div id="mainBody">
        <div class="container">
            <div class="row">
                <!-- Danh sách loại sản phẩm -->
                <div id="sidebar" class="span2">
                    <ul id="sideManu" class="nav nav-tabs nav-stacked">
                        <?php
                            foreach($loai_san_pham as $lsp)
                            {
                        ?>
                        <li class="subMenu"><a style="color: rgb(0, 0, 3)"> {{$lsp->ten_loai}} [{{$lsp->tssp}}]</a>
                            {{-- Danh sách nhà sản xuất theo từng loại sản phẩm --}}
                            <ul style="display:none">
                                <?php foreach($nha_san_xuat as $nsx){
                                    if($nsx->ten_loai === $lsp->ten_loai){?>
                                    <li>
                                        <a class="active" href="{{url('san-pham/tim-theo-nsx/'.$lsp->ma_loai.'/'.$nsx->ma_nsx)}}">
                                            <i class="icon-chevron-right"></i>{{$nsx->ma_nsx}}
                                        </a>
                                    </li>
                                <?php }}?>
                            </ul>
                        </li>
                        <?php
                            }
                        ?>
                    </ul>
                    <br/>
                    {{-- 3 sản phẩm quảng cáo --}}
                    <div class="well well-small" style="background-color: rgba(210, 209, 221, 0.466)">
                        <h4 style="text-align: center; color:#aa1818; font:bolder;text-shadow: 2px 2px 5px red;">GIẢM GIÁ SỐC</h4>
                        @foreach ($sale_product as $sale)
                            <div class="thumbnail">
                                <a href="{{url('san-pham/chi-tiet/'.$sale->id)}}" class="a1">
                                    <i class="sale"></i>
                                    <h3></h3>
                                    <img src="{{URL::asset('resources/hinh/hinh_san_pham/'.$sale->hinh_san_pham.'.jpg')}}" alt="Hình sản phẩm giảm giá"/>
                                    <div class="caption">
                                        <b class="text" style=" color: #02047c;">
                                        {{$sale->ten_san_pham}}
                                        </b>
                                        <b class="text" style="color: #cc0909; text-align:center;" >
                                            Giá: <?php echo number_format($sale->gia_goc - $sale->giam_gia)?> đ
                                        </b>
                                    </div>
                                </a>
                            </div>
                            <br/>
                        @endforeach
                        <a  href="{{url('san-pham/spggs')}}">
                            <div class="button-more">
                                <b> Xem thêm >></b>
                            </div>
                        </a>
                        <br>
                    </div>
                </div>
                <div class="span10">
                    @foreach($loai_san_pham as $lsp)
                        <button onclick="assignPage({{$lsp->id}})"  class="btn " style="height:40px;min-width:160px;">
                            <img src="{{URL::asset('resources/hinh/icon/'.$lsp->icon)}}"/>
                            <strong>{{$lsp->ten_loai}}</strong>
                        </button> &nbsp;&nbsp;&nbsp;
                    @endforeach
                    <br><hr class="soft"/>
                    {{-- Dánh sách sản phẩm--}}
                    @if (isset($list_null))
                        <h4>{{$list_null}}</h4>
                    @elseif(isset($search_info))
                    <h4>Tìm kiếm sản phẩm: {{$search_info}} </h4>
                    <hr class="soft">
                    <div class="well well-small" style="background-color: rgba(210, 209, 221, 0.466)">
                        <ul class="thumbnails">
                            <?php foreach($list as $sp){ ?>
                            <li class="span">
                                <div class="thumbnail">
                                    <a  href="{{url('san-pham/chi-tiet/'.$sp->id)}}">
                                        <h3></h3>
                                        <img src="{{URL::asset('resources/hinh/hinh_san_pham/'.$sp->hinh_san_pham.'.jpg')}}" alt="hình sản phẩm hot"/>
                                        <div class="caption">
                                            <b class="text" style="text-decoration: none; color: #000000;">
                                            {{$sp->ten_san_pham}}
                                            </b>
                                            <b style="color: #cc0909; text-align:center;" >
                                                Giá bán: <?php echo number_format($sp->gia_goc - $sp->giam_gia)?> đ
                                            </b>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <?php } ?>
                        </ul>

                        {{-- phân trang --}}
                        <?php if($list->count()>0)	{ ?>
                            <div class="row-fluid">
                                <div class="span5">
                                </div>
                                <div class="span3">
                                <div class="pagination">
                                    <ul>
                                    <li class="<?php echo $list->currentPage()==1?"disabled":"" ?>"><a href="{{$list->url(1)}}">&laquo;</a></li>
                                    <?php
                                    $start = $list->currentPage()-1;
                                    $end =$list->currentPage()+2;
                                    if($list->lastPage()<=$end) $end = $list->lastPage();
                                    if(1>=$start) $start = 1;
                                        for($i=$start;$i<=$end;$i++){ ?>
                                            <li class="<?php echo $list->currentPage()==$i?"disabled":"" ?>"><a href="{{$list->url($i)}}">{{$i}}</a></li>
                                    <?php
                                        }
                                    ?>
                                    <li class="<?php echo $list->currentPage()==$list->lastPage()?"disabled":"" ?>"><a href="{{$list->url($list->lastPage())}}">&raquo;</a></li>
                                    </ul>
                                </div>
                            </div>
                        <?php }?>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .a1{
    text-decoration: none;
    cursor: pointer;
}
a:hover {
    text-decoration: none;
    cursor: pointer;
}
h5{
    white-space:nowrap;
    overflow:hidden;
    text-overflow:ellipsis;
}
.button {
    background-color: rgba(221, 221, 221, 0.808);
    border: none;
    color: #aa1818;
    text-shadow: 2px 2px 5px red;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 12px;
}
.sale {
    background:url(resources/css/fontend/themes/images/icons8-sale-60.png) no-repeat 0 0;
    position: absolute;
    display:block;
    top: -4px;
    right: -18px;
    height:60px;
    width:60px;
}
.thumbnail{
    max-width: 180px;
    max-height:270px;
    height:250px;
    box-sizing: border-box;
    /* pointer-events: none; */
}
.thumbnails>li{
    margin-left: 45px;
    margin-top:15px;
}
.thumbnails {
    margin-left: 5px;
}
.button-more{
    margin: auto;
    width: 70%;
    padding: 10px;
    color: #000000;
    background-color: #ffffff !important;
    border-radius: 5px;
    border: #ffffff solid 3px;
    font-size: 15px;
    font-family: 'Source Sans Pro', sans-serif;
    text-align: center;
}
.thumbnail:hover{
    transform: translateY(-10px);
    border: #02047c solid 2px;
    text-decoration: none;
}
.carousel-inner .thumbnails{
    margin-top: 15px;
}

</style>

<script language="javascript">
    function assignPage(ma_loai)
    {
      window.location.assign(window.location.origin +'/san-pham/tim-theo-loai/'+ma_loai );
    }
  </script>
@endsection
