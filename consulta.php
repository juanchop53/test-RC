<?php
echo "hola";
namespace App;

use Illuminate\Database\Eloquent\Model;

class detallecompra extends Model
{
    /**
     * Get the phone record associated with the user.
     */
    public function Categoria()
    {
        return $this->hasOne('App\Categoria');
		
    }
}
?>