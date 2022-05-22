<?php 

$conn =mysqli_connect('localhost','root',"",'superfashion');
$sql="select Count(idSubcategory) as NO_of_subhcategories,Category_idCategory from subcategory  GROUP BY Category_idCategory ORDER BY Category_idCategory DESC";
$res=mysqli_query($conn,$sql);
while($row= mysqli_fetch_assoc($res)){

    $datapoints[]=array("label"=>$row['Category_idCategory'],"y"=>$row['NO_of_subhcategories']);
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
       <!-- Google Font: Source Sans Pro -->

  <link esome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">






    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   











</head>
<body>
        
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
 <script src="https://canvasjs.com/assets/script/canvasjs.min.js"> </script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
 
@include('layouts.header')


<section class="content" style ="margin-left:20px;margin-right:20px;margin-top:50px;">
    

<select name ="chart" onchange ="myfunction()" class ="form-control" id="chart" style ="width:120px;">
<option value="pie">Pie Chart</option>
<option value="column">Column chart</option>
<option value="bar">Bar chart</option>
<option value="pyramid">pyramid chart</option>
<option value="doughnut">doughnut chart</option>

</select>


 <div class="product-index " alighn="right" style= "margin-top:40px">
 <div  id="chartContainer"  style= "height :auto; width:100%;">
</div>
</div>


</section> 



 










 <script>
function myfunction() 
 {
     var chartType =document.getElementById("chart").value;

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "dark1", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "No of Category for each Department"
	},
	axisY: {
		title: "NO of  SUb categorys"
	},

    axisX: {
		title: "Category id"
	},
    
	data: [{        
		type: chartType,
		showInLegend: true, 
    
		yValueFormatString: "#,##0\"\"",
        indexLabel:"{label} ({y} sub categorise)",
		dataPoints: <?php echo json_encode($datapoints,JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
}
</script> 


<!-- <div id="piechart" style="width: Auto; height: 500px;"></div>


<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Department id', 'No Of categories'],
      
        
        ]);

        var options = {
          title: 'NO of Categories in a  Department'
     
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
      

        chart.draw(data, options);
      }
    </script>
     -->



</div>

 @include('layouts.footer')

    


</body>
</html>