<?php
use App\compra;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	
		compra::create([
		'cantidad'=> '1', 'producto'=> 'Model 1'
		]);
	
		compra::create([
		'cantidad'=> '2', 'producto'=> 'Model 2'
		]);
		
		compra::create([
		'cantidad'=> '3', 'producto'=> 'Model 3'
		]);
		  compra::create([
		'cantidad'=> '1', 'producto'=> 'Model 4'
		]);
	
		compra::create([
		'cantidad'=> '2', 'producto'=> 'Model 5'
		]);
		
		compra::create([
		'cantidad'=> '3', 'producto'=> 'Model 6'
		]);
		
		// cargar datos de prueba
		
    }
}
