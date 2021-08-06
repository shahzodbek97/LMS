<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\ClassScheduleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\LeadingController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TrialLessonController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Address
Route::get('/address/list', [AddressController::class, 'index']);
Route::get('/address/store', [AddressController::class, 'store']);
Route::get('/address/delete/{id}', [AddressController::class, 'destroy']);
Route::get('/address/update/{id}', [AddressController::class, 'edit']);

//Attendance
Route::get('/attendance/list', [AttendanceController::class, 'index']);
Route::get('/attendance/store', [AttendanceController::class, 'store']);
Route::get('/attendance/delete/{id}', [AttendanceController::class, 'destroy']);
Route::get('/attendance/update/{id}', [AttendanceController::class, 'edit']);

//ClassSchedule
Route::get('/class/list', [ClassScheduleController::class, 'index']);
Route::get('/class/store', [ClassScheduleController::class, 'store']);
Route::get('/class/delete/{id}', [ClassScheduleController::class, 'destroy']);
Route::get('/class/update/{id}', [ClassScheduleController::class, 'edit']);

//Contact
Route::get('/contact/list', [ContactController::class, 'index']);
Route::get('/contact/store', [ContactController::class, 'store']);
Route::get('/contact/delete/{id}', [ContactController::class, 'destroy']);
Route::get('/contact/update/{id}', [ContactController::class, 'edit']);

//Course
Route::get('/course/list', [CourseController::class, 'index']);
Route::get('/course/store', [CourseController::class, 'store']);
Route::get('/course/delete/{id}', [CourseController::class, 'destroy']);
Route::get('/course/update/{id}', [CourseController::class, 'edit']);

//Group
Route::get('/group/list', [GroupController::class, 'index']);
Route::get('/group/store', [GroupController::class, 'store']);
Route::get('/group/delete/{id}', [GroupController::class, 'destroy']);
Route::get('/group/update/{id}', [GroupController::class, 'edit']);

//Leading
Route::get('/lead/list', [LeadingController::class, 'index']);
Route::get('/lead/store', [LeadingController::class, 'store']);
Route::get('/lead/delete/{id}', [LeadingController::class, 'destroy']);
Route::get('/lead/update/{id}', [LeadingController::class, 'edit']);

//Lesson
Route::get('/lesson/list', [LessonController::class, 'index']);
Route::get('/lesson/store', [LessonController::class, 'store']);
Route::get('/lesson/delete/{id}', [LessonController::class, 'destroy']);
Route::get('/lesson/update/{id}', [LessonController::class, 'edit']);

//Payment
Route::get('/payme/list', [PaymentController::class, 'index']);
Route::get('/payme/store', [PaymentController::class, 'store']);
Route::get('/payme/delete/{id}', [PaymentController::class, 'destroy']);
Route::get('/payme/update/{id}', [PaymentController::class, 'edit']);

//Room
Route::get('/room/list', [RoomController::class, 'index']);
Route::get('/room/store', [RoomController::class, 'store']);
Route::get('/room/delete/{id}', [RoomController::class, 'destroy']);
Route::get('/room/update/{id}', [RoomController::class, 'edit']);

//Staff
Route::get('/staff/list', [StaffController::class, 'index']);
Route::get('/staff/store', [StaffController::class, 'store']);
Route::get('/staff/delete/{id}', [StaffController::class, 'destroy']);
Route::get('/staff/update/{id}', [StaffController::class, 'edit']);

//Student
Route::get('/student/list', [StudentController::class, 'index']);
Route::get('/student/store', [StudentController::class, 'store']);
Route::get('/student/delete/{id}', [StudentController::class, 'destroy']);
Route::get('/student/update/{id}', [StudentController::class, 'edit']);

//Teacher
Route::get('/teacher/list', [TeacherController::class, 'index']);
Route::get('/teacher/store', [TeacherController::class, 'store']);
Route::get('/teacher/delete/{id}', [TeacherController::class, 'destroy']);
Route::get('/teacher/update/{id}', [TeacherController::class, 'edit']);

//TrialLesson
Route::get('/trial/list', [TrialLessonController::class, 'index']);
Route::get('/trial/store', [TrialLessonController::class, 'store']);
Route::get('/trial/delete/{id}', [TrialLessonController::class, 'destroy']);
Route::get('/trial/update/{id}', [TrialLessonController::class, 'edit']);

