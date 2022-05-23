<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
       
        h1,h2,h3,h4,h5,h6{
            margin: 0;
            padding: 0;
        }
        p{
            margin: 0;
            padding: 0;
        }
        .container{
            width: 105%;
            margin-right: auto;
            margin-left: auto;
        }
        .brand-section{
           background-color: #0d1033;
           padding: 10px 40px;
        }
        .logo{
            width: 50%;
        }

        .row{
            display: flex;
            flex-wrap: wrap;
        }
        .col-6{
            width: 50%;
            flex: 0 0 auto;
        }
        .text-white{
            color: #fff;
        }
    
        .body-section{
            padding: 16px;
            border: 1px solid gray;
        }
        .heading{
            font-size: 20px;
            margin-bottom: 08px;
        }
        .sub-heading{
            color: #262626;
            margin-bottom: 05px;
        }
        table{
            background-color: #fff;
            width: auto;
            border-collapse: collapse;
        }
        table thead tr{
            border: 1px solid #111;
            background-color: #f2f2f2;
        }
        table td {
            vertical-align: middle !important;
            text-align: left;
        }
        table th, table td {
            padding-top: 08px;
            padding-bottom: 08px;
        }
        .table-bordered{
            box-shadow: 0px 0px 8px 0.5px gray;
        }
        .table-bordered td, .table-bordered th {
            border: 1px solid #dee2e6;
        }
        .text-right{
            text-align: end;
        }
        .w-20{
            width: 20%;
        }
        .float-right{
            float: right;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="brand-section">
            <div class="row">
                <div class="col-6">
                    <h1 class="text-white">Monthly Feedback Report</h1>
                </div>
            </div>
        </div>
        
        <div class="body-section">
            <h3 class="heading" style="text-align: center;">Feedback List</h3>
            <br>
            <table class="table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th class="w-20">Name</th>
                        <th class="w-20">Email</th>
                        <th class="w-20">Overall Experience</th>
                        <th class="w-20">Timely Response</th>
                        <th class="w-20">Our Support</th>
                        <th class="w-20">Overall Satisfaction</th>
                        <th class="w-20">Comments</th>
                        
                    </tr>
                </thead>
                <tbody>
                                @foreach($data as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->Name }}</td>
                                        <td>{{ $item->Email }}</td>
                                        <td>{{ $item->Overall_Experience }}</td>
                                        <td>{{ $item->Timely_Response }}</td>
                                        <td>{{ $item->Our_Support }}</td>
                                        <td>{{ $item->Overall_Satisfaction }}</td>
                                        <td>{{ $item->Comment }}</td>
 
                                @endforeach
                                </tbody>
            </table>
            <br>
        
            <p>&copy; 2022 All Rights Reserved. 
                <a href="#" class="float-right">www.superfashion.com</a>
            </p>
            
    </div>      
</body>
</html>
