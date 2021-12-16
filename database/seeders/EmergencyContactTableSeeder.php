<?php

namespace Database\Seeders;
use App\Models\EmergencyContact;

use Illuminate\Database\Seeder;

class EmergencyContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $e = new EmergencyContact;
        $e->name = "Max";
        $e->phone_number = "0000000";
        $e->animal_id = 1;
        $e->save();
    }
}
