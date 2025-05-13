<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class InternshipsDoc
 * 
 * @property int $ID_INTERNSHIPS_DOC
 * @property string $NAME
 * @property int $ID_INTERNSHIP
 * @property string $FILE_TYPE
 * @property string $FILE_EXT
 * @property string $LINK
 * @property string $DATE_POST
 *
 * @package App\Models
 */
class InternshipsDoc extends Model
{
	protected $table = 'internships_docs';
	protected $primaryKey = 'ID_INTERNSHIPS_DOC';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_INTERNSHIPS_DOC' => 'int',
		'ID_INTERNSHIP' => 'int'
	];

	protected $fillable = [
		'NAME',
		'ID_INTERNSHIP',
		'FILE_TYPE',
		'FILE_EXT',
		'LINK',
		'DATE_POST'
	];
}
