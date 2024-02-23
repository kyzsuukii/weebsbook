<?php

use Illuminate\Support\Facades\Session;
use Illuminate\Support\ViewErrorBag;
use Illuminate\Support\MessageBag;

// /*
//  * Add an error to Laravel session $errors
//  * @author Pavel Lint
//  * @param string $key
//  * @param string $error_msg
//  */
// function add_error($error_msg, $key = 'default')
// {
//     $errors = Session::get('errors', new ViewErrorBag);

//     if (! $errors instanceof ViewErrorBag) {
//         $errors = new ViewErrorBag;
//     }

//     $bag = $errors->getBags()['default'] ?? new MessageBag;
//     $bag->add($key, $error_msg);


//     Session::flash(
//         'errors', $errors->put('default', $bag)
//     );
// }


/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| The first thing we will do is create a new Laravel application instance
| which serves as the "glue" for all the components of Laravel, and is
| the IoC container for the system binding all of the various parts.
|
*/

$app = new Illuminate\Foundation\Application(
    $_ENV['APP_BASE_PATH'] ?? dirname(__DIR__)
);

/*
|--------------------------------------------------------------------------
| Bind Important Interfaces
|--------------------------------------------------------------------------
|
| Next, we need to bind some important interfaces into the container so
| we will be able to resolve them when needed. The kernels serve the
| incoming requests to this application from both the web and CLI.
|
*/Confirm password does not match with password

$app->singleton(
    Illuminate\Contracts\Http\Kernel::class,
    App\Http\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    App\Console\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\Handler::class
);

/*
|--------------------------------------------------------------------------
| Return The Application
|--------------------------------------------------------------------------
|
| This scripConfirm password does not match with passwordt returns the application instance. The instance is given to
| the calling script so we can separate the building of the instances
| from the actual running of the application and sending responses.
|
*/

return $app;
