<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
     return view('welcome'); 
    });

Route::get('about', function() {
     return 'It is About Page'; 
    });

Route::get('user/{u_id}', function($id) {
     return $id; 
    });

Route::get('student/{name?}', function($name = 'No Name'){ 
    return $name; 
    });

Route::get('products/{p_name}', function($name){
     return "Product Name: " . $name; 
    });

Route::get('post/{post_id}/commend/{comment_id}', function($post_id , $comment_id){
    return $post_id . $comment_id;
    });

Route::get('post/{post_id}/commend/{comment_id}', function($post_id , $comment_id){
     return "Post ID: " . $post_id . "Comment ID" . $comment_id;
     });

Route::get('student/{name?}', function($name = null){ 
    return "Hello " . $name;
    });

Route::get('product/{p_name}', function($name){
     return "Product Name: " . $name;
    })->where('p_name', '[A-Za-z]+');

Route::get('manager/{id}/{name}', function($id, $name){ return "Manager ID: " . $id . " Manager Name: " . $name;
})->where(['id'=>'[0-9]+', 'name'=>'[a-z]+']);

Route::get('employee/{id}/{name}', function($id, $name){
    return "Employee ID: " . $id . " Employee Name: " . $name;
})->WhereNumber('id')->whereAlpha('name');

Route::redirect('yaha', 'waha');

Route::redirect('yaha2', 'waha2', 301);

Route::PermanentRedirect('yaha5', 'waha5', 301);

Route::fallback(function(){ 
    return "Defualt Manager";
     });










