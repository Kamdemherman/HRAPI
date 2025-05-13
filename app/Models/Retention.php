<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Retention
 * 
 * @property int $ID_RETENTION
 * @property string $NAME
 * @property string $DESCRIPTION
 * @property string $REFERENCE
 * @property int $DATE_POST
 *
 * @package App\Models
 */
class Retention extends Model
{
	protected $table = 'retentions';
	protected $primaryKey = 'ID_RETENTION';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_RETENTION' => 'int',
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		'NAME',
		'DESCRIPTION',
		'REFERENCE',
		'DATE_POST'
	];
}
