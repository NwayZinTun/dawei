<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Placetype extends Model
{
    use SoftDeletes;
     protected $fillable = [
    	'id','name'];

    public function place()
    {
    	return $this->hasMany('App\Place');
    }

}