<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Travel;


class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $travel = new Travel();
        
        $travel->destination = $faker->city();
        $travel->price = $faker->randomFloat(2, 300, 30000);
        $travel->passengers = $faker->numberBetween(1, 250);
        $travel->duration = $faker->numberBetween(1, 30);
        $travel->flight = $faker->numberBetween(0, 1);

        $travel->save();
    }
}
