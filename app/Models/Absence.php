<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Absence
 * 
 * @property int $ID_ABSENCE
 * @property string $NAME
 * @property string $TYPE
 * @property string $DESCRIPTION
 * @property string $DURATION
 * @property string $PAYROLL_DEDUCTION
 * @property int $DATE_POST
 *
 * @package App\Models
 */
class Absence extends Model
{
	protected $table = 'absences';
	protected $primaryKey = 'ID_ABSENCE';
	public $timestamps = false;

	protected $casts = [
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		'NAME',
		'TYPE',
		'DESCRIPTION',
		'DURATION',
		'PAYROLL_DEDUCTION',
		'DATE_POST'
	];
}
