@extends('layout.template')


@section('content')
<div class="d-flex justify-content-center">
    <div class="col-lg-8 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Chart</h4>
            <span>Total Data : {{ $totalData }}</span>
            <canvas id="pieChart"></canvas>
          </div>
        </div>
    </div>
</div>
@endsection

@section('script')  
  <script>
    $(function() {
    /* ChartJS
     * -------
     * Data and config for chartjs
     */
    'use strict';
    var doughnutPieData = {
      datasets: [{
        data: [<?= $c1; ?>,<?= $c2; ?>, <?= $c3; ?>, <?= $c4; ?>, <?= $c5; ?>],
        backgroundColor: [
          'rgba(255, 99, 132, 0.5)',
          'rgba(54, 162, 235, 0.5)',
          'rgba(255, 206, 86, 0.5)',
          'rgba(75, 192, 192, 0.5)',
          'rgba(153, 102, 255, 0.5)',
          'rgba(255, 159, 64, 0.5)'
        ],
        borderColor: [
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
        ],
      }],
  
      // These labels appear in the legend and in the tooltips when hovering different arcs
      labels: [
        'Cluster 1',
        'Cluster 2',
        'Cluster 3',
        'Cluster 4',
        'Cluster 5',
      ]
    };
    var doughnutPieOptions = {
      responsive: true,
      animation: {
        animateScale: true,
        animateRotate: true
      }
    };
  
  
    if ($("#pieChart").length) {
    var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
    var pieChart = new Chart(pieChartCanvas, {
      type: 'pie',
      data: doughnutPieData,
      options: doughnutPieOptions
    });
  }
  });
  </script>
  </html>
@endsection
  