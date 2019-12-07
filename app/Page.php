<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    
    protected $fillable = ['menu_id', 'title', 'content'];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }

    public function user(){

    	return $this->belongsTo(User::class, 'created_by');

    }

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pages';
}
