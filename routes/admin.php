<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Admin\Panel\Index;
use App\Livewire\Admin\User\UsersList;


Route::get('/',Index::class)->name('panel');
Route::get('/users',UsersList::class)->name('user.list');
