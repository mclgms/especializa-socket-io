<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/create-post', function () {
    $user = \App\Models\User::find(1);
    $post = $user->posts()->create([
        'title' => \Illuminate\Support\Str::random(50),
        'body' => \Illuminate\Support\Str::random(200)
    ]);

    // event(new \App\Events\PostCreated($post));
    echo "Post criado <br><br>";

//    \Illuminate\Console\Command::macro('notify', function (string $text, string $body, $icon = null) {
//        $notifier = $this->laravel[Contracts\Notifier::class];
//
//        $notification = $this->laravel[Contracts\Notification::class]
//            ->setTitle($text)
//            ->setBody($body);
//
//        if (!empty($icon)) {
//            $notification->setIcon($icon);
//        }
//        echo "notificou... <br>";
//        $notifier->send($notification);
//    });

});

Route::get('/', function () {
    return view('welcome');
});
