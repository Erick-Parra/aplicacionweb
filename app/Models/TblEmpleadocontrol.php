<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TblEmpleadocontrol
 * 
 * @property int $Empleado_Control
 * @property int $Cedula
 * @property Carbon $Fecha_Control
 * 
 * @property TblEmpleado $tbl_empleado
 * @property TblControloperativo $tbl_controloperativo
 *
 * @package App\Models
 */
class TblEmpleadocontrol extends Model
{
	protected $table = 'tbl_empleadocontrol';
	protected $primaryKey = 'Empleado_Control';
	public $timestamps = false;

	protected $casts = [
		'Cedula' => 'int'
	];

	protected $dates = [
		'Fecha_Control'
	];

	protected $fillable = [
		'Cedula',
		'Fecha_Control'
	];

	public function tbl_empleado()
	{
		return $this->belongsTo(TblEmpleado::class, 'Cedula');
	}

	public function tbl_controloperativo()
	{
		return $this->belongsTo(TblControloperativo::class, 'Fecha_Control');
	}
}
