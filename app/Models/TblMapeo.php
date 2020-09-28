<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
/**
 * Class TblMapeo
 * 
 * @property int $IdMapeo
 * @property mediumblob $Archivo_SHP
 * @property string $Nom_Asada
 * 
 * @property TblRegistroasada $tbl_registroasada
 *
 *  @property Collection|TblMapeo[]  $tbl_empleadocontrols

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
		'Nom_Asada',
		'Archivo_SHP'

	];
	

	public function tbl_registroasada()
	{
		return $this->belongsTo(TblRegistroasada::class, 'Nom_Asada', 'Nom_Asada');
	}

	public function scopeSearch($query, $Nom_Asada){
		return $query->where('Nom_Asada', 'LIKE', "%$Nom_Asada%");
	}
}
