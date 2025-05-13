<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EmployeeMedicalHistory
 * 
 * @property int $ID_EMPLOYEE_MEDICAL_HISTORY
 * @property int $ID_EMPLOYEE
 * @property string $NAME
 * @property string $TYPE_HISTORY
 * @property string $TRANSMITTER
 * @property int $DATE_POST
 *
 * @package App\Models
 */
class EmployeeMedicalHistory extends Model
{
	protected $table = 'employee_medical_histories';
	protected $primaryKey = 'ID_EMPLOYEE_MEDICAL_HISTORY';
	public $timestamps = false;

	protected $casts = [
		'ID_EMPLOYEE' => 'int',
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		'ID_EMPLOYEE',
		'NAME',
		'TYPE_HISTORY',
		'TRANSMITTER',
		'DATE_POST'
	];
}
