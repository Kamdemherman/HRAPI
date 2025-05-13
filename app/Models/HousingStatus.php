<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HousingStatus
 * 
 * @property int $ID_HOUSING_STATUS
 * @property int $ID_HOUSING
 * @property string $TYPE_STATUS
 * @property string $DATE_STATUS
 * @property int $DATE_POST
 * @property string $OBSERVATION
 * @property string $PARTICIPANTS
 *
 * @package App\Models
 */
class HousingStatus extends Model
{
	protected $table = 'housing_status';
	protected $primaryKey = 'ID_HOUSING_STATUS';
	public $timestamps = false;

	protected $casts = [
		'ID_HOUSING' => 'int',
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		'ID_HOUSING',
		'TYPE_STATUS',
		'DATE_STATUS',
		'DATE_POST',
		'OBSERVATION',
		'PARTICIPANTS'
	];
}
