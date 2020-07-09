<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Placetype;
use App\ListingDetails;
class Place extends Model
{
    
	use SoftDeletes;
 	protected $fillable = [
    	'id','name','photo','address','distance','description','placetype_id'];

    public function placetype()
    {
    	return $this->belongsTo('App\Placetype');
    }
    public function listingdetails()
    {
    	return $this->belongsToMany('App\ListingDetails','listingdetailsplaces','listing_details_id','places_id');
    }
}