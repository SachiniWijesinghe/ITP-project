<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
     <!-- CSS only -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


<!----------------------------------------------------------------------Pie Chart--------------------------------->

<!--<script type="text/javascript">
      drawChart();
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Date', 'Total Sold Items'],
         //methana  athule meka oni $    chartData
          
        ]);

        var options = {
          title: 'Total Sold Items In Last Week',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      
    
    }
    </script>
    <script> drawChart(); </script>


-->

<!---------------------------------------------------------------------------------------------------------------->

    </head>
<body>
    
<div class="container">
        <div class="text-container">
            <center><h2>Report</h2></center>
           

        </div>

       <!--    <form method="get" action="{{ route('web.search')}}">         -->
       <form method="get" action="{{ route('web.searchDayForReport')}}"> 
            @csrf
        <div class="mb-3">                       <!-- class="form-control"-->
        <br>
        
        <input type="date" name="date"  id="orderedDate" size="20" required >
        <input type="submit" class="btn btn-primary" value="search">
        
        </div>
         </form>
    </dev>
       
    <br>
    @if(isset($values))
    <h4>Report for the date :{{$searchedvalue}}</h4>
    <br>
    <h5>Total Orders For The Day      : {{$values}}</h5>
    
    <h5>Total Sold Items For The Day : {{$totalQTy}}</h5>
    
    <h5>Total Amount                 :  RS. {{$totalAmount}}.00</h5>

    <center><h3>Previous 6 days results</h3></center><br>
    
    <h5>Report for the date :{{$YESTERDAYIS}}</h5>
    <h6>Total Orders For The Day      : {{$CounntPre1}}</h6>
    
    <h6>Total Sold Items For The Day : {{$totalQtPre1}}</h6>
    
    <h6>Total Amount                 :  RS. {{$AmountPre1}}.00</h6>
    <br>


    <h5>For the date :{{$previousday2}}</h5>
    <h6>Total Orders For The Day      : {{$CounntPre2}}</h>
    
    <h6>Total Sold Items For The Day : {{$totalQtPre2}}</h6>
    
    <h6>Total Amount                 :  RS. {{$AmountPre2}}.00</h6>
    <br>


    <h5>>For the date :{{$previousday3}}</h5>
    <br>
    <h6>Total Orders For The Day      : {{$CounntPre3}}</h6>
    
    <h6>Total Sold Items For The Day : {{$totalQtPre3}}</h6>
    
    <h6>Total Amount                 :  RS. {{$AmountPre3}}.00</h6>
    <br>


    <h5>For the date :{{$previousday4}}</h5>
    <h6>Total Orders For The Day      : {{$CounntPre4}}</h6>
    
    <h6>Total Sold Items For The Day : {{$totalQtPre4}}</h6>
    
    <h6>Total Amount                 :  RS. {{$AmountPre4}}.00</h6>
    <br>


    <h5>For the date :{{$previousday5}}</h5>
    
    <h6>Total Orders For The Day      : {{$CounntPre5}}</h6>
    
    <h6>Total Sold Items For The Day : {{$totalQtPre5}}</h6>
    
    <h6>Total Amount                 :  RS. {{$AmountPre5}}.00</h6>
    <br>


    <h5>>For the date :{{$previousday6}}</h5>
    
    <h6>Total Orders For The Day      : {{$CounntPre6}}</h6>
    
    <h6>Total Sold Items For The Day : {{$totalQtPre6}}</h6>
    
    <h6>Total Amount                 :  RS. {{$AmountPre6}}.00</h6>
    <br>
<center>
    <h3>Last week Total Orders:{{$T0tal7daysAllOrders}}</h3>
    <h3>Last week Total Sold Items:{{$T0tal7daystotalQty}}</h3>
    <h3>Last week Income:Rs.{{$T0tal7daysAmount}}.00</h3>
    <br>
<!---------------------------------------------------------------Pie Chart----------------------------------->

<!---<div id="piechart_3d" style="width: 900px; height: 500px;"></div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  -------->
    
<!------------------------------------------------------------------------------------------------------------>

</center>
    @else
     <tr><td> No Results Found</td></tr>
  
    @endif


</body>
</html>