<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\Controller;
use App\Models\UserCourse;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the portal dashboard
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('portal.course.index', [
            'courses' => UserCourse::getPaidCourse(request()->user()),
        ]);
    }
}
