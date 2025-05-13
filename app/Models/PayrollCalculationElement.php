<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PayrollCalculationElement
 * 
 * @property int $ID_PAYROLL_CALCULATION_ELEMENT
 * @property int $ID_PAYROLL_CALCULATION
 * @property int $ID_PAYROLL_SESSION_ELEMENT
 * @property string $VALUE
 * @property string $STATUS
 * @property int $DATE_POST
 *
 * @package App\Models
 */
class PayrollCalculationElement extends Model
{
	protected $table = 'payroll_calculation_elements';
	protected $primaryKey = 'ID_PAYROLL_CALCULATION_ELEMENT';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_PAYROLL_CALCULATION_ELEMENT' => 'int',
		'ID_PAYROLL_CALCULATION' => 'int',
		'ID_PAYROLL_SESSION_ELEMENT' => 'int',
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		'ID_PAYROLL_CALCULATION',
		'ID_PAYROLL_SESSION_ELEMENT',
		'VALUE',
		'STATUS',
		'DATE_POST'
	];
}
