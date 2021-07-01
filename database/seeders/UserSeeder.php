<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
// use Illuminate\Foundation\Auth\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $user1 = new User();
        $user1->fname = 'Oluyinka';
        $user1->lname = 'Deo';
        $user1->email = 'debbieibk8@gmail.com';
        $user1->user_group = 'student';
        $user1->phone_no = '08023423491';
        $user1->password = bcrypt('secret');
        $user1->email_verified_at = now();
        $user1->save();
       

        $user2 = new User();
        $user2->fname = 'Mike';
        $user2->lname = 'Thomas';
        $user2->email = 'mike@thomas.com';
        $user2->user_group = 'admin';
        $user2->phone_no = '08023423491';
        $user2->email_verified_at = now();
        $user2->password = bcrypt('secret');
        $user2->save();
    }
}
