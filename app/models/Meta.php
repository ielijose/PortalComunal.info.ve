<?php

class Meta extends Model {

	protected $table = 'meta';
	public $timestamp = true;

    protected $fillable = ['portal_id', 'key', 'value'];

    protected static $rules = [
        'key' => 'required',
    ];


    public static function boot()
    {
        parent::boot();

        static::creating(function($meta)
        {             

           $meta->portal_id = Auth::user()->portal->id;

        });
        
    }

    public function scopeCurrent($query, $portal_id)
    {	
    	if($portal_id == null){
    		$portal_id = Auth::user()->portal->id;
    	}
    		
        return $query->where('portal_id', $portal_id);
    }

    public function scopeKey($query, $key, $portal_id = null)
    {
    	if($portal_id == null){
    		$portal_id = Auth::user()->portal->id;
    	}
        return $query->current($portal_id)->where('key', '=', $key);
    }

}