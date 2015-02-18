<?php

class EncargadoController extends BaseController {

	public function dashboard()
	{		
		return View::make('encargado.dashboard');
	}

	public function crearPortal()
	{
		return View::make('encargado.crear-portal');
	}

	public function crearPortal_post()
	{
		$inputs = Input::all();
		$inputs['subdominio'] = Str::slug($inputs['consejo_comunal']);
		$inputs['usuario_id'] = Auth::user()->id;
		//dd($inputs);
	
		$portal = new Portal($inputs);
		if ($portal->save())
		{
			return Redirect::to('/')->with('alert', ['type' => 'success', 'message' => 'El portal ha sido creado.']);;			
		}        
		//dd($branch->getErrors());
        return Redirect::to('/')->with('alert', ['type' => 'danger', 'message' => 'Ocurrio un error, intenta mas tarde.']);;

	}

	public function editarPortal()
	{
		$portal = Portal::current()->first();
		//echo json_encode($portal); exit;
		return View::make('encargado.editar-portal', ['portal' => $portal]);
	}

	public function editarPortal_post()
	{
		$inputs = Input::all();
		$inputs['subdominio'] = Str::slug($inputs['consejo_comunal']);
		
		$portal = Portal::current()->first();


		$portal->fill($inputs);
		if ($portal->save())
		{
			return Redirect::to('/')->with('alert', ['type' => 'success', 'message' => 'Datos guardados.']);;			
		}        
		//dd($branch->getErrors());
        return Redirect::to('/')->with('alert', ['type' => 'danger', 'message' => 'Ocurrio un error, intenta mas tarde.']);;
	}
	

	public function eliminarPortal()
	{
		$portal = Portal::current()->first();

		$metas = Meta::where('portal_id', $portal->id)->get();
		foreach ($metas as $key => $value) {
			Meta::destroy($value->id);
		}
		Portal::destroy($portal->id);
		return Redirect::to('/')->with('alert', ['type' => 'info', 'message' => 'Portal eliminado.']);;
	}


	public function carteleraInformativa()
	{	
		$cartelera = Meta::key('cartelera')->first();	
		$c = (count($cartelera)>0) ? $cartelera->value : '';

		return View::make('encargado.cartelera-informativa', ['cartelera' => $c]);
	}

	public function meta_post()
	{		
		$inputs = Input::all();
		$portal_id = Auth::user()->portal->id;
		

		foreach ($inputs as $key => $value) {

			$meta = Meta::firstOrNew(['key' => $key, 'portal_id' => $portal_id]);
			$meta->value = $value;
			$meta->save();
		}
		return Redirect::to('/')->with('alert', ['type' => 'success', 'message' => 'Datos guardados.']);

		//return View::make('encargado.cartelera-informativa');
	}

	

	public function misionVision()
	{		
		$mision = Meta::key('mision')->first();	
		$m = (count($mision)>0) ? $mision->value : '';

		$vision = Meta::key('vision')->first();	
		$v = (count($vision)>0) ? $vision->value : '';

		return View::make('encargado.mision-vision',['mision' => $m, 'vision' => $v]);
	}

	public function directiva()
	{		
		$directiva = Meta::key('directiva')->first();	
		$d = (count($directiva)>0) ? $directiva->value : '';		

		return View::make('encargado.directiva', ['directiva' => $d]);
	}

	public function proyectos()
	{		
		$proyectos = Meta::key('proyectos')->first();	
		$p = (count($proyectos)>0) ? $proyectos->value : '';		

		return View::make('encargado.proyectos', ['proyectos' => $p]);
	}

	public function faq()
	{		
		return View::make('encargado.faq');
	}


	public function miembros()
	{	
		$miembros = User::where('portal_id', Auth::user()->portal->id)->get();
		
		return View::make('encargado.miembros', ['miembros' => $miembros]);
	}

	

}