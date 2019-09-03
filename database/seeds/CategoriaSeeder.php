<?php
use App\categoria;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        categoria::create([
		'producto'=> 'Desktop',
		]);
	
		categoria::create([
		'producto'=> 'Laptop',
		]);
		
		categoria::create([
		'producto'=> 'Tablet',
		]);
		// cargar datos de prueba
		
    }
}
