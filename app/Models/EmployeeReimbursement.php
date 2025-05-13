<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EmployeeReimbursement
 * 
 * @property int $ID_EMPLOYEE_REMBURSEMENT
 * @property string $DATE_ASKING
 * @property string $INSURED_NUMBER
 * @property string $MATRICULE
 * @property string $NAME
 * @property string $PATIENT
 * @property string $AMOUNT
 * @property string $NBR
 * @property int $DATE_POST
 * @property int $ID_EMPLOYEE
 *
 * @package App\Models
 */
class EmployeeReimbursement extends Model
{
	protected $table = 'employee_reimbursements';
	protected $primaryKey = 'ID_EMPLOYEE_REMBURSEMENT';
	public $timestamps = false;

	protected $casts = [
		'DATE_POST' => 'int',
		'ID_EMPLOYEE' => 'int'
	];

	protected $fillable = [
		'DATE_ASKING',
		'INSURED_NUMBER',
		'MATRICULE',
		'NAME',
		'PATIENT',
		'AMOUNT',
		'NBR',
		'DATE_POST',
		'ID_EMPLOYEE'
	];
}
