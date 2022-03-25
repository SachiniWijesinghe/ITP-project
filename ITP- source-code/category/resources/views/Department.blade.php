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

<div class="container-fluid">


    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-5">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Add Department</h6>
            </div>

            <div class="card-body">
                <form id="Department" action="/department" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Department name</label>
                        <input type="text" name="c_name" id="c_name"  class="form-control"
                               placeholder="Enter Department Name">
                    </div>




                    <button type="submit"  name="save_cate" id="save_cate" class="btn btn-primary"> Save Category </button>

                </form>
            </div>
        </div>

    </div>





</div>

<div class="modal fade" id="update_cate_details" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Category Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="database/post.php" method="POST" enctype="multipart/form-data">

                    <div class="modal-body">

                            <input type="text" id="cate_id" name="cate_id" hidden>
                            <div class="form-group">
                                <label>Category Name</label>
                                <input type="text" name="u_c_name" id="u_c_name"  class="form-control"
                                       placeholder="Enter Category Name">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea id="u_des" name="u_des" rows="4" cols="50" class="form-control">
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="file" id="file" class="form-control">
                            </div>





                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="update_category" id="update_category" class="btn btn-primary">Update Category</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">View All Categories

            </h6>
        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr class="btn-dark">
                        <th>ID</th>
                        <th>Description </th>

                    </tr>
                    </thead>
                    <tbody>
@foreach($Dvalues as $Dvalue)
    <tr>
        <td>
            {{$Dvalue->idDepartment}}
        </td>
        <td>
            {{$Dvalue->Description}}
        </td>

    </tr>
@endforeach

                    </tbody>
                    <tfoot>
                    <tr class="btn-dark">
                        <th>ID</th>
                        <th>Description </th>

                    </tr>
                    </tfoot>
                </table>

            </div>
        </div>
    </div>

</div>
</body>
</html>
