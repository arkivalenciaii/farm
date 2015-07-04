<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';

    protected $fillable = ['name'];
    
/**
 * A belongsTo
 * 
 * @return collection of user info
 * 
 */
    function user()
    {
    	return $this->belongsTo('App\User');
    }
}
