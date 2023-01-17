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
            'station' => 'Piazza Principe',
            'city' => 'Genova',
            'departure' => '9:30:00',
            'arrival' => '11:30:00'
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
