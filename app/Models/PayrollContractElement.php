<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PayrollContractElement
 * 
 * @property int $ID_PAYROLL_CONTRACT_ELEMENT
 * @property int $ID_PAYROLL_CONTRACT
 * @property int $ID_PAYROLL_ELEMENT
 * @property string $FORMULA
 * @property string $CAP
 * @property string $STATUS
 * @property int $DATE_POST
 *
 * @package App\Models
 */
class PayrollContractElement extends Model
{
	protected $table = 'payroll_contract_elements';
	protected $primaryKey = 'ID_PAYROLL_CONTRACT_ELEMENT';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_PAYROLL_CONTRACT_ELEMENT' => 'int',
		'ID_PAYROLL_CONTRACT' => 'int',
		'ID_PAYROLL_ELEMENT' => 'int',
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		'ID_PAYROLL_CONTRACT',
		'ID_PAYROLL_ELEMENT',
		'FORMULA',
		'CAP',
		'STATUS',
		'DATE_POST'
	];
}
