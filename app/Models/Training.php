<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Training
 * 
 * @property int $ID_TRAINING
 * @property string $REFERENCE
 * @property string $NAME
 * @property int $YEAR
 * @property string $DATE_EMISSION
 * @property string $DIRECTION
 * @property string $THEME
 * @property string $OBJECTIVE
 * @property string $ATTENDERS
 * @property int $NBR_ATTENDERS
 * @property string $TRAINER
 * @property string $DATE_START
 * @property string $DATE_END
 * @property string $PLACE
 * @property int $PRICE
 * @property string $OBSERVATION
 * @property string $STATUS
 * @property int $DATE_POST
 * @property int $PRIMITIVE_PRICE
 * @property int $TOTAL_PRICE
 * @property string $VALIDATOR
 * @property string $DATE_VALIDATION
 *
 * @package App\Models
 */
class Training extends Model
{
	protected $table = 'trainings';
	protected $primaryKey = 'ID_TRAINING';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_TRAINING' => 'int',
		'YEAR' => 'int',
		'NBR_ATTENDERS' => 'int',
		'PRICE' => 'int',
		'DATE_POST' => 'int',
		'PRIMITIVE_PRICE' => 'int',
		'TOTAL_PRICE' => 'int'
	];

	protected $fillable = [
		'REFERENCE',
		'NAME',
		'YEAR',
		'DATE_EMISSION',
		'DIRECTION',
		'THEME',
		'OBJECTIVE',
		'ATTENDERS',
		'NBR_ATTENDERS',
		'TRAINER',
		'DATE_START',
		'DATE_END',
		'PLACE',
		'PRICE',
		'OBSERVATION',
		'STATUS',
		'DATE_POST',
		'PRIMITIVE_PRICE',
		'TOTAL_PRICE',
		'VALIDATOR',
		'DATE_VALIDATION'
	];
}
