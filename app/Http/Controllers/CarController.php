<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\CategoryCar;

class CarController extends Controller
{
	public function  store(Request $req) {
		$car = new CategoryCar();
		$car->nombre_encuestador = $req->nombre;
		$car->particular = $req->particular;
		$car->bicicleta = $req->bicicleta;
		$car->motocicleta = $req->motocicleta;
		$car->taxi = $req->taxi;
		$car->publico = $req->publico;
		$car->repartidor = $req->repartidor;
		$car->calle_relevamiento = $req->relevamiento;
		$car->calle_lateral_a = $req->lateral_a;
		$car->calle_lateral_b = $req->lateral_b;
		$car->temperatura = $req->temperatura;
		$car->condiciones = $req->condiciones;
		$car->hora_inicio = $req->inicio;
		$car->hora_fin = $req->fin;
		$car->fecha = $req->fecha;
		$car->nota = $req->nota;
		$car->save();
		return "1";
	}
}