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

Route::get('/', function () {
    $user = App\Models\User::find(1);


    return view("address",[
        'user' => $user
    ]);
});

Route::get('create',function(){
    App\Models\Address::create([
        'user_id' => 1,
        "line_1" => "sfax"
    ]);
});

Route::get(uri: 'update',action: function(){

    $user = App\Models\User::find(1);

    $user->address()->update(
        [
            'line_1' => 'new address'
        ]
        );
});

Route::get('delete', function()
{
    $user = App\Models\User::find(1);

    $user->address()->delete();
});

