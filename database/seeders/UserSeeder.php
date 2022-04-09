<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name ='Mubarak Hussain';
        $user->email ="mubarakbd@gmail.com";
        $user->password =Hash::make("123mumin");
        $user->is_admin = true;
        $user->save();
}

}