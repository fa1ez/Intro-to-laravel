@extends('layout')

@section('content')
<div class="container box">
   <h3 align="center">Simple  Admin Signup</h3><br />
   
   <form method="POST" action='{{route('myadmin.delete')}}' enctype="multipart/form-data">
    @csrf
   <div class="form-group">
     <label>Enter Name</label>
     <input type="name" name="name" class="form-control" />
    </div>
    <div class="form-group">
     <label>Enter Password</label>
     <input type="password" name="password" class="form-control" />
    </div>
    <div class="form-group">
     <input type="submit" name="Delete" class="btn btn-primary" value="Delete" />
</div>
@endsection