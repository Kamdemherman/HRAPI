<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PayrollSalaryGrid
 * 
 * @property int $ID_PAYROLL_SALARY_GRID
 * @property int $ID_PAYROLL_CAT
 * @property string $NAME
 * @property string $BASE_SALARY
 * @property string $DESCRIPTION
 * @property string $STATUS
 * @property int $DATE_POST
 *
 * @package App\Models
 */
class PayrollSalaryGrid extends Model
{
	protected $table = 'payroll_salary_grids';
	protected $primaryKey = 'ID_PAYROLL_SALARY_GRID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_PAYROLL_SALARY_GRID' => 'int',
		'ID_PAYROLL_CAT' => 'int',
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		'ID_PAYROLL_CAT',
		'NAME',
		'BASE_SALARY',
		'DESCRIPTION',
		'STATUS',
		'DATE_POST'
	];
}
