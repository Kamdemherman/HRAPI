<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EmployeeTraining
 * 
 * @property int $ID_EMPLOYEE_TRAINING
 * @property int $ID_EMPLOYEE
 * @property string $MATRICULE
 * @property string $NAME
 * @property string $REFERENCE
 * @property string $ROLE
 * @property string $STATUS
 * @property string $NOTE
 * @property string $OBSERVATION
 * @property int $DATE_POST
 * @property int $ID_TRAINING
 * @property string $NAME_TRAINING
 *
 * @package App\Models
 */
class EmployeeTraining extends Model
{
	protected $table = 'employee_trainings';
	protected $primaryKey = 'ID_EMPLOYEE_TRAINING';
	public $timestamps = false;

	protected $casts = [
		'ID_EMPLOYEE' => 'int',
		'DATE_POST' => 'int',
		'ID_TRAINING' => 'int'
	];

	protected $fillable = [
		'ID_EMPLOYEE',
		'MATRICULE',
		'NAME',
		'REFERENCE',
		'ROLE',
		'STATUS',
		'NOTE',
		'OBSERVATION',
		'DATE_POST',
		'ID_TRAINING',
		'NAME_TRAINING'
	];
}
