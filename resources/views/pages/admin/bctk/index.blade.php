@extends('pages/admin/layout/master')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Báo cáo thống kê</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div>
                    <canvas id="bar-chart" width="500" height="250"></canvas>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div>
                  <canvas id="doughnut-chart" width="500" height="250"></canvas>
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
{{-- chart số lượng sản phẩm theo loại sản phẩm --}}
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

{{-- chart doanh thu 7 ngày vừa qua --}}
<script>
    new Chart(document.getElementById("bar-chart"), {
        type: 'bar',
        data: {
          labels: [@foreach ($doanh_thu as $item)
                    "{{$item->ngay_hoa_don}}",
                    @endforeach
          ],
          datasets: [
            {
              label: "doanh thu trong ngày (triệu đồng)",
              backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
              data: [@foreach ($doanh_thu as $item)
                    "{{$item->doanh_thu_ngay/1000000}}",
                    @endforeach]
            }
          ]
        },
        options: {
          legend: { display: false },
          title: {
            display: true,
            text: 'Doanh thu 7 ngày qua'
          }
        }
    });
    </script>
@endsection
