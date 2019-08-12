<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entities\Student;

class IndexController extends Controller
{
    
    public function index(Request $request)
    {
        $query = Student::with('items');
        if ($search = $request->input('search')) {
            $query->search($search);
        }
        $students = $query->paginate();
        return view('students/index', compact('students'));
    }
}
