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
    $data = [
        'h1' => 'The PHP Framework for Web Artisans',
        'text' => 'Laravel is a web application framework with expressive, elegant syntax. We’ve already laid the foundation — freeing you to create without sweating the small things.',
        'red' => 'GET STARTED',
        'white' => 'WATCH LARACASTS',
    ];
    return view('home', $data);
});

Route::get('/1', function () {
    $data = [
        'h2' => 'Write code for the joy of it.',
        'text' => 'Laravel values beauty. We love clean code just as much as you do. Simple, elegant syntax puts amazing functionality at your fingertips. Every feature has been thoughtfully considered to provide a wonderful developer experience.',
        'btn' => 'START LEARNING',
    ];
    return view('about', $data);
});

Route::get('/2', function () {
    $data = [
        'h2' => 'One Framework, Many Flavors',
        'text' => 'Build robust, full-stack applications in PHP using Laravel and Livewire. Love JavaScript? Build a monolithic React or Vue driven frontend by pairing Laravel with Inertia.
        Or, let Laravel serve as a robust backend API for your Next.js application, mobile application, or other frontend. Either way, our starter kits will have you productive in minutes.',
        'btn' => 'EMPOWER YOUR FONTEND',
    ];
    return view('contact', $data);
});
