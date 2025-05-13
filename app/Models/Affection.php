<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Affection
 * 
 * @property int $ID_AFFECTION
 * @property int $ID_AFFECTION_TYPE
 * @property string $REFERENCE
 * @property string $REFERENCE_AFFECTION
 * @property string $DESCRIPTION
 * @property string $NAME
 * @property int $DATE_POST
 *
 * @package App\Models
 */
class Affection extends Model
{
	protected $table = 'affections';
	protected $primaryKey = 'ID_AFFECTION';
	public $timestamps = false;

	protected $casts = [
		'ID_AFFECTION_TYPE' => 'int',
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		'ID_AFFECTION_TYPE',
		'REFERENCE',
		'REFERENCE_AFFECTION',
		'DESCRIPTION',
		'NAME',
		'DATE_POST'
	];
}
