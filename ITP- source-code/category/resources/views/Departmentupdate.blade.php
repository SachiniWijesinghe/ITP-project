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
<div class="container-fluid">


<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-5">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add Department</h6>
        </div>

        <div class="card-body">
            <form id="Departmentupdate" action="/Depatup" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                
                <div class="form-group">
                    
                    <input type="hidden" name="idDepartment"  value="{{$data['idDepartment']}}"  id="idDepartment"  class="form-control">
                    <label>Department name</label>
                    <input type="text" name="Description" value="{{$data['Description']}}" id="Description"  class="form-control">

                <button type="submit"   class="btn btn-primary"> Update </button>

            </form>
        </div>
    </div>

</div>





</div>
    
</body>
</html>