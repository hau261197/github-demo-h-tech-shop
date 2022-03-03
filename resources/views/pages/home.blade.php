@extends('layout/master')
@section('title')Trang chủ
@endsection
@section('content')
<link rel="stylesheet" href="{{URL::asset('resources/css/fontend/customize_homepage.css')}}"/>
<div id="content">
    <div id="carouselBlk">
        {{-- slider  --}}
        <div id="myCarousel" class="carousel slide">
            <div class="carousel-inner">
                <?php $i=0;
                foreach($slider as $sli)
                { $i++;
                if($i==1){ ?>
                <div class="item active">
                    <div class="container">
                        <a href="{{url('san-pham/chi-tiet/'.$sli->id_sp)}}"><img style="width:100%" src="{{URL::asset('resources/hinh/hinh_slider/'.$sli->hinh_slider.'.jpg')}}" alt="Sản phẩm sắp ra mắt"/></a>
                    </div>
                </div>
                <?php }else{ ?>
                <div class="item">
                    <div class="container">
                        <a href="{{url('san-pham/chi-tiet/'.$sli->id_sp)}}"><img style="width:100%" src="{{URL::asset('resources/hinh/hinh_slider/'.$sli->hinh_slider.'.jpg')}}" alt="special offers"/></a>
                    </div>
                </div>
                <?php }} ?>
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
        </div>
    </div>
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
                        <li class="subMenu"><a > {{$lsp->ten_loai}} [{{$lsp->tssp}}]</a>
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
                {{-- Sản phẩm mới --}}
                <div class="span10">
                    {{-- danh mục loại sản phẩm --}}
                    @foreach($loai_san_pham as $lsp)
                        <button onclick="assignPage({{$lsp->id}})"  class="btn " style="height:40px;min-width:160px;">
                            <img src="{{URL::asset('resources/hinh/icon/'.$lsp->icon)}}"/>
                            <strong>{{$lsp->ten_loai}}</strong>
                        </button> &nbsp;&nbsp;&nbsp;
                    @endforeach
                    <br><hr class="soft"/>
                    <div class="well well-small" style="background-color: rgba(210, 209, 221, 0.466)">
                        <h3 style="text-align: center; color:#aa1818; font:bolder;text-shadow: 2px 2px 5px red;">SẢN PHẨM MỚI</h3>
                        <div class="row-fluid">
                            <div id="featured" class="carousel slide">
                                <div class="carousel-inner">
                                    {{-- lặp foreach sản phẩm hot lần 1 --}}
                                    <?php $block =0;
                                    for($i=0;$i<count($new_product)/4;$i++){
                                        $fore=0;?>
                                    <div class="item <?php echo $block==0?'active':''?>">
                                        <ul class="thumbnails" style="margin-left:30px;">
                                            <?php
                                            foreach($new_product as $new){
                                                $fore++;
                                                if($fore<=$block*4)
                                                {
                                                    continue;
                                                }
                                            ?>
                                            <li class="span3" >
                                                <div class="thumbnail">
                                                    <i class="tag"></i>
                                                    <a href="{{url('san-pham/chi-tiet/'.$new->id)}}" class="a1">
                                                        <h3></h3>
                                                        <img src="{{URL::asset('resources/hinh/hinh_san_pham/'.$new->hinh_san_pham.'.jpg')}}" alt="hình sản phẩm">
                                                        <div class="caption">
                                                            <b class="text" style=" color: #02047c;">
                                                            {{$new->ten_san_pham}}
                                                            </b>
                                                            <b class="text" style="color: #cc0909; text-align:center;" >
                                                                Giá: <?php echo number_format($new->gia_goc - $new->giam_gia)?> đ
                                                            </b>
                                                        </div>
                                                    </a>
                                                </div>
                                            </li>
                                            <?php
                                                if($fore/4==$block+1)
                                                {
                                                    $block++;
                                                    break;
                                                }
                                            } ?>
                                        </ul>
                                    </div>
                                    <?php } ?>
                                </div>
                                <a class="left carousel-control" href="#featured" data-slide="prev">‹</a>
                                <a class="right carousel-control" href="#featured" data-slide="next">›</a>
                            </div>
                        </div>
                    </div>
                    <hr class="soft"/>
                    {{-- Sản phẩm nổi bật--}}
                    <div class="well well-small" style="background-color: rgba(210, 209, 221, 0.466)">
                        <h3 style="text-align: center; color:#aa1818; font:bolder;text-shadow: 2px 2px 5px red;">SẢN PHẨM BÁN CHẠY </h3><br>
                        <ul class="thumbnails">
                            <?php foreach($hot_product as $hot){ ?>
                            <li class="span2">
                                <div class="thumbnail">
                                    <i class="hot"></i>
                                    <a  href="{{url('san-pham/chi-tiet/'.$hot->id)}}" class="a1">
                                        <h3></h3>
                                        <img src="{{URL::asset('resources/hinh/hinh_san_pham/'.$hot->hinh_san_pham.'.jpg')}}" alt="hình sản phẩm hot"/>
                                        <div class="caption">
                                            <b class="text" style="text-decoration: none; color: #02047c;">
                                            {{$hot->ten_san_pham}}
                                            </b>
                                            <b class="text" style="color: #cc0909; text-align:center;" >
                                                Giá: <?php echo number_format($hot->gia_goc - $hot->giam_gia)?> đ
                                            </b>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <?php } ?>
                            {{-- <li class="span3">
                                <div class="thumbnail">
                                    <a  href="product_details.html"><img src="{{URL::asset('resources/css/fontend')}}/themes/images/products/7.jpg" alt=""/></a>
                                    <div class="caption">
                                    <h5>Product name</h5>
                                    <p>
                                        Lorem Ipsum is simply dummy text.
                                    </p>
                                    <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                                    </div>
                                </div>
                            </li>
                            <li class="span3">
                                <div class="thumbnail">
                                    <a  href="product_details.html"><img src="{{URL::asset('resources/css/fontend')}}/themes/images/products/8.jpg" alt=""/></a>
                                    <div class="caption">
                                    <h5>Product name</h5>
                                    <p>
                                        Lorem Ipsum is simply dummy text.
                                    </p>
                                    <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                                    </div>
                                </div>
                            </li>
                            <li class="span3">
                                <div class="thumbnail">
                                    <a  href="product_details.html"><img src="{{URL::asset('resources/css/fontend')}}/themes/images/products/9.jpg" alt=""/></a>
                                    <div class="caption">
                                    <h5>Product name</h5>
                                    <p>
                                        Lorem Ipsum is simply dummy text.
                                    </p>
                                    <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                                    </div>
                                </div>
                            </li>
                            <li class="span3">
                                <div class="thumbnail">
                                    <a  href="product_details.html"><img src="{{URL::asset('resources/css/fontend')}}/themes/images/products/10.jpg" alt=""/></a>
                                    <div class="caption">
                                    <h5>Product name</h5>
                                    <p>
                                        Lorem Ipsum is simply dummy text.
                                    </p>
                                    <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                                    </div>
                                </div>
                            </li>
                            <li class="span3">
                                <div class="thumbnail">
                                    <a  href="product_details.html"><img src="{{URL::asset('resources/css/fontend')}}/themes/images/products/11.jpg" alt=""/></a>
                                    <div class="caption">
                                    <h5>Product name</h5>
                                    <p>
                                        Lorem Ipsum is simply dummy text.
                                    </p>
                                    <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                                    </div>
                                </div>
                            </li> --}}
                        </ul>
                        <a  href="{{url('san-pham/spbc')}}">
                            <div class="button-more">
                               <b> Xem thêm >></b>
                            </div>
                        </a>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script language="javascript">
    function assignPage(ma_loai)
    {
      window.location.assign(window.location.origin +'/san-pham/tim-theo-loai/'+ma_loai );
    }
  </script>

<style>
.sale {
    background:url(resources/css/fontend/themes/images/icons8-sale-60.png) no-repeat 0 0;
    position: absolute;
    display:block;
    top: -4px;
    right: -18px;
    height:60px;
    width:60px;
}
.hot {
    background:url(resources/css/fontend/themes/images/hot-icon.png) no-repeat 0 0;
    position: absolute;
    display:block;
    top: -4px;
    right: -30px;
    height:60px;
    width:60px;
}
.tag {background:url(resources/css/fontend/themes/images/new.png) no-repeat 0 0; position: absolute; display:block; top: -4px;right: -18px; height:48px; width:48px;}
</style>
@endsection
