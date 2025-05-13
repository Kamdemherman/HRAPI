<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ApplicationsDoc
 * 
 * @property int $ID_APPLICATIONS_DOC
 * @property string $NAME
 * @property int $ID_APPLICATION
 * @property string $FILE_TYPE
 * @property string $FILE_EXT
 * @property string $LINK
 * @property string $DATE_POST
 *
 * @package App\Models
 */
class ApplicationsDoc extends Model
{
	protected $table = 'applications_docs';
	protected $primaryKey = 'ID_APPLICATIONS_DOC';
	public $timestamps = false;

	protected $casts = [
		'ID_APPLICATION' => 'int'
	];

	protected $fillable = [
		'NAME',
		'ID_APPLICATION',
		'FILE_TYPE',
		'FILE_EXT',
		'LINK',
		'DATE_POST'
	];
}
