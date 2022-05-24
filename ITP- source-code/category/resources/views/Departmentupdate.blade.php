<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

 

    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.13/sweetalert2.min.js">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.13/sweetalert2.min.js" integrity="sha512-SR3/Bb4P/qiOdLfDNT5wF3xEP/dqY0XssTwutG/noALJfeaknc3Eos4CS+qdRqOB+GDKxO1tDFYBx5DSZVHFww==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.13/sweetalert2.min.css" integrity="sha512-CJ5goVzT/8VLx0FE2KJwDxA7C6gVMkIGKDx31a84D7P4V3lOVJlGUhC2mEqmMHOFotYv4O0nqAOD0sEzsaLMBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

 
    <script
  src="https://code.jquery.com/jquery-3.6.0.slim.js"
  integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY="
  crossorigin="anonymous"></script>
  <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>

</head>
<body>
<div class="container-fluid">


<div class="container-fluid">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
                    <input type="text" name="Description" value="{{$data['Description']}}" id="Description"  class="form-control" required>
               
                
                        <br>
                        <br>
                <button type="submit"   class="btn btn-primary update"> Update </button>

            </form>
        </div>
    </div>

</div>

<script>


  </script>


</div>
    
</body>
</html>