<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HousingDoc
 * 
 * @property int $ID_HOUSING_DOC
 * @property int $ID_HOUSING
 * @property string $NAME
 * @property string $LINK
 * @property string $FILE_EXT
 * @property string $FILE_TYPE
 * @property string $DATE_POST
 *
 * @package App\Models
 */
class HousingDoc extends Model
{
	protected $table = 'housing_docs';
	protected $primaryKey = 'ID_HOUSING_DOC';
	public $timestamps = false;

	protected $casts = [
		'ID_HOUSING' => 'int'
	];

	protected $fillable = [
		'ID_HOUSING',
		'NAME',
		'LINK',
		'FILE_EXT',
		'FILE_TYPE',
		'DATE_POST'
	];
}
