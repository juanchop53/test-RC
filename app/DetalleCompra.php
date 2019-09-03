<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleCompra extends Model
{
	
	protected $fillable = ['id', 'compra_id', 'categoria_id','nombre','precio'];
	
  public function compras()
  {
	   return $this->belongsTo(Compra::class);
  }
	
	  public function categorias()
  {
	   return $this->belongsTo(Compra::class);
  }
}
