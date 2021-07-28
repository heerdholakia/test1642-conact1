<?php

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;

Route::get('contact1',function(){

	return "contact1";

});

// Route::get('contact',function(){

// 	return view('contact::contact');
// })->name('contact');


// Route::post('contact',function(Request $request){
// 	return $request->all();
// });


// Route::get('/contact', [ContactController::class, 'index'])->name('contact');

