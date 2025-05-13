<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Medal
 * 
 * @property int $ID_MEDAL
 * @property string $NAME
 * @property string $TYPE
 * @property string $DESCRIPTION
 * @property int $DATE_POST
 *
 * @package App\Models
 */
class Medal extends Model
{
	protected $table = 'medals';
	protected $primaryKey = 'ID_MEDAL';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_MEDAL' => 'int',
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		'NAME',
		'TYPE',
		'DESCRIPTION',
		'DATE_POST'
	];
}
