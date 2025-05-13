<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EmployeeMedicalEvent
 * 
 * @property int $ID_EMPLOYEE_MEDICAL_EVENT
 * @property int $ID_EMPLOYEE
 * @property string $MEDICAL_EVENT
 * @property int $DATE_POST
 * @property string $DATE_EVENT
 * @property string $DOCTOR
 * @property string $OBSERVATION
 * @property string $HOSPITAL
 * @property string $NAME
 *
 * @package App\Models
 */
class EmployeeMedicalEvent extends Model
{
	protected $table = 'employee_medical_events';
	protected $primaryKey = 'ID_EMPLOYEE_MEDICAL_EVENT';
	public $timestamps = false;

	protected $casts = [
		'ID_EMPLOYEE' => 'int',
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		'ID_EMPLOYEE',
		'MEDICAL_EVENT',
		'DATE_POST',
		'DATE_EVENT',
		'DOCTOR',
		'OBSERVATION',
		'HOSPITAL',
		'NAME'
	];
}
