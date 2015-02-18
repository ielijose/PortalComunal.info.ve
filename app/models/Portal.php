<?php

class Portal extends Model {

	protected $table = 'portales';
	public $timestamp = true;

    protected $fillable = ['usuario_id', 'consejo_comunal', 'subdominio', 'logo', 'direccion'];

    protected static $rules = [
        'usuario_id' => 'required',
        'consejo_comunal' => 'required',
        'subdominio' => 'required',
        'direccion' => 'required',
    ];


    public function encargado()
    {
        return $this->belongsTo('User', 'usuario_id', 'id');
    }

    public function scopeCurrent($query)
    {
        return $query->where('usuario_id', '=', Auth::user()->id);
    }

    public function scopeSlug($query, $slug)
    {
        return $query->where('subdominio', '=', $slug);
    }
}