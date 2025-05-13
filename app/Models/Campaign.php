<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Campaign
 * 
 * @property int $ID_CAMPAIGN
 * @property string $REFERENCE
 * @property string $NAME
 * @property int $DATE_POST
 *
 * @package App\Models
 */
class Campaign extends Model
{
	protected $table = 'campaigns';
	protected $primaryKey = 'ID_CAMPAIGN';
	public $timestamps = false;

	protected $casts = [
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		'REFERENCE',
		'NAME',
		'DATE_POST'
	];
}
