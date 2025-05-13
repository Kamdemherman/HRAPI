<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EmployeeCareVoucher
 * 
 * @property int $ID_EMPLOYEE_CARE_VOUCHER
 * @property int $ID_EMPLOYEE
 * @property string $BENEFICIARY
 * @property string $INSURED_NUMBER
 * @property string $MATRICULE
 * @property string $NAME
 * @property string $GRADE
 * @property string $CATEGORY
 * @property string $REFERENCE
 * @property int $DATE_POST
 * @property string $PRESCRIBER
 * @property string $MEDICAL_ACT
 * @property string $AMOUNT
 * @property string $APPROUVED
 *
 * @package App\Models
 */
class EmployeeCareVoucher extends Model
{
	protected $table = 'employee_care_vouchers';
	protected $primaryKey = 'ID_EMPLOYEE_CARE_VOUCHER';
	public $timestamps = false;

	protected $casts = [
		'ID_EMPLOYEE' => 'int',
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		'ID_EMPLOYEE',
		'BENEFICIARY',
		'INSURED_NUMBER',
		'MATRICULE',
		'NAME',
		'GRADE',
		'CATEGORY',
		'REFERENCE',
		'DATE_POST',
		'PRESCRIBER',
		'MEDICAL_ACT',
		'AMOUNT',
		'APPROUVED'
	];
}
