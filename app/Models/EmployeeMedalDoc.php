<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EmployeeMedalDoc
 * 
 * @property int $ID_EMPLOYEE_MEDAL_DOC
 * @property int $ID_EMPLOYEE_MEDAL
 * @property string $NAME
 * @property string $LINK
 * @property string $FILE_EXT
 * @property string $FILE_TYPE
 * @property string $DATE_POST
 *
 * @package App\Models
 */
class EmployeeMedalDoc extends Model
{
	protected $table = 'employee_medal_docs';
	protected $primaryKey = 'ID_EMPLOYEE_MEDAL_DOC';
	public $timestamps = false;

	protected $casts = [
		'ID_EMPLOYEE_MEDAL' => 'int'
	];

	protected $fillable = [
		'ID_EMPLOYEE_MEDAL',
		'NAME',
		'LINK',
		'FILE_EXT',
		'FILE_TYPE',
		'DATE_POST'
	];
}
