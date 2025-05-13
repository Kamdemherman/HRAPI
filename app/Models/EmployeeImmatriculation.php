<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EmployeeImmatriculation
 * 
 * @property int $ID_EMPLOYEE_IMMATRICULATION
 * @property int $ID_EMPLOYEE
 * @property string $NAME
 * @property string $MATRICULE
 * @property string $REFERENCE
 * @property string $LIBEL
 * @property string $OBSERVATION
 * @property string $STATUS
 * @property int $DATE_POST
 *
 * @package App\Models
 */
class EmployeeImmatriculation extends Model
{
	protected $table = 'employee_immatriculations';
	protected $primaryKey = 'ID_EMPLOYEE_IMMATRICULATION';
	public $timestamps = false;

	protected $casts = [
		'ID_EMPLOYEE' => 'int',
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		'ID_EMPLOYEE',
		'NAME',
		'MATRICULE',
		'REFERENCE',
		'LIBEL',
		'OBSERVATION',
		'STATUS',
		'DATE_POST'
	];
}
