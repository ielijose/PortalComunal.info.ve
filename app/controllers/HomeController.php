<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function cc($cc, $page = null)
	{
		$portal = Portal::slug($cc)->first();

		switch ($page) {
			case 'cartelera':
				return $this->cartelera($portal->id);
				break;

			case 'mision-vision':
				return $this->mv($portal->id);
				break;

			case 'directiva':
				return $this->directiva($portal->id);
				break;

			case 'proyectos':
				return $this->proyectos($portal->id);
				break;
			
			default:
				return $this->index($portal->id);
				break;
		}
		//echo $page;

		//echo json_encode($portal);
	}
	

	public function index($id)
	{
		$portal = Portal::find($id);
		return View::make('frontend.index', ['portal' => $portal]);
	}

	public function cartelera($id)
	{
		$portal = Portal::find($id);

		$cartelera = Meta::key('cartelera', $portal->id)->first();	
		$c = (count($cartelera)>0) ? $cartelera->value : '';

		return View::make('frontend.cartelera', ['portal' => $portal, 'cartelera' => $c]);
	}

	public function mv($id)
	{
		$portal = Portal::find($id);

		$mision = Meta::key('mision', $portal->id)->first();	
		$m = (count($mision)>0) ? $mision->value : '';

		$vision = Meta::key('vision', $portal->id)->first();	
		$v = (count($vision)>0) ? $vision->value : '';

		return View::make('frontend.mision-vision', ['portal' => $portal, 'mision' => $m, 'vision' => $v]);
	}


	public function directiva($id)
	{
		$portal = Portal::find($id);

		$directiva = Meta::key('directiva', $portal->id)->first();	
		$d = (count($directiva)>0) ? $directiva->value : '';

		return View::make('frontend.directiva', ['portal' => $portal, 'directiva' => $d]);
	}


	public function proyectos($id)
	{
		$portal = Portal::find($id);

		$proyectos = Meta::key('proyectos', $portal->id)->first();	
		$p = (count($proyectos)>0) ? $proyectos->value : '';

		return View::make('frontend.proyectos', ['portal' => $portal, 'proyectos' => $p]);
	}

}
