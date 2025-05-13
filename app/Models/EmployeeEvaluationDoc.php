<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EmployeeEvaluationDoc
 * 
 * @property int $ID_EMPLOYEE_EVALUATION_DOC
 * @property int $ID_EMPLOYEE_EVALUATION
 * @property string $NAME
 * @property string $LINK
 * @property string $FILE_EXT
 * @property string $FILE_TYPE
 * @property string $DATE_POST
 *
 * @package App\Models
 */
class EmployeeEvaluationDoc extends Model
{
	protected $table = 'employee_evaluation_docs';
	protected $primaryKey = 'ID_EMPLOYEE_EVALUATION_DOC';
	public $timestamps = false;

	protected $casts = [
		'ID_EMPLOYEE_EVALUATION' => 'int'
	];

	protected $fillable = [
		'ID_EMPLOYEE_EVALUATION',
		'NAME',
		'LINK',
		'FILE_EXT',
		'FILE_TYPE',
		'DATE_POST'
	];
}
