<script>
function function_show_hide(ten_div) {
  var x = document.getElementById(ten_div);
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>
<style>
    #side-menu> div{
     display:none;
 }
</style>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{url('admin/home')}}">Hệ thống quản trị H-Tech Shop</a>
    </div>

    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>

    <ul class="nav navbar-right navbar-top-links">
        <li><a href="{{url('/')}}"><i class="fa fa-home fa-fw"></i> Website</a></li>
        <li><a href="{{url('admin/dang-xuat')}}"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
      <!--  <li class="dropdown navbar-inverse">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
            </a>
            <ul class="dropdown-menu dropdown-alerts">
                <li>
                    <a href="#">
                        <div>
                            <i class="fa fa-comment fa-fw"></i> New Comment
                            <span class="pull-right text-muted small">4 minutes ago</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div>
                            <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                            <span class="pull-right text-muted small">12 minutes ago</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div>
                            <i class="fa fa-envelope fa-fw"></i> Message Sent
                            <span class="pull-right text-muted small">4 minutes ago</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div>
                            <i class="fa fa-tasks fa-fw"></i> New Task
                            <span class="pull-right text-muted small">4 minutes ago</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div>
                            <i class="fa fa-upload fa-fw"></i> Server Rebooted
                            <span class="pull-right text-muted small">4 minutes ago</span>
                        </div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a class="text-center" href="#">
                        <strong>See All Alerts</strong>
                        <i class="fa fa-angle-right"></i>
                    </a>
                </li>
            </ul>
        </li>

        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> secondtruth <b class="caret"></b>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                </li>
                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
        </li>-->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li onclick="function_show_hide('div_01')" >
                    <a href="{{url('admin/bao-cao-thong-ke/')}}" ><img style="width:20px;height:20px;" src="{{URL::asset('resources/hinh/icon/icons8-combo-chart-25.png')}}"/>&emsp; Báo cáo thống kê</a>
                </li>
                <div id="div_01" >
                    <ul class="nav nav-second-level">
                        <li >
                            <a href="{{url('admin/loai-san-pham/qly-loai-san-pham')}}">Báo cáo doanh thu</a>
                        </li>
                        <li >
                            <a href="{{url('admin/san-pham/qly-san-pham')}}">Báo cáo sản phẩm</a>
                        </li>
                    </ul>
                </div>
                <li onclick="function_show_hide('div_02')">
                    <a ><img style="width:20px;height:20px;" src="{{URL::asset('resources/hinh/icon/icons8-product-management-25.png')}}"/>
                        &emsp;  Quản lý sản phẩm<span class="fa arrow"></span>
                    </a>
                </li>
                <div id="div_02" >
                    <ul class="nav nav-second-level">
                        <li >
                            <a href="{{url('admin/loai-san-pham/qly-loai-san-pham')}}">Loại sản phẩm</a>
                        </li>
                        <li >
                            <a href="{{url('admin/san-pham/qly-san-pham')}}">Sản phẩm</a>
                        </li>
                    </ul>
                </div>
                <li onclick="function_show_hide('div_03')">
                    <a> <img style="width:20px;height:20px;" src="{{URL::asset('resources/hinh/icon/icons8-paid-bill-25.png')}}"/>&emsp;Quản lý đơn hàng<span class="fa arrow"></span></a>
                </li>
                <div id="div_03" >
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{url('admin/khach-hang/qly-don-hang/Tiếp nhận')}}">Tiếp nhận</a>
                        </li>
                        <li>
                            <a href="{{url('admin/khach-hang/qly-don-hang/Đang vận chuyển')}}">Đang vận chuyển</a>
                        </li>
                        <li>
                            <a href="{{url('admin/khach-hang/qly-don-hang/Hoàn tất')}}">Hoàn tất</a>
                        </li>
                    </ul>
                </div>
                <li>
                    <a href="{{url('admin/khach-hang/ma-giam-gia')}}"><img style="width:20px;height:20px;" src="{{URL::asset('resources/hinh/icon/icons8-sale-price-tag-24.png')}}"/>&emsp; Mã giảm giá</a>
                </li>
                <li>
                    <a href="{{url('admin/customer-new-chat-box')}}"><img style="width:20px;height:20px;" src="{{URL::asset('resources/hinh/icon/icons8-chat-25.png')}}"/>&emsp; Phản hồi tin nhắn</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
