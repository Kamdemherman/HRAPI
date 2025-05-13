<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Internship
 * 
 * @property int $ID_INTERNSHIP
 * @property string $NAME
 * @property string $TYPE_INTERNSHIP
 * @property string $STATUS
 * @property string $DATE_POST
 * @property string $NBR
 * @property int $USED
 * @property string $MENTHOR
 * @property string $EVALUATION
 * @property string $DATE_START
 * @property string $DATE_END
 * @property string $DIRECTION
 * @property string $AMOUNT
 * @property string $FREQUENCY
 *
 * @package App\Models
 */
class Internship extends Model
{
	protected $table = 'internships';
	protected $primaryKey = 'ID_INTERNSHIP';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_INTERNSHIP' => 'int',
		'USED' => 'int'
	];

	protected $fillable = [
		'NAME',
		'TYPE_INTERNSHIP',
		'STATUS',
		'DATE_POST',
		'NBR',
		'USED',
		'MENTHOR',
		'EVALUATION',
		'DATE_START',
		'DATE_END',
		'DIRECTION',
		'AMOUNT',
		'FREQUENCY'
	];
}
