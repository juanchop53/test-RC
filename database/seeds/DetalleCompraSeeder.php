<?php
use App\DetalleCompra;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetalleCompraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DetalleCompra::create([
		'compra_id'=> '1','categoria_id'=> '1','nombre'=> 'Maria','precio'=> '10',
		]);
		
		DetalleCompra::create([
		'compra_id'=> '2','categoria_id'=> '1','nombre'=> 'Ana','precio'=> '15',
		]);
		
		DetalleCompra::create([
		'compra_id'=> '2','categoria_id'=> '2','nombre'=> 'Juan','precio'=> '20',
		]);
		
		DetalleCompra::create([
		'compra_id'=> '3','categoria_id'=> '3','nombre'=> 'Rosa','precio'=> '10',
		]);
		
		 DetalleCompra::create([
		'compra_id'=> '4','categoria_id'=> '1','nombre'=> 'Mariana','precio'=> '10',
		]);
		
		DetalleCompra::create([
		'compra_id'=> '5','categoria_id'=> '1','nombre'=> 'Anabel','precio'=> '15',
		]);
		
		DetalleCompra::create([
		'compra_id'=> '6','categoria_id'=> '2','nombre'=> 'Juan Diego','precio'=> '20',
		]);
		
		DetalleCompra::create([
		'compra_id'=> '6','categoria_id'=> '3','nombre'=> 'Rosalinda','precio'=> '10',
		]);
	
		// cargar datos de prueba
		
    }
}
