<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EmployeeCar
 * 
 * @property int $ID_EMPLOYEE_CAR
 * @property string $FULL_NAME
 * @property int|null $ID_EMPLOYEE
 * @property int $ID_CAR
 * @property string $REFERENCE_ASSIGNATION
 * @property string $DATE_ASSIGNATION
 * @property string $ENTITY
 * @property string $CAR_TYPE
 * @property int $DATE_POST
 * @property string $REFERENCE_REVOCATION
 * @property string $DATE_REVOCATION
 * @property string $OBSERVATION
 * @property string $MATRICULE
 * @property string $NAME
 * @property string $IMMATRICULATION
 * @property string $MODEL
 * @property string $STATUS
 *
 * @package App\Models
 */
class EmployeeCar extends Model
{
	protected $table = 'employee_cars';
	protected $primaryKey = 'ID_EMPLOYEE_CAR';
	public $timestamps = false;

	protected $casts = [
		'ID_EMPLOYEE' => 'int',
		'ID_CAR' => 'int',
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		'FULL_NAME',
		'ID_EMPLOYEE',
		'ID_CAR',
		'REFERENCE_ASSIGNATION',
		'DATE_ASSIGNATION',
		'ENTITY',
		'CAR_TYPE',
		'DATE_POST',
		'REFERENCE_REVOCATION',
		'DATE_REVOCATION',
		'OBSERVATION',
		'MATRICULE',
		'NAME',
		'IMMATRICULATION',
		'MODEL',
		'STATUS'
	];
}
