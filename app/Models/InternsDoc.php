<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class InternsDoc
 * 
 * @property int $ID_INTERNS_DOC
 * @property string $NAME
 * @property string $LINK
 * @property string $DATE_POST
 * @property string $FILE_EXT
 * @property string $FILE_TYPE
 * @property int $ID_INTERN
 *
 * @package App\Models
 */
class InternsDoc extends Model
{
	protected $table = 'interns_docs';
	protected $primaryKey = 'ID_INTERNS_DOC';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_INTERNS_DOC' => 'int',
		'ID_INTERN' => 'int'
	];

	protected $fillable = [
		'NAME',
		'LINK',
		'DATE_POST',
		'FILE_EXT',
		'FILE_TYPE',
		'ID_INTERN'
	];
}
