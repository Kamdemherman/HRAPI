<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Skill
 * 
 * @property int $ID_SKILL
 * @property string $NAME
 * @property string $DIPLOMA
 * @property string $DIPLOMA_TYPE
 * @property string $SPECIALITY
 * @property string $INSTITUTION
 * @property string $TRAINING_PLACE
 * @property string $SKILLS
 * @property string $TRAINING_TYPE
 * @property string $DATE_START
 * @property string $DATE_END
 * @property int $DATE_POST
 * @property int $ID_EMPLOYEE
 *
 * @package App\Models
 */
class Skill extends Model
{
	protected $table = 'skills';
	protected $primaryKey = 'ID_SKILL';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_SKILL' => 'int',
		'DATE_POST' => 'int',
		'ID_EMPLOYEE' => 'int'
	];

	protected $fillable = [
		'NAME',
		'DIPLOMA',
		'DIPLOMA_TYPE',
		'SPECIALITY',
		'INSTITUTION',
		'TRAINING_PLACE',
		'SKILLS',
		'TRAINING_TYPE',
		'DATE_START',
		'DATE_END',
		'DATE_POST',
		'ID_EMPLOYEE'
	];
}
