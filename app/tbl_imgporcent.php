<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_imgporcent extends Model
{
    protected $table = 'tbl_imgporcent';
	protected $primaryKey = 'id';

	protected $fillable = [
		'imagen'
	];
}
