<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ticket extends Model
{
     use SoftDeletes;
     protected $fillable = [
    	'id','name','photo','email','address'];
}
