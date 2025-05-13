<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EmployeeNotice
 * 
 * @property int $ID_EMPLOYEE_NOTICE
 * @property int $ID_EMPLOYEE
 * @property string $MATRICULE
 * @property string $FULL_NAME
 * @property string $DECISION_NUMBER
 * @property string $DATE_DECISION
 * @property string $DATE_VALIDATION
 * @property string $REFERENCE_PLANNING
 * @property string $DATE_HIRING
 * @property string $SENIORITY
 * @property string $KIDS
 * @property string $CAT
 * @property string $DATE_START_NOTICE
 * @property string $DAYS_OFF
 * @property string $DATE_END_NOTICE
 * @property string $DATE_NEXT_NOTICE
 * @property string $DEPT
 * @property string $SERVICE
 * @property string $ENJOYMENT_PLACE
 * @property string $DIRECTION
 * @property string $NOTICE_TYPE
 * @property string $NOTICE_ACTION
 * @property string $REFERENCE_ASKING
 * @property string $DATE_ASKING
 * @property string $MOTIF
 * @property string $DATE_START_DESIRED
 * @property string $DATE_END_DESIRED
 * @property string $CREDIT
 * @property string $STATUS_ASKING
 * @property int $DATE_POST
 * @property string $STATUS_NOTICE
 * @property string $STATUS_PLANNING
 * @property string $DATE_START_EFFECTIVE
 * @property string $DATE_END_EFFECTIVE
 * @property string $MOTIF_SUSPENSION
 * @property string $DATE_SUSPENSION
 * @property string $REAL_DAYS
 * @property string $USED_DAYS
 * @property string $REMAINING_DAYS
 *
 * @package App\Models
 */
class EmployeeNotice extends Model
{
	protected $table = 'employee_notices';
	protected $primaryKey = 'ID_EMPLOYEE_NOTICE';
	public $timestamps = false;

	protected $casts = [
		'ID_EMPLOYEE' => 'int',
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		'ID_EMPLOYEE',
		'MATRICULE',
		'FULL_NAME',
		'DECISION_NUMBER',
		'DATE_DECISION',
		'DATE_VALIDATION',
		'REFERENCE_PLANNING',
		'DATE_HIRING',
		'SENIORITY',
		'KIDS',
		'CAT',
		'DATE_START_NOTICE',
		'DAYS_OFF',
		'DATE_END_NOTICE',
		'DATE_NEXT_NOTICE',
		'DEPT',
		'SERVICE',
		'ENJOYMENT_PLACE',
		'DIRECTION',
		'NOTICE_TYPE',
		'NOTICE_ACTION',
		'REFERENCE_ASKING',
		'DATE_ASKING',
		'MOTIF',
		'DATE_START_DESIRED',
		'DATE_END_DESIRED',
		'CREDIT',
		'STATUS_ASKING',
		'DATE_POST',
		'STATUS_NOTICE',
		'STATUS_PLANNING',
		'DATE_START_EFFECTIVE',
		'DATE_END_EFFECTIVE',
		'MOTIF_SUSPENSION',
		'DATE_SUSPENSION',
		'REAL_DAYS',
		'USED_DAYS',
		'REMAINING_DAYS'
	];
}
