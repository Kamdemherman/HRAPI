<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EmployeeEvaluation
 * 
 * @property int $ID_EMPLOYEE_EVALUATION
 * @property int $ID_EMPLOYEE
 * @property int $ID_EVALUATION_SESSION
 * @property string $MATRICULE
 * @property string $NAME
 * @property string $DATE_EVAL
 * @property string $TIME_EVAL
 * @property string $SESSION_REFERENCE
 * @property int $RANK
 * @property string $ROLE
 * @property string $CATEGORY
 * @property string $DIRECTION
 * @property string $SERVICE
 * @property string $NOTE
 * @property int $DATE_POST
 * @property string $STATUS
 * @property string $DATE_BIRTH
 * @property string $HIRING_DATE
 * @property string $IS_ELIGIBLE
 * @property string $DATE_LAST_PROMOTION
 * @property string $NOTE_N1
 * @property string $NOTE_N2
 * @property string $HIRING_CATEGORY
 * @property string $HIRING_ECHELON
 * @property string $CLASSIFICATION
 * @property string $DATE_PROMOTION
 * @property string $OBSERVATION
 *
 * @package App\Models
 */
class EmployeeEvaluation extends Model
{
	protected $table = 'employee_evaluations';
	protected $primaryKey = 'ID_EMPLOYEE_EVALUATION';
	public $timestamps = false;

	protected $casts = [
		'ID_EMPLOYEE' => 'int',
		'ID_EVALUATION_SESSION' => 'int',
		'RANK' => 'int',
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		'ID_EMPLOYEE',
		'ID_EVALUATION_SESSION',
		'MATRICULE',
		'NAME',
		'DATE_EVAL',
		'TIME_EVAL',
		'SESSION_REFERENCE',
		'RANK',
		'ROLE',
		'CATEGORY',
		'DIRECTION',
		'SERVICE',
		'NOTE',
		'DATE_POST',
		'STATUS',
		'DATE_BIRTH',
		'HIRING_DATE',
		'IS_ELIGIBLE',
		'DATE_LAST_PROMOTION',
		'NOTE_N1',
		'NOTE_N2',
		'HIRING_CATEGORY',
		'HIRING_ECHELON',
		'CLASSIFICATION',
		'DATE_PROMOTION',
		'OBSERVATION'
	];
}
