<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Student::factory(2)->create();

        $this->call([
            UserSeeder::class,
           
        ]);
    }
}
