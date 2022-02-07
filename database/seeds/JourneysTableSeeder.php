<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Journey;

class JourneysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i < 100; $i++){
            $journey = new Journey();  
            $journey->destination = $faker->city();
            $journey->price = $faker->randomFloat(2, 300, 30000);
            $journey->passengers = $faker->numberBetween(1, 250);
            $journey->duration = $faker->numberBetween(1, 30);
            $journey->flight = $faker->numberBetween(0, 1);
            $journey->save();
        }
        
    }
}
