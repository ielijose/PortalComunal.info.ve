<?php

class CoordinadorController extends BaseController {

	public function dashboard()
	{
		return View::make('coordinador.dashboard');
	}

	public function portales()
	{	
		$portales = Portal::all();
		
		return View::make('coordinador.portales', ['portales' => $portales]);
	}

	public function usuarios()
	{	
		$usuarios = User::all();
		
		return View::make('coordinador.usuarios', ['usuarios' => $usuarios]);
	}

	public function eliminarPortal($id)
	{	
		$portal = Portal::find($id);

		$metas = Meta::where('portal_id', $portal->id)->get();
		foreach ($metas as $key => $value) {
			Meta::destroy($value->id);
		}
		Portal::destroy($portal->id);
		return Redirect::to('/')->with('alert', ['type' => 'info', 'message' => 'Portal eliminado.']);;
	}

}