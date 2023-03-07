@extends('layout')

@section('content')
<div class="container box">
   <h3 align="center">Simple  Admin Signup</h3><br />
   
   <form method="POST" action='{{route('myadmin.store')}}' enctype="multipart/form-data">
    @csrf
   <div class="form-group">
     <label>Enter Name</label>
     <input type="name" name="name" class="form-control" />
    </div>
    <div class="form-group">
     <label>Enter Email</label>
     <input type="email" name="email" class="form-control" />
    </div>
    <div class="form-group">
     <label>Enter Password</label>
     <input type="password" name="password" class="form-control" />
    </div>
    <div class="form-group">
     <input type="submit" name="signup" class="btn btn-primary" value="signup" />
</div>
@endsection