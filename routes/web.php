<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::resource('students', StudentController::class);


// ছাত্র তালিকা (students.index)
Route::get('students', [StudentController::class, 'index'])->name('students.index');

// নতুন ছাত্র যোগ করতে (students.create)
Route::get('students/create', [StudentController::class, 'create'])->name('students.create');

// নতুন ছাত্র সাবমিট করতে (students.store)
Route::post('students', [StudentController::class, 'store'])->name('students.store');

// ছাত্র দেখানোর জন্য (students.show)
Route::get('students/{student}', [StudentController::class, 'show'])->name('students.show');

// ছাত্র এডিট করতে (students.edit)
Route::get('students/{student}/edit', [StudentController::class, 'edit'])->name('students.edit');

// ছাত্র আপডেট করতে (students.update)
Route::put('students/{student}', [StudentController::class, 'update'])->name('students.update');

// ছাত্র ডিলিট করতে (students.destroy)
Route::delete('students/{student}', [StudentController::class, 'destroy'])->name('students.destroy');
