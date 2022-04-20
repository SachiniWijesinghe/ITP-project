<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- CSS only -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>issue delivery</title>




</head>

<body>

<div class="container">
        <div class="text-container">
            <h1>{{$title}}</h1>
        </div>

        <form method="post" action="/SaveIssueDeliveryFromSearchFile">
            @csrf
        <div class="mb-3">
        <br>
        
        <label for="customerID" class="form-label">Customer ID      :</label>
        <input type="text" id="IDcustomer"    value="{{$info->idCustomer}}"class="form-control" name="IdCustomer" readonly>
        <br>
        <label for="orderID" class="form-label">Order ID      :</label>
        <input type="text" id="IDorder"        value="{{$info->id}}" class="form-control" name="IdOrder"readonly >
        <br>
        <label for="totalQty" class="form-label">Total Quntity:</label>
        <input type="text" name="TotalQt"       value="{{$info->totalQty}}"  class="form-control"  id="TatalQty" readonly>
       <br>
        <label for="totalAmount" class="form-label">Total Amount:</label>
        <input type="text" name="TotalAmount"   value="{{$info->totalAmount}}" class="form-control" id="TatalAmount" readonly>
       <br>
        <label for="issueDate" class="form-label">Issue Date         :</label>
        <input type="date" id="birthday"        class="form-control" name="IssueDate" required>
       <br>
        <label for="deliveredDate" class="form-label">Delivered Date      :</label>
        <input type="date" id="birthday"        class="form-control" name="DeliveredDate" required>
        <br>
        
        
        <label for="status" class="form-label">status          :</label>
        <select id="stausDD" name="Status"          class="form-control">
        <option value="pending">Pending</option>
        <option value="delivered">Delivered</option>
        </select>
         
        <br>
        <input type="submit" class="btn btn-primary" value="Issue">
        <br><br>
        

    </div>
         </form>
    </dev>
    </body>
</html>