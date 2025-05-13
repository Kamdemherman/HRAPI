<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Quota
 * 
 * @property int $ID_QUOTA
 * @property string $MENTHOR
 * @property int $NBR
 * @property int $USED
 * @property string $DATE_POST
 * @property int $ID_INTERNSHIP
 *
 * @package App\Models
 */
class Quota extends Model
{
	protected $table = 'quotas';
	protected $primaryKey = 'ID_QUOTA';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_QUOTA' => 'int',
		'NBR' => 'int',
		'USED' => 'int',
		'ID_INTERNSHIP' => 'int'
	];

	protected $fillable = [
		'MENTHOR',
		'NBR',
		'USED',
		'DATE_POST',
		'ID_INTERNSHIP'
	];
}
