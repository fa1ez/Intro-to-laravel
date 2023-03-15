@extends('layout')

@section('content')
<center>
<button type="button" onclick="window.location.href='{{route('user.logout')}}'" class="btn btn-default btn-sm">
    <span class="glyphicon glyphicon-log-out"></span> Log out
</button>
</center>
<br/>
<div class="container box">
   <h3 align="center">User Delete for admin only</h3><br />
   
   <form method="POST" action='{{route('user.delete')}}' enctype="multipart/form-data">
    @csrf
   <div class="form-group">
     <label>Name</label>
     <input type="name" name="name" class="form-control" />
    </div>
    <div class="form-group">
     <label>Email</label>
     <input type="email" name="email" class="form-control" />
    </div>
    <div class="form-group">
     <input type="submit" name="Delete" class="btn btn-primary" value="Delete" />
</div>
@endsection