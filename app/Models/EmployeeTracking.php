<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EmployeeTracking
 * 
 * @property int $ID_EMPLOYEE_TRACKING
 * @property int $ID_EMPLOYEE
 * @property string $INSURED_NUMBER
 * @property string $MATRICULE
 * @property string $NAME
 * @property string $CATEGORY
 * @property string $SERVICE
 * @property string $DATE_START
 * @property string $DATE_END
 * @property string $RATE
 * @property string $CEILING
 * @property string $AMOUNT_SUM
 * @property string $REMAINING_CEILING
 * @property string $RATE_AMOUNT
 * @property string $STATE
 * @property string $STATUS
 * @property int $DATE_POST
 *
 * @package App\Models
 */
class EmployeeTracking extends Model
{
	protected $table = 'employee_trackings';
	protected $primaryKey = 'ID_EMPLOYEE_TRACKING';
	public $timestamps = false;

	protected $casts = [
		'ID_EMPLOYEE' => 'int',
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		'ID_EMPLOYEE',
		'INSURED_NUMBER',
		'MATRICULE',
		'NAME',
		'CATEGORY',
		'SERVICE',
		'DATE_START',
		'DATE_END',
		'RATE',
		'CEILING',
		'AMOUNT_SUM',
		'REMAINING_CEILING',
		'RATE_AMOUNT',
		'STATE',
		'STATUS',
		'DATE_POST'
	];
}
