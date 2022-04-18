<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<br><br>
<center><h1>View Pending Delivery Issues</h1><center>
<a href ={{"/viewallissueDelivery"}} class="btn-success">View All deliveries</a> 
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Total Quntity</th>
      <th scope="col">Total Amount</th>
      <th scope="col">Issue Date</th>
      <th scope="col">Delivered Date Date</th>
      <th scope="col">Status</th>
      <th scope="col">Customer ID</th>
      <th scope="col">Order ID</th>
    </tr>
  </thead>
  <tbody>
  
    @foreach($members as $dataa)
    <tr>
    <td scope="col">{{$dataa['id']}}</td>
      <td scope="col">{{$dataa['totalQty']}}</td>
      <td scope="col">{{$dataa['totalAmount']}}</td>
      <td scope="col">{{$dataa['issueDate']}}</td>
      <td scope="col">{{$dataa['deliveredDate']}}</td>
      <td scope="col">{{$dataa['status']}}</td>
      <td scope="col">{{$dataa['idCustomer']}}</td>
      <td scope="col">{{$dataa['idOrder']}}</td>
     
      <td><a href ={{"delete/".$dataa['id']}} class="btn btn-primary" >Delete</a>
          <a href ={{"editpending/".$dataa['id']}} class="btn btn-danger">Edit</a>
          </td>
      </tr>
    @endforeach


     

      
      
    
  </tbody>
</table>


</body>
</html>