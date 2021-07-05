<?php

namespace App\Http\Controllers\Portal;
use App\Models\Courses;
use App\Models\UserCourse;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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


    public function show(Request $request, Courses $course)
    {

        $meeting_id=(int) Str::replace(' ', '', $course['meeting_id']);
        return view('portal.course.show', [
            'key' => $course['passcode'],
            'api_key' => env('ZOOM_API_KEY'),
            'api_secret' => env('ZOOM_API_SECRET'),
            'role' => 0,
            'meeting_number' => $meeting_id,
            'signature' => $this->generate_signature(env('ZOOM_API_KEY'), env('ZOOM_API_SECRET'), $meeting_id, 0)
        ]);
    }

    /**
     * Generate a Signature to be used in Zoom API request.
     *
     * @param  mixed  $api_key 
     * @param  mixed  $api_secret
     * @param  int  $meeting_number
     * @param  int  $role
     * @return string
     */
    protected function generate_signature($api_key, $api_secret, $meeting_number, $role)
    {
        $time = time() * 1000 - 30000; //time in milliseconds (or close enough)
        $data = base64_encode($api_key . $meeting_number . $time . $role);
        $hash = hash_hmac('sha256', $data, $api_secret, true);
        $_sig = $api_key . "." . $meeting_number . "." . $time . "." . $role . "." . base64_encode($hash);
        return rtrim(strtr(base64_encode($_sig), '+/', '-_'), '=');
    }
}
