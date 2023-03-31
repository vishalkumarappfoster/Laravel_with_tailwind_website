<?php
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use App\Models\Student;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
    
});

Route::get('/student', function () {
    return view('student');
});


Route::get('/register', function () {
    return view('/register');
});

Route::get('/edit', function () {
    return view('/edit');
});



Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/login', [CustomAuthController::class,'login']);
Route::get('/signup', [CustomAuthController::class,'signup']);
Route::post('/signup-user',[CustomAuthController::class,'signupUser'])->name('signup-user');
Route::post('/login-user',[CustomAuthController::class,'loginUser'])->name('login-user');
Route::get('/dashboard',[CustomAuthController::class,'dashboard'])->middleware('Authcheck');
Route::get('/logout',[CustomAuthController::class,'logout']);


// Student routes    
Route::post('/students',[StudentController::class,'store'])->name('students.store');
Route::get('/students', [StudentController::class,'index'])->name('students.index');
Route::get('/students/create', [StudentController::class,'create'])->name('students.create');
Route::get('/students/{id}', [StudentController::class,'show'])->name('students.show');
Route::get('/students/{id}/edit', [StudentController::class,'edit'])->name('students.edit');
Route::put('/students/{id}', [StudentController::class,'update'])->name('students.update');
Route::delete('/students/{id}', [StudentController::class,'destroy'])->name('students.destroy');

//route for cd download
Route::get('/students/{id}/download-cv', [StudentController::class,'downloadCv'])->name('download.cv');

//route for download table data in excel sheet
// Route::get('/students/download/excel', [StudentController::class, 'downloadExcel'])->name('students.download.excel');

Route::get('students/download/excel', function () {
    $students = Student::all();
    
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
    $sheet->setCellValue('A1', 'ID');
    $sheet->setCellValue('B1', 'Name');
    $sheet->setCellValue('C1', 'Email');
    $sheet->setCellValue('D1', 'phone_number');
    $sheet->setCellValue('E1', 'address');
    $sheet->setCellValue('F1', 'select_course');
    $sheet->setCellValue('G1', 'highest_qualification');
    
    foreach ($students as $index => $student) {
        $row = $index + 2;
        $sheet->setCellValue('A' . $row, $student->id);
        $sheet->setCellValue('B' . $row, $student->name);
        $sheet->setCellValue('C' . $row, $student->email);
        $sheet->setCellValue('D' . $row, $student->phone_number);
        $sheet->setCellValue('E' . $row, $student->address);
        $sheet->setCellValue('F' . $row, $student->select_course);
        $sheet->setCellValue('G' . $row, $student->highest_qualification);
    }

    $writer = new Xlsx($spreadsheet);
    $fileName = 'students.xlsx';
    $writer->save($fileName);

    return response()->download($fileName)->deleteFileAfterSend();
})->name('students.download.excel');




// Route::get('/students', [StudentController::class, 'index']);
// Route::post('/students', [StudentController::class, 'store']);


// Course routes
// Route::get('/courses', 'CourseController@index')->name('courses.index');
// Route::get('/courses/create', 'CourseController@create')->name('courses.create');
// Route::post('/courses', 'CourseController@store')->name('courses.store');
// Route::get('/courses/{id}', 'CourseController@show')->name('courses.show');
// Route::get('/courses/{id}/edit', 'CourseController@edit')->name('courses.edit');
// Route::put('/courses/{id}', 'CourseController@update')->name('courses.update');
// Route::delete('/courses/{id}', 'CourseController@destroy')->name('courses.destroy');
