<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EmployeeCounterOpinionDoc
 * 
 * @property int $ID_EMPLOYEE_COUNTER_OPINION_DOC
 * @property int $ID_EMPLOYEE_COUNTER_OPINION
 * @property string $NAME
 * @property string $LINK
 * @property string $FILE_EXT
 * @property string $FILE_TYPE
 * @property string $DATE_POST
 *
 * @package App\Models
 */
class EmployeeCounterOpinionDoc extends Model
{
	protected $table = 'employee_counter_opinion_docs';
	protected $primaryKey = 'ID_EMPLOYEE_COUNTER_OPINION_DOC';
	public $timestamps = false;

	protected $casts = [
		'ID_EMPLOYEE_COUNTER_OPINION' => 'int'
	];

	protected $fillable = [
		'ID_EMPLOYEE_COUNTER_OPINION',
		'NAME',
		'LINK',
		'FILE_EXT',
		'FILE_TYPE',
		'DATE_POST'
	];
}
