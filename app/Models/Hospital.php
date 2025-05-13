<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Hospital
 * 
 * @property int $ID_HOSPITAL
 * @property string $REFERENCE
 * @property string $NAME
 * @property string $ADDRESS
 * @property string $PHONE
 * @property string $TOWN
 * @property string $RESPONSIBLE
 * @property string $EMAIL
 * @property int $DATE_POST
 *
 * @package App\Models
 */
class Hospital extends Model
{
	protected $table = 'hospitals';
	protected $primaryKey = 'ID_HOSPITAL';
	public $timestamps = false;

	protected $casts = [
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		'REFERENCE',
		'NAME',
		'ADDRESS',
		'PHONE',
		'TOWN',
		'RESPONSIBLE',
		'EMAIL',
		'DATE_POST'
	];
}
