<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- CSS only -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    

     <!--navbar------>
      <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">



     <!---navbar------>
    
    
     <title>edit</title>
</head>

<!------------------------------------------------------dashboard-------------------------------------------------------->

<body  >
   <center> <h1>Edit</h1><center>
    <br>

    <div class="container">
        <div class="text-container">
            <h1>Issue delivery</h1>
        </div>

        <form method="post" action="/edit">
            @csrf
        <div class="mb-3">
        <br>
        <label for="totalAmount" class="form-label">ID:</label>
        <input type="text" name="id"   value="{{$data['id']}}" class="form-control" id="id"  readonly >
        <br>
        <label for="customerID" class="form-label">Customer ID      :</label>
        <input type="text" id="IDcustomer"     value="{{$data['idCustomer']}}"class="form-control" name="IdCustomer" readonly>
        <br>
        <label for="orderID" class="form-label">Order ID      :</label>
        <input type="text" id="IDorder"        value="{{$data['idOrder']}}" class="form-control" name="IdOrder"readonly >
        <br>
        <label for="totalQty" class="form-label">Total Quntity:</label>
        <input type="text" name="TotalQt"       value="{{$data['totalQty']}}"   class="form-control"  id="TatalQty" readonly>
       <br>
        <label for="totalAmount" class="form-label">Total Amount:</label>
        <input type="text" name="TotalAmount"  value="{{$data['totalAmount']}}" class="form-control" id="TatalAmount" readonly>
       <br>
        <label for="issueDate" class="form-label">Issue Date         :</label>
        <input type="date" id="birthday"        value="{{$data['issueDate']}}" class="form-control" name="IssueDate">
       <br>
        <label for="deliveredDate" class="form-label">Delivered Date      :</label>
        <input type="date" id="birthday"        value="{{$data['deliveredDate']}}"class="form-control" name="DeliveredDate">
        <br>
        
        
        <label for="status" class="form-label">status          :</label>
        <select id="stausDD" name="Status"         value="{{$data['status']}}" class="form-control">
        <option value="pending">Pending</option>
        <option value="delivered">Delivered</option>
        </select>
         
        <br>
        <input type="submit" class="btn btn-primary" value="Update">
        <br><br>
        <input type="reset" class="btn btn-warning" value="Reset">

    </div>
         </form>
    </dev>

</body>
</html>