<?php

use App\Livewire\Front\CourseDetails;
use App\Livewire\Front\Courses;
use App\Livewire\Front\Home;
use Illuminate\Support\Facades\Route;





require __DIR__.'/auth.php';

Route::get('/',Home::class)->name('home');
Route::get('/courses',Courses::class)->name('courses');
Route::get('/course_details',CourseDetails::class)->name('course.details');

