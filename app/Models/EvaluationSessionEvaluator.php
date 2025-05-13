<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EvaluationSessionEvaluator
 * 
 * @property int $ID_EVALUATION_SESSION_EVALUATOR
 * @property int $ID_EVALUATION_SESSION
 * @property string $NAME
 * @property string $DIRECTION
 * @property string $ROLE
 * @property string $TYPE
 * @property int $DATE_POST
 * @property int $ID_EMPLOYEE
 * @property string $MATRICULE
 *
 * @package App\Models
 */
class EvaluationSessionEvaluator extends Model
{
	protected $table = 'evaluation_session_evaluators';
	protected $primaryKey = 'ID_EVALUATION_SESSION_EVALUATOR';
	public $timestamps = false;

	protected $casts = [
		'ID_EVALUATION_SESSION' => 'int',
		'DATE_POST' => 'int',
		'ID_EMPLOYEE' => 'int'
	];

	protected $fillable = [
		'ID_EVALUATION_SESSION',
		'NAME',
		'DIRECTION',
		'ROLE',
		'TYPE',
		'DATE_POST',
		'ID_EMPLOYEE',
		'MATRICULE'
	];
}
