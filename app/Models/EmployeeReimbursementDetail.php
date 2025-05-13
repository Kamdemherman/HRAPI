<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EmployeeReimbursementDetail
 * 
 * @property int $ID_EMPLOYEE_REIMBURSEMENT_DETAIL
 * @property int $ID_EMPLOYEE_REMBURSEMENT
 * @property string $DATE_ACT
 * @property string $ACT
 * @property string $AMOUNT
 * @property int $DATE_POST
 *
 * @package App\Models
 */
class EmployeeReimbursementDetail extends Model
{
	protected $table = 'employee_reimbursement_details';
	protected $primaryKey = 'ID_EMPLOYEE_REIMBURSEMENT_DETAIL';
	public $timestamps = false;

	protected $casts = [
		'ID_EMPLOYEE_REMBURSEMENT' => 'int',
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		'ID_EMPLOYEE_REMBURSEMENT',
		'DATE_ACT',
		'ACT',
		'AMOUNT',
		'DATE_POST'
	];
}
