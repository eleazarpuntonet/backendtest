<?php
use App\Inventarios;
use Illuminate\Database\Seeder;

class inventario extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        	$json = file_get_contents("database/seeds/relaciones.json");
        	$json_data = json_decode($json,true);

            foreach ($json_data as $inv) {
                $inventario            = new App\Inventarios;
                $inventario->stores_id = $inv['tienda_id'];
                $inventario->cars_id   = $inv['auto_id'];
                $inventario->cantidad  = $inv['cantidad'];
                $inventario->save();
            }
    }
}
