@extends('layouts.master')

@section('title')
    Cart || Super Fashion
@endsection


@section('content')
    <style>
        .qty_ins {
            width: 300px;
            margin: 0 auto;
            text-align: center;
            padding-top: 50px;
        }

        .value-button {
            display: inline-block;
            border: 1px solid #ddd;
            margin: 0px;
            width: 40px;
            height: 50px;
            text-align: center;
            vertical-align: middle;
            padding: 11px 0;
            background: #eee;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .value-button:hover {
            cursor: pointer;
        }

        form #decrease {
            margin-right: -4px;
            border-radius: 8px 0 0 8px;
        }

        form #increase {
            margin-left: -4px;
            border-radius: 0 8px 8px 0;
        }

        form #input-wrap {
            margin: 0px;
            padding: 0px;
        }

        input#number {
            text-align: center;
            border: none;
            border-top: 1px solid #ddd;
            border-bottom: 1px solid #ddd;
            margin: 0px;
            width: 40px;
            height: 45px;
        }

        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
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
                        <th scope="col">Quantity</th>
                        <th scope="col">Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($product as $item)
                        <tr>
                            <td><input type="button" class="btn btn-danger" value="Remove"></td>
                            <?php
                            if (!empty($item)) {
                                $item_id=$item['item_id'];
                            }
                            $itemdetails = DB::select("select * from product where id='$item_id'");
                            foreach ($itemdetails as $itemdetail){
                                $path=$itemdetail->imagePath;
                                $name=$itemdetail->title;
                                echo '<td><img class="w-50" src="'.$path.'" alt=""></td>
                            <td>'.$name.'</td>';
                            }

                            ?>

                            <td>{{number_format($item['cost'], 2, '.', ',')}}</td>
                            <td>
                                <div class="qty_ins">
                                    <form  action="/RemoveCart/{{$item['item_id']}}" method="get">
                                        {{csrf_field()}}
                                        <button type="submit" class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value">-</button>
                                    </form>
                                    <input type="number" id="number" value="{{$item['qty']}}" />
                                    <form action="/addToCart/{{$item['item_id']}}" method="get">
                                        {{csrf_field()}}
                                        <button type="submit" class="value-button" id="increase" onclick="increaseValue()" value="Increase Value">+</button>
                                    </form>
                                </div>
                               </td>
{{--                            <td>{{$item['qty']}}</td>--}}
                            <td>{{number_format($item['qty'] * $item['cost'], 2, '.', ',')}}</td>
                        </tr>
                    @endforeach
{{--                    <tr>--}}
{{--                        <td></td>--}}
{{--                        <td><img class="w-50" src="https://www.superfashion.lk/storage/ItemDisplay/172/refZzmhP7fpYHzPJPAYSkIS9B2EDa3gGcf5lW9np.jpg" alt=""></td>--}}
{{--                        <td>Ladies Blouse</td>--}}
{{--                        <td>3550.00</td>--}}
{{--                        <td>3</td>--}}
{{--                        <td><button type="button" class="btn btn-warning">Add To Cart</button></td>--}}



{{--                    <tr>--}}
{{--                        <td ></td>--}}
{{--                        <td><img class="w-50" src="https://www.superfashion.lk/storage/ItemDisplay/271/KqLrZSWWhK9lOqSnKcMkTN9lmrcitcpvlSdlpFwX.jpg" alt=""></td>--}}
{{--                        <td>Thornton</td>--}}
{{--                        <td>@fat</td>--}}
{{--                        <td>@mdo</td>--}}
{{--                        <td><button type="button" class="btn btn-warning">Add To Cart</button></td>--}}
{{--                    </tr>--}}

                    </tbody>
                </table>
{{--                @foreach($Tot_amount as $item)--}}
                    <span style="color: red">Total Amount : Rs. {{number_format($Tot_amount, 2, '.', ',')}}</span>
{{--                @endforeach--}}
            </div>
        </div>
    </div><br>
    <script>
        function increaseValue() {
            var value = parseInt(document.getElementById('number').value, 10);
            value = isNaN(value) ? 0 : value;
            value++;
            document.getElementById('number').value = value;
        }

        function decreaseValue() {
            var value = parseInt(document.getElementById('number').value, 10);
            if (value==1){
                document.getElementById('number').value = value;
            }else{
                value = isNaN(value) ? 0 : value;
                value < 1 ? value = 1 : '';
                value--;
                document.getElementById('number').value = value;
            }

        }
    </script>
@endsection
