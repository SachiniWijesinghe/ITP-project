<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <!-- Google Font: Source Sans Pro -->
  <link esome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">

</head>
<body>

@include('layouts.header')

<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-5">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add Category </h6>
        </div>

        <div class="card-body">
            <form id="Category" action="/categorytinsert" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                
                    
                
                <label>Select Department name</label><br>
                <select  name="idDepartment" > 
                    @foreach($Datad as $row)
                  <option    value="{{$row->idDepartment}}">{{$row->Description}}
                     @endforeach
                    </select><br><br>
                   
                <div class="form-group">
                    <label>Category name</label><br><br>
                    <input type="text" name="c_name" id="c_name"  class="form-control"
                           placeholder="Enter Category Name">
                </div>



                 <br>
                <button type="submit"  name="save_cate" id="save_cate" class="btn btn-primary"> Save Category </button>

            </form>
        </div>
    </div>

</div>






<div class="container-fluid">

    <!-- Data -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">View All Categories

            </h6>
<!--  search  box -->
            <form action="/Category">  
           <input type="search" id="search" name="search" placeholder="search by name"  />
            <input type="submit">
            </form>
            
        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr class="btn-dark">
                        <th>ID</th>
                        <th>Description </th>
                        <th>Department id </th>
                        <th>Edit </th>
                        <th>Delete </th>

                    </tr>
                    </thead>
                    <tbody>
@foreach($Data as $Dvalue)
    <tr>
        <td>
            {{$Dvalue->idCategory}}
        </td>
        <td> 
            {{$Dvalue->Description}}
        </td>
        <td>
            {{$Dvalue->Department_idDepartment}}
        </td>

        <td>
            <a href="click_editc/{{ $Dvalue->idCategory}}"class="btn btn-success">Edit</a>
        </td>
        <td>
            <a href="click_deletec/{{ $Dvalue->idCategory}}"class="btn btn-danger">Delete</a>
        </td>

    </tr>
@endforeach

                    </tbody>
                    <tfoot>
                    <tr class="btn-dark">
                        <th>ID</th>
                        <th>Description </th>
                        <th>Department id </th>
                        <th>Edit </th>
                        <th>Delete </th>


                    </tr>
                    </tfoot>
                </table>

            </div>
        </div>
    </div>

</div>

    

</div>

@include('layouts.footer')
</div>
</body>
</html>
