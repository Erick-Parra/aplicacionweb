<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class JuntaDirectiva
 * 
 * @property int $id
 * @property string $Presidente
 * @property string $vicePresidente
 * @property string $Secretario
 * @property string $Tesorero
 * @property string $Vocal
 * @property string $Suplente1
 * @property string $Suplente2
 * @property string $Fiscal
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class JuntaDirectiva extends Model
{
	protected $table = 'junta_directiva';

	protected $primaryKey = 'id';

	protected $fillable = [
		'Nombre',
		'Puesto',
		'Asada'
	];
}
