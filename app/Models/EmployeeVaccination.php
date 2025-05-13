<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EmployeeVaccination
 * 
 * @property int $ID_EMPLOYEE_VACCINATION
 * @property int $ID_EMPLOYEE
 * @property int $ID_VACCIN
 * @property string $NAME
 * @property string $DATE_VACCIN
 * @property string $DATE_NEXT_VACCIN
 * @property string $OBSERVATION
 * @property int $DATE_POST
 *
 * @package App\Models
 */
class EmployeeVaccination extends Model
{
	protected $table = 'employee_vaccinations';
	protected $primaryKey = 'ID_EMPLOYEE_VACCINATION';
	public $timestamps = false;

	protected $casts = [
		'ID_EMPLOYEE' => 'int',
		'ID_VACCIN' => 'int',
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		'ID_EMPLOYEE',
		'ID_VACCIN',
		'NAME',
		'DATE_VACCIN',
		'DATE_NEXT_VACCIN',
		'OBSERVATION',
		'DATE_POST'
	];
}
