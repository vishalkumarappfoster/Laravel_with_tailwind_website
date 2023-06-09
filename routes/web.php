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
// Route::get('/students', [StudentController::class,'index'])->name('students.index');

// **student auth new 

Route::get('/students', [StudentController::class, 'index'])
    ->middleware('Authcheck')
    ->name('students.index');



Route::get('/students/create', [StudentController::class,'create'])->name('students.create');
Route::get('/students/{id}', [StudentController::class,'show'])->name('students.show');
Route::get('/students/{id}/edit', [StudentController::class,'edit'])->name('students.edit');
Route::put('/students/{id}', [StudentController::class,'update'])->name('students.update');
Route::delete('/students/{id}', [StudentController::class,'destroy'])->name('students.destroy');

// route for download invoice 
// Route::get('/students/{id}/download-invoice-pdf', [StudentController::class, 'downloadInvoicePDF'])->name('download-invoice-pdf');
Route::get('/students/{id}/download-invoice-pdf', [StudentController::class, 'downloadInvoicePDF'])->name('download-invoice-pdf');

//route for cv download
Route::get('/students/{id}/download-cv', [StudentController::class,'downloadCv'])->name('download.cv');

// *Students export to pdf*



Route::get('/students/download/pdf', [StudentController::class, 'downloadPdf'])->name('students.download.pdf');




Route::get('students/download/excel', function () {
    $students = Student::all();
    
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
    $sheet->setCellValue('A1', 'ID');
    $sheet->setCellValue('B1', 'Name');
    $sheet->setCellValue('C1', 'Email');
    $sheet->setCellValue('D1', 'Phone No');
    $sheet->setCellValue('E1', 'Address');
    $sheet->setCellValue('F1', 'Course');
    $sheet->setCellValue('G1', 'Highest Qualification');
    
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


