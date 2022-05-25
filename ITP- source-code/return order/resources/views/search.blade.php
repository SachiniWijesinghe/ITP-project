@extends('returnordertable')


@section('content-header')



<table class="table table-bordered">
                  
                  <tr>
                   
                  <th>No</th>0
                    <th>Item Code</th>
                    <th>Item Name</th>
                    <th>Reason to Return</th>
                    <th>Quntity</th>
                    <th>Price</th>
                  
                  </tr>
             
         
         
         
         
                  @foreach($RtOrder as $RtOrder)
               <tr>
              <td>{{$RtOrder->id}}</td>
              <td>{{$RtOrder->ReturnId}}</td>
              <td>{{$RtOrder->ItemName}}</td>
              <td>{{$RtOrder->Reason}}</td>
              <td>{{$RtOrder->Quntity->name}}</td>
              <td>{{$RtOrder->Price}}</td>
              
             
             
              <td><a href="/delete/{{$RtOrder->id}}"><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
              
              
              <a href="/update/{{$RtOrder->id}}"><button type="button" class="btn btn-info"><i class="fas fa-edit"></i></button></a></td>
               </tr>


              

               @endforeach
                  
                  


              </tr>

               
              </table>

@endsection