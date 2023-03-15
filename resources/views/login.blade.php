@extends('layout')

@section('content')
<nav align="center">
    <a href="/" class="btn btn-primary"> Login </a>
    <a href="/signup"  class="btn btn-primary"> Sign up </a>
  </nav>
  <br/>
<div class="container box">
   <h3 align="center">Login</h3><br />
   
   <form method="POST" action='{{route('user.home')}}' enctype="multipart/form-data">
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
     <input type="submit" name="login" class="btn btn-primary" value="login" />
</div>
@endsection