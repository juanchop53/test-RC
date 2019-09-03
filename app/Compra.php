<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{

    protected $fillable = ['id', 'cantidad', 'producto'];
	  
	 public function DetalleCompras()
    {
		 return $this->hasMany(DetalleCompra::class);
		
    }	
	
	
}
