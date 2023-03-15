@extends('layout')

@section('content')
<nav align="center">
    <a href="/" class="btn btn-primary"> Login </a>
    <a href="/signup"  class="btn btn-primary"> Sign up </a>
  </nav>
  <br/>
<div class="container box">
   <h3 align="center">Signup</h3><br />

   <form method="POST" action='{{route('user.store')}}' enctype="multipart/form-data">
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
      <label>Super Admin</label>
      <div class="form-check">
        <input type="radio" name="is_super_admin" value="1" class="form-check-input">
        <label class="form-check-label" for="is_super_admin">Yes</label>
      </div>
      <div class="form-check">
        <input type="radio" name="is_super_admin" value="0" class="form-check-input" checked>
        <label class="form-check-label" for="is_super_admin">No</label>
      </div>
    </div>
    <div class="form-group">
     <input type="submit" name="signup" class="btn btn-primary" value="signup" />
    </div>
   </form>
</div>
@endsection
