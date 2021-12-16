<?php

namespace Database\Seeders;
use App\Models\Animal;
use Illuminate\Database\Seeder;

class AnimalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a = new Animal;
        $a->name = "Leo";
        $a->weight = 356.1;
        $a->save();
    }
}
