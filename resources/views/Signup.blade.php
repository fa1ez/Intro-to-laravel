<!DOCTYPE html>
<html>
 <head>
  <title>Simple Admin Signup</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
    border:1px solid #ccc;
   }
  </style>
 </head>
 <body>
  <br />
  <div class="container box">
   <h3 align="center">Simple  Admin Signup</h3><br />
   
   <form method="POST" action='{{route('admin.store')}}' enctype="multipart/form-data">
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
   </form>
  </div>
 </body>
</html>