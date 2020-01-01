<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

	protected $fillable = ['name', 'imageurl', 'content', 'status'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'articles';
}
