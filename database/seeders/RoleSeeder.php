<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $super_admin = new Role();
        $super_admin->name = 'Super Admin';
        $super_admin->slug = 'super-admin';
        $super_admin->save();

        $owner = new Role();
        $owner->name = 'Owner';
        $owner->slug = 'owner';
        $owner->save();

        $manager = new Role();
        $manager->name = 'Project Manager';
        $manager->slug = 'project-manager';
        $manager->save();

        $developer = new Role();
        $developer->name = 'Web Developer';
        $developer->slug = 'web-developer';
        $developer->save();
    }
}
