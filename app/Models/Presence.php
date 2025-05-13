<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Presence
 * 
 * @property int $ID_PRESENCE
 * @property string $REFERENCE
 * @property string $LIBEL
 * @property string $REFERENCE_PLANNING
 * @property string $SERVICE
 * @property string $DIRECTION
 * @property string $RESPONSIBLE
 * @property string $OBSERVATION
 * @property int $DATE_POST
 * @property int $ID_PLANNING
 *
 * @package App\Models
 */
class Presence extends Model
{
	protected $table = 'presences';
	protected $primaryKey = 'ID_PRESENCE';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_PRESENCE' => 'int',
		'DATE_POST' => 'int',
		'ID_PLANNING' => 'int'
	];

	protected $fillable = [
		'REFERENCE',
		'LIBEL',
		'REFERENCE_PLANNING',
		'SERVICE',
		'DIRECTION',
		'RESPONSIBLE',
		'OBSERVATION',
		'DATE_POST',
		'ID_PLANNING'
	];
}
