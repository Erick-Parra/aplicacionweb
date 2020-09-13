<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblEmpleadocontrol
 * 
 * @property int $Empleado_Control
 * @property int $Cedula
 * @property int $idControl
 * 
 * @property TblControloperativo $tbl_controloperativo
 * @property TblEmpleado $tbl_empleado
 *
 * @package App\Models
 */
class TblEmpleadocontrol extends Model
{
	protected $table = 'tbl_empleadocontrol';
	protected $primaryKey = 'Empleado_Control';
	public $timestamps = false;

	protected $casts = [
		'Cedula' => 'int',
		'idControl' => 'int'
	];

	protected $fillable = [
		'Cedula',
		'idControl'
	];

	public function tbl_controloperativo()
	{
		return $this->belongsTo(TblControloperativo::class, 'idControl');
	}

	public function tbl_empleado()
	{
		return $this->belongsTo(TblEmpleado::class, 'Cedula');
	}
}
