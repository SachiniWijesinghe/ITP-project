<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        #displaytable {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        #displaytable td, #customers th {
        border: 1px solid #ddd;
        padding: 8px;
        }

        #displaytable tr:nth-child(even){background-color: #f2f2f2;}

        #displaytable tr:hover {background-color: #ddd;}

        #displaytable th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #04AA6D;
        color: white;
        } 
    </style>

    <title>Update Privileges</title>
</head>
<body>
    <h1>Update User Privileges</h1>

    <form action = "/update" method="POST">
         @csrf
        <input type="hidden" name="id" value="{{$data['id']}}">
            <table  id="displaytable" width="100%" cellpadding="1" cellspacing="0">
                <tr>
                    <td class="lbl">Role</td>
                    <td class="lbl">Privileges</td>
                    <td class="lbl">Save</td>
                </tr>
                <tr>
                    <td><input type="text" id="role" name="role" placeholder="Enter Role Name" value="{{$data['role']}}" required></td>
                    <td>
                            <input type="checkbox" id="pv1" name="pv1">
                            <label>Add admin</label><br>
                            <input type="checkbox" id="pv2" name="pv2">
                            <label>Add Admin Privileges</label><br>
                            <input type="checkbox" id="pv3" name="pv3">
                            <label>Add Items</label><br>
                            <input type="checkbox" id="pv4" name="pv4">
                            <label>Add Category</label><br>
                            <input type="checkbox" id="pv5" name="pv5">
                            <label>Delivery Management</label><br><br>
                    </td>
                    <td><button type="submit" class="btn btn-primary">Update</button></td>
                </tr>
            </table> 
    </form>
</body>
</html>