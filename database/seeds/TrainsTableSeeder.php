<?php

use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

use App\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 100; $i++) { 
            $newTrain = new Train();
            $newTrain -> companyName =  $faker->word ();
            $newTrain -> departureStation = $faker -> city ();
            $newTrain -> arrivalStation = $faker -> city ();
            $newTrain -> departureTime =  $faker->time('H:i:s');
            $newTrain -> arrivalTime = $faker->time('H:i:s');
            $newTrain -> trainCode= $faker->randomNumber(6, true);
            $newTrain -> coaches= $faker->numberBetween(11, 15);
            $newTrain -> onTime= $faker->boolean();
            $newTrain -> cancelled = $faker->boolean();
            $newTrain -> save();
        }
    }
}
