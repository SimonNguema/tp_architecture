<?php 

use App\Modules\Users\UserController;

Route::prefix('users')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('users.index');
    Route::get('create', [UserController::class, 'create'])->name('users.create');
    Route::post('store', [UserController::class, 'store']);
    Route::get('edit/{id}', [UserController::class, 'edit']);
    Route::post('update/{id}', [UserController::class, 'update']);
    Route::delete('delete/{id}', [UserController::class, 'destroy']);
});