<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EmployeeHistory
 * 
 * @property int $ID_EMPLOYEE_HISTORY
 * @property int $ID_EMPLOYEE
 * @property string $MATRICULE
 * @property string $NAME
 * @property string $TYPE
 * @property string $NATURE
 * @property int $ID_HISTORY
 * @property string $REFERENCE_HISTORY
 * @property string $NAME_HISTORY
 * @property string $TRANSMITER
 * @property string $OBSERVATION
 * @property string $DATE_VACCIN
 * @property string $DATE_NEXT_VACCIN
 * @property int $DATE_POST
 *
 * @package App\Models
 */
class EmployeeHistory extends Model
{
	protected $table = 'employee_histories';
	protected $primaryKey = 'ID_EMPLOYEE_HISTORY';
	public $timestamps = false;

	protected $casts = [
		'ID_EMPLOYEE' => 'int',
		'ID_HISTORY' => 'int',
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		'ID_EMPLOYEE',
		'MATRICULE',
		'NAME',
		'TYPE',
		'NATURE',
		'ID_HISTORY',
		'REFERENCE_HISTORY',
		'NAME_HISTORY',
		'TRANSMITER',
		'OBSERVATION',
		'DATE_VACCIN',
		'DATE_NEXT_VACCIN',
		'DATE_POST'
	];
}
