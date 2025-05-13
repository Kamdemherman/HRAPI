<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EmployeeCounterOpinion
 * 
 * @property int $ID_EMPLOYEE_COUNTER_OPINION
 * @property int $ID_EMPLOYEE
 * @property string $MATRICULE
 * @property string $NAME
 * @property string $DATE_BIRTH
 * @property string $SEX
 * @property string $GRADE
 * @property string $SERVICE
 * @property string $TYPE
 * @property string $REFERENCE
 * @property string $DOCTOR
 * @property int $ID_HOSPITAL
 * @property string $AFFECTIONS
 * @property string $SICKNESS_DURATION
 * @property string $ALLOWED_DURATION
 * @property string $DAYS_ASKED
 * @property string $DAYS_GIVEN
 * @property string $DATE_EFFECTIVE
 * @property string $DECISION
 * @property string $OBSERVATION
 * @property int $DATE_POST
 *
 * @package App\Models
 */
class EmployeeCounterOpinion extends Model
{
	protected $table = 'employee_counter_opinions';
	protected $primaryKey = 'ID_EMPLOYEE_COUNTER_OPINION';
	public $timestamps = false;

	protected $casts = [
		'ID_EMPLOYEE' => 'int',
		'ID_HOSPITAL' => 'int',
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		'ID_EMPLOYEE',
		'MATRICULE',
		'NAME',
		'DATE_BIRTH',
		'SEX',
		'GRADE',
		'SERVICE',
		'TYPE',
		'REFERENCE',
		'DOCTOR',
		'ID_HOSPITAL',
		'AFFECTIONS',
		'SICKNESS_DURATION',
		'ALLOWED_DURATION',
		'DAYS_ASKED',
		'DAYS_GIVEN',
		'DATE_EFFECTIVE',
		'DECISION',
		'OBSERVATION',
		'DATE_POST'
	];
}
