<?php

namespace Database\Seeders;

use App\Models\Modulo;
use Illuminate\Database\Seeder;

class modulosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Modulo::truncate();
  
        $csvFile = fopen(base_path("database/data/modulos_2023.csv"), "r");
  
        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, "|")) !== FALSE) {
            if (!$firstline) {
                Modulo::create([
                    "idMunicipio" => utf8_encode($data['0']),
                    "municipio" => utf8_encode($data['1']),
                    "nombre" => utf8_encode($data['2']),
                    "domicilio" => utf8_encode($data['3']),
                    "telefono_publico" => utf8_encode($data['4']),
                    "geolocalizacion" => utf8_encode($data['5']),
                    "responsable" => utf8_encode($data['6']),
                    "telefono_responsable" => utf8_encode($data['7']),
                    "longitud" => utf8_encode($data['8']),
                    "latitud" => utf8_encode($data['9']),
                    "status" => "1",
                ]);
            }
            $firstline = false;
        }
        fclose($csvFile);
    }
}
