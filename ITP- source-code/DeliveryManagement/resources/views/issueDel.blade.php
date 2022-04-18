<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="text-container">
            <h1>Issue delivery</h1>
        </div>

        <form method="post" action="/SaveIssueDelivery">
            {{csrf_field()}}
        <div class="mb-3">
        <label for="totalQty" class="form-label">Total Quntity:</label>
        <input type="text" name="TotalQt" class="form-control"  id="TatalQty" placeholder="tatal Quntity">
       <br>
        <label for="totalAmount" class="form-label">Total Amount:</label>
        <input type="text" name="TotalAmount" class="form-control" id="TatalAmount" placeholder="tatal Amount">
       <br>
        <label for="issueDate" class="form-label">Issue Date         :</label>
        <input type="date" id="birthday" class="form-control" name="IssueDate">
       <br>
        <label for="deliveredDate" class="form-label">Delivered Date      :</label>
        <input type="date" id="birthday" class="form-control" name="DeliveredDate">
        <br>
        
        <label for="customerID" class="form-label">Customer ID      :</label>
        <input type="text" id="IDcustomer" class="form-control" name="IdCustomer">
        <br>
        <label for="orderID" class="form-label">Order ID      :</label>
        <input type="text" id="IDorder" class="form-control" name="IdOrder">
        <br>
        <label for="status" class="form-label">status          :</label>
        <select id="stausDD" name="Status"   class="form-control">
        <option value="pending">Pending</option>
        <option value="delivered">Delivered</option>
        </select>
         
        <br>
        <input type="submit" class="btn btn-primary" value="Submit">
        <br><br>
        <input type="reset" class="btn btn-warning" value="Reset">

    </div>
         </form>
    </dev>

</body>
</html>