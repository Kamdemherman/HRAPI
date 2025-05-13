<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CarMonitoring
 * 
 * @property int $ID_CAR_MONITORING
 * @property int $ID_CAR
 * @property string $INTERVENTION
 * @property string $INTERVENTION_TYPE
 * @property string $DESCRIPTION
 * @property string $COST
 * @property string $DATE_INTERVENTION
 * @property string $STATUS
 * @property int $DATE_POST
 *
 * @package App\Models
 */
class CarMonitoring extends Model
{
	protected $table = 'car_monitorings';
	protected $primaryKey = 'ID_CAR_MONITORING';
	public $timestamps = false;

	protected $casts = [
		'ID_CAR' => 'int',
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		'ID_CAR',
		'INTERVENTION',
		'INTERVENTION_TYPE',
		'DESCRIPTION',
		'COST',
		'DATE_INTERVENTION',
		'STATUS',
		'DATE_POST'
	];
}
