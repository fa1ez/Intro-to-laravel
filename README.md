# Intro-to-laravel
Laravel,php and Postman intro. The architecture followed is MVC.

# Installation
After you have installed PHP and Composer, you may create a new Laravel project via the Composer create-project command:
```
composer create-project laravel/laravel example-app
```
or
```
composer global require laravel/installer
laravel new example-app
```
then

```
cd example-app
php artisan serve
```

Configure your database connections in the .env file next. Everything else is default except...
```
DB_HOST=127.0.0.1 //IP address
DB_PORT=3306     // Port number
DB_DATABASE=firstdb //name of table created in xampp
```
Run migrations to actually push tables onto the database
```
php artisan migrate
```

# Directory
The routing of the frontend is done in the **routes** folder, specifically the web.php file. The api.php file contains the routes as well but with the url "*\api\\..".<br>
The "./resources/views" folder contains all the views that have the extension *.blade.php and is basically all the frontend logic.<br>
The app/Http/Controllers contains all the controllers that are classes that have action methods that handle requests. All the functions that are to be returned when routing can be implemented here
 
### Tips for routing
strip_tags($var) : strip all html tags from user url parameters

### Syntax for Route
```
Route::get('/store/{category?}/{item?}', function($category=null, $item=null) {
    ....//the question mark allows default values
})
```
# HTTP
The Http directory contains your controllers, middleware, and form requests. Almost all of the logic to handle requests entering your application will be placed in this directory.

# Model
The Models directory contains all of your Eloquent model classes.

# Views
The views must have naming convention of "abc.blade.php".The views having a common layout must be placed in a seperate layout file with a placeholder defined as below:-
```
<html>
[...]
@yield('content')
[...]
</html>
```

Then in the view files 
```
@extends('layout') //name of the layout file
@section('content')
[...]
@endsection
```
### Note :
Any HTML forms pointing to POST, PUT, PATCH, or DELETE routes that are defined in the web routes file should include a CSRF token field
```
<form method="POST" action="/profile">
    @csrf
    ...
</form>
```

# Controller
```
php artisan make:controller UserController
```
Route to the controller method 
```
Route::get('/user/{id}', [UserController::class, 'show'])->name('myadmin.show');
```
