<html>
  <head>
    <title>Chart</title>
    <link rel="stylesheet" href="{{url('./bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('./assets/vendors/themify-icons/css/themify-icons.css')}}">
  </head>
    <body>
      <div class="col-md-4 col-sm-6 col-xs-12 " style="margin-top:100px;"><nav>
      <a href="/directeur" class="btn btn-primary" style="font-size:2em"><i class="ti-arrow-left"></i></a>
      </nav></div>
    <div class="container">
      
      <div class="row">
        <div class="col-md-12">
          <h1 class="font-weight-bold">My Chart Title</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div id="curve_chart" style="width: 100%; height: 500px"></div>
        </div>
      </div>
    </div>
    </body>
    
    
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
  
      function drawChart() {
    var data = google.visualization.arrayToDataTable([  ['Name', 'Profit', 'Expense'],
    <?php echo $data;?>
    ['Alice', 1000, 800],
    ['Bob', 2000, 1200],
    ['Charlie', 3000, 1500],
   
  ]);
  
  
        var options = {
          title: 'Profit and Expense by Moniteur',
          curveType: 'function',
          legend: { position: 'bottom' }
        };
  
        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
  
        chart.draw(data, options);
      }
    </script>
  
  
    <div id="curve_chart" style="width: 900px; height: 500px"></div>
  
  </html>
