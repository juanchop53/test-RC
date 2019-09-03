<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneroPelicula extends Controller
{
    public function genero($genero)
    {
		switch ($genero)
		{
		case 'drama':
			return "Genero ($genero), Llanto";
		break;
	
		case 'accion':
			return "Genero ($genero), Emoción!!!";
		break;
	
		case 'comedia':
			return "Genero ($genero), Risas";
		break;
	
		case 'terror':
			return "Genero ($genero), Adrenalina!!";
		break;
		
		case '*':
			return Response::make($layout, 404);
		break;
	
	}

    }	
}
