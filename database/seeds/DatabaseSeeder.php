<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
   
    public function run()
    {
        $this->call(RolesAndPermissionsSeeder::class);

        $user = User::create([
            'name'          => 'Admin',
            'email'         => 'admin@cec.edu.ph',
            'password'      => bcrypt('password'),
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        $user->assignRole('Admin');

        $user2 = User::create([
            'name'          => 'Tinay',
            'email'         => 'faculty@cec.edu.ph',
            'password'      => bcrypt('password'),
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        $user2->assignRole('Teacher');

        DB::table('teachers')->insert([
            [
                'user_id'           => $user2->id,
                'gender'            => 'female',
                'phone'             => '09262978713',
                'dateofbirth'       => '2001-12-15',
                'permanent_address' => 'Philippines',
                'created_at'        => date("Y-m-d H:i:s")
            ]
        ]);

        DB::table('grades')->insert([
            'teacher_id'        => 1,
            'class_numeric'     => 1,
            'class_name'        => 'BSIT',
        ]);

    

    }
}
