<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PayrollElementCalculation
 * 
 * @property int $ID_PAYROLL_ELEMENT_CALCULATION
 * @property int $ID_PAYROLL_ELEMENT
 * @property int $ID_PAYROLL_CALCULATION
 * @property string $AMOUNT
 * @property string $VARIABLES
 * @property string $FORMULA
 * @property string $DESCRIPTION
 * @property int $DATE_POST
 *
 * @package App\Models
 */
class PayrollElementCalculation extends Model
{
	protected $table = 'payroll_element_calculations';
	protected $primaryKey = 'ID_PAYROLL_ELEMENT_CALCULATION';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_PAYROLL_ELEMENT_CALCULATION' => 'int',
		'ID_PAYROLL_ELEMENT' => 'int',
		'ID_PAYROLL_CALCULATION' => 'int',
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		'ID_PAYROLL_ELEMENT',
		'ID_PAYROLL_CALCULATION',
		'AMOUNT',
		'VARIABLES',
		'FORMULA',
		'DESCRIPTION',
		'DATE_POST'
	];
}
