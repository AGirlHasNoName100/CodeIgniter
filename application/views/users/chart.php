<!DOCTYPE html>
<html>
<head>
	<title>HighChart</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
	<script src="https://code.highcharts.com/highcharts.js"></script>
</head>
<body >
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
 <b style="font-size: 30px;"> Reports</b>
<a class="btn btn-primary" style="right:100%;" href="<?php echo base_url(); ?>users/index">Go Back</a>
</nav>
  
<script type="text/javascript">
  
$(function () { 
  
    var data_click = <?php echo $click; ?>;
  //  var data_viewer = <?php // echo $viewer; ?>;
  
    $('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Monthly Interview Revenue'
        },
        xAxis: {
            categories: ['Oct',' Nov','Dec','Jan','Feb','Mar', 'Apr','May', 'Jun', 'Jul','Aug', 'Sep']
        },
        yAxis: {
            title: {
                text: 'Amount'
            }
        },
        series: [{
            name: 'amount per month',
            data: data_click
        }]
    });
});
  
</script>
<script type="text/javascript">
  
$(function () { 
  
    var data_clicks = <?php echo $clicks; ?>;
    var data_view = <?php echo $view; ?>;
  //  var data_viewer = <?php // echo $viewer; ?>;
  
    $('#container1').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Monthly Bookings '
        },
        xAxis: {
            categories: [' Nov','Dec','Jan','Feb','Mar','Apr','May', 'Jun', 'Jul','Aug', 'Sep','Oct']
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
<script type="text/javascript">
  
$(function () { 
  
    var data_clicks = <?php echo $fulltimes; ?>;
    var data_view = <?php echo $aupairs; ?>;
  //  var data_viewer = <?php // echo $fulltime; ?>;
  
    $('#container2').highcharts({
        chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
            type: 'line'
        },
        title: {
            text: 'Aupair vs Full-time perfomance in bookings '
        },
        tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: 'bookings'
        }
    },
    plotOptions: {
        line: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
            }
        }
    },
    xAxis: {
            categories: ['Oct',' Nov','Dec','Jan','Feb','Mar','Apr','May', 'Jun', 'Jul','Aug', 'Sep', ]
        },
        yAxis: {
            title: {
                text: 'Number of Bookings'
            }
        },
        series: [{
            name: 'Fulltime',
            data:data_clicks
        },
        {
            name: 'Aupair',
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
                <div class="panel-heading">Monthly Revenue</div>
                <div class="panel-body">
                    <div id="container"></div>
                </div>
            </div>
        </div>
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Monthly Bookings</div>
                <div class="panel-body">
                    <div id="container1"></div>
                </div>
            </div>
        </div>
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Aupair VS Full-time perfomance</div>
                <div class="panel-body">
                    <div id="container2"></div>
                </div>
            </div>
        </div>
    </div>
</div>
  
</body>
</html>