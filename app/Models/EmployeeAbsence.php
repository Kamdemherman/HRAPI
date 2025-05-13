<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EmployeeAbsence
 * 
 * @property int $ID_EMPLOYEE_ABSENCE
 * @property int $ID_EMPLOYEE
 * @property int $ID_ABSENCE
 * @property string $MATRICULE
 * @property string $NAME
 * @property string $DURATION
 * @property string $MOTIF
 * @property string $REFERENCE
 * @property string $DESCRIPTION
 * @property string $DATE_ASKING
 * @property string $DATE_START
 * @property string $TIME_START
 * @property string $DATE_END
 * @property string $TIME_END
 * @property string $STATUS
 * @property string $VALIDATOR
 * @property int $DATE_POST
 * @property string $FULL_NAME
 *
 * @package App\Models
 */
class EmployeeAbsence extends Model
{
	protected $table = 'employee_absences';
	protected $primaryKey = 'ID_EMPLOYEE_ABSENCE';
	public $timestamps = false;

	protected $casts = [
		'ID_EMPLOYEE' => 'int',
		'ID_ABSENCE' => 'int',
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		'ID_EMPLOYEE',
		'ID_ABSENCE',
		'MATRICULE',
		'NAME',
		'DURATION',
		'MOTIF',
		'REFERENCE',
		'DESCRIPTION',
		'DATE_ASKING',
		'DATE_START',
		'TIME_START',
		'DATE_END',
		'TIME_END',
		'STATUS',
		'VALIDATOR',
		'DATE_POST',
		'FULL_NAME'
	];
}
