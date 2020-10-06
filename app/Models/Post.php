<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Post
 * 
 * @property int $Id
 * @property string $TituloNoti
 * @property string $InfoNoti
 * @property string $imagen
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Post extends Model
{
	protected $table = 'posts';
	protected $primaryKey = 'Id';

	protected $fillable = [
		'TituloNoti',
		'InfoNoti',
		'imagen'
	];
}
