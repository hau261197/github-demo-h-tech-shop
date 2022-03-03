@extends('admin/layout/master')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thống kê sản phẩm</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div>
                  <canvas id="doughnut-chart" width="800" height="450"></canvas>
                </div>
            </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
              
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
@endsection
