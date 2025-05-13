<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EmployeeHousing
 * 
 * @property int $ID_EMPLOYEE_HOUSING
 * @property int $ID_HOUSING
 * @property int $ID_EMPLOYEE
 * @property string $REFERENCE_ASKING
 * @property string $DATE_ASKING
 * @property string $VALIDATOR
 * @property string $STATUS
 * @property int $DATE_POST
 * @property string $REFERENCE_ATTRIBUTION
 * @property string $DATE_ATTRIBUTION
 * @property string $REFERENCE_REVOCATION
 * @property string $DATE_REVOCATION
 * @property string $MATRICULE
 * @property string $NAME
 * @property string|null $REFERENCE
 * @property string $FULL_NAME
 *
 * @package App\Models
 */
class EmployeeHousing extends Model
{
	protected $table = 'employee_housings';
	protected $primaryKey = 'ID_EMPLOYEE_HOUSING';
	public $timestamps = false;

	protected $casts = [
		'ID_HOUSING' => 'int',
		'ID_EMPLOYEE' => 'int',
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		'ID_HOUSING',
		'ID_EMPLOYEE',
		'REFERENCE_ASKING',
		'DATE_ASKING',
		'VALIDATOR',
		'STATUS',
		'DATE_POST',
		'REFERENCE_ATTRIBUTION',
		'DATE_ATTRIBUTION',
		'REFERENCE_REVOCATION',
		'DATE_REVOCATION',
		'MATRICULE',
		'NAME',
		'REFERENCE',
		'FULL_NAME'
	];
}
