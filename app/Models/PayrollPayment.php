<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PayrollPayment
 * 
 * @property int $ID_PAYROLL_PAYMENT
 * @property int $ID_PAYROLL_CAlCULATION
 * @property string $PAID_AMOUNT
 * @property string $PAYMENT_DATE
 * @property string $PAYMENT_METHOD
 * @property int $STATUS
 * @property int $DATE_POST
 * @property string $DESCRIPTION
 *
 * @package App\Models
 */
class PayrollPayment extends Model
{
	protected $table = 'payroll_payments';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_PAYROLL_PAYMENT' => 'int',
		'ID_PAYROLL_CAlCULATION' => 'int',
		'STATUS' => 'int',
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		'ID_PAYROLL_PAYMENT',
		'ID_PAYROLL_CAlCULATION',
		'PAID_AMOUNT',
		'PAYMENT_DATE',
		'PAYMENT_METHOD',
		'STATUS',
		'DATE_POST',
		'DESCRIPTION'
	];
}
