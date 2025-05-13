<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EmployeeRetirementDoc
 * 
 * @property int $ID_EMPLOYEE_RETIREMENT_DOC
 * @property int $ID_EMPLOYEE_RETIREMENT
 * @property string $NAME
 * @property string $LINK
 * @property string $FILE_EXT
 * @property string $FILE_TYPE
 * @property string $DATE_POST
 *
 * @package App\Models
 */
class EmployeeRetirementDoc extends Model
{
	protected $table = 'employee_retirement_docs';
	protected $primaryKey = 'ID_EMPLOYEE_RETIREMENT_DOC';
	public $timestamps = false;

	protected $casts = [
		'ID_EMPLOYEE_RETIREMENT' => 'int'
	];

	protected $fillable = [
		'ID_EMPLOYEE_RETIREMENT',
		'NAME',
		'LINK',
		'FILE_EXT',
		'FILE_TYPE',
		'DATE_POST'
	];
}
