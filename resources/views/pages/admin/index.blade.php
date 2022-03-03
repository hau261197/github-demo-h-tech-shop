@extends('pages/admin/layout/master')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tổng quan</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-comments fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">{{count($new_chat)}}</div>
                                <div>New Chat!</div>
                            </div>
                        </div>
                    </div>
                    <a href="{{asset('admin/customer-new-chat-box')}}">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-tasks fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">--</div>
                                <div>New Comment!</div>
                            </div>
                        </div>
                    </div>
                    <a href="{{asset('admin/customer-new-chat-box')}}">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-yellow">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-shopping-cart fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">{{$dh_new->TSHD}}</div>
                                <div>Đơn hàng mới!</div>
                            </div>
                        </div>
                    </div>
                    <a href="{{url('admin/khach-hang/qly-don-hang/Tiếp nhận')}}">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-support fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">{{count($ton_kho)}}</div>
                                <div>Tồn kho thấp!</div>
                            </div>
                        </div>
                    </div>
                    <a href="#ton_kho_thap">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-7">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-bar-chart-o fa-fw"></i> {{$name_tuan}}
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <canvas id="bar-chart" width="800" height="450"></canvas>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-bar-chart-o fa-fw"></i> Thống kê sản phẩm theo loại
                    </div>
                    <div class="panel-body">
                        <canvas id="doughnut-chart" width="800" height="450"></canvas>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-bar-chart-o fa-fw"></i> Thống kê sản phẩm theo nhà sản xuất
                    </div>
                    <div class="panel-body">
                        <canvas id="polar-chart" width="800" height="450"></canvas>
                    </div>
                </div>
            </div>
            <!-- /.col-lg-8 -->
            <div id="ton_kho_thap" class="col-lg-5">
                <div class="panel-heading">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Sản phẩm tồn kho thấp
                </div>
                <div class="panel-body">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                        <tr>
                            <th>Mã</th>
                            <th>Hình</th>
                            <th>Tên</th>
                            <th>Tồn</th>
                            <th>Bán</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($ton_kho as $sptk)
                        <tr>
                            <td>{{$sptk->id}}</td>
                            <td><a href="{{url('admin/san-pham/chi-tiet/'.$sptk->id)}}"><img src="{{ URL::asset('resources/hinh/hinh_san_pham/'.$sptk->hinh_san_pham.'.jpg') }}" class="img-thumbnail" style="width: 50px; height:50px;"></a></td>
                            <td><a href="{{url('admin/san-pham/chi-tiet/'.$sptk->id)}}">{{$sptk->ten_san_pham}}</a></td>
                            <td>{{$sptk->store_sl_ton}}</td>
                            <td>{{$sptk->store_sl_da_ban}}</td>
                        </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="panel-heading">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Sản phẩm bán nhiều
                </div>
                <div class="panel-body">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                        <tr>
                            <th>Mã</th>
                            <th>Hình</th>
                            <th>Tên</th>
                            <th>Tồn</th>
                            <th>Bán</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($ban_chay as $spbc)
                        <tr>
                            <td>{{$spbc->id}}</td>
                            <td><a href="{{url('admin/san-pham/chi-tiet/'.$spbc->id)}}"><img src="{{ URL::asset('resources/hinh/hinh_san_pham/'.$spbc->hinh_san_pham.'.jpg') }}" class="img-thumbnail" style="width: 50px; height:50px;"></a></td>
                            <td><a href="{{url('admin/san-pham/chi-tiet/'.$spbc->id)}}">{{$spbc->ten_san_pham}}</a></td>
                            <td>{{$spbc->store_sl_ton}}</td>
                            <td>{{$spbc->store_sl_da_ban}}</td>
                        </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

<script>
  new Chart(document.getElementById("doughnut-chart"), {
    type: 'doughnut',
    data: {
      labels: [@foreach ($Thongkesanphamtheoloai as $item)
                '{{$item->ten_loai}}',
                @endforeach],
      datasets: [
        {
          label: "Population (millions)",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
          data: [@foreach ($Thongkesanphamtheoloai as $item)
                '{{$item->TSSP}}',
                @endforeach]
        }
      ]
    },
    options: {
      title: {
        display: true,
        text: 'Thống kê số mặt hàng theo loại'
      }
    }
  });
</script>

<script>
new Chart(document.getElementById("bar-chart"), {
    type: 'bar',
    data: {
      labels: [@foreach ($doanh_thu_tuan as $ngay=>$doanh_thu_ngay)
                "{{$ngay}}",
                @endforeach
      ],
      datasets: [
        {
          label: "doanh thu trong ngày (triệu đồng)",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
          data: [@foreach ($doanh_thu_tuan as $ngay=>$doanh_thu_ngay)
                '{{$doanh_thu_ngay/1000000}}',
                @endforeach]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: '{{$name_tuan}}'
      }
    }
});

new Chart(document.getElementById("polar-chart"), {
    type: 'polarArea',
    data: {
      labels: [@foreach ($ThongkesanphamtheoNSX as $item)
                "{{$item->ten_nha_san_xuat}}",
                @endforeach],
      datasets: [
        {
          label: "Population (millions)",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","#3e95cd", "#8e5ea2","#3cba9f"],
          data: [@foreach ($ThongkesanphamtheoNSX as $item)
                "{{$item->TSSP}}",
                @endforeach]
        }
      ]
    },
    options: {
      title: {
        display: true,
        text: 'Thống kê mặt hàng theo thương hiệu'
      }
    }
});


</script>
<script >
    $(document).ready(function(){
        // Xử lý khi khách hàng nhập xong và ấn gửi
        $("#submitmsg").click(function(){
            var clientmsg = $("#usermsg").val();
            var time = "<?php echo '('.date('Y-m-d H:i:s').')'; ?>";
            $("#chatbox").html(time+' '+"<b>Bạn: </b>"+clientmsg+"<br>");
            $("#usermsg").attr("value", "");
            // $.post("customer-post-chat-box", {text: clientmsg});
            $.ajax({
                url: "{{url('customer-post-chat-box')}}",
                type: "POST",
                cache:false,
                data: {text: clientmsg,time: time,_token: "{{csrf_token()}}"},
                success:function(data){
                    let string = "";
                    var getData = JSON.parse(data);
                    // const getData = JSON.stringify(data);
                    getData.forEach(function(item, index) {
                        if(item.statut==1){
                            string += item.time +' '+"<b>Bạn: </b>"+item.content+"<br>";
                        }
                        else string +='<p style="color:red;">'+ item.time +' '+"<b>H-Tech Shop: </b>"+item.content +"</p><br>";
                    });
                    document.getElementById("chatbox").innerHTML = string;
                }
            });
        });
    });
</script>
@endsection
