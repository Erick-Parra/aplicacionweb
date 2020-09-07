<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tblRegion extends Model
{
    public function region()
    {
    	return $this->belongsTo(Category::class); 

    }
}
