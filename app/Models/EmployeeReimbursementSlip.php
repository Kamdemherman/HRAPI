<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EmployeeReimbursementSlip
 * 
 * @property int $ID_EMPLOYEE_REIMBURSEMENT_SLIP
 * @property int $ID_REMBURSEMENT_SLIP
 * @property int $ID_EMPLOYEE_REMBURSEMENT
 * @property int $ID_EMPLOYEE
 * @property string $MATRICULE
 * @property string $INSURED_NUMBER
 * @property string $NAME
 * @property string $SHEET_NUMBER
 * @property string $DATE_CARE
 * @property string $PATIENT
 * @property string $AMOUNT
 * @property string $BASE
 * @property string $RATE
 * @property string $REIMBURSEMENT
 * @property string $REMAINS
 * @property string $MOTIF
 * @property int $DATE_POST
 *
 * @package App\Models
 */
class EmployeeReimbursementSlip extends Model
{
	protected $table = 'employee_reimbursement_slips';
	protected $primaryKey = 'ID_EMPLOYEE_REIMBURSEMENT_SLIP';
	public $timestamps = false;

	protected $casts = [
		'ID_REMBURSEMENT_SLIP' => 'int',
		'ID_EMPLOYEE_REMBURSEMENT' => 'int',
		'ID_EMPLOYEE' => 'int',
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		'ID_REMBURSEMENT_SLIP',
		'ID_EMPLOYEE_REMBURSEMENT',
		'ID_EMPLOYEE',
		'MATRICULE',
		'INSURED_NUMBER',
		'NAME',
		'SHEET_NUMBER',
		'DATE_CARE',
		'PATIENT',
		'AMOUNT',
		'BASE',
		'RATE',
		'REIMBURSEMENT',
		'REMAINS',
		'MOTIF',
		'DATE_POST'
	];
}
