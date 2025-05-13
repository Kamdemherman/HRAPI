<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EmployeeTrainingDoc
 * 
 * @property int $ID_EMPLOYEE_TRAINING_DOC
 * @property int $ID_EMPLOYEE_TRAINING
 * @property string $NAME
 * @property string $LINK
 * @property string $FILE_EXT
 * @property string $FILE_TYPE
 * @property string $DATE_POST
 *
 * @package App\Models
 */
class EmployeeTrainingDoc extends Model
{
	protected $table = 'employee_training_docs';
	protected $primaryKey = 'ID_EMPLOYEE_TRAINING_DOC';
	public $timestamps = false;

	protected $casts = [
		'ID_EMPLOYEE_TRAINING' => 'int'
	];

	protected $fillable = [
		'ID_EMPLOYEE_TRAINING',
		'NAME',
		'LINK',
		'FILE_EXT',
		'FILE_TYPE',
		'DATE_POST'
	];
}
