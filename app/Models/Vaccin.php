<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Vaccin
 * 
 * @property int $ID_VACCIN
 * @property string $REFERENCE
 * @property string $NAME
 * @property string $DESCRIPTION
 * @property string $TYPE
 * @property string $DURATION
 * @property int $DATE_POST
 *
 * @package App\Models
 */
class Vaccin extends Model
{
	protected $table = 'vaccins';
	protected $primaryKey = 'ID_VACCIN';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_VACCIN' => 'int',
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		'REFERENCE',
		'NAME',
		'DESCRIPTION',
		'TYPE',
		'DURATION',
		'DATE_POST'
	];
}
