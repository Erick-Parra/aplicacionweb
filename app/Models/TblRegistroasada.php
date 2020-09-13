<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TblRegistroasada
 *
 * @property string $Nom_Asada
 * @property Carbon $Fecha_Registro
 * @property int $ced_Juridica
 * @property string $Num_Convenio
 * @property int $Cant_Abonados
 * @property Carbon $Fecha_Solicitud
 * @property int $Num_Sesion
 * @property string $Presidente
 * @property string $VicePresidente
 * @property string $Tesorero
 * @property string $Vocal_1
 * @property string $Vocal_2
 * @property string $Fiscal
 * @property string $Razon_Afiliacion
 * @property int $Telefono
 * @property string $Correo
 * @property int $idAsada
 * @property string $nombreRegion
<<<<<<< HEAD
 *
=======
 *
>>>>>>> 91076b8b1643b8279469f979072e5693c1ddc38e
 * @property Collection|TblControloperativo[] $tbl_controloperativos
 * @property Collection|TblMapeo[] $tbl_mapeos
 *
 * @package App\Models
 */
class TblRegistroasada extends Model
{
	protected $table = 'tbl_registroasada';
	protected $primaryKey = 'idAsada';
	public $timestamps = false;

	protected $casts = [
		'ced_Juridica' => 'int',
		'Cant_Abonados' => 'int',
		'Num_Sesion' => 'int',
		'Telefono' => 'int'
	];

	protected $dates = [
		'Fecha_Registro',
		'Fecha_Solicitud'
	];

	protected $fillable = [
		'Nom_Asada',
		'Fecha_Registro',
		'ced_Juridica',
		'Num_Convenio',
		'Cant_Abonados',
		'Fecha_Solicitud',
		'Num_Sesion',
		'Presidente',
		'VicePresidente',
		'Tesorero',
		'Vocal_1',
		'Vocal_2',
		'Fiscal',
		'Razon_Afiliacion',
		'Telefono',
		'Correo',
		'nombreRegion'
	];

	public function tbl_controloperativos()
	{
		return $this->hasMany(TblControloperativo::class, 'Nom_Asada', 'Nom_Asada');
	}

	public function tbl_mapeos()
	{
		return $this->hasMany(TblMapeo::class, 'Nom_Asada', 'Nom_Asada');
	}


	public function getRouteKeyName()
	{
		return 'Nom_Asada';
	}


}
