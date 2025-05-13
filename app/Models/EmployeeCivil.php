<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EmployeeCivil
 * 
 * @property int $ID_EMPLOYEE_CIVIL
 * @property int $ID_EMPLOYEE
 * @property string $ACT_TYPE
 * @property string $ACT_NUMBER
 * @property string $DATE_ACT
 * @property string $PLACE_ACT
 * @property string $DATE_START
 * @property string $DATE_END
 * @property string $DATE_DEPOSIT
 * @property int $DATE_POST
 *
 * @package App\Models
 */
class EmployeeCivil extends Model
{
	protected $table = 'employee_civils';
	protected $primaryKey = 'ID_EMPLOYEE_CIVIL';
	public $timestamps = false;

	protected $casts = [
		'ID_EMPLOYEE' => 'int',
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		'ID_EMPLOYEE',
		'ACT_TYPE',
		'ACT_NUMBER',
		'DATE_ACT',
		'PLACE_ACT',
		'DATE_START',
		'DATE_END',
		'DATE_DEPOSIT',
		'DATE_POST'
	];
}
