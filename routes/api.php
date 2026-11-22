<?php

use App\Http\Controllers\Api\CourseController;
use App\Http\Controllers\Api\StudentController;
use Illuminate\Support\Facades\Route;

// Named api.* so they do not clash with the web routes (students.*, courses.*)
Route::apiResource('students', StudentController::class)->names('api.students');
Route::apiResource('courses', CourseController::class)->names('api.courses');