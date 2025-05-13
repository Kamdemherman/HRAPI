<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PayrollSession
 * 
 * @property int $ID_PAYROLL_SESSION
 * @property int $ID_PAYROLL_TEMPLATE
 * @property string $PAYROLL_START_DATE
 * @property string $PAYROLL_END_DATE
 * @property string $NAME
 * @property string $STATUS
 * @property int $DATE_POST
 *
 * @package App\Models
 */
class PayrollSession extends Model
{
	protected $table = 'payroll_sessions';
	protected $primaryKey = 'ID_PAYROLL_SESSION';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_PAYROLL_SESSION' => 'int',
		'ID_PAYROLL_TEMPLATE' => 'int',
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		'ID_PAYROLL_TEMPLATE',
		'PAYROLL_START_DATE',
		'PAYROLL_END_DATE',
		'NAME',
		'STATUS',
		'DATE_POST'
	];
}
