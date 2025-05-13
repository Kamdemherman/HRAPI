<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Doc
 * 
 * @property int $ID_DOC
 * @property int $ID_APPLICANT
 * @property string $NAME
 * @property string $FILE_TYPE
 * @property string $FILE_EXT
 * @property string $LINK
 * @property string $DATE_POST
 *
 * @package App\Models
 */
class Doc extends Model
{
	protected $table = 'docs';
	protected $primaryKey = 'ID_DOC';
	public $timestamps = false;

	protected $casts = [
		'ID_APPLICANT' => 'int'
	];

	protected $fillable = [
		'ID_APPLICANT',
		'NAME',
		'FILE_TYPE',
		'FILE_EXT',
		'LINK',
		'DATE_POST'
	];
}
