<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Permission;
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
        $developer = Role::where('slug','web-developer')->first();
        $manager = Role::where('slug', 'project-manager')->first();
        $createTasks = Permission::where('slug','create-tasks')->first();
        $manageUsers = Permission::where('slug','manage-users')->first();

        $user1 = new User();
        $user1->fname = 'Oluyinka';
        $user1->lname = 'Deo';
        $user1->email = 'yinka@yinka.com';
        $user1->phone_no = '08023423491';
        $user1->uuid = '07778ed754d9-4f7c-bd44-c41e96e0dbbf';
        $user1->password = bcrypt('secret');
        $user1->save();
        $user1->roles()->attach($developer);
        $user1->permissions()->attach($createTasks);


        $user2 = new User();
        $user2->fname = 'Mike';
        $user2->lname = 'Thomas';
        $user2->email = 'mike@thomas.com';
        $user2->phone_no = '08023423491';
        $user2->uuid = '077ed754d9-467e-4f7cc41e96e0dbbf';
        $user2->password = bcrypt('secret');
        $user2->save();
        $user2->roles()->attach($manager);
        $user2->permissions()->attach($manageUsers);
    }
}
