<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


<link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.13/sweetalert2.min.js">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.13/sweetalert2.min.js" integrity="sha512-SR3/Bb4P/qiOdLfDNT5wF3xEP/dqY0XssTwutG/noALJfeaknc3Eos4CS+qdRqOB+GDKxO1tDFYBx5DSZVHFww==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.13/sweetalert2.min.css" integrity="sha512-CJ5goVzT/8VLx0FE2KJwDxA7C6gVMkIGKDx31a84D7P4V3lOVJlGUhC2mEqmMHOFotYv4O0nqAOD0sEzsaLMBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Google Font: Source Sans Pro -->
  <link esome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      </script>
  

<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 
<body>
@include('layouts.header')



  <script
  src="https://code.jquery.com/jquery-3.6.0.slim.js"
  integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY="
  crossorigin="anonymous"></script>
</head>



<div class="container-fluid">



    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-5">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Add Department</h6>
            </div>
          
@if ($errors->any())


@endif

            <div class="card-body">
                <form id="Department" action="/departmentinsert" method="post" >
                    {{csrf_field()}}
                    <div class="form-group">
                    @if(session('message'))
              <div class="alert alert-success">{{session('message')}}</div>
              @endif
                        <label>Department name</label>
                        <input type="text" name="c_name" id="c_name"  class="form-control" placeholder="Enter Department Name">
                        <div  class=" alert-danger">{{$errors->first('c_name')}}
                            
                        </div>
                               
                               

                    </div>




                    <button type="submit"  name="save_cate" id="save_cate" class="btn btn-primary"> Save Department </button>

                </form>
            </div>
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
            <form action="/Department">  
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
                        <th>Edit </th>
                        <th>Delete </th>

                    </tr>
                    </thead>
                    <tbody>
@foreach($Data as $Dvalue)
    <tr>
        <input type="hidden"class="serdelete_val" value="{{$Dvalue->idDepartment}}"/>
        <td>
            {{$Dvalue->idDepartment}}
        </td>
        <td> 
            {{$Dvalue->Description}}
        </td>
        <td>
            <a href="click_edit/{{ $Dvalue->idDepartment}}"class="btn btn-success">Edit</a>
        </td>
        <td>
            <button type="button"class="btn btn-danger delete " data-id ="{{ $Dvalue->idDepartment}}  " data-name ="{{ $Dvalue->Description}}">Delete</button> 
        </td>

    </tr>
@endforeach

                    </tbody>
                    <tfoot>
                    <tr class="btn-dark">
                        <th>ID</th>
                        <th>Description </th>
                        <th>Edit </th>
                        <th>Delete </th>


                    </tr>
                    </tfoot>
                </table>
                <a href="/reportpage">
                <button   name="graph" id="grapgp" class="btn btn-primary"> show graph </button>
                </a>

            </div>
        </div>
    
    </div>

    

</div>
</div>


@include('layouts.footer')
</div>


<script>

      $('#save_cate').on('click',function(){
          console.log("btn click");
          var data=$('#c_name').val();
          console.log(data);


          if(data == ''){
            const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 5000,
  timerProgressBar: true,

  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

Toast.fire({
  icon: 'error',
  title: 'Depatment save Unsuccessfully'
})
} else{
    const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 5000,
  timerProgressBar: true,

  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

Toast.fire({
  icon: 'success',
  title: 'Depatment save successfully'
})

}
        
        
        })
        </script>



<script>

$(document).ready(function () {
  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$('.delete').click(function (e) { 
  e.preventDefault();
 //var idDepartment= $(this).closest("tr").find('.serdelete_val').val();
  var idDepartment=$(this).attr('data-id')
 // var description=$(this).attr('data-name')
 // alert(idDepartment);
 

  swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this imaginary file!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    
    var data ={"_token":$('input[name="csrf-token"]').val(),
      "id":idDepartment,
    };

    $.ajax({
      type: "GET",
      url: 'click_delete/'+idDepartment,
      data: data,
  
      success: function (response) {

        swal(response.states, {
      icon: "success",
    }).then((result)=>{

      location.reload();    

    });
        
      }
    });

  } 
});

 


//
  //


});
  
});

</script>







  <!-- delete notyfication -->
  <!-- <script>
      $('.delete').click(function(){
      
      var deletid=$(this).attr('data-id')
      var description=$(this).attr('data-name')
      
        swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this "+"'" +description+"'"+" Department!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
      window.location="click_delete/" +deletid+""
    swal("Poof! Your Category has been deleted!", {
      icon: "success",
    });
  } else {
    swal("Your "+description+" is safe!");
  }
});
    });
      
      
  </script>   -->











</body>

</html>
