<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AffectionType
 * 
 * @property int $ID_AFFECTION_TYPE
 * @property string $REFERENCE
 * @property string $NAME
 * @property string $DESCRIPTION
 * @property int $DATE_POST
 *
 * @package App\Models
 */
class AffectionType extends Model
{
	protected $table = 'affection_types';
	protected $primaryKey = 'ID_AFFECTION_TYPE';
	public $timestamps = false;

	protected $casts = [
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		'REFERENCE',
		'NAME',
		'DESCRIPTION',
		'DATE_POST'
	];
}
