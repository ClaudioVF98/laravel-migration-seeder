<?php

use App\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    private $companies = [
        'Italo',
        'Trenitalia',
        'Trenord'
    ];

    private $stations = [
        'Milano',
        'Torino',
        'Roma',
        'Napoli',
        'Firenze'
    ];
    // /**
    //  * Run the database seeds.
    //  *
    //  * @return void
    //  */
    public function run(Faker $faker)
    {
        for ($i=0; $i<100; $i++) {
            $train = new Train();
            $train->azienda = $this->companies[rand(0,2)];
            $train->stazione_di_partenza = $this->stations[rand(0,4)];
            $train->stazione_di_arrivo = $this->stations[rand(0,4)];
            $train->orario_di_partenza = $faker->time();
            $train->orario_di_arrivo = $faker->time();
            $train->codice_treno = $faker->randomNumber(4, true);
            $train->numero_carrozze = $faker->numberBetween(5,10);
            $train->in_orario = $faker->boolean();
            $train->cancellato = $faker->boolean();
            $train->save();
        }
    }
}
