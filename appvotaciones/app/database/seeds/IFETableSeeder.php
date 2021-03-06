<?php

use Illuminate\Support\Facades\Hash;

class IFETableSeeder extends Seeder {

    public function getKey()
    {
        $len = 18;
        $key = '';
        while( $len-- )
        {
            $key = $key.chr( rand ( 65 , 90 ) );
        }
        return $key;
    }

    public function run()
    {
        $faker = Faker\Factory::create();

        $this->command->info('Iniciando inserción!');
        DB::table('DBIFE')->delete();

        $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
        $cad = "";
        



        for ($i = 0; $i < 300; $i++){
        	$votante = DBIFE::create(array(
        	'nombre'=>$faker->name,
        	'clave_elector'=>$this->getkey(),
        	// 'huella'=>'123456',
        	'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
            ));
        }

    }
}