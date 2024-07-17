<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Resources\StudentResource;
use Illuminate\Http\Request;
use Inertia\Inertia;

class StudentController extends Controller
{
    public function index(){
        $students = StudentResource::collection(Student::all());
        return Inertia::render('Students/Index', [
            'students' => $students,
        ]);
    }
}