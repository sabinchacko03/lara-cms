<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $user = new User;
        $user->name = 'Samuel Jackson';
        $user->email = 'sabin@gmail.com';
        $user->password = bcrypt('sabin123');
        $user->save();
        $user->roles()->attach(Role::where('name', 'user')->first());

        $admin = new User;
        $admin->name = 'Neo Ighodaro';
        $admin->email = 'admin@gmail.co';
        $admin->password = bcrypt('admin123');
        $admin->save();
        $admin->roles()->attach(Role::where('name', 'admin')->first());
    }

}
