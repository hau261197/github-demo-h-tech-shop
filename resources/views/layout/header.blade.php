
<div id="header" >
    <div id="logoArea" class="navbar">
        <a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
        <div class="navbar-inner">
            {{-- logo trang chủ --}}
            {{-- <a class="brand" href="{{url('/')}}"><img src="{{URL::asset('resources/hinh/icon/logo.png')}}" alt="Logo"/></a> --}}
            <a class="brand" href="{{url('/')}}">
                <h2 style="font-family: Copperplate, Papyrus, fantasy;color: rgb(255, 255, 255);
                text-shadow: 2px 2px 10px #200606;">H-TECH SHOP   </h2>
            </a>
            {{-- Thanh tìm kiếm --}}
            <form class="form-inline navbar-search" method="get" action="{{url('san-pham/search-sp')}}" >
                <input id="srchFld" class="srchTxt" type="text" name="search_input" placeholder=""/>
                {{-- <select class="srchTxt">
                    <option>All</option>
                    <option>CLOTHES </option>
                    <option>FOOD AND BEVERAGES </option>
                    <option>HEALTH & BEAUTY </option>
                    <option>SPORTS & LEISURE </option>
                    <option>BOOKS & ENTERTAINMENTS </option>
                </select> --}}
                <button type="submit" id="submitButton" class="btn btn-primary">Go</button>
            </form>
            <ul id="topMenu" class="nav pull-right">
                {{-- Giỏ hàng --}}
                <li class="">
                    <a class="nav" href="{{url('khach-hang/gio-hang')}}">
                        <span class="btn">
                            <b>Giỏ hàng</b>
                            <i class="icon-shopping-cart icon-white" style="font-size:24px"></i>
                            <span class='badge badge-warning' id='lblCartCount' style="margin-left:-10px; background-color:red;">{{Cart::count()}}</span>
                        </span>
                    </a>
                </li>
                <li   ><a href="special_offer.html">Tin tức</a></li>
                <li   ><a href="{{url('chat-box')}}">Liên hệ</a></li>
                @if(Auth::check())
                    @if(Auth::user()->is_admin)
                    <li>
                        <a href="{{url('admin/home')}}">
                            <div style="margin-top:-10px;text-align:center;">
                                <img src="{{URL::asset('resources/css/fontend/themes/images/icons8-admin-settings-male-30.png')}}"/>
                            </div>
                            <div style="margin-top:-23px;text-align:center;">
                                Admin: {{Auth::user()->last_name}}
                            </div>
                        </a>
                    </li>
                    @else
                    <li>
                        <a href="{{url('khach-hang/thong-tin-tai-khoan')}}">
                            <div style="margin-top:-10px;">
                                <img src="{{URL::asset('resources/css/fontend/themes/images/icons8-user-30.png')}}"/>
                            </div>
                            <div style="margin-top:-23px;text-align:center;">
                                {{Auth::user()->last_name}}
                            </div>
                        </a>
                    </li>
                    @endif
                    <li   ><a href="{{url('khach-hang/dang-xuat')}}"  style="padding-right:0">Đăng xuất</a>
                    </li>
                @else
                    <li   ><a href="{{url('khach-hang/dang-ky')}}">Đăng ký</a></li>
                    <li   ><a href="{{url('khach-hang/dang-nhap')}}"  style="padding-right:0">Đăng nhập</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</div>
<style>
#header {
    position: fixed;
    width: 100%;
    top: 0;
    z-index: 10;
    max-height: 71px;
  }
  #logoArea>div{
      max-height: 80px;
  }
</style>
