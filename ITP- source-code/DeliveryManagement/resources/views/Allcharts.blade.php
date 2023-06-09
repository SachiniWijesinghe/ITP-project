<?php
         $conn =mysqli_connect('localhost','root',"",'superfashion');
         $sql="select issueDate, Count(status) as TotalDelivered from issue_deliveries where status like '%pending%'  GROUP BY issueDate ";
         $res=mysqli_query($conn,$sql);                                                 
         while($row= mysqli_fetch_assoc($res)){
         
             $datapoints[]=array("label"=>$row['issueDate'],"y"=>$row['TotalDelivered']);
         }


       
?>


<!DOCTYPE html>
<html>
<head>

<!------------------grt a pdf--------------------------->

<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>HTML-to-PDF Example</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>

    <script>
    function generatePDF() {
      // Choose the element that our invoice is rendered in.
      const element = document.getElementById('invoice');
      // Choose the element and save the PDF for our user.
      html2pdf().from(element).save();
    }
    </script>
<!----------------------------------------------------->



  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chart view</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">


<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
       <!-- Google Font: Source Sans Pro -->

  
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   
</head>






  
<body>
 <!-----------------------------------------get pdf--------------------------------------------------->
 <button onclick="generatePDF()">Download as PDF</button>
<div id="invoice">
<center><h1>Report</h1></center>
<hr>
   
    <!------------------------------------------------------------------------------------------------------>



 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
 <script src="https://canvasjs.com/assets/script/canvasjs.min.js"> </script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>




 <section class="content" style ="margin-left:50px;margin-right:50px;margin-top:50px;">
    <select name ="chart" onchange ="myfunction()" class ="form-control" id="chart" style ="width:120px;">
    <option value="pie">Pie Chart</option>
    <option value="column">Column chart</option>
    <option value="bar">Bar chart</option>
    <option value="pyramid">pyramid chart</option>
    <option value="doughnut">doughnut chart</option>
    </select>
    
    <div class="product-index " alighn="right" style= "margin-top:40px">
    <div  id="chartContainer"  style= "height :400px; width:100%;">
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
		text: "No of Pending Deliveries According to the Date"
	},
	axisY: {
		title: "NO of Pendings"
	},
    axisX: {
		title: "Date"
	},
	data: [{        
		type: chartType,
		showInLegend: true, 
    
		yValueFormatString: "#,##0\"\"",
        indexLabel:"{label} ({y} CountX )",
		dataPoints: <?php echo json_encode($datapoints,JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
}
</script> 


</div>

</body> 

 

</html>








