<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- CSS only -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>search order</title>
</head>
<body>
    

<div class="container">
        <div class="text-container">
            <h1>Search Order</h1><br>
            <a href ={{"/viewallissueDelivery"}} class="btn-success">View All deliveries</a>  <!--after issuing order we can see it in all delivery records-->

        </div>

        <form method="get" action="{{ route('web.search')}}">
            @csrf
        <div class="mb-3">
        <br>
        
        <input type="date" name="QorderedDate"  class="form-control" id="orderedDate" required >
        <br>
      
        <br>
        <input type="submit" class="btn btn-primary" value="search">
        
    </div>
         </form>
    </dev>
       
    <br><br>

    


    <center><h1>searched results</h1><center>
  <br>
  @if(isset($members))
  <table class="table">
    <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Date</th>
      <th scope="col">Total Quntity</th>
      <th scope="col">Total Amount</th>
      <th scope="col">Customer ID</th>
      <th scope="col">Cart ID</th>
   </tr>
    </thead>
  <tbody>
     @if(count($members)>0)
     @foreach($members as $dataa)
    <tr>
    <td scope="col">{{$dataa->id  }}    </td>
    <td scope="col">{{$dataa ->date}}</td>
      <td scope="col">{{$dataa->totalQty}}</td>
      <td scope="col">{{$dataa->totalAmount}}</td>
      <td scope="col">{{$dataa->idCustomer}}</td>
      <td scope="col">{{$dataa->idCart}}</td>
      
     
      <td><a href =  "issue/{{$dataa->id}}" class="btn btn-info">ISSUE DELIVERY</a></td>
      </tr>
    @endforeach
    
    @else
     <tr><td> No Results Found</td></tr>
  
   @endif
</tbody>
</table>
@endif




</body>
</html>