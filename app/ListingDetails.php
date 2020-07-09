<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Place;


class ListingDetails extends Model
{
    use SoftDeletes;
     protected $fillable = [
    	'id','listing_id','content'];

    public function places()
    {
    	return $this->belongsToMany('App\Place', 'listingdetailsplaces','listing_details_id','places_id');
    }
}
