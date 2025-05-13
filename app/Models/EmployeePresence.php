<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EmployeePresence
 * 
 * @property int $ID_EMPLOYEE_PRESENCE
 * @property int $ID_EMPLOYEE
 * @property int $ID_PRESENCE
 * @property string $REFERENCE
 * @property string $MATRICULE
 * @property string $DAY
 * @property string $START_TIME
 * @property string $END_TIME
 * @property string $STATUS
 * @property int $DATE_POST
 * @property string $MENTION
 * @property string $FULL_NAME
 *
 * @package App\Models
 */
class EmployeePresence extends Model
{
	protected $table = 'employee_presences';
	protected $primaryKey = 'ID_EMPLOYEE_PRESENCE';
	public $timestamps = false;

	protected $casts = [
		'ID_EMPLOYEE' => 'int',
		'ID_PRESENCE' => 'int',
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		'ID_EMPLOYEE',
		'ID_PRESENCE',
		'REFERENCE',
		'MATRICULE',
		'DAY',
		'START_TIME',
		'END_TIME',
		'STATUS',
		'DATE_POST',
		'MENTION',
		'FULL_NAME'
	];
}
