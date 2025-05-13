<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PayrollElementTier
 * 
 * @property int $ID_PAYROLL_ELEMENT_TIER
 * @property int $ID_PAYROLL_ELEMENT
 * @property string $NAME
 * @property string $DESCRIPTION
 * @property string $MIN_VALUE
 * @property string $MAX_VALUE
 * @property int $IS_TAXABLE
 * @property string $TAX
 * @property int $IS_COTISABLE
 * @property string $EMPLOYER_SHARE
 * @property string $EMPLOYEE_SHARE
 * @property string $CAP
 * @property string $CAP_TAX
 * @property string $CAP_SHARE
 * @property string $CAP_SHARE_EMPLOYEE
 * @property string $VALUE
 * @property string $STATUS
 * @property int $DATE_POST
 *
 * @package App\Models
 */
class PayrollElementTier extends Model
{
	protected $table = 'payroll_element_tiers';
	protected $primaryKey = 'ID_PAYROLL_ELEMENT_TIER';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_PAYROLL_ELEMENT_TIER' => 'int',
		'ID_PAYROLL_ELEMENT' => 'int',
		'IS_TAXABLE' => 'int',
		'IS_COTISABLE' => 'int',
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		'ID_PAYROLL_ELEMENT',
		'NAME',
		'DESCRIPTION',
		'MIN_VALUE',
		'MAX_VALUE',
		'IS_TAXABLE',
		'TAX',
		'IS_COTISABLE',
		'EMPLOYER_SHARE',
		'EMPLOYEE_SHARE',
		'CAP',
		'CAP_TAX',
		'CAP_SHARE',
		'CAP_SHARE_EMPLOYEE',
		'VALUE',
		'STATUS',
		'DATE_POST'
	];
}
