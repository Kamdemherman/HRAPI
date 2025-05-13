<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EmployeeEvaluationDetail
 * 
 * @property int $ID_EMPLOYEE_EVALUATION_DETAIL
 * @property int $ID_EMPLOYEE_EVALUATION
 * @property int $ID_EVALUATION_SESSION_EVALUATOR
 * @property int $ID_EVALUATION_SESSION
 * @property string $EVALUATOR
 * @property string $NOTE
 * @property string $OBSERVATION
 * @property int $DATE_POST
 *
 * @package App\Models
 */
class EmployeeEvaluationDetail extends Model
{
	protected $table = 'employee_evaluation_details';
	protected $primaryKey = 'ID_EMPLOYEE_EVALUATION_DETAIL';
	public $timestamps = false;

	protected $casts = [
		'ID_EMPLOYEE_EVALUATION' => 'int',
		'ID_EVALUATION_SESSION_EVALUATOR' => 'int',
		'ID_EVALUATION_SESSION' => 'int',
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		'ID_EMPLOYEE_EVALUATION',
		'ID_EVALUATION_SESSION_EVALUATOR',
		'ID_EVALUATION_SESSION',
		'EVALUATOR',
		'NOTE',
		'OBSERVATION',
		'DATE_POST'
	];
}
