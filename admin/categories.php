<div class="w-full lg:w-1/2 p-4">
  <div class="bg-white rounded-lg shadow-lg p-6">
    <h2 class="text-lg font-bold mb-4">Top Products</h2>
    <div class="border-b border-gray-200 mb-4"></div>
    <ul class="list-none">
      <?php
        $products = array(
          array('name' => 'Product A', 'sales' => 150),
          array('name' => 'Product B', 'sales' => 120),
          array('name' => 'Product C', 'sales' => 100),
          array('name' => 'Product D', 'sales' => 80),
          array('name' => 'Product E', 'sales' => 60),
        );
        foreach ($products as $product) {
          echo '<li class="flex justify-between items-center mb-2">';
          echo '<div class="text-gray-600">'.$product['name'].'</div>';
          echo '<div class="text-green-500 font-bold">'.$product['sales'].'</div>';
          echo '</li>';
        }
      ?>
    </ul>
  </div>
</div>
<div class="w-full lg:w-1/2 p-4">
  <div class="bg-white rounded-lg shadow-lg p-6">
    <h2 class="text-lg font-bold mb-4">Sales Graph</h2>
    <div class="border-b border-gray-200 mb-4"></div>
    <canvas id="sales-chart" width="400" height="200"></canvas>
  </div>
</div>
<script>
  var ctx = document.getElementById('sales-chart').getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
      datasets: [{
        label: 'Sales',
        data: [10, 15, 20, 25, 30, 35],
        backgroundColor: 'rgba(0, 128, 0, 0.2)',
        borderColor: 'rgba(0, 128, 0, 1)',
        borderWidth: 1,
        pointRadius: 3,
        pointBackgroundColor: 'rgba(0, 128, 0, 1)',
        pointBorderColor: 'rgba(0, 128, 0, 1)',
        pointHoverRadius: 5,
        pointHoverBackgroundColor: 'rgba(0, 128, 0, 1)',
        pointHoverBorderColor: 'rgba(0, 128, 0, 1)',
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });
