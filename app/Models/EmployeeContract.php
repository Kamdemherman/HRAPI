<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EmployeeContract
 * 
 * @property int $ID_EMPLOYEE_CONTRACT
 * @property int $ID_EMPLOYEE
 * @property string $REFERENCE
 * @property string $CONTRACT_TYPE
 * @property string $CODE
 * @property string $DATE_START
 * @property string $DATE_END
 * @property string $ROLE
 * @property string $CATEGORY
 * @property string $CLASS
 * @property string $ECHELON
 * @property string $INDICE
 * @property string $FUNCTION
 * @property string $RANK
 * @property string $GRADE
 * @property string $DEPT
 * @property string $SERVICE
 * @property string $DIRECTION
 * @property string $HIRING_DATE
 * @property string $HIRING_PLACE
 * @property string $DIPLOMA
 * @property string $STATUS
 * @property int $DATE_POST
 * @property string $OBSERVATION
 * @property string $SALARY_MENSUAL
 * @property string $SALARY_HOURLY
 * @property string $SALARY_CYCLE
 *
 * @package App\Models
 */
class EmployeeContract extends Model
{
	protected $table = 'employee_contracts';
	protected $primaryKey = 'ID_EMPLOYEE_CONTRACT';
	public $timestamps = false;

	protected $casts = [
		'ID_EMPLOYEE' => 'int',
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		'ID_EMPLOYEE',
		'REFERENCE',
		'CONTRACT_TYPE',
		'CODE',
		'DATE_START',
		'DATE_END',
		'ROLE',
		'CATEGORY',
		'CLASS',
		'ECHELON',
		'INDICE',
		'FUNCTION',
		'RANK',
		'GRADE',
		'DEPT',
		'SERVICE',
		'DIRECTION',
		'HIRING_DATE',
		'HIRING_PLACE',
		'DIPLOMA',
		'STATUS',
		'DATE_POST',
		'OBSERVATION',
		'SALARY_MENSUAL',
		'SALARY_HOURLY',
		'SALARY_CYCLE'
	];
}
