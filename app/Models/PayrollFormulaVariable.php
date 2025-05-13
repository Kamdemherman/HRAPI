<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PayrollFormulaVariable
 * 
 * @property int $ID_PAYROLL_FORMULA_VARIABLE
 * @property string $NAME
 * @property string $EXAMPLE
 * @property string $VALUE
 * @property string $DESCRIPTION
 * @property string $STATUS
 * @property int $DATE_POST
 *
 * @package App\Models
 */
class PayrollFormulaVariable extends Model
{
	protected $table = 'payroll_formula_variables';
	protected $primaryKey = 'ID_PAYROLL_FORMULA_VARIABLE';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_PAYROLL_FORMULA_VARIABLE' => 'int',
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		'NAME',
		'EXAMPLE',
		'VALUE',
		'DESCRIPTION',
		'STATUS',
		'DATE_POST'
	];
}
