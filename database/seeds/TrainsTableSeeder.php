<?php

use App\Models\Train;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = [
           [
            'train_type' => 'Regionale',
            'station' => 'Porta Nuova',
            'city' => 'Torino',
            'departure' => 10-30-00,
            'arrival' => 14-30-00
           ]
        ];

        foreach($trains as $elem){
            $newTrain = new Train();
            $newTrain->train_type = $elem['train_type'];
            $newTrain->station = $elem['station'];
            $newTrain->city = $elem['city'];
            $newTrain->departure = $elem['departure'];
            $newTrain->arrival = $elem['arrival'];
            $newTrain->save();
        }
    }
}
