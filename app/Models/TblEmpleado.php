<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TblEmpleado
 * 
 * @property int $Cedula
 * @property string $Nombre
 * @property string $Apellido_1
 * @property string $Apellido_2
 * @property int $Telefono
 * @property string $Direccion
 * @property string $Correo
 * @property string $Contraseña
 * 
 * @property Collection|TblEmpleadocontrol[] $tbl_empleadocontrols
 *
 * @package App\Models
 */
class TblEmpleado extends Model
{
	protected $table = 'tbl_empleado';
	protected $primaryKey = 'Cedula';
	public $timestamps = false;

	protected $casts = [
		'Telefono' => 'int'
	];

	protected $fillable = [
		'Nombre',
		'Apellido_1',
		'Apellido_2',
		'Telefono',
		'Direccion',
		'Correo',
		'Contraseña'
	];

	public function tbl_empleadocontrols()
	{
		return $this->hasMany(TblEmpleadocontrol::class, 'Cedula');
	}
}
