@extends('layout/master')
@section('title','Danh sách sản phẩm')
@section('content')
<link rel="stylesheet" href="{{URL::asset('resources/css/fontend/customize_homepage.css')}}"/>
<div id="mainBody" style="margin-top:80px;">
	<div class="container">
	<div class="row">
		<div class="span12">
			<div class="row">
				<div id="gallery" class="span5">
					<a href="{{URL::asset('resources/hinh/hinh_san_pham/'.$dssp->hinh_san_pham.'.jpg')}}" title="{{$dssp->ten_url}}">
						<img src="{{URL::asset('resources/hinh/hinh_san_pham/'.$dssp->hinh_san_pham.'.jpg')}}" style="width:100%" alt="{{$dssp->ten_url}}"/>
					</a>
					<div id="differentview" class="moreOptopm carousel slide">
						<div class="carousel-inner">
                            <div class="item active">
                            <a href="{{URL::asset('resources/hinh/hinh_san_pham/'.$dssp->hinh_san_pham.'.jpg')}}"> <img style="width:29%" src="{{URL::asset('resources/hinh/hinh_san_pham/'.$dssp->hinh_san_pham.'.jpg')}}" alt=""/></a>

                            <a href="{{URL::asset('resources/hinh/hinh_san_pham/'.$dssp->hinh_1.'.jpg')}}"> <img style="width:29%" src="{{URL::asset('resources/hinh/hinh_san_pham/'.$dssp->hinh_1.'.jpg')}}" alt=""/></a>

                            <a href="{{URL::asset('resources/hinh/hinh_san_pham/'.$dssp->hinh_2.'.jpg')}}"> <img style="width:29%" src="{{URL::asset('resources/hinh/hinh_san_pham/'.$dssp->hinh_2.'.jpg')}}" alt=""/></a>
                            </div>
						</div>
					</div>
				</div>
				<div class="span7">
					<h2>{{$dssp->ten_san_pham}}</h2>
					{{-- <span style="color:rgb(170, 169, 169);">{{$dssp->tskt_xuat_xu}}</span> --}}
					<hr class="soft"/>
                        <form class="form-horizontal qtyFrm">
                            <div class="control-group">
                                <label class="control-label" style="width: 100%; overflow: hidden;">
                                    <span style="color:red; font-weight:bold; font-size: 250%; float:left;"><?php echo number_format($dssp->gia_goc - $dssp->giam_gia). 'đ'?>&nbsp;&nbsp;</span>

                                    <span style="color:rgb(170, 169, 169); font-weight:bold; font-size: 250%; text-decoration: line-through;"><?php echo number_format($dssp->gia_goc).'đ'?></span>
                                </label>
                            </div>
                        </form>
					<hr class="soft"/>
					<form class="form-horizontal qtyFrm" method="GET" action="{{url('khach-hang/them-gio-hang')}}">
						<input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="ten_san_pham" value="{{$dssp->ten_san_pham}}">
                        <input type="hidden" name="id_san_pham" value="{{$dssp->id}}">
                        <input type="hidden" name="gia_san_pham" value="{{$dssp->gia_goc - $dssp->giam_gia}}">
						<input type="hidden" id="Th_hinh_san_pham" name="Th_hinh_san_pham"  value="{{$dssp->hinh_san_pham}}">
						<div class="control-group">
							<label class="control-label" style="width: 100%; overflow: hidden;">
								<span style="font-size: 120%; color:dimgrey; float:left;">
                                    Còn:&nbsp;<b>{{$dssp->store_sl_ton}}</b> &nbsp;sản phẩm
                                </span>
								<input type="hidden" id="id_san_pham" value="{{$dssp->id}}">
								<button type="button" class=" btn btn-secondary disabled pull-right">
                                    <b>{{$dssp->store_sl_da_ban}}</b>&nbsp; sản phẩm đã bán
                                </button>
							</label>
						</div>
						<div class="control-group">
							<label class="control-label"><span style="font-size: 120%; color:dimgrey;">Số lượng:&emsp;</span></label>
							<select id="Th_soluong" name="Th_soluong" class="form-control" style=" width:90px; text-align:center;">
								@for($i=1;$i<=5;$i++)
									<option>{{$i}}</option>
								@endfor
							  </select>
						</div>
						<div class="control-group">
							<label class="control-label"><span style="font-size: 120%; color:dimgrey;">Màu sắc:&emsp;</span></label>
							<div class="controls">
								<select style="width:90px;" name="mau_san_pham" id="Th_mau_san_pham">
									@if(strlen(trim($color_select))>0)
									<option style="color:black;">Black</option>
									<option style="color:red;">Red</option>
									<option style="color:blue;">Blue</option>
									<option style="color:brown;">Brown</option>
									<option style="color:white;">White</option>
									@else
									<option style="color:black;">Black</option>
									@endif
								</select>
							</div>
						</div>
						<hr class="soft"/>

						<button type="submit" name="btn_submit1" value="1" style="background:red" class="btn btn-large btn-primary"> Thêm vào<i class="icon-shopping-cart"></i></button>
						&emsp;
						<button type="submit" name="btn_submit2" value="1" style="background:red" class="btn btn-large btn-primary" > Mua ngay</button>
					</form>
					<hr class="soft clr"/>
					<p>
						{{$dssp->tskt_chip}}&nbsp;
                        {{$dssp->tskt_ram}} &nbsp;
                        {{$dssp->tskt_bo_nho_trong}} &nbsp;
                        {{$dssp->tskt_pixel}} &nbsp;
                        {{$dssp->tskt_man_hinh}} &nbsp;
                        {{$dssp->tskt_camera_truoc}} &nbsp;
                        {{$dssp->tskt_camera_sau}} &nbsp;
                        {{$dssp->tskt_sim}} &nbsp;
                        {{$dssp->tskt_pin}} &nbsp;
                        {{$dssp->tskt_VGA}}  &nbsp;
                        {{$dssp->tskt_ket_noi_mang}} &nbsp;
                        {{$dssp->tskt_material}} &nbsp;
                        {{$dssp->tskt_weight}} &nbsp;
                        {{$dssp->tskt_bao_hanh}}
					</p>
					<a class="btn btn-small pull-right" href="#detail">Xem chi tiết</a>
					<br class="clr"/>
					<a href="#" name="detail"></a>
					<hr class="soft"/>
				</div>
<!-- Kết thúc phần giá sản phẩm-->
				<div class="span12" id="detail">
					<ul id="productDetail" style="margin-right: 30px;" class="nav nav-tabs">
                        <li class="active">
                            <a href="#home" data-toggle="tab">Chi tiết</a>
                        </li>
                        <li>
                            <a href="#sp_cung_loai" data-toggle="tab">Sản phẩm cùng loại</a>
                        </li>
                        <li>
                            <a href="#danh_gia" data-toggle="tab">Đánh giá</a>
                        </li>
					</ul>
					<div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade {{ !session('user_comment')||session('user_comment') == 'home' ? 'active in' : '' }}"style="width: 100%; overflow: hidden;" id="home">
                            <div id=""  style="width: 700px; float: left;" class="tab-content">
                                <h4>Đánh giá sản phẩm "{{$dssp->ten_san_pham}}"</h4>
                                <p>
                                    <br>
                                    {{$dssp->gioi_thieu}}
                                    <br><br>
                                    {{$dssp->gioi_thieu_2}}
                                    <br><br>
                                    {{$dssp->gioi_thieu_3}}
                                </p>
                            </div>
                            <div class="tab-content" style="margin-left: 720px;"  id="">
                                <h4>Thông số kỹ thuật</h4>
                                <table class="table table-bordered" >
                                    <tbody >
                                        <tr class="techSpecRow hidden">
                                            <th colspan=""></th>
                                        </tr>
                                        <tr class="techSpecRow ">
                                            <td style="width:90px; " class="techSpecTD3">CPU: </td>
                                            <td class="techSpecTD2">{{$dssp->tskt_chip}}</td>
                                        </tr>
                                        <tr class="techSpecRow">
                                            <td class="techSpecTD1">RAM:</td><td class="techSpecTD2">{{$dssp->tskt_ram}}</td>
                                        </tr>
                                        <tr class="techSpecRow">
                                            <td class="techSpecTD1">Bộ nhớ trong:</td>
                                            <td class="techSpecTD2">{{$dssp->tskt_bo_nho_trong}}</td>
                                        </tr>
                                        <tr class="techSpecRow">
                                            <td class="techSpecTD1">Màn hình:</td>
                                            <td class="techSpecTD2">{{$dssp->tskt_pixel}} &nbsp; {{$dssp->tskt_man_hinh}}</td>
                                        </tr>
                                        @if($dssp->ma_loai==2)
                                            <tr class="techSpecRow">
                                                <td class="techSpecTD1">Camera trước:</td>
                                                <td class="techSpecTD2">{{$dssp->tskt_camera_truoc}}</td>
                                            </tr>
                                            <tr class="techSpecRow">
                                                <td class="techSpecTD1">Camera sau:</td>
                                                <td class="techSpecTD2">{{$dssp->tskt_camera_sau}}</td>
                                            </tr>
                                            <tr class="techSpecRow"><td class="techSpecTD1">Sim:</td>
                                                <td class="techSpecTD2">{{$dssp->tskt_sim}}</td>
                                            </tr>
                                            <tr class="techSpecRow"><td class="techSpecTD1">Pin:</td>
                                                <td class="techSpecTD2">{{$dssp->tskt_pin}}</td>
                                            </tr>
                                        @endif
                                        @if($dssp->ma_loai==21)
                                            <tr class="techSpecRow">
                                                <td class="techSpecTD1">VGA:</td>
                                                <td class="techSpecTD2">{{$dssp->tskt_VGA}}</td>
                                            </tr>
                                        @endif
                                        <tr class="techSpecRow">
                                            <td class="techSpecTD1">Kết nối:</td>
                                            <td class="techSpecTD2">{{$dssp->tskt_ket_noi_mang}}</td>
                                        </tr>
                                        <tr class="techSpecRow">
                                            <td class="techSpecTD1">Chất liệu:</td>
                                            <td sclass="techSpecTD2">{{$dssp->tskt_material}}</td>
                                        </tr>
                                        <tr class="techSpecRow">
                                            <td class="techSpecTD1">Trọng lượng:</td>
                                            <td class="techSpecTD2">{{$dssp->tskt_weight}}</td>
                                        </tr>
                                        <tr class="techSpecRow">
                                            <td class="techSpecTD1">Bảo hành:</td>
                                            <td class="techSpecTD2">{{$dssp->tskt_bao_hanh}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="sp_cung_loai">
                            <h4>Sản phẩm cùng loại:</h4>
                            <br>
                            <div class="tab-content">
                                <div class="tab-pane active" id="blockView">
                                    <ul class="thumbnails">
                                        @foreach ($sp_cung_loai as $spcl)
                                        <li class="span">
                                        <div class="thumbnail">
                                            <a class="one" style="text-decoration: none;" href="{{url('san-pham/chi-tiet/'.$spcl->id)}}">
                                                <h3></h3>
                                                <img src="{{URL::asset('resources/hinh/hinh_san_pham/'.$spcl->hinh_san_pham.'.jpg')}}" alt=""/>
                                            </a>
                                            <div class="caption">
                                                <h5 class="text" style="text-decoration: none; color: #02047c;">
                                                    {{$spcl->ten_san_pham}}
                                                </h5>
                                                <h5 style="color: #cc0909; text-align:center;" >
                                                    Giá bán: <?php echo number_format($spcl->gia_goc - $spcl->giam_gia)?> đ
                                                </h5>
                                            </div>
                                        </div>
                                        @endforeach
                                        </li>
                                    </ul>
                                    <hr class="soft"/>
                                </div>
                            </div>
                            <br class="clr">
                        </div>
                        <div class="tab-pane fade  {{ session('user_comment') == 'danh_gia' ? 'active in' : '' }}" id="danh_gia">
                            <h4>Đánh giá của khách hàng:</h4>
                            <br>
                            <div class="tab-content">
                                <div class="tab-pane active" id="blockView">
                                    @if(session('user_comment'))
                                    <div class="well">
                                        <form class="form-horizontal" method="post" action="{{url('khach-hang/danh-gia-san-pham/'.$dssp->id)}}" enctype="multipart/form-data">
                                            @csrf
                                            {{-- Đánh giá --}}
                                            <div class="control-group">
                                                <label class="control-label">Đánh giá </label>
                                                <div class="controls">
                                                    <select id="rating" name="rating" style="width:70px;">
                                                        <option value="5">5 sao</option>
                                                        <option value="4">4 sao</option>
                                                        <option value="3">3 sao</option>
                                                        <option value="2">2 sao</option>
                                                        <option value="1">1 sao</option>
                                                    </select>
                                                </div>
                                            </div>
                                            {{-- Comment --}}
                                            <div class="control-group">
                                                <label class="control-label" for="inputFname1">Comment</label>
                                                <div class="controls">
                                                    <input type="text"class="span6"  name="Comment" value="{{old('Comment')}}">
                                                </div>
                                            </div>
                                            {{-- hình --}}
                                            <div class="control-group">
                                                <label class="control-label" for="inputLnam">Hình </label>
                                                <div class="controls">
                                                    <input type="file" id="file" value="{{old('hinh')}}"  class="span6"name="hinh" >
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <div class="controls">
                                                    {{-- <input type="hidden" name="email_create" value="1">
                                                    <input type="hidden" name="is_new_customer" value="1"> --}}
                                                    <input class="btn btn-large btn-success" type="submit" value="Gửi" />
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    @else
                                    <div class="row-fluid">
                                        <div class="span8">
                                        @foreach($danh_gia as $dg)
                                            <div class="well">
                                                <div><b style="color:#02047c">{{$dg->sao}}&#9733; </b><b>{{$dg->first_name.' '.$dg->last_name}}</b>
                                                <small>{{$dg->time}}</small>: {{$dg->noi_dung_danh_gia}}</div>
                                                @if($dg->hinh)
                                                <div>
                                                <img style="max-width:80px; max-height:80px;" src="{{URL::asset('resources/hinh/hinh_y_kien/'.$dg->hinh)}}"/>
                                                </div>
                                                @endif
                                            </div>
                                        @endforeach
                                        </div>
                                        <div class="span4">
                                            <div class="span4">
                                                <?php $tong_luot=0;$tong_sao=0;
                                                foreach($diem_dg as $key=>$luot){
                                                    $tong_luot+=$luot;
                                                    $tong_sao+= $key*$luot;
                                                }
                                                if($tong_luot==0)$avg=0;
                                                else $avg=$tong_sao/$tong_luot;
                                                ?>
                                                <h1>{{number_format($avg,1)}}&#9733;</h1>
                                                <b>{{$tong_luot.' đánh giá'}}</b>
                                            </div>
                                            <div class="span4">
                                                <p>5 sao &#9733;&#9733;&#9733;&#9733;&#9733;</p>
                                                <p style="margin-top:-10px;">4 sao &#9733;&#9733;&#9733;&#9733;</p>
                                                <p style="margin-top:-10px;">3 sao &#9733;&#9733;&#9733;</p>
                                                <p style="margin-top:-10px;">2 sao &#9733;&#9733;</p>
                                                <p style="margin-top:-10px;">1 sao &#9733;</p>
                                            </div>
                                            <div class="span4">
                                                <p>{{$diem_dg[5].' lượt'}}</p>
                                                <p style="margin-top:-10px;">{{$diem_dg[4].' lượt'}}</p>
                                                <p style="margin-top:-10px;">{{$diem_dg[3].' lượt'}}</p>
                                                <p style="margin-top:-10px;">{{$diem_dg[2].' lượt'}}</p>
                                                <p style="margin-top:-10px;">{{$diem_dg[1].' lượt'}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    <hr class="soft"/>
                                </div>
                            </div>
                            <br class="clr">
                        </div>

				    </div>
				</div>
			</div>
		</div>
	</div>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
    .thumbnail{
        max-width: 180px;
        max-height:270px;
        height:270px;
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
@endsection
