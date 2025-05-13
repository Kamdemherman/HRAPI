<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PayrollFormula
 * 
 * @property int $ID_PAYROLL_FORMULA
 * @property string $NAME
 * @property string $FORMULA
 * @property string $DESCRIPTION
 * @property string $STATUS
 * @property int $DATE_POST
 * @property string|null $VARIABLES
 *
 * @package App\Models
 */
class PayrollFormula extends Model
{
	protected $table = 'payroll_formulas';
	protected $primaryKey = 'ID_PAYROLL_FORMULA';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_PAYROLL_FORMULA' => 'int',
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		'NAME',
		'FORMULA',
		'DESCRIPTION',
		'STATUS',
		'DATE_POST',
		'VARIABLES'
	];
}
