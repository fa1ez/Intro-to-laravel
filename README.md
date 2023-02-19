# Intro-to-laravel
Laravel,php and Postman intro. The architecture followed is MVC.

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

# Views
The views having a common layout must be placed in a seperate layout file with a placeholder defined as below:-
```

```
