<?php

use App\Http\Controllers\Admin\PanelController;
use App\Livewire\Admin\Panel\Index;
use App\Livewire\Admin\User\UserCreate;
use App\Livewire\Admin\User\UsersList;
use App\Livewire\Front\CourseDetails;
use App\Livewire\Front\Courses;
use App\Livewire\Front\Home;
use Illuminate\Support\Facades\Route;


Route::get('/admin',Index::class)->name('panel');
Route::get('/admin/user_create',UserCreate::class)->name('user.craete');
Route::get('/admin/users',UsersList::class)->name('user.list');


Route::get('/',Home::class)->name('home');
Route::get('/courses',Courses::class)->name('courses');
Route::get('/course_details',CourseDetails::class)->name('course.details');

