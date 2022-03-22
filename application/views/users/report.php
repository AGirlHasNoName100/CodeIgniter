<!DOCTYPE html>
<html>
<head>
	<title>HighChart</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
	<script src="https://code.highcharts.com/highcharts.js"></script>
</head>
<body >
  
<script type="text/javascript">
  
$(function () { 
  
    var data_clicks = <?php echo $clicks; ?>;
    var data_view = <?php echo $view; ?>;
  //  var data_viewer = <?php // echo $viewer; ?>;
  
    $('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Monthly Bookings '
        },
        xAxis: {
            categories: ['Apr','May', 'Jun', 'Jul','Aug', 'Sep', 'Oct',' Nov','Dec']
        },
        yAxis: {
            title: {
                text: 'Number of Bookings'
            }
        },
        series: [{
            name: 'Aupair',
            data: data_clicks
        },
        {
            name: 'Full-Time',
            data: data_view
        }]
    });
});
  
</script>
  
<div class="container">
	<br/>
	<h2 class="text-center" style="color: white;">MotherGoose Charts</h2>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Monthly Bookings</div>
                <div class="panel-body">
                    <div id="container"></div>
                </div>
            </div>
        </div>
    </div>
</div>
  
</body>
</html>