<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TblControloperativo
 * 
 * @property Carbon $Fecha_Control
 * @property string $Encargado
 * @property string $Ubicacion
 * @property string $Turbiedad
 * @property string $Olor
 * @property string $Cloro
 * @property string $PH
 * @property string $Sabor
 * @property string $Temperatura
 * @property string $Observacion
 * @property string $Nom_Asada
 * @property int $idControl
 * 
 * @property TblRegistroasada $tbl_registroasada
 * @property Collection|TblEmpleadocontrol[] $tbl_empleadocontrols
 *
 * @package App\Models
 */
class TblControloperativo extends Model
{
	protected $table = 'tbl_controloperativo';
	protected $primaryKey = 'idControl';
	public $incrementing = true;
	public $timestamps = false;

	protected $dates = [
		'Fecha_Control'
	];

	protected $fillable = [
		'Fecha_Control',
		'Encargado',
		'Ubicacion',
		'Turbiedad',
		'Olor',
		'Cloro',
		'PH',
		'Sabor',
		'Temperatura',
		'Observacion',
		'Nom_Asada',
		'idControl'
	];

	public function tbl_registroasada()
	{
		return $this->belongsTo(TblRegistroasada::class, 'Nom_Asada');
	}

	public function tbl_empleadocontrols()
	{
		return $this->hasMany(TblEmpleadocontrol::class, 'idControl');
	}

}
