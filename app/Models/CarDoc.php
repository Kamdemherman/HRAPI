<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CarDoc
 * 
 * @property int $ID_CAR_DOC
 * @property int $ID_CAR
 * @property string $NAME
 * @property string $LINK
 * @property string $FILE_EXT
 * @property string $FILE_TYPE
 * @property string $DATE_POST
 *
 * @package App\Models
 */
class CarDoc extends Model
{
	protected $table = 'car_docs';
	protected $primaryKey = 'ID_CAR_DOC';
	public $timestamps = false;

	protected $casts = [
		'ID_CAR' => 'int'
	];

	protected $fillable = [
		'ID_CAR',
		'NAME',
		'LINK',
		'FILE_EXT',
		'FILE_TYPE',
		'DATE_POST'
	];
}
