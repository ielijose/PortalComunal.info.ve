<?php

class UsuarioController extends BaseController {

	public function dashboard()
	{		
		return View::make('usuario.dashboard');
	}

	public function portal()
	{
		$portal = Portal::find(Auth::user()->portal_id);
		return View::make('usuario.portal', ['portal' => $portal]);
	}

	public function registrar()
	{
		$inputs = Input::all();
		//dd($inputs);

		$inputs['nombre'] = Auth::user()->nombre;
		$inputs['apellido'] = Auth::user()->apellido;
		$inputs['usuario_id'] = Auth::user()->id;
		$inputs['semestre'] = Auth::user()->getSemestreId();
		/* usuario */
		if(isset(Auth::user()->usuario->id)){
			$usuario = usuario::find(Auth::user()->usuario->id);
		}else{
			$usuario = new usuario($inputs);
		}
		
		$usuario->save();
		/* PASANTIA */
		$pasantia = new Pasantia($inputs);
		$pasantia->usuario_id = $usuario->id;
		$pasantia->save();
		/* EMPRESA */
		$empresa = new Empresa();

		$empresa->empresa = $inputs['empresa'];
		$empresa->direccion = $inputs['empresa_direccion'];
		$empresa->telefono = $inputs['empresa_telefono'];
		$empresa->correo = $inputs['empresa_correo'];
		$empresa->pasantia_id = $pasantia->id;
		$empresa->save();


		$text = "Acabas de registrar una pasantia, recibirar algunas notificaciones del proceso por este medio.";
		$usuario->sms($text);

		return Redirect::to('/')->with('alert', ['type' => 'success', 'message' => 'Pasantia registrada con exito.']);
	}

	public function generarCarta()
	{
		$p = Pasantia::current()->self()->get()[0];
		$html = utf8_decode(View::make('usuario.carta', ['p' => $p]));
		return PDF::load($html, 'A4', 'portrait')->show();
	}

	public function pasantias()
	{
		return View::make('usuario.pasantias', ['pasantias' => Pasantia::self()->get()]);
	}

	public function pasantia($id)
	{
		$pasantia = Pasantia::self()->find($id);

		return View::make('usuario.pasantia', ['pasantia' => $pasantia]);
	}

	public function documentos()
	{
		return View::make('usuario.documentos');
	}

	public function calendario()
	{
		return View::make('usuario.calendario', ['id' => Semestre::current()->first()->id]);
	}

	public function eventos_semestre($id)
	{
		$s = Semestre::find($id);
		echo $s->eventos->toJson();
	}
}