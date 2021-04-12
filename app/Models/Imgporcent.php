<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class tbl_imgporcent
 * 
 * @property int $id
 * @property string $imagen
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class tbl_imgporcent extends Model
{
	protected $table = 'tbl_imgporcent';
	protected $primaryKey = 'id';
	public $timestamps = false;

	protected $fillable = [
		'imagen'
	];
}