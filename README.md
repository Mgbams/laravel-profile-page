<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).




#################################################################################################################
## Pre-requisite

* Visual studio code
* Node Js: this installs npm which is the javascript counterpart to composer
i.e npm is a  javascript package manager while composer is a php package manager.
* Composer: visit the below site to install composer
[Composer](https://getcomposer.org/)
 Then click on Getting started -> Globally -> download
 Note: Globally is found under **Installation - Linux / Unix / macOS**
 Then copy the code under the heading **Installation - Linux / Unix / macOS** and paste it in your terminal for installation.

 * Laravel Installer Visit the below site
[Laravel](https://laravel.com/)
Then click on Documentation -> Installing Laravel.
Then copy the code under **Installing Laravel**  and paste in your terminal i.e
If laravel is well installed, you can verify by typing **laravel** in your terminal. it will display some infos on the terminal. But if it doesn't, then it's because you don't have composer in your root directory.

**NOTE**: You can type **echo PATH** on your terminal to show the path of your composer on your system.
If your Laravel command doesn't work, then you can search on google on how to add composer to your rrot directory.

```bash
    composer global require laravel/installer
```

 Note:  This command gives you the version of your node package manager
 ```bash
 node -v
 ```
 Note:  This command gives you the version of your installed npm 
 ```bash
 npm -v
 ```

 * Visit the below site to learn about laravel restful controllers
 [Laravel Restful Controllers](https://laravel.com/docs/7.x/controllers)
 It gives you convention for naming your routes

 ## CREATING A LARAVEL APPLICATION
 * On the terminal type as below:

 ```bash
 laravel new application-name
 ```
 * You can also type
 ```
 php artisan
 ```
 This above command gives you lots of commands that are at your disposal in laravel.

 ## Launching your laravel on chrome

* First command to be used

 ```bash
 php artisan serve
 ```
 Then copy the address provided and paste on a browser to open your application OR ctrl + click on the link to open it. Once your website is loaded, open a different tab on visual studio code and open your project again on this tab to leave your application running on the first tab.

 * RUN THE BELOW COMMAND TO ADD AUTHENTICATION TO LARAVAL

In Laravel 6.0 **make:auth** no longer exists. Read more here
[Laravel Auth::routes()](https://medium.com/@panjeh/laravel-auth-routes-email-verification-reset-password-authentication-registration-routes-fb82b3337150)

### A- Shorthand:
Update Nov 18th: Taylor just released Laravel Installer 2.3.0 added a new "--auth" flag to create a new project with the authentication scaffolding installed!

To update laravel installer read here
[Composer Update](https://medium.com/@panjeh/update-laravel-installer-8b9c5e1a2366)

It means we can do:

```bash
laravel new project --auth

cd project

php artisan migrate

npm install
npm run dev
```
Which is a shorthand of commands in the Section B. Also read more here
[Laravel changes in php artisan ui:auth](https://medium.com/@panjeh/laravel-changes-in-php-artisan-ui-auth-php-artisan-make-auth-82fdb8893726)

### B - Details:
Follow these three steps

### Step 1 - First do this:

```bash
laravel new project

cd project

composer require laravel/ui --dev
```
Note: Laravel UI Composer package is a new first-party package that extracts the UI portion of a Laravel project ( frontend scaffolding typically provided with previous releases of Laravel ) into a separate laravel/ui package. The separate package enables the Laravel team to update, develop and version UI scaffolding package separately from the primary framework and the main Laravel codebase.

### Step 2 - Then do this:

```bash
php artisan ui bootstrap --auth
php artisan migrate
or

php artisan ui vue --auth
php artisan migrate
```

Instead of

```
php artisan make:auth  // ( which works for Laravel 5.8 and older versions )
```
More Options here
[Laravel Auth::routes()](https://medium.com/@panjeh/laravel-auth-routes-email-verification-reset-password-authentication-registration-routes-fb82b3337150)

```bash
php artisan ui:auth
```
The above command will generate only the auth routes, a HomeController, auth views, and a app.blade.php layout file.

You can also generate the views only with:

```bash
php artisan ui:auth --views
```
The console command will prompt you to confirm overwriting auth files if you've already run the command before.

// Generate basic scaffolding...

```bash
php artisan ui vue
php artisan ui react
```
and also:

// Generate login / registration scaffolding...

```bash
php artisan ui vue --auth
php artisan ui react --auth
```
To see differences read this article
[Changes in Laravel](https://medium.com/@panjeh/laravel-changes-in-php-artisan-ui-auth-php-artisan-make-auth-82fdb8893726)

### Step 3 - Then you need to do:

```bash
npm install
npm run dev
```
These npm commands will add app.js file to your project.
**NOTE**: Very important is, we do not modify the __app.js__ file in __public folder__ because it is the file that was compiled. we only modify the __app.js__ file in **resources** folder.
Also note that compiled files always end up inside the public directory.

**NOTE:** The css file that is to be modified is found in __resources__ -> __sass__ -> __app.scss__.

 ## Viewing your html file
  click on resources -> views -> welcome.blade.php
  **NOTE**: blade is a rendering template containing html markups.


 After the creation of the application lots of files are created.
 **Example:**
 - composer.json: this file contains the assets of our composer and it's like the instructions that tells composer what to do.

## Installing npm dependencies
* type: npm install
This installs avascript dependencies that would handle your front end
* type: npm run dev
The above command is used to compile npm before we can use it. It will take everything that comes with laravel and will compile it to a file that we can actually use.

NOTE: if at the end of the installation you see the below message ''Please run mix again''. Then you should repeat the above entered command i.e npm run dev to ensure it compiles perfectly.


## EXPLANATIONS:

**home.blade.php** is what gets loaded when a user gets into our application.
__migrations__ that are found in php artisan command are files that describe your database. it holds all the informations you need to tell your database to create itself.

## CREATING DATABASE IN OUR PROECT
* On the command line type

```bash
vim database/databaseName.sqlite
```

* Once it opens the text window, press **esc** on the keyboard and then type
```bash
:wq
```
Then press enter to exit. Check your database folder to find the newly created database.
Then go to **.env** file and set:

```env
DB_CONNECTION=sqlite
```
Delete the below contents from **.env** file since we are using sqlite. But if we are using mysql then dont delete them.

```
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

**IMPORTANT:** Whenever you make a change to **.env** file, make sure you stop the server by pressing **ctrl + c** and then restart the  server.

## MODIFYING LAYOUT
In views -> layouts -> app.blade.php
We can modify the contents to our desire.

Open your public folder and create images folder that holds your app images. Note that we start linking from public folder so we don't specify public in the link e.g to access images folder in public folder, we use directly this below:

```
src="image/imageName";
```

NOTE: When you modify contents in front end files like **app.scss, _variable.scss**, you should stop the server and run the command **npm run dev** to recompile your code

## ADDING EXTRA FIELDS TO A FORM

* Go to views and open the interested file, modify as required.
* Go to app -> http -> controllers, then open the controller of the interested page and modify the **create function** and the **validator function** by adding the newly created fields in them.
* Go to database -> migrations and then select the database table that will contain your newly added field. Add the newly created field in the **up function** and define the constraints that would allow for database check.
* Then under app -> User.php, check for the function called **protected $fillable(){}** and add the name of the newly created field inside the function to allow the field to be submitted to the database. This function protects malicious users from adding unwanted fields to our application.

## USING PHP TINKER
Php tinker allows us to interact with our application using the command prompt. To use it, type in your terminal

```bash
php artisan tinker
```
It will displaya prompt with this sign >>.
To see a list of all users in your database using tinker then type,

```bash
User::all();
```

To exit tinker environment, type **exit** and press enter.

**IMPORTANT:** Whenever you make changes to your database, you must rerun the below command

```bash
php artisan migrate:fresh
```
The above command erases everything in your database and recreates it again.

## Getting Help on php artisan commands
To get help on a particular command, type:

```bash
php artisan help commandName
```
E.g

```bash
php artisan help make:controller
```
NOTE: when you see <name> after a command, it means it is required and we have to provide a name.

## CREATING A CONTROLLER
Type this command

```bash
php artisan make:controller ControllerName
```
E.g
```bash
php artisan make:controller ProfilesController
```
Once you create your controller, add the index function like shown below:

```bash
 public function index()
    {
        return view('home');
    }
```

Then go to routes -> web.php and add a route to the controller as follows

```bash
Auth::routes();

Route::get('/home', 'ProfilesController@index')->name('home');
```

**IMPORTANT**: A curly braces in a route means it's a variable and that it can be changed e.g

```routeLink
/photo/{username}
```

## ACCESSING YOUR DATABASE DATA AND PASSING IT TO YOUR VIEW
* In your control, to acces e.g a User.php model in ProfileController, do as follows

```ProfileController

use App\User;
```

* Then in the index function of the controller, access the model as follows

```ProfileController

 $user = User::find($user);
```
Here i saved the output to the variable called $user.

* then to route this data to the view, add it as an array to your rouute in your controller as follows:

```ProfileController

return view('home', [
            'hello' => $user,
        ]);
```

* Finally, access the data passed in your view as follows

```home.blad.php

{{$hello -> username}}
```

__NOTE:__ From the above, i added dollar to the hello to show it is a variable and i used a single arrow __'->'__ to access the username attribute of __$hello__.





