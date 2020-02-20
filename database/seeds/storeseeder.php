<?php
use App\Stores;
use Illuminate\Database\Seeder;

class storeseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$json = file_get_contents("database/seeds/tiendasdata.json");
    	$json_data = json_decode($json,true);

        foreach ($json_data as $storeData) {
            $store            = new App\Stores;
            $store->storename = $storeData['tienda'];
            $store->address   = $storeData['direccion'];
            $store->phone     = $storeData['telefono'];
            $store->status     = 1;
            $store->save();
        }
    }
}
