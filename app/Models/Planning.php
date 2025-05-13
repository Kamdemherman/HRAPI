<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Planning
 * 
 * @property int $ID_PLANNING
 * @property string $REFERENCE
 * @property string $DATE_START
 * @property string $DATE_END
 * @property string $TIME_START
 * @property string $TIME_END
 * @property string $BREAK_START
 * @property string $BREAK_END
 * @property int $DATE_POST
 *
 * @package App\Models
 */
class Planning extends Model
{
	protected $table = 'plannings';
	protected $primaryKey = 'ID_PLANNING';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_PLANNING' => 'int',
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		'REFERENCE',
		'DATE_START',
		'DATE_END',
		'TIME_START',
		'TIME_END',
		'BREAK_START',
		'BREAK_END',
		'DATE_POST'
	];
}
