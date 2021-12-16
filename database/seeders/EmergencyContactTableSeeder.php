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
        $ec = new EmergencyContact;
        $ec->name = "Max";
        $ec->phone_number = "0000000";
        $ec->animal_id = 1;
        $ec->save();

        $emergencyContact = EmergencyContact::factory()->count(10)->create();

    }
}
