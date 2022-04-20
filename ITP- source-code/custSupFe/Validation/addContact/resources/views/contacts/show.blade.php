@extends('contacts.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Title : {{ $contacts->Title }}</h5>
        <p class="card-text">Address : {{ $contacts->Address }}</p>
        <p class="card-text">Telephone : {{ $contacts->Telephone }}</p>
        <p class="card-text">Email : {{ $contacts->Email }}</p>
  </div>
       
    </hr>
  
  </div>
</div>