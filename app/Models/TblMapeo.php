<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblMapeo
 * 
 * @property int $IdMapeo
 * @property mediumblob $Archivo_SHP
 * @property string $Nom_Asada
 * 
 * @property TblRegistroasada $tbl_registroasada
 *
 * @package App\Models
 */
class TblMapeo extends Model
{
	protected $table = 'tbl_mapeo';
	protected $primaryKey = 'IdMapeo';
	public $incrementing = true;
	public $timestamps = false;

	protected $casts = [
		'Archivo_SHP' => 'string'
	];

	protected $fillable = [
		'Archivo_SHP',
		'Nom_Asada'
	];

	public function tbl_registroasada()
	{
		return $this->belongsTo(TblRegistroasada::class, 'Nom_Asada');
	}
}
