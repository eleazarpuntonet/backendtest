<?php
use App\Cars;
use Illuminate\Database\Seeder;

class carseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        	$json = file_get_contents("database/seeds/autosdata.json");
        	$json_data = json_decode($json,true);

            foreach ($json_data as $carData) {
                $car                  = new App\Cars;
                $car->model        = $carData['modelo'];
                $car->year        = $carData['anio'];
                $car->color        = $carData['color'];
                $car->save();
            }
    }
}
