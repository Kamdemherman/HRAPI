<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EmployeeSicknessCard
 * 
 * @property int $ID_EMPLOYEE_SICKNESS_CARD
 * @property int $ID_EMPLOYEE
 * @property string $TYPE
 * @property int $DATE_POST
 * @property string $TYPE_MEDICAL
 * @property string $MATRICULE
 * @property string $NAME
 * @property string $DATE_BIRTH
 * @property string $SEX
 * @property string $ROLE
 * @property string $GRADE
 * @property int $ID_MEDICAL_ACT
 * @property string $REFERENCE_MEDICAL_ACT
 * @property string $DATE_ACT
 * @property string $TIME_ACT
 * @property int $ID_HOSPITAL
 * @property string $REFERENCE_HOSPITAL
 * @property string $NAME_DOCTOR
 * @property string $COMPLAINTS
 * @property string $EXAMS
 * @property string $SICK_LEAVE_DURATION
 * @property string $MEASURE
 * @property string $SICK_LEAVE
 * @property string $SICK_OBSERVATION
 * @property string $DECISION
 * @property string $DATE_START
 * @property string $DATE_END
 * @property string $PRO_OBSERVATION
 * @property string $DECISION_NUMBER
 * @property string $AFFECTIONS
 * @property string $REFERENCE
 *
 * @package App\Models
 */
class EmployeeSicknessCard extends Model
{
	protected $table = 'employee_sickness_cards';
	protected $primaryKey = 'ID_EMPLOYEE_SICKNESS_CARD';
	public $timestamps = false;

	protected $casts = [
		'ID_EMPLOYEE' => 'int',
		'DATE_POST' => 'int',
		'ID_MEDICAL_ACT' => 'int',
		'ID_HOSPITAL' => 'int'
	];

	protected $fillable = [
		'ID_EMPLOYEE',
		'TYPE',
		'DATE_POST',
		'TYPE_MEDICAL',
		'MATRICULE',
		'NAME',
		'DATE_BIRTH',
		'SEX',
		'ROLE',
		'GRADE',
		'ID_MEDICAL_ACT',
		'REFERENCE_MEDICAL_ACT',
		'DATE_ACT',
		'TIME_ACT',
		'ID_HOSPITAL',
		'REFERENCE_HOSPITAL',
		'NAME_DOCTOR',
		'COMPLAINTS',
		'EXAMS',
		'SICK_LEAVE_DURATION',
		'MEASURE',
		'SICK_LEAVE',
		'SICK_OBSERVATION',
		'DECISION',
		'DATE_START',
		'DATE_END',
		'PRO_OBSERVATION',
		'DECISION_NUMBER',
		'AFFECTIONS',
		'REFERENCE'
	];
}
