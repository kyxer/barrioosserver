<?php
/**
* Author: German Mendoza
* Twitter: german0296
* Description: modelo para tabla blog, esta tabla se encarga de representar los articulos del blog
*/

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blog';

    protected $fillable = array('user_id', 'title', 'slug', 'body','image','published','created_at');

    public function setUpdatedAtAttribute($value)
    {
        // to Disable updated_at
    }
}