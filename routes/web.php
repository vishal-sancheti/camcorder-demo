<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Eyuva\Camcorder\Camcorder;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/demo', function () {
    $camcorder = new Camcorder();
    $camcorder->addImage(public_path('camcorder/images/slide1.jpg'),5,0);
    $camcorder->addImage(public_path('camcorder/images/slide2.jpg'),5,0);
    $camcorder->addImage(public_path('camcorder/images/slide3.jpg'),5,0);
    $camcorder->addImage(public_path('camcorder/images/slide4.jpg'),5,1);
    $camcorder->addAudio(public_path('camcorder/audios/sample.mp3'));
    $camcorder->generate(public_path('camcorder/videos'),'demo');
    return redirect('/');
});