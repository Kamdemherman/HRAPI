<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PayrollContract
 * 
 * @property int $ID_PAYROLL_CONTRACT
 * @property int $ID_EMPLOYEE
 * @property string $ROLE
 * @property int $IS_TEMPLATE
 * @property string $REFERENCE
 * @property string $STATUS
 * @property int $DATE_POST
 * @property string $DESCRIPTION
 * @property string $DATE_START_CONTRACT
 * @property string $DATE_END_CONTRACT
 * @property int $ID_PAYROLL_SALARY_GRID
 * @property int $ID_PAYROLL_CATEGORY_TYPE
 *
 * @package App\Models
 */
class PayrollContract extends Model
{
	protected $table = 'payroll_contracts';
	protected $primaryKey = 'ID_PAYROLL_CONTRACT';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_PAYROLL_CONTRACT' => 'int',
		'ID_EMPLOYEE' => 'int',
		'IS_TEMPLATE' => 'int',
		'DATE_POST' => 'int',
		'ID_PAYROLL_SALARY_GRID' => 'int',
		'ID_PAYROLL_CATEGORY_TYPE' => 'int'
	];

	protected $fillable = [
		'ID_EMPLOYEE',
		'ROLE',
		'IS_TEMPLATE',
		'REFERENCE',
		'STATUS',
		'DATE_POST',
		'DESCRIPTION',
		'DATE_START_CONTRACT',
		'DATE_END_CONTRACT',
		'ID_PAYROLL_SALARY_GRID',
		'ID_PAYROLL_CATEGORY_TYPE'
	];
}
