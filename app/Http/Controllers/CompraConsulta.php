<?php
namespace App\Http\Controllers;
use App\{Compra, DetalleCompra, Categoria};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompraConsulta extends Controller

{
		public function compras()
    {
		$compras = compra::all();
		foreach ($compras as $compra)
			{
			return view('compras', ['compras' => $compras->toArray()]);	
			}
	}
	
	public function categorias()
	{
		$categorias = categoria::orderBy('producto', 'ASC')
		->get();
			echo "<body bgcolor=#ff9302><h1><font color=#ffffff>";
			// colores pagina RedCapital
			echo "Seleccionar el precio total de las compras ordenado por categoría "."</h1>";
		
		foreach ($categorias as $categoria)
		{
			echo "<h4>". $categoria->producto ."</h4>";
			echo "<ul>".($categoria->DetalleCompras()->get()-> sum('precio')) ."</ul>" ;
		}
	}
 
	public function detalleCompras()
	{
		echo "<body bgcolor=#ff9302><h1><font color=#ffffff>";
		echo "Seleccionar todas las compras con sus detalles asociados "."</h1>";
		
		foreach (compra::all() as $compra)
		{
			echo "<h4> Compra ID: (". $compra->id. ")  Producto: (". $compra->producto. ")  Cantidad: (" . $compra->cantidad.")</h4>";
			echo "<table><tr><th>"."   Nombre   "."</th><th>"."    Precio   "."</th> </tr></table>";
			
			foreach ($compra->DetalleCompras()->get() as $detalleCompra)
			{
			echo  "<ul>". $detalleCompra->nombre."   ".$detalleCompra->precio."</ul>";
			}	
		}
	}

}
	

		

