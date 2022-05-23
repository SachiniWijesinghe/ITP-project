<?php 

$conn =mysqli_connect('localhost','root',"",'superfashion');
$sql="select Count(idCategory) as NO_of_categories,Department_idDepartment from category  GROUP BY Department_idDepartment ORDER BY Department_idDepartment DESC";
$res=mysqli_query($conn,$sql);
while($row= mysqli_fetch_assoc($res)){

    $datapoints[]=array("label"=>$row['Department_idDepartment'],"y"=>$row['NO_of_categories']);
}


$sql2="select Count(idSubcategory) as NO_of_subhcategories,Category_idCategory from subcategory  GROUP BY Category_idCategory ORDER BY Category_idCategory DESC";
$res2=mysqli_query($conn,$sql2);
while($row= mysqli_fetch_assoc($res2)){

    $datapoints2[]=array("label"=>$row['Category_idCategory'],"y"=>$row['NO_of_subhcategories']);
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


    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<!-- doccument -->
	<script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>

  <script>




    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   










</head>

<body>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
 <script src="https://canvasjs.com/assets/script/canvasjs.min.js"> </script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
 
@include('layouts.header')
  <div id="invoice">



 <div class= "allcontent"  alighn="center" style="margin-left:20px;margin-right:20px;margin-top:50px;height:auto;">

 
 <center><h1 styel="">Category Report</h1></center>
 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr class="btn-dark">
                        <th>ID</th>
                        <th>Description </th>
                        <th>Edit </th>
                        <th>Delete </th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                  <td>{{$countD}}</td>
					</tr>
					<tr>
                  <td>{{$countC}}</td>
					</tr>
					<tr>
                  <td>{{$countS}}</td>
					</tr>
					</tbody>
                    
                </table>
				</div>
				
				</div>
				<button class="btn btn-success "onclick="generatePDF()">Download as PDF</button>

	




<section class="content" style ="margin-right:20px;margin-top:50px;">
    

<select name ="chart" onchange ="myfunction()" class ="form-control" id="chart" style ="width:120px;">
<option value="">Select type</option>
<option value="pie">Pie Chart</option>
<option value="column">Column chart</option>
<option value="bar">Bar chart</option>
<option value="pyramid">pyramid chart</option>
<option value="doughnut">doughnut chart</option>
</select>



 <div class="product-index " alighn="center" style= "margin-top:40px">
 <div  id="chartContainer"  style= "height :auto; width:100%;">
</div>
</div>



</section> 

<section class="content" style ="margin-right:20px;margin-top:500px;">

<select name ="chart" onchange ="myfunction2()" class ="form-control" id="chart2" style ="width:120px;">
<option value="">Select type</option>
<option value="pie">Pie Chart</option>
<option value="column">Column chart</option>
<option value="bar">Bar chart</option>
<option value="pyramid">pyramid chart</option>
<option value="doughnut">doughnut chart</option>
</select>
<div class="product-index " alighn="center" style= "margin-top:50px;height:400px;">
 <div  id="chartContainer2"  style= " width:50%; align:center; ">
</div>
</div>
</section> 


<br><br>
<br><br>

<br><br>












<script>
    function generatePDF() {
      // Choose the element that our invoice is rendered in.
      const element = document.getElementById('invoice');
      // Choose the element and save the PDF for our user.
      html2pdf().from(element).save();
    }
  </script>











  <script>
 function myfunction() 
 {
     var chartType =document.getElementById("chart").value;

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "dark1", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "No of Category For Each Department"
	},
	axisY: {
		title: "NO of categories"
	},
    axisX: {
		title: "Department Id"
	},
	data: [{        
		type: chartType,
		showInLegend: true, 
    
		yValueFormatString: "#,##0\"\"",
        indexLabel:"{label} ({y} Categories )",
		dataPoints: <?php echo json_encode($datapoints,JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
}
</script> 

<script>

  //subcatescript
function myfunction2() 
 {
     var chartType =document.getElementById("chart2").value;

var chart = new CanvasJS.Chart("chartContainer2", {
	animationEnabled: true,
	theme: "dark1", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "No of SUb Category For Each Category"
	},
	axisY: {
		title: "NO of  SUb Categorys"
	},

    axisX: {
		title: "Category id"
	},
    
	data: [{        
		type: chartType,
		showInLegend: true, 
    
		yValueFormatString: "#,##0\"\"",
        indexLabel:"{label} ({y} sub categorise)",
		dataPoints: <?php echo json_encode($datapoints2,JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
}
</script> 







</div>

 @include('layouts.footer')

    


</body>
</html>