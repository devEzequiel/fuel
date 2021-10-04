## A Laravel API

## Requirements

As it is build on the Laravel framework, it has a few system requirements.

- PHP >= 7.3
- MySql >= 5.7
- Node
- Composer
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension
- Ctype PHP Extension
- JSON PHP Extension
- BCMath PHP Extension

You can check all the laravel related dependecies
[here](https://laravel.com/docs/8.x/deployment#server-requirements)

## Running the API

Clone the repository and setup

`$ git clone https://github.com/devEzequiel/fuel.git` <br />
`$ cd fuel`

Then, create the database and add them to the `.env` file.

```
DB_DATABASE=your_db_name
DB_USERNAME=your_db_user
DB_PASSWORD=your_password
```

Then install, migrate, seed, all that jazz:

1. `$ composer install`
2. `$ php artisan migrate:fresh --seed`
3. `$ php artisan key:generate`
4. `$ npm install`
5. `$ npm run dev`
6. `$ php artisan serve`

The API will be running on `localhost:8000`

## API Endpoints and Routes

Laravel follows the Model View Controller (MVC) pattern I have created models associated with each resource. You can
check in the **routes/api.php** file for all the routes that map to controllers in order to send out data that make
requests to our Website.

```
+--------+----------+------------------------+------------------+------------------------------------------------------------------------+---------------------------------------------+
| Domain | Method   | URI                    | Name             | Action                                                                 | Middleware                                  |
+--------+----------+------------------------+------------------+------------------------------------------------------------------------+---------------------------------------------+
|        | GET|HEAD | /                      |                  | Closure                                                                | web                                         |
|        | GET|HEAD | api/user               |                  | Closure                                                                | api                                         |
|        |          |                        |                  |                                                                        | App\Http\Middleware\Authenticate:sanctum    |
|        | GET|HEAD | driver                 | drivers.list     | App\Http\Controllers\Driver\DriverController@index                     | web                                         |
|        |          |                        |                  |                                                                        | App\Http\Middleware\Authenticate            |
|        | POST     | driver                 | drivers.store    | App\Http\Controllers\Driver\DriverController@store                     | web                                         |
|        |          |                        |                  |                                                                        | App\Http\Middleware\Authenticate            |
|        | GET|HEAD | driver/create          | drivers.create   | App\Http\Controllers\Driver\DriverController@create                    | web                                         |
|        |          |                        |                  |                                                                        | App\Http\Middleware\Authenticate            |
|        | GET|HEAD | driver/delete/{id}     | drivers.delete   | App\Http\Controllers\Driver\DriverController@destroy                   | web                                         |
|        |          |                        |                  |                                                                        | App\Http\Middleware\Authenticate            |
|        | PUT      | driver/{id}            | drivers.update   | App\Http\Controllers\Driver\DriverController@update                    | web                                         |
|        |          |                        |                  |                                                                        | App\Http\Middleware\Authenticate            |
|        | GET|HEAD | driver/{id}            | drivers.edit     | App\Http\Controllers\Driver\DriverController@edit                      | web                                         |
|        |          |                        |                  |                                                                        | App\Http\Middleware\Authenticate            |
|        | POST     | fueling                | fuelings.store   | App\Http\Controllers\Fueling\FuelingController@store                   | web                                         |
|        |          |                        |                  |                                                                        | App\Http\Middleware\Authenticate            |
|        | GET|HEAD | fueling                | fuelings.list    | App\Http\Controllers\Fueling\FuelingController@index                   | web                                         |
|        |          |                        |                  |                                                                        | App\Http\Middleware\Authenticate            |
|        | GET|HEAD | fueling/create         | fuelings.create  | App\Http\Controllers\Fueling\FuelingController@create                  | web                                         |
|        |          |                        |                  |                                                                        | App\Http\Middleware\Authenticate            |
|        | GET|HEAD | home                   | home             | App\Http\Controllers\HomeController@index                              | web                                         |
|        |          |                        |                  |                                                                        | App\Http\Middleware\Authenticate            |
|        | POST     | login                  |                  | App\Http\Controllers\Auth\LoginController@login                        | web                                         |
|        |          |                        |                  |                                                                        | App\Http\Middleware\RedirectIfAuthenticated |
|        | GET|HEAD | login                  | login            | App\Http\Controllers\Auth\LoginController@showLoginForm                | web                                         |
|        |          |                        |                  |                                                                        | App\Http\Middleware\RedirectIfAuthenticated |
|        | POST     | logout                 | logout           | App\Http\Controllers\Auth\LoginController@logout                       | web                                         |
|        | GET|HEAD | password/confirm       | password.confirm | App\Http\Controllers\Auth\ConfirmPasswordController@showConfirmForm    | web                                         |
|        |          |                        |                  |                                                                        | App\Http\Middleware\Authenticate            |
|        | POST     | password/confirm       |                  | App\Http\Controllers\Auth\ConfirmPasswordController@confirm            | web                                         |
|        |          |                        |                  |                                                                        | App\Http\Middleware\Authenticate            |
|        | POST     | password/email         | password.email   | App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail  | web                                         |
|        | POST     | password/reset         | password.update  | App\Http\Controllers\Auth\ResetPasswordController@reset                | web                                         |
|        | GET|HEAD | password/reset         | password.request | App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm | web                                         |
|        | GET|HEAD | password/reset/{token} | password.reset   | App\Http\Controllers\Auth\ResetPasswordController@showResetForm        | web                                         |
|        | POST     | register               |                  | App\Http\Controllers\Auth\RegisterController@register                  | web                                         |
|        |          |                        |                  |                                                                        | App\Http\Middleware\RedirectIfAuthenticated |
|        | GET|HEAD | register               | register         | App\Http\Controllers\Auth\RegisterController@showRegistrationForm      | web                                         |
|        |          |                        |                  |                                                                        | App\Http\Middleware\RedirectIfAuthenticated |
|        | GET|HEAD | sanctum/csrf-cookie    |                  | Laravel\Sanctum\Http\Controllers\CsrfCookieController@show             | web                                         |
|        | POST     | vehicle                | vehicles.store   | App\Http\Controllers\Vehicle\VehicleController@store                   | web                                         |
|        |          |                        |                  |                                                                        | App\Http\Middleware\Authenticate            |
|        | GET|HEAD | vehicle                | vehicles.list    | App\Http\Controllers\Vehicle\VehicleController@index                   | web                                         |
|        |          |                        |                  |                                                                        | App\Http\Middleware\Authenticate            |
|        | GET|HEAD | vehicle/create         | vehicles.create  | App\Http\Controllers\Vehicle\VehicleController@create                  | web                                         |
|        |          |                        |                  |                                                                        | App\Http\Middleware\Authenticate            |
|        | GET|HEAD | vehicle/delete/{id}    | vehicles.delete  | App\Http\Controllers\Vehicle\VehicleController@destroy                 | web                                         |
|        |          |                        |                  |                                                                        | App\Http\Middleware\Authenticate            |
|        | PUT      | vehicle/{id}           | vehicles.update  | App\Http\Controllers\Vehicle\VehicleController@update                  | web                                         |
|        |          |                        |                  |                                                                        | App\Http\Middleware\Authenticate            |
|        | GET|HEAD | vehicle/{id}           | vehicles.edit    | App\Http\Controllers\Vehicle\VehicleController@edit                    | web                                         |
|        |          |                        |                  |                                                                        | App\Http\Middleware\Authenticate            |
+--------+----------+------------------------+------------------+------------------------------------------------------------------------+---------------------------------------------+
```

## Authorization

Some routes are protected by auth middleware. To have access, just login.
