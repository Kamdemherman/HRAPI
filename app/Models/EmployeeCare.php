<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EmployeeCare
 * 
 * @property int $ID_EMPLOYEE_CARE
 * @property int $ID_EMPLOYEE
 * @property string $MATRICULE
 * @property string $NAME
 * @property string $DATE_BIRTH
 * @property string $SEX
 * @property string $GRADE
 * @property string $ROLE
 * @property int $ID_MEDICAL_ACT
 * @property string $REFERENCE
 * @property string $TYPE
 * @property string $DATE_CARE
 * @property string $TIME
 * @property string $DURATION
 * @property string $HEALER
 * @property string $REFERENCE_HOSPITAL
 * @property string $OBSERVATION
 * @property int $DATE_POST
 *
 * @package App\Models
 */
class EmployeeCare extends Model
{
	protected $table = 'employee_cares';
	protected $primaryKey = 'ID_EMPLOYEE_CARE';
	public $timestamps = false;

	protected $casts = [
		'ID_EMPLOYEE' => 'int',
		'ID_MEDICAL_ACT' => 'int',
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		'ID_EMPLOYEE',
		'MATRICULE',
		'NAME',
		'DATE_BIRTH',
		'SEX',
		'GRADE',
		'ROLE',
		'ID_MEDICAL_ACT',
		'REFERENCE',
		'TYPE',
		'DATE_CARE',
		'TIME',
		'DURATION',
		'HEALER',
		'REFERENCE_HOSPITAL',
		'OBSERVATION',
		'DATE_POST'
	];
}
