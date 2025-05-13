<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class History
 * 
 * @property int $ID_HISTORY
 * @property string $TYPE
 * @property string $REFERENCE
 * @property string $NAME
 * @property string $DESCRIPTION
 * @property int $DATE_POST
 *
 * @package App\Models
 */
class History extends Model
{
	protected $table = 'histories';
	protected $primaryKey = 'ID_HISTORY';
	public $timestamps = false;

	protected $casts = [
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		'TYPE',
		'REFERENCE',
		'NAME',
		'DESCRIPTION',
		'DATE_POST'
	];
}
