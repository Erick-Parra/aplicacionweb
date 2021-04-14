<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
/**
 * Class TblGaleria
 * 
 * @property int $idGaleria
 * @property string $Nombre
 * 
 *
 *  @property Collection|TblGaleria[]  

 * @package App\Models
 */
class TblGaleria extends Model
{
	protected $table = 'tbl_galeria';
	protected $primaryKey = 'idGaleria';
	public $incrementing = true;
	public $timestamps = false;

	protected $casts = [
		'Nombre' => 'string'
	];

	protected $fillable = [
		'Nombre'

	];

}