<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Housing
 * 
 * @property int $ID_HOUSING
 * @property string|null $REFERENCE
 * @property string $NAME
 * @property string $DESCRIPTION
 * @property string $OBSERVATION
 * @property string $LOCALISATION
 * @property int $DATE_POST
 * @property string $STATUS
 * @property string $TYPE
 *
 * @package App\Models
 */
class Housing extends Model
{
	protected $table = 'housings';
	protected $primaryKey = 'ID_HOUSING';
	public $timestamps = false;

	protected $casts = [
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		'REFERENCE',
		'NAME',
		'DESCRIPTION',
		'OBSERVATION',
		'LOCALISATION',
		'DATE_POST',
		'STATUS',
		'TYPE'
	];
}
