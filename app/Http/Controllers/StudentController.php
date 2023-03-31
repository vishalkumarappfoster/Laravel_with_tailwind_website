<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Course;
use Illuminate\Support\Facades\Storage;




class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('student', compact('students'));
    }

    public function create()
    {
        $courses = Course::all();
        return view('students.create', compact('select_courses'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students,email',
            'phone_number' => 'required',
            'address' => 'required',
            'select_course' => 'required',
            'highest_qualification' => 'required',
            'cv_file' => 'required|file',
        ]);
    

        if ($request->hasFile('cv_file')) {
            $cv_file = $request->file('cv_file');
            if ($cv_file->isValid()) {
                $cv_file_path = $cv_file->store('cv_files');
            } else {
                return redirect()->back()->withErrors(['cv_file' => 'File upload failed.']);
            }
        } else {
            return redirect()->back()->withErrors(['cv_file' => 'File not found.']);
        }

        // dd($request);

        $student = new Student([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone_number' => $request->get('phone_number'),
            'address' => $request->get('address'),
            'select_course' => $request->get('select_course'),
            'highest_qualification' => $request->get('highest_qualification'),
            'cv_file' => $cv_file_path,
        ]);

         $student->save();

        $student->courses()->attach($request->get('select_courses'));

// sending register mail
$email = $request->email;
$name = $request->name;
$select_course = $request->select_course;

$data = [
    'name' => $name,
    'email' => $email,
    'select_course' => $select_course,
];

Mail::send('WelcomeEmail', $data, function($message) use($email, $name) {
    $message->to($email, $name)
            ->subject('Welcome to our course!');
});
       

        return redirect()->back()->with('success', 'Student has been added');
    }

    public function show($id)
    {
        $student = Student::find($id);
        return view('students.show', compact('student'));
    }

    public function edit($id)
    {
        $student = Student::find($id);
        $courses = Course::all();
        return view('edit', compact('student', 'courses'));
    }

    public function update(Request $request, $id)
    
    {
        // dd($request);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students,email,'.$id,
            'phone_number' => 'required',
            'address' => 'required',
            'select_course' => 'required',
            'highest_qualification' => 'required',
            'cv_file' => 'required|file',
        ]);

        $student = Student::find($id);

        if ($request->hasFile('cv_file')) {
            $cv_file = $request->file('cv_file');
            $cv_file_path = $cv_file->store('cv_files');
            $student->cv_file = $cv_file_path;
        }

        $student->name = $request->get('name');
        $student->email = $request->get('email');
        $student->phone_number = $request->get('phone_number');
        $student->address = $request->get('address');
        $student->select_course = $request->get('select_course');
        $student->highest_qualification = $request->get('highest_qualification');
        $student->save();

        // $student->courses()->sync($request->get('select_courses'));

        return redirect('/students')->with('success', 'Student has been updated');
    }

    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
 
        return redirect('/students')->with('success', 'Student has been deleted successfully');
    }
    
    public function downloadCv($id)
    {
        $student = Student::find($id);

        if (!$student) {
            abort(404);
        }
       
        $path =   $student->cv_file;
        
        return Storage::download($path);
    }
    
    //  export excel file 
//     public function downloadExcel()
// {
//     $students = Student::all(); 
//     return Excel::download(new StudentsExport($students), 'students.xlsx');
// }

}
