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
  <nav align="center">
    <a href="/login" class="btn btn-primary"> Login </a>
    <a href="/"  class="btn btn-primary"> Sign up </a>
    <a href="/chngpassword"  class="btn btn-primary"> Change password </a>
    <a href="/delacc"  class="btn btn-primary"> Delete account </a>
  </nav>
  <br/>
  @yield('content')
 </body>
</html>