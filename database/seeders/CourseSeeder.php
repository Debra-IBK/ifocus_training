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
        $course1 ->user_id = '1';
        $course1 ->name = 'Video Editing';
        $course1 ->slug = 'video_editing';
        $course1 ->amount = '$1000';
        $course1 ->duration= '13';
        $course1 ->zoom_link = "http://ifocustraining/create_course";
        $course1 ->passcode = bcrypt('secret');
        $course1 ->save();


        $course2 = new Courses();
        $course2 ->user_id = '2';
        $course2 ->name = 'Cinimatography';
        $course2 ->slug = 'cinimatography';
        $course2 ->amount = '$1000';
        $course2 ->duration= '13';
        $course2 ->zoom_link = "http://ifocustraining/create_course";
        $course2 ->passcode = bcrypt('secret');
        $course2 ->save();
    }
}
