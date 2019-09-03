<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
	public function DetalleCompras()
    {
    return $this->hasMany(DetalleCompra::class);
	}
		
}

