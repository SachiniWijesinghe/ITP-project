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
<div class="container-fluid">


<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-5">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Update Category</h6>
        </div>

        <div class="card-body">
            <form id="subCategoryupdate" action="/subCatupd" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                
                <div class="form-group">
                    
                    <input type="hidden" name="idSubcategory"  value="{{$Data1['idSubcategory']}}"  id="idSubcategory"  class="form-control">
                   
                <label>Select Sub category name</label><br>
                <select  name="idCategory" > 
                    @foreach($Datad1 as $row)
                  <option    value="{{$row->idCategory}}">{{$row->Description}}
                     @endforeach
                    </select><br><br>
                 
                    <label>Department name</label>
                    <input type="text" name="Description" value="{{$Data1['Description']}}" id="Description"  class="form-control">

                <button type="submit"   class="btn btn-primary"> Update </button>

            </form>
        </div>
    </div>

</div>





</div>
    
</body>
</html>