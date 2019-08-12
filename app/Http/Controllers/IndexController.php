<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entities\Student;

class IndexController extends Controller
{
    
    public function index()
    {
        $students = Student::with('items')->paginate();

        return view('students/index', compact('students'));
    }
}
