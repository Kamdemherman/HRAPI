<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PayrollTemplate
 * 
 * @property int $ID_PAYROLL_TEMPLATE
 * @property string $NAME
 * @property string $COMPANY_NAME
 * @property string $LOGO
 * @property string $ADDRESS
 * @property string $RC
 * @property string $NINEA
 * @property string $NAF
 * @property string $FAX
 * @property string $EMAIL
 * @property string $PAYSLIP_NAME
 * @property string $CONVENTION
 * @property string $PHONE
 * @property string $FOOTER
 * @property string $SCHEME
 * @property string $COLOR_SCHEME
 * @property string $CURRENCY
 * @property string $ROUNDUP_STRATEGY
 * @property string $PAYSLIP_META
 * @property string $STATUS
 * @property int $DATE_POST
 *
 * @package App\Models
 */
class PayrollTemplate extends Model
{
	protected $table = 'payroll_templates';
	protected $primaryKey = 'ID_PAYROLL_TEMPLATE';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_PAYROLL_TEMPLATE' => 'int',
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		'NAME',
		'COMPANY_NAME',
		'LOGO',
		'ADDRESS',
		'RC',
		'NINEA',
		'NAF',
		'FAX',
		'EMAIL',
		'PAYSLIP_NAME',
		'CONVENTION',
		'PHONE',
		'FOOTER',
		'SCHEME',
		'COLOR_SCHEME',
		'CURRENCY',
		'ROUNDUP_STRATEGY',
		'PAYSLIP_META',
		'STATUS',
		'DATE_POST'
	];
}
