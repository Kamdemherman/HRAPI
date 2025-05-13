<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EmployeePrestationDoc
 * 
 * @property int $ID_EMPLOYEE_PRESTATION_DOC
 * @property int $ID_EMPLOYEE_PRESTATION
 * @property string $NAME
 * @property string $LINK
 * @property string $FILE_EXT
 * @property string $FILE_TYPE
 * @property string $DATE_POST
 *
 * @package App\Models
 */
class EmployeePrestationDoc extends Model
{
	protected $table = 'employee_prestation_docs';
	protected $primaryKey = 'ID_EMPLOYEE_PRESTATION_DOC';
	public $timestamps = false;

	protected $casts = [
		'ID_EMPLOYEE_PRESTATION' => 'int'
	];

	protected $fillable = [
		'ID_EMPLOYEE_PRESTATION',
		'NAME',
		'LINK',
		'FILE_EXT',
		'FILE_TYPE',
		'DATE_POST'
	];
}
