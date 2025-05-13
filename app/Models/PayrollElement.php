<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PayrollElement
 * 
 * @property int $ID_PAYROLL_ELEMENT
 * @property string $NAME
 * @property int $IS_GAIN
 * @property int $IS_VARIABLE
 * @property int $IS_TAXABLE
 * @property string $EMPLOYER_SHARE
 * @property string $EMPLOYEE_SHARE
 * @property int $IS_COTISABLE
 * @property string $DESCRIPTION
 * @property string $CAP
 * @property string $VALUE
 * @property string $TAX
 * @property string $CAP_TAX
 * @property string $CAP_SHARE
 * @property string $CAP_SHARE_EMPLOYEE
 * @property string $ACCOUNTING_NUMBER
 * @property string $STATUS
 * @property int $DATE_POST
 *
 * @package App\Models
 */
class PayrollElement extends Model
{
	protected $table = 'payroll_elements';
	protected $primaryKey = 'ID_PAYROLL_ELEMENT';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_PAYROLL_ELEMENT' => 'int',
		'IS_GAIN' => 'int',
		'IS_VARIABLE' => 'int',
		'IS_TAXABLE' => 'int',
		'IS_COTISABLE' => 'int',
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		'NAME',
		'IS_GAIN',
		'IS_VARIABLE',
		'IS_TAXABLE',
		'EMPLOYER_SHARE',
		'EMPLOYEE_SHARE',
		'IS_COTISABLE',
		'DESCRIPTION',
		'CAP',
		'VALUE',
		'TAX',
		'CAP_TAX',
		'CAP_SHARE',
		'CAP_SHARE_EMPLOYEE',
		'ACCOUNTING_NUMBER',
		'STATUS',
		'DATE_POST'
	];
}
