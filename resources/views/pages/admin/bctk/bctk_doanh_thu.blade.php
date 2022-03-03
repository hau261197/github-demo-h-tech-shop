@extends('admin/layout/master')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thống kê doanh thu</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div>
                    <canvas id="bar-chart" width="800" height="450"></canvas>
                </div>
            </div>
            <!-- /.col-lg-8 -->
            <!-- /.col-lg-4 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

<script>
new Chart(document.getElementById("bar-chart"), {
    type: 'bar',
    data: {
      labels: [@foreach ($name7day as $key=>$item)
                "{{$key}}",
                @endforeach
      ],
      datasets: [
        {
          label: "doanh thu trong ngày (triệu đồng)",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
          data: [@foreach ($name7day as $key=>$item)
                '{{$item/1000000}}',
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
</script>
@endsection
