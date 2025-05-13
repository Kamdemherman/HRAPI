<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class InternTimesheet
 * 
 * @property int $ID_INTERN_TIMESHEET
 * @property string $NAME
 * @property string $SUPERVISOR
 * @property string $TIME_START
 * @property string $TIME_END
 * @property string $NOTE
 * @property string $DATE_POST
 * @property string $DATE_SHEET
 * @property int $ID_INTERN
 *
 * @package App\Models
 */
class InternTimesheet extends Model
{
	protected $table = 'intern_timesheets';
	protected $primaryKey = 'ID_INTERN_TIMESHEET';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_INTERN_TIMESHEET' => 'int',
		'ID_INTERN' => 'int'
	];

	protected $fillable = [
		'NAME',
		'SUPERVISOR',
		'TIME_START',
		'TIME_END',
		'NOTE',
		'DATE_POST',
		'DATE_SHEET',
		'ID_INTERN'
	];
}
