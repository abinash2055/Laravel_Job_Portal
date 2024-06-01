 
 <?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Mail\JobPosted;
use App\Jobs\TranlateJob;
use App\Models\Job;
use App\Http\Controllers\FormController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Jobs\TranslateJob;

Route::get('mail',function () {
    $job = Job::first();
    TranslateJob::dispatch($job);
    return "DONE ";
});

Route::view('/', 'home');
Route::get('/form', [FormController::class, 'showForm'])->name('form.show');
Route::post('/form', [FormController::class, 'submitForm'])->name('form.submit');
Route::get('/home', [FormController::class, 'home'])->name('home');

Route::get('/', function () {
    return view('home');
})->name('home');


// contact 
// Define the route for showing the form
Route::get('/form', [FormController::class, 'showForm'])->name('form.show');

// Define the route for handling form submission using GET method
Route::get('/submit-form', [FormController::class, 'submitForm'])->name('form.submit');



// Define the route for the home page
Route::get('/home', [FormController::class, 'home'])->name('home');
Route::get('/jobs', [JobController::class, 'index']);
Route::get('/jobs/create', [JobController::class, 'create']);

Route::post('/jobs', [JobController::class, 'store'])->middleware('auth');
Route::get('/jobs/{job}', [JobController::class, 'show']);



// Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])->middleware('auth')->can('edit', 'job');

Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])->middleware('auth')->can('edit-job', 'job');

// Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])->middleware('auth');



Route::patch('/jobs/{job}', [JobController::class, 'update']);
Route::delete('/jobs/{job}', [JobController::class, 'destroy']);


// Authorization
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);

Route::post('/logout', [SessionController::class, 'destroy']);