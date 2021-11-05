<?php

use Illuminate\Support\Facades\Route;
use Jestrux\Blogger\Http\Controllers\BlogController;

// Route::view('/editor', 'blogger::editor');

Route::group(['prefix' => 'admin'], function () {
    Route::post('blogs/save', [BlogController::class, 'save'])->name('save-blog');

    Route::view('blogs/write', 'blogger::write');

    Route::get('blogs/{id}/edit', function($id = null){
        return view('blogger::write', [
            "id" => $id
        ]);
    });

    Route::patch('blogs/{id}/unpublish', [BlogController::class, 'unpublish'])->name('unpublish-blog');

    Route::delete('blogs/{id}', [BlogController::class, 'delete'])->name('delete-blog');
});