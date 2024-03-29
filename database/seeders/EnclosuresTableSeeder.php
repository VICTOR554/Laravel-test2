<?php

namespace Database\Seeders;
use App\Models\Enclosure;
use Illuminate\Database\Seeder;

class EnclosuresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $e = new Enclosure;
        $e->name = "Central Enclosure";
        $e->save();

        $enclosures = Enclosure::factory()->count(10)->create();

    }
}
