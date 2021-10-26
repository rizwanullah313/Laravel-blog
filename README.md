php artisan bootstrap
php artisan bootstrap --auth

is --auth ne khud he register and login page  create kerdia our / register ya login laga k check kersakty hy ham.


npm install npm run dev

env me jak database k name wahi rakna jo mysql me h

per 
sudo /opt/lampp/lampp start
ye khud he tables bana dega mysqql m


php artisan make:migration create_contacts_table
php artisan migrate


sudo /opt/lampp/lampp start

php artisan make:controller contactController --resource

php artisan route:list

php artisan make:model Contact









php artisan route:list
+--------+-----------+-------------------------+------------------+------------------------------------------------------------------------+---------------------------------------------+
| Domain | Method    | URI                     | Name             | Action                                                                 | Middleware                                  |
+--------+-----------+-------------------------+------------------+------------------------------------------------------------------------+---------------------------------------------+
|        | GET|HEAD  | /                       |                  | Closure                                                                | web                                         |
|        | GET|HEAD  | api/user                |                  | Closure                                                                | api                                         |
|        |           |                         |                  |                                                                        | App\Http\Middleware\Authenticate:sanctum    |
|        | GET|HEAD  | contacts                | contacts.index   | App\Http\Controllers\contactController@index                           | web                                         |
|        | POST      | contacts                | contacts.store   | App\Http\Controllers\contactController@store                           | web                                         |
|        | GET|HEAD  | contacts/create         | contacts.create  | App\Http\Controllers\contactController@create                          | web                                         |
|        | GET|HEAD  | contacts/{contact}      | contacts.show    | App\Http\Controllers\contactController@show                            | web                                         |
|        | PUT|PATCH | contacts/{contact}      | contacts.update  | App\Http\Controllers\contactController@update                          | web                                         |
|        | DELETE    | contacts/{contact}      | contacts.destroy | App\Http\Controllers\contactController@destroy                         | web                                         |
|        | GET|HEAD  | contacts/{contact}/edit | contacts.edit    | App\Http\Controllers\contactController@edit                            | web                                         |
|        | GET|HEAD  | home                    | home             | App\Http\Controllers\HomeController@index                              | web                                         |
|        |           |                         |                  |                                                                        | App\Http\Middleware\Authenticate            |
|        | POST      | login                   |                  | App\Http\Controllers\Auth\LoginController@login                        | web                                         |
|        |           |                         |                  |                                                                        | App\Http\Middleware\RedirectIfAuthenticated |
|        | GET|HEAD  | login                   | login            | App\Http\Controllers\Auth\LoginController@showLoginForm                | web                                         |
|        |           |                         |                  |                                                                        | App\Http\Middleware\RedirectIfAuthenticated |
|        | POST      | logout                  | logout           | App\Http\Controllers\Auth\LoginController@logout                       | web                                         |
|        | GET|HEAD  | password/confirm        | password.confirm | App\Http\Controllers\Auth\ConfirmPasswordController@showConfirmForm    | web                                         |
|        |           |                         |                  |                                                                        | App\Http\Middleware\Authenticate            |
|        | POST      | password/confirm        |                  | App\Http\Controllers\Auth\ConfirmPasswordController@confirm            | web                                         |
|        |           |                         |                  |                                                                        | App\Http\Middleware\Authenticate            |
|        | POST      | password/email          | password.email   | App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail  | web                                         |
|        | GET|HEAD  | password/reset          | password.request | App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm | web                                         |
|        | POST      | password/reset          | password.update  | App\Http\Controllers\Auth\ResetPasswordController@reset                | web                                         |
|        | GET|HEAD  | password/reset/{token}  | password.reset   | App\Http\Controllers\Auth\ResetPasswordController@showResetForm        | web                                         |
|        | GET|HEAD  | register                | register         | App\Http\Controllers\Auth\RegisterController@showRegistrationForm      | web                                         |
|        |           |                         |                  |                                                                        | App\Http\Middleware\RedirectIfAuthenticated |
|        | POST      | register                |                  | App\Http\Controllers\Auth\RegisterController@register                  | web                                         |
|        |           |                         |                  |                                                                        | App\Http\Middleware\RedirectIfAuthenticated |
|        | GET|HEAD  | sanctum/csrf-cookie     |                  | Laravel\Sanctum\Http\Controllers\CsrfCookieController@show             | web                                         |
+--------+-----------+-------------------------+------------------+------------------------------------------------------------------------+---------------------------------------------+
