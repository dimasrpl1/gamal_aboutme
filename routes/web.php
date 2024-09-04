<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('home', ['title'=> 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title'=> 'About','name'=> 'Muhammad Syah Gamal Rosyada']);
});

Route::get('/blog', function () {
    return view('blog',  ['title'=> 'Blog']);
});

Route::get('/contact', function () {
    return view('contact', ['title'=> 'Contact']);
});

// Tambahkan route POST untuk menangani form contact
Route::post('/contact', function (Request $request) {
    // Validasi input
    $validated = $request->validate([
        'name' => 'required|max:255',
        'email' => 'required|email',
        'message' => 'required',
    ]);
    
    // Logika untuk mengirim email atau menyimpan ke database
    
    return back()->with('success', 'Pesan Anda telah dikirim!');
});
    