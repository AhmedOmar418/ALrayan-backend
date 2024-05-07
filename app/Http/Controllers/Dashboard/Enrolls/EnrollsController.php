<?php

namespace App\Http\Controllers\Dashboard\Enrolls;

use App\Http\Controllers\Controller;
use App\Mail\EnrollMail;
use App\Models\Enrolls;
use App\Traits\apiResponseTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EnrollsController extends Controller
{
    use apiResponseTrait;
    public function store(Request $request)
    {
        //validate the request
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'course' => 'required',
            'age' => 'required',
            'student_gender'=>'required',
            'teacher_gender'=>'required',
            'plan'=>'required',
            'days'=>'required'
        ]);

        $data = $request->all();
        //store the data
        $data = Enrolls::create($data);
        Mail::to('ahmmedd606@gmail.com')->send(new EnrollMail($data));
        return $this->apiResponse($data, 'Enroll added successfully', 200);
    }
    public function index()
    {
        $enrolls = Enrolls::all();
        return $this->apiResponse($enrolls, 'All enrolls', 200);
    }
}
