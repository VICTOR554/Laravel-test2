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
        $this->call(EnclosuresTableSeeder::class);
        $this->call(AnimalTableSeeder::class);
        $this->call(EmergencyContactTableSeeder::class);

        // \App\Models\User::factory(10)->create();
    }
}
