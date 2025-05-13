<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PayrollContractDetail
 * 
 * @property int $ID_PAYROLL_CONTRACT_DETAIL
 * @property int $ID_PAYROLL_CONTRACT
 * @property string $GROSS_SALARY
 * @property string $TAXABLE_SALARY
 * @property string $NET_SALARY
 * @property string $BASIS_SALARY
 * @property string $CONTRIBUTORY_SALARY
 * @property string $EMPLOYER_SHARE
 * @property string $EMPLOYEE_SHARE
 * @property string $WORKED_DAYS
 * @property string $WORKED_HOURS
 * @property string $HOUR_RATE
 * @property string $DAY_RATE
 * @property string $LEAVE_DAYS
 * @property string $EXTRA_NBR_HOURS
 * @property string $EXTRA_HOUR_RATE
 * @property string $LEAVE_DAYS_RATE
 * @property int $ACTUAL_LEAVE_DAYS
 * @property int $DATE_POST
 *
 * @package App\Models
 */
class PayrollContractDetail extends Model
{
	protected $table = 'payroll_contract_details';
	protected $primaryKey = 'ID_PAYROLL_CONTRACT_DETAIL';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_PAYROLL_CONTRACT_DETAIL' => 'int',
		'ID_PAYROLL_CONTRACT' => 'int',
		'ACTUAL_LEAVE_DAYS' => 'int',
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		'ID_PAYROLL_CONTRACT',
		'GROSS_SALARY',
		'TAXABLE_SALARY',
		'NET_SALARY',
		'BASIS_SALARY',
		'CONTRIBUTORY_SALARY',
		'EMPLOYER_SHARE',
		'EMPLOYEE_SHARE',
		'WORKED_DAYS',
		'WORKED_HOURS',
		'HOUR_RATE',
		'DAY_RATE',
		'LEAVE_DAYS',
		'EXTRA_NBR_HOURS',
		'EXTRA_HOUR_RATE',
		'LEAVE_DAYS_RATE',
		'ACTUAL_LEAVE_DAYS',
		'DATE_POST'
	];
}
