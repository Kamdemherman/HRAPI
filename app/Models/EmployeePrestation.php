<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EmployeePrestation
 * 
 * @property int $ID_EMPLOYEE_PRESTATION
 * @property int $ID_EMPLOYEE
 * @property string $MATRICULE
 * @property string $NAME
 * @property string $TYPE
 * @property string $SOCIAL_NUMBER
 * @property string $REFERENCE
 * @property string $GRADE
 * @property string $SERVICE
 * @property string $FOLDER_STATUS
 * @property string $STATUS
 * @property int $DATE_POST
 * @property string $AMOUNT
 * @property string $PREVIOUS_REPORT
 * @property string $RECALL
 * @property string $REGULARISATION
 * @property string $NET_TO_PAY
 * @property string $PERCEIVED
 * @property string $REFERENCE_SLIP
 * @property string $DATE_SLIP
 *
 * @package App\Models
 */
class EmployeePrestation extends Model
{
	protected $table = 'employee_prestations';
	protected $primaryKey = 'ID_EMPLOYEE_PRESTATION';
	public $timestamps = false;

	protected $casts = [
		'ID_EMPLOYEE' => 'int',
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		'ID_EMPLOYEE',
		'MATRICULE',
		'NAME',
		'TYPE',
		'SOCIAL_NUMBER',
		'REFERENCE',
		'GRADE',
		'SERVICE',
		'FOLDER_STATUS',
		'STATUS',
		'DATE_POST',
		'AMOUNT',
		'PREVIOUS_REPORT',
		'RECALL',
		'REGULARISATION',
		'NET_TO_PAY',
		'PERCEIVED',
		'REFERENCE_SLIP',
		'DATE_SLIP'
	];
}
