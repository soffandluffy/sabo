<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{

	protected $fillable = ['parent_id','tag','name', 'order'];

    public function parent(){
    	return $this->belongsTo('App\Menu', 'parent_id');
    }

    public function children(){
    	return $this->hasMany('App\Menu', 'parent_id');
    }

    public function pages(){
        return $this->hasOne(Pages::class);
    }

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'menus';
    
}
