<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PayrollCalculation
 * 
 * @property int $ID_PAYROLL_CALCULATION
 * @property int $ID_PAYROLL_SESSION
 * @property int $ID_PAYROLL_CONTRACT
 * @property int $ID_PAYROLL_CONTRACT_DETAIL
 * @property string $GROSS_SALARY
 * @property string $TAXABLE_SALARY
 * @property string $NET_SALARY
 * @property string $CONTRIBUTORY_SALARY
 * @property string $LEAVE_DAYS
 * @property string $EXTRA_HOURS
 * @property string $WORKED_HOURS
 * @property string $BASIS_SALARY
 * @property string $EMPLOYER_SHARE
 * @property string $EMPLOYEE_SHARE
 * @property int $DATE_POST
 *
 * @package App\Models
 */
class PayrollCalculation extends Model
{
	protected $table = 'payroll_calculations';
	protected $primaryKey = 'ID_PAYROLL_CALCULATION';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_PAYROLL_CALCULATION' => 'int',
		'ID_PAYROLL_SESSION' => 'int',
		'ID_PAYROLL_CONTRACT' => 'int',
		'ID_PAYROLL_CONTRACT_DETAIL' => 'int',
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		'ID_PAYROLL_SESSION',
		'ID_PAYROLL_CONTRACT',
		'ID_PAYROLL_CONTRACT_DETAIL',
		'GROSS_SALARY',
		'TAXABLE_SALARY',
		'NET_SALARY',
		'CONTRIBUTORY_SALARY',
		'LEAVE_DAYS',
		'EXTRA_HOURS',
		'WORKED_HOURS',
		'BASIS_SALARY',
		'EMPLOYER_SHARE',
		'EMPLOYEE_SHARE',
		'DATE_POST'
	];
}
