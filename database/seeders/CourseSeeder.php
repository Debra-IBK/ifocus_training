<?php

namespace Database\Seeders;

use App\Models\Courses;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $course1 = new Courses();
        $course1->user_id = '1';
        $course1->name = 'Video Editing';
        $course1->slug = 'video_editing';
        $course1->amount = '$1000';
        $course1->duration = '13';
        $course1->start_date = '2021-08-01 19:16:40';
        $course1->end_date = '2021-10-31 19:16:40';
        $course1->payment_exp_date = '2021-10-31 19:16:40';
        $course1->zoom_link = "https://us05web.zoom.us/j/8616081209?pwd=dkEwVEVIK2R1RmRHaENYREFDY1hJUT09";
        $course1->meeting_id = '861 608 1209';
        $course1->passcode = 'Editing';
        $course1->save();


        $course2 = new Courses();
        $course2->user_id = '1';
        $course2->name = 'Cinimatography';
        $course2->slug = 'cinimatography';
        $course2->amount = '$1000';
        $course2->duration = '13';
        $course2->start_date = '2021-08-01 19:16:40';
        $course2->end_date = '2021-10-31 19:16:40';
        $course2->payment_exp_date = '2021-10-31 19:16:40';
        $course2->zoom_link = "https://us05web.zoom.us/j/8616081209?pwd=dkEwVEVIK2R1RmRHaENYREFDY1hJUT09";
        $course2->meeting_id = '861 608 1209';
        $course2->passcode = 'Editing';
        $course2->save();
    }
}
