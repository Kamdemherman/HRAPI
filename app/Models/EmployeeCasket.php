<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EmployeeCasket
 * 
 * @property int $ID_EMPLOYEE_CASKET
 * @property int $ID_EMPLOYEE
 * @property string $NAME
 * @property string $SOCIAL_NUMBER
 * @property string $MATRICULE
 * @property string $REFERENCE
 * @property int $DATE_POST
 * @property string $TYPE
 * @property string $DECEASED_NAME
 * @property string $DATE_DECEASED
 * @property string $RELATIONSHIP
 * @property string $CATEGORY
 * @property string $SERVICE
 * @property string $ROLE
 * @property string $DATE_PAYMENT
 * @property string $PAYEE
 * @property int $RECEIVED_AMOUNT
 * @property string $STATUS
 *
 * @package App\Models
 */
class EmployeeCasket extends Model
{
	protected $table = 'employee_caskets';
	protected $primaryKey = 'ID_EMPLOYEE_CASKET';
	public $timestamps = false;

	protected $casts = [
		'ID_EMPLOYEE' => 'int',
		'DATE_POST' => 'int',
		'RECEIVED_AMOUNT' => 'int'
	];

	protected $fillable = [
		'ID_EMPLOYEE',
		'NAME',
		'SOCIAL_NUMBER',
		'MATRICULE',
		'REFERENCE',
		'DATE_POST',
		'TYPE',
		'DECEASED_NAME',
		'DATE_DECEASED',
		'RELATIONSHIP',
		'CATEGORY',
		'SERVICE',
		'ROLE',
		'DATE_PAYMENT',
		'PAYEE',
		'RECEIVED_AMOUNT',
		'STATUS'
	];
}
