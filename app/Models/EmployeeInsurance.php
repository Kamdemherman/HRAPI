<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EmployeeInsurance
 * 
 * @property int $ID_EMPLOYEE_INSURANCE
 * @property int $ID_EMPLOYEE
 * @property string $NAME
 * @property string $MATRICULE
 * @property string $DATE_BIRTH
 * @property string $SEX
 * @property string $TYPE
 * @property string $CATEGORY
 * @property string $INSURED_NUMBER
 * @property int $DATE_POST
 * @property string $DATE_ATTRIBUTION
 * @property string $PREMIUM_AMOUNT
 * @property string $COVERAGE
 * @property string $CEILING_AMOUNT
 * @property string $NAME_SECOND
 * @property string $DATE_BIRTH_SECOND
 * @property string $SEX_SECOND
 * @property string $RELASHIONSHIP
 *
 * @package App\Models
 */
class EmployeeInsurance extends Model
{
	protected $table = 'employee_insurances';
	protected $primaryKey = 'ID_EMPLOYEE_INSURANCE';
	public $timestamps = false;

	protected $casts = [
		'ID_EMPLOYEE' => 'int',
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		'ID_EMPLOYEE',
		'NAME',
		'MATRICULE',
		'DATE_BIRTH',
		'SEX',
		'TYPE',
		'CATEGORY',
		'INSURED_NUMBER',
		'DATE_POST',
		'DATE_ATTRIBUTION',
		'PREMIUM_AMOUNT',
		'COVERAGE',
		'CEILING_AMOUNT',
		'NAME_SECOND',
		'DATE_BIRTH_SECOND',
		'SEX_SECOND',
		'RELASHIONSHIP'
	];
}
