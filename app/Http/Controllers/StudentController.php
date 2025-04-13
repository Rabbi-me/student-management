<?php

namespace App\Http\Controllers;

use App\Models\Student;  // Import the Student model
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve all students from the database
        $students = Student::all();
        
        // Return the view with students data
        return view('index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation logic (can add later)
        
        // Store the new student
        $student = Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);
        
        // Redirect to the students index page
        return redirect()->route('students.index');
    }

    // The other functions (show, edit, update, destroy) will be implemented similarly
}
