<?php

use Illuminate\Database\Seeder;
use App\Models\Flight;
use Faker\Generator as Faker;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        /*  $flights = [
      [
        'name' => 'Bamboo Hotel',
      ], 
      [
        'name' => 'Horizon Hotel',
      ], 
     
    ]; */
   /*  foreach($flights as $flight){
        $newflight = new Flight();
        $newflight->package_name =$flight['name'];
        $newflight->save();
    } */
         for ($i=0; $i < 3; $i++) { 
            $newflight = new Flight();
            $newflight->package_name = $faker->numerify();
             $newflight->checkin_date =$faker->dateTime();
            $newflight->checkout_date =$faker->dateTime();
            $newflight->price =$faker->randomFloat(2, 0, 999); 
            $newflight->save();
        } 
    }
}
