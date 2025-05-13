<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PayrollSessionElement
 * 
 * @property int $ID_PAYROLL_SESSION_ELEMENT
 * @property int $ID_PAYROLL_SESSION
 * @property int $ID_PAYROLL_ELEMENT
 * @property string $FORMULA
 * @property string $CAP
 * @property string $STATUS
 * @property int $DATE_POST
 *
 * @package App\Models
 */
class PayrollSessionElement extends Model
{
	protected $table = 'payroll_session_elements';
	protected $primaryKey = 'ID_PAYROLL_SESSION_ELEMENT';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_PAYROLL_SESSION_ELEMENT' => 'int',
		'ID_PAYROLL_SESSION' => 'int',
		'ID_PAYROLL_ELEMENT' => 'int',
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		'ID_PAYROLL_SESSION',
		'ID_PAYROLL_ELEMENT',
		'FORMULA',
		'CAP',
		'STATUS',
		'DATE_POST'
	];
}
