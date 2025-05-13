<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EmployeeCasketDoc
 * 
 * @property int $ID_EMPLOYEE_CASKET_DOC
 * @property int $ID_EMPLOYEE_CASKET
 * @property string $NAME
 * @property string $LINK
 * @property string $FILE_EXT
 * @property string $FILE_TYPE
 * @property string $DATE_POST
 *
 * @package App\Models
 */
class EmployeeCasketDoc extends Model
{
	protected $table = 'employee_casket_docs';
	protected $primaryKey = 'ID_EMPLOYEE_CASKET_DOC';
	public $timestamps = false;

	protected $casts = [
		'ID_EMPLOYEE_CASKET' => 'int'
	];

	protected $fillable = [
		'ID_EMPLOYEE_CASKET',
		'NAME',
		'LINK',
		'FILE_EXT',
		'FILE_TYPE',
		'DATE_POST'
	];
}
