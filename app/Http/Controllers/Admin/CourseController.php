<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Courses;

class CourseController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        return view('admin/create_course');
    }

    public function submit_course(Request $request)
    {
        $this->validate($request,[
            'course_name' => 'required|string',
            'payment_type' => 'required|email',
            'amount' => 'required|string',
            'duration' => 'required|string',
        ]);

        Courses::create([
            'user_id'=>auth()->user()->id,
            'official'=>auth()->id(),
            'name'=>$request ->course_name,
            'slug'=>$request ->course_name,
            'payment_type'=>$request ->payment_type,
            'amount'=>$request ->amount,
            'duration'=>$request ->duration,
            'zoom_link'=>$request ->zoom_link,
            'passcode'=>$request ->passcode,
            'official'=>auth()->id(),
        ]);
            return back();
    }
}
