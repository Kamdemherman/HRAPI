<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EmployeesDoc
 * 
 * @property int $ID_EMPLOYEES_DOC
 * @property string $NAME
 * @property string $LINK
 * @property string $FILE_EXT
 * @property string $FILE_TYPE
 * @property int $DATE_POST
 * @property int $ID_EMPLOYEE
 * @property string $FOLDER
 *
 * @package App\Models
 */
class EmployeesDoc extends Model
{
	protected $table = 'employees_docs';
	protected $primaryKey = 'ID_EMPLOYEES_DOC';
	public $timestamps = false;

	protected $casts = [
		'DATE_POST' => 'int',
		'ID_EMPLOYEE' => 'int'
	];

	protected $fillable = [
		'NAME',
		'LINK',
		'FILE_EXT',
		'FILE_TYPE',
		'DATE_POST',
		'ID_EMPLOYEE',
		'FOLDER'
	];
}
