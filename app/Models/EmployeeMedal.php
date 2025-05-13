<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EmployeeMedal
 * 
 * @property int $ID_EMPLOYEE_MEDAL
 * @property string $MATRICULE
 * @property string $NAME
 * @property int $ID_MEDAL
 * @property int $ID_EMPLOYEE
 * @property string $REQUEST
 * @property string $STATUS
 * @property string $DATE_REQUEST
 * @property string $MINISTERIAL_NOTE
 * @property string $DATE_MINISTERIAL
 * @property string $DATE_MEDAL
 * @property string $REWARD
 * @property string $DATE_POST
 * @property string $OBSERVATION
 * @property string $FULL_NAME
 *
 * @package App\Models
 */
class EmployeeMedal extends Model
{
	protected $table = 'employee_medals';
	protected $primaryKey = 'ID_EMPLOYEE_MEDAL';
	public $timestamps = false;

	protected $casts = [
		'ID_MEDAL' => 'int',
		'ID_EMPLOYEE' => 'int'
	];

	protected $fillable = [
		'MATRICULE',
		'NAME',
		'ID_MEDAL',
		'ID_EMPLOYEE',
		'REQUEST',
		'STATUS',
		'DATE_REQUEST',
		'MINISTERIAL_NOTE',
		'DATE_MINISTERIAL',
		'DATE_MEDAL',
		'REWARD',
		'DATE_POST',
		'OBSERVATION',
		'FULL_NAME'
	];
}
