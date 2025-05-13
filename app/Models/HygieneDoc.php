<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HygieneDoc
 * 
 * @property int $ID_HYGIENE_DOC
 * @property int $ID_HYGIENE
 * @property string $NAME
 * @property string $LINK
 * @property string $FILE_EXT
 * @property string $FILE_TYPE
 * @property string $DATE_POST
 *
 * @package App\Models
 */
class HygieneDoc extends Model
{
	protected $table = 'hygiene_docs';
	protected $primaryKey = 'ID_HYGIENE_DOC';
	public $timestamps = false;

	protected $casts = [
		'ID_HYGIENE' => 'int'
	];

	protected $fillable = [
		'ID_HYGIENE',
		'NAME',
		'LINK',
		'FILE_EXT',
		'FILE_TYPE',
		'DATE_POST'
	];
}
