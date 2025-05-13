<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Intern
 * 
 * @property int $ID_INTERN
 * @property string $NAME
 * @property string $SURNAME
 * @property string $BIRTH_DATE
 * @property string $GENRE
 * @property string $BIRTH_PLACE
 * @property string $REGION
 * @property string $DEPARTMENT
 * @property string $PHONE
 * @property string $EMAIL
 * @property string $SCHOOL
 * @property string $LOCATION
 * @property string $SCHOOLING_LEVEL
 * @property string $FACULTY
 * @property string $THEME
 * @property string $MENTHOR
 * @property string $EVALUATION
 * @property string $STATUS
 * @property string $IS_PAID
 * @property string $DATE_POST
 * @property int $ID_INTERNSHIP
 * @property string $TYPE_INTERNSHIP
 *
 * @package App\Models
 */
class Intern extends Model
{
	protected $table = 'interns';
	protected $primaryKey = 'ID_INTERN';
	public $timestamps = false;

	protected $casts = [
		'ID_INTERNSHIP' => 'int'
	];

	protected $fillable = [
		'NAME',
		'SURNAME',
		'BIRTH_DATE',
		'GENRE',
		'BIRTH_PLACE',
		'REGION',
		'DEPARTMENT',
		'PHONE',
		'EMAIL',
		'SCHOOL',
		'LOCATION',
		'SCHOOLING_LEVEL',
		'FACULTY',
		'THEME',
		'MENTHOR',
		'EVALUATION',
		'STATUS',
		'IS_PAID',
		'DATE_POST',
		'ID_INTERNSHIP',
		'TYPE_INTERNSHIP'
	];
}
