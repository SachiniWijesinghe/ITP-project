@extends('layouts.master')

@section('title')
    Wish List || Super Fashion
@endsection


@section('content')

    <div class="container-fluid bg-3 text-center">

        <div class="row">
            <div class="container pt-5">
                <table class="table table-bordered ">
                    <thead>
                    <tr class="text-al">
                        <th scope="col">Remove</th>
                        <th scope="col">Images</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Unit Price</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($product as $item)

                        <tr>
                            <td><form  action="/RemoveWislist/{{$item->Item_idItem}}" method="get">
                                    {{csrf_field()}}
                                    <button type="submit" class="btn btn-danger">Remove</button>
                                </form></td>
                        <?php
                            if (!empty($item)) {
                                $item_id=$item->Item_idItem;
                            }
                        $itemdetails = DB::select("select * from product where id='$item_id'");
                        foreach ($itemdetails as $itemdetail){
                            $path=$itemdetail->imagePath;
                            $name=$itemdetail->title;
                            $price=$itemdetail->price;
                            echo '
                        <td><img class="w-50" src="'.$path.'" alt=""></td>
                        <td>'.$name.'</td>
                        <td>'.$price.'</td>

                    ';
                        }

                        ?>
                        </tr>
                    @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div><br>

@endsection
