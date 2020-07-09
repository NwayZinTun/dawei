<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Listing extends Model
{
    use SoftDeletes;
     protected $fillable = [
    	'id','name','photo','day','user_id'];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
     public function ListingDetails()
    {
    	return $this->hasMany('App\ListingDetails');
    }
}
