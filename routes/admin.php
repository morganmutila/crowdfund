<?php


Route::prefix('admin')->group(function () {
    Route::get('/users', function () {
        // Matches The "/admin/users" URL
    });
});

Route::prefix('admin')->group(function(){
    
});