<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EmployeeImmatriculationDoc
 * 
 * @property int $ID_EMPLOYEE_IMMATRICULATION_DOC
 * @property int $ID_EMPLOYEE_IMMATRICULATION
 * @property string $NAME
 * @property string $LINK
 * @property string $FILE_EXT
 * @property string $FILE_TYPE
 * @property string $DATE_POST
 *
 * @package App\Models
 */
class EmployeeImmatriculationDoc extends Model
{
	protected $table = 'employee_immatriculation_docs';
	protected $primaryKey = 'ID_EMPLOYEE_IMMATRICULATION_DOC';
	public $timestamps = false;

	protected $casts = [
		'ID_EMPLOYEE_IMMATRICULATION' => 'int'
	];

	protected $fillable = [
		'ID_EMPLOYEE_IMMATRICULATION',
		'NAME',
		'LINK',
		'FILE_EXT',
		'FILE_TYPE',
		'DATE_POST'
	];
}
